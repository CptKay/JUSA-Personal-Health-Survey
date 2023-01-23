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
    $_SESSION['pages'][] = $_SERVER['REQUEST_URI'];
    include "./includes/data-collector.php";
    ?>

    <body>
    <header>

<nav class="navbar-expand">
  <ol class="cd-multi-steps text-center custom-icons">


  <?php if (in_array('/index.php',$_SESSION['pages'])): ?>
    <li class="current"><em>Question 01</em></li>
    <li><em>Question 02</em></li>
    <li><em>Question 03</em></li>
    <li><em>Question 04</em></li>
    <li><em>Question 05</em></li>
  <?php else: ?>
    <li class="visited"><a href="index.php">Question 01</a></li>
  <?php endif ?>

  <?php if (in_array('/question2.php',$_SESSION['pages'])): ?>
    <li class="visited"><a href="index.php">Question 01</a></li>
    <li class="current"><em>Question 02</em></li>
    <li><em>Question 03</em></li>
    <li><em>Question 04</em></li>
    <li><em>Question 05</em></li>
  <?php else: ?>
    <li class="visited"><a href="question2.php">Question 02</a></li>
  <?php endif ?>

  <?php if (in_array('/question3.php',$_SESSION['pages'])): ?>
    <li class="current"><em>Question 03</em></li>
  <?php else: ?>
    <li class="visited"><a href="question3.php">Question 03</a></li>
  <?php endif ?>


			
            <li class="visited"><a onclick="onctext(this);" href="question3.php" >Question 03</a></li>
            <li class="visited"><a href="question4.php" onclick="onctext(this);">Question 04</a></li>
            <li class="visited"><a onclick="onctext(this);" href="question5.php" >Question 05</a></li>
            <li class="visited"><a href="#">Question 06</a></li>
            <li class="visited"><a href="#">Question 07</a></li>
            <li class="visited"><a href="#">Question 08</a></li>
            <li class="current"><em>Question 09</em></li>
    <li><em>Question 10</em></li>
    <li><em>Evaluation</em></li>
  </ol>
  <script type="text/javascript">
  function onctext(elm) {
    var text = elm.innerHTML;
    document.getElementsByClassName("visited").innerHTML = text;

    // set active class
    var visited = document.getElementsByClassName("visited")[0];
    if (visited) {
        visited.className = visited.className.replace( ' vistied', ' current');
    }
    console.log()
    elm.className += ' visited';
}
</script>
</nav>
</header>