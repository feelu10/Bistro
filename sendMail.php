
<?php 
include ("user/connect.php");

$name = htmlentities(ucwords($_POST['name']));
$email = htmlentities($_POST['email']);
$date = htmlentities($_POST['date']);
$time = htmlentities($_POST['time']).':00';
$numberOfPeople = htmlentities($_POST['numberOfPeople']);
$categ = htmlentities($_POST['categ']);
$available = htmlentities($_POST['available']);
$request = htmlentities($_POST['request']);
$id = rand(1000000000, 9999999999);
if($categ==0){
    $price=1600;
}else{
    $price=500;
}



  ?>

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


$isTimeTaken = false;
$isRoomTaken = false;
// check is specific time is booked
if (isset($_POST['email'])) {
    $booked = $conn->query("SELECT book_time FROM bookings WHERE book_date = '$date' and book_time = '$time' AND book_available='$available'");
    $result = $booked->fetch_all(MYSQLI_ASSOC);
    $bookTimeArray = array_column($result, 'book_time'); 
    $isTimeTaken = in_array($time, $bookTimeArray);

    $isRoomTaken = count($result) > 0;

    $categLib = [
        0 => '₱1600/2 Hours KTV Room',
        1 => '₱500/Hour Floor Table'
    ];
}

 
if ($isRoomTaken === true) {
    echo '<script>
    alert("NOT AVAILABLE! \n\nSchedule: '. $date .' '. $time .'\nCategory: '. $categLib[$categ].' \nRoom: '. $available .' \n\nPlease choose another ROOM or TIME. ")
    window.location="user/index.php"
    </script>';
    return;
}

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dummydummy1stapador@gmail.com';                     //SMTP username
    $mail->Password   = 'gshabvilydndzpux';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('Alley_KTV@restaurant.com', 'Bistro Alley KTV Restaturant');
    $mail->addAddress($email, $name);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Book Online';
          
    

    $mail->Body = 'Dear ' . $name . '<br><br>'.
            'We are pleased to confirm your booking with the following details:'.'<br><br>'.
            'Booking ID: '.$id.'<br>'.
            'Date: '.$date.'<br>'.
            'Time: '.convertTo12HrFormat($time).'<br>'.
            'Amount per Hour: ₱'.$price.' <br><br>'.
            'If you have any questions or concerns, please do not hesitate to contact us at bistroalley@gmail.com '.'<br><br>'.
            'Thank you for choosing our service!'.'<br><br>'.
            'Best regards,<br> Bistro Alley'.'<br>'.'';
     $mail->AltBody = 'Dear ' . $name . '<br><br>'.
            'We are pleased to confirm your booking with the following details:'.'<br><br>'.
            'Booking ID: '.$id.'<br>'.
            'Date: '.$date.'<br>'.
            'Time: '.convertTo12HrFormat($time).'<br>'.
            'Amount per Hour: ₱'.$price.' <br><br>'.
            'If you have any questions or concerns, please do not hesitate to contact us at bistroalley@gmail.com '.'<br><br>'.
            'Thank you for choosing our service!'.'<br><br>'.
            'Best regards,<br> Bistro Alley'.'<br>'.'';
     //   $mail->Body    = 'Booking ID:'.$id."\n".
     //                    'You booked '.$available.' at '.$date.' with the time of '.convertTo12HrFormat($time).'';
     //   $mail->AltBody = 'You booked '.$available.' at '.$date.' with the time of '.convertTo12HrFormat($time).'';
 
    $mail->send();
    

    
$sql = "INSERT INTO `bookings` (`book_id`, `book_name`, `book_email`, `book_date`, `book_time`, `book_people`, `book_request`, `book_category`, `book_available`, `book_special_id`,`book_price`) VALUES (NULL, '$name', '$email', '$date', '$time', '$numberOfPeople', '$request', '$categ', '$available', '$id','$price')";

if(mysqli_query($conn,$sql)){
    echo '<script>
    alert("Booked Successfully")
    window.location="user/index.php"
    </script>';
}else{
    echo '<script>
    alert("There is something wrong")
    window.location="user/index.php"
    </script>';
}

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}