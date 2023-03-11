<?php

include 'conn.php';

if(isset($_GET['key'])){

    $key = $_GET['key'];
    $sql = "SELECT * FROM users WHERE CONCAT(firstName, lastName) like '%$key%'";
    $result = mysqli_query($conn, $sql);
    header('Location: search.php?key=found');

}else{
    echo "error";
}