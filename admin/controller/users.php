<?php 
if(isset($_POST['mark'])){
include ("../../user/connect.php");

foreach ($_POST['mark'] as $key => $id) {
    $sql="DELETE FROM users WHERE `users`.`user_id` = '$id'";
    mysqli_query($conn,$sql);
}
echo '<script>
    alert("Deleted Successfully")
    window.location="../admin/allusers.php"
    </script>';
}else{
    echo '<script>
    window.location="../admin/allusers.php"
    </script>';
}
