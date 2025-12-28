<?php
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'student'){
    header("Location: ../auth/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Dashboard</title>
</head>
<body>

<h2>STUDENT DASHBOARD</h2>

<ul>
  <li><a href="admission_form.php">Apply Admission</a></li>
  <li><a href="application_status.php">Application Status</a></li>
  <li><a href="../auth/logout.php">Logout</a></li>
</ul>

</body>
</html>
