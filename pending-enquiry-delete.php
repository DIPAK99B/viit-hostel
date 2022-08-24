<?php 

include 'server.php';
error_reporting(0);

$rn = $_GET['rn'];


$sql = "DELETE FROM enquiry WHERE id='".$rn."'";
$result = mysqli_query($conn,$sql) or die(mysqli_error());

header('location: pending-enquiry.php');

?>