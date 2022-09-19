<?php 
    require 'function.php';

    $id = $_GET['id'];

    $user = query('SELECT * FROM users WHERE id =' . $id)[0];

    if (isset($_POST['submit'])) {
        if(update($_POST) > 0){
            echo "<script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'index.php';
                </script>";
        }else{
            echo "<script>
                    alert('Data Gagal Diubah');
                    document.location.href = 'index.php';
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <?php include "../../components/sidebar.php" ?>
        <div id="main">
            <?php include "../../components/navbar.php" ?>
            <div class="main-content container-fluid">
                <div class="container pt-5">
                    <div class="container-title d-flex ">
                        <h3 class="flex-grow-1">Data User</h3>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Update User</h5>
                                <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">User Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="User Name" value="<?= $user['name'] ?>">
                                    </div>

                                    <div class="mb-3 d-flex flex-column">
                                        <label for="role" class="form-label">Role</label>
                                        <select name="role" id="role">
                                            <option selected><?= $user['role'] ?></option>
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email" value="<?= $user['email'] ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Password</label>
                                        <input type="text" class="form-control" id="password" name="password"
                                            placeholder="Password" value="<?= $user['password'] ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="number" class="form-label">No Telepon</label>
                                        <input type="no_telepon" class="form-control" id="no_telepon" name="no_telepon"
                                            placeholder="No Telepon" value="<?= $user['no_telepon'] ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea class="form-control" placeholder="Alamat" id="alamat"
                                            style="height: 100px" name="alamat" value="<?= $user['alamat'] ?>"><?= $user['alamat'] ?></textarea>
                                    </div>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-primary" name="submit">Update
                                            User</button>
                                        <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>"
                                            class="btn btn-danger ml-3">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/feather-icons/feather.min.js"></script>
    <script src="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/app.js"></script>

    <script src="../../assets/vendors/chartjs/Chart.min.js"></script>
    <script src="../../assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="../../assets/js/pages/dashboard.js"></script>

    <script src="../../assets/js/main.js"></script>
</body>

</html>