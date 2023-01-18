<!doctype html>
<html lang="en">

<head>
  <title>Health Survey</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- styles -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700'>
    <link rel="stylesheet" type="text/css" href="styles/style.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="scripts/validation.js" ></script>
</head>
<?php
    session_start();
    include "./includes/data-collector.php";
    ?>
    <!-- HEADER  -->
    
    <!-- END:HEADER -->
    <header>
    <nav class="navbar-expand">
		<ol class="cd-multi-steps text-center custom-icons">
			<li class="visited"><a href="#">Question 01</a></li>
			<li class="visited"><a href="#">Question 02</a></li>
            <li class="visited"><a href="#">Question 03</a></li>
            <li class="visited"><a href="#">Question 04</a></li>
            <li class="visited"><a href="#">Question 05</a></li>
            <li class="visited"><a href="#">Question 06</a></li>
            <li class="visited"><a href="#">Question 07</a></li>
            <li class="visited"><a href="#">Question 08</a></li>
            <li class="visited"><a href="#">Question 09</a></li>
			<li class="visited"><a href="#">Question 10</a></li>
			<li class="current"><em>Evaluation</em></li>
		</ol>
	</nav>
</header>
    <body>
    <div class="container text-center text-light">
        <h1>
    <?php
        // Data question 01;

      
        /* if(isset($_POST["RangeSlider-q01"])){
            echo "Physical health:".$_POST["RangeSlider-q01"]; */

            // Your Slider value is here.
        /* } else{
        Echo "Please slide the Slider Bar and Press Submit.";
        } */

// Creating a array
$array = array($_SESSION);

// sum up the variable
$sum = 0;

// Counting result of variable
    if (isset($array) && !is_null($array)) {
    foreach ($_SESSION as $session) {
        if (isset($question['q01']) && is_numeric($question['q01'])) {
            $sum += $question['q01'];
        }
        if (isset($question['q02']) && is_numeric($question['q02'])) {
            $sum += $question['q02'];
        }
        if (isset($question['q03']) && is_numeric($question['q03'])) {
            $sum += $question['q03'];
        }
        if (isset($question['q04']) && is_numeric($question['q04'])) {
            $sum += $question['q04'];
        }
        if (isset($question['q05']) && is_numeric($question['q05'])) {
            $sum += $question['q05'];
        }
        if (isset($question['q06']) && is_numeric($question['q06'])) {
            $sum += $question['q06'];
        }
        if (isset($question['q07']) && is_numeric($question['q07'])) {
            $sum += $question['q07'];
        }
        if (isset($question['q08']) && is_numeric($question['q08'])) {
            $sum += $question['q08'];
        }
        if (isset($question['q09']) && is_numeric($question['q09'])) {
            $sum += $question['q09'];
        }
        if (isset($question['q10']) && is_numeric($question['q10'])) {
            $sum += $question['q10'];
        }
    }
    echo $sum;
}
    if ($sum > 30) {
        echo "We have the Right Program for you Beginner fitness!
        <br>
        <h2>You are not Healthy</h2>
        <br>
        <h2>Total Score:$sum</h2>
        <br>
        <br>";
    }
    if ($sum < 30) {
        echo "We have the Right Program for you Advance fitness!
        <br>
        <h2>You are Healthy</h2>
        <br>
        <h2>Total Score:$sum</h2>
        <br>
        <br>";
        
    }
        ?>
</h1>
</div>
</body>
        
