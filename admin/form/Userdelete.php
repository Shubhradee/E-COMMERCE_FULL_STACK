<?php
session_start();
include '../product/config.php';
$name=$_POST['UserName'];

    mysqli_query($con,"DELETE from `users` where `Name`='$name'");
    echo
    "<script>
    alert('User entry deleted!');
    window.location.href='../UserPanel.php';</script>";
