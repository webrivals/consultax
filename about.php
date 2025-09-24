<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Values</title>
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"/>
    <!-- Font -->
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,300,400,500,700,900&display=swap" rel="stylesheet">
</head>
<body>
<!-- Header -->
    <header>
        <!-- Navbar -->
        <navbar>
            <?php include 'includes/navbar.php'; ?>            
        </navbar>
    </header>
    <!-- Main Section -->
    <main>
        <?php include 'includes/breadcrumbs.php'; ?>
        <div class="container-fluid">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-head">
                            Experienced Accountants with a Commitment to Timeless Work Ethic
                        </h1>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-md-5">
                        <img src="images/about-page-img.jpg" class="img-fluid img-bdr"/>
                    </div>
                    <div class="col-12 col-md-7 my-auto">
                        <p class="mt-4 mt-md-0  section-para">We're a modern, tax-savvy firm based in London and the Midlands, supporting local businesses and
                            individuals with smart, all-around financial services. Our goal is simple: to make managing money
                            easier, save you time, and help you keep more of what you earn. With smart technology at our core,
                            we deliver trusted tools and clear insights to strengthen your financial future.
                        </p>
                    </div>
                </div>
                <div class="row flex-row-reverse d-flex flex-row justify-content-between mt-5">
                    <h2 class="section-head">About CEO, <span class="fw-semibold txt-theme-secondary">Mr. Varun Gupta</span></h2>
                    <div class="col-12 col-md-5">
                        <img src="images/CEO.jpg" class="img-fluid img-bdr"/>
                    </div>
                    <div class="col-12 col-md-6 my-auto">
                        <p class="mt-4 mt-md-0 section-para">Founder and director graduated from University of Warwick with a First Class in BSc (Hons) in
                                                Accounting &amp; Finance and undertook his professional training contract with
                                                PriceWaterhouseCoopers, leading “Big Four” company. As friends and family were keen to utilise his
                                                experience in their business, with particular emphasis on strategic development, he decided to take
                                                the plunge which opened the doors for consultax and there has been no looking back. He spent
                                                considerable time working on leading FTSE 100 clients in Telecommunications, Healthcare, Real
                                                Estate, Oil E&amp;P blended with growing Entrepreneurial clients where he gained broad experience
                                                across the different industries.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About us page skills and expertize section -->
        <div class="container-fluid p-md-5 mt-5 py-5" style="background:#f1f1f1;">
            <div class="container">
                <h2 class="section-head"> For our Skills and Expertise, Clients Choose Us based on following </h2>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="abt-sec-card" id="abt-card-1">
                            <p class="abt-card-head" style="color:#ffffff;">Proven Expertise</p>
                            <p class="abt-card-desc" style="color:#ffffff;">Our team of professional Chartered Accountants brings years of experience, industry knowledge, and a commitment to excellence, ensuring your business is in skilled hands.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-5 mt-md-0">
                        <div class="abt-sec-card">
                            <p class="abt-card-head">Transparent Communication</p>
                            <p class="abt-card-desc">We prioritise clear, consistent, and transparent communication, giving you full confidence in every financial decision and strategy we recommend.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-5 mt-md-0">
                        <div class="abt-sec-card">
                            <p class="abt-card-head">Tailored Solutions</p>
                            <p class="abt-card-desc">We understand that each business is unique. Consultax provides customised financial strategies designed specifically to meet your goals and challenges.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mt-md-4">
                    <div class="col-12 col-md-4">
                        <div class="abt-sec-card">
                            <p class="abt-card-head">Compliance Assurance</p>
                            <p class="abt-card-desc">Our professionals stay up-to-date on the latest tax regulations and financial standards, ensuring your business remains compliant and fully protected.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-5 mt-md-0">
                        <div class="abt-sec-card">
                            <p class="abt-card-head">Proactive Support</p>
                            <p class="abt-card-desc">We offer proactive advice beyond routine services, identifying potential risks and opportunities to help your business thrive in an evolving market.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-5 mt-md-0">
                        <div class="abt-sec-card">
                            <p class="abt-card-head">Long-Term Partnership</p>
                            <p class="abt-card-desc">We aim to build lasting relationships with our clients, providing guidance and support through every stage of your business journey.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 section-para" style="color:#000000;">
                        We invite you to contact us to explore your needs in greater detail. A bespoke quotation will be provided, carefully tailored to your specific circumstances.Why pay for a consultant, when you can utilise his experience?
                        Our Philosophy is clear and concise, Our prosperity is deeply rooted to your success and we never lose sight of that! Contact us today for a consultation. Let’s navigate your financial future together!
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'includes/footer.php'; ?>            
    </footer>
    <!-- Scroll to Top Button -->
    <div id="scrollTopBtn" title="Go to top">
        <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M26.9997 53.6666C41.7273 53.6666 53.6663 41.7275 53.6663 26.9999C53.6663 12.2723 41.7273 0.333252 26.9997 0.333252C12.2721 0.333252 0.333008 12.2723 0.333008 26.9999C0.333008 41.7275 12.2721 53.6666 26.9997 53.6666Z" fill="#0E456D"/>
            <path d="M35.5595 21.1066L28.8929 14.4399C28.6449 14.19 28.35 13.9916 28.0251 13.8562C27.7001 13.7208 27.3515 13.6511 26.9995 13.6511C26.6475 13.6511 26.2989 13.7208 25.974 13.8562C25.649 13.9916 25.3541 14.19 25.1062 14.4399L18.4395 21.1066C17.9374 21.6087 17.6553 22.2898 17.6553 22.9999C17.6553 23.7101 17.9374 24.3911 18.4395 24.8933C18.9417 25.3954 19.6227 25.6775 20.3329 25.6775C21.043 25.6775 21.724 25.3954 22.2262 24.8933L24.3329 22.7599V37.6666C24.3329 38.3738 24.6138 39.0521 25.1139 39.5522C25.614 40.0523 26.2923 40.3333 26.9995 40.3333C27.7068 40.3333 28.385 40.0523 28.8851 39.5522C29.3852 39.0521 29.6662 38.3738 29.6662 37.6666V22.7599L31.7729 24.8933C32.0208 25.1432 32.3157 25.3416 32.6406 25.477C32.9656 25.6123 33.3142 25.682 33.6662 25.682C34.0182 25.682 34.3668 25.6123 34.6917 25.477C35.0167 25.3416 35.3116 25.1432 35.5595 24.8933C35.8095 24.6454 36.0078 24.3504 36.1432 24.0255C36.2786 23.7005 36.3483 23.352 36.3483 22.9999C36.3483 22.6479 36.2786 22.2993 36.1432 21.9744C36.0078 21.6494 35.8095 21.3545 35.5595 21.1066Z" fill="white"/>
        </svg>
    </div>
    <!-- WhatsApp Chat Icon -->
    <a href="https://wa.me/442030846407" target="_blank" id="whatsappBtn" title="Chat with us">
        <img src="images/wa-icon.svg" alt="WhatsApp Chat" class="whatsapp-icon"/>
    </a>
<!--JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
<script src="js/breadcrumb.js"></script>
<script src="js/scroll-top.js"></script>
</body>
</html>