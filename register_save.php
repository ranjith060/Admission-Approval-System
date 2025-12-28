<?php
include "../config/db.php";

$username = $_POST['username'];
$password = $_POST['password'];
$confirm  = $_POST['confirm_password'];
$role     = "student";

if($password != $confirm){
    die("Passwords do not match");
}

/* check existing user */
$check = $conn->query("SELECT * FROM users WHERE username='$username'");
if($check->num_rows > 0){
    die("Username already exists");
}

/* insert student user */
$conn->query("INSERT INTO users (username,password,role)
VALUES ('$username','$password','$role')");

echo "Registration successful. <a href='login.php'>Login Now</a>";
?>
