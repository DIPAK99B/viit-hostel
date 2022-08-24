<?php 
session_start();
session_unset();
session_destroy();

if(empty($_SESSION['username'])){
header('location: index.php');
}
else {
    header('location: hostel.php');
}
?>