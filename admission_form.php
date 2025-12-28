<?php
session_start();
if(!isset($_SESSION['role'])){
    header("Location: ../auth/login.php");
    exit;
}

$mode = isset($_GET['mode']) ? $_GET['mode'] : 'online';
?>
<h2>
<?php
if($_SESSION['role']=='admin'){
    echo "OFFLINE STUDENT ADMISSION FORM";
}else{
    echo "STUDENT ADMISSION FORM";
}
?>
</h2>

<!DOCTYPE html>
<html>
<head>
<title>Student Admission Form</title>
<style>
body{
    background:#f2f2f2;
    font-family:"Times New Roman", serif;
}
.container{
    width:900px;
    margin:20px auto;
    background:#fff;
    padding:20px;
    border:1px solid #000;
}
h2{
    text-align:center;
    text-decoration:underline;
}
table{
    width:100%;
    border-collapse:collapse;
}
td{
    padding:8px;
    vertical-align:top;
}
input, select, textarea{
    width:95%;
    padding:5px;
    font-family:"Times New Roman", serif;
}
.section{
    background:#e6e6e6;
    font-weight:bold;
    padding:6px;
    margin-top:15px;
}
button{
    padding:8px 25px;
    font-size:16px;
}
.header{
    text-align:center;
    margin-bottom:15px;
}
.header img{
    width:100%;
    max-height:120px;
    object-fit:contain;
}

</style>
</head>

<body>

<div class="container">

<!-- ================= College Header ================= -->
<div class="header">
    <img src="/admission/assets/images/college_header.png" class="college-logo">
</div>

<h2>STUDENT ADMISSION FORM</h2>


<form method="POST" action="save_student_admission.php" enctype="multipart/form-data">


<!-- ================= Admission Details ================= -->
<div class="section">Admission Details</div>
<table>
<tr>
<td>Course Applied</td>
<td>
<select name="course_applied" required>
<option value="">-- Select --</option>
<option>1st Year</option>
<option>Lateral Entry</option>
<option>Re-Admission</option>
<option>Transfer</option>
</select>
</td>
<td>Roll / Reg No</td>
<td><input name="roll_no"></td>
</tr>

<tr>
<td>Program</td>
<td colspan="3">
<select name="program" required>
<option value="">-- Select Program --</option>
<option>Diploma in Computer Engineering</option>
<option>Diploma in Mechanical Engineering</option>
<option>Diploma in Artificial Intelligence & ML</option>
<option>Diploma in Civil Engineering</option>
<option>Diploma in Electrical & Electronics Engineering</option>
<option>Diploma in Electronics & Communication Engineering</option>
<option>Diploma in Automobile Engineering</option>
</select>
</td>
</tr>

<tr>
<td>Date of Joining</td>
<td><input type="date" name="date_of_joining"></td>
<td>Period of Study</td>
<td><input name="period_of_study"></td>
</tr>
</table>

<!-- ================= Student Details ================= -->
<div class="section">Student Personal Details</div>
<table>
<tr>
<td>First Name</td><td><input name="first_name" required></td>
<td>Last Name</td><td><input name="last_name"></td>
</tr>
<tr>
<td>Date of Birth</td><td><input type="date" name="dob"></td>
<td>Age</td><td><input name="age"></td>
</tr>
<tr>
<td>Student Photo</td>
<td colspan="3">
<input type="file" name="student_photo" accept="image/*" required>
</td>
</tr>
<tr>
<td>Gender</td>
<td>
<select name="gender">
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
</td>
<td>Mother Tongue</td><td><input name="mother_tongue"></td>
</tr>
<tr>
<td>Religion</td><td><input name="religion"></td>

<td>Community</td>
<td>
<select name="community" required>
<option value="">-- Select Community --</option>
<option>OC</option>
<option>BC</option>
<option>BCM</option>
<option>MBC</option>
<option>SC</option>
<option>ST</option>
<option>Others</option>
</select>
</td>
</tr>

<tr>
<td>Caste</td><td><input name="caste"></td>

<td>Blood Group</td>
<td>
<select name="blood_group" required>
<option value="">-- Select Blood Group --</option>
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>AB+</option>
<option>AB-</option>
<option>O+</option>
<option>O-</option>
</select>
</td>
</tr>

<tr>
<td>Aadhar No</td><td><input name="aadhar_no"></td>
<td>UMIS No</td><td><input name="umis_no"></td>
</tr>
<tr>
<td>EMIS No</td><td><input name="emis_no"></td>
<td>Phone</td><td><input name="mobile"></td>
</tr>
<tr>
<td>Email</td><td colspan="3"><input name="email"></td>
</tr>
<tr>
<td>Address</td>
<td colspan="3"><textarea name="current_address"></textarea></td>
</tr>
</table>

<!-- ================= Parent / Guardian ================= -->
<div class="section">Parent / Guardian Details</div>
<table>
<tr>
<td>Father Name</td><td><input name="father_name"></td>
<td>Father Occupation</td><td><input name="father_occupation"></td>
</tr>
<tr>
<td>Father Income</td><td><input name="father_income"></td>
<td>Father Mobile</td><td><input name="father_phone"></td>
</tr>

<tr>
<td>Mother Name</td><td><input name="mother_name"></td>
<td>Mother Occupation</td><td><input name="mother_occupation"></td>
</tr>
<tr>
<td>Mother Income</td><td><input name="mother_income"></td>
<td>Mother Mobile</td><td><input name="mother_phone"></td>
</tr>

