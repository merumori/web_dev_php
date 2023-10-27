<?php
$originalArray = array("apple", "banana", "cherry", "date", "fig", "grape", "kiwi", "lemon");
$chunkSize = 3;
$chunks = array_chunk($originalArray, $chunkSize);
echo "Original array: " . implode(", ", $originalArray) . "<br>";
echo "Array chunks:<br>";

foreach ($chunks as $chunk) {
    echo implode(", ", $chunk) . "<br>";
}
?>
