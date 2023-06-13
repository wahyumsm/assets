<?php
session_start();
if (!isset($_SESSION['Login'])) {

    echo "<script>alert('Silahkan login terlebih dahulu'); window.location.href = 'login.php';</script>";
}

include 'config/function.php';

$dataLotto = getAllDataLotto();

// get all kategori
$kategori = getAllKategori();


// tambah data lotto ke database
if (isset($_POST['submit'])) {

    tambahDataLotto();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Slot Greend Land</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
 <link rel="shortcut icon" href="http://canadalottery.net/img/fav.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Custom fonts for this template-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">

    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script>
        // Select input field
        var input = document.getElementById("myInput");

        // Add event listener for input
        input.addEventListener("input", function() {
            // Declare variables
            var filter, table, tr, td, i, txtValue;
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those that do not match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td");
                var shouldDisplay = false;

                // Loop through all table cells in current row
                for (var j = 0; j < td.length; j++) {
                    var cell = td[j];
                    if (cell) {
                        txtValue = cell.textContent || cell.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            shouldDisplay = true;
                            break;
                        }
                    }
                }

                // Set display style based on whether the row should be visible or not
                tr[i].style.display = shouldDisplay ? "" : "none";
            }
        });
    </script>


    <style>
        .container {
            margin: 20px;
        }

        .button {
            background-color: teal;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 5px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .submit-button {
            background-color: teal;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: darkcyan;
        }


        .form-group {
            margin-bottom: 1rem;

        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 14px;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
        }

        .pagination a.active {
            background-color: dodgerblue;
            color: white;
            border: 1px solid dodgerblue;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }

        @media screen and (max-width: 600px) {
            table {
                font-size: 12px;
            }
        }
    </style>

</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="halamanutama.php">

                <div class="sidebar-brand-text mx-3">Aplikasi Greend Land Lottery </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="halamanutama.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="datalotto.php">Data Lotto</a>
                        <a class="collapse-item" href="kategorilotto.php">Kategori Lotto</a>
                    </div>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pengaturan Website</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Greend Land Lottery</span>
                                <img class="img-profile rounded-circle" src="img/bingo.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <div class="w3-container">
                    <button style="border-radius: 100px;" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-teal">Tambah
                        Data</button>
                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content w3-animate-top w3-card-4">
                            <header class="w3-container w3-teal">
                                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                <h2>Form Tambah Data</h2>
                            </header>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    
                                    <table class="table table-striped bordered">
                                        <tbody>
                                            <tr>
    <td>Kategori Lotte:</td>
    <td>
        <div class="form-group">
            <select style="background-color: white;" id="lotte-kategori" required name="lotte-kategori">
                <option value="">Pilihlah kategori dari halaman kategori yang telah ditambahkan</option>
                <?php foreach ($kategori as $row) : ?>
                    <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </td>
</tr>
                                            <tr>
                                                <td>Draw Nomor</td>
                                                <td><input placeholder="Masukkan Nomor Yang Benar Jangan Salah" type="text" class="form-control" id="drawno" name="drawno" placeholder="Masukan Nomor Lengkap" required=""></td>
                                            </tr>
                                            <tr>
                                                <td>Angka 1</td>
                                                <td><input placeholder="Masukkan Nomor Yang Benar Jangan Salah" type="number" class="form-control" id="  angka1" name="  angka1" required></td>
                                            </tr>
                                            <tr>
                                                <td>Angka 2</td>
                                                <td><input placeholder="Masukkan Nomor Yang Benar Jangan Salah" type="number" class="form-control" id="  angka2" name="  angka2" required></td>
                                            </tr>
                                            <tr>
                                                <td>Angka 3</td>
                                                <td><input placeholder="Masukkan Nomor Yang Benar Jangan Salah" type="number" class="form-control" id="  angka3" name="  angka3" required></td>
                                            </tr>
                                            <tr>
                                                <td>Angka 4</td>
                                                <td><input placeholder="Masukkan Nomor Yang Benar Jangan Salah" type="number" class="form-control" id="  angka4" name="  angka4" required></td>
                                            </tr>
                                            <tr>
                                                <td>Angka 5</td>
                                                <td><input placeholder="Masukkan Nomor Yang Benar Jangan Salah" type="number" class="form-control" id="  angka5" name="  angka5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Update</td>
                                                <td><input type="date" class="form-control" id="  tanggalupdate" name=" tanggalupdate" required></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="modal-footer">
                                    <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
                                        Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- LIST TABEL -->
                <div class="container p-3 bg-light">

                    <h2>Data Lotto</h2>

                    <table id="dataTable" class="table table-striped table-bordered " style="width:100%">

                        <thead>
                            <tr>

                                <th>No</th>
                                <th>Kategori</th>
                                <th>Drawno</th>
                                <th>Angka1</th>
                                <th>angka2</th>
                                <th>angka3</th>
                                <th>angka4</th>
                                <th>angka5</th>
                                <th>tanggalUpdate</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($dataLotto as $row) :
                            ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $row['kategori'] ?></td>
                                    <td><?= $row['drawno'] ?></td>
                                    <td><?= $row['angka1'] ?></td>
                                    <td><?= $row['angka2'] ?></td>
                                    <td><?= $row['angka3'] ?></td>
                                    <td><?= $row['angka4'] ?></td>
                                    <td><?= $row['angka5'] ?></td>
                                    <td><?= $row['tanggalupdate'] ?></td>
                                    <td>
                                        <a href="hapusdata.php?idlotte=<?= $row['idlotte'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                                        <a href="ubah.php?idlotte=<?= $row['idlotte'] ?>" class="btn btn-warning btn-sm">Ubah Data</a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach ?>

                            <!-- Tambahkan baris lainnya sesuai dengan data yang Anda miliki -->
                        </tbody>
                        <script>
                            $(document).ready(function() {
                                $('#example').DataTable();
                            });
                        </script>
                    </table>

                </div>

                <!-- /.container-fluid -->
            </div>



            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>2023 - Sistem Greendland Lottery Berbasis Web | BY Greenland Lottery</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer

        </div>
        <!-- End of Content Wrapper -->
        </div>

        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>


</body>

</html>