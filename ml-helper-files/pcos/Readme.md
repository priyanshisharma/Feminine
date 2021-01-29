This module of the project has been created with the help of the Microsoft Azure Machine Learning Software Development Kit's automated machine learning.

The files `pcos.ipynb` containg the respective code and documentation.

The model hence generated has the following attributes:

* Model - VotingEnsemble
    * "ensembled_iterations": "[17, 0, 1, 24, 6, 25]",
    * "ensembled_algorithms":"['GradientBoosting', 'LightGBM', 'XGBoostClassifier', 'GradientBoosting', 'ExtremeRandomTrees', 'LogisticRegression']"
    * "ensemble_weights": "[0.16666666666666666, 0.16666666666666666, 0.16666666666666666, 0.16666666666666666, 0.16666666666666666, 0.16666666666666666]",

* Average Precision Score Weighted - 0.98
* Accuracy - 0.96


**References**
* [A Critical Study of Polycystic Ovarian Syndrome (PCOS) Classification Techniques](https://www.ijcem.org/papers072018/ijcem_072018_01.pdf)