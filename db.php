/* =========================
   db.php
   ========================= */
<?php
$conn = new mysqli("localhost","root","","admission_db");
if($conn->connect_error){
  die("DB Connection Failed");
}
?>
