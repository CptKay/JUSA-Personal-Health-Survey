    <!-- HEADER  -->
    <?php
    include "./includes/header.php";
    ?>
    
    <!-- END:HEADER -->
<body>
<header>
<nav class="navbar-expand">
		<ol class="cd-multi-steps text-center custom-icons">
			<li class="visited"><a href="index.php"><em>Question 01</em></a></li>
			<li class="current" ><em>Question 2</em></li>
            <li><em>Question 03</em></li>
            <li><em>Question 04</em></li>
            <li><em>Question 05</em></li>
            <li><em>Question 06</em></li>
            <li><em>Question 07</em></li>
            <li><em>Question 08</em></li>
            <li><em>Question 09</em></li>
			<li><aem>Question 10</aem></li>
			<li><em>Evaluation</em></li>
		</ol>
	</nav>
</header>
    <!-- QUESTION -->
<div class="container text-center">
<form class="form-horizontal text-light" action="question3.php" method="post" name="q02" id="q02">
<h1 id="">Do you take nutritional supplements? </h1>

    <!--Radio Buttons-->
<div class="container d-flex justify-content-center radio">

<div class="form-check form-check-inline radio text-light">
<input type="hidden" name="questionId" value="q02" />
  <input class="form-check-input" type="radio" name="radioButtons" id="q02" value="2" required/>
  <label class="form-check-label" for="q02">Yes</label>
</div>

<div class="form-check form-check-inline text-light">
<!-- <input type="hidden" name="questionId" value="q02b" /> -->
  <input class="form-check-input" type="radio" name="radioButtons" id="q02" value="2" required/>
  <label class="form-check-label" for="q02">No</label>
</div>

</div>
<div>
    <button class="btn btn-primary btn-lg mt-5 w-50" type="submit" name="submit">Next</button>
</div>
</form>

</div>
</body>
    <!-- END:QUESTION -->