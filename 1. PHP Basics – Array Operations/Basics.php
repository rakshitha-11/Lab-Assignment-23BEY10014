<?php
// Indexed array
$colors = array("Red", "Blue", "Green");

// Insertion
array_push($colors, "Yellow");

// Deletion
unset($colors[1]);

// Sorting
sort($colors);

// Display
echo "Indexed Array:<br>";
foreach($colors as $c) {
    echo $c . "<br>";
}

// Associative array
$student = array("Name"=>"Rahul", "Age"=>20, "Course"=>"BCA");

// Display associative
echo "<br>Associative Array:<br>";
foreach($student as $key=>$value) {
    echo "$key : $value <br>";
}
?>