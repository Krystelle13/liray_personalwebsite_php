<!DOCTYPE html>
<html>
<head>
 <title>Add Student</title>
 <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.c
ss" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
 <div class="card shadow-sm">
 <div class="card-header bg-success text-white">
 <h4 class="mb-0">Add Student</h4>
 </div>
 <div class="card-body">
 <form action="save.php" method="POST">
 <div class="mb-3">
 <label class="form-label">Full Name</label>
 <input type="text" name="fullname" class="form-control" required>
 </div>
 <div class="mb-3">
 <label class="form-label">Email</label>
 <input type="email" name="email" class="form-control" required>
 </div>
 <button type="submit" name="save" class="btn btnsuccess">Save</button>
 <a href="index.php" class="btn btn-secondary">Back</a>
 </form>
 </div>
 </div>
</div>
</body>
</html>