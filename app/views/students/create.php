<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Student</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

  <div class="container">
    <h2 class="mb-4">Add New Student</h2>

    <form action="index.php?action=store" method="POST">
      <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Course</label>
        <input type="text" name="course" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Save Student</button>
      <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
  </div>

</body>
</html>
