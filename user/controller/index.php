
<?php 
include ("../connect.php");

$name = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$date = htmlentities($_POST['date']);
$time = htmlentities($_POST['time']).':00';
$numberOfPeople = htmlentities($_POST['numberOfPeople']);
$categ = htmlentities($_POST['categ']);
$available = htmlentities($_POST['available']);
$request = htmlentities($_POST['request']);
$id = rand(1000000000, 9999999999);

$sql = "INSERT INTO `bookings` (`book_id`, `book_name`, `book_email`, `book_date`, `book_time`, `book_people`, `book_request`, `book_category`, `book_available`, `book_special_id`) VALUES (NULL, '$name', '$email', '$date', '$time', '$numberOfPeople', '$request', '$categ', '$available', '$id')";

if(mysqli_query($conn,$sql)){
    echo '<script>
    alert("Booked Successfully")
    window.location="../index.php"
    </script>';
}else{
    echo '<script>
    alert("There is something wrong")
    window.location="../index.php"
    </script>';
}

  