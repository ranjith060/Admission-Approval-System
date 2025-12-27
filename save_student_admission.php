<?php
session_start();
include "db.php";

/* =========================
   1. STUDENT DATA INSERT
   ========================= */
$student_name = $_POST['first_name']." ".$_POST['last_name'];

$conn->query("INSERT INTO students
(student_name,dob,gender,religion,caste,phone,email,address)
VALUES
('$student_name','$_POST[dob]','$_POST[gender]',
'$_POST[religion]','$_POST[caste]',
'$_POST[mobile]','$_POST[email]',
'$_POST[current_address]')");

$student_id = $conn->insert_id;   // ⭐ important

/* =========================
   2. STUDENT PHOTO UPLOAD
   ========================= */
$student_photo = "";
if(!empty($_FILES['student_photo']['name'])){
    $student_photo = "uploads/student_photos/".time()."_".$_FILES['student_photo']['name'];
    move_uploaded_file($_FILES['student_photo']['tmp_name'], $student_photo);

    $conn->query("UPDATE students 
                  SET student_photo='$student_photo' 
                  WHERE student_id='$student_id'");
}

/* =========================
   3. ADMISSIONS
   ========================= */
$conn->query("INSERT INTO admissions
(student_id,admission_no,roll_reg_no,course,course_type,section,admission_date)
VALUES
('$student_id','$_POST[admission_no]','$_POST[roll_no]',
'$_POST[course]','$_POST[course_type]',
'$_POST[section]',NOW())");

/* =========================
   4. PARENT PHOTOS UPLOAD
   ========================= */
$father_photo = "";
if(!empty($_FILES['father_photo']['name'])){
    $father_photo = "uploads/parent_photos/father/".time()."_".$_FILES['father_photo']['name'];
    move_uploaded_file($_FILES['father_photo']['tmp_name'], $father_photo);
}

$mother_photo = "";
if(!empty($_FILES['mother_photo']['name'])){
    $mother_photo = "uploads/parent_photos/mother/".time()."_".$_FILES['mother_photo']['name'];
    move_uploaded_file($_FILES['mother_photo']['tmp_name'], $mother_photo);
}

$guardian_photo = "";
if(!empty($_FILES['guardian_photo']['name'])){
    $guardian_photo = "uploads/parent_photos/guardian/".time()."_".$_FILES['guardian_photo']['name'];
    move_uploaded_file($_FILES['guardian_photo']['tmp_name'], $guardian_photo);
}

/* =========================
   5. PARENTS
   ========================= */
$conn->query("INSERT INTO parents
(student_id,
 father_name,father_mobile,father_occupation,father_photo,
 mother_name,mother_mobile,mother_occupation,mother_photo,
 guardian_name,guardian_mobile,guardian_address,guardian_photo)
VALUES
('$student_id',
 '$_POST[father_name]','$_POST[father_phone]','$_POST[father_occupation]','$father_photo',
 '$_POST[mother_name]','$_POST[mother_phone]','$_POST[mother_occupation]','$mother_photo',
 '$_POST[guardian_name]','$_POST[guardian_phone]','$_POST[guardian_address]','$guardian_photo')");

/* =========================
   6. ACADEMIC
   ========================= */
$conn->query("INSERT INTO academic_details
(student_id,school_name)
VALUES
('$student_id','$_POST[previous_school]')");

/* =========================
   7. BANK
   ========================= */
$conn->query("INSERT INTO bank_details
(student_id,bank_name,account_no,ifsc_code)
VALUES
('$student_id','$_POST[bank_name]','$_POST[bank_account]','$_POST[ifsc]')");

/* =========================
   8. FACILITY
   ========================= */
$conn->query("INSERT INTO facility_details
(student_id,hostel_required,transport_route,pickup_point)
VALUES
('$student_id','$_POST[hostel]','$_POST[route]','$_POST[pickup_point]')");

/* =========================
   9. MULTIPLE DOCUMENTS UPLOAD
   ========================= */
if(isset($_FILES['documents'])){
    for($i=0; $i<count($_FILES['documents']['name']); $i++){
        if($_FILES['documents']['name'][$i] != ""){
            $path = "uploads/documents/".time()."_".$_FILES['documents']['name'][$i];
            move_uploaded_file($_FILES['documents']['tmp_name'][$i], $path);

            $title = $_POST['doc_title'][$i];

            $conn->query("INSERT INTO student_documents
            (student_id, document_title, document_path)
            VALUES
            ('$student_id','$title','$path')");
        }
    }
}

echo "ADMISSION SAVED SUCCESSFULLY";
?>
