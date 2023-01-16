<!doctype html>
<html lang="en">
<head>
    <title>Health Survey</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- styles -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700'>
    <link rel="stylesheet" type="text/css" href="includes/css/style.css">

</head>

<body>
    <!-- HEADER  -->
    <?php
    include "./includes/tools.php";
    include "./includes/header.php";
    ?>
    <!-- END:HEADER -->

    <!-- QUESTION -->
    <div class="container text-center">
<form class="form-horizontal" id="q02">
<h1 id="">On a typical day, how many of your
meals or snacks contain vegetables?:</h1>

    <!--Radio Buttons-->
<div class="container d-flex justify-content-center radio">

<input type="number" id="typeNumber" class="form-control" />
  <label class="form-label" for="typeNumber">Number input</label>
</div>
<div>
    <button class="btn btn-primary" type="submit">Next</button>
</div>
</form>
</body>
    <!-- END:QUESTION -->