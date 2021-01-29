# Healthcare APIs

## Setup and run

1. Create a virtual environment with Python3.7: `virtualenv env -p python3.7`. If you dont have `python3.7` yet then you can install it with:
    1. linux(ubuntu/debian) - `sudo apt install python3.7`
    1. windows - Download installer from https://www.python.org/downloads/release/python-370/.
1. Activate the virtual environment: `source env/bin/activate`
1. Install all the dependencies in `requirements.txt` file: `pip install -r requirements.txt`
1. Migrate the migrations: `python manage.py migrate`
1. Run the app: `python manage.py runserver`
1. Navigate to http://localhost:8000 in your browser
1. When you are done using the app, deactivate the virtual environment: `deactivate`


# Sample Input

We have the APIs for predicting Cervical Cancer at `cervicalcancer/` endpoint.
It takes Sample Input as:

The input contains age, number of sexual partners, age of first sexual intercourse, number of pregnancies, smoking habits,
history of contraceptives (hormonal and IUD), history of Sexual Transmitted Diseases and other Diagnosis.

```
{
    "age": "20.0",
    "number_of_sexual_partners": "2.0",
    "age_of_first_sexual_intercourse": "16.0",
    "number_of_pregnancies": "2.316400580551524",
    "smokes": "0.0",
    "smokes_years": "0.0",
    "smokes_packs_per_year": "0.0",
    "hormonal_contraceptives": "1.0",
    "hormonal_contraceptives_years": "0.75",
    "IUD": "0.0",
    "IUD_years": "0.0",
    "STDs": "0.0",
    "STDs_number": "0.0",
    "STDs_condylomatosis": "0.0",
    "STDs_vaginal_condylomatosis": "0.0",
    "STDs_vulvo_perineal_condylomatosis": "0.0",
    "STDs_syphilis": "0.0",
    "STDs_pelvic_inflammatory_disease_": "0.0",
    "STDs_genital_herpes": "0.0",
    "STDs_molluscum_contagiosum":"0.0",
    "STDs_HIV": "0.0",
    "STDs_HepatitisB": "0.0",
    "STDs_HPV": "0.0",
    "STDs_Number_of_diagnosis": "0.0",
    "Dx_Cancer": "0.0",
    "Dx_CIN": "0.0",
    "Dx_HPV": "0.0",
    "Dx": "0.0"
}
```

and gives output as:

```
{
    "Hinselmann": 0.0,
    "Cytology": 0.0,
    "Schiller": 0.0,
    "Biopsy": 0.0
}
```

|Target Variable|Purpose|
|-|-|
|Hinselmann|A test to confirm or disconfirm the existence of any precancerous cells in the cervix.|
|Cytology|It is a method of cervical screening used to detect potentially precancerous and cancerous processes in the cervix or colon|
|Schiller|Schiller's test or Schiller's Iodine test is a medical test in which iodine solution is applied to the cervix in order to diagnose cervical cancer|
|Biopsy|A cervical biopsy is a procedure to remove tissue from the cervix to test for abnormal or precancerous conditions, or cervical cancer. This prediction is the final test for cervical cancer.|
