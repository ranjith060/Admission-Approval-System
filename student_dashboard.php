<?php
session_start();
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'student'){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Dashboard</title>
<style>
body{font-family:"Times New Roman";background:#f2f2f2}
.box{width:600px;margin:80px auto;background:#fff;padding:20px;border:1px solid #000}
a{display:block;margin:10px 0;font-size:18px}
</style>
</head>
<body>

<div class="box">
<h2>STUDENT DASHBOARD</h2>

Welcome, <?php echo $_SESSION['username']; ?>

<hr>

<a href="admission_form.php">➤ Apply for Admission</a>
<a href="application_status.php">➤ View Application Status</a>
<a href="logout.php">➤ Logout</a>

</div>
</body>
</html>
