<?php
session_start();
include "db.php";
if($_SESSION['role']!='admin'){ header("Location: login.php"); }

$id = $_GET['id'];
$conn->query("UPDATE admissions SET status='Approved' WHERE student_id='$id'");

header("Location: view_admissions.php");
?>
