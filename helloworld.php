<?php
// variables starts with $
// string uses ""
// line ends with ;
$first_name = "Philip";
$last_name = "Anker";
    
// for adding up numbers + sign 
// for adding up string use .
echo $first_name." ".$last_name;

// > greater than
// < smaller than
// >= greater or equal
// <= smaller or equal
// == equal
// != not equal

$age = 5;

// if age is smaller than or equal to 6, then you can sleep at lunchtime. 
if ($age <= 6) 
// it's true
{ echo " relax";}
else {
    // it's false
    echo " stay in school";}

?>
<br>
<?php
// loop
for ($i=1;  $i <= $age; $i=$i+1) { echo $i; }
?>
<br>
<?php
echo "Today is " . date("m.d.Y. H:i") 
?>