<?php
session_start();
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<style>
body{font-family:"Times New Roman";background:#f2f2f2}
.box{width:600px;margin:80px auto;background:#fff;padding:20px;border:1px solid #000}
a{display:block;margin:10px 0;font-size:18px}
</style>
</head>
<body>

<div class="box">
<h2>ADMIN DASHBOARD</h2>

Welcome, <?php echo $_SESSION['username']; ?>

<hr>

<a href="admission_form.php">➤ Add Student Admission</a>
<a href="view_admissions.php">➤ View Student Admissions</a>
<a href="reports.php">➤ Reports</a>
<a href="logout.php">➤ Logout</a>

</div>
</body>
</html>
