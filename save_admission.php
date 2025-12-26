/* =========================
   save_admission.php
   ========================= */
<?php
include "db.php";

$conn->query("INSERT INTO students
(student_name,dob,age,mother_tongue,gender,religion,community,caste,aadhar_no,umis_no,emis_no,blood_group,phone,email,address)
VALUES
('$_POST[student_name]','$_POST[dob]','$_POST[age]','$_POST[mother_tongue]',
'$_POST[gender]','$_POST[religion]','$_POST[community]','$_POST[caste]',
'$_POST[aadhar_no]','$_POST[umis_no]','$_POST[emis_no]','$_POST[blood_group]',
'$_POST[phone]','$_POST[email]','$_POST[address]')");

$student_id = $conn->insert_id;

$conn->query("INSERT INTO admissions
(student_id,course_applied,roll_reg_no,date_of_joining,period_of_study)
VALUES
('$student_id','$_POST[course_applied]','$_POST[roll_reg_no]',
'$_POST[date_of_joining]','$_POST[period_of_study]')");

$conn->query("INSERT INTO parents
(student_id,father_name,father_occupation,father_income,father_mobile,
mother_name,mother_occupation,mother_income,mother_mobile,
guardian_name,guardian_mobile,guardian_address)
VALUES
('$student_id','$_POST[father_name]','$_POST[father_occupation]',
'$_POST[father_income]','$_POST[father_mobile]',
'$_POST[mother_name]','$_POST[mother_occupation]',
'$_POST[mother_income]','$_POST[mother_mobile]',
'$_POST[guardian_name]','$_POST[guardian_mobile]','$_POST[guardian_address]')");

$conn->query("INSERT INTO academic_details
(student_id,class,year_of_passing,school_name,school_place,medium,board,part1_language)
VALUES
('$student_id','$_POST[class]','$_POST[year_of_passing]',
'$_POST[school_name]','$_POST[school_place]',
'$_POST[medium]','$_POST[board]','$_POST[part1_language]')");

$subs = ['english','tamil','maths','science','social'];
foreach($subs as $s){
  $conn->query("INSERT INTO marks(student_id,subject_name,marks_secured)
  VALUES('$student_id','$s','$_POST[$s]')");
}

$conn->query("INSERT INTO bank_details
(student_id,bank_name,branch,account_no,ifsc_code)
VALUES
('$student_id','$_POST[bank_name]','$_POST[branch]',
'$_POST[account_no]','$_POST[ifsc]')");

$conn->query("INSERT INTO facility_details
(student_id,transport_required,hostel_required)
VALUES
('$student_id','$_POST[transport]','$_POST[hostel]')");

echo "OK";
?>
