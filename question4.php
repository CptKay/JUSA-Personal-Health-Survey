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
      <!-- END:HEADER -->
      <!-- QUESTION -->
      <div class="container justify-content-center  justify-content-between text-center text-light">
        <form class="form-check form-horizontal" action="question5.php" method="post" name="q04" id="q04">
          <input type="hidden" name="questionId" value="q04" />
          <h1 id="">What additional physical activity do you
            do most?</h1>
          <!--Radio Buttons-->
          <div class="form-check form-check-inline form-horizontal">
            <div class="row">
              <div class="form-check col">
                <input class="form-check-input" type="radio" name="answer" id="q04" value="1" required />
                <label class="form-check-label" for="inlineRadio2">No additional physical activity</label>
              </div>
              <div class="form-check col">
                <input class="form-check-input" type="radio" name="answer" id="q04" value="4" required />
                <label class="form-check-label" for="inlineRadio2">Lifting weights</label>
              </div>
              <div class="form-check col">
                <input class="form-check-input" type="radio" name="answer" id="q04" value="3" required />
                <label class="form-check-label" for="inlineRadio2">Walking</label>
              </div>
            </div>
            <div class="row">
              <div class="form-check col">
                <input class="form-check-input" type="radio" name="answer" id="q04" value="5" required />
                <label class="form-check-label" for="inlineRadio2">Jogging</label>
              </div>
              <div class="form-check col">
                <input class="form-check-input" type="radio" name="answer" id="q04" value="5" required />
                <label class="form-check-label" for="inlineRadio2">Running</label>
              </div>
              <div class="form-check col">
                <input class="form-check-input" type="radio" name="answer" id="q04" value="5" required />
                <label class="form-check-label" for="inlineRadio2">Swimming </label>
              </div>
            </div>
            <div class="row">
              <div class="form-check col">
                <input class="form-check-input" type="radio" name="answer" id="q04" value="5" required />
                <label class="form-check-label" for="inlineRadio2">Dancing</label>
              </div>
              <div class="form-check col">
                <input class="form-check-input" type="radio" name="answer" id="q04" value="5" required />
                <label class="form-check-label" for="inlineRadio2">Aerobics</label>
              </div>
              <div class="form-check col">
                <input class="form-check-input" type="radio" name="answer" id="q04" value="5" required />
                <label class="form-check-label" for="inlineRadio2">Pilates</label>
              </div>
            </div>
            <div class="row">
              <div class="form-check col-1">
                <input class="form-check-input" type="radio" name="answer" id="q04" value="3" required />
                <label class="form-check-label" for="inlineRadio2">Team sports</label>
              </div>
              <div class="row">
                <div class="form-check col-3">
                  <input class="form-check-input" type="radio" name="answer" id="q04" value="3" onchange="EnableDisableTextBoxNext('Other')" />
                  <label class="form-check-label" for="inlineRadio2">Other
                    <input class="col" type="text" id="addmoreDetailsOnSelection" disabled="disabled">
                    <input class="col" type="hidden" name="answer" id="addmoreDetailsOnSelection" value="3">
                  </label>
                </div>
              </div>
              <div>
                <button class="btn btn-primary btn-lg mt-5 w-50" type="submit">Next</button>
              </div>
            </div>
        </form>
      </div>
    </body>
    <!-- END:QUESTION -->