    <!-- HEADER  -->
    <?php
   
    include "./includes/header.php";
    ?>
    <!-- END:HEADER -->
    <header>
    <nav class="navbar-expand">
		<ol class="cd-multi-steps text-center custom-icons">
			<li class="visited"><a href="index.php">Question 01</a></li>
			<li class="visited"><a href="question2.php">Question 02</a></li>
      <li class="visited"><a href="question3.php">Question 03</a></li>
            <li class="current"><em>Question 04</em></li>
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
    <body>
    <!-- QUESTION -->
<div class="container text-center text-light">
<form class="form-horizontal" action="question5.php" method="post" name="q04" id="q04" >
<input type="hidden" name="questionId" value="q04" />
<h1 id="">What additional physical activity do you
do most?</h1>

    <!--Radio Buttons-->
<div class="container d-flex justify-content-center radio">

<div class="form-check form-check-inline radio text-light">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="q04" value="No Sport" required/>
  <label class="form-check-label" for="inlineRadio1">No additional physical activity</label>
</div>

<div class="form-check form-check-inline text-light">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="q04" value="Lifting
weights" required/>
  <label class="form-check-label" for="inlineRadio2">Lifting
weights</label>
</div>
<div class="form-check form-check-inline text-light">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="q04" value="Walking" required/>
  <label class="form-check-label" for="inlineRadio2">Walking</label>
</div>
<div class="form-check form-check-inline text-light">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="q04" value="Jogging" required/>
  <label class="form-check-label" for="inlineRadio2">Jogging</label>
</div>
<div class="form-check form-check-inline text-light">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="q04" value="Running" required/>
  <label class="form-check-label" for="inlineRadio2">Running</label>
</div>
</div>
<div class="container d-flex justify-content-center radio">

<div class="form-check form-check-inline radio text-light">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="q04" value="Swimming" required/>
  <label class="form-check-label" for="inlineRadio1">Swimming </label>
</div>

<div class="form-check form-check-inline text-light">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="q04" value="Dancing" required/>
  <label class="form-check-label" for="inlineRadio2">Dancing</label>
</div>
<div class="form-check form-check-inline text-light">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="q04" value="Aerobics" required/>
  <label class="form-check-label" for="inlineRadio2">Aerobics</label>
</div>
<div class="form-check form-check-inline text-light">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="q04" value="Pilates" />
  <label class="form-check-label" for="inlineRadio2">Pilates</label>
</div>
<div class="form-check form-check-inline text-light">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="q04" value="Team sports" />
  <label class="form-check-label" for="inlineRadio2">Team sports</label>
</div>
</div>
<div class="container d-flex justify-content-center radio">

<p>Other:</p>
        <input type="text" name="inlineRadioOptions" id="q04">

</div>
<div>
    <button class="btn btn-primary btn-lg mt-5 w-50" type="submit">Next</button>
</div>
</form>
</div>
</body>
    <!-- END:QUESTION -->