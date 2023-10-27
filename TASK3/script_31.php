<?php

$searchArray = array("apple", "banana", "cherry", "date", "fig");


$elementToSearch = "date";


$index = array_search($elementToSearch, $searchArray);

if ($index !== false) {
    echo "Element '$elementToSearch' found at index $index.";
} else {
    echo "Element '$elementToSearch' not found in the array.";
}
?>
