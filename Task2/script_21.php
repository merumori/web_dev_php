<?php
function Palindrome($number) {
   
    $numstr = (string)$number;
    
    $revstr = strrev($numstr);
    
    if($numstr == $revstr) {
        return true;
    } else {
        return false;
    }
}


$number = 232; 

if(Palindrome($number)){
    echo "$number is a palindrome.";
}
else{
    echo "$number is not a palindrome.";
}
?>
