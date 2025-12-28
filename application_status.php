<?php
session_start();
if(!isset($_SESSION['role']) || $_SESSION['role']!='student'){
    header("Location: ../auth/login.php");
    exit;
}

include "../config/db.php";

$student_id = $_SESSION['user_id'];

$q = $conn->query("
SELECT 
    a.course_applied,
    a.program,
    a.status
FROM admissions a
WHERE a.student_id = '$student_id'
");

$data = $q->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Application Status</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="content" style="max-width:600px;margin:auto;">
<h2>My Application Status</h2>

<table border="1" width="100%" cellpadding="10">
<tr>
  <th>Course Applied</th>
  <td><?php echo $data['course_applied']; ?></td>
</tr>
<tr>
  <th>Program</th>
  <td><?php echo $data['program']; ?></td>
</tr>
<tr>
  <th>Status</th>
  <td><b><?php echo $data['status']; ?></b></td>
</tr>
</table>

<br>
<a href="dashboard.php">⬅ Back to Dashboard</a>

</div>

</body>
</html>
