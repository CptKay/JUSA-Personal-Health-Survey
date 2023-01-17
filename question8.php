
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
            <li class="visited"><a href="#">Question 05</a></li>
            <li class="visited"><a href="#">Question 06</a></li>
            <li class="visited"><a href="#">Question 07</a></li>
            <li class="current"><em>Question 08</em></li>
            <li><em>Question 09</em></li>
			<li><em>Question 10</em></li>
			<li><em>Evaluation</em></li>
		</ol>
	</nav>
</header>
    <body>
    <!-- QUESTION -->
    <div class="container text-center">
<form form action="question9.php" method="post" class="form-horizontal" id="q02">
<h1 id="">On a typical day, how many of your
meals or snacks contain vegetables?:</h1>

    <!--Radio Buttons-->
<div class="container d-flex justify-content-center radio">
<input type="hidden" name="questionId" value="q08" />
<input type="number" min="1" max="5" id="q08-N" name="NumberField-q08" class="form-control" placeholder="Enter up to 5 consumptions" required list="defaultNumbers" />
  <label class="form-label" for="typeNumber">Number input</label>
  <datalist id="defaultNumbers">
  <option value="1"></option>
  <option value="2"></option>
  <option value="3"></option>
  <option value="4"></option>
  <option value="5"></option>
</datalist>
</div>
<div>
    <button class="btn btn-primary" type="submit">Next</button>
</div>
</form>
</body>
    <!-- END:QUESTION -->