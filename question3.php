<?php
include "./includes/header.php";
?>

<body>
  <!-- HEADER  -->
  <header>
    <nav class="navbar-expand">
      <ol class="cd-multi-steps text-center custom-icons">
        <li class="visited"><a href="index.php">Question 01</a></li>
        <li class="visited"><a href="question2.php">Question 02</a></li>
        <li class="current"><em>Question 03</em></li>
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
  <!-- END:HEADER -->
  <!-- QUESTION -->
  <div class="container text-center">
    <form action="question4.php" method="post" onsubmit="return validateRange();">
      <div class="mb-3 mt-3 text-light">
        <h1>How important is physical activity to you?</h1>
        <div class="row">
          <div class="col text-start">
            Not at all important
          </div>
          <div class="col">
          </div>
          <div class="col text-end">
            Very important
          </div>
        </div>
      </div>
      <!-- <label for="q01" class="form-label"><strong>Question 01: </strong>How healthy are you physically?</label> -->
      <input type="hidden" name="questionId" value="q03" />
      <input type="hidden" class="btn-block" name="answer_changed" id="RS_changed">
      <div>
        <div>
          <input type="range" class="form-range" min="1" max="5" id="q03-RS" name="answer" onchange="sliderChanged();" list="markers" />
          <option value="1" label=""></option>
          <option value="2"></option>
          <option value="3"></option>
          <option value="4"></option>
          <option value="5" label=""></option>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-lg mt-5 w-50">Next</button>
    </form>
  </div>
  <!-- END:QUESTION -->