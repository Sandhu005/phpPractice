<?php

// Foreach loop on indexed array
$student = array("Aman", 23, "Jalandhar");

foreach($student as $s){
    echo $s;
    echo "<br>";
}

// Foreach loop on associative array
$student1 = array("Name"=>"Mohit", "Age"=>25, "City"=>"Kartarpur");

foreach($student1 as $key=>$value){
    echo "<br>";
    print_r($key . " - " .$value);
}

print "<br>";

// Foreach on multidimensional indexed array
$student = array(
    array("Aman", 23, "Jalandhar"),
    array("Rohit", 21, "Moga"),
    array("Love", 30, "Phagwara")   
);

foreach($student as $s){
    echo "<br>";
    echo $s[0];
}

print "<br>";

// Foreach loop on multidimensional associative array
$school = array(
    array("Aman", 23, "Jalandhar"),
    array("Name"=>"Gagan", "Class"=>"LLB"),
    array("Name"=>"Gursharan", "Class"=>"BBA")
);

foreach($school as $s){
    foreach($s as $key=>$value){
        echo "<br>";
        echo $value;
    }
}

?>