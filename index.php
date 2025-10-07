<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font -->
    <link href="https://api.fontshare.com/v2/css?f%5B%5D=satoshi@1,300,400,500,700,900&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Animate On Scroll CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php include 'includes/header.php'; ?>
</head>
<body data-bs-spy="scroll" data-bs-target="#v-pills-tab" data-bs-smooth-scroll="true" tabindex="0">
<!-- Header -->
 <header class="sticky-top">
    <nav>
        <?php include 'includes/navbar.php'; ?>            
    </nav>
 </header>
    <!-- Main Section -->
    <main>
        <!-- Hero Section -->
        <section id="hero-section" class="py-5 section-container" aria-label="Hero Section" data-aos="fade-up">
            <div class="container-fluid ">
                <div class="container">
                    <div class="d-flex flex-column justify-content-between">
                        <div class="d-flex">
                            <h1 class="align-self-start hero-head">
                                Empowering Growth Through <br>
                                Modern Accounting
                            </h1>
                        </div>
                        <div class="d-flex w-100 flex-column order-2 order-md-1 flex-lg-row justify-content-center justify-content-lg-between align-items-center mt-3 mb-0">
                            <a href="tel:+442030846407" class="hero-contact-btn align-self-lg-end" data-aos="zoom-in"
                            data-aos-easing="linear"
                            data-aos-duration="500">Consult Now</a>
                            <img src="images/Ratings.png" class="img-fluid ms-lg-auto d-none d-md-block rating-img" alt="Client Rating">
                        </div>
                        <!-- Hero Section Para for Desktop Screens -->
                        <div class="mt-5 order-1 order-md-2 d-none d-lg-flex">
                            <p class="hero-para">
                                Experienced <span class="hero-link-bold"><a class="hero-link-bold-a">UK Tax Accountant</a></span> and <span class="hero-link-bold"><a href="#" class="hero-link-bold-a">Specialist Tax Advisor</a></span>, providing tailored <span class="hero-link-bold"><a href="#" class="hero-link-bold-a">Tax
                                Planning Services</a></span> to
                                individuals and businesses across the UK. Effortlessly manage your taxes, unlock
                                greater returns, and maintain full compliance with trusted expertise.
                            </p>
                        </div>
                        <!-- Hero Section Para for Mobile/Tablet Screens -->                         
                        <div class="mt-5 mb-0 mb-md-5 mb-lg-0 d-flex d-md-none flex-row justify-content-center typewriter"> 
                            <span class="hero-link-bold typewriter-wrapper">
                                <a href="#" class="hero-link-bold-a-mob text-white typed" aria-hidden="true"></a>
                            </span>
                        </div>
                        <img src="images/Ratings.png" class="img-fluid ms-auto d-block d-md-none rating-img" alt="Client Rating">
                        <p class="hero-para d-block d-lg-none">
                            Experienced in guiding individuals and businesses across the UK, helping them effortlessly manage their taxes, maximize returns, and maintain full compliance with trusted expertise.
                        </p>
                    </div>
                </div>
            </div>  
        </section>
        <!-- Main Section -->
        <!-- Tesimonials Section -->
         <div class="container-fluid mb-5 mt-5">
            <div class="container">
                <div class="text-center mt-4">
                        <h6 class="section-stamps">Testimonials</h6>
                        <h2 class="section-head">What our clients say</h2>
                    </div>
                <div class="row d-flex flex-row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="testimonial-carousel">
                            <div class="testimonial-group p-2" id="reviews">
                                    <!-- Here the feefo reviews will appear -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    <!-- Milestones Counter -->
     <section id="milestones" class="section-container" aria-label="Milestones Section">
        <div class="container-fluid">
            <div class="container">
                <div class="text-center mt-4">
                        <h6 class="section-stamps">Milestones</h6>
                        <h2 class="section-head">Proud moments built on trust and results</h2>
                    </div>
                    <div class="d-flex flex-column w-100">
                        <div class="row d-flex flex-row justify-content-between align-items-center mb-3 counter-box" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="500">
                            <p class="col-12 col-md-8 mb-0 milestone-txt">Total Projects Completed</p>
                            <p class="col-12 col-md-4 mb-0 text-center text-md-start">
                                <span class="col-12 col-md-4 mb-0 milestone-count count">12</span><span class="milestone-count">K</span>
                            </p>    
                        </div>
                        <div class="row d-flex flex-row justify-content-between align-items-center mb-3 counter-box" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="500">
                            <p class="col-12 col-md-8 mb-0 milestone-txt">Happy & Satisfied Clients </p>
                            <p class="col-12 col-md-4 mb-0 milestone-count count">900</p>
                        </div>
                        <div class="row d-flex flex-row justify-content-between align-items-center mb-3 counter-box" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="500">
                            <p class="col-12 col-md-8 mb-0 milestone-txt">Average Service Score</p>
                            <p class="col-12 col-md-4 mb-0 milestone-count count">4.9</p>
                        </div>
                        <div class="row d-flex flex-row justify-content-between align-items-center mb-3 counter-box" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="500">
                            <p class="col-12 col-md-8 mb-0 milestone-txt">Years of Experience</p>
                            <p class="col-12 col-md-4 mb-0 milestone-count count">10+</p>
                        </div>
                    </div>
            </div>
        </div>
     </section>
     <section id="Features" class="section-container" aria-label="Features Section">
        <div class="container-fluid">
        <!-- Features Section for Desktop Screens -->
            <div class="container d-none d-md-block">
                <div class="text-center mt-4">
                    <h6 class="section-stamps">Features</h6>
                    <h2 class="section-head">All our Services are Built to</h2>
                </div>
                    <div class="row d-flex flex-column feature-pack">
                        <div class="col-12 feature-box feature-1">
                            <p class="feature-head" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600" >Maximize your Tax Savings</p>
                            <div class="overlay-sheet">
                                <p class="feature-desc">Businesses save up to 7% of their net GST monthly, while individuals make the most by filing with us. Get expert guidance, faster processing, and hassle free compliance ensuring you keep more of what you earn, every single month.</p>
                            </div>
                        </div>
                        <div class="col-12 feature-box feature-2">
                            <p class="feature-head" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">Unmatched Efficiency</p>
                            <div class="overlay-sheet">
                                <p class="feature-desc">Cut through compliance bottlenecks with intelligent automation: file GST returns in a third of the time, reconcile invoices at 5× the standard rate, and generate e-waybills in seconds. Individual tax returns completed in under minutes with accuracy built in.</p>
                            </div>
                        </div>
                        <div class="col-12 feature-box feature-3">
                            <p class="feature-head" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">Precision Led Compliance</p>
                            <div class="overlay-sheet">
                                <p class="feature-desc">Our systems are built to deliver accurate, real time compliance across VAT, GST, payroll, and corporate tax obligations. Whether you re a business or an individual, we ensure every submission meets HMRC standards first time, every time.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Features Section for Mobile Screens -->
                <div class="container d-block d-md-none">
                    <div class="text-center mt-4">
                        <h6 class="section-stamps">Features</h6>
                        <h2 class="section-head">All our Services are Built to</h2>
                    </div>
                    <div class="row">
                        <div class="col-12 " data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600" >
                            <div class="feature-card-mob">
                                <p class="feature-head-mob">Maximize your Tax Savings</p>
                                <p class="feature-desc-mob text-dark">Businesses save up to 7% of their net GST monthly, while individuals make the most by filing with us. Get expert guidance, faster processing, and hassle free compliance ensuring you keep more of what you earn, every single month.</p>                            
                            </div>
                        <div class="col-12 mt-5">
                            <div class="feature-card-mob" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600" >
                                <p class="feature-head-mob">Unmatched Efficiency</p>
                                <p class="feature-desc-mob text-dark">Cut through compliance bottlenecks with intelligent automation: file GST returns in a third of the time, reconcile invoices at 5× the standard rate, and generate e-waybills in seconds. Individual tax returns completed in under minutes with accuracy built in.</p>
                            </div>
                        </div>
                        <div class="col-12 mt-5">
                            <div class="feature-card-mob" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600" >
                                <p class="feature-head-mob">Precision Led Compliance</p>
                                <p class="feature-desc-mob text-dark">Our systems are built to deliver accurate, real time compliance across VAT, GST, payroll, and corporate tax obligations. Whether you re a business or an individual, we ensure every submission meets HMRC standards first time, every time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!-- We Offer Section -->
     <section id="WeOffer" class="section-container" aria-label="We Offer">
        <div class="container-fluid">
            <div class="container">
                <div class="text-center mt-4">
                    <h6 class="section-stamps">We Offer</h6>
                    <h2 class="section-head">Proud moments built on trust and results</h2>
                </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="section-para">
                                At the heart of every successful business is sound financial management. Our UK-based accountancy services are designed to support individuals, sole traders, and companies with practical, compliant, and forward-thinking financial solutions.
                            </p>
                        </div>
                    </div>
                   <div class="row mt-5 d-none d-lg-flex">
                    <!-- Scroll Spy nav tabs here here -->
                        <div class="col-12 col-md-4">
                            <div class="d-flex align-items-start h-100">
                            <div class="nav flex-column nav-pills justify-content-between h-100 me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link-offer active" href="#TaxPlanningAndCompliance" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="300">Tax Planning and Compliance</a>
                                <a class="nav-link-offer" href="#VATAndGSTAdvisory" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="300">VAT and GST Advisory</a>
                                <a class="nav-link-offer" href="#PayrollServices" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="300">Payroll Services</a>
                                <a class="nav-link-offer" href="#BookkeepingAndAccountsPreparation" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="300">Bookkeeping and Accounts Preparation</a>
                                <a class="nav-link-offer" href="#FinancialPlanningAndForecasting" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="300">Financial Planning and Forecasting</a>
                                <a class="nav-link-offer" href="#SelfAssessmentTaxReturns" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="300">Self-Assessment Tax Returns</a>
                            </div>
                            </div>
                        </div>
                        <!-- Scroll Spy content will appear here -->
                        <div class="col-12 col-md-8 scroll-container" data-bs-spy="scroll" data-bs-target="#v-pills-tab" data-bs-smooth-scroll="true" tabindex="0" style="height:50vh;overflow-y:scroll;">
                            <div id="TaxPlanningAndCompliance" class="offer-item">
                                <img src="images/offer-card1.png" class="offer-imgs" alt="Tax Planning and Compliance">
                                <h4 class="offer-panel-head">Tax Planning and Compliance</h4>
                                <div class="d-flex flex-md-column justify-content-md-start flex-lg-row justify-content-lg-between align-items-lg-center">
                                    <p class="offer-panel-desc">From personal tax returns to corporate tax strategies, we help you stay ahead and save more.</p>
                                    <a href="tax-planning.php" class="text-decoration-none offer-link">Know More</a>
                                </div>
                            </div>
                            <div id="VATAndGSTAdvisory" class="offer-item">
                                <img src="images/offer-card2.jpg" class="offer-imgs" alt="VAT and GST Advisory">
                                <h4 class="offer-panel-head">VAT and GST Advisory</h4>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <p class="offer-panel-desc">Navigate the complexities of VAT and GST with expert support that ensures full accuracy and maximised savings.</p>
                                    <a href="vat.php" class="text-decoration-none offer-link">Know More</a>
                                </div>
                            </div>
                            <div id="PayrollServices" class="offer-item">
                                <img src="images/offer-card3.jpg" class="offer-imgs" alt="Payroll Services">
                                <h4 class="offer-panel-head">Payroll Services</h4>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <p class="offer-panel-desc">Hassle-free payroll solutions, RTI submissions, and auto-enrolment support for businesses of all sizes.</p>
                                    <a href="payroll-services.php" class="text-decoration-none offer-link">Know More</a>
                                </div>  
                            </div>
                            <div id="BookkeepingAndAccountsPreparation" class="offer-item">
                                <img src="images/offer-card4.jpg" class="offer-imgs" alt="Bookkeeping and Accounts Preparation">
                                <h4 class="offer-panel-head">Bookkeeping and Accounts Preparation</h4>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <p class="offer-panel-desc">Maintain accurate records, ensure full HMRC compliance, simplify finances, and manage your accounts with ease.</p>
                                    <a href="bookkeeping.php" class="text-decoration-none offer-link">Know More</a>
                                </div>  
                            </div>
                            <div id="FinancialPlanningAndForecasting" class="offer-item">
                                <img src="images/offer-card5.jpg" class="offer-imgs" alt="Business Advisory and Financial Forecasting">
                                <h4 class="offer-panel-head">Business Advisory and Financial Forecasting</h4>
                                 <div class="d-flex flex-row justify-content-between align-items-center">
                                    <p class="offer-panel-desc">Gain clarity on your finances with expert insights, tailored to help you grow and make informed decisions.</p>
                                    <a href="#" class="text-decoration-none offer-link">Know More</a>
                                </div>
                            </div>
                            <div id="SelfAssessmentTaxReturns" class="offer-item">
                                <img src="images/offer-card6.jpg" class="offer-imgs" alt="Self-Assessment Tax Returns">
                                <h4 class="offer-panel-head">Self-Assessment Tax Returns</h4>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <p class="offer-panel-desc">Your tax return, Our professional priority. Navigate your tax responsibilities with clarity and assurance through our Self-Assessment service.</p>
                                    <a href="self-assessment-tax-returns.php" class="text-decoration-none offer-link">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- We offer Section for Mobile -->
                    <div class="row d-block d-lg-none mb-5">
                        <div class="col-12 ">
                            <div id="TaxPlanningAndComplianceMob" class="mt-5 mt-md-2 offer-item ">
                                <h4 class="offer-panel-head-mob">Tax Planning and Compliance</h4>
                                <img src="images/offer-card1.png" class="offer-imgs" alt="Tax Planning and Compliance">
                                <div class="d-flex flex-column">
                                    <p class="offer-panel-desc-mob">From personal tax returns to corporate tax strategies, we help you stay ahead and save more.</p>
                                     <a href="tax-planning.php" class="mt-2 align-self-center align-self-md-start offer-mob-redirect">Know More <svg class="redirect-arrow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.63605 18.364L18.364 5.63603M18.364 5.63603L8.46446 5.63604M18.364 5.63603V15.5355" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                                </div>
                            </div>
                            <div id="VATAndGSTAdvisoryMob" class="mt-5 mt-md-2 offer-item ">
                                <h4 class="offer-panel-head-mob">VAT and GST Advisory</h4>
                                <img src="images/offer-card2.jpg" class="offer-imgs" alt="VAT and GST Advisory">
                                <div class="d-flex flex-column">
                                    <p class="offer-panel-desc-mob">Navigate the complexities of VAT and GST with expert support that ensures full accuracy and maximised savings.</p>
                                     <a href="vat.php" class="mt-2 align-self-center align-self-md-start offer-mob-redirect">Know More  <svg class="redirect-arrow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.63605 18.364L18.364 5.63603M18.364 5.63603L8.46446 5.63604M18.364 5.63603V15.5355" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                                </div>
                            </div>
                            <div id="PayrollServicesMob" class="mt-5 mt-md-2 offer-item ">
                                <h4 class="offer-panel-head-mob">Payroll Services</h4>
                                <img src="images/offer-card3.jpg" class="offer-imgs" alt="Payroll Services">
                                <div class="d-flex flex-column">
                                    <p class="offer-panel-desc-mob">Hassle-free payroll solutions, RTI submissions, and auto-enrolment support for businesses of all sizes.</p>
                                     <a href="payroll-services.php" class="mt-2 align-self-center align-self-md-start offer-mob-redirect">Know More  <svg class="redirect-arrow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.63605 18.364L18.364 5.63603M18.364 5.63603L8.46446 5.63604M18.364 5.63603V15.5355" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                                </div>  
                            </div>
                            <div id="BookkeepingAndAccountsPreparationMob" class="mt-5 mt-md-2 offer-item ">
                                <h4 class="offer-panel-head-mob">Bookkeeping and Accounts Preparation</h4>
                                <img src="images/offer-card4.jpg" class="offer-imgs" alt="Bookkeeping and Accounts Preparation">
                                <div class="d-flex flex-column">
                                    <p class="offer-panel-desc-mob">Maintain accurate records, ensure full HMRC compliance, simplify finances, and manage your accounts with ease.</p>
                                     <a href="bookkeeping.php" class="mt-2 align-self-center align-self-md-start offer-mob-redirect">Know More  <svg class="redirect-arrow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.63605 18.364L18.364 5.63603M18.364 5.63603L8.46446 5.63604M18.364 5.63603V15.5355" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                                </div>  
                            </div>
                            <div id="FinancialPlanningAndForecastingMob" class="mt-5 mt-md-2 offer-item ">
                                <h4 class="offer-panel-head-mob">Business Advisory and Financial Forecasting</h4>
                                <img src="images/offer-card5.jpg" class="offer-imgs" alt="Business Advisory and Financial Forecasting">
                                 <div class="d-flex flex-column">
                                    <p class="offer-panel-desc-mob">Gain clarity on your finances with expert insights, tailored to help you grow and make informed decisions.</p>
                                     <a href="#" class="mt-2 align-self-center align-self-md-start offer-mob-redirect">Know More  <svg class="redirect-arrow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.63605 18.364L18.364 5.63603M18.364 5.63603L8.46446 5.63604M18.364 5.63603V15.5355" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                                </div>
                            </div>
                            <div id="SelfAssessmentTaxReturnsMob" class="mt-5 mt-md-2 offer-item ">
                                <h4 class="offer-panel-head-mob">Self-Assessment Tax Returns</h4>
                                <img src="images/offer-card6.jpg" class="offer-imgs" alt="Self-Assessment Tax Returns">
                                <div class="d-flex flex-column">
                                    <p class="offer-panel-desc-mob">Your tax return, Our professional priority. Navigate your tax responsibilities with clarity and assurance through our Self-Assessment service.</p>
                                     <a href="self-assessment-tax-returns.php" class="mt-2 align-self-center align-self-md-start offer-mob-redirect">Know More  <svg class="redirect-arrow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.63605 18.364L18.364 5.63603M18.364 5.63603L8.46446 5.63604M18.364 5.63603V15.5355" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Principles Section -->
        <section class="section-container bg-color" id="Principles" aria-label="Principles Section">
            <div class="container-fluid">
                <div class="container mb-5">
                    <div class="text-center mt-4">
                        <h6 class="section-stamps">Principles</h6>
                        <h2 class="section-head">Why Choose Consultax ?</h2>
                    </div>
                        <div class="d-flex flex-column mt-5">
                            <div class="row">
                                <div class="col-12 col-md-2 justify-content-center align-items-center text-center principle-icon-div">
                                    <img src="images/principle-1.png" class="principle-imgs" alt="Remarkably Simple">
                                </div>
                                <div class="col-12 col-md-10 d-flex flex-column text-start justify-content-center principle-text-div">
                                    <p class="principle-head">Remarkably Simple</p>
                                    <p class="principle-desc">Get started in under a minute. We will swiftly connect you with reliable and trusted experts, guiding you every step of the way.</p>
                                </div>
                            </div>
                            <div class="row mt-5" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                                <div class="col-12 col-md-2 d-flex justify-content-center align-items-center text-center principle-icon-div">
                                    <img src="images/principle-2.png" class="principle-imgs" alt="Genuinely Transparent">
                                </div>
                                <div class="col-12 col-md-10 d-flex flex-column text-start justify-content-center principle-text-div">
                                    <p class="principle-head">Genuinely Transparent</p>
                                    <p class="principle-desc">We handpick and verify top leading professionals nationwide, so you engage only with the most qualified advisors.</p>
                                </div>
                            </div>
                            <div class="row mt-5" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                                <div class="col-12 col-md-2 d-flex justify-content-center align-items-center text-center principle-icon-div">
                                    <img src="images/principle-3.png" class="principle-imgs" alt="Peace of Mind">
                                </div>
                                <div class="col-12 col-md-10 d-flex flex-column text-start justify-content-center principle-text-div">
                                    <p class="principle-head">Peace of Mind</p>
                                    <p class="principle-desc">Consultax Chartered Accountancy has enough experience in dealing with tax affairs to assure you that your work is in the right hands.</p>
                                </div>
                            </div>
                            <div class="row mt-5"  data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                                <div class="col-12 col-md-2 d-flex justify-content-center align-items-center text-center principle-icon-div">
                                    <img src="images/principle-4.png" class="principle-imgs" alt="No Hidden Charges">
                                </div>
                                <div class="col-12 col-md-10 d-flex flex-column text-start justify-content-between principle-text-div">
                                    <p class="principle-head">No Hidden Charges</p>
                                    <p class="principle-desc">What you are quoted is what you will pay - no hidden fees, no last-minute extras. Just upfront, honest pricing from day one.</p>
                                </div>
                            </div>
                            <div class="row mt-5"  data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                                <div class="col-12 col-md-2 d-flex justify-content-center align-items-center text-center principle-icon-div">
                                    <img src="images/principle-5.png" class="principle-imgs" alt="Refer a Friend">
                                </div>
                                <div class="col-12 col-md-10 d-flex flex-column text-start justify-content-center principle-text-div">
                                    <p class="principle-head">Refer a Friend</p>
                                    <p class="principle-desc">Earn <strong>£50</strong> cashback for every successful referral. Receive unlimited rewards. Keep recommending friends and continue enjoying generous benefits.</p>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
        </section>
        <!-- Core Values -->
         <section class="section-container no-pad-mb" id="coreValues" aria-label="Core Values Section">
            <div class="container-fluid">
                <!-- Core values Desktop Section -->
                <div class="container d-none d-md-block">
                    <div class="text-center mt-4">
                        <h6 class="section-stamps">Core Values</h6>
                        <h2 class="section-head">What We Stand For ?</h2>
                        <p class="section-para">
                            Purpose-led. Expert-driven. Built on trust, care, and genuine commitment to every client.
                        </p>
                    </div>
                    <div class="row d-flex flex-column feature-pack mt-5">
                        <div class="col-12 feature-box core-value-1">
                            <p class="feature-head" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">CLIENT COMMITMENT</p>
                            <div class="overlay-sheet">
                                <p class="feature-desc">You're never just a number. We listen closely, tailor every solution, and put your needs at the centre of everything we do.</p>
                            </div>
                        </div>
                        <div class="col-12 feature-box core-value-2">
                            <p class="feature-head" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">EXPERTISE</p>
                            <div class="overlay-sheet">
                                <p class="feature-desc">Tax is our speciality. Our qualified team stays ahead of the curve to deliver precise, compliant, and forward-thinking advice.</p>
                            </div>
                        </div>
                        <div class="col-12 feature-box core-value-3">
                            <p class="feature-head" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">INTEGRITY</p>
                            <div class="overlay-sheet">
                                <p class="feature-desc">We do what’s right - always. Clear advice, honest communication, and full transparency are the foundation of our work.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Core values Mobile Section -->
                <div class="container d-block d-md-none mb-5">
                    <div class="text-center mt-4">
                        <h6 class="section-stamps">Core Values</h6>
                        <h2 class="section-head">What We Stand For ?</h2>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <div class="feature-card-mob">
                                <p class="feature-head-mob">CLIENT COMMITMENT</p>
                                <p class="feature-desc-mob text-dark">You're never just a number. We listen closely, tailor every solution, and put your needs at the centre of everything we do.</p>
                            </div>
                        <div class="col-12 mt-5">
                            <div class="feature-card-mob">
                                <p class="feature-head-mob">EXPERTISE</p>
                                <p class="feature-desc-mob text-dark">Tax is our speciality. Our qualified team stays ahead of the curve to deliver precise, compliant, and forward-thinking advice.</p>
                            </div>
                        </div>
                        <div class="col-12 mt-5">
                            <div class="feature-card-mob">
                                <p class="feature-head-mob">INTEGRITY</p>
                                <p class="feature-desc-mob text-dark">We do what’s right - always. Clear advice, honest communication, and full transparency are the foundation of our work.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
         </section>
        <!-- CTA Section -->
            <section class="section-container bg-blue-two" id="CTA" aria-label="Request Call Section">
                <div class="container-fluid ">
                    <div class="container">
                        <p class="text-white section-head-cta">Need a Hand with your Tax Return ?</p>
                        <div class="row mt-5">
                            <div class="col-12 col-md-6">
                                <p class="cta-tagline">Your Goals, Our Focus - </p>
                                <p class="cta-tagline">Accounting with Purpose </p>
                            </div>
                            <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end align-items-center">
                                <a href="tel:+442030846407" class="text-decoration-none cta-redirect" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="800" >Request Your Consultation Today</a>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <p class="text-white  cta-para">Book a free consultation to go over your personal tax affairs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Resources Section -->
            <section class="section-container" id="Resources" aria-label="Resources Section">
                <div class="container-fluid">
                    <div class="container">
                        <div class="text-center mt-4">
                            <p class="section-stamps">Resources</p>
                            <p class="section-head">Smart Accounting, Smart Tools</p>
                            <p class="section-para">We work with leading accounting platforms ensuring seamless financial management tailored to your business.</p>    
                        </div>
                    </div>
                    <!--Marquee Section-->
                    <div class="marquee w-100">
                        <ul class="marquee-content">
                            <li class="ms-5"><img src="images/quickbooks-logo.png" class="resources-imgs" alt="Quickbooks Logo"></li>
                            <li class="ms-5"><img src="images/xero-logo.png" class="resources-imgs" alt="Xero Logo"></li>
                            <li class="ms-5"><img src="images/sage-logo.png" class="resources-imgs" alt="Sage Logo"></li>
                            <li class="ms-5"><img src="images/freeagent-logo.png" class="resources-imgs" alt="Freeagent Logo"></li>
                            <li class="ms-5"><img src="images/icaew-logo.png" class="resources-imgs" alt="Icaew Logo"></li>
                            <li class="ms-5"><img src="images/clickentry-logo.png" class="resources-imgs" alt="Clickentry Logo"></li>
                            <li class="ms-5"><img src="images/MS-DynamicsLogo.png" class="resources-imgs" alt="MS-Dynamics Logo"></li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Blog Section -->
            <section class="section-container bg-color" id="Blog" aria-label="Blog Section">
                <div class="container-fluid  mb-5 mb-lg-0">
                    <div class="container ">
                        <div class="text-center mt-4">
                            <h6 class="section-stamps">Blog</h6>
                            <h2 class="section-head">Our Latest Blog Articles</h2>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 col-lg-4" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="800" >
                                <div class="d-flex flex-column mt-5 mt-lg-0 blog-card">
                                    <img src="images/blog-1.png" class="blog-card-img" alt="Blog Image 1">
                                    <div class="p-3">
                                    <p class="blog-title">The Role of Chartered Accountants in driving Business Growth</p>
                                        <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                                            <div class="d-flex flex-row">
                                                <img src="images/calendar.png" class="blog-calendar-icon" alt="Blog Calender Icon">
                                                <p class="blog-date">Jan 27, 2025</p>
                                            </div>
                                            <div class="d-flex">
                                                <a href="#" class="text-decoration-none blog-redirect">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="1000">
                                <div class="d-flex flex-column mt-5 mt-lg-0 blog-card">
                                    <img src="images/blog-2.png" class="blog-card-img" alt="Blog Image 2">
                                    <div class="p-3">
                                        <p class="blog-title">Why Outsourcing Your Accounting Needs is Essential for Driving Business Growth</p>
                                            <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                                                <div class="d-flex flex-row">
                                                    <img src="images/calendar.png" class="blog-calendar-icon" alt="Blog Calender Icon">
                                                    <p class="blog-date">Jan 27, 2025</p>
                                                </div>
                                            <div class="d-flex">
                                                <a href="#" class="text-decoration-none blog-redirect">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="1200">
                                <div class="d-flex flex-column mt-5 mt-lg-0 blog-card">
                                    <img src="images/blog-1.png" class="blog-card-img" alt="Blog Image 3">
                                    <div class="p-3">
                                        <p class="blog-title">Expert Tax Planning Tips for Expats and NRIs and more</p>
                                            <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                                                <div class="d-flex flex-row">
                                                    <img src="images/calendar.png" class="blog-calendar-icon" alt="Blog Calender Icon">
                                                    <p class="blog-date">Jan 27, 2025</p>
                                                </div>
                                            <div class="d-flex">
                                                <a href="#" class="text-decoration-none blog-redirect">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Section -->
             <section class="section-container contact-bg" id="Contact" aria-label="Contact Section">
                <div class="container-fluid">
                    <div class="overlay-bg"></div>
                    <div class="container">
                        <div class="text-center mt-4">
                            <p class="section-head text-white">We are here for you contact us <span class="contact-highlight text-white">Anytime</span></p>
                            <p class="section-para text-white">Have any questions about our services or just want to talk with us? Please reach out.</p>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 col-lg-4 mt-5 mt-lg-0" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="700">
                                <div class="d-flex flex-column justify-content-center align-items-center p-3 contact-card">
                                     <svg fill="#0E456D" width="64px" height="64px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg" stroke="#0E456D"><path d="M0 1694.235h1920V226H0v1468.235ZM112.941 376.664V338.94H1807.06v37.723L960 1111.233l-847.059-734.57ZM1807.06 526.198v950.513l-351.134-438.89-88.32 70.475 378.353 472.998H174.042l378.353-472.998-88.32-70.475-351.134 438.89V526.198L960 1260.768l847.059-734.57Z" fill-rule="evenodd"/></svg>
                                    <a href="mailto:sales@consultax.co.uk" class="text-decoration-none contact-link">sales@consultax.co.uk</a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mt-5 mt-lg-0" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="700">
                                <div class="d-flex flex-column justify-content-center align-items-center p-3 contact-card">
                                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 5.5C3 14.0604 9.93959 21 18.5 21C18.8862 21 19.2691 20.9859 19.6483 20.9581C20.0834 20.9262 20.3009 20.9103 20.499 20.7963C20.663 20.7019 20.8185 20.5345 20.9007 20.364C21 20.1582 21 19.9181 21 19.438V16.6207C21 16.2169 21 16.015 20.9335 15.842C20.8749 15.6891 20.7795 15.553 20.6559 15.4456C20.516 15.324 20.3262 15.255 19.9468 15.117L16.74 13.9509C16.2985 13.7904 16.0777 13.7101 15.8683 13.7237C15.6836 13.7357 15.5059 13.7988 15.3549 13.9058C15.1837 14.0271 15.0629 14.2285 14.8212 14.6314L14 16C11.3501 14.7999 9.2019 12.6489 8 10L9.36863 9.17882C9.77145 8.93713 9.97286 8.81628 10.0942 8.64506C10.2012 8.49408 10.2643 8.31637 10.2763 8.1317C10.2899 7.92227 10.2096 7.70153 10.0491 7.26005L8.88299 4.05321C8.745 3.67376 8.67601 3.48403 8.55442 3.3441C8.44701 3.22049 8.31089 3.12515 8.15802 3.06645C7.98496 3 7.78308 3 7.37932 3H4.56201C4.08188 3 3.84181 3 3.63598 3.09925C3.4655 3.18146 3.29814 3.33701 3.2037 3.50103C3.08968 3.69907 3.07375 3.91662 3.04189 4.35173C3.01413 4.73086 3 5.11378 3 5.5Z" stroke="#0E456D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    <a href="tel:+442030846407" class="text-decoration-none contact-link">(+44) 2030846407</a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mt-5 mt-lg-0" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="700">
                                <div class="d-flex flex-column justify-content-center align-items-center p-3 contact-card">
                                    <svg width="64px" height="64px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#0E456D"><path fill="#0E456D" d="M192 128v704h384V128H192zm-32-64h448a32 32 0 0 1 32 32v768a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V96a32 32 0 0 1 32-32z"></path><path fill="#0E456D" d="M256 256h256v64H256v-64zm0 192h256v64H256v-64zm0 192h256v64H256v-64zm384-128h128v64H640v-64zm0 128h128v64H640v-64zM64 832h896v64H64v-64z"></path><path fill="#0E456D" d="M640 384v448h192V384H640zm-32-64h256a32 32 0 0 1 32 32v512a32 32 0 0 1-32 32H608a32 32 0 0 1-32-32V352a32 32 0 0 1 32-32z"></path></svg>
                                    <a href="https://maps.app.goo.gl/YQVGu7MvkKGMXZW56" class="text-decoration-none contact-link text-center" target="_blank">71 75 Shelton Street, Covent Garden, London WC2H 9JQ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <?php include 'includes/footer.php'; ?>            
        </footer>
        <?php include 'includes/scroll-top.php'; ?>
    
    <!--JavaScript-->
    <?php include 'includes/script.php'; ?>
    <script>
    const words = ["UK Tax Accountant", "Specialist Tax Advisor", "Tax Planning Services"];
    const typedEl = document.querySelector(".typed");
    let wordIndex = 0;
    let charIndex = 0;
    let typing = true;

    function typeWriter() {
    const currentWord = words[wordIndex];

    if (typing) {
        typedEl.textContent = currentWord.slice(0, charIndex + 1);
        charIndex++;

        if (charIndex === currentWord.length) {
        typing = false;
        setTimeout(typeWriter, 1500); // pause at end
        return;
        }
    } else {
        charIndex--;
        typedEl.textContent = currentWord.slice(0, charIndex);

        if (charIndex === 0) {
        typing = true;
        wordIndex = (wordIndex + 1) % words.length;
        }
    }

    setTimeout(typeWriter, 150); // typing speed
    }

    typeWriter();

    </script>

    <script>
        async function loadFeefoReviews() {
    //const response = await fetch("https://api.feefo.com/api-feefo/api/10/reviews/summary/service?origin=www.consultax.co.uk&merchant_identifier=consultax-accountants-limited&since_period=YEAR");
    const response = await fetch("feefo-proxy.php");
    const data = await response.json();

    let html = "";
    data.reviews.forEach(r => {
        console.log(r);
        let customerName = 'Anonymous';
        let rating = 0;
        let title = '';
        let location = '';
        let review = '';          
        if(r.customer)
        {
            customerName = r.customer.display_name;
        }
        if(r.customer){
            location = r.customer.display_location;
        }
        if(r.service.rating)
        {
            rating = r.service.rating.rating;
        }
        if(r.service.review)
        {
            review = r.service.review;
        }
        if(r.service.title){
            title = r.service.title;
        }
        html += `
        <div class="d-flex flex-column justify-content-between mb-5 review-card-bg shadow">
            <!-- Review Ratings-->
            <div class="d-flex flex-row justify-content-between align-items-center ratings-pack">
                <img src="images/review-star.png" class="review-star" alt="Review Rating Star">
                <img src="images/review-star.png" class="review-star" alt="Review Rating Star">
                <img src="images/review-star.png" class="review-star" alt="Review Rating Star">
                <img src="images/review-star.png" class="review-star" alt="Review Rating Star">
                <img src="images/review-star.png" class="review-star" alt="Review Rating Star">
                <span class="fw-semibold display-6 ms-3">${rating}</span>
            </div>
            <!-- Review Heading-->
                <div class="d-flex">
                <p class="review-head"><span>${title}</span></p>
                </div>
                <p class="review-para">
                <span>${review}</span>
            </p>
            <a href="https://www.feefo.com/en-GB/reviews/consultax-accountants-limited" class="read-review">Read All Reviews <svg class="redirect-arrow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M5.63605 18.364L18.364 5.63603M18.364 5.63603L8.46446 5.63604M18.364 5.63603V15.5355" 
          stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg></a>
            <div class="d-none d-md-flex flex-row justify-content-center align-items-center mt-5">
                <div class="w-50 d-flex flex-row align-items-center">
                <img src="images/review-avatar.png" class="review-avatar" alt="Customer Image">
                    <p class="mb-0 cmt-author">${customerName}</p>
                </div>
                <div class="d-flex flex-row w-50">
                    <div class="w-50 d-flex flex-row">
                        <svg fill="#d9d9d9" width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.114-0.011c-6.559 0-12.114 5.587-12.114 12.204 0 6.93 6.439 14.017 10.77 18.998 0.017 0.020 0.717 0.797 1.579 0.797h0.076c0.863 0 1.558-0.777 1.575-0.797 4.064-4.672 10-12.377 10-18.998 0-6.618-4.333-12.204-11.886-12.204zM16.515 29.849c-0.035 0.035-0.086 0.074-0.131 0.107-0.046-0.032-0.096-0.072-0.133-0.107l-0.523-0.602c-4.106-4.71-9.729-11.161-9.729-17.055 0-5.532 4.632-10.205 10.114-10.205 6.829 0 9.886 5.125 9.886 10.205 0 4.474-3.192 10.416-9.485 17.657zM16.035 6.044c-3.313 0-6 2.686-6 6s2.687 6 6 6 6-2.687 6-6-2.686-6-6-6zM16.035 16.044c-2.206 0-4.046-1.838-4.046-4.044s1.794-4 4-4c2.207 0 4 1.794 4 4 0.001 2.206-1.747 4.044-3.954 4.044z"></path> </g></svg>
                        <p class="mb-0 author-location">${location}</p>
                    </div>
                    <div class="w-50 d-flex flex-row justify-content-end">
                        <p class="mb-0 cmt-date">${new Date(r.last_updated_date).toLocaleDateString()}</p>
                    </div>
                </div>
            </div>
            <div class="d-flex d-md-none flex-column mt-5">
                <div class="w-100 d-flex flex-row justify-content-center align-items-center">
                <img src="images/review-avatar.png" class="review-avatar" alt="Customer Image">
                    <p class="mb-0 cmt-author">${customerName}</p>
                </div>
                <div class="d-flex flex-row w-100 mt-4">
                    <div class="w-100 d-flex flex-row justify-content-between">
                        <svg fill="#d9d9d9" width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.114-0.011c-6.559 0-12.114 5.587-12.114 12.204 0 6.93 6.439 14.017 10.77 18.998 0.017 0.020 0.717 0.797 1.579 0.797h0.076c0.863 0 1.558-0.777 1.575-0.797 4.064-4.672 10-12.377 10-18.998 0-6.618-4.333-12.204-11.886-12.204zM16.515 29.849c-0.035 0.035-0.086 0.074-0.131 0.107-0.046-0.032-0.096-0.072-0.133-0.107l-0.523-0.602c-4.106-4.71-9.729-11.161-9.729-17.055 0-5.532 4.632-10.205 10.114-10.205 6.829 0 9.886 5.125 9.886 10.205 0 4.474-3.192 10.416-9.485 17.657zM16.035 6.044c-3.313 0-6 2.686-6 6s2.687 6 6 6 6-2.687 6-6-2.686-6-6-6zM16.035 16.044c-2.206 0-4.046-1.838-4.046-4.044s1.794-4 4-4c2.207 0 4 1.794 4 4 0.001 2.206-1.747 4.044-3.954 4.044z"></path> </g></svg>
                        <p class="mb-0 author-location">${location}</p>
                    </div>
                    <div class="w-100 d-flex flex-row justify-content-end">
                        <p class="mb-0 cmt-date">${new Date(r.last_updated_date).toLocaleDateString()}</p>
                    </div>
                </div>
            </div>
        </div>
        `


        ;
    });

    document.getElementById("reviews").innerHTML = html + html;
    }

    loadFeefoReviews();
    </script>
</body>
</html>