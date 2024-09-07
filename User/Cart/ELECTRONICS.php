<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELECTRONICS PAGE</title>

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
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><img src ="../log.jpeg" alt ="image" height ="100" width="300"></a>
    
    <div class = "d-flex fs-6">
    <a href = "../../INDEX.php" class = "text-primary text-decoration-none pe-2"><i class="fa-solid fa-house"></i> Home  |</a>
    <a href = "" class = "text-primary text-decoration-none pe-2 "><i class="fa-solid fa-cart-plus"></i>  Cart(0) | </a>

     <span class = "text-primary pe-2 fs-6">
    <i class="fa-solid fa-users fs-6"></i> Hello, |
    <a href="../login.php" class ="text-primary text-decoration-none pe-2 "><i class="fa-solid fa-arrow-right-to-bracket fs-6"></i> User Login |</a>
    <a href="../../admin/form/login.php" class ="text-primary text-decoration-none pe-2 "><i class="fa-solid fa-user-tie fs-6"></i> Admin</a>
</span> 
</nav> 
 </div>
 <div class ="font-arial bg-success">
<ul class="d-flex justify-content-center">
<li class="text-decoration-none text-white fw-bold px-5"><a href="LAPTOPS.php" class="text-white"><b>LAPTOPS</b></a></li>
<li class="text-decoration-none text-white fw-bold px-5"><a href="MOBILES.php" class="text-white"><b>MOBILES</b></a></li>
<li class="text-decoration-none text-white fw-bold px-5"><a href="BAGS.php" class="text-white"><b>BAGS</b></a></li>
<li class="text-decoration-none text-white fw-bold px-5"><a href="ELECTRONICS.php" class="text-white"><b>ELECTRONICS</b></a></li>
<li class="text-decoration-none text-white fw-bold px-5"><a href="CLOTHES.php" class="text-white"><b>CLOTHES</b></a></li>
</ul>
</div>
<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<div class='container-fluid'>
<h1 class="text-warning font-monospace text-center my-3">ELECTRONICS</h1>
</div>
<?php

include '../config.php';

$Record = mysqli_query($con , "SELECT * FROM `tblproduct`");
while($row=mysqli_fetch_array($Record)){
  if($row['Pcategory']=='ELECTRONICS')
echo "
<div class='col-md-6 col-lg-4 m-auto mb-3'>

<div class='card m-auto' style='width: 18rem;'>
  <img class='card-img-top' src='../../admin/product/$row[Pimage]' alt='Card image cap'>
  <div class='card-body text-center'>
    <h5 class='card-title text-dark fs-4 fw-bold'>$row[Pname]</h5>
    <p class='card-text text-dark fs-10 fw-bold'>&#8377 $row[Pprice]<b>(Limited)<br>Login to grab the offer</b></p>
   
  </div>
</div>
</div>";

}
include '../footer.php';
?>

