<?php
include('admin/assets/config/dbconn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create Account</title>
    <style>
         body {
            background-color: #181a1e;
            color: #f1f0f6;
             display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
       .register-card{
             background: #202528;
             padding: 30px;
              border-radius: 10px;
            max-width: 400px;
            width:100%;
             margin: 20px;
        }
       .register-card .form-control {
            background: #363949;
             color: #fff;
              border: none;
           border-radius: 5px;
        }
          .register-card .form-control::placeholder{
            color: #8d8d8d;
          }
        a{
          color:  #8d8d8d;
         }
    </style>
</head>
<body>
   <div class="register-card">
       <h2 class="text-center mb-4">Create Account</h2>
       <form>
           <div class="row g-3">
               <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name">
               </div>
               <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Last name">
               </div>
            </div>
           <div class="mb-3 mt-3">
             <input type="email" class="form-control" placeholder="Email address">
           </div>
           <div class="row g-3">
                <div class="col-md-6">
                   <input type="password" class="form-control" placeholder="Password">
               </div>
               <div class="col-md-6">
                    <input type="password" class="form-control" placeholder="Confirm Password">
                </div>
          </div>
         <div class="text-center mt-3">
            <button class="btn btn-success">Create Account</button>
        </div>
        <p class="text-center"> <a href="login.php">Have an account? Go to login</a></p>
       </form>
   </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>