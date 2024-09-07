<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    <?php
     include 'UserHeader.php';
     ?>
</head>
<body>
<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<div class='container-fluid'>
<h1 class="text-warning font-monospace text-center my-3">YOUR CART</h1>
</div>
  <!-- connect with database -->
<?php
$amount=0;
if($orders==0)
{
    echo "
    <div class='container text-dark text-center'>
    <h4><b>You haven't added any item in your cart</b></h4>";
}
else
{
while($row=mysqli_fetch_array($Record)){
   $amount=$amount+$row['Pprice']*$row['PQuantity'];
    echo "
    <div class='col-md-6 col-lg-4 m-auto mb-3'>
    
    <div class='card m-auto' style='width: 18rem;'>
      <img class='card-img-top' src='../admin/product/$row[Pimage]' alt='Card image cap'>
      <div class='card-body text-center'>
        <h5 class='card-title text-dark fs-4 fw-bold'>$row[PName]</h5>
        <p class='card-text text-dark fs-10 fw-bold'>&#8377 $row[Pprice]<b><br>Quantity added:- $row[PQuantity]
        </b></p>
       
      </div>
    </div>
    </div>";
    
    }
  }
  ?>
    
  </div>
</div>
</div>
<div class="container-fluid text-center text-dark bg-warning ">
<?php
     echo "<br><h5><b>TOTAL AMOUNT:-  &#8377 $amount</b></h5><br>";
     
  ?>
       
</div>
</body>
</html>
