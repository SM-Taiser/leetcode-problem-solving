<?php
$int = 10;
$int = intval($int);
$res = '';

// Create array that contains all of the Roman numerals.
$arr = array('M' => 1000,
'CM' => 900,
'D' => 500,
'CD' => 400,
'C' => 100,
'XC' => 90,
'L' => 50,
'XL' => 40,
'X' => 10,
'IX' => 9,
'V' => 5,
'IV' => 4,
'I' => 1);

foreach($arr as $roman => $value){
  // Determine the number of matches
  $matches = intval($int/$value);

  // Add the same number of characters to the string
  $res .= str_repeat($roman,$matches);

  // Set the int to be the remainder of the int and the value
  $int = $int % $value;
}

// The Roman numeral should be built, return it
echo $res;
?>