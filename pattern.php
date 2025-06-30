<?php
   $rows = 5; // Define the number of rows for the triangle

for ($i = 1; $i <= $rows; $i++) {
    // Print leading spaces for mirroring
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo "&nbsp;";
    }
    // Print asterisks
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br>"; // Move to the next line
}
?>