<?php
// Array with names
$a[] = "Banana Cream Pie Ice Cream";
$a[] = "Banana Split";
$a[] = "Birthday Cake Ice Cream";
$a[] = "Blackberry Ice Cream";
$a[] = "Carrot Cake Ice Cream";
$a[] = "Chocolate Banana Ice Cream";
$a[] = "Chocolate Chip Cookie Dough Ice Cream";
$a[] = "Chocolate Chip Ice Cream";
$a[] = "Lavender Ice Cream";
$a[] = "Mint Chocolate Chip Ice Cream";
$a[] = "Mint Ice Cream";
$a[] = "M&M Ice Cream Cookie Sandwich";
$a[] = "Moose Tracks Ice Cream";
$a[] = "Neopolitan";
$a[] = "Peanut Butter Ice Cream";
$a[] = "Peppermint Ice Cream";
$a[] = "Pumpkin Ice Cream";
$a[] = "Root Beer Float";
$a[] = "Smores Ice Cream";
$a[] = "Snickers Ice Cream";
$a[] = "Rolled Ice Cream";
$a[] = "Raspberry Ice Cream";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>