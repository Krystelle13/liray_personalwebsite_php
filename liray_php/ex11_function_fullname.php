<!DOCTYPE html>
<html>
<head>
 <title>Exercise 11</title>
</head>
<body>
<?php
 function fullName($fname, $lname) {
 return strtoupper($lname) . ", " . $fname;
 }
 $result = fullName("Maria", "Santos");
 echo "<h2>Customer Full Name Formatter</h2>";
 echo "<p>Formatted Name: $result</p>";
?>
</body>
</html>