<!DOCTYPE html>
<html>
<head>
 <title>Exercise 12</title>
</head>
<body>
<h2>Customer Registration Form</h2>
<form method="POST" action="">
 Full Name: <input type="text" name="fullname"><br><br>
 Email: <input type="text" name="email"><br><br>
 Contact No: <input type="text" name="contact"><br><br>
 <button type="submit" name="submit">Submit</button>
</form>
<?php
if (isset($_POST['submit'])) {
 $fullname = trim($_POST['fullname'] ?? '');
 $email = trim($_POST['email'] ?? '');
 $contact = trim($_POST['contact'] ?? '');
 $errors = [];
 // Validation
 if (empty($fullname)) $errors[] = "Full Name is required.";
 if (empty($email)) $errors[] = "Email is required.";
 if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) 
$errors[] = "Email format is invalid.";
 if (empty($contact)) $errors[] = "Contact number is required.";
 if (!empty($errors)) {
 echo "<h3 style='color:red;'>Error(s):</h3><ul>";
 foreach ($errors as $e) {
 echo "<li>$e</li>";
 }
 echo "</ul>";
 } else {
 // Sanitization
 $clean_fullname = htmlspecialchars($fullname);
 $clean_email = htmlspecialchars($email);
 $clean_contact = htmlspecialchars($contact);
 echo "<h3 style='color:green;'>Registration Successful!</h3>";
 echo "<p><strong>Full Name:</strong> $clean_fullname</p>";
 echo "<p><strong>Email:</strong> $clean_email</p>";
 echo "<p><strong>Contact No:</strong> $clean_contact</p>";
 }
}
?>
</body>
</html>