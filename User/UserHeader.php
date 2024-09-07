<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<!-- Frontawsome CDN  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"-->

</head>
<body>
    <?php
    session_start();
    include 'config.php';
    $name=$_SESSION['user'];
    $Record = mysqli_query($con ,"SELECT `PName`,`Pimage`,`Pprice`,`PQuantity` FROM `usercart` WHERE `Name`= '$name'");
    $orders=mysqli_num_rows($Record);
    ?>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><img src ="log.jpeg" alt ="image" height ="100" width="300"></a>
    
    <div class = "d-flex fs-6">
    <a href = "../INDEX.php" class = "text-primary text-decoration-none pe-2"><i class="fa-solid fa-house"></i> Home  |</a>
    <a class = "text-primary text-decoration-none pe-2 "><i class="fa-solid fa-cart-plus"></i> Cart(<?php echo "$orders" ?>)  </a>

     <span class = "text-primary pe-2 fs-6">
    <a href='AddCart.php' class="text-primary text-decoration-none pe-2">Add,
    <a href='RemoveCart.php' class="text-primary text-decoration-none pe-2 ">Remove |
    <i class="fa-solid fa-users fs-6"></i> Hello, <?php echo "$name |";?>
    <a href="logout.php" class ="text-primary text-decoration-none pe-2 "><i class="fas fa-sign-out fs-6"></i> User Logout |</a>
</span> 
</nav> 
 </div>

<div class ="font-arial bg-success text-white">
<p class="d-flex justify-content-center">
<b>HAPPY &#160 &#160 SHOPPING! &#160 &#160 FEEL&#160 &#160  FREE&#160 &#160  TO 
&#160 &#160 AVAIL &#160 &#160 OUR &#160 &#160 SERVICES</b></p>
</div>
</body>
</html>