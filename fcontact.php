<?php
$Email = $_POST['Email'];
$Name = $_POST['Name'];
$message = $_POST['message'];
//Database connection
$conn = new mysqli('localhost', 'root', '', 'hms');
if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into contact(Name, Email, message)
    values(?, ?, ?)");//num ->integer, pasword,name,email->string,
    $stmt->bind_param("sss", $Name, $Email, $message);
    $stmt->execute();
    echo "message sent successfully";
    $stmt->close();
    $conn->close();
}
?>