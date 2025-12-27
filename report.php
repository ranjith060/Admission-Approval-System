<?php
session_start();
include "db.php";

if(!isset($_SESSION['role']) || $_SESSION['role']!='admin'){
    header("Location: login.php");
    exit;
}

$total = $conn->query("SELECT COUNT(*) c FROM admissions")->fetch_assoc()['c'];
$approved = $conn->query("SELECT COUNT(*) c FROM admissions WHERE status='Approved'")->fetch_assoc()['c'];
$rejected = $conn->query("SELECT COUNT(*) c FROM admissions WHERE status='Rejected'")->fetch_assoc()['c'];
$pending = $conn->query("SELECT COUNT(*) c FROM admissions WHERE status='Pending'")->fetch_assoc()['c'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Reports</title>
<style>
body{font-family:"Times New Roman";background:#f2f2f2}
.box{width:500px;margin:80px auto;background:#fff;padding:20px;border:1px solid #000}
table{width:100%}
td{padding:8px}
</style>
</head>
<body>

<div class="box">
<h2>Admission Report</h2>

<table border="1" cellspacing="0">
<tr><td>Total Applications</td><td><?php echo $total; ?></td></tr>
<tr><td>Approved</td><td><?php echo $approved; ?></td></tr>
<tr><td>Rejected</td><td><?php echo $rejected; ?></td></tr>
<tr><td>Pending</td><td><?php echo $pending; ?></td></tr>
</table>

<br>
<a href="admin_dashboard.php">⬅ Back</a>
</div>

</body>
</html>
