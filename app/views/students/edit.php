<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Student</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

  <div class="container">
    <h2 class="mb-4">Edit Student</h2>

    <form action="index.php?action=update&id=<?= $student['id'] ?>" method="POST">
      <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($student['name']) ?>" required>
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($student['email']) ?>" required>
      </div>
      <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($student['phone']) ?>" required>
      </div>
      <div class="mb-3">
        <label>Course</label>
        <input type="text" name="course" class="form-control" value="<?= htmlspecialchars($student['course']) ?>" required>
      </div>
      <button type="submit" class="btn btn-success">Update</button>
      <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
  </div>

</body>
</html>
