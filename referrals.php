<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referrals</title> 
    <?php include 'includes/header.php'; ?>
</head>
<body> <!-- Header -->
    <header class="sticky-top">
        <nav> <?php include 'includes/navbar.php'; ?> </nav>
    </header> <!-- Main Section -->
    <main> <?php include 'includes/breadcrumbs.php'; ?>
        <div class="container-fluid">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-head">Referrals </h1>
                        <p class="section-para mt-3"> 
                            Unlock exclusive rewards every time you refer a friend through our referral scheme. Get the benefits, and watch your rewards grow!
                        </p>
                    </div>
                </div>
                <!-- Referrals Section -->    
                <div class="row">
                    <div class="col-12"> 
                        <div class="mt-4 border rounded p-4 comments-section">
                            <form id="contactForm" class="mt-4 container">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <input type="text" id="ReferralName" class="form-control form-control-lg form-bg" placeholder="Name*" required autocomplete="off">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <input type="email" id="ReferralEmail" class="form-control form-control-lg form-bg" placeholder="Email*" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <input type="text" id="ReferralPhone" class="form-control form-control-lg form-bg" placeholder="Phone No*" autocomplete="off">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <input type="text" id="ReferralReferredby" class="form-control form-control-lg form-bg" placeholder="Refer By*" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <select class=" form-control form-control-lg form-bg" id="ReferralService" aria-label="Default select example">
                                            <option value="Default Selected" selected>Select a Service</option>
                                            <option value="Bookkeeping">Bookkeeping</option>
                                            <option value="Company Formation">Company Formation</option>
                                            <option value="Payroll Services">Payroll Services</option>
                                            <option value="Personal Tax">Personal Tax</option>
                                            <option value="VAT">VAT</option>
                                            <option value="Tax Planning">Tax Planning</option>
                                            <option value="Management Account's">Management Account's</option>
                                            <option value="Expat Tax">Expat Tax</option>
                                            <option value="Expat Tax">Dubai Tax Accountant</option>
                                        </select>    
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <input type="text" id="ReferralInquiry" class="form-control form-control-lg form-bg" placeholder="Inquiry For*" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <textarea id="ReferralInquiry" class="form-control form-control-lg form-bg" rows="8" placeholder="Extra Information" required autocomplete="off"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <button type="submit" class="mt-3 btn btn-lg text-white blog-cmt-post-btn">Send Message</button>
                                    </div>
                                </div>
                                
                                <div id="successMessage" class="text-center mt-3 fw-semibold">
                                    Your message has been sent successfully.
                                </div>
                            </form>

                            <div id="loadingOverlay">
                                <div class="spinner-border text-primary" style="width:3rem; height:3rem;" role="status"></div>
                                <p class="mt-3 fw-semibold text-primary">Sending your message...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer> 
        <?php include 'includes/footer.php'; ?> 
    </footer> 
    <script>
        const form = document.getElementById("contactForm");
        const overlay = document.getElementById("loadingOverlay");
        const success = document.getElementById("successMessage");

        form.addEventListener("submit", function (e) {
        e.preventDefault();
        success.style.display = "none";
        overlay.style.display = "flex";

        // Simulate email sending delay
        setTimeout(() => {
            overlay.style.display = "none";
            success.style.display = "block";
            form.reset();
        }, 3000);
        });
    </script>
    <?php include 'includes/scroll-top.php'; ?>
    <!--JavaScript--> 
    <?php include 'includes/script.php'; ?>
    <script src="js/breadcrumb.js"></script>
    <script src="js/scroll-top.js"></script>
</body>

</html>