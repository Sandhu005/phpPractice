<?php

// Indexed Array
$student = array("Aman", 23, "Jalandhar");

print_r($student);
echo "<br>";
echo $student[2];

// Associative Array
$student1 = array("Name"=>"Mohit", "Age"=>28, "City"=>"Kartarpur");
echo "<br><br>";
var_dump($student1);
echo "<br>";
print_r($student1["Name"]);

// Multidimensional Array
$school = array(
    array("Name"=>"Gagan", "Class"=>"LLB"),
    array("Name"=>"Gursharan", "Class"=>"BBA")
);
echo "<br><br>";
print_r($school[0]["Name"]);
echo "<br>";
echo $school[1]["Class"];

?>