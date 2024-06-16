<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $page_title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Dark mode -->
    <script src="<?php echo BASE_URL; ?>script.js"></script>
  
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fed40285ab.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/favicon.png">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

  <!-- Plugins CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/vendor/font-awesome/css/all.min.css">

<!-- <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/vendor/tiny-slider/tiny-slider.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
</head>
<body>
  <!-- MAIN CONTENT START -->
  <!-- Nav START -->
    <?php include 'includes/nav.php'; ?>
    <div class="container">
        <!-- Include the breadcrumbs file -->
        <?php include 'includes/breadcrumbs.php'; ?>
        <?php generate_breadcrumbs(); ?>
        <div class="row">
            <div class="col-lg-9 order-1 order-lg-1">
                <!-- Main content -->
                <h1><?php echo $page_heading; ?></h1>
                <?php echo $page_content; ?>
            </div>
            <div class="col-lg-3 order-2 order-lg-2 d-lg-block my-5">
                <?php include 'includes/sidebar.php'; ?>
            </div>
        </div>
    </div>
    <!-- Footer START -->
    <?php include 'includes/footer.php'; ?>

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="<?php echo BASE_URL; ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="<?php echo BASE_URL; ?>assets/vendor/tiny-slider/tiny-slider.js"></script>

    <!-- Template Functions -->
    <script src="<?php echo BASE_URL; ?>assets/js/functions.js"></script>
</body>
</html>
