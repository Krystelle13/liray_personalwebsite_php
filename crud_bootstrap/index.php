<?php
require_once "db.php";
$q = trim($_GET['q'] ?? '');
$like = "%" . $q . "%";
if ($q !== '') {
 $stmt = $conn->prepare("SELECT * FROM students WHERE fullname LIKE ? OR 
email LIKE ? ORDER BY id DESC");
 $stmt->bind_param("ss", $like, $like);
 $stmt->execute();
 $result = $stmt->get_result();
} else {
 $result = $conn->query("SELECT * FROM students ORDER BY id DESC");
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Student List</title>
 <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.c
ss" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
 <div class="card shadow-sm">
 <div class="card-header bg-primary text-white">
 <h4 class="mb-0">Student List</h4>
 </div>
 <div class="card-body">
 <div class="d-flex flex-wrap gap-2 justify-content-between align￾items-center mb-3">
 <form class="d-flex gap-2" method="GET" action="index.php">
 <input type="text" name="q" class="form-control"
placeholder="Search name or email..." value="<?= htmlspecialchars($q) ?>">
 <button class="btn btn-primary">Search</button>
 <a href="index.php" class="btn btn-secondary">Reset</a>
 </form>
 <a href="create.php" class="btn btn-success">+ Add Student</a>
 </div>
 <div class="table-responsive">
 <table class="table table-striped table-bordered align-middle">
 <thead class="table-dark">
 <tr>
 <th style="width:70px;">ID</th>
 <th>Full Name</th>
 <th>Email</th>
 <th style="width:180px;">Actions</th>
 </tr>
 </thead>

 <tbody>
 <?php if ($result->num_rows > 0): ?>
 <?php while($row = $result->fetch_assoc()): ?>
 <tr>
 <td><?= $row['id'] ?></td>
 <td><?= htmlspecialchars($row['fullname']) ?></td>
 <td><?= htmlspecialchars($row['email']) ?></td>
 <td>
 <a href="edit.php?id=<?= $row['id'] ?>" class="btn btnwarning btn-sm">Edit</a>
 <a href="delete.php?id=<?= $row['id'] ?>"
 class="btn btn-danger btn-sm"
 onclick="return confirm('Are you sure you want to 
delete this student?')">
 Delete
 </a>
 </td>
 </tr>
 <?php endwhile; ?>
 <?php else: ?>
 <tr><td colspan="4" class="text-center">No records 
found.</td></tr>
 <?php endif; ?>
 </tbody>
 </table>
 </div>
 </div>
 </div>
</div>
</body>
</html>