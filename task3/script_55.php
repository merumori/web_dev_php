<?php
//// Script 55 retrive first and last key of the array using the array_key_first() & array_key_last() function.
$array1= array(4,5,98,4,36,2,545,66);
    echo "First key element ";
        print_r(array_key_first($array1));
    echo "<br> Last key element ";
        print_r(array_key_last($array1));        
?>