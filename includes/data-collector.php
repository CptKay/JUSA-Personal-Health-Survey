
 <!-- HEADER  -->
    <?php
    include "tools.php";
       ?>
    <!-- END:HEADER -->
    <body>
    <?php

// $POST of previous page
if(isset($_POST["questionId"])) {
$questionId = $_POST["questionId"];

$_SESSION[$questionId] = $_POST;
}

prettyPrint($_SESSION);

/* 
        // Data question 01;

        if(isset($_POST["RangeSlider-q01"])){
            echo "Physical health:".$_POST["RangeSlider-q01"];
            // Your Slider value is here.
        } else{
        Echo "Please slide the Slider Bar and Press Submit.";
        } */


        ?>


