<?php
$name = "Student";
$age = 20;
$gwa = 1.75;
$isEnrolled = true;

echo "<h2>Student Profile</h2>";
echo "<p>Name: $name</p>";
echo "<p>Age: $age</p>";
echo "<p>GWA: $gwa</p>";
echo "<p>Enrolled: " . ($isEnrolled ? "Yes" : "No") . "</p>";
?>