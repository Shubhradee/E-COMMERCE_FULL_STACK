<?php
$name=$_POST['UserName'];
$pass=$_POST['UserPass'];
include 'config.php';
$result=mysqli_query($con,"SELECT * FROM `users` WHERE `Name`='$name' AND `Password`='$pass' ");
session_start();//for logging in

if(mysqli_num_rows($result)){//Returns number of rows fetched and stored in $result

    $_SESSION['user'] = $name;

    echo "
        <script>
        alert('Logged in successfully');
        window.location.href='UserPanel.php';
        </script>";
}
else{
    echo "
    <script>
    alert('Invalid username/password. Please register before logging in');
    window.location.href='login.php';
        </script>

    </script>";

}

?>

