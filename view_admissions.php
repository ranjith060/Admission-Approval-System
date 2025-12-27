<?php
session_start();
include "db.php";

if(!isset($_SESSION['role']) || $_SESSION['role']!='admin'){
    header("Location: login.php");
    exit;
}

$q = $conn->query("
    SELECT 
        s.student_id,
        s.student_name,
        a.course,
        a.course_type,
        a.program,
        a.status
    FROM students s
    JOIN admissions a ON s.student_id = a.student_id
");
?>

<!DOCTYPE html>
<html>
<head>
<title>View Admissions</title>
<style>
body{font-family:'Times New Roman';background:#f2f2f2}
table{width:95%;margin:30px auto;border-collapse:collapse;background:#fff}
th,td{border:1px solid #000;padding:8px;text-align:center}
th{background:#e6e6e6}
a{margin:0 5px}
</style>
</head>
<body>

<h2 align="center">Student Admissions</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Course</th>
<th>Course Type</th>
<th>Program</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php while($r = $q->fetch_assoc()){ ?>
<tr>
<td><?php echo $r['student_id']; ?></td>
<td><?php echo $r['student_name']; ?></td>
<td><?php echo $r['course']; ?></td>
<td><?php echo $r['course_type']; ?></td>
<td><?php echo $r['program']; ?></td>
<td><?php echo $r['status']; ?></td>
<td>
<?php if($r['status']=="Pending"){ ?>
<a href="approve.php?id=<?php echo $r['student_id']; ?>">Approve</a> |
<a href="reject.php?id=<?php echo $r['student_id']; ?>">Reject</a>
<?php } else { ?>
—
<?php } ?>
</td>
</tr>
<?php } ?>

</table>

<center>
<a href="admin_dashboard.php">⬅ Back</a>
</center>

</body>
</html>
