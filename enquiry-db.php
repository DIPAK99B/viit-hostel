<?php include "server.php" ?>

<?php
if(isset($_POST['submit-enquiry'])){
    $email = $_POST['email'];
    $description = $_POST['description'];
    $no = $_POST['number'];

    $query = "INSERT INTO enquiry(id ,email , description , no) 
    values (,$email, $description , $no)";

    $query2 = "INSERT INTO `enquiry` (`id`, `email`, `description`, `no`) VALUES (NULL, '$email', '$description', '$no')";

    $run = mysqli_query($conn,$query2) or die(mysqli_error());
    if($run){
        header ('location: enquiry-result.php');
    }
    else {
        echo "You noob, your code don't work";
    }
}
?>