<?php 
    $user_id = $_POST['user_id'];
    $con=new mysqli("localhost","root","","test");
    if($con->connect_error)
    {
        die("failed".$con->connect_error);
    }
    else
    {
        
        $deletequery = "delete from users where user_id=$user_id";
        $query = mysqli_query($con,$deletequery);
        header('location:index.php');
    }
?>