<?php
$assocArray = array(
    "name" => "meru",
    "age" => 22,
    "city" => "rajkot"
);
$values = array_values($assocArray);
echo "Values in the associative array: " . implode(", ", $values);
?>
