<?php
session_start();
if(!isset($_SESSION['role']) || $_SESSION['role']!='admin'){
    header("Location: ../auth/login.php");
    exit;
}

include "../config/db.php";

$q = $conn->query("
SELECT 
    s.student_id,
    s.student_name,
    a.course_applied,
    a.program,
    a.status
FROM students s
JOIN admissions a ON s.student_id = a.student_id
ORDER BY s.student_id DESC
");
?>

<!DOCTYPE html>
<html>
<head>
<title>View Admissions</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="content">
<h2>Student Admissions</h2>

<table border="1" width="100%" cellpadding="8">
<tr style="background:#eee;font-weight:bold">
  <td>ID</td>
  <td>Student Name</td>
  <td>Course Type</td>
  <td>Program</td>
  <td>Status</td>
  <td>Action</td>
</tr>

<?php while($r = $q->fetch_assoc()) { ?>
<tr>
  <td><?= $r['student_id'] ?></td>
  <td><?= $r['student_name'] ?></td>
  <td><?= $r['course_applied'] ?></td>
  <td><?= $r['program'] ?></td>
  <td><b><?= $r['status'] ?></b></td>
  <td>
    <a href="approve.php?id=<?= $r['student_id'] ?>">Approve</a> |
    <a href="reject.php?id=<?= $r['student_id'] ?>">Reject</a>
  </td>
</tr>
<?php } ?>

</table>

<br>
<a href="dashboard.php">⬅ Back</a>
</div>

</body>
</html>
