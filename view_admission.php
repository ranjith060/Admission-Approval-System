<?php
session_start();
include "db.php";
if($_SESSION['role']!='admin'){ header("Location: login.php"); }
?>
<!DOCTYPE html>
<html>
<head>
<title>View Admissions</title>
<style>
table{border-collapse:collapse;width:95%;margin:auto}
th,td{border:1px solid #000;padding:6px;text-align:center}
</style>
</head>
<body>

<h2 align="center">STUDENT ADMISSIONS</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Course</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php
$q = $conn->query("SELECT s.student_id,s.student_name,a.course_applied,a.status
FROM students s
JOIN admissions a ON s.student_id=a.student_id");

while($r=$q->fetch_assoc()){
echo "<tr>
<td>{$r['student_id']}</td>
<td>{$r['student_name']}</td>
<td>{$r['course_applied']}</td>
<td>{$r['status']}</td>
<td>
<a href='approve.php?id={$r['student_id']}'>Approve</a> |
<a href='reject.php?id={$r['student_id']}'>Reject</a>
</td>
</tr>";
}
?>
</table>

<br>
<center><a href="admin_dashboard.php">Back</a></center>

</body>
</html>
