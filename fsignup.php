<?php
$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
//Database connection
$conn = new mysqli('localhost', 'root', '', 'hms');
if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into signup(name, email, password, confirmpassword)
    values(?, ?, ?, ?)");//num ->integer, pasword,name,email->string,
    $stmt->bind_param("ssss", $name, $email, $password, $confirmpassword);
    $stmt->execute();
    echo "signedup successfully";
    $stmt->close();
    $conn->close();
}
?>