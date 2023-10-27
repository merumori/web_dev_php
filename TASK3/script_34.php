<?php

$myArray = array("apple", "banana", "cherry", "date", "fig");


$valueToCheck = "banana";


if (in_array($valueToCheck, $myArray)) {
    echo "The value '$valueToCheck' exists in the array.";
} else {
    echo "The value '$valueToCheck' does not exist in the array.";
}
?>
