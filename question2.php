<?php session_start();
?>
    <!-- HEADER  -->
    <?php
    include "./includes/tools.php";
    include "./includes/header.php";
    ?>
    <!-- END:HEADER -->
<body>
    <!-- QUESTION -->
<div class="container text-center">
<form class="form-horizontal" action="result.php" method="post" id="q02">
<h1 id="">Do you take nutritional supplements? </h1>

    <!--Radio Buttons-->
<div class="container d-flex justify-content-center radio">

<div class="form-check form-check-inline radio">
  <input class="form-check-input" type="radio" name="radioButtons" id="qa2" value="option1" />
  <label class="form-check-label" for="qa1">Yes</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="radioButtons" id="qa2" value="option2" />
  <label class="form-check-label" for="qa2">No</label>
</div>

</div>
<div>
    <button class="btn btn-primary" type="submit" name="submit" value="submit">Next</button>
</div>
</form>
<?php
 
 if(isset($_POST['submit']))
 {
 $name1=@trim($_POST['radioButtons']);
   
 if($name1=="" ) 
 {
 echo "Select first";
 }
 else
 {
 echo "Correct<br>"; 
 echo "You have selected :$name1";
 }
 }
  
 ?>
</div>
</body>
    <!-- END:QUESTION -->