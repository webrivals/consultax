<div class="containe-fluid text-white mt-5" id="breadcrumb-bg">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex flex-column flex-md-row justify-content-center align-items-center p-5">
                <li class="breadcrumb-item">
                    <a href="index.php" class="txt-theme-secondary display-5 fw-medium mb-0">
                        <img src="images/home-icon.svg" class="bcrumb-icon"/> Home
                    </a>
                </li>
                <li class="breadcrumb-item text-white display-6 fw-semibold active text-center" aria-current="page" id="breadcrumb-current">
              
                </li>
            </ol>
        </nav>
    </div>
</div>
<script>
  // Get the page title from the document
  const pageTitle = document.title;
  
  // Set it in the breadcrumb
  document.getElementById('breadcrumb-current').textContent = pageTitle;
</script>