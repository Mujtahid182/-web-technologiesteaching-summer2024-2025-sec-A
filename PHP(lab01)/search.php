<?php
$fruits = array("Apple", "Banana", "Orange", "Mango", "");

$search = "Mang";

$found = false;
for ($i = 0; $i < count($fruits); $i++) {
    if ($fruits[$i] == $search) {
        $found = true;
        echo "<h2>'$search'found at index $i!</h2>";
        break;
    }
}

if (!$found) {
    echo "<h2> '$search' was not found in the array.</h2>";
}
?>