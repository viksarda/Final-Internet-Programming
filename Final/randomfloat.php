<?php
// Create a function to generate a random float number
function random_float($start_number = 0,$end_number = 1,$mul = 1000000)
{
  
// If start number is greater than end number then return false
if ($start_number > $end_number) return false;
  
// Return random float number
return mt_rand($start_number * $mul,$end_number * $mul)/$mul;
}
echo ("Random number generator from 1 to 100")."<br><br>";
echo ("Randomising with page refresh")."<br><br>";

echo random_float(0,100)."<br>";

?>