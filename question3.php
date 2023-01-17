<!-- HEADER  -->
<?php
    
    include "./includes/header.php";
    ?>
    <!-- END:HEADER -->
<body>
    <header>
    <nav class="navbar-expand">
		<ol class="cd-multi-steps text-center custom-icons">
			<li class="visited"><a href="#">Question 01</a></li>
			<li class="visited"><a href="#">Question 02</a></li>
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
    <!-- QUESTION -->
    <div class="container text-center">

    <form action="question4.php" method="post" onsubmit="return validateRange();">
  <div class="mb-3 mt-3 text-light">
    <h2><strong>Question 03: </strong>How important is physical activity to you?</h2>
    <div class="container text-center">
    <div class="row">
    <div class="col-md-3 text-start">
    Not at all important
    </div>
    <div class="col-md-6">
      
    </div>
    <div class="col-md-3 text-end">
    Very important
    </div>
  </div>
  <!-- <label for="q01" class="form-label"><strong>Question 01: </strong>How healthy are you physically?</label> -->
<input type="hidden" name="questionId" value="q03" />
<input type="hidden" class="btn-block" name="RangeSlider-q03_changed" id="RS_changed">
<div>
      <div>

  <input type="range" class="form-range" min="1" max="5" id="q03-RS" name="RangeSlider-q03" onchange="sliderChanged();" list="markers" />


<datalist id="markers">
  <option value="1" label=""></option>
  <option value="2"></option>
  <option value="3"></option>
  <option value="4"></option>
  <option value="5" label=""></option>
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
    </div>
    <!-- END:QUESTION -->