<?php
/*  Author: Roberto Aleman Web: ventics.com , license: MIT */
echo "Author: Roberto Aleman, Web: ventics.com.<br/><hr>";
echo "<h2>RandomStringChecker is designed to evaluate whether a given string is random based on specific criteria. </h2><br/><hr>";
include ("RandomStringChecker.php");
echo "Tip:Please read the readme file for more information on how to use it.<br/><hr>";
// Example usage

echo "<b>Example usage.</b><br/><hr>";
$string1 = new RandomStringChecker("123456789");
echo $string1->report() . "<br/>";

$string2 = new RandomStringChecker("0105070903");
echo $string2->report() . "<br/>";

$string3 = new RandomStringChecker("%********MEuAy3gCVZ3LYGj5^FeCi");
echo $string3->report() . "<br/>";

$string4 = new RandomStringChecker("demoadmin");
echo $string4->report() . "<br/>";

$string5 = new RandomStringChecker("A1b2C3d4$");
echo $string5->report() . "<br/>";

$string6 = new RandomStringChecker("abcdefg123$");
echo $string6->report() . "<br/>"; // Example of ascending sequence

$string7 = new RandomStringChecker("987654321$");
echo $string7->report() . "<br/>"; // Example of descending sequence

?>