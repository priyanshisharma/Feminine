from rest_framework import serializers

class PredSerializer(serializers.Serializer):
    '''This serializer takes in information required to
    predict cervical cancer risk.'''

    #all data needs to be numeric
    age = serializers.CharField(allow_blank=False) #numeric
    number_of_sexual_partners = serializers.CharField(allow_blank=False)
    age_of_first_sexual_intercourse = serializers.CharField(allow_blank=False) #numeric
    smokes = serializers.CharField(allow_blank=False) #0.0 for false, 1.0 for true
    smokes_years = serializers.CharField(allow_blank=False)
    smokes_packs_per_year = serializers.CharField(allow_blank=False)
    number_of_pregnancies = serializers.CharField(allow_blank=False)
    hormonal_contraceptives = serializers.CharField(allow_blank=False)
    hormonal_contraceptives_years = serializers.CharField(allow_blank=False)
    IUD = serializers.CharField(allow_blank=False) #0.0 for false, 1.0 for true
    IUD_years =serializers.CharField(allow_blank=False)
    STDs = serializers.CharField(allow_blank=False) #0.0 for false, 1.0 for true
    STDs_number = serializers.CharField(allow_blank=False)
    STDs_condylomatosis = serializers.CharField(allow_blank=False)#0.0 for false, 1.0 for true
    STDs_vaginal_condylomatosis = serializers.CharField(allow_blank=False) #0.0 for false, 1.0 for true
    STDs_vulvo_perineal_condylomatosis =serializers.CharField(allow_blank=False) #0.0 for false, 1.0 for true
    STDs_syphilis = serializers.CharField(allow_blank=False) #0.0 for false, 1.0 for true
    STDs_pelvic_inflammatory_disease_= serializers.CharField(allow_blank=False) #0.0 for false, 1.0 for true
    STDs_genital_herpes = serializers.CharField(allow_blank=False) #0.0 for false, 1.0 for true
    STDs_molluscum_contagiosum = serializers.CharField(allow_blank=False) #0.0 for false, 1.0 for true
    STDs_HIV = serializers.CharField(allow_blank=False) #0.0 for false, 1.0 for true
    STDs_HepatitisB = serializers.CharField(allow_blank=False) #0.0 for false, 1.0 for true
    STDs_HPV = serializers.CharField(allow_blank=False)#0.0 for false, 1.0 for true
    STDs_Number_of_diagnosis = serializers.CharField(allow_blank=False)
    Dx_Cancer= serializers.CharField(allow_blank=False)
    Dx_CIN= serializers.CharField(allow_blank=False)
    Dx_HPV= serializers.CharField(allow_blank=False)
    Dx = serializers.CharField(allow_blank=False)
