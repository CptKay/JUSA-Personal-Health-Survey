<!-- HEADER  -->
<?php

// session_start();

// include "./includes/tools.php";

include "./includes/header.php";
?>

<!-- END:HEADER -->

<body>

  <?php
  session_destroy();
  ?>

  <header>

    <nav class="navbar-expand">
      <ol class="cd-multi-steps text-center custom-icons">
        <li class="current"><em>Question 1</em></li>
        <li><em>Question 02</em></li>
        <li><em>Question 03</em></li>
        <li><em>Question 04</em></li>
        <li><em>Question 05</em></li>
        <li><em>Question 06</em></li>
        <li><em>Question 07</em></li>
        <li><em>Question 08</em></li>
        <li><em>Question 09</em></li>
        <li><em>Question 10</em></li>
        <li><em>Evaluation</em></li>
      </ol>
    </nav>
  </header>

  <!-- QUESTION -->

  <div class="container text-center">
    <form action="question2.php" method="post" onsubmit="return validateRange();">
      <div class="mb-3 mt-3 text-light">
        <h2><strong>Question 01: </strong>How healthy are you physically?</h2>
        <div class="container text-center">
          <div class="row">
            <div class="col-md-3 text-start">
              Not at all healthy
            </div>
            <div class="col-md-6">

            </div>
            <div class="col-md-3 text-end">
              Extremely healthy
            </div>
          </div>
        </div>
        <!-- <label for="q01" class="form-label"><strong>Question 01: </strong>How healthy are you physically?</label> -->
        <input type="hidden" name="questionId" value="q01" />
        <input type="hidden" class="btn-block" name="RangeSlider-q01_changed" id="RS_changed">
        <div>
          <div>

            <input type="range" class="form-range" min="1" max="5" id="q01-RS" name="RangeSlider-q01" onchange="sliderChanged();" list="markers" />
              <option value="1" label="Not at all healthy"></option>
              <option value="2"></option>
              <option value="3"></option>
              <option value="4"></option>
              <option value="5" label="Extremely healthy"></option>
            </datalist>

          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-lg mt-5 w-50">Submit</button>

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

    <!-- END:QUESTION -->


</body>