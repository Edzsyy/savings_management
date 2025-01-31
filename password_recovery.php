<?php
include('admin/assets/config/dbconn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Password Recovery</title>
    <style>
        body {
           background-color: #181a1e;
            color: #f1f0f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
         .recovery-card{
             background: #202528;
              padding: 30px;
              border-radius: 10px;
             max-width: 400px;
             width: 100%;
            margin: 20px;
        }
          .recovery-card .form-control {
           background: #363949;
              color: #fff;
               border: none;
             border-radius: 5px;
        }
         .recovery-card .form-control::placeholder{
            color: #8d8d8d;
        }
        a{
          color:  #8d8d8d;
         }
    </style>
</head>
<body>
    <div class="recovery-card">
        <h2 class="text-center mb-4">Password Recovery</h2>
          <p class="text-center mb-4">Enter your email address and we will send you a link to reset your password.</p>
        <form>
             <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email address">
           </div>
           <div class="d-flex justify-content-between align-items-center">
                <a href="login.php">Return to login</a>
                 <button class="btn btn-success">Reset Password</button>
           </div>
        <p class="text-center mt-3"> <a href="register.php">Need an account? Sign up!</a></p>
      </form>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>