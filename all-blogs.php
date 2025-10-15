<?php 
include 'blog-data.php'; // include your blog array

$blogsPerPage = 3; // number of blogs per page
$totalBlogs = count($blogs);
$totalPages = ceil($totalBlogs / $blogsPerPage);

// get current page
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$currentPage = max(1, min($totalPages, $currentPage));

// calculate offset
$start = ($currentPage - 1) * $blogsPerPage;

// slice array for this page
$blogsToShow = array_slice($blogs, $start, $blogsPerPage);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Blogs</title>
    <?php include 'includes/header.php'; ?>
</head>
<body>

<header class="sticky-top">
    <?php include 'includes/navbar.php'; ?>
</header>

<main>
    <?php include 'includes/breadcrumbs.php'; ?>

    <div class="container my-5">
        <div class="row">
            <?php foreach ($blogsToShow as $blog): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 blog-card border-0 shadow-sm">
                        <img src="<?php echo $blog['image']; ?>" class="img-fluid card-img-top" alt="<?php echo htmlspecialchars($blog['title']); ?>">
                        <div class="card-body">
                            <h5 class="card-title txt-theme-primary"><?php echo htmlspecialchars($blog['title']); ?></h5>
                            <p class="text-muted mb-2">
                                <small>By <?php echo htmlspecialchars($blog['author']); ?> | <?php echo htmlspecialchars($blog['date_posted']); ?></small>
                            </p>
                            <p class="card-text"><?php echo htmlspecialchars($blog['excerpt']); ?></p>
                            <a href="blog.php?post=<?php echo urlencode($blog['slug']); ?>" class="btn btn-theme bg-theme-primary text-white">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <nav aria-label="Blog pagination">
            <ul class="pagination justify-content-center mt-4">
                <?php if ($currentPage > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">&laquo; Prev</a>
                    </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?php echo $i === $currentPage ? 'active' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>

                <?php if ($currentPage < $totalPages): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Next &raquo;</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</main>

<footer>
    <?php include 'includes/footer.php'; ?>
</footer>

<?php include 'includes/script.php'; ?>
</body>
</html>
