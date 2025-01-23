<?php
include('../admin/assets/config/dbconn.php');
include('../admin/assets/inc/header.php');
include('../admin/assets/inc/sidebar.php');
include('../admin/assets/inc/navbar.php');
?>
<body>
    <div class="container mt-4">
        <h1 class="h3 mb-4">Admin Help Center</h1>

         <div class="mb-4">
               <input type="text" class="form-control" placeholder="Search Policies and Procedures" id="helpSearch">
           </div>

        <!-- Policy and Procedures Sections -->
        <div class="accordion" id="helpAccordion">
            <!-- Deposit Policies -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingDepositPolicies">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDepositPolicies" aria-expanded="true" aria-controls="collapseDepositPolicies">
                       Deposit Policies
                    </button>
                </h2>
                <div id="collapseDepositPolicies" class="accordion-collapse collapse show" aria-labelledby="headingDepositPolicies" data-bs-parent="#helpAccordion">
                    <div class="accordion-body">
                       <p>
                        Deposits are credited to the user's account within one business day, and will be shown as pending until reviewed by the system administrator, if everything is approved the funds will be fully credited to the user.
                        </p>
                         <p>
                            The system does not allow deposits that exceed the user's maximum deposit limit per month. If a user tries to exceed this limit then it should not go through, and an appropriate message will be displayed.
                       </p>
                    </div>
                </div>
            </div>

            <!-- Withdrawal Policies -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingWithdrawalPolicies">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWithdrawalPolicies" aria-expanded="false" aria-controls="collapseWithdrawalPolicies">
                        Withdrawal Policies
                    </button>
                </h2>
                <div id="collapseWithdrawalPolicies" class="accordion-collapse collapse" aria-labelledby="headingWithdrawalPolicies" data-bs-parent="#helpAccordion">
                    <div class="accordion-body">
                       <p>
                           The withdrawal amount must not exceed the current available balance in the user's account.
                       </p>
                      <p>
                            Withdrawal requests are processed within two business days. Users will be redirected to the payment provider's website for authorization.
                       </p>
                   </div>
                </div>
            </div>

            <!-- User Issue Protocols -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingUserIssueProtocol">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUserIssueProtocol" aria-expanded="false" aria-controls="collapseUserIssueProtocol">
                        User Issue Protocols
                    </button>
                </h2>
                <div id="collapseUserIssueProtocol" class="accordion-collapse collapse" aria-labelledby="headingUserIssueProtocol" data-bs-parent="#helpAccordion">
                    <div class="accordion-body">
                        <p>
                            When a user reports an issue, follow this procedure:
                            1. Confirm that you understand the issue.
                            2. Get the necessary details about the issue, such as the date of transaction, or user details.
                           3.  If the issue is a bug or system failure then report it immediately to the development team.
                           4. If the issue is a user issue such as password recovery, then help the user.
                         </p>
                    </div>
                </div>
            </div>

            <!-- Security Protocols -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSecurityProtocol">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSecurityProtocol" aria-expanded="false" aria-controls="collapseSecurityProtocol">
                        Security Protocols
                    </button>
                </h2>
                <div id="collapseSecurityProtocol" class="accordion-collapse collapse" aria-labelledby="headingSecurityProtocol" data-bs-parent="#helpAccordion">
                    <div class="accordion-body">
                         <p>
                            If a user reports a potential security breach then take the following steps.
                             1. Change the password of the user immediately.
                            2. If there was a potential transaction breach then immediately freeze the account until the issue has been investigated.
                             3. Notify the development team so they can patch the issue or correct it.
                         </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>