 
<?php
function sortArray() {
    $inputArray = array(8, 2, 7, 4, 5);
    $outArray = array();
    for($x=1; $x<=100; $x++) {
        if (in_array($x, $inputArray)) {
            array_push($outArray, $x);
        }
    }
    return $outArray;
}


$sortArray = sortArray();
foreach ($sortArray as $value) {
    echo $value.PHP_EOL;
}
?>
