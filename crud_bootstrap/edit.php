<?php
require_once "db.php";
$id = (int)($_GET['id'] ?? 0);
$stmt = $conn->prepare("SELECT * FROM students WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$row = $stmt->get_result()->fetch_assoc();
if (!$row) die("Student not found.");
?>
<!DOCTYPE html>
<html>
<head>
 <title>Edit Student</title>
 <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.c
ss" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
 <div class="card shadow-sm">
 <div class="card-header bg-warning">
 <h4 class="mb-0">Edit Student</h4>
 </div>
 <div class="card-body">
 <form action="update.php" method="POST">
 <input type="hidden" name="id" value="<?= $row['id'] ?>">
 <div class="mb-3">
 <label class="form-label">Full Name</label>
 <input type="text" name="fullname" class="form-control"
value="<?= htmlspecialchars($row['fullname']) ?>" required>
 </div>
 <div class="mb-3">
 <label class="form-label">Email</label>
 <input type="email" name="email" class="form-control" value="<?=
htmlspecialchars($row['email']) ?>" required>
 </div>
 <button type="submit" name="update" class="btn btnwarning">Update</button>
 <a href="index.php" class="btn btn-secondary">Back</a>
 </form>
 </div>
 </div>
</div>
</body>
</html>