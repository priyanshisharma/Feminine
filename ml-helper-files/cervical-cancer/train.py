
from sklearn.linear_model import LogisticRegression
from sklearn.metrics import average_precision_score
import argparse
import os
import numpy as np
from sklearn.metrics import mean_squared_error
import joblib
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import OneHotEncoder
import pandas as pd
from azureml.core.run import Run
from azureml.data.dataset_factory import TabularDatasetFactory

def clean_data(data):
    
    df = data.to_pandas_dataframe()

    df = df.replace(['?'],[np.nan]) 
    df = df.replace(['<'],[np.nan])

    list = df.columns
    for i in list:
        df[i] = df[i].astype(float)

    df.drop(["STDs: Time since first diagnosis","STDs: Time since last diagnosis"], axis = 1, inplace = True)
    df.drop(["STDs:AIDS","STDs:cervical condylomatosis"],axis=1,inplace=True)

    liste =  ["STDs", "STDs (number)", "STDs:condylomatosis", "STDs:vaginal condylomatosis", \
          "STDs:vulvo-perineal condylomatosis", "STDs:syphilis", "STDs:pelvic inflammatory disease", "STDs:genital herpes", \
          "STDs:molluscum contagiosum",  "STDs:HIV", "STDs:Hepatitis B", "STDs:HPV"]
    
    for m in liste:
        df[m] = df[m].fillna(0.0)

    df = df.dropna(subset=['Smokes', 'Hormonal Contraceptives', 'IUD'])
    df["Number of sexual partners"] = df["Number of sexual partners"].fillna(np.mean(df["Number of sexual partners"]))
    df["First sexual intercourse"] = df["First sexual intercourse"].fillna(np.mean(df["First sexual intercourse"]))
    df["Num of pregnancies"] = df["Num of pregnancies"].fillna(np.mean(df["Num of pregnancies"]))
    
    y = df.pop("Biopsy")
    X = df.drop(["Hinselmann", "Schiller", "Citology"], axis=1)

    return X, y

def main():
    # Add arguments to script
    parser = argparse.ArgumentParser()

    parser.add_argument('--C', type=float, default=1.0, help="Inverse of regularization strength. Smaller values cause stronger regularization")
    parser.add_argument('--max_iter', type=int, default=100, help="Maximum number of iterations to converge")

    args = parser.parse_args()

    run = Run.get_context()

    run.log("Regularization Strength:", np.float(args.C))
    run.log("Max iterations:", np.int(args.max_iter))

    #Create TabularDataset using TabularDatasetFactory
    # Data is located at:
    # https://archive.ics.uci.edu/ml/machine-learning-databases/00383/risk_factors_cervical_cancer.csv

    path_train = "https://archive.ics.uci.edu/ml/machine-learning-databases/00383/risk_factors_cervical_cancer.csv"
    ds = TabularDatasetFactory.from_delimited_files(path=path_train)
    
    x, y = clean_data(ds)

    #Split data into train and test sets.
    x_train, x_test, y_train, y_test = train_test_split(x, y, test_size=0.25)

    model = LogisticRegression(C=args.C, max_iter=args.max_iter).fit(x_train, y_train)

    predictions = model.predict(x_test)
    avg_prec_sc = average_precision_score(y_test, predictions, average='weighted')
    run.log("average_precision_score_weighted", np.float(avg_prec_sc))

if __name__ == '__main__':
    main()