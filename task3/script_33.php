<?php
//script 33 to check if specific key exist in associative array using array_key_exists().
 
$Arrayis=array("India"=>"Rajkot","France"=>"Paris","England"=>"London");
if(array_key_exists("France",$Arrayis)){
    echo "Key exists";
}
else{
    echo "Key does not exists";
}
                

?>