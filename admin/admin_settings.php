<?php
include('../admin/assets/config/dbconn.php');
include('../admin/assets/inc/header.php');
include('../admin/assets/inc/sidebar.php');
include('../admin/assets/inc/navbar.php');
?>
<body>
    <div class="container mt-4">
        <h1 class="h3 mb-4">Settings</h1>
           <form id="settingsForm">
              <div class="card mb-4">
                 <div class="card-body">
                     <h5 class="card-title">General Settings</h5>
                    <div class="mb-3">
                        <label for="systemName" class="form-label">System Name</label>
                        <input type="text" class="form-control" id="systemName" name="systemName" placeholder="Enter System Name" value="Savings System">
                   </div>
                   <div class="mb-3">
                     <label for="timezone" class="form-label">Default Timezone</label>
                         <select class="form-select" id="timezone" name="timezone">
                           <option value="Asia/Manila">Asia/Manila</option>
                            <option value="America/Los_Angeles">America/Los_Angeles</option>
                            <option value="Europe/London">Europe/London</option>
                       </select>
                  </div>
                </div>
            </div>
            <div class="card mb-4">
               <div class="card-body">
                  <h5 class="card-title">Financial Settings</h5>
                    <div class="mb-3">
                         <label for="interestRate" class="form-label">Deposit Interest Rate (%)</label>
                       <input type="number" class="form-control" id="interestRate" name="interestRate" placeholder="Enter interest rate" value="5">
                    </div>
                    <div class="mb-3">
                         <label for="dailyWithdrawalLimit" class="form-label">Daily Withdrawal Limit</label>
                        <input type="number" class="form-control" id="dailyWithdrawalLimit" name="dailyWithdrawalLimit" placeholder="Enter daily limit" value="1000">
                    </div>
                     <div class="mb-3">
                        <label for="monthlyWithdrawalLimit" class="form-label">Monthly Withdrawal Limit</label>
                        <input type="number" class="form-control" id="monthlyWithdrawalLimit" name="monthlyWithdrawalLimit" placeholder="Enter monthly limit" value="10000">
                     </div>
                      <div class="mb-3">
                         <label for="minimumBalance" class="form-label">Minimum Balance</label>
                         <input type="number" class="form-control" id="minimumBalance" name="minimumBalance" placeholder="Enter minimum balance" value="100">
                    </div>
                    <div class="mb-3">
                        <label for="transactionFee" class="form-label">Transaction Fee ($)</label>
                        <input type="number" class="form-control" id="transactionFee" name="transactionFee" placeholder="Enter transaction fee" value="1">
                    </div>
               </div>
            </div>
             <div class="card mb-4">
                <div class="card-body">
                   <h5 class="card-title">Notification Settings</h5>
                      <div class="form-check mb-2">
                          <input type="checkbox" class="form-check-input" id="emailNewUser" name="emailNewUser" checked>
                         <label class="form-check-label" for="emailNewUser">Receive Email for New Users</label>
                      </div>
                     <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="emailPaymentActivity" name="emailPaymentActivity" checked>
                          <label class="form-check-label" for="emailPaymentActivity">Receive Email for Payment Activity</label>
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>