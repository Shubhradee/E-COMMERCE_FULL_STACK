<?php
if(isset($_POST['submit']))
{
$name=$_POST['UserName'];
$email=$_POST['UserEmail'];
$phno=$_POST['UserNumber'];
$pass=$_POST['UserPass'];
$address=$_POST['UserAddress'];
include 'config.php';
//Adding a new user
mysqli_query($con,"INSERT INTO `users`(`Name`,`Email`,`PhoneNo`,`Password`,`Address`)
 VALUES('$name','$email','$phno','$pass','$address')");

echo"
<script>
alert('Registered successfully...directing to home page');
window.location.href='../INDEX.php';
</script>";
}
?>