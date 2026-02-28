<?php
$a = 10;
$b = 3;
echo "<h2>Mini Calculator</h2>";
echo "a = $a, b = $b<br><br>";
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br><br>";
$a += 5;
echo "After a += 5, a = $a";
?>