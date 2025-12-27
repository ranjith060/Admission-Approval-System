<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
body{
    background:#f2f2f2;
    font-family:"Times New Roman", serif;
}
.box{
    width:400px;
    margin:120px auto;
    background:#fff;
    padding:25px;
    border:1px solid #000;
}
h2{
    text-align:center;
    text-decoration:underline;
}
input,select{
    width:100%;
    padding:6px;
    margin-top:10px;
}
button{
    margin-top:15px;
    padding:6px 20px;
}
</style>
</head>
<body>

<div class="box">
<h2>LOGIN</h2>

<form method="POST" action="login_check.php">

<label>Username</label>
<input type="text" name="username" required>

<label>Password</label>
<input type="password" name="password" required>

<label>Role</label>
<select name="role" required>
<option value="">-- Select Role --</option>
<option value="admin">Admin</option>
<option value="student">Student</option>

</select>

<center>
<button type="submit">Login</button>
</center>

</form>
</div>

</body>
</html>
