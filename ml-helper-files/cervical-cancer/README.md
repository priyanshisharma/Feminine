This module of the project has been created with the help of the Microsoft Azure Machine Learning Software Development Kit. We have used automated machine learning as well as hyperparameter tuning using Hyperdrive.

The files `automl.ipynb` and `hyperparameter_tuning.ipynb` containg the respective code and documentation.

We have created 4 separate models for four separate target variables.

## Hinselmann
* Model - SparseNormalizer, Extreme Random Trees

* Average Precision Score Weighted - 0.94
* Accuracy - 0.93

## Cytology
* Model - VotingEnsemble
    * "ensembled_iterations": "[66, 61, 68, 59, 73, 41, 27, 50]",
    * "ensembled_algorithms": "['KNN', 'KNN', 'KNN', 'KNN', 'KNN', 'LightGBM', 'SVM', 'XGBoostClassifier']"
    * "ensemble_weights": "[0.21428571428571427, 0.07142857142857142, 0.14285714285714285, 0.07142857142857142, 0.07142857142857142, 0.21428571428571427, 0.14285714285714285, 0.07142857142857142]",

* Average Precision Score Weighted - 0.92

## Schiller
* Model - VotingEnsemble
    * "ensembled_iterations": "[6, 23, 18, 24, 25, 7, 13]",
    * "ensembled_algorithms": "['ExtremeRandomTrees', 'KNN', 'RandomForest', 'KNN', 'ExtremeRandomTrees', 'KNN', 'ExtremeRandomTrees']",
    * "ensemble_weights": "[0.1, 0.1, 0.1, 0.2, 0.1, 0.3, 0.1]",

* Average Precision Score Weighted - 0.92
* Accuracy - 0.93

## Biopsy
* Model - VotingEnsemble
    * "ensembled_iterations": "[0, 14, 15, 6, 26]",
    * "ensembled_algorithms": "['LightGBM', 'RandomForest', 'XGBoostClassifier', 'ExtremeRandomTrees', 'XGBoostClassifier']",
    * "ensemble_weights": "[0.3333333333333333, 0.16666666666666666, 0.16666666666666666, 0.16666666666666666, 0.16666666666666666]"

* Average Precision Score Weighted - 0.90
