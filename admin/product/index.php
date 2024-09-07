<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="container ">
  <div class="row">
    <div class="col-md-6 m-auto border border-primary mt-3">
   
                <form action ="insert.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                      <p class="text-center fw-bold fs-3 text-info">Product Detail:</p>
                    </div>
                    
                    <div class="mb-3">
                        <label  class="form-label">Product Name:</label>
                        <input type="text" name ="Pname" class="form-control"  placeholder="Enter product name">
                     
                      <div class="mb-3">
                        <label  class="form-label">Product Price:</label>
                        <input type="text" name ="Pprice" class="form-control"  placeholder="Enter product price">
                      </div>

                      <div class="mb-3">
                        <label  class="form-label">Add Product Image:</label>
                        <input type="file" name ="Pimage" class="form-control" >
                      </div>

                      <div class="mb-3">
                        <label  class="form-label">Select Page Category:</label>
                        <select class="form-select" name ="Pages">
                       <option value="LAPTOPS">LAPTOPS</option>
                       <option value="MOBILES">MOBILES</option>
                       <option value="BAGS">BAGS</option>
                       <option value="ELECTRONICS">ELECTRONICS</option>
                       <option value="CLOTHES">CLOTHES</option>
                       </select>
                      </div>

                      <button name ="submit"class="bg-success fs-4 fw-bold my-3 form-control text-white">Upload</button>
                    
                </form>

                   
    </div>
  </div>
</div>

<!-- fetch data -->

<!-- table from bootstrap code -->

<div class="container">
  <div class="row">
    <div class="col-md-10 m-auto ">

   
<table class="table border border-primary table-hover border my-5">
            <thead class ="bg-info text-dark fs-5 font-monospace text-center">
                <th>Id</th>
                <th>Name</th>
                <th>Price(in &#8377)</th>
                <th>Image</th>
                <th>Category</th>
                <!-- <th>Update</th> -->
                <th>Delete</th>
            </thead>
           
            
            <tbody class ="text-center">
              <?php

              include 'config.php';
              $Record = mysqli_query($con , "SELECT * FROM `tblproduct`");


                 while ($row = mysqli_fetch_array($Record)) 
                 echo"
                <tr>

              <td>$row[Id]</td>
              <td><form action='delete.php' method='post'><input readonly name='Pname' value='$row[Pname]'></td>
              <td>$row[Pprice]</td>
              <td><img src='$row[Pimage]' height= '90px' width= '140px' ></td>
              <td>$row[Pcategory]</td>
              
              <td><button type='submit' value='Del' name='Del' class = 'btn btn-danger'>Delete</td></form>

            </tr>


                 ";


              ?>

            </tbody>


        </table>

        </div>
  </div>
</div>

</body>
</html>