<?php
session_start();
include "../config/db.php";

$username = $_POST['username'];
$password = $_POST['password'];
$role     = $_POST['role'];

$q = $conn->query("SELECT * FROM users 
WHERE username='$username' AND password='$password' AND role='$role'");

if($q->num_rows == 1){

    $row = $q->fetch_assoc();

    // ✅ set session
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['role']    = $row['role'];

    // ✅ ROLE BASED REDIRECTION (ADD HERE)
    if($role=="admin"){
        header("Location: ../admin/dashboard.php");
    }
    elseif($role=="student"){
        header("Location: ../student/dashboard.php");
    }

    exit;

}else{
    echo "Invalid Username / Password / Role";
}
?>
