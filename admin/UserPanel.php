<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserPanel</title>


                <!-- Bootstrap CDN -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Frontawsome CDN  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php
    include 'mystore.php';
    ?>
<div class="container">
  <div class="row">
    <div class="col-md-10 m-auto ">

   
<table class="table border-primary table-hover border my-5">
            <thead class ="bg-info text-dark fs-5 font-monospace text-center">
                <th>User Name</th>
                <th>User Email</th>
                <th>User Password</th>
                <th>User Contact No.</th>
                <th>User Address</th>
                <th>Delete Entry</th>
            </thead>
           
            
            <tbody class ="text-center">
              <?php

              include 'product/config.php';
              $Record = mysqli_query($con , "SELECT * FROM `users`");
              $num=mysqli_num_rows($Record);


                 while ($row = mysqli_fetch_array($Record)) 
                 echo"
                <tr>

              <td><form action='form/Userdelete.php' method='post'>
              <input readonly value='$row[Name]' name='UserName' required></td>
              <td>$row[Email]</td>
              <td>$row[Password]</td>
              <td>$row[PhoneNo]</td>
              <td>$row[Address]</td>
              <td><button type='submit' class='btn btn-danger' required value='Del'>DELETE</button></td></form>
            </tr>


                 ";


              ?>

            </tbody>


        </table>
</div>
</div>
</div>

    <?php 
    if($num>1)
    echo 
    "<div class='container-fluid bg-warning text-center text-dark p-3'>
    <h4><b>$num USERS ARE AVAILING YOUR SERVICES</b></h4>";
    elseif($num==1)
    echo
    "<div class='container-fluid bg-warning text-center text-dark p-3'>
    <h4><b>$num USER IS AVAILING YOUR SERVICES</b></h4>";
    else
    echo
    "<div class='container-fluid bg-warning text-center text-dark p-3'>
    <h4><b>NO USERS IS AVAILING YOUR SERVICES</b></h4>";
    ?>
</body>
</html>

