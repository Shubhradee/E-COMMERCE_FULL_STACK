<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
    include 'UserHeader.php';
    ?>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 m-auto ">

   
<table class="table border border-primary table-hover border my-5">
            <thead class ="bg-info text-dark fs-5 font-monospace text-center">
                <th>Id</th>
                <th>Product Name</th>
                <th>Price(in &#8377)</th>
                <th>Product Image</th>
                <th>Quantity to be removed</th>
                <th>User Name</th>
                <th>Remove from Cart</th>
            </thead>
           
            
            <tbody class ="text-center">
              <?php
               $name=$_SESSION['user'];
              include 'config.php';
              $Record = mysqli_query($con , "SELECT * FROM `tblproduct`");
              
                 while ($row = mysqli_fetch_array($Record)) 
                { 
                
                  echo"
                <tr>

              <td>$row[Id]</td>
              <td><form action='Cart/Delete.php' method='post'><input readonly name='Pname' value='$row[Pname]'></td>
              <td><input readonly name='Pprice' value='$row[Pprice]'></td>
              <td><img src='../admin/product/$row[Pimage]' alt='img' height='90px' width='140px''></td>
              <td><input type='number' class='form-control' name='PQuantityRemove' required placeholder='Quantity'></td>
              <td><input readonly name='Username' value='$name'></td>
              <td><button type='submit' name='Remove' class= 'btn btn-danger' required>REMOVE</button></td></form>
            </tr>


                 ";
                }


              ?>

            </tbody>


        </table>

        </div>
  </div>
</div>

</body>
</html>
