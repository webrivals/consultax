<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<div class="container-fluid shadow-bottom" style="background:#ffffff !important;">
  <div class="container no-pad-mob">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid no-pad-mob">
        <a class="navbar-brand" href="index.php">
          <img src="images/consultax-logo1.webp" class="navbar-logo" alt="consultax-logo">
        </a>
        <!-- Mobile Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ms-lg-5 me-auto mb-2 mb-lg-0 w-100 justify-content-between">
            <!-- Home -->
            <li class="nav-item-navbar">
              <a class="nav-link-navbar <?= $current_page == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
            </li>
            <!-- Services Dropdown -->
            <?php
            $services_pages = [
              'self-assessment-tax-returns.php',
              'bookkeeping.php',
              'company-formation.php',
              'payroll-services.php',
              'personal-tax.php',
              'vat.php',
              'tax-planning.php',
              'management-accounts.php',
              'dubai-tax-accountant.php',
              'expat-tax.php'
            ];
            $is_service_active = in_array($current_page, $services_pages);
            ?>
            <li class="nav-item dropdown">
              <a class="nav-item nav-link-navbar dropdown-toggle <?= $is_service_active ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu">
                <?php foreach ($services_pages as $page): ?>
                  <?php
                  $label = ucwords(str_replace(['-', '.php'], [' ', ''], basename($page, '.php')));
                  // Make "VAT" fully uppercase
                    if ($page === 'vat.php') {
                    $label = strtoupper($label);
                  }
                  $active_class = ($current_page == $page) ? 'active' : '';
                  ?>
                  <li><a class="dropdown-item nav-link-navbar <?= $active_class ?>" href="<?= $page ?>"><?= $label ?></a></li>
                <?php endforeach; ?>
              </ul>
            </li>
            <!-- Who We Serve Dropdown -->
            <?php
            $serve_pages = ['ecommerce.php', 'landlords.php', 'sole-traders.php', 'limited-companies.php'];
            $is_serve_active = in_array($current_page, $serve_pages);
            ?>
            <li class="nav-item dropdown">
              <a class="nav-link-navbar dropdown-toggle <?= $is_serve_active ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Who We Serve
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item nav-link-navbar <?= $current_page == 'ecommerce.php' ? 'active' : '' ?>" href="ecommerce.php">Ecommerce</a></li>
                <li><a class="dropdown-item nav-link-navbar <?= $current_page == 'landlords.php' ? 'active' : '' ?>" href="landlords.php">Landlords</a></li>
                <li><a class="dropdown-item nav-link-navbar <?= $current_page == 'sole-traders.php' ? 'active' : '' ?>" href="sole-traders.php">Sole Traders</a></li>
                <li><a class="dropdown-item nav-link-navbar <?= $current_page == 'limited-companies.php' ? 'active' : '' ?>" href="limited-companies.php">Limited Companies</a></li>
                <li><a class="dropdown-item nav-link-navbar" href="#">Small And Medium Businesses</a></li>
              </ul>
            </li>
            <!-- Pricing -->
            <li class="nav-item">
              <a class="nav-link-navbar <?= $current_page == 'pricing.php' ? 'active' : '' ?>" href="pricing.php">Pricing</a>
            </li>
            <!-- About Dropdown -->
            <?php
            $about_pages = ['about.php', 'bespoke-accounting-approach.php'];
            $is_about_active = in_array($current_page, $about_pages);
            ?>
            <li class="nav-item dropdown">
              <a class="nav-link-navbar dropdown-toggle <?= $is_about_active ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item nav-link-navbar <?= $current_page == 'about.php' ? 'active' : '' ?>" href="about.php">Our Values</a></li>
                <li><a class="dropdown-item nav-link-navbar <?= $current_page == 'bespoke-accounting-approach.php' ? 'active' : '' ?>" href="bespoke-accounting-approach.php">Bespoke Accounting Approach</a></li>
              </ul>
            </li>
            <!-- Referrals -->
            <li class="nav-item">
              <a class="nav-link-navbar <?= $current_page == 'referrals.php' ? 'active' : '' ?>" href="referrals.php">Referrals</a>
            </li>
            <!-- Contact -->
            <li class="nav-item">
              <a class="nav-link-navbar contact-btn rounded p-2 text-white" href="tel:+442030846407" style="color:#ffffff !important;">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
