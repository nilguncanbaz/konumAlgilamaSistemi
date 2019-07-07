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
                    <h1 class="h3 mb-2 text-gray-800">Sınıf Oluştur</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sınıf</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="sinifOlusturislem.php" method="post">

                                    <div style="padding:3%">

                                        <div class="form-group">
                                            <label for="exampleInputad">Sınıf Adı</label>
                                            <input type="text" name="ad" class="form-control " id="exampleInputad"
                                                placeholder="Sınıf Adı" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputmevcut">Sınıf Mevcudu</label>
                                            <input type="text" name="mevcut" class="form-control "
                                                id="exampleInputmevcut" placeholder="Sınıf Mevcudu" required>
                                        </div>

                                        <div class="form-group">
                                        <label for="exampleInputibeacon1">I-Beacon 1</label>

                                            <select class=" form-control" name="ibeacon1" placeholder="Ibeacon-1"
                                                id="exampleInputibeacon1" required>
                                                <?php
                                                $query = $db->query("SELECT * FROM ibeaconlar", PDO::FETCH_ASSOC);
                                                if ($query->rowCount()) {
                                                    foreach ($query as $row) {?>

                                                <option value="<?php echo $row["ibeacon_AD"] ?>">
                                                    <?php echo $row["ibeacon_AD"] ?> </option>
                                                <?php
                                                    }
                                                }?>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                        <label for="exampleInputibeacon2">I-Beacon 2</label>

                                            <select class=" form-control" name="ibeacon2" placeholder="Ibeacon-2"
                                                id="exampleInputibeacon2" required>
                                                <?php
                                                $query = $db->query("SELECT * FROM ibeaconlar", PDO::FETCH_ASSOC);
                                                if ($query->rowCount()) {
                                                    foreach ($query as $row) {?>

                                                <option value="<?php echo $row["ibeacon_AD"] ?>">
                                                    <?php echo $row["ibeacon_AD"] ?> </option>
                                                <?php
                                                    }
                                                }?>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                        <label for="exampleInputibeacon3">I-Beacon 3</label>

                                            <select class="form-control" name="ibeacon3" placeholder="Ibeacon-3"
                                                id="exampleInputibeacon3" required>
                                                <?php
                                                $query = $db->query("SELECT * FROM ibeaconlar", PDO::FETCH_ASSOC);
                                                if ($query->rowCount()) {
                                                    foreach ($query as $row) {?>

                                                <option value="<?php echo $row["ibeacon_AD"] ?>">
                                                    <?php echo $row["ibeacon_AD"] ?> </option>
                                                <?php
                                                    }
                                                }?>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputibeacon4">I-Beacon 4</label>
                                            <select class=" form-control" name="ibeacon4" placeholder="Ibeacon-4"
                                                id="exampleInputibeacon4" required>
                                                <?php
                                                $query = $db->query("SELECT * FROM ibeaconlar", PDO::FETCH_ASSOC);
                                                if ($query->rowCount()) {
                                                    foreach ($query as $row) {?>

                                                <option value="<?php echo $row["ibeacon_AD"] ?>">
                                                    <?php echo $row["ibeacon_AD"] ?> </option>
                                                <?php
                                                    }
                                                }?>
                                            </select>

                                        </div>

                                        <input type="submit" class="btn btn-primary btn-block" name="olustur"
                                            value="OLUŞTUR">

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