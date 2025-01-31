<?php
include('admin/assets/config/dbconn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
    <style>
        body {
            background-color: #181a1e;
             color: #f1f0f6;
             display: flex;
            justify-content: center;
             align-items: center;
             min-height: 100vh;
        }
       .login-card{
             background: #202528;
             padding: 30px;
              border-radius: 10px;
            max-width: 400px;
            width:100%;
            margin: 20px;
        }
          .login-card .form-control {
           background: #363949;
            color: #fff;
           border: none;
           border-radius: 5px;
        }
         .login-card .form-control::placeholder{
            color: #8d8d8d;
         }
         a{
          color:  #8d8d8d;
         }
    </style>
</head>
<body>
     <div class="login-card">
          <h2 class="text-center mb-4">Login</h2>
          <form>
            <div class="mb-3">
               <input type="email" class="form-control" placeholder="Email address">
           </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Password">
           </div>
            <div class="form-check mb-3">
                 <input type="checkbox" class="form-check-input" id="rememberPassword">
                  <label class="form-check-label" for="rememberPassword">Remember Password</label>
            </div>
           <p class="text-end"><a href="password_recovery.php">Forgot Password?</a></p>
            <div class="text-center mb-3">
              <button class="btn btn-success">Login</button>
            </div>
          <p class="text-center"> <a href="register.php">Need an account? Sign up!</a></p>
        </form>
     </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>