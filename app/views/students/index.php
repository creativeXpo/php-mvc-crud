<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Students List</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

  <div class="container">
    <h2 class="mb-4">All Students</h2>
    
    <a href="index.php?action=create" class="btn btn-primary mb-3">+ Add New Student</a>

    <?php if (isset($_GET['msg'])): ?>
      <div class="alert alert-success">
        <?= htmlspecialchars($_GET['msg']) ?> successfully!
      </div>
    <?php endif; ?>

    <table class="table table-bordered">
      <thead class="table-light">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Course</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($students as $student): ?>
          <tr>
            <td><?= $student['id'] ?></td>
            <td><?= htmlspecialchars($student['name']) ?></td>
            <td><?= htmlspecialchars($student['email']) ?></td>
            <td><?= htmlspecialchars($student['phone']) ?></td>
            <td><?= htmlspecialchars($student['course']) ?></td>
            <td>
              <a href="index.php?action=edit&id=<?= $student['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
              <a href="index.php?action=delete&id=<?= $student['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this student?')">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</body>
</html>
