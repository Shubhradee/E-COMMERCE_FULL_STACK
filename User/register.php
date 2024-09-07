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
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-6 m-auto bg-white font-monospace shadow border border-info mt-5">
                <h4 class="text-warning text-center fs-10 fw-bold my-3"><b>USER REGISTER</b></h4>
                <form action="AddUser.php" method="post">
                    <div class="mb-3">
                    <label>User Name:</label>
                    <input type="text" class="form-control" name="UserName" required placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                    <label>User Email:</label>
                    <input type="email" class="form-control" name="UserEmail" required placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                    <label>User Phone No.:</label>
                    <input type="number" class="form-control" name="UserNumber" required placeholder="Enter your ph no.">
                    </div>
                    <div class="mb-3">
                    <label>User Password:</label>
                    <i class="fas fa-eye" id="togglePassword" style="margin-right; cursor: pointer;"></i>
                    <input type="password" class="form-control" name="UserPass" required placeholder="Set a strong password" id="id_password">
                    
                    </div>
                    <script>
                    const togglePassword = document.querySelector('#togglePassword');
                    const password = document.querySelector('#id_password');

                    togglePassword.addEventListener('click', function (e) {
                    // toggle the type attribute
                    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                    password.setAttribute('type', type);
                    // toggle the eye slash icon
                    this.classList.toggle('fa-eye-slash');
                    });</script>
                    <div class="mb-3">
                    <label>User Address:</label>
                    <input type="text" class="form-control" name="UserAddress" required placeholder="Enter your current address">
                    </div>
                    <input type="submit" name="submit" required class="form-control bg-danger">
                </form>
            </div>
        </div>
    </div>
    
     