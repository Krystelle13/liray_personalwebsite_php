<?php
require_once "db.php";
if (isset($_POST['save'])) {
 $fullname = trim($_POST['fullname']);
 $email = trim($_POST['email']);
 $stmt = $conn->prepare("INSERT INTO students (fullname, email) VALUES (?, 
?)");
 $stmt->bind_param("ss", $fullname, $email);
 $stmt->execute();
 header("Location: index.php");
 exit;
}