<?php

function customReduceFunction($no, $item) {
    return $no + $item;
}

$originalArray = array(1, 2, 3, 4, 5);
$result = array_reduce($originalArray, 'customReduceFunction');
echo "Result of array reduction: $result";
?>
