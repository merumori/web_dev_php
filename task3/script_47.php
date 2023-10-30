<?php
//script 47 that applies user defined function to apply a callback function to the elements of an array.
  function add($value)
  {
    return ($value+5);
  }
  $arrayy= array(4,6,8,97,100);
  echo "Default array";
  print_r($arrayy);
  echo "The array after calling the function";
  print_r(array_map("add",$arrayy));

?>