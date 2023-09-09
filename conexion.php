<?php

    $host = "localhost";
    $user = "root";
    $pass = "123";
    $db = "sistema";


    $link = mysqli_connect("localhost", "root", "", "sistema");

    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>