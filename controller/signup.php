<?php 
include "database_con.php";

if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$matric = $_POST['matric'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$place_of_work = $_POST['place_of_work'];
$year = $_POST['year_of_graduation'];
$college = $_POST['college'];
$bio = $_POST['bio'];
$job_status = $_POST['job_status'];
$gender = $_POST['gender'];
$dept = $_POST['dept'];
$target_dir = "profile_pictures/";
$target_file = $target_dir . basename($_FILES['profile_pictures']['name']);
move_uploaded_file($_FILES['profile_pictures']['tmp_name'], $target_file);

$email_query = "SELECT * FROM users WHERE `email` = '$email' OR `matric_number` = '$matric' ";
$result = mysqli_query($db_connect, $email_query);
if (mysqli_num_rows($result) > 0) {
    $_SESSION['status'] = "Email or Matric already exists";
    $_SESSION['status_type'] = "error";
    header("location: ../login.php");
    exit(0);
}else{

$insert_data = "INSERT INTO `users`( `email`, `matric_number` `full_name`, `phone`, `place_of_work`, `profile_picture`, `graduation_year`, `password`, `bio`,`dept`, `job_status`, college, gender) 
VALUES ('$email','$matric','$name','$phone','$place_of_work','$target_file','$year','$password','$bio', '$dept', '$job_status', '$college', '$gender')";
$query_insert = mysqli_query($db_connect, $insert_data);

if ($query_insert) {
    $_SESSION['status'] = "Sign Up Successful";
    $_SESSION['status_type'] = "success";
    header("location: ../login.php");
    exit(0);
} else {
    $_SESSION['status'] = "Something went wrong";
    $_SESSION['status_type'] = "error";
    header("location: ../login.php");
    exit(0);
}

}
}