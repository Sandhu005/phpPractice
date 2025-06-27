<?php

// City variable with your hometown
$city = "Jalandhar";
echo "My Hometown is " . $city;

// First & Last name variables
$firstName = "Akash";
$lastName = "Kumar";
echo "<br><br>";
echo "Hello " . $firstName . " " . $lastName . ", welcome to PHP!";

// Indexed color name array
$colorName = array("Red", "Green", "Blue");
echo "<br><br>";
print_r($colorName);
echo "<br>";
echo $colorName[1];

// Associative array
$student = array("Name"=>"Rahul", "Age"=>23, "Grade"=>"A");
echo "<br><br>";
foreach($student as $key=>$value){
    print_r($value);
    print " ";
}
?>