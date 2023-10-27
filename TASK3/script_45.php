<?php
// Define an associative array
$assocArray = array(
    "name" => "meru",
    "age" => 22,
    "city" => "rajkot"
);
$flippedArray = array_flip($assocArray);
echo "Original associative array: ";
print_r($assocArray);

echo "Flipped associative array: ";
print_r($flippedArray);
?>
