
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
?>


