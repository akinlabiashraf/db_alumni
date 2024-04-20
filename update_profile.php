<?php

session_start();

include 'database_con.php';

if (isset($_POST['update_profile'])) {

    $fullname = $_POST['fullname'];
    $email = $_SESSION['email'];
    $phone = $_POST['phone'];
    $place_of_work = $_POST['place_of_work'];
    $job_status = $_POST['job_status'];
    $graduation_year = $_POST['graduation_year'];
    $target_dir = "profile_pictures/";
    $target_file = $target_dir . basename($_FILES['profile_pictures']['name']);
    move_uploaded_file($_FILES['profile_pictures']['tmp_name'], $target_file);
    $bio = $_POST['bio'];

    $email_query = "SELECT * FROM users ";

    $result = mysqli_query($db_connect, $email_query);

    
    if (mysqli_num_rows($result) > 0) {

        $update_data = "UPDATE users SET `full_name`='$fullname',`phone`='$phone',`place_of_work`='$place_of_work',`profile_picture`='$target_file',`graduation_year`='$graduation_year',`bio`='$bio',`job_status`='$job_status' WHERE email = '$email'";

        $query_update = mysqli_query($db_connect, $update_data);

        if ($query_update) {

            $_SESSION['status'] = "Update Successful";
            $_SESSION['status_type'] = "success";
            header("location: dashboard.php");
            exit(0);
        } else {
            $_SESSION['status'] = "Something went wrong";
            $_SESSION['status_type'] = "error";
            header("location: dashboard.php");
            exit(0);
        }
    }
}
