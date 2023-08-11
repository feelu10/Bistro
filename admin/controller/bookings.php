<?php 
if(isset($_POST['mark'])){
include ("../../user/connect.php");

foreach ($_POST['mark'] as $key => $id) {
    $sql="DELETE FROM bookings WHERE `bookings`.`book_id` = '$id'";
    mysqli_query($conn,$sql);
}
echo '<script>
    alert("Deleted Successfully")
    window.location="../admin/allbookings.php"
    </script>';
}else{
    echo '<script>
    window.location="../admin/allbookings.php"
    </script>';
}
