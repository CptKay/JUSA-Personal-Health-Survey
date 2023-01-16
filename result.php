    <!-- HEADER  -->
    <?php
    include "./includes/tools.php";
    include "./includes/header.php";
       ?>
    <!-- END:HEADER -->
    <body>
    <?php
        // Data question 01;

        if(isset($_POST["q01"])){
            echo "Physical health:".$_POST["q01"];
            // Your Slider value is here.
        } else{
        Echo "Please slide the Slider Bar and Press Submit.";
        }


        ?>
    
</div>