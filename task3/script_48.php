<?php
//script 48 that uses array_reduce() function to apply a callback function to the elements of an array and return a single value.
  function add($value,$value1)
  {
    return ($value.'-'.$value1);
  }
  $arrayy= array("hello","every","set","hope");
  echo "Default array";
  print_r($arrayy);

  print_r(array_reduce($arrayy,"add","newString"));

?>