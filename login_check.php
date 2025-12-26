<?php
session_start();
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];
$role     = $_POST['role'];

$q = $conn->query("SELECT * FROM users 
WHERE username='$username' AND password='$password' AND role='$role'");

if($q->num_rows == 1){
    $row = $q->fetch_assoc();
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];

    if($role == "admin"){
        header("Location: admin_dashboard.php");
    }
    if($role == "student"){
        header("Location: student_dashboard.php");
    }
}
else{
    echo "Invalid Login";
}
?>
