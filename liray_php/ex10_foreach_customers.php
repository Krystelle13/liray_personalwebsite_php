<!DOCTYPE html>
<html>
<head>
 <title>Exercise 10</title>
</head>
<body>
<?php
 $customers = ["Maria Santos", "Juan Dela Cruz", "Anne Reyes", "Mark 
Lopez"];
 echo "<h2>Customer List (foreach loop)</h2>";
 foreach ($customers as $c) {
 echo "Customer: $c <br>";
 }
?>
</body>
</html>