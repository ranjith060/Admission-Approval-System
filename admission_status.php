<?php
session_start();
include "db.php";
if($_SESSION['role']!='student'){ header("Location: login.php"); }

$id = $_SESSION['user_id'];
$q = $conn->query("SELECT status FROM admissions WHERE student_id='$id'");
$r = $q->fetch_assoc();
?>
<h2>Your Application Status: <?php echo $r['status']; ?></h2>
<a href="student_dashboard.php">Back</a>
