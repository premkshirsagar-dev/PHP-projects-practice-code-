<?php
require 'db_connect.php';

$sql = "SELECT id, name, email, mobile, course, created_at FROM students ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Students List</title></head>
<body>
  <h2>Students</h2>
  <table border="1" cellpadding="6">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Mobile</th><th>Course</th><th>Created</th></tr>
    <?php if ($result && $result->num_rows > 0): ?>
      <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?=htmlspecialchars($row['id'])?></td>
          <td><?=htmlspecialchars($row['name'])?></td>
          <td><?=htmlspecialchars($row['email'])?></td>
          <td><?=htmlspecialchars($row['mobile'])?></td>
          <td><?=htmlspecialchars($row['course'])?></td>
          <td><?=htmlspecialchars($row['created_at'])?></td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr><td colspan="6">No records found.</td></tr>
    <?php endif; ?>
  </table>
  <p><a href="index.html">Add student</a></p>
</body>
</html>
<?php
$conn->close();
?>
