<!DOCTYPE html>
<html>
<head>
 <title>Exercise 7</title>
</head>
<body>
<?php
 $day = "Friday";
 echo "<h2>Day Message</h2>";
 echo "<p>Today is: $day</p>";
 switch ($day) {
 case "Monday":
 echo "Start of the week";
 break;
 case "Friday":
 echo "Almost weekend!";
 break;
 case "Sunday":
 echo "Rest day";
 break;
 default:
 echo "Regular day";
 }
?>
</body>
</html>