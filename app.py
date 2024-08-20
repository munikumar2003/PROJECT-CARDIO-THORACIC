from flask import Flask, request, jsonify
import subprocess
import json
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.naive_bayes import GaussianNB
app = Flask(__name__)

@app.route('/')
def run_script():
    try:
        data1 = [45,1,62,0,0,0,1,0,1,0,0,0,0,0,0,1,0,0,0,12.4,2.59,3.2,3.9,21,0.56,134,4.3,0,11.1,1.47,5.3,1.5,39,0.68,137,5.2,0,21.5,0,0,1,0,1,1,0,1,1,0,0,2,1,1,4,0,0,1,0,265,284,224,0.12]
        data2=[61,1,50,0,1,0,0,0,1,0,0,0,0,0,0,1,0,0,0,13.4,3.04,3.1,0.6,42,0.89,136,4.8,1,7.4,1.21,5.6,0.6,27,0.7,130,2.6,0,24.3,0,0,0,0,0,1,0,1,0,0,0,3,2,0,1,0,0,1,0,138,120,180,0.19]
        data3 = [52,1,73,0,0,0,0,0,0,0,0,0,1,0,0,0,0,1,0,5.4,1.9,2.7,1.6,39,0.82,151,5.5,1,9.4,1.7,3.8,0.24,27,1.48,135,5.7,1,2.9,0,1,1,0,1,1,1,1,0,1,0,5.84,8,15,8,15,0,1,0,98,193,152,0.66]
        df = pd.read_excel("C:\\Users\\chemu\\xampp 8.2\\htdocs\\newdata.xlsx", sheet_name="Sheet3")
        df = df.replace(r'\u200b', '', regex=True)
        df = df.apply(pd.to_numeric, errors='coerce')
        df = df.dropna()

        # Prepare the training data
        X = df.drop(['target'], axis=1)
        y = df['target']
        X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.10, random_state=5)

        # Train the model
        model = GaussianNB().fit(X_train, y_train)
        features=X.columns
        X_t=pd.DataFrame([data1,data2,data3],columns=features)
        prediction_test = model.predict(X_t)
        result = {'prediction': prediction_test.tolist()}

        return jsonify(result)

    except Exception as e:
        return jsonify({"Error": str(e)}), 500

# else:
#     # Handle case where no input data is provided
#     print(json.dumps({"error": "No input data received"}))

#         result = subprocess.run(['python', '/home/munikumar/mysite/first.py', json.dumps(data)], capture_output=True, text=True)
#         print("Script Output:", result.stdout)

#         try:
#             output_data = json.loads(result.stdout)
#         except json.JSONDecodeError as json_err:
#             return jsonify({"Error": "Invalid JSON output", "Details": str(json_err)}), 500

#         return jsonify(output_data)

#     except Exception as e:
#         return jsonify({"Error": str(e)}), 500

if __name__ == '__main__':
    app.run(debug=True, port=5001)