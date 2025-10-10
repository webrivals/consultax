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
                        <h1 class="blog-title my-3"><?php echo $currentBlog['title']; ?></h1>
                        <img src="<?php echo $currentBlog['image']; ?>" 
                             alt="<?php echo htmlspecialchars($currentBlog['title']); ?>" 
                             class="img-fluid mb-3">
                        <div class="d-flex flex-row justify-content-between w-100 mb-4">
                            <div class="d-flex flex-row align-items-center">
                                <p class="mb-0 fw-semibold"><?php echo $currentBlog['author']; ?></p>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <p class="mb-0"><?php echo $currentBlog['date_posted']; ?></p>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <p class="mb-0"><?php echo $currentBlog['comments_count']; ?></p>
                            </div>
                        </div>

                        <div class="mt-3 blog-detail-text-div">
                            <?php echo $currentBlog['content']; ?>
                        </div>

                        <div class="d-flex flex-row justify-content-between mt-4 mb-4">
                            <div class="d-flex flex-row">
                                <p class="fw-semibold me-2">Category:</p>
                                <p class="mb-0"><?php echo $currentBlog['blog_category']; ?></p>
                            </div>
                            <div class="d-flex flex-row">
                                <p class="fw-semibold me-2">Tags:</p>
                                <p class="mb-0"><?php echo $currentBlog['blog_tags']; ?></p>
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
                            <a type="submit" href="#" class="mt-3 btn btn-lg bg-theme-primary text-white">Post Comment</a>
                        </form>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-sm-12 col-md-4">
                    <div class="blog-side-bar p-2 border rounded">
                        <h3 class="txt-theme-primary">Search</h3>
                        <form>
                            <div class="mb-3 d-flex flex-row rounded p-3" style="background-color: #F9F9F9;">
                                <input type="email" class="form-control border-0" placeholder="Search Here"/>
                                <a href="#" type="submit" class="btn text-white"><svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19.9604 11.4802C19.9604 13.8094 19.0227 15.9176 17.5019 17.4512C16.9332 18.0247 16.2834 18.5173 15.5716 18.9102C14.3594 19.5793 12.9658 19.9604 11.4802 19.9604C6.79672 19.9604 3 16.1637 3 11.4802C3 6.79672 6.79672 3 11.4802 3C16.1637 3 19.9604 6.79672 19.9604 11.4802Z" stroke="#0E456D" stroke-width="2"></path> <path d="M18.1553 18.1553L21.8871 21.8871" stroke="#0E456D" stroke-width="2" stroke-linecap="round"></path> </g></svg></a>
                            </div>
                        </form>
                        <div class="rounded p-3 mt-5" style="background-color: #F9F9F9;">
                            <h3 class="txt-theme-primary">Services</h3>
                            <ul>
                                <li><a href="bookkeeping.php" class="blog-side-links">BookKeeping</a></li>
                                <li><a href="company-formation.php" class="blog-side-links">Company Formation</a></li>
                                <li><a href="payroll-services.php" class="blog-side-links">Payroll Services</a></li>
                                <li><a href="personal-tax.php" class="blog-side-links">Personal Tax</a></li>
                                <li><a href="vat.php" class="blog-side-links">VAT Return</a></li>
                                <li><a href="tax-planning.php" class="blog-side-links">Tax Planning</a></li>
                                <li><a href="management-accounts.php" class="blog-side-links">Management Account's</a></li>
                                <li><a href="expat-tax.php" class="blog-side-links">Expat Tax</a></li>
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
