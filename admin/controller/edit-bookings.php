<?php 
if(isset($_POST['change'])){
    include ("../../user/connect.php");

    $status = htmlentities($_POST['status']);
    $id = htmlentities($_POST['id']);
    $sql="UPDATE `bookings` SET `book_status` = '$status' WHERE `bookings`.`book_id` = '$id'";
    if(mysqli_query($conn,$sql)){
        echo '<script>
        alert("Changed Successfully")
        window.location="../allbookings.php"
        </script>';
    }else{
        echo '<script>
        alert("Something went wrong")
        window.location="../allbookings.php"
        </script>';
    }
}
else{
    echo '<script>
    window.location="../allbookings.php"
    </script>';
}