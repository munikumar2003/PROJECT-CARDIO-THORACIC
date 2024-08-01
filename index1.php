<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cardio Thoracic</title>
  <!-- Bootstrap CSS -->
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff;
      padding: 0px;
    }
    ::-webkit-scrollbar {
    display: none;
    } 
    

    h1 {
      text-align: center;
    }

    form {
      background-color: #1BB193;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    fieldset {
      /*background-color: #1BB193;*/
      border: none;
      margin-bottom: 20px;
      text-align: center;
    }

    legend {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .form-group {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    label {
      flex:   0 0 150px; /* Set the width of labels */
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"] {
      flex: 1; /* Take up remaining space */
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-left: 10px; /* Add some spacing between label and input */
      width: 50%;
    }

    button[type="button"] {
      padding: 10px 20px;
      background-color: orange;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button[type="button"]:hover {
      background-color: #7dc24b;
    }
    header {
            background-color: #1BB193;
            padding: 20px 30px;
            display: flex;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            margin-right: auto; /* Pushes the search bar and user controls to the right */
        }

        .search-bar {
            margin: 0 20px;
        }

        .search-bar input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search-bar button {
            padding: 8px 16px;
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .user-controls button {
            margin-right: 10px;
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            color: #080808;
            font-weight: 500;
        }

        .user-controls button:hover {
            text-decoration: underline;
        }

        .notification-icon {
            margin-left: 10px;
            font-size: 24px;
            cursor: pointer;
        }
        fieldset {
            border: 1px solid #100f0f;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }

        legend {
            font-weight: bold;
            color: #333;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        #patientForm{
          margin: 0 20px;
        }
        #res {
          width: 30%;
          height: 41vh;
          border: none;
          position: fixed;
          left: 33%;
          top: 25%;
          background-color: #f0f0f0;
          display: none; 
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
          z-index: 1000;
        }
        #res:hover {
          border-color: #333;
        }

        #Save {
            padding: 10px 20px;
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 39%;
            margin-left: 13%;
            position: relative;
            top: -12%;
        }
        #Save:hover {
            background-color: #7dc24b;
        }
        #details {
            padding: 10px 20px;
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 49%;
            margin-left: 40%;
            position: relative;
            top: -107.2%;
        }
        #details:hover {
            background-color: #7dc24b;
        }
        #res label {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
            color: #11aa8b;
        }
        #table1 td {
          height: 75px; 
          width: 25%;
        }
        #table2 td {
          height: 15px; 
          width: 50%;
        }

  </style>
</head>
<body>
  <header>
    <div class="logo">Cardio Thoracic Surgery</div>
    <div class="search-bar">
        <input type="text" placeholder="Search...">
        <button type="submit">Search</button>
    </div>
    <div class="user-controls">
        <button style=" text-decoration: none;">Login</button>
        <button style=" text-decoration: none;">Signup</button>
    </div>
</header>
<!-- <div id="res"><label>Results:</label>
  action="{{url_for('predict')}}"
  <button type="button" id="Save">Save</button>
  <button type="button" id="details">Enter another details</button>
</div> -->
    <h1 style="margin-top: 50px;">Patient Information</h1>
    <form id="patientForm">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $form_data = $_POST;
    
        // Optionally sanitize the data (here, using htmlspecialchars)
        $sanitized_data = array_map('htmlspecialchars', $form_data);
        $data=array_values($sanitized_data);
        //print_r($data);
    
    //$data = array(52,1,73,0,0,0,0,0,0,0,0,0,1,0,0,0,0,1,0,5.4,9.4,1.9,1.7,2.7,3.8,1.6,0.24,39,27,0.82,1.48,151,135,5.5,5.7,1,1,2.9,0,1,1,0,1,1,1,1,5.84,0,8,1,15,0,8,15,98,0,193,1,152,0,0.66);
    // Escape the JSON data for shell execution
    $json_data = json_encode($data);
    // Debug output
    //echo "JSON Data: " . htmlspecialchars($json_data) . "<br>";
    
    // Escape the JSON data for shell execution
    $escaped_json_data = escapeshellarg($json_data);
    
    // Create the command string
    $command = 'C:\\Users\\chemu\\AppData\\Local\\Programs\\Python\\Python312\\python.exe "C:\\Users\\chemu\\xampp 8.2\\htdocs\\first.py" ' . $escaped_json_data . ' 2>&1';
    
    // Execute the command
    $output = shell_exec($command);
    
    // Check if the output is not empty
    if ($output === null || empty($output)) {
        echo "Error: Failed to execute the Python script.";
    } else {
        echo "<h2>Raw output: " . $output . "</h2><br>";
        
        // Decode the JSON output from Python
        
        /*if (json_last_error() !== JSON_ERROR_NONE) {
            echo "Error: Failed to decode JSON response. " . json_last_error_msg();
        } else {
            // Check if the expected key exists in the result
            if (isset($result['prediction'])) {
                echo "Predictions: " . implode(", ", $result['prediction']);
            } elseif (isset($result['error'])) {
                echo "Error from Python script: " . htmlspecialchars($result['error']);
            } else {
                echo "Unexpected response structure.";
            }
        }*/
    }
    }
      ?>
    </form>
    <br><br>
    <form id="patientForm" method="post" >
      <fieldset>
        <legend>Demographic</legend>
        <!--<div class="form-group">
          <label for="age">Age:</label>
          <input type="number" id="Age" name="Age" placeholder="Enter Age">
        </div>
        <div class="form-group">
    <label for="Gender">Gender:</label>
    <select id="Gender" name="Gender">
        <option value="" disabled selected>Select Gender</option>
        <option value="0">Male</option>
        <option value="1">Female</option>
    </select>
</div>

        <div class="form-group">
          <label for="weight">Weight (kg):</label>
          <input type="number" step="0.01" id="weight" name="weight" placeholder="Enter Weight">
        </div>-->
        <div class="form-group-new row">
          <label for="age" class="col-sm-2 col-form-label" style="margin-left: 300px;">Age:</label>
          <div class="col-sm-2">
              <input type="number" class="form-control-new" style="margin-left: -300px; height: 40px;" id="age" name="age" placeholder="Enter Age">
          </div>
      
          <label for="gender" class="col-sm-2 col-form-label" style="margin-left: -250px;">Gender:</label>
          <div class="col-sm-2">
              <select class="form-control-new" id="gender" name="gender" style="width: 145px;margin-left: -250px;height: 40px;">
                  <option value=="" disabled selected>Select Gender</option>
                  <option value="0">Male</option>
                  <option value="1">Female</option>
              </select>
          </div>
      
          <label for="weight" class="col-sm-2 col-form-label" style="margin-left: -200px;">Weight (kg):</label>
          <div class="col-sm-2">
              <input type="number" step="0.01" class="form-control-new" style="height: 40px;margin-left: -250px;" id="weight" name="weight" placeholder="Enter Weight">
          </div>
      </div>
      
      </fieldset>
  
      <fieldset>
        <!--<legend>Comorbid Diseases</legend>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="dm">DM:</label>
                        <select id="dm" name="dm">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="htn">HTN:</label>
                        <select id="htn" name="htn">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="pvd">PVD:</label>
                        <select id="pvd" name="pvd">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="copd">COPD:</label>
                        <select id="copd" name="copd">
                            <option value=""></option>  
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="cvd">CVD:</label>
                        <select id="cvd" name="cvd">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="chf">CHF:</label>
                        <select id="chf" name="chf">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="cad">CAD:</label>
                        <select id="cad" name="cad">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="ami">AMI:</label>
                        <select id="ami" name="ami">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="pre_renal_failure">Preoperative Renal Failure:</label>
                        <select id="pre_renal_failure" name="pre_renal_failure">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="infectious_endocarditis">Infectious Endocarditis:</label>
                        <select id="infectious_endocarditis" name="infectious_endocarditis">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="stroke">Stroke:</label>
                        <select id="stroke" name="stroke">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="cardiogenic_shock">Cardiogenic Shock:</label>
                        <select id="cardiogenic_shock" name="cardiogenic_shock">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="lvef_greater_30">LVEF &gt; 30%:</label>
                        <select id="lvef_greater_30" name="lvef_greater_30">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="smoking">Smoking:</label>
                        <select id="smoking" name="smoking">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="alcohol">Alcohol:</label>
                        <select id="alcohol" name="alcohol">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="hyperuricemia">Hyperuricemia:</label>
                        <select id="hyperuricemia" name="hyperuricemia">
                            <option value=""></option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>-->
        <legend>Comorbid Diseases</legend>
        <table id="table1" style="width: 100%;height: 300px;">
          <tr>
            <td>
              <div class="col-md-2">
                <div class="form-group">
                    <label for="dm">DM:</label>
                    <input type="radio" style="margin-left: -40px;" id="dm_yes" name="dm" value="1" />
                    <label for="dm_yes" style="margin-left: -60px;">Yes</label>
                    <input type="radio" style="margin-left: -40px;" id="dm_no" name="dm" value="0" />
                    <label for="dm_no" style="margin-left: -60px;">No</label>
                </div>
              </div>              
            </td>
            <td>
              <div class="col-md-2">
                <div class="form-group">
                    <label>HTN:</label>
                        <input type="radio" style="margin-left: -40px;" id="htn_yes" name="htn" value="1">
                        <label for="htn_yes" style="margin-left: -60px;" >Yes</label>
                        <input type="radio" style="margin-left: -40px;" id="htn_no" name="htn" value="0">
                        <label for="htn_no" style="margin-left: -60px;">No</label>
                </div>
              </div>
            </td>
            <td>
              <div class="col-md-2">
                <div class="form-group">
                    <label>PVD:</label>
                        <input type="radio" style="margin-left: -40px;" id="pvd_yes" name="pvd" value="1">
                        <label for="pvd_yes" style="margin-left: -60px;">Yes</label>
                        <input type="radio"  style="margin-left: -40px;" id="pvd_no" name="pvd" value="0">
                        <label for="pvd_no" style="margin-left: -60px;">No</label>
                </div>
              </div>
            </td>
            <td>
              <div class="col-md-2">
                <div class="form-group">
                    <label>COPD:</label>
                        <input type="radio" style="margin-left: -40px;" id="copd_yes" name="copd" value="1">
                        <label for="copd_yes" style="margin-left: -60px;">Yes</label>
                        <input type="radio"  style="margin-left: -40px;" id="copd_no" name="copd" value="0">
                        <label for="copd_no" style="margin-left: -60px;">No</label>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="col-md-2">
                <div class="form-group">
                    <label>CVD:</label>
                        <input type="radio" style="margin-left: -40px;" id="cvd_yes" name="cvd" value="1">
                        <label for="cvd_yes" style="margin-left: -60px;">Yes</label>
                        <input type="radio" style="margin-left: -40px;" id="cvd_no" name="cvd" value="0">
                        <label for="cvd_no" style="margin-left: -60px;">No</label>
                </div>
              </div>
            </td>
            <td>
              <div class="col-md-2">
                <div class="form-group">
                    <label>CHF:</label>
                        <input type="radio" style="margin-left: -40px;" id="chf_yes" name="chf" value="1">
                        <label for="chf_yes" style="margin-left: -60px;">Yes</label>
                        <input type="radio" style="margin-left: -40px;" id="chf_no" name="chf" value="0">
                        <label for="chf_no" style="margin-left: -60px;">No</label>
                </div>
              </div>
            </td>
            <td>
              <div class="col-md-2">
                <div class="form-group">
                    <label>CAD:</label>
                        <input type="radio" style="margin-left: -40px;" id="cad_yes" name="cad" value="1">
                        <label for="cad_yes" style="margin-left: -60px;">Yes</label>
                        <input type="radio" style="margin-left: -40px;" id="cad_no" name="cad" value="0">
                        <label for="cad_no" style="margin-left: -60px;">No</label>
                </div>
              </div>
            </td>
            <td>
              <div class="col-md-2">
                <div class="form-group">
                    <label>AMI:</label>
                        <input type="radio" style="margin-left: -40px;" id="ami_yes" name="ami" value="1">
                        <label for="ami_yes" style="margin-left: -60px;">Yes</label>
                        <input type="radio" style="margin-left: -40px;" id="ami_no" name="ami" value="0">
                        <label for="ami_no" style="margin-left: -60px;">No</label>
                </div>
            </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="col-md-2">
                <div class="form-group" style="margin-left: -25px;">
                    <label>Preoperative <br>Renal Failure:</label>
                        <input type="radio" style="margin-left: -15px;" id="pre_renal_failure_yes" name="pre_renal_failure" value="1">
                        <label for="pre_renal_failure_yes" style="margin-left: -60px;">Yes</label>
                        <input type="radio" style="margin-left: -40px;" id="pre_renal_failure_no" name="pre_renal_failure" value="0">
                        <label for="pre_renal_failure_no" style="margin-left: -60px;">No</label>
                </div>
              </div>
            </td>
            <td>
              <div class="col-md-2">
                <div class="form-group" style="margin-left: -20px;">
                    <label>Infectious Endocarditis:</label>
                        <input type="radio" style="margin-left: -20px;" id="infectious_endocarditis_yes" name="infectious_endocarditis" value="1">
                        <label for="infectious_endocarditis_yes" style="margin-left: -60px;">Yes</label>
                        <input type="radio" style="margin-left: -40px;" id="infectious_endocarditis_no" name="infectious_endocarditis" value="0">
                        <label for="infectious_endocarditis_no" style="margin-left: -60px;">No</label>
                </div>
              </div>
            </td>
            <td>
              <div class="col-md-2">
                <div class="form-group" style="margin-left: -5px;">
                    <label>Stroke:</label>
                        <input type="radio" style="margin-left: -35px;" id="stroke_yes" name="stroke" value="1">
                        <label for="stroke_yes" style="margin-left: -60px;">Yes</label>
                        <input type="radio" style="margin-left: -40px;" id="stroke_no" name="stroke" value="0">
                        <label for="stroke_no" style="margin-left: -60px;">No</label>
                </div>
              </div>
            </td>
            <td>
              <div class="col-md-2">
                <div class="form-group" style="margin-left: -20px;">
                    <label>Cardiogenic Shock:</label>
                        <input type="radio" style="margin-left: -20px;" id="cardiogenic_shock_yes" name="cardiogenic_shock" value="1">
                        <label for="cardiogenic_shock_yes" style="margin-left: -60px;">Yes</label>
                        <input type="radio" style="margin-left: -40px;" id="cardiogenic_shock_no" name="cardiogenic_shock" value="0">
                        <label for="cardiogenic_shock_no" style="margin-left: -60px;">No</label>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="col-md-2">
                <div class="form-group" style="margin-left: -20px;">
                    <label>LVEF &gt; 30%:</label>
                        <input type="radio" style="margin-left: -20px;" id="lvef_greater_30_yes" name="lvef_greater_30" value="1">
                        <label for="lvef_greater_30_yes" style="margin-left: -60px;">Yes</label>
                        <input type="radio" style="margin-left: -40px;" id="lvef_greater_30_no" name="lvef_greater_30" value="0">
                        <label for="lvef_greater_30_no" style="margin-left: -60px;">No</label>
                </div>
              </div>
            </td>
            <td>
              <div class="col-md-2">
                <div class="form-group" style="margin-left: -10px;">
                    <label>Smoking:</label>
                        <input type="radio" style="margin-left: -30px;" id="smoking_yes" name="smoking" value="1">
                        <label for="smoking_yes" style="margin-left: -60px;">Yes</label>
                        <input type="radio" style="margin-left: -40px;" id="smoking_no" name="smoking" value="0">
                        <label for="smoking_no" style="margin-left: -60px;">No</label>
                </div>
              </div>
            </td>
            <td>
              <div class="col-md-2">
                <div class="form-group" style="margin-left: -10px;">
                    <label>Alcohol:</label>
                        <input type="radio" style="margin-left: -30px;" id="alcohol_yes" name="alcohol" value="1">
                        <label for="alcohol_yes" style="margin-left: -60px;">Yes</label>
                        <input type="radio" style="margin-left: -40px;" id="alcohol_no" name="alcohol" value="0">
                        <label for="alcohol_no" style="margin-left: -60px;">No</label>
                </div>
              </div>
            </td>
            <td>
              <div class="col-md-2">
                <div class="form-group" style="margin-left: -25px;">
                    <label>Hyperuricemia:</label>
                        <input type="radio" style="margin-left: -15px;" id="hyperuricemia_yes" name="hyperuricemia" value="1">
                        <label for="hyperuricemia_yes" style="margin-left: -60px;">Yes</label>
                        <input type="radio" style="margin-left: -40px;" id="hyperuricemia_no" name="hyperuricemia" value="0">
                        <label for="hyperuricemia_no" style="margin-left: -60px;">No</label>
                </div>
              </div>
            </td>
          </tr>
        </table>
    </fieldset>
    <fieldset>
      <legend><pre style="font-family: inherit;">Pre-Operative                                                                                                 Post-Operative</pre></legend>
      <table id="table2"  style="width: 100%; height: 500px;">
        <tr>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="hemoglobin_pre">Hemoglobin (g/dl):</label>
              <input type="number" step="0.01" id="hemoglobin_pre" name="hemoglobin_pre" min="0" placeholder="Ex: 13.8 to 17.2">
            </div>
          </td>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="hemoglobin_post">Hemoglobin (g/dl):</label>
              <input type="number" step="0.01" id="hemoglobin_post" name="hemoglobin_post" min="0">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="platelet_pre">Platelet (lakhs/cumm):</label>
              <input type="number" step="0.01" id="platelet_pre" name="platelet_pre" min="0" placeholder="150,000 to 450,000">
            </div>
          </td>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="platelet_post">Platelet (lakhs/cumm):</label>
              <input type="number" step="0.01" id="platelet_post" name="platelet_post" min="0">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="albumin_pre">Albumin (g/dl):</label>
              <input type="number" step="0.01" id="albumin_pre" name="albumin_pre" min="0" placeholder="3.4 to 5.4">
            </div>
          </td>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="albumin_post">Albumin (g/dl):</label>
              <input type="number" step="0.01" id="albumin_post" name="albumin_post" min="0">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="bilirubin_pre">Bilirubin (mg/dl):</label>
              <input type="number" step="0.01" id="bilirubin_pre" name="bilirubin_pre" min="0" placeholder="Total bilirubin: 0.1 to 1.2,Direct bilirubin: 0.1 to 0.3">
            </div>
          </td>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="bilirubin_post">Bilirubin (mg/dl):</label>
              <input type="number" step="0.01" id="bilirubin_post" name="bilirubin_post" min="0">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="urea_pre">Urea (mg/dl):</label>
              <input type="number" step="0.01" id="urea_pre" name="urea_pre" min="0" placeholder="8 to 20">
            </div>
          </td>
          <td>
            <div class="form-group" style="width:50%">
              <label for="urea_post">Urea (mg/dl):</label>
              <input type="number" step="0.01" id="urea_post" name="urea_post" min="0">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="ser_creatinine_pre">Serum Creatinine (mg/dl):</label>
              <input type="number" step="0.01" id="ser_creatinine_pre" name="ser_creatinine_pre" min="0" placeholder="Male: 0.6 to 1.2 ,Female: 0.5 to 1.1">
            </div>
          </td>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="ser_creatinine_post">Serum Creatinine (mg/dl):</label>
              <input type="number" step="0.01" id="ser_creatinine_post" name="ser_creatinine_post" min="0">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="sodium_pre">Sodium (mmol/L):</label>
              <input type="number" step="0.01" id="sodium_pre" name="sodium_pre" min="0" placeholder="135 to 145">
            </div>
          </td>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="sodium_post">Sodium (mmol/L):</label>
              <input type="number" step="0.01" id="sodium_post" name="sodium_post" min="0" placeholder="135 - 145">
            </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="potassium_pre">Potassium (mmol/L):</label>
              <input type="number" step="0.01" id="potassium_pre" name="potassium_pre" min="0" placeholder="3.5 to 5.0">
            </div>
          </td>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="potassium_post">Potassium (mmol/L):</label>
              <input type="number" step="0.01" id="potassium_post" name="potassium_post" min="0" placeholder="3.5 - 5.0">
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="egfr_greater_90_pre" style="margin-right: 5px;">eGFR:</label>
              <select id="egfr_greater_90_pre" name="egfr_greater_90_pre">
                <option value="" disabled selected></option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            </div>
          </td>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="egfr_greater_90_post" style="margin-right: 5px;">eGFR:</label>
              <select id="egfr_greater_90_post" name="egfr_greater_90_post">
                <option value=""></option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>

          </td>
          <td>
            <div class="form-group" style="width: 50%;">
              <label for="bicarbonate_post">Bicarbonate (mmol/L):</label>
              <input type="number" step="0.01" id="bicarbonate_post" name="bicarbonate_post" min="0" placeholder="22 - 28">
            </div>
          </td>
        </tr>
      </table>
    </fieldset>
    <!--
      <fieldset>
        <legend>Pre-Operative</legend>
        <div class="form-group">
          <label for="hemoglobin_pre">Hemoglobin (g/dl):</label>
          <input type="number" step="0.01" id="hemoglobin_pre" name="hemoglobin_pre" min="0" placeholder="Male: 13.8 to 17.2,Female: 12.1 to 15.1">
        </div>
        <div class="form-group">
          <label for="platelet_pre">Platelet (lakhs/cumm):</label>
          <input type="number" step="0.01" id="platelet_pre" name="platelet_pre" min="0" placeholder="150,000 to 450,000">
        </div>
        <div class="form-group">
          <label for="albumin_pre">Albumin (g/dl):</label>
          <input type="number" step="0.01" id="albumin_pre" name="albumin_pre" min="0" placeholder="3.4 to 5.4">
        </div>
        <div class="form-group">
          <label for="bilirubin_pre">Bilirubin (mg/dl):</label>
          <input type="number" step="0.01" id="bilirubin_pre" name="bilirubin_pre" min="0" placeholder="Total bilirubin: 0.1 to 1.2,Direct bilirubin: 0.1 to 0.3">
        </div>
        <div class="form-group">
          <label for="urea_pre">Urea (mg/dl):</label>
          <input type="number" step="0.01" id="urea_pre" name="urea_pre" min="0" placeholder="8 to 20">
        </div>
        <div class="form-group">
          <label for="ser_creatinine_pre">Serum Creatinine (mg/dl):</label>
          <input type="number" step="0.01" id="ser_creatinine_pre" name="ser_creatinine_pre" min="0" placeholder="Male: 0.6 to 1.2 ,Female: 0.5 to 1.1">
        </div>
        <div class="form-group">
          <label for="sodium_pre">Sodium (mmol/L):</label>
          <input type="number" step="0.01" id="sodium_pre" name="sodium_pre" min="0" placeholder="135 to 145">
        </div>
        <div class="form-group">
          <label for="potassium_pre">Potassium (mmol/L):</label>
          <input type="number" step="0.01" id="potassium_pre" name="potassium_pre" min="0" placeholder="3.5 to 5.0">
        </div>
      </fieldset>

      <fieldset>
          <legend>eGFR</legend>
        <div class="form-group">
          <label for="egfr_greater_90_pre">eGFR:</label>
          <select id="egfr_greater_90_pre" name="egfr_greater_90_pre">
            <option value=""></option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        </div>
        <!--<div class="form-group">
          <label for="egfr_less_90_pre">eGFR:</label>
          <input type="number" id="egfr_less_90_pre" name="egfr_less_90_pre" min="0" placeholder="< 90(ml/min/m2)">
        </div>-->
      <!--</fieldset>
        <fieldset>
          <legend>LONG TERM TREATMENT</legend>
        <div class="form-group">
          <label for="beta_blockers_pre">Beta-Blockers:</label>
          <select id="beta_blockers_pre" name="beta_blockers_pre">
            <option value=""></option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        </div>
        <div class="form-group">
          <label for="ccb_pre">CCB:</label>
          <select id="ccb_pre" name="ccb_pre">
            <option value=""></option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        </div>
        <div class="form-group">
          <label for="diuretics_pre">Diuretics:</label>
          <select id="diuretics_pre" name="diuretics_pre">
            <option value=""></option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        </div>
        <div class="form-group">
          <label for="ace_inhibitors_pre">ACE Inhibitors:</label>
          <select id="ace_inhibitors_pre" name="ace_inhibitors_pre">
            <option value=""></option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        </div>
      </fieldset>-->
  
     <!-- <fieldset>
        <legend>Post-Operative</legend>
        <div class="form-group">
          <label for="hemoglobin_post">Hemoglobin (g/dl):</label>
          <input type="number" step="0.01" id="hemoglobin_post" name="hemoglobin_post" min="0">
        </div>
        <div class="form-group">
          <label for="platelet_post">Platelet (lakhs/cumm):</label>
          <input type="number" step="0.01" id="platelet_post" name="platelet_post" min="0">
        </div>
        <div class="form-group">
          <label for="albumin_post">Albumin (g/dl):</label>
          <input type="number" step="0.01" id="albumin_post" name="albumin_post" min="0">
        </div>
        <div class="form-group">
          <label for="bilirubin_post">Bilirubin (mg/dl):</label>
          <input type="number" step="0.01" id="bilirubin_post" name="bilirubin_post" min="0">
        </div>
        <div class="form-group">
          <label for="urea_post">Urea (mg/dl):</label>
          <input type="number" step="0.01" id="urea_post" name="urea_post" min="0">
        </div>
        <div class="form-group">
          <label for="ser_creatinine_post">Serum Creatinine (mg/dl):</label>
          <input type="number" step="0.01" id="ser_creatinine_post" name="ser_creatinine_post" min="0">
        </div>
      </fieldset>
      <fieldset>
        <legend>eGFR</legend>
        <div class="form-group">
          <label for="egfr_greater_90_post">eGFR:</label>
          <select id="egfr_greater_90_post" name="egfr_greater_90_post">
            <option value=""></option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        </div>
        <!--<div class="form-group">
          <label for="egfr_less_90_post">eGFR:</label>
          <input type="number" id="egfr_less_90_post" name="egfr_less_90_post" min="0" placeholder="< 90(ml/min/m2)">
        </div>-->
        <!--<div class="form-group">
          <label for="sodium_post">Sodium (mmol/L):</label>
          <input type="number" step="0.01" id="sodium_post" name="sodium_post" min="0" placeholder="135 - 145">
        </div>
        <div class="form-group">
          <label for="potassium_post">Potassium (mmol/L):</label>
          <input type="number" step="0.01" id="potassium_post" name="potassium_post" min="0" placeholder="3.5 - 5.0">
        </div>
        <div class="form-group">
          <label for="bilirubin_post_2">Bilirubin (mg/dl):</label>
          <input type="number" step="0.01" id="bilirubin_post_2" name="bilirubin_post_2" min="0" placeholder="Total bilirubin: 0.1 to 1.2 mg/dL ,Direct bilirubin: 0.1 to 0.3 mg/dL">
        </div>
      </fieldset>-->
      <fieldset>
          <legend>URINE OUTPUT </legend>
        <div class="form-group">
          <label for="day_1_input_output">Day 1 Input/Output:</label>
          <input type="number" step="0.01" id="day_1_input_output" name="day_1_input_output" min="0">
        </div>
        <div class="form-group">
          <label for="day_2_input_output">Day 2 Input/Output:</label>
          <input type="number" step="0.01" id="day_2_input_output" name="day_2_input_output" min="0">
        </div>
        <div class="form-group">
          <label for="day_3_input_output">Day 3 Input/Output:</label>
          <input type="number" step="0.01" id="day_3_input_output" name="day_3_input_output" min="0">
        </div>
        <div class="form-group">
          <label for="day_4_input_output">Day 4 Input/Output:</label>
          <input type="nummber" step="0.01" id="day_4_input_output" name="day_4_input_output" min="0">
        </div>
        <div class="form-group">
          <label for="day_5_input_output">Day 5 Input/Output:</label>
          <input type="number" step="0.01" id="day_5_input_output" name="day_5_input_output" min="0">
        </div>
        <div class="form-group">
          <label for="day_6_input_output">Day 6 Input/Output:</label>
          <input type="number" step="0.01" id="day_6_input_output" name="day_6_input_output" min="0">
        </div>
        <div class="form-group">
          <label for="day_7_input_output">Day 7 Input/Output:</label>
          <input type="number" step="0.01" id="day_7_input_output" name="day_7_input_output" min="0">
        </div>
      </fieldset>
      <fieldset>
        <legend><pre style="font-family: inherit;">Long Term Treatment                                                                               Inotropic Drugs</pre></legend>
        <table id="table2" style="height: 300px;width: 100%;">
          <tr>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="beta_blockers_pre">Beta-Blockers:</label>
                <select id="beta_blockers_pre" name="beta_blockers_pre">
                  <option value=""></option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
              </select>
            </td>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="dopamine">DOPAMINE (ml/hr):</label>
                <input type="number" step="0.01" id="dopamine" name="dopamine" min="0">
              </div>
            </td>
          </tr>
          <tr>
            <td>
            </div>
            <div class="form-group" style="width: 60%;">
              <label for="ccb_pre">CCB:</label>
              <select id="ccb_pre" name="ccb_pre">
                <option value=""></option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            </div>
            </td>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="adrenaline">ADRENALINE (ml/hr):</label>
                <input type="number" step="0.01" id="adrenaline" name="adrenaline" min="0">
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="diuretics_pre">Diuretics:</label>
                <select id="diuretics_pre" name="diuretics_pre">
                  <option value=""></option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
              </select>
              </div>
            </td>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="noradrenaline">NON-ADRENALINE (ml/hr):</label>
                <input type="number" step="0.01" id="noradrenaline" name="noradrenaline" min="0">
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="ace_inhibitors_pre">ACE Inhibitors:</label>
                <select id="ace_inhibitors_pre" name="ace_inhibitors_pre">
                  <option value=""></option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
              </select>
              </div>
            </td>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="vasopressin">VASOPRESSIN (ml/hr):</label>
                <input type="number" step="0.01" id="vasopressin" name="vasopressin" min="0">
              </div>
            </td>
          </tr>
        </table>
      </fieldset>
      <!--<fieldset>
        <legend>Inotropic Drugs</legend>
        <div class="form-group">
          <label for="dopamine">DOPAMINE (ml/hr):</label>
          <input type="number" step="0.01" id="dopamine" name="dopamine" min="0">
        </div>
        <div class="form-group">
          <label for="adrenaline">ADRENALINE (ml/hr):</label>
          <input type="number" step="0.01" id="adrenaline" name="adrenaline" min="0">
        </div>
        <div class="form-group">
          <label for="noradrenaline">NON-ADRENALINE (ml/hr):</label>
          <input type="number" step="0.01" id="noradrenaline" name="noradrenaline" min="0">
        </div>
        <div class="form-group">
          <label for="vasopressin">VASOPRESSIN (ml/hr):</label>
          <input type="number" step="0.01" id="vasopressin" name="vasopressin" min="0">
        </div>
      </fieldset>-->
      <fieldset>
        <legend><pre style="font-family: inherit;">Type of Surgery                                                                                          Perfusion Data</pre></legend>
        <table id="table2" style="height: 300px; width: 100%; ">
          <tr>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="rrt">RRT:</label>
                <input type="number" step="0.01" id="rrt" name="rrt" placeholder="Enter RRT details">
              </div>
            </td>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="cpb_time">CPB (mins):</label>
                <input type="number" step="0.01" id="cpb_time" name="cpb_time" min="0">
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="cabg">CABG:</label>
                <input type="number" step="0.01" id="cabg" name="cabg" placeholder="Enter CABG details">
              </div>
            </td>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="x_clamp_time">X-CLAMP TIME (mins):</label>
                <input type="number" step="0.01" id="x_clamp_time" name="x_clamp_time" min="0">
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="valvular_surgery">Valvular Surgery:</label>
                <input type="number" step="0.01" id="valvular_surgery" name="valvular_surgery" placeholder="Enter valvular surgery details">
              </div>
            </td>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="surgery_duration">SURGERY DURATION (mins):</label>
                <input type="number" step="0.01" id="surgery_duration" name="surgery_duration" min="0">
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="asd_closure">ASD Closure:</label>
                <input type="number" step="0.01" id="asd_closure" name="asd_closure" placeholder="Enter ASD closure details">
              </div> 
            </td>
            <td>
              <div class="form-group" style="width: 60%;">
                <label for="creatinine_difference">Difference of Creatinine AKI:</label>
                <input type="number" step="0.01" id="creatinine_difference" name="creatinine_difference" min="0">
              </div>
            </td>
          </tr>
        </table>
      </fieldset>
      <!--<fieldset>
        <legend>Renal Replacement Therapy (RRT)</legend>
        <div class="form-group">
          <label for="rrt">RRT:</label>
          <input type="number" step="0.01" id="rrt" name="rrt" placeholder="Enter RRT details">
        </div>
      </fieldset>
      
      <fieldset>
        <legend>Type of Surgery</legend>
        <div class="form-group">
          <label for="cabg">CABG:</label>
          <input type="number" step="0.01" id="cabg" name="cabg" placeholder="Enter CABG details">
        </div>
        <div class="form-group">
          <label for="valvular_surgery">Valvular Surgery:</label>
          <input type="number" step="0.01" id="valvular_surgery" name="valvular_surgery" placeholder="Enter valvular surgery details">
        </div>
        <div class="form-group">
          <label for="asd_closure">ASD Closure:</label>
          <input type="number" step="0.01" id="asd_closure" name="asd_closure" placeholder="Enter ASD closure details">
        </div>
      </fieldset>-->
      <!--<fieldset>
        <legend>Perfusion Data</legend>
        <div class="form-group">
          <label for="cpb_time">CPB (mins):</label>
          <input type="number" step="0.01" id="cpb_time" name="cpb_time" min="0">
        </div>
        <div class="form-group">
          <label for="x_clamp_time">X-CLAMP TIME (mins):</label>
          <input type="number" step="0.01" id="x_clamp_time" name="x_clamp_time" min="0">
        </div>
        <div class="form-group">
          <label for="surgery_duration">SURGERY DURATION (mins):</label>
          <input type="number" step="0.01" id="surgery_duration" name="surgery_duration" min="0">
        </div>
      </fieldset>
      
      <fieldset>
        <legend>Difference of Creatinine AKI</legend>
        <div class="form-group">
          <label for="creatinine_difference">Difference of Creatinine AKI:</label>
          <input type="number" step="0.01" id="creatinine_difference" name="creatinine_difference" min="0">
        </div>
      </fieldset>-->
      
      <center><input type="submit"  value="submit" ></center>
       <!-- <center> <button type="submit" onclick="fun()">Submit</button></center> -->
       
    </form>  
  </body>
  </html>
