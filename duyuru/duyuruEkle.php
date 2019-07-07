<!DOCTYPE html>
<html lang="tr">
<?php include "head.php";?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "menu.html";?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Duyuru Ekle</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Duyuru</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="duyuruEkleislem.php" method="post">

                                    <div style="padding:3%">
                                    
                                    <div class="form-group">
                                        <label for="exampleInputsinif">Sınıf</label>
                                        <select class=" form-control" name="sinif" placeholder="Sınıf"
                                                id="exampleInputsinif" required>
                                                <?php
                                                $query = $db->query("SELECT * FROM sinif", PDO::FETCH_ASSOC);
                                                if ($query->rowCount()) {
                                                    foreach ($query as $row) {?>

                                                <option value="<?php echo $row["sinif_ad"] ?>">
                                                    <?php echo $row["sinif_ad"] ?> </option>
                                                <?php
                                                    }
                                                }?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputbaslik">Başlık</label>
                                            <input type="text" name="baslik" class="form-control"
                                                id="exampleInputbaslik" placeholder="Duyuru Başlığı" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputicerik">İçerik</label>
                                            <input type="text" name="icerik" class="form-control"
                                                id="exampleInputicerik" placeholder="Duyuru İçeriği" required>
                                        </div>
                                        
                                       

                                        <input type="submit" class="btn btn-primary btn-block" name="ekle"
                                            value="EKLE">

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Konum Algılama Sistemi 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>