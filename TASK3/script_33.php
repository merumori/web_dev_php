<?php

$assocArray = array(
    "name" => "meru",
    "age" => 22,
    "city" => "rajkot"
);


$keyToCheck = "age";


if (array_key_exists($keyToCheck, $assocArray)) {
    echo "The key '$keyToCheck' exists in the associative array.";
} else {
    echo "The key '$keyToCheck' does not exist in the associative array.";
}
?>
