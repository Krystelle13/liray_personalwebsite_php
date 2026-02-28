<!DOCTYPE html>
<html>
<head>
 <title>Exercise 6</title>
</head>
<body>
<?php
 $grade = 74;
 echo "<h2>Pass/Fail Checker</h2>";
 echo "<p>Grade: $grade</p>";
 if ($grade >= 75) {
 echo "<strong>Result: Passed</strong>";
 } else {
 echo "<strong>Result: Failed</strong>";
 }
?>
</body>
</html>