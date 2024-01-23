<?php
$name = $_POST['name'];
$email = $_POST['email'];

$con = new mysqli('localhost', 'root', '', 'test');

if ($con->connect_error) {
    die('Connection Error' . $con->connect_error);
} else {
    $stmt = $con->prepare("insert into users ( name,email) values(?,?)");
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();
    header('location:index.php');
    $stmt->close();
    $con->close();
}

?>