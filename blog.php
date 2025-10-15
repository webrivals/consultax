<?php 
include 'blog-data.php'; // include your blog array

// Get slug from URL
$slug = $_GET['post'] ?? '';

// Find blog by slug
$currentBlog = null;
foreach ($blogs as $blog) {
    if ($blog['slug'] === $slug) {
        $currentBlog = $blog;
        break;
    }
}

// Blog not found
if (!$currentBlog) {
    http_response_code(404);
    echo "<h2 style='text-align:center;margin-top:50px;'>404 - Blog Not Found</h2>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($currentBlog['title']); ?></title>
    <?php include 'includes/header.php'; ?>
</head>
<body>

<header class="sticky-top">
    <?php include 'includes/navbar.php'; ?>
</header>

<main>
    <?php include 'includes/breadcrumbs.php'; ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <!-- Blog Content -->
                <div class="col-sm-12 col-md-8">
                    <div class="p-4 border rounded blog-open-detail">
                        <h1 class="blog-title-open txt-theme-primary my-3"><?php echo $currentBlog['title']; ?></h1>
                        <img src="<?php echo $currentBlog['image']; ?>" 
                             alt="<?php echo htmlspecialchars($currentBlog['title']); ?>" 
                             class="img-fluid mb-3">
                        <div class="d-flex flex-column flex-md-row justify-content-between w-100 mb-4">
                            <div class="d-flex flex-row align-items-center mt-3 mt-md-0">
                                <p class="mb-0 fw-medium"><svg fill="#1A8FE3" class="blog-icons" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#1A8FE3"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>user</title> <path d="M20.188 21.281c1.469 0.813 2.313 2.188 2.219 3.594-0.094 0.875-0.094 0.906-1.219 1.031-0.719 0.094-5.094 0.156-9.594 0.156-5.094 0-10.406-0.063-10.813-0.156-1.5-0.406-0.688-3.188 1.344-4.469 1.563-1.031 4.75-2.563 5.594-2.75 1.188-0.25 1.344-0.969 0.031-3.313-0.313-0.531-0.688-2.125-0.719-3.813-0.063-2.688 0.5-4.531 2.844-5.406 0.438-0.156 0.938-0.25 1.406-0.25 1.563 0 3.031 0.875 3.625 2.156 0.844 1.719 0.5 6.219-0.406 7.844-1 1.875-0.906 2.438 0.25 2.75 0.75 0.188 3.094 1.344 5.438 2.625z"></path> </g></svg>
                                <?php echo $currentBlog['author']; ?></p>
                            </div>
                            <div class="d-flex flex-row align-items-center mt-3 mt-md-0">
                                <p class="mb-0 fw-medium"><svg fill="#1A8FE3" class="blog-icons" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M6,22H18a3,3,0,0,0,3-3V7a2,2,0,0,0-2-2H17V3a1,1,0,0,0-2,0V5H9V3A1,1,0,0,0,7,3V5H5A2,2,0,0,0,3,7V19A3,3,0,0,0,6,22ZM5,12.5a.5.5,0,0,1,.5-.5h13a.5.5,0,0,1,.5.5V19a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1Z"></path></g></svg>
                                <?php echo $currentBlog['date_posted']; ?></p>
                            </div>
                            <div class="d-flex flex-row align-items-center mt-3 mt-md-0">
                                <p class="mb-0 fw-medium"><svg class="blog-icons" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16 1H4V11H8L10 13L12 11H16V1Z" fill="#1A8FE3"></path> <path d="M2 5V13H7.17157L8.70711 14.5355L7.29289 15.9497L6.34315 15H0V5H2Z" fill="#1A8FE3"></path> </g></svg>
                                <?php echo $currentBlog['comments_count']; ?></p>
                            </div>
                        </div>
                        <div class="mt-5 blog-detail-text-div">
                            <?php echo $currentBlog['content']; ?>
                        </div>
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-cemter mt-5 mb-4">
                            <div class="d-flex flex-row align-items-center">
                                <p class="mb-0 fw-semibold">Category:</p>
                                <p class="mb-0 blog-category-stamp"><?php echo $currentBlog['blog_category']; ?></p>
                            </div>
                            <div class="d-flex flex-row mt-4 mt-md-0">
                                <p class="mb-0 fw-semibold me-2">Tags:</p>
                                <p class="mb-0 txt-theme-primary"><?php echo $currentBlog['blog_tags']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Comment Section-->
                    <div class="mt-4 border rounded p-4 comments-section">
                        <h3>Leave Comment</h3>
                        <form class="mt-4">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <input type="text" id="BlogCmtName" class="form-control form-control-lg form-bg" placeholder="Your Name">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <input type="text" id="BlogCmtEmail" class="form-control form-control-lg form-bg" placeholder="Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <input type="text" id="BlogCmtPhone" class="form-control form-control-lg form-bg" placeholder="Phone">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <input type="text" id="BlogCmtWebiste" class="form-control form-control-lg form-bg" placeholder="Your Website">
                                </div>
                            </div>                     
                            <div class="row">
                                <div class="col-12">
                                    <textarea class="form-control form-control-lg form-bg" rows="8" placeholder="Your Comment..."></textarea>
                                </div>
                            </div>
                            <a type="submit" href="#" class="mt-3 btn btn-lg text-white blog-cmt-post-btn">Post Comment</a>
                        </form>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-sm-12 col-md-4">
                    <div class="blog-side-bar p-2 mt-4 mt-md-0">
                        <form>
                            <div class="mb-3 rounded p-3" style="background-color: #F9F9F9;">
                                <h3 class="text-dark">Search</h3>
                                <div class="d-flex flex-row">
                                    <input type="email" class="form-control border-0" placeholder="Search here..."/>
                                    <a href="#" type="submit" class="btn text-white"><svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19.9604 11.4802C19.9604 13.8094 19.0227 15.9176 17.5019 17.4512C16.9332 18.0247 16.2834 18.5173 15.5716 18.9102C14.3594 19.5793 12.9658 19.9604 11.4802 19.9604C6.79672 19.9604 3 16.1637 3 11.4802C3 6.79672 6.79672 3 11.4802 3C16.1637 3 19.9604 6.79672 19.9604 11.4802Z" stroke="#0E456D" stroke-width="2"></path> <path d="M18.1553 18.1553L21.8871 21.8871" stroke="#0E456D" stroke-width="2" stroke-linecap="round"></path> </g></svg></a>
                                </div>
                            </div>
                        </form>
                        <div class="rounded p-3 mt-5" style="background-color: #F9F9F9;">
                            <h3 class="text-dark">Services</h3>
                            <ul>
                                <li class="blog-links-li" style="margin-top:10px;"><a href="bookkeeping.php" class="blog-side-links">BookKeeping</a></li>
                                <li class="blog-links-li"><a href="company-formation.php" class="blog-side-links">Company Formation</a></li>
                                <li class="blog-links-li"><a href="payroll-services.php" class="blog-side-links">Payroll Services</a></li>
                                <li class="blog-links-li"><a href="personal-tax.php" class="blog-side-links">Personal Tax</a></li>
                                <li class="blog-links-li"><a href="vat.php" class="blog-side-links">VAT Return</a></li>
                                <li class="blog-links-li"><a href="tax-planning.php" class="blog-side-links">Tax Planning</a></li>
                                <li class="blog-links-li"><a href="management-accounts.php" class="blog-side-links">Management Account's</a></li>
                                <li class="blog-links-li"><a href="expat-tax.php" class="blog-side-links">Expat Tax</a></li>
                            </ul>
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

<?php include 'includes/script.php'; ?>
</body>
</html>
