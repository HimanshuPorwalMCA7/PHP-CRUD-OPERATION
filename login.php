<?php
 $email = $_POST['email'];
 $password = $_POST['password'];
 $con= new mysqli("localhost","root","","test");

 if($con->connect_error)
 {
    die("Connection failed".$con->connect_error);
 }
 else
 {
    $stmt=$con->prepare("select * from rishabh where email=?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0)
    {
        $data=$stmt_result->fetch_assoc();
        if($data['password']===$password)
        {
            header("location:Get.php");
        }
        else
        {
            echo"Invalid Email or Password";
        }
    }
    else
    {
        echo"Invalid Email";
    }
 } 