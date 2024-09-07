<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php
     include 'User/header.php';
     ?>
</head>
<body>
<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<div class='container-fluid'>
<h1 class="text-warning font-monospace text-center my-3">HOME</h1>
</div>
  <!-- connect with database -->
<?php

include 'User/config.php';

$Record = mysqli_query($con , "SELECT * FROM `tblproduct`");
while($row=mysqli_fetch_array($Record)){
echo "
<div class='col-md-6 col-lg-4 m-auto mb-3'>

<div class='card m-auto' style='width: 18rem;'>
  <img class='card-img-top' src='admin/product/$row[Pimage]' alt='Card image cap'>
  <div class='card-body text-center'>
    <h5 class='card-title text-dark fs-4 fw-bold'>$row[Pname]</h5>
    <p class='card-text text-dark fs-10 fw-bold'>&#8377 $row[Pprice]<b>(Limited)<br>Login to grab the offer</b></p>
   
  </div>
</div>
</div>";

}
include 'User/footer.php';
?>
