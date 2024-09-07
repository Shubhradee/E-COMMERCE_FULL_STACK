<?php
session_start();
$name=$_POST['Pname'];
$user=$_POST['Username'];
include '../config.php';
$result=mysqli_query($con,"SELECT * FROM `usercart` WHERE `PName`='$name' AND `Name`='$user'");
$row=mysqli_fetch_array($result);
$num=mysqli_num_rows($result);
if($num!=0)
{
    
    $quantity=$_POST['PQuantityRemove'];
    $sub=$row['PQuantity']-$quantity;
    if($sub==0)
    {
    $query="DELETE FROM `usercart` WHERE `PName`='$name' AND `Name`='$user'";
    mysqli_query($con,$query);
    echo "
    <script>
    alert('Product removed from your cart!');
    window.location.href='../UserPanel.php';</script>";
    }
    else{
        if($sub<0)
        {
            echo "
            <script>
            alert('You do not have that much quantity of the product in your cart!');
            window.location.href='../UserPanel.php';</script>";
        }
        else{
        $query="UPDATE `usercart` SET `PQuantity`='$sub' WHERE `PName`='$name' AND `Name`='$user'";
        mysqli_query($con,$query);
        echo "
    <script>
    alert('Product removed from your cart!');
    window.location.href='../UserPanel.php';</script>";}

    }
}

else
{
    echo "
    <script>
    alert('Product is not present in your cart!');
    window.location.href='../UserPanel.php';</script>";
}
?>