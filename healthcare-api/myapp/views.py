'''This module defines APIs that maybe used for analysing the
risk of having cervical cancer in a woman'''
from pathlib import Path
import pickle
import pandas as pd
from rest_framework.decorators import api_view
from rest_framework.response import Response
from rest_framework import status
from drf_yasg.utils import swagger_auto_schema
#from utils.swagger import set_example
from .serializers import PredSerializer, PCOSSerializer
from . import responses

@swagger_auto_schema(
        operation_id='predict_cervical_cancer',
        method = 'post',
        request_body=PredSerializer
        #responses={
        #    '200': set_example(responses.cc_200),
        #    '400': set_example(responses.missing_value_400)
        #},

)
@api_view(['POST'])
def cervical_cancer(request):
    '''
    This API takes information about the patient as input and predicts
    whether the person is at risk of cervical cancer by predicting the
    result of a biopsy, schiller test, hinselmann test and citology test
    as negative or positive.
    '''
    serializer = PredSerializer(data = request.data)

    if serializer.is_valid():

        #Preparing Data for the model
        val = dict()
        val["Age"] = float(request.data.get("age"))
        val["Number of sexual partners"] = float(request.data.get("number_of_sexual_partners"))
        val["First sexual intercourse"] = float(request.data.get("age_of_first_sexual_intercourse"))
        val["Num of pregnancies"] = float(request.data.get("number_of_pregnancies"))
        val["Smokes"] = float(request.data.get("smokes"))
        val["Smokes (years)"] = float(request.data.get("smokes_years"))
        val["Smokes (packs/year)"] = float(request.data.get("smokes_packs_per_year"))
        val["Hormonal Contraceptives"] = float(request.data.get("hormonal_contraceptives"))
        val["Hormonal Contraceptives (years)"] = float(request.data.get("hormonal_contraceptives_years"))
        val["IUD"] = float(request.data.get("IUD"))
        val["IUD (years)"] = float(request.data.get("IUD_years"))
        val["STDs"] = float(request.data.get("STDs"))
        val["STDs (number)"] = float(request.data.get("STDs_number"))
        val["STDs:condylomatosis"] = float(request.data.get("STDs_condylomatosis"))
        val["STDs:vaginal condylomatosis"] = float(request.data.get("STDs_vaginal_condylomatosis"))
        val["STDs:vulvo-perineal condylomatosis"] = float(request.data.get("STDs_vulvo_perineal_condylomatosis"))
        val["STDs:syphilis"] = float(request.data.get("STDs_syphilis"))
        val["STDs:pelvic inflammatory disease"] = float(request.data.get("STDs_pelvic_inflammatory_disease_"))
        val["STDs:genital herpes"] = float(request.data.get("STDs_genital_herpes"))
        val["STDs:molluscum contagiosum"] = float(request.data.get("STDs_molluscum_contagiosum"))
        val["STDs:HIV"] = float(request.data.get("STDs_HIV"))
        val["STDs:Hepatitis B"] = float(request.data.get("STDs_HepatitisB"))
        val["STDs:HPV"] = float(request.data.get("STDs_HPV"))
        val["STDs: Number of diagnosis"] = float(request.data.get("STDs_Number_of_diagnosis"))
        val["Dx:Cancer"] = float(request.data.get("Dx_Cancer"))
        val["Dx:CIN"] = float(request.data.get("Dx_CIN"))
        val["Dx:HPV"] = float(request.data.get("Dx_HPV"))
        val["Dx"] = float(request.data.get("Dx")) #Dx stands for diagnosis
        val["Column1"] = 0.0

        chk = pd.DataFrame(val, index=[0])


        return_obj = dict() #will contain predictions to be returned

        #Predicting Hinselmann
        model_hinselmann_loc = Path('./myapp/ml-models/hinselmannmodel.pkl').absolute()
        model_hinselmann = pickle.load(open(model_hinselmann_loc, 'rb'))
        return_obj["Hinselmann"] = model_hinselmann.predict(chk)[0]

        #Predicting Citology
        model_citology_loc = Path('./myapp/ml-models/citologymodel.pkl').absolute()
        model_citology = pickle.load(open(model_citology_loc, 'rb'))
        return_obj["Cytology"] = model_citology.predict(chk)[0]

        #Predicting Schiller
        model_schiller_loc = Path('./myapp/ml-models/schillermodel.pkl').absolute()
        model_schiller = pickle.load(open(model_schiller_loc, 'rb'))
        return_obj["Schiller"] = model_schiller.predict(chk)[0]

        #Predicting Biopsy
        model_biopsy_loc = Path('./myapp/ml-models/biopsymodel.pkl').absolute()
        model_biopsy = pickle.load(open(model_biopsy_loc, 'rb'))
        return_obj["Biopsy"] = model_biopsy.predict(chk)[0]


        return Response(return_obj, status.HTTP_200_OK)

    return_obj = serializer.errors
    return Response(return_obj, status.HTTP_400_BAD_REQUEST)

@swagger_auto_schema(
        operation_id='predict_pcos',
        method = 'post',
        request_body=PCOSSerializer
        #responses={
        #    '200': set_example(responses.cc_200),
        #    '400': set_example(responses.missing_value_400)
        #},

)
@api_view(['POST'])
def pcos(request):
    '''
    This API takes information about the suspect as input and predicts
    whether the person is at risk of pcos or not.
    '''
    serializer = PCOSSerializer(data = request.data)

    if serializer.is_valid():
        chk = dict(request.data)
        chk["Column1"] = 0.0
        chk = pd.DataFrame(chk, index=[0])


        return_obj = dict() #will contain predictions to be returned

        #Predicting
        model_pcos_loc = Path('./myapp/ml-models/pcosmodel.pkl').absolute()
        model_pcos = pickle.load(open(model_pcos_loc, 'rb'))
        return_obj["pcos"] = model_pcos.predict(chk)[0]

        return Response(return_obj, status.HTTP_200_OK)

    return_obj = serializer.errors
    return Response(return_obj, status.HTTP_400_BAD_REQUEST)