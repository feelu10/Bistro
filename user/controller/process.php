<?php
if(isset($_POST['submit'])) {
    // Get the form fields and remove whitespace
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject =$_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "dendencurate29@gmail.com";
    $headers = " From: ".$email;
    $txt = "You have received an e-mail from".$name.".\n\n".$message;



   
   mail($mailTo, $subject, $txt, $headers);
    
   header("Location: contact.php?emailsend");
}
?>
