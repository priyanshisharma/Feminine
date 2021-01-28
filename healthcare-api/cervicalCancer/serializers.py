from rest_framework import serializers

class PredSerializer(serializers.Serializer):
    '''This serializer takes in information required to
    predict cervical cancer risk.'''

    age = serializers.FloatField(min_value=0.0)
    number_of_sexual_partners = serializers.FloatField(min_value=0.0)
    age_of_first_sexual_intercourse = serializers.FloatField(min_value=0.0)
    smokes = serializers.FloatField(min_value=0.0, max_value=1.0) #0.0 for false, 1.0 for true
    smokes_years = serializers.FloatField(min_value=0.0)
    smokes_packs_per_year = serializers.FloatField(min_value=0.0)
    number_of_pregnancies: serializers.FloatField(min_value=0.0)
    hormonal_contraceptives = serializers.FloatField(min_value=0.0, max_value=1.0)
    hormonal_contraceptives_years = serializers.FloatField(min_value=0.0)
    IUD = serializers.FloatField(min_value=0.0, max_value=1.0) #0.0 for false, 1.0 for true
    IUD_years =serializers.FloatField(min_value=0.0)
    STDs = serializers.FloatField(min_value=0.0, max_value=1.0) #0.0 for false, 1.0 for true
    STDs_number = serializers.FloatField(min_value=0.0)
    STDs_condylomatosis = serializers.FloatField(min_value=0.0, max_value=1.0) #0.0 for false, 1.0 for true
    STDs_vaginal_condylomatosis = serializers.FloatField(min_value=0.0, max_value=1.0) #0.0 for false, 1.0 for true
    STDs_vulvo_perineal_condylomatosis = serializers.FloatField(min_value=0.0, max_value=1.0) #0.0 for false, 1.0 for true
    STDs_syphilis = serializers.FloatField(min_value=0.0, max_value=1.0) #0.0 for false, 1.0 for true
    STDs_pelvic_inflammatory_disease_= serializers.FloatField(min_value=0.0, max_value=1.0) #0.0 for false, 1.0 for true
    STDs_genital_herpes = serializers.FloatField(min_value=0.0, max_value=1.0) #0.0 for false, 1.0 for true
    STDs_molluscum_contagiosum = serializers.FloatField(min_value=0.0, max_value=1.0) #0.0 for false, 1.0 for true
    STDs_HIV = serializers.FloatField(min_value=0.0, max_value=1.0) #0.0 for false, 1.0 for true
    STDs_HepatitisB = serializers.FloatField(min_value=0.0, max_value=1.0) #0.0 for false, 1.0 for true
    STDs_HPV = serializers.FloatField(min_value=0.0, max_value=1.0) #0.0 for false, 1.0 for true
    STDs_Number_of_diagnosis = serializers.FloatField(min_value=0.0)
    Dx_Cancer= serializers.FloatField(min_value=0.0)
    Dx_CIN= serializers.FloatField(min_value=0.0)
    Dx_HPV= serializers.FloatField(min_value=0.0)
    Dx = serializers.FloatField(min_value=0.0)
