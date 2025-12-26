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
</style>
</head>

<body>

<div class="container">
<h2>STUDENT ADMISSION FORM</h2>

<form method="POST" action="save_admission.php">

<div class="section">Admission Details</div>
<table>
<tr>
<td>Course Applied</td>
<td>
<select name="course_applied">
<option value="">-- Select --</option>
<option>1st Year</option>
<option>Lateral Entry</option>
<option>Re-Admission</option>
<option>Transfer</option>
</select>
</td>
<td>Roll / Reg No</td>
<td><input name="roll_reg_no"></td>
</tr>

<tr>
<td>Date of Joining</td>
<td><input type="date" name="date_of_joining"></td>
<td>Period of Study</td>
<td><input name="period_of_study"></td>
</tr>
</table>

<div class="section">Student Personal Details</div>
<table>
<tr>
<td>Name</td><td><input name="student_name"></td>
<td>Date of Birth</td><td><input type="date" name="dob"></td>
</tr>
<tr>
<td>Age</td><td><input name="age"></td>
<td>Gender</td>
<td>
<select name="gender">
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
</td>
</tr>
<tr>
<td>Mother Tongue</td><td><input name="mother_tongue"></td>
<td>Religion</td><td><input name="religion"></td>
</tr>
<tr>
<td>Community</td><td><input name="community"></td>
<td>Caste</td><td><input name="caste"></td>
</tr>
<tr>
<td>Aadhar No</td><td><input name="aadhar_no"></td>
<td>UMIS No</td><td><input name="umis_no"></td>
</tr>
<tr>
<td>EMIS No</td><td><input name="emis_no"></td>
<td>Blood Group</td><td><input name="blood_group"></td>
</tr>
<tr>
<td>Phone</td><td><input name="phone"></td>
<td>Email</td><td><input name="email"></td>
</tr>
<tr>
<td>Address</td>
<td colspan="3"><textarea name="address"></textarea></td>
</tr>
</table>

<div class="section">Parent / Guardian Details</div>
<table>
<tr>
<td>Father Name</td><td><input name="father_name"></td>
<td>Occupation</td><td><input name="father_occupation"></td>
</tr>
<tr>
<td>Income</td><td><input name="father_income"></td>
<td>Mobile</td><td><input name="father_mobile"></td>
</tr>
<tr>
<td>Mother Name</td><td><input name="mother_name"></td>
<td>Occupation</td><td><input name="mother_occupation"></td>
</tr>
<tr>
<td>Income</td><td><input name="mother_income"></td>
<td>Mobile</td><td><input name="mother_mobile"></td>
</tr>
<tr>
<td>Guardian Name</td><td><input name="guardian_name"></td>
<td>Mobile</td><td><input name="guardian_mobile"></td>
</tr>
<tr>
<td>Guardian Address</td>
<td colspan="3"><textarea name="guardian_address"></textarea></td>
</tr>
</table>

<div class="section">Academic Details</div>
<table>
<tr>
<td>Class</td><td><input name="class"></td>
<td>Year of Passing</td><td><input name="year_of_passing"></td>
</tr>
<tr>
<td>School Name</td><td><input name="school_name"></td>
<td>School Place</td><td><input name="school_place"></td>
</tr>
<tr>
<td>Medium</td><td><input name="medium"></td>
<td>Board</td><td><input name="board"></td>
</tr>
<tr>
<td>Part I Language</td><td><input name="part1_language"></td>
</tr>
</table>

<div class="section">Marks Details</div>
<table>
<tr><td>English</td><td><input name="english"></td></tr>
<tr><td>Tamil</td><td><input name="tamil"></td></tr>
<tr><td>Maths</td><td><input name="maths"></td></tr>
<tr><td>Science</td><td><input name="science"></td></tr>
<tr><td>Social Science</td><td><input name="social"></td></tr>
</table>

<div class="section">Bank & Facility Details</div>
<table>
<tr>
<td>Bank Name</td><td><input name="bank_name"></td>
<td>Branch</td><td><input name="branch"></td>
</tr>
<tr>
<td>Account No</td><td><input name="account_no"></td>
<td>IFSC</td><td><input name="ifsc"></td>
</tr>
<tr>
<td>Transport</td>
<td>
<select name="transport">
<option>Yes</option>
<option>No</option>
</select>
</td>
<td>Hostel</td>
<td>
<select name="hostel">
<option>Yes</option>
<option>No</option>
</select>
</td>
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
