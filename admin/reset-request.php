<?php 

if(isset($_POST["sendResetInstructionsId"])){
    $selector = bin2hex(random_bytes(8)); // assign token
    $token = random_bytes(32);

    $url = ""; // assign website url here www.tuts.net/forgottenpassword/create-new-password.php?selector=".$selector". "&validator=".bin2hex($token);

    //create expiration date for the token
    $expires = date("U") + 1800;

    require '../user/connect.php';

    $user_email = $_POST["email"];

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();

    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $user_email);
        mysqli_stmt_execute($stmt);
    }


    $sql = "INSERT INTO pdwReset (pwdResetEmail, pwdSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();

    }
    else{
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $user_email, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    $to = $user_email;

    $subject = 'Reset your password for Bistro Admin';

    $message ='<p>We received a password reset request. The link to reset your password is below. If you diid not make this 
    request, you can ignore this email</p>';


    $message .= '<p>Here is your password reset link: </br>';

    $message .= '<a> href="'.$url.'">'.$url.'</a> </p>';

    $headers = "From: Bistro Alley Tech <bistroalleytech@gmail.com> \r\n";
    $headers .= "Reply-To: bistroalleytech@gmail.com \r\n";
    $headers .= "Content-type: text/html \r\n";

    mail($to, $subject, $message, $headers);

    header("Location: ../admin/forgot.php?reset=success");



}
else{
    header("Location: ../admin/login.php");
}

