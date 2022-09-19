<?php 
    require 'function.php';

    if (isset($_POST['submit'])) {
        if(store($_POST) > 0){
            echo "<script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'index-tamu.php';
                </script>";
        }else{
            echo "<script>
                    alert('Data Gagal Ditambahkan');
                    document.location.href = 'index-tamu.php';
                </script>";
        }
    }
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
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Add Visitors</h5>
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Visitor Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Visitor Name">
                                </div>
                                <div class="mb-3">
                                    <label for="instansi" class="form-label">Instansi</label>
                                    <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Instansi">
                                </div>
                                <div class="mb-3">
                                    <label for="keperluan" class="form-label">Keperluan</label>
                                    <input type="text" class="form-control" id="keperluan" name="keperluan" placeholder="Keperluan">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" placeholder="Alamat" id="alamat" style="height: 100px" name="alamat"></textarea>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-primary" name="submit">Create Visitor</button>
                                    <a href="index-tamu.php" class="btn btn-danger ml-3">Back</a>
                                </div>
                            </form>
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