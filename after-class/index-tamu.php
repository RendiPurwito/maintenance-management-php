<?php
require 'function.php';

$visitors = query('SELECT * FROM tamu');
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
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Visitors</h5>
                            <a href="create.php" class="btn btn-primary position-absolute" style="top: 1rem;right: 1rem;">Add Visitor</a>
                            <div class="table-responsive">
                                <table class="table mt-4 table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Instansi</th>
                                            <th scope="col">Keperluan</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($visitors as $key => $visitor) : ?>
                                            <tr>
                                                <th scope="row"><?= $i ?></th>
                                                <td><?= $visitor['name'] ?></td>
                                                <td><?= $visitor['instansi'] ?></td>
                                                <td><?= $visitor['keperluan'] ?></td>
                                                <td><?= $visitor['alamat'] ?></td>
                                                <td>
                                                    <a href="update.php?id=<?= $visitor['id'] ?>" class="btn btn-warning">Update</a>
                                                    <a href="delete.php?id=<?= $visitor['id'] ?>" class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</a>
                                                </td>
                                            </tr>
                                            <?php $i++ ?>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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