<?php
echo "Current Date: ".date("d-m-Y")."<br>";
echo "Current Time: ".date("h:i:s")."<br>";

$dob = "2003-05-10";
$age = date_diff(date_create($dob), date_create('today'))->y;
echo "Age: $age<br>";

echo "Day: ".date("d")."<br>";
echo "Month: ".date("m")."<br>";
echo "Year: ".date("Y")."<br>";
?>