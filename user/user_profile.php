<?php
include('../user/assets/config/dbconn.php');
include('../user/assets/inc/header.php');
include('../user/assets/inc/sidebar.php');
include('../user/assets/inc/navbar.php');
include('../user/assets/inc/footer.php');
?>
<body>
<div class="data-card">
    <div class="card" style="display: flex; flex-direction: column; min-height: 90vh;">  <!-- apply flexbox to card -->
        <div class="card-header">
           <!-- no content here -->
        </div>
        <div class="card-body flex-grow-1">  <!-- added flex-grow here-->
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="text-center">
                        <img src="./assets/image/profile.png" class="rounded-circle avatar-lg"
                            alt="profile-image" style="width: 150px; height: 150px; object-fit: cover;">

                        <h4 class="mb-0">System Administrator</h4>
                        <p class="text-muted">@System_Administrator</p>
                        <div class="text-left mt-3">
                            <p class="text-muted mb-2"><strong>Full Name :</strong> <span class="ml-2">System Administrator</span></p>
                            <p class="text-muted mb-2"><strong>Email :</strong> <span class="ml-2 ">admin@mail.com</span></p>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-8 col-xl-8">
                    
                    <ul class="nav nav-pills navtab-bg nav-justified">
                        <li class="nav-item">
                            <a href="#aboutme" data-bs-toggle="pill" aria-expanded="true" class="nav-link active">
                                Update Profile
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#settings" data-bs-toggle="pill" aria-expanded="false" class="nav-link">
                                Change Password
                            </a>
                        </li>
                    </ul>
                     <div class="tab-content">
                        <div class="tab-pane show active" id="aboutme">
                            <form method="post" enctype="multipart/form-data">
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputFirstname">First Name</label>
                                            <input type="text" required="required" value="System" name="fname" class="form-control" id="inputFirstname" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword">Last Name</label>
                                            <input required="required" type="text" value="Administrator" name="lname" class="form-control"  id="inputPassword">
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputEmail">Email Address</label>
                                            <input required="required" type="email" value="admin@mail.com" class="form-control" name="email" id="inputEmail">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <label for="inputProfile">Profile Picture</label>
                                               <div class="input-group">
                                                   <input type="file" name="profile-pic" class="form-control" id="inputProfile" placeholder="admin@mail.com">
                                                   <span class="input-group-text">No file...hosen</span>
                                                </div>
                                           </div>
                                    </div>
                                    
                                </div> <!-- end row -->

                            
                                <div class="text-right">
                                    <button type="submit" name="update_profile" class="btn btn-primary mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                </div>
                            </form>
                        </div> <!-- end tab-pane -->

                        <div class="tab-pane" id="settings">
                            <form method="post">
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputOldpassword">Old Password</label>
                                            <input type="password" class="form-control" id="inputOldpassword" placeholder="Enter Old Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputNewpassword">New Password</label>
                                            <input type="password" class="form-control" name="ad_pwd" id="inputNewpassword" placeholder="Enter New Password">
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="form-group">
                                    <label for="inputConfirmpassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="inputConfirmpassword" placeholder="Confirm New Password">
                                </div>

                                <div class="text-right">
                                    <button type="submit" name="update_pwd" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Update Password</button>
                                </div>
                            </form>
                        </div>
                        <!-- end settings content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>