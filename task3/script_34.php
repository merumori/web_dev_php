<?php
//script 34 to check if specific value exist in associative array using in_array().
 
$Arrayis=array("India"=>"Rajkot","France"=>"Paris","England"=>"London");
if(in_array("Rajkot",$Arrayis)){
    echo "Value exists";
}
else{
    echo "Value does not exists";
}
                
?>