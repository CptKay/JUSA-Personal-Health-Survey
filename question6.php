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
            <li class="current"><em>Question 06</em></li>
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
<form action="question7.php" method="post" class="form-horizontal" id="q06">
<h2 id="">On a typical day, how many of your
meals or snacks contain carbohydrates?:</h2>

    <!--Radio Buttons-->
<div class="container d-flex justify-content-center radio">
<input type="hidden" name="questionId" value="q06" />
<input type="number" min="0" max="5" id="q06-N" name="NumberField-q06" class="form-control" placeholder="Enter up to 5 consumptions" required list="defaultNumbers" />
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