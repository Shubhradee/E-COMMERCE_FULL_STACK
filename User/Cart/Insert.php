<?php
session_start();
$name=$_POST['Pname'];
include '../config.php';
$user=$_POST['Username'];
$result=mysqli_query($con,"SELECT * FROM `usercart` WHERE `Name`='$user' AND `PName`='$name'");
$record=mysqli_query($con,"SELECT `Pimage` FROM `tblproduct` WHERE `Pname`='$name'");
$num=mysqli_num_rows($result);
$row=mysqli_fetch_array($record);
$row2=mysqli_fetch_array($result);
$img=$row['Pimage'];

$quantity=$_POST['PQuantityAdd'];
if(isset($_POST['Add']))
{
if($num==0)
{
    $price= $_POST['Pprice'];
    $query="INSERT INTO `usercart`(`PName`,`Pimage`,`Pprice`,`Name`,`PQuantity`)
    values('$name','$img','$price','$user','$quantity')";
    mysqli_query($con,$query);
    echo "
    <script>
    alert('Product added to your cart!');
    window.location.href='../UserPanel.php';</script>";

}
else
{
    $sub=$quantity+$row2['PQuantity'];
    $query="UPDATE `usercart` SET `PQuantity`='$sub' WHERE `PName`='$name' AND `Name`='$user'";
    mysqli_query($con,$query);
    echo "
    <script>
    alert('Product added to your cart!');
    window.location.href='../UserPanel.php';</script>";   
}
}
?>