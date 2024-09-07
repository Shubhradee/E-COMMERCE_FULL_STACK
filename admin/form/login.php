<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

     <!-- Bootstrap CDN -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"-->

</head>
<body class ="bg-secondary">
<div class="container ">
  <div class="row">
    <div class="col-md-6 shadow m-auto bg-white font-monospace p-3  border border-primary mt-3">
   
                <form action ="login1.php " method="POST" >

                    <div class="mb-3">
                      <p class="text-center fw-bold fs-3 text-info">Admin Login:</p>
                    </div>
                    
                    <div class="mb-3">
                        <label  class="form-label">Name:</label>
                        <input type="text" name ="username" class="form-control"  placeholder="Enter username" required>
                     
                      <div class="mb-3">
                        <label  class="form-label">Password:</label>
                        <i class="fas fa-eye" id="togglePassword" style="margin-right; cursor: pointer;"></i>
                        <input type="password" name ="userpassword" class="form-control" autocomplete="current-password" id="id_password" placeholder="Enter password" required>
                        

                        
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
                      

                      <button class="bg-success fs-4 fw-bold my-3 form-control text-white">Login</button>
                    
                </form>

                   
    </div>
  </div>
</div>

    
</body>
</html>