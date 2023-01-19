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
    <body>
    <!-- HEADER  -->
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
    <!-- END:HEADER -->
    <div class="container text-center text-light">
        <h1>
    <!-- this sum up the answer and makes a total -->
    <?php
        $sum = 0;
        if(isset($_SESSION)){
            foreach($_SESSION as $question){
                if(isset($question['answer']) && is_numeric($question['answer'])){
                    $sum += $question['answer'];
                }
            }
            echo $sum;
        }
        /* this show the option according to the result */
    if ($sum < 30) {
        echo "We have the Right Program for you Beginner fitness!
        <br>
        <h2>You are not Healthy</h2>
        <br>
        <h2>Total Score:$sum</h2>
        <br>
        <br>";
    }
    if ($sum > 30) {
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
        
