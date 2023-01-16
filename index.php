

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    
<!-- HEADER  -->
    <?php
    // session_start();
    session_destroy();
    include "./includes/tools.php";
    include "./includes/header.php";
    ?>
    <!-- END:HEADER -->

    <body>

    <!-- QUESTION -->
    <section>

    <form action="question2.php" method="post">
  <div class="mb-3 mt-3">
    <h2><strong>Question 01: </strong>How healthy are you physically?</h2>

    <div class="row">
    <div class="col-sm-3">
    Not at all healthy
    </div>
    <div class="col-sm-6">
      
    </div>
    <div class="col-sm-3">
    Extremely healthy
    </div>
  </div>
  <!-- <label for="q01" class="form-label"><strong>Question 01: </strong>How healthy are you physically?</label> -->
<input type="hidden" name="questionId" value="q01" />
<div>
      <div>

  <input type="range" class="form-range" min="1" max="5" id="q01-RS" name="RangeSlider-q01" list="markers" />

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