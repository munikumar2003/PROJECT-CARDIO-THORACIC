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
    /*::-webkit-scrollbar {
    display: none;
    } */
    

    h1 {
      text-align: center;
    }

    form {
      background-color: #aaffdf;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    fieldset {
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
      flex:   0 0 150px; 
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"] ,
    input[type="string"]{
      flex: 1; 
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
        header {
            width: 100%;
            background-color: #aaffdf;
            padding: 15px 0; /* Adjusted padding */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000; /* Ensure header stays on top */
        }

        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap; /* Allow items to wrap if needed */
        }

        .nav-links li {
            margin: 0 10px; /* Adjusted margin */
        }

        .nav-links a {
            text-decoration: none;
            color: #086acc;
            font-size: 16px; /* Adjusted font size for smaller screens */
            font-weight: bold;
            padding: 10px 20px; /* Adjusted padding */
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .nav-links a:hover {
            background-color: black;
            color: #ffab65;
        }
        @media (max-width: 768px) {
            .nav-links {
                flex-direction: column;
                align-items: center;
            }

            .nav-links li {
                margin: 10px 0;
            }

            h1 {
                font-size: 2em; /* Further adjusted font size for mobile */
            }
        }
  </style>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- <header>
    <div class="logo">Cardio Thoracic Surgery</div>
    <div class="search-bar">
        <input type="text" placeholder="Search...">
        <button type="submit">Search</button>
    </div>
    <div class="user-controls">
        <button style=" text-decoration: none;">Login</button>
        <button style=" text-decoration: none;">Signup</button>
    </div>
</header> -->

    <h1 style="margin-top: 60px;">Patient Information</h1>
    <form id="patientForm">
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $form_data = $_POST;
        $points = 0;

// Assign points based on predefined ranges and conditions
// Age
if (isset($form_data['age']) && is_numeric($form_data['age'])) {
    if ($form_data['age'] >= 65) $points += 2;
    elseif ($form_data['age'] >= 45) $points += 1;
}

// Weight
if (isset($form_data['weight']) && is_numeric($form_data['weight'])) {
    if ($form_data['weight'] >= 100) $points += 3;
    elseif ($form_data['weight'] >= 80) $points += 2;
    elseif ($form_data['weight'] >= 60) $points += 1;
}
if (isset($form_data['gender'])) {
  $gender = strtolower($form_data['gender']);
  if ($gender == 'male') {
      $points += 1; // Example points for male gender based on clinical data
  } elseif ($gender == 'female') {
      $points += 2; // Example points for female gender based on clinical data
  }
}

if (isset($form_data['dm']) && $form_data['dm']) {
  $points += 2;
}

// Hypertension (HTN)
if (isset($form_data['htn']) && $form_data['htn']) {
  $points += 1;
}

// Peripheral Vascular Disease (PVD)
if (isset($form_data['pvd']) && $form_data['pvd']) {
  $points += 1;
}

// Chronic Obstructive Pulmonary Disease (COPD)
if (isset($form_data['copd']) && $form_data['copd']) {
  $points += 1;
}

// Cerebrovascular Disease (CVD)
if (isset($form_data['cvd']) && $form_data['cvd']) {
  $points += 1;
}

// Congestive Heart Failure (CHF)
if (isset($form_data['chf']) && $form_data['chf']) {
  $points += 2;
}

// Coronary Artery Disease (CAD)
if (isset($form_data['cad']) && $form_data['cad']) {
  $points += 2;
}

// Acute Myocardial Infarction (AMI)
if (isset($form_data['ami']) && $form_data['ami']) {
  $points += 2;
}

// Preoperative Renal Failure
if (isset($form_data['preoperative_renal_failure']) && $form_data['preoperative_renal_failure']) {
  $points += 2;
}

// Infectious Endocarditis
if (isset($form_data['infectious_endocarditis']) && $form_data['infectious_endocarditis']) {
  $points += 1;
}

// Stroke
if (isset($form_data['stroke']) && $form_data['stroke']) {
  $points += 1;
}

// Cardiogenic Shock
if (isset($form_data['cardiogenic_shock']) && $form_data['cardiogenic_shock']) {
  $points += 2;
}

// Left Ventricular Ejection Fraction (LVEF)
if (isset($form_data['lvef']) && is_numeric($form_data['lvef'])) {
  $points += 1;
}

// Smoking
if (isset($form_data['smoking']) && $form_data['smoking']) {
  $points += 2;
}

// Alcohol
if (isset($form_data['alcohol']) && $form_data['alcohol']) {
  $points += 1;
}

// Hyperuricemia
if (isset($form_data['hyperuricemia']) && $form_data['hyperuricemia']) {
  $points += 1;
}

// Hemoglobin (pre)
if (isset($form_data['hemoglobin_pre']) && is_numeric($form_data['hemoglobin_pre'])) {
    if ($form_data['hemoglobin_pre'] <13.8 || $form_data['hemoglobin_pre'] >17.2) $points += 2;
}

// Platelet (pre)
if (isset($form_data['platelet_pre']) && is_numeric($form_data['platelet_pre'])) {
    if ($form_data['platelet_pre'] < 1.5 || $form_data['platelet_pre'] > 4.5) $points += 2;
}

// Albumin (pre)
if (isset($form_data['albumin_pre']) && is_numeric($form_data['albumin_pre'])) {
    if ($form_data['albumin_pre'] < 3.5 || $form_data['albumin_pre'] > 5.0) $points += 2;
}

// Bilirubin (pre)
if (isset($form_data['bilirubin_pre']) && is_numeric($form_data['bilirubin_pre'])) {
    if ($form_data['bilirubin_pre'] <0.1 || $form_data['bilirubin_pre'] >1.2) $points += 1;
}

// Urea (pre)
if (isset($form_data['urea_pre']) && is_numeric($form_data['urea_pre'])) {
    if ($form_data['urea_pre'] < 7 || $form_data['urea_pre'] > 20) $points += 2;
}

// Serum Creatinine (pre)
if (isset($form_data['ser_creatinine_pre']) && is_numeric($form_data['ser_creatinine_pre'])) {
    if ($form_data['ser_creatinine_pre'] < 0.59 || $form_data['ser_creatinine_pre'] > 1.35) $points += 2;
}

// Sodium (pre)
if (isset($form_data['sodium_pre']) && is_numeric($form_data['sodium_pre'])) {
    if ($form_data['sodium_pre'] <135 || $form_data['sodium_pre'] >145) $points += 1;
}

// Potassium (pre)
if (isset($form_data['potassium_pre']) && is_numeric($form_data['potassium_pre'])) {
    if ($form_data['potassium_pre'] < 3.5 || $form_data['potassium_pre'] > 5.0) $points += 1;
}

if (isset($form_data['egfr_greater_90_pre']) && is_numeric($form_data['egfr_greater_90_pre'])) {
  $points += 1; 
}

// Hemoglobin (post)
if (isset($form_data['hemoglobin_post']) && is_numeric($form_data['hemoglobin_post'])) {
  if ($form_data['hemoglobin_post'] <13.8 || $form_data['hemoglobin_post'] >17.2) $points += 2;
}

// Platelet (pre)
if (isset($form_data['platelet_post']) && is_numeric($form_data['platelet_post'])) {
  if ($form_data['platelet_post'] < 1.5 || $form_data['platelet_post'] > 4.5) $points += 2;
}

// Albumin (pre)
if (isset($form_data['albumin_post']) && is_numeric($form_data['albumin_post'])) {
  if ($form_data['albumin_post'] < 3.5 || $form_data['albumin_post'] > 5.0) $points += 2;
}

// Bilirubin (pre)
if (isset($form_data['bilirubin_post']) && is_numeric($form_data['bilirubin_post'])) {
  if ($form_data['bilirubin_post'] <0.1 || $form_data['bilirubin_post'] >1.2) $points += 1;
}

// Urea (pre)
if (isset($form_data['urea_post']) && is_numeric($form_data['urea_post'])) {
  if ($form_data['urea_post'] < 7 || $form_data['urea_post'] > 20) $points += 2;
}

// Serum Creatinine (pre)
if (isset($form_data['ser_creatinine_post']) && is_numeric($form_data['ser_creatinine_post'])) {
  if ($form_data['ser_creatinine_post'] < 0.59 || $form_data['ser_creatinine_post'] > 1.35) $points += 2;
}

// Sodium (pre)
if (isset($form_data['sodium_post']) && is_numeric($form_data['sodium_post'])) {
  if ($form_data['sodium_post'] < 135 || $form_data['sodium_post'] > 145) $points += 1;
}

// Potassium (pre)
if (isset($form_data['potassium_post']) && is_numeric($form_data['potassium_post'])) {
  if ($form_data['potassium_post'] < 3.5 || $form_data['potassium_post'] > 5.0) $points += 1;
}

// eGFR greater than 90 (post)
if (isset($form_data['egfr_greater_90_post']) && is_numeric($form_data['egfr_greater_90_post'])) {
  $points += 1; 
}

// Bicarbonate (post)
if (isset($form_data['bicarbonate_post']) && is_numeric($form_data['bicarbonate_post'])) {
    if ($form_data['bicarbonate_post'] <22  || $form_data['bicarbonate_post'] > 29) $points += 2;
}

// Beta-Blockers (pre)
if (isset($form_data['beta_blockers_pre']) && $form_data['beta_blockers_pre']) {
    $points += 1;
}

// CCB (pre)
if (isset($form_data['ccb_pre']) && $form_data['ccb_pre']) {
    $points += 1;
}

// Diuretics (pre)
if (isset($form_data['diuretics_pre']) && $form_data['diuretics_pre']) {
    $points += 1;
}

// ACE Inhibitors (pre)
if (isset($form_data['ace_inhibitors_pre']) && $form_data['ace_inhibitors_pre']) {
    $points += 1;
}

// Dopamine
if (isset($form_data['dopamine']) && $form_data['dopamine']) {
  if ($form_data['dopamine'] >2 && $form_data['dopamine'] <= 10) $points += 1;
  else if ($form_data['dopamine'] >10) $points += 2;
}

// Adrenaline
if (isset($form_data['adrenaline']) && $form_data['adrenaline']) {
  if ($form_data['adrenaline'] >2 && $form_data['adrenaline'] <= 10) $points += 1;
  else if ($form_data['adrenaline'] >10) $points += 2;
}

// Noradrenaline
if (isset($form_data['noradrenaline']) && $form_data['noradrenaline']) {
  if ($form_data['noradrenaline'] >2 && $form_data['noradrenaline'] <= 10) $points += 1;
  else if ($form_data['noradrenaline'] >10) $points += 2;
}

// Vasopressin
if (isset($form_data['vasopressin']) && $form_data['vasopressin']) {
  if ($form_data['vasopressin'] >10) $points += 1;
}

// RRT
if (isset($form_data['rrt']) && $form_data['rrt']) {
  if ($form_data['rrt'] >2 && $form_data['rrt'] <= 10) $points += 2;
  else if ($form_data['rrt'] >10) $points += 3;
  else if ($form_data['rrt'] <=2) $points += 1;
}

// CABG
if (isset($form_data['cabg']) && $form_data['cabg']) {
    $points += 1;
}

// Valvular Surgery
if (isset($form_data['valvular_surgery']) && $form_data['valvular_surgery']) {
    $points += 1;
}

// ASD Closure
if (isset($form_data['asd_closure']) && $form_data['asd_closure']) {
    $points += 1;
}

// CPB Time (mins)
if (isset($form_data['cpb_time']) && is_numeric($form_data['cpb_time'])) {
    if ($form_data['cpb_time'] < 60 && $form_data['cpb_time'] >= 180) $points += 2;
}

// X-Clamp Time (mins)
if (isset($form_data['x_clamp_time']) && is_numeric($form_data['x_clamp_time'])) {
  if ($form_data['x_clamp_time'] <40  && $form_data['x_clamp_time'] >= 120) $points += 2;
}

// Surgery Duration (mins)
if (isset($form_data['surgery_duration']) && is_numeric($form_data['surgery_duration'])) {
  if ($form_data['surgery_duration'] <120  && $form_data['surgery_duration'] >= 360) $points += 1;
}

// Creatinine Difference
if (isset($form_data['creatinine_difference']) && is_numeric($form_data['creatinine_difference'])) {
    if ($form_data['creatinine_difference'] >= 0.6 && $form_data['creatinine_difference'] <= 1.2) $points += 10;
}


        $sanitized_data = array_map('htmlspecialchars', $form_data);
        $data=array_values($sanitized_data);
        //print_r($data);
        //echo gettype($data[38]);
        $da=[];
        for($i=0;$i<38;$i++)
            $da[]=$data[$i];
        for($i=38;$i<45;$i++){
            $val=explode("/",$data[$i]);
            $a= (float)$val[0]/(8*(float)$data[2]);
            $b= (float)$val[1]/(8*(float)$data[2]);
            $c= abs($a-$b);
            if($c>=0.5 && $c<=1.5)
                $da[]=0;
            else 
                $da[]=1;
        }
        for($i=45;$i<61;$i++)
            $da[]=$data[$i];
        if(isset($form_data['day_1_input_output']) && is_numeric($form_data['day_1_input_output'])){
          $points += 1;
        }
        if(isset($form_data['day_1_input_output']) && is_numeric($form_data['day_1_input_output'])){
          $points += 1;
        }
        if(isset($form_data['day_1_input_output']) && is_numeric($form_data['day_1_input_output'])){
          $points += 1;
        }
        if(isset($form_data['day_1_input_output']) && is_numeric($form_data['day_1_input_output'])){
          $points += 1;
        }
        if(isset($form_data['day_1_input_output']) && is_numeric($form_data['day_1_input_output'])){
          $points += 1;
        }
        if(isset($form_data['day_1_input_output']) && is_numeric($form_data['day_1_input_output'])){
          $points += 1;
        }
        if(isset($form_data['day_1_input_output']) && is_numeric($form_data['day_1_input_output'])){
          $points += 1;
        }
        // Calculate total points and normalize to 100


// Print points and total score

        #$data = array(52,1,73,0,0,0,0,0,0,0,0,0,1,0,0,0,0,1,0,5.4,1.9,2.7,1.6,39,0.82,151,5.5,1,9.4,1.7,3.8,0.24,27,1.48,135,5.7,1,2.9,0,1,1,0,1,1,1,1,0,1,0,5.84,8,15,8,15,0,1,0,98,193,152,0.66);
        //$data=array(45,1,62,0,0,0,1,0,1,0,0,0,0,0,0,1,0,0,0,12.4,2.59,3.2,3.9,21,0.56,134,4.3,0,11.1,1.47,5.3,1.5,39,0.68,137,5.2,0,21.5,0,0,1,0,1,1,0,1,1,0,0,2,1,1,4,0,0,1,0,265,284,224,0.12);
        $endpoint = 'https://munikumar.pythonanywhere.com/';
    
        $json_data = json_encode($da); 
        //$escaped_json_data = escapeshellarg($json_data); // Prepare your data

        $options = [
          'http' => [
            'header'  => "Content-type: application/json\r\n",
            //'method'  => "POST",
            'content' => $json_data,
          ],
        ];
        $context  = stream_context_create($options);
        $result = file_get_contents($endpoint, false, $context);
        //echo "<h2>Raw Output:".htmlspecialchars($result)."</h2><br>"; // Display or process the result
        
        $decoded_result = json_decode($result, true); // Decode the JSON string

// Access the first element of the 'prediction' array
      $prediction_value = $decoded_result['prediction'][0];

        if($prediction_value==1){
            $points+=5;
          }
            $max_points = 100; // The maximum points possible
            $normalized_score = ($points / $max_points) * 100;
            echo "Total Points: $points<br>";
echo "Normalized Score (out of 100): $normalized_score";
        }
      ?>
                                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : if($normalized_score>0) :?>
                                <!DOCTYPE html>
                                <html lang="en">
                                <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <style>
                                  /* Variables */
                                  :root {
                                    --rating-size: 10rem;
                                    --bar-size: 1rem;
                                    --background-color: #e7f2fa;
                                    --rating-color-default: #2980b9;
                                    --rating-color-background: #c7e1f3;
                                    --rating-color-good: #27ae60;
                                    --rating-color-meh: #f1c40f;
                                    --rating-color-bad: #e74c3c;
                                  }

                                  /* Rating item */
                                  .rating {
                                    position: relative;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    border-radius: 100%;
                                    overflow: hidden;
                                    background: var(--rating-color-default);
                                    color: var(--rating-color-default);
                                    width: var(--rating-size);
                                    height: var(--rating-size);
                                    font-size: calc(var(--rating-size) / 3);
                                    line-height: 1;
                                  }

                                  /* Rating circle content */
                                  .rating span {
                                    position: relative;
                                    display: flex;
                                    font-weight: bold;
                                    z-index: 2;
                                  }

                                  .rating span small {
                                    font-size: 0.3em;
                                    font-weight: 900;
                                    align-self: center;
                                  }

                                  /* Bar mask, creates an inner circle with the same color as the background */
                                  .rating::after {
                                    content: "";
                                    position: absolute;
                                    inset: var(--bar-size);
                                    background: var(--background-color);
                                    border-radius: inherit;
                                    z-index: 1;
                                  }

                                  /* Bar background */
                                  .rating::before {
                                    content: "";
                                    position: absolute;
                                    inset: var(--bar-size);
                                    border-radius: inherit;
                                    box-shadow: 0 0 0 1rem var(--rating-color-background);
                                    z-index: -1;
                                  }

                                  /* Classes to give different colors to ratings, based on their score */
                                  .rating.good {
                                    background: var(--rating-color-good);
                                    color: var(--rating-color-good);
                                  }

                                  .rating.meh {
                                    background: var(--rating-color-meh);
                                    color: var(--rating-color-meh);
                                  }

                                  .rating.bad {
                                    background: var(--rating-color-bad);
                                    color: var(--rating-color-bad);
                                  }
                                </style>
                                </head>
                                <body>

                                <div class="rating"><?php echo $normalized_score . "/100"; ?></div>

                                <script>
                                  // Find the rating item
                                  const rating = document.querySelector(".rating");

                                  // Get content and get score as an int
                                  const ratingContent = rating.innerHTML;
                                  const ratingScore = parseInt(ratingContent, 10);

                                  // Define if the score is good, meh, or bad according to its value
                                  const scoreClass =
                                    ratingScore > 50 ? "bad" : ratingScore > 35 ? "meh" : "good";

                                  // Add score class to the rating
                                  rating.classList.add(scoreClass);

                                  // After adding the class, get its color
                                  const ratingColor = window.getComputedStyle(rating).backgroundColor;

                                  // Define the background gradient according to the score and color
                                  const gradient = `background: conic-gradient(${ratingColor} ${ratingScore}%, transparent 0 100%)`;

                                  // Set the gradient as the rating background
                                  rating.style.background = gradient;

                                  // Wrap the content in a tag to show it above the pseudo element that masks the bar
                                  rating.innerHTML = `<span>${ratingScore} ${
                                    ratingContent.indexOf("/100") >= 0 ? "<small>/100</small>" : ""
                                  }</span>`;
                                </script>

                                </body>
                                </html>
              <?php endif; endif ;?>

              </form>
    <br><br>
    <header>
        <nav>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Services.php">Services</a></li>
                <li><a href="Contact.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <form id="patientForm" method="POST" >
      <fieldset>
        <legend>Demographic</legend>
        <div class="form-group-new row">
          <label for="age" class="col-sm-2 col-form-label" style="margin-left: 300px;" required>Age:</label>
          <div class="col-sm-2">
              <input type="number" step="1" class="form-control-new" style="margin-left: -300px; height: 40px;" id="age" name="age" placeholder="Enter Age" required>
          </div>
      
          <label for="gender" class="col-sm-2 col-form-label" style="margin-left: -250px;">Gender:</label>
          <div class="col-sm-2">
              <select class="form-control-new" id="gender" name="gender" style="width: 145px;margin-left: -250px;height: 40px;" required>
                  <option value="" disabled selected>Select</option>
                  <option value="0">Male</option>
                  <option value="1">Female</option>
              </select>
          </div>
      
          <label for="weight" class="col-sm-2 col-form-label" style="margin-left: -200px;">Weight (kg):</label>
          <div class="col-sm-2">
              <input type="number" step="1" class="form-control-new" style="height: 40px;margin-left: -250px;" id="weight" name="weight" placeholder="Enter Weight" required>
          </div>
      </div>
      
      </fieldset>
  
      <fieldset>
      <legend>Comorbid Diseases</legend>
<table id="table1" style="width: 100%; height: 300px;">
  <tr>
    <td>
      <div class="form-group">
        <label>DM:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="dm_yes" name="dm" value="1" />
          <label for="dm_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="dm_no" name="dm" value="0" />
          <label for="dm_no">No</label>
        </div>
      </div>
    </td>
    <td>
      <div class="form-group">
        <label>HTN:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="htn_yes" name="htn" value="1">
          <label for="htn_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="htn_no" name="htn" value="0">
          <label for="htn_no">No</label>
        </div>
      </div>
    </td>
    <td>
      <div class="form-group">
        <label>PVD:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="pvd_yes" name="pvd" value="1">
          <label for="pvd_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="pvd_no" name="pvd" value="0">
          <label for="pvd_no">No</label>
        </div>
      </div>
    </td>
    <td>
      <div class="form-group">
        <label>COPD:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="copd_yes" name="copd" value="1">
          <label for="copd_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="copd_no" name="copd" value="0">
          <label for="copd_no">No</label>
        </div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <div class="form-group">
        <label>CVD:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="cvd_yes" name="cvd" value="1">
          <label for="cvd_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="cvd_no" name="cvd" value="0">
          <label for="cvd_no">No</label>
        </div>
      </div>
    </td>
    <td>
      <div class="form-group">
        <label>CHF:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="chf_yes" name="chf" value="1">
          <label for="chf_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="chf_no" name="chf" value="0">
          <label for="chf_no">No</label>
        </div>
      </div>
    </td>
    <td>
      <div class="form-group">
        <label>CAD:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="cad_yes" name="cad" value="1">
          <label for="cad_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="cad_no" name="cad" value="0">
          <label for="cad_no">No</label>
        </div>
      </div>
    </td>
    <td>
      <div class="form-group">
        <label>AMI:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="ami_yes" name="ami" value="1">
          <label for="ami_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="ami_no" name="ami" value="0">
          <label for="ami_no">No</label>
        </div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <div class="form-group">
        <label>Preoperative Renal Failure:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="pre_renal_failure_yes" name="pre_renal_failure" value="1">
          <label for="pre_renal_failure_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="pre_renal_failure_no" name="pre_renal_failure" value="0">
          <label for="pre_renal_failure_no">No</label>
        </div>
      </div>
    </td>
    <td>
      <div class="form-group">
        <label>Infectious Endocarditis:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="infectious_endocarditis_yes" name="infectious_endocarditis" value="1">
          <label for="infectious_endocarditis_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="infectious_endocarditis_no" name="infectious_endocarditis" value="0">
          <label for="infectious_endocarditis_no">No</label>
        </div>
      </div>
    </td>
    <td>
      <div class="form-group">
        <label>Stroke:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="stroke_yes" name="stroke" value="1">
          <label for="stroke_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="stroke_no" name="stroke" value="0">
          <label for="stroke_no">No</label>
        </div>
      </div>
    </td>
    <td>
      <div class="form-group">
        <label>Cardiogenic Shock:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="cardiogenic_shock_yes" name="cardiogenic_shock" value="1">
          <label for="cardiogenic_shock_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="cardiogenic_shock_no" name="cardiogenic_shock" value="0">
          <label for="cardiogenic_shock_no">No</label>
        </div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <div class="form-group">
        <label>LVEF &gt; 30%:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="lvef_greater_30_yes" name="lvef_greater_30" value="1">
          <label for="lvef_greater_30_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="lvef_greater_30_no" name="lvef_greater_30" value="0">
          <label for="lvef_greater_30_no">No</label>
        </div>
      </div>
    </td>
    <td>
      <div class="form-group">
        <label>Smoking:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="smoking_yes" name="smoking" value="1">
          <label for="smoking_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="smoking_no" name="smoking" value="0">
          <label for="smoking_no">No</label>
        </div>
      </div>
    </td>
    <td>
      <div class="form-group">
        <label>Alcohol:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="alcohol_yes" name="alcohol" value="1">
          <label for="alcohol_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="alcohol_no" name="alcohol" value="0">
          <label for="alcohol_no">No</label>
        </div>
      </div>
    </td>
    <td>
      <div class="form-group">
        <label>Hyperuricemia:</label>
        <div style="display: inline-block; margin-right: 10px;">
          <input type="radio" id="hyperuricemia_yes" name="hyperuricemia" value="1">
          <label for="hyperuricemia_yes">Yes</label>
        </div>
        <div style="display: inline-block;">
          <input type="radio" id="hyperuricemia_no" name="hyperuricemia" value="0">
          <label for="hyperuricemia_no">No</label>
        </div>
      </div>
    </td>
  </tr>
</table>

    </fieldset>
    <fieldset>
    <div style="display: flex; justify-content: space-between;">
  <!-- Pre-Operative Section -->
  <div style="width: 48%;">
    <legend>Pre-Operative</legend>
    <div class="form-group" style="width: 100%;">
      <label for="hemoglobin_pre">Hemoglobin (g/dl):</label>
      <input type="number" step="0.01" id="hemoglobin_pre" name="hemoglobin_pre" min="0" placeholder="e.g: 13.8 to 17.2" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="platelet_pre">Platelet (lakhs/cumm):</label>
      <input type="number" step="0.01" id="platelet_pre" name="platelet_pre" min="0" placeholder="e.g: 1.5 to 4.5" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="albumin_pre">Albumin (g/dl):</label>
      <input type="number" step="0.01" id="albumin_pre" name="albumin_pre" min="0" placeholder="e.g: 3.5 to 5.0" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="bilirubin_pre">Bilirubin (mg/dl):</label>
      <input type="number" step="0.01" id="bilirubin_pre" name="bilirubin_pre" min="0" placeholder="e.g: 0.1 to 1.2" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="urea_pre">Urea (mg/dl):</label>
      <input type="number" step="0.01" id="urea_pre" name="urea_pre" min="0" placeholder="e.g: 7 to 20" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="ser_creatinine_pre">Serum Creatinine (mg/dl):</label>
      <input type="number" step="0.01" id="ser_creatinine_pre" name="ser_creatinine_pre" min="0" placeholder="e.g: 0.59 to 1.35" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="sodium_pre">Sodium (mmol/L):</label>
      <input type="number" step="0.01" id="sodium_pre" name="sodium_pre" min="0" placeholder="e.g: 135 to 145" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="potassium_pre">Potassium (mmol/L):</label>
      <input type="number" step="0.01" id="potassium_pre" name="potassium_pre" min="0" placeholder="e.g: 3.5 to 5.0" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="egfr_greater_90_pre">eGFR:</label>
      <select id="egfr_greater_90_pre" name="egfr_greater_90_pre" required>
        <option value="" disabled selected>select</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
      </select>
    </div>
  </div>

  <!-- Post-Operative Section -->
  <div style="width: 48%;">
    <legend>Post-Operative</legend>
    <div class="form-group" style="width: 100%;">
      <label for="hemoglobin_post">Hemoglobin (g/dl):</label>
      <input type="number" step="0.01" id="hemoglobin_post" name="hemoglobin_post" min="0" placeholder="e.g: 13.8 to 17.2" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="platelet_post">Platelet (lakhs/cumm):</label>
      <input type="number" step="0.01" id="platelet_post" name="platelet_post" min="0" placeholder="e.g: 1.5 to 4.5" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="albumin_post">Albumin (g/dl):</label>
      <input type="number" step="0.01" id="albumin_post" name="albumin_post" min="0" placeholder="e.g: 3.5 to 5.0" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="bilirubin_post">Bilirubin (mg/dl):</label>
      <input type="number" step="0.01" id="bilirubin_post" name="bilirubin_post" min="0" placeholder="e.g: 0.1 to 1.2" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="urea_post">Urea (mg/dl):</label>
      <input type="number" step="0.01" id="urea_post" name="urea_post" min="0" placeholder="e.g: 7 to 20" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="ser_creatinine_post">Serum Creatinine (mg/dl):</label>
      <input type="number" step="0.01" id="ser_creatinine_post" name="ser_creatinine_post" min="0" placeholder="e.g: 0.59 to 1.35" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="sodium_post">Sodium (mmol/L):</label>
      <input type="number" step="0.01" id="sodium_post" name="sodium_post" min="0" placeholder="e.g: 135 to 145" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="potassium_post">Potassium (mmol/L):</label>
      <input type="number" step="0.01" id="potassium_post" name="potassium_post" min="0" placeholder="e.g: 3.5 to 5.0" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="egfr_greater_90_post">eGFR:</label>
      <select id="egfr_greater_90_post" name="egfr_greater_90_post" required>
        <option value="">select</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
      </select>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="bicarbonate_post">Bicarbonate (mmol/L):</label>
      <input type="number" step="0.01" id="bicarbonate_post" name="bicarbonate_post" min="0" placeholder="e.g: 22 - 29">
    </div>
  </div>
</div>

    </fieldset>
      <fieldset>
          <legend>URINE OUTPUT </legend>
        <div class="form-group">
          <label for="day_1_input_output">Day 1 Input/Output:</label>
          <input type="text"  id="day_1_input_output" name="day_1_input_output" min="0" placeholder="e.g: 2800/1900 " required>
        </div>
        <div class="form-group">
          <label for="day_2_input_output">Day 2 Input/Output:</label>
          <input type="text"  id="day_2_input_output" name="day_2_input_output" min="0" placeholder="e.g: 2800/1900 " required>
        </div>
        <div class="form-group">
          <label for="day_3_input_output">Day 3 Input/Output:</label>
          <input type="text"  id="day_3_input_output" name="day_3_input_output" min="0" placeholder="e.g: 2800/1900 " required>
        </div>
        <div class="form-group">
          <label for="day_4_input_output">Day 4 Input/Output:</label>
          <input type="text"  id="day_4_input_output" name="day_4_input_output" min="0" placeholder="e.g: 2800/1900 " required>
        </div>
        <div class="form-group">
          <label for="day_5_input_output">Day 5 Input/Output:</label>
          <input type="text"  id="day_5_input_output" name="day_5_input_output" min="0" placeholder="e.g: 2800/1900 " required>
        </div>
        <div class="form-group">
          <label for="day_6_input_output">Day 6 Input/Output:</label>
          <input type="text"  id="day_6_input_output" name="day_6_input_output" min="0" placeholder="e.g: 2800/1900 " required>
        </div>
        <div class="form-group">
          <label for="day_7_input_output">Day 7 Input/Output:</label>
          <input type="text"  id="day_7_input_output" name="day_7_input_output" min="0" placeholder="e.g: 2800/1900 " required>
        </div>
      </fieldset>
      <fieldset>
      <div style="display: flex; justify-content: space-between; align-items: flex-start;">
  <!-- Long Term Treatment -->
  <div style="width: 48%;">
    <legend>Long Term Treatment</legend>
    <div class="form-group" style="width: 100%;">
      <label for="beta_blockers_pre">Beta-Blockers:</label>
      <select id="beta_blockers_pre" name="beta_blockers_pre" required>
        <option value="" disabled selected>select</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
      </select>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="ccb_pre">CCB:</label>
      <select id="ccb_pre" name="ccb_pre" required>
        <option value="" disabled selected>select</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
      </select>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="diuretics_pre">Diuretics:</label>
      <select id="diuretics_pre" name="diuretics_pre" required>
        <option value="" disabled selected>select</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
      </select>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="ace_inhibitors_pre">ACE Inhibitors:</label>
      <select id="ace_inhibitors_pre" name="ace_inhibitors_pre" required>
        <option value="" disabled selected>select</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
      </select>
    </div>
  </div>

  <!-- Inotropic Drugs -->
  <div style="width: 48%;">
    <legend>Inotropic Drugs</legend>
    <div class="form-group" style="width: 100%;">
      <label for="dopamine">DOPAMINE (ml/hr):</label>
      <input type="number" step="0.01" id="dopamine" name="dopamine" placeholder="low:0.5-2 moderate:2-10 high:10-20" min="0" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="adrenaline">ADRENALINE (ml/hr):</label>
      <input type="number" step="0.01" id="adrenaline" name="adrenaline" placeholder="low:0.5-2 moderate:2-10 high:10-20" min="0" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="noradrenaline">NON-ADRENALINE (ml/hr):</label>
      <input type="number" step="0.01" id="noradrenaline" name="noradrenaline" placeholder="low:0.5-2 moderate:2-10 high:10-20" min="0" required>
    </div>
    <div class="form-group" style="width: 100%;">
      <label for="vasopressin">VASOPRESSIN (ml/hr):</label>
      <input type="number" step="0.01" id="vasopressin" name="vasopressin" placeholder="low:0.5-2 moderate:2-10 high:10-20" min="0" required>
    </div>
  </div>
</div>

      </fieldset>
      <fieldset>
      <div style="display: flex; align-items: center;">
  <!-- Type of Surgery -->
  <div style="width: 48%;">
    <legend>Type of Surgery</legend>
    <div class="form-group">
      <label for="rrt">RRT:</label>
      <input type="number" step="0.01" id="rrt" name="rrt" placeholder="" required>
    </div>
    <div class="form-group">
      <label for="cabg">CABG:</label>
      <input type="number" step="0.01" id="cabg" name="cabg" placeholder="e.g: 0 or 1" required>
    </div>
    <div class="form-group">
      <label for="valvular_surgery">Valvular Surgery:</label>
      <input type="number" step="0.01" id="valvular_surgery" name="valvular_surgery" placeholder="e.g: 0 or 1" required>
    </div>
    <div class="form-group">
      <label for="asd_closure">ASD Closure:</label>
      <input type="number" step="0.01" id="asd_closure" name="asd_closure" placeholder="e.g: 0 or 1" required>
    </div>
  </div>

  <!-- Divider -->
  <div style="width: 4%; text-align: center;">
    <div style="height: 100%; width: 1px; background-color: black; margin: 0 auto;"></div>
  </div>

  <!-- Perfusion Data -->
  <div style="width: 48%;">
    <legend>Perfusion Data</legend>
    <div class="form-group">
      <label for="cpb_time">CPB (mins):</label>
      <input type="number" step="0.01" id="cpb_time" name="cpb_time" min="0" placeholder="e.g: 60 - 180" required>
    </div>
    <div class="form-group">
      <label for="x_clamp_time">X-CLAMP TIME (mins):</label>
      <input type="number" step="0.01" id="x_clamp_time" name="x_clamp_time" min="0" placeholder="e.g: 40 - 120" required>
    </div>
    <div class="form-group">
      <label for="surgery_duration">SURGERY DURATION (mins):</label>
      <input type="number" step="0.01" id="surgery_duration" name="surgery_duration" placeholder="e.g: 120 - 360" min="0" required>
    </div>
    <div class="form-group">
      <label for="creatinine_difference">Difference of Creatinine AKI:</label>
      <input type="number" step="0.01" id="creatinine_difference" name="creatinine_difference" placeholder="" min="0" required>
    </div>
  </div>
</div>
<div style="text-align: center; margin-top: 20px;">
  <button type="submit" style="background-color:#FFA500; color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 5px;">
    Submit
  </button>
    </form>  
  </body>
  </html>
