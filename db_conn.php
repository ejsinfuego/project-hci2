<?php


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];

$conn = new mysqli('localhost', 'root', '','test_db');
if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into users(firstName, lastName, email, password, age) values(?, ?, ?, ?, ?)");
    $stmt-> bind_param("ssssi", $firstName, $lastName, $email, $password, $age);
    $stmt->execute();
    echo "Registration Successful";
    $stmt->close();
    $conn->close();
}

?>