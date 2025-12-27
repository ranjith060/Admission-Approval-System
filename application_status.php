<?php
session_start();
include "db.php";

if(!isset($_SESSION['role']) || $_SESSION['role']!='student'){
    header("Location: login.php");
    exit;
}

$student_id = $_SESSION['user_id'];

$q = $conn->query("
    SELECT 
        a.admission_no,
        a.course,
        a.course_type,
        a.program,
        a.status,
        a.admission_date
    FROM admissions a
    WHERE a.student_id = '$student_id'
");

$row = $q->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Application Status</title>
<style>
body{font-family:"Times New Roman";background:#f2f2f2}
.box{width:600px;margin:80px auto;background:#fff;padding:20px;border:1px solid #000}
table{width:100%}
td{padding:8px}
</style>
</head>
<body>

<div class="box">
<h2>Application Status</h2>

<?php if($row){ ?>
<table border="1" cellspacing="0">
<tr><td>Admission No</td><td><?php echo $row['admission_no']; ?></td></tr>
<tr><td>Course</td><td><?php echo $row['course']; ?></td></tr>
<tr><td>Course Type</td><td><?php echo $row['course_type']; ?></td></tr>
<tr><td>Program</td><td><?php echo $row['program']; ?></td></tr>
<tr><td>Admission Date</td><td><?php echo $row['admission_date']; ?></td></tr>
<tr><td>Status</td><td><b><?php echo $row['status']; ?></b></td></tr>
</table>
<?php } else { ?>
<p>No application found.</p>
<?php } ?>

<br>
<a href="student_dashboard.php">⬅ Back</a>
</div>

</body>
</html>
