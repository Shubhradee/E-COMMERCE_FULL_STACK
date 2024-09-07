<?php
$con=mysqli_connect("localhost","root","","myshop");

$A_name = $_POST['username'];
$A_password = $_POST['userpassword'];

$result = mysqli_query($con , "SELECT * FROM `admin` WHERE username = '$A_name' AND userpassword = '$A_password' ");

session_start();//for registering and logging in

if(mysqli_num_rows($result)){//Returns number of rows fetched and stored in $result

    $_SESSION['admin'] = $A_name;

    echo "
        <script>//JS code
        alert('Logged in successfully');
        window.location.href='../mystore.php';
        </script>";
}
else{
    echo "
    <script>
    alert('Invalid username/password');
    window.location.href='login.php';
        </script>

    </script>";

}

?>