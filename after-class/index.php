<?php 
    require 'function.php';

    $visitors = query("SELECT * FROM tamu");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>

    <style>
        .icons {
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            background-color: #6777ef;
            color: #fff;
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <?php include "partials/navbar.php" ?>
            <div class="main-sidebar sidebar-style-2">
                <?php include "partials/aside.php" ?>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body text-center">
                                    <div class="icons">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="card-title" style="margin-top: 0.8rem;">Visitors</h5>
                                    <p class="card-text">Current number of visitors : <?= count($visitors) ?> People</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="assets/modules/jquery.min.js"></script>
    <script src="assets/modules/popper.js"></script>
    <script src="assets/modules/tooltip.js"></script>
    <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/modules/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="assets/modules/jquery.sparkline.min.js"></script>
    <script src="assets/modules/chart.min.js"></script>
    <script src="assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="assets/modules/summernote/summernote-bs4.js"></script>
    <script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <!-- <script src="assets/js/page/index.js"></script> -->

    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>