<!-- HEADER  -->
<?php
    
    include "./includes/header.php";
    ?>
    <!-- END:HEADER -->
    <header>
    <nav class="navbar-expand">
		<ol class="cd-multi-steps text-center custom-icons">
			<li class="visited"><a href="#">Question 01</a></li>
			<li class="visited"><a href="#">Question 02</a></li>
            <li class="visited"><a href="#">Question 03</a></li>
            <li class="visited"><a href="#">Question 04</a></li>
            <li class="current"><em>Question 05</em></li>
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

    <form action="question6.php" method="post" onsubmit="return validateRange();">
  <div class="mb-3 mt-3 text-light">
    <h2><strong>Question 05: </strong>Do you feel you do too little, just enough
or way too much additional physical
activity?</h2>

    <div class="row">
    <div class="col-md-3">
    Far too little
    </div>
    <div class="col-md-6 text-center">
    just right
    </div>
    <div class="col-md-3 text-end">
    far too much
    </div>
  </div>
  <!-- <label for="q01" class="form-label"><strong>Question 01: </strong>How healthy are you physically?</label> -->
<input type="hidden" name="questionId" value="q05" />
<input type="hidden" class="btn-block" name="RangeSlider-q05_changed" id="RS_changed">
<div>
      <div>

  <input type="range" class="form-range" min="1" max="5" id="q05-RS" name="RangeSlider-q05" onchange="sliderChanged();" list="markers" />


<datalist id="markers">
  <option value="1" label="Far too little"></option>
  <option value="2"></option>
  <option value="3" label="just right"></option>
  <option value="4"></option>
  <option value="5" label="far too much"></option>
</datalist>

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