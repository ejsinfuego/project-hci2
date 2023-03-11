<?php

include "conn.php";

if (isset($_GET['key'])){

    $key = $_GET['key'];
    $sql = "SELECT id, firstName, lastName, email FROM users WHERE CONCAT(firsName, lastName, email) like '%$key%';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $rows = mysqli_fetch_assoc($result);
        header('Location: residents.php?search=found');
    }else {
        header('Location: residents.php');
    }  
} else {
    $sql = "SELECT id, firstName, lastName, email FROM users ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
}