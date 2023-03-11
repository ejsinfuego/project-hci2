<?php

session_start();
include "conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
   function validate($data) {
    $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    return $data;
   }
   
   
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if(empty($email)) {
        header("Location: index.php?error=Username is required#admin");
        exit();

    }elseif(empty($password)) {
        header("Location: index.php?error=Password is required#admin");
        exit();                                
    
    }else{

        $password = md5($password);
        $sql = "select * from users where email='$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
                $_SESSION['phoneNumber'] = $row['phoneNumber'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['firstName'] = $row['firstName'];
                $_SESSION['id'] = $row['id'];
                header('Location: home.php');
                exit(); 
            }elseif($row['email'] === $email && $row['password'] <> $password) {
            header("Location: index.php?error=Incorrect password#admin");
            exit();
            }
        }else {
            header("Location: index.php?error=Incorrect email#admin");
            exit();
        }
    

    }
}else{

    header("Location: index.php");
    exit(); 
}

?>