<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home_page</title>


                <!-- Bootstrap CDN -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Frontawsome CDN  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<?php

session_start();//Register and login
if(!$_SESSION['admin'] ){
  header("location:form/login.php");

}

?>
<body>
  

<nav class="navbar navbar-light bg-light bg-dark">
  <div class="container-fluid text-white">
            <a class="navbar-brand text-white"><h1>Myshop</h1></a>
    <span>
      <i class="fa-solid fa-user-tie"></i>
        Hello, Admin: <?php echo $_SESSION['admin']; ?> |
       <i class="fa-solid fa-arrow-right-from-bracket"></i>
           <a href="form/logout.php" class="text-decoration-none text-white">Logout</a> |
    </span>
  </div>
</nav>

                <div>
                <h2 class="text-center fw-bold"><b>Dashboard</b></h2>
                </div>

                <div class="col-md-5 bg-success text-center m-auto ">
                  <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Add Post</a>
                  <a href="UserPanel.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
                </div>
                
</body>
</html>