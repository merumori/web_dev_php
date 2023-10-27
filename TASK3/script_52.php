<?php
$array1 = array(
    "name" => "meru",
    "age" => 22,
    "city" => "rajkot"
);

$array2 = array(
    "occupation" => "mca",
    "email" => "mori@gmail.com"
);
$combinedArray = array_merge($array1, $array2);
echo "Array 1: ";
print_r($array1);

echo "Array 2: ";
print_r($array2);

echo "Combined associative array: ";
print_r($combinedArray);
?>