<tr>
<td>Guardian Name</td><td><input name="guardian_name"></td>
<td>Guardian Mobile</td><td><input name="guardian_phone"></td>
</tr>
<tr>
<td>Guardian Address</td>
<td colspan="3"><textarea name="guardian_address"></textarea></td>
</tr>
<tr>
<td>Father Photo</td>
<td><input type="file" name="father_photo" accept="image/*"></td>
<td>Mother Photo</td>
<td><input type="file" name="mother_photo" accept="image/*"></td>
</tr>

<tr>
<td>Guardian Photo</td>
<td colspan="3"><input type="file" name="guardian_photo" accept="image/*"></td>
</tr>

</table>

<!-- ================= Academic Details ================= -->
<div class="section">Academic Details</div>
<table>
<tr>
<td>Previous School Name</td><td><input name="previous_school"></td>
<td>Year of Passing</td><td><input name="year_of_passing"></td>
</tr>
<tr>
<td>School Place</td><td><input name="school_place"></td>
<td>Medium</td><td><input name="medium"></td>
</tr>
<tr>
<td>Board</td><td><input name="board"></td>
<td>Part I Language</td><td><input name="part1_language"></td>
</tr>
</table>

<!-- ================= Marks Details ================= -->
<div class="section">Marks Details</div>

<table border="1" width="100%" cellspacing="0" cellpadding="6">
<tr style="background:#f0f0f0;font-weight:bold;text-align:center;">
  <td>Subject</td>
  <td>Max Marks</td>
  <td>Marks Scored</td>
  <td>Total</td>
</tr>

<tr>
  <td>English</td>
  <td><input type="number" value="100" readonly></td>
  <td><input type="number" name="eng_scored" min="0" max="100" oninput="validateMarks(this);calculateTotal()"></td>
  <td><input type="number" name="eng_total" readonly></td>
</tr>

<tr>
  <td>Tamil</td>
  <td><input type="number" value="100" readonly></td>
  <td><input type="number" name="tam_scored" min="0" max="100" oninput="validateMarks(this);calculateTotal()"></td>
  <td><input type="number" name="tam_total" readonly></td>
</tr>

<tr>
  <td>Maths</td>
  <td><input type="number" value="100" readonly></td>
  <td><input type="number" name="mat_scored" min="0" max="100" oninput="validateMarks(this);calculateTotal()"></td>
  <td><input type="number" name="mat_total" readonly></td>
</tr>

<tr>
  <td>Science</td>
  <td><input type="number" value="100" readonly></td>
  <td><input type="number" name="sci_scored" min="0" max="100" oninput="validateMarks(this);calculateTotal()"></td>
  <td><input type="number" name="sci_total" readonly></td>
</tr>

<tr>
  <td>Social Science</td>
  <td><input type="number" value="100" readonly></td>
  <td><input type="number" name="soc_scored" min="0" max="100" oninput="validateMarks(this);calculateTotal()"></td>
  <td><input type="number" name="soc_total" readonly></td>
</tr>

<tr style="font-weight:bold;">
  <td>Total</td>
  <td><input type="number" value="500" readonly></td>
  <td><input type="number" name="overall_scored" readonly></td>
  <td><input type="number" name="overall_total" readonly></td>
</tr>

<tr style="font-weight:bold;">
  <td colspan="3" align="right">Percentage (%)</td>
  <td><input type="text" name="percentage" readonly></td>
</tr>
</table>

<script>
function validateMarks(input){
  if(input.value > 100){
    input.value = 100;
  }
  if(input.value < 0){
    input.value = 0;
  }
}

function calculateTotal() {
  let subjects = ['eng','tam','mat','sci','soc'];
  let totalScored = 0;

  subjects.forEach(s => {
    let scored = parseInt(document.getElementsByName(s+'_scored')[0].value) || 0;
    document.getElementsByName(s+'_total')[0].value = scored;
    totalScored += scored;
  });

  document.getElementsByName('overall_scored')[0].value = totalScored;
  document.getElementsByName('overall_total')[0].value = totalScored;

  let percent = ((totalScored / 500) * 100).toFixed(2);
  document.getElementsByName('percentage')[0].value = percent + " %";
}
</script>


<!-- ================= Bank & Facility ================= -->
<div class="section">Bank & Facility Details</div>
<table>
<tr>
<td>Bank Name</td><td><input name="bank_name"></td>
<td>Account No</td><td><input name="bank_account"></td>
</tr>
<tr>
<td>IFSC Code</td><td><input name="ifsc"></td>
<td>Transport Required</td>
<td>
<select name="transport">
<option>No</option>
<option>Yes</option>
</select>
</td>
</tr>
<tr>
<td>Hostel Required</td>
<td>
<select name="hostel">
<option>No</option>
<option>Yes</option>
</select>
</td>
<td></td><td></td>
</tr>
</table>

<!-- ================= Documents Upload ================= -->
<div class="section">Upload Documents</div>

<table>
<tr style="font-weight:bold;background:#f0f0f0">
<td width="10%">#</td>
<td width="40%">Document Title</td>
<td width="50%">Upload File</td>
</tr>

<tr>
<td>1</td>
<td><input type="text" name="doc_title[]" placeholder="SSLC Mark Sheet"></td>
<td><input type="file" name="documents[]"></td>
</tr>

<tr>
<td>2</td>
<td><input type="text" name="doc_title[]" placeholder="HSC Mark Sheet"></td>
<td><input type="file" name="documents[]"></td>
</tr>

<tr>
<td>3</td>
<td><input type="text" name="doc_title[]" placeholder="Transfer Certificate"></td>
<td><input type="file" name="documents[]"></td>
</tr>

<tr>
<td>4</td>
<td><input type="text" name="doc_title[]" placeholder="Aadhaar / Other"></td>
<td><input type="file" name="documents[]"></td>
</tr>
</table>

<br>
<center>
<button type="submit">SUBMIT ADMISSION</button>
</center>

</form>
</div>

</body>
</html>
