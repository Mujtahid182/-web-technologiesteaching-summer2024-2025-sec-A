<?php
$num1 = 10;
$num2 = 110;
$num3 = 30;

if ($num1 >= $num2 && $num1 >= $num3) {
    echo "<h1>The largest number is {$num1}</h1><br>";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "<h1>The largest number is {$num2}</h1><br>";
} elseif ($num3 >= $num1 && $num3 >= $num2) {
    echo "<h1>The largest number is {$num3}</h1><br>";
}
?>