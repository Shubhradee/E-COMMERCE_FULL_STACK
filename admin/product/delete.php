<?php
session_start();
$name=$_POST['Pname'];
include 'config.php';
    mysqli_query($con,"DELETE FROM `tblproduct` WHERE `Pname`='$name'");
    echo
    "<script>
    alert('The product has been deleted!')
    window.location.href='index.php'</script>";
?>