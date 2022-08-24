<?php include 'server.php';
// after pending-request-process.php

//sdate rname rnumber

if(isset($_POST['submit-process'])){
  if(!empty($_POST['name']) && !empty($_POST['mobile']) && !empty($_POST['room']) && !empty($_POST['sdate']) && !empty($_POST['rname']) && !empty($_POST['rnumber'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $room = $_POST['room'];
    $sdate = $_POST['sdate'];
    $rname = $_POST['rname'];
    $rnumber = $_POST['rnumber'];

    $getid = "SELECT loginid FROM login WHERE mobile='$mobile' limit 1";
    $getidresult = mysqli_query($conn,$getid);
    $row = mysqli_fetch_assoc($getidresult);

    $id = $row['loginid'];

    $insertintoregister = "INSERT INTO `hostelregister` (`recordid`, `studentid`, `roomid`, `startdate`, 
    `enddate`, `rectorname`, `rectorno`) 
    VALUES (NULL, '$id', '$room', '$sdate', NULL, '$rname', '$rnumber')";

    $result = mysqli_query($conn,$insertintoregister) or die(mysqli_error());


    $roomupdate = "UPDATE `room` SET `status` = '$id' WHERE `room`.`roomid` = '$room'";
    $run1 = mysqli_query($conn,$roomupdate) or die(mysqli_error());

    $hostelformupdate = "UPDATE `hostelform` SET `status` = '$room' WHERE `hostelform`.`id` = '$id'";
    $run2 = mysqli_query($conn,$hostelformupdate) or die(mysqli_error());

    if($result){
      if($run1){
        if($run2){
          header('location: pending-request.php');
        }
      }
    }

 


    
    //write a code to change - status of student , room and update it to hostelregister;



  }
  else 
  {
    echo "Fill all fields";
  }
}




//test code
/*
if(isset($_POST['submit-process'])){
$name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $room = $_POST['room'];

    $getid = "SELECT loginid FROM login WHERE mobile='$mobile' limit 1";
    $getidresult = mysqli_query($conn,$getid);
    $row = mysqli_fetch_assoc($getidresult);


    $id = $row['loginid'];


    echo $id;
}
else {
  echo "something fishy";
}
*/

?>

