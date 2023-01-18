    <!-- HEADER  -->
    <?php
    
    // include "./includes/tools.php";
    include "./includes/header.php";
       ?>
    <!-- END:HEADER -->
    <body>
    <?php
        // Data question 01;

      
        /* if(isset($_POST["RangeSlider-q01"])){
            echo "Physical health:".$_POST["RangeSlider-q01"]; */

            // Your Slider value is here.
        /* } else{
        Echo "Please slide the Slider Bar and Press Submit.";
        } */

// Creating a array
$array = array(
    'q01' => array(
        'questionId' => 'q01',
        'RangeSlider-q01_changed' => 1,
        'RangeSlider-q01' => 4
    ),
    'q02' => array(
        'questionId' => 'q02',
        'radioButtons' => 2,
        'submit' =>""
    ),
    'q03' => Array
    (
        'questionId' => 'q03',
        'RangeSlider-q03_changed' => 1,
        'RangeSlider-q03' => 4
    ),

'q04' => Array
    (
        'questionId' => 'q04',
        'inlineRadioOptions' => 5
    ),

'q05' => Array
    (
        'questionId' => 'q05',
        'RangeSlider-q05_changed' => 1,
        'RangeSlider-q05' => 4
    ),

'q06' => Array
    (
        'questionId' => 'q06',
        'NumberField-q06' => 5
    ),

'q07' => Array
    (
        'questionId' => 'q07',
        'NumberField-q07' => 5
    ),

'q08' => Array
    (
        'questionId' => 'q08',
        'NumberField-q08' => 5
    ),

'q09' => Array
    (
        'questionId' => 'q09',
        'NumberField-q09' => 5
    ),

'q10' => Array
    (
        'questionId' => 'q10',
        'NumberField-q10' => 5
    ) // ...and so on
);

// sum up the variable
$sum = 0;

// Counting result of variable
if(isset($array) && !is_null($array)){

    foreach ($array as $question) {
        if (isset($question['RangeSlider-q01'])) {
            $sum += $question['RangeSlider-q01'];
        }
        if (isset($question['RangeSlider-q03'])) {
            $sum += $question['RangeSlider-q03'];
        }
        if (isset($question['RangeSlider-q05'])) {
            $sum += $question['RangeSlider-q05'];
        }
        if (isset($question['NumberField-q06'])) {
            $sum += $question['NumberField-q06'];
        }
        if (isset($question['NumberField-q07'])) {
            $sum += $question['NumberField-q07'];
        }
        if (isset($question['NumberField-q08'])) {
            $sum += $question['NumberField-q08'];
        }
        if (isset($question['NumberField-q09'])) {
            $sum += $question['NumberField-q09'];
        }
        if (isset($question['NumberField-q10'])) {
            $sum += $question['NumberField-q10'];
        }
        if (isset($question['inlineRadioOptions'])) {
            $sum += $question['inlineRadioOptions'];
        }
        if (isset($question['radioButtons'])) {
            $sum += $question['radioButtons'];
        }
        
    }
    echo $sum;
}
        ?>
        
