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


class PCOSSerializer(serializers.Serializer):
    '''This serializer takes in information required to
    risk of PCOS.'''

    regular_periods = serializers.CharField(allow_blank=False)
    rapid_weight_gain =  serializers.CharField(allow_blank=False)
    excess_hair = serializers.CharField(allow_blank=False)
    dark_patches = serializers.CharField(allow_blank=False)
    pimples = serializers.CharField(allow_blank=False)
    depression_and_anxiety = serializers.CharField(allow_blank=False)
    diabetic_hypertension_family_history =serializers.CharField(allow_blank=False)
    body_weight_maintain_difficulty = serializers.CharField(allow_blank=False)
    oily_skin = serializers.CharField(allow_blank=False)
    hair_strength_loss = serializers.CharField(allow_blank=False)
    eat_frequency = serializers.CharField(allow_blank=False)
    regular_excercise = serializers.CharField(allow_blank=False)
    sleep_time = serializers.CharField(allow_blank=False)
    wake_time = serializers.CharField(allow_blank=False)
    hostel_stress = serializers.CharField(allow_blank=False)
    personal_stress = serializers.CharField(allow_blank=False)
    peer_pressure = serializers.CharField(allow_blank=False)
    dietary_stress = serializers.CharField(allow_blank=False)
    fast_food_frequency = serializers.CharField(allow_blank=False)
