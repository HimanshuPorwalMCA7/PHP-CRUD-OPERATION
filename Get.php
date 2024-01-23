<?php 
    $con=new mysqli("localhost","root","","test");
    if($con->connect_error)
    {
        die("failed".$con->connect_error);
    }
    else{
        $selectquery = "Select * from users";
        $query = mysqli_query($con,$selectquery);

       

        while($res = mysqli_fetch_assoc($query))
        {
            echo $res['user_id']."<br>";
            echo $res['name']."<br>";
            echo $res['email']."<br>";
            
        }
    }
?>