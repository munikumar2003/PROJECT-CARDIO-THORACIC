from django.views.decorators.csrf import csrf_exempt
from django.http import JsonResponse
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.naive_bayes import GaussianNB
import json
@csrf_exempt
def run_script(request):
    if True:
        try:
            if True:
                data=json.loads(request.body)
                df = pd.read_excel("/home/munikumar/website/website/newdata.xlsx", sheet_name="Sheet3")
                df = df.replace(r'\u200b', '', regex=True)
                df = df.apply(pd.to_numeric, errors='coerce')
                df = df.dropna()
                input_data=[data]
                # Prepare the training data
                X = df.drop(['target'], axis=1)
                y = df['target']
                X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.10, random_state=5)

                # Train the model
                model = GaussianNB().fit(X_train, y_train)
                features = X.columns
                X_t = pd.DataFrame(input_data, columns=features)
                prediction_test = model.predict(X_t)
                result = {'prediction': prediction_test.tolist()}

                return JsonResponse(result)
        except Exception as e:
            return JsonResponse({"Error": str(e)}, status=500)
