<?php 
include 'server.php';


if(isset($_POST['addroom'])){
    $hostelname = $_POST['hostelname'];
    $wing = $_POST['wing'];
    $floor = $_POST['floor'];
    $roomno = $_POST['roomno'];
    $type = $_POST['type'];
    $status = $_POST['status'];
    $price = $_POST['price'];



    $sql = "INSERT INTO `room` (`roomid`, `hostelname`, `wing`, `floor`, `roomno`, `type`, `status`, `price`) 
    VALUES (NULL, '$hostelname', '$wing', '$floor', '$roomno', '$type', '$status', '$price');";

    $result = mysqli_query($conn,$sql) or die(mysqli_error());
    if($result){
        header('location: admin.php');
    }

}


?>