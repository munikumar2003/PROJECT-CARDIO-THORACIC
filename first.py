import sys
import json
import numpy as np
import pandas as pd

if len(sys.argv) > 1:
    try:
        # Debug print to check input
        json_data = sys.argv[1]
        #print("Received JSON data: " + json_data)
        
        # Parse the JSON data
        '''try:
            data = json.loads(json_data)
            print("Parsed data: ", data)
        except:
            print("Error.....")'''
        
        # Proceed with your model processing
        df = pd.read_excel("newdata.xlsx", sheet_name="Sheet3")
        from sklearn.model_selection import train_test_split
        from sklearn.naive_bayes import GaussianNB

        df = df.replace(r'\u200b', '', regex=True)
        df = df.apply(pd.to_numeric, errors='coerce')
        df = df.dropna()

        X = df.drop(['target'], axis=1)
        y = df['target']

        X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.10, random_state=5)
        model = GaussianNB().fit(X_train, y_train)
        numbers = json.loads(json_data)
        num = []
        for x in numbers:
            num.append(x)
        #print(num)
        features=X.columns
        X_f=pd.DataFrame([num],columns=features)
        #X_f = np.array(num).reshape(1, -1)
        prediction_test = model.predict(X_f)

        result = {'prediction': prediction_test.tolist()}
        print(json.dumps(result))
    except Exception as e:
        result = {"error": str(e)}
        print(json.dumps(result))
else:
    print(json.dumps({"error": "No input data received"}))
