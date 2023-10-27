<?php

$integerArray = array(7, 3, 4, 5, 4);

sort($integerArray);

echo "Sorted array in ascending order: ";
foreach ($integerArray as $value) {
    echo $value . " ";
}
?>
