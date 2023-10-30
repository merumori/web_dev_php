<?php
//script 40 to remove and replace elements array using array_splice().
 
$Name=array("Mahesh","Mitra","Raj","Om");
$name2=array("Smith","Pintu",);
 
print_r($Name);
echo "<br/>";
array_splice($Name,0,2,$name2); // removing the elements starting index 0 and ending index 2 replacing with different elements.
print_r($Name);


?>
