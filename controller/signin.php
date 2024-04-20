<?php

session_start(); 

include 'database_con.php';

if(isset($_POST['login'])){

    $matric = $_POST['matric'];
    $password = $_POST['password'];

    $fetch_user_data = "SELECT * FROM `users` WHERE matric_number = ? AND password = ?";
    $stmt = mysqli_prepare($db_connect, $fetch_user_data);
    mysqli_stmt_bind_param($stmt, "ss", $matric, $password);
    mysqli_stmt_execute($stmt);
    $quary_user_data = mysqli_stmt_get_result($stmt);

    
    $data_exist = mysqli_num_rows($quary_user_data);

    if ($data_exist > 0) {

     
        $fetch_all_data = mysqli_fetch_array($quary_user_data);

       
        $_SESSION['email'] = $fetch_all_data['email'];
        $_SESSION['id'] = $fetch_all_data['id'];

       
        header('location:../dashboard.php');

        exit();

    } else {

       
        $err_msg = '<center><p style="color:red;">You just provided invalid Data. Please try again...</p></center>';
        $_SESSION['invalid_data'] = $err_msg;
        header('location:../login.php');
        exit();
    }

}

?>