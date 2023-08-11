<?php
session_start();
require_once('../../user/connect.php'); // include your database connection file

if(isset($_POST['login_user'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    
    // validate the input fields
    if(empty($user_email)) {
        $_SESSION['error_msg'] = "Email is required";
        header("Location: ../admin/login.php");
        exit();
    }
    if(empty($user_password)) {
        $_SESSION['error_msg'] = "Password is required";
        header("Location: ../admin/login.php");
        exit();
    }

    
    // check if the user exists in the database
    $query = "SELECT * FROM users WHERE user_email='$user_email' AND user_password='$user_password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1) {
        // set session variables for the user
        $_SESSION['user_id'] = $user_id; // use the user id from the database
        $_SESSION['user_email'] = $user_email;
        header("Location: ../index.php"); // redirect to the dashboard page
        exit();
    } else {
        $_SESSION['error_msg'] = "Invalid email or password";
        header("Location: ../login.php");
        exit();
    }
}
?>