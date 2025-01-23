<?php
include('../user/assets/config/dbconn.php');
include('../user/assets/inc/header.php');
include('../user/assets/inc/sidebar.php');
include('../user/assets/inc/navbar.php');
?>

<body>
    <div class="container mt-4">
        <h1 class="h3 mb-4">Help Center</h1>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Frequently Asked Questions (FAQs)</h5>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How do I deposit money into my account?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                To deposit money, navigate to the "Deposit" page and enter the required details.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How do I apply for a loan?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                To apply for a loan, navigate to the "Loans" page and fill out the loan application form.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How do I view my transaction history?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                To view your transaction history, navigate to the "Transaction History" page.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Still Need Help?</h5>
                <div class="row">
                    <div class="col-md-6 text-center mb-3">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fas fa-phone fa-3x text-primary mb-2"></i>
                            <p><strong>Call us</strong></p>
                            <p>(02)895 29232 or (02)89 Savings system Available daily from 8AM to 8PM</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fas fa-comment-dots fa-3x text-primary mb-2"></i>
                            <p><strong>Chat with Us</strong></p>
                            <p>Talk to "name of Agent", our 24/7 virtual customer care officer, or get support from our Customer Care Specialists who are available daily from 6AM to 12AM.</p>
                            <a href="user_chat.php" class="btn btn-outline-primary">Chat Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>