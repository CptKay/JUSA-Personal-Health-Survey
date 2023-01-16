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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
<!-- HEADER  -->
    <?php
    include "./includes/tools.php";
    include "./includes/header.php";
    ?>
    <!-- END:HEADER -->

    <!-- QUESTION -->
    <section>

    <form action="result.php" method="post">
  <div class="mb-3 mt-3">
    <h2><strong>Question 01: </strong>How healthy are you physically?</h2>
  <!-- <label for="q01" class="form-label"><strong>Question 01: </strong>How healthy are you physically?</label> -->
<input type="range" class="form-range" min="1" max="5" id="q01" name="q01" list="markers" />

<datalist id="markers">
  <option value="1" label="Not at all healthy"></option>
  <option value="2"></option>
  <option value="3"></option>
  <option value="4"></option>
  <option value="5" label="Extremely healthy"></option>
</datalist>

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        <?php
        // include "./includes/questions.php";

        /* if(isset($_POST["q01"])){
            echo "Physical health:".$_POST["q01"];
            // Your Slider value is here.
        } else{
        Echo "Please slide the Slider Bar and Press Submit.";
        } */


        ?>
    </section>
    <!-- END:QUESTION -->


</body>