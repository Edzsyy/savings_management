<?php
include('../user/assets/config/dbconn.php');
include('../user/assets/inc/header.php');
include('../user/assets/inc/sidebar.php');
include('../user/assets/inc/navbar.php');
?>

<body>
    <div class="container mt-4">
        <h1 class="h3 mb-4">Settings</h1>

        <form id="settingsForm">
             <div class="card mb-4">
                 <div class="card-body">
                    <h5 class="card-title">Notifications</h5>
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="emailNotifications" name="emailNotifications" checked>
                        <label class="form-check-label" for="emailNotifications">Receive email notifications</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="smsNotifications" name="smsNotifications">
                        <label class="form-check-label" for="smsNotifications">Receive SMS notifications</label>
                   </div>
               </div>
            </div>
              <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Preferences</h5>
                    <div class="mb-3">
                       <label for="language" class="form-label">Language</label>
                            <select class="form-select" id="language" name="language">
                               <option value="en">English</option>
                               <option value="es">Spanish</option>
                               <option value="fr">French</option>
                             </select>
                    </div>
               </div>
           </div>
           <div class="card mb-4">
                 <div class="card-body">
                    <h5 class="card-title">Security Settings</h5>
                      <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" id="enable2fa" name="enable2fa">
                             <label class="form-check-label" for="enable2fa">Enable Two-Factor Authentication</label>
                        </div>
                        <div class="mb-3">
                           <label for="passwordRequirements" class="form-label">Password Requirements</label>
                             <input type="text" class="form-control" id="passwordRequirements" name="passwordRequirements" placeholder="Enter Password Requirements" value="At least 8 characters, 1 Upper, 1 Lower, and 1 number">
                        </div>
                 </div>
              </div>
          <div class="text-center">
             <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
        </form>
    </div>
 <script>
        function togglePasswordVisibility(inputId) {
            const passwordInput = document.getElementById(inputId);
             const eyeIcon = passwordInput.nextElementSibling.querySelector('i');
              if (passwordInput.type === "password") {
                  passwordInput.type = "text";
                eyeIcon.classList.remove('fa-eye');
                  eyeIcon.classList.add('fa-eye-slash');
            } else {
                 passwordInput.type = "password";
                  eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>