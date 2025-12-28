<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>
<link rel="stylesheet" href="../assets/css/style.css">

<style>
body{
    margin:0;
    padding:0;
    background:#f2f2f2;   /* white / light background */
    font-family:"Times New Roman", serif;
}


/* Center wrapper */
.register-wrapper{
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

/* Register card (same as login-box) */
.register-box{
    width:380px;
    background:#ffffff;
    padding:30px;
    border-radius:8px;
    box-shadow:0 8px 25px rgba(0,0,0,0.25);
}

/* Heading */
.register-box h2{
    text-align:center;
    margin-bottom:25px;
    color:#003366;
    border-bottom:2px solid #003366;
    padding-bottom:10px;
}

/* Labels */
.register-box label{
    font-weight:bold;
    color:#333;
    display:block;
    margin-bottom:5px;
}

/* Inputs */
.register-box input{
    width:100%;
    padding:10px;
    margin-bottom:18px;
    border:1px solid #999;
    border-radius:4px;
    font-size:15px;
}

/* Focus effect */
.register-box input:focus{
    outline:none;
    border-color:#003366;
    box-shadow:0 0 5px rgba(0,51,102,0.5);
}

/* Button */
.register-box button{
    width:100%;
    padding:10px;
    background:#003366;
    color:#fff;
    font-size:16px;
    border:none;
    border-radius:4px;
    cursor:pointer;
    transition:background 0.3s;
}

.register-box button:hover{
    background:#0059b3;
}

/* Footer text */
.register-box p{
    text-align:center;
    margin-top:20px;
    font-size:14px;
}

.register-box a{
    color:#003366;
    font-weight:bold;
    text-decoration:none;
}

.register-box a:hover{
    text-decoration:underline;
}
</style>
</head>

<body>

<div class="register-wrapper">
  <div class="register-box">

    <h2>Student Registration</h2>

    <form method="POST" action="register_save.php">

      <label>Username</label>
      <input type="text" name="username" required>

      <label>Password</label>
      <input type="password" name="password" required>

      <label>Confirm Password</label>
      <input type="password" name="confirm_password" required>

      <button type="submit">Register</button>

    </form>

    <p>
      Already registered? <a href="login.php">Login here</a>
    </p>

  </div>
</div>

</body>
</html>
