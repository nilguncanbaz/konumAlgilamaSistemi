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
                    <h1 class="h3 mb-2 text-gray-800">Sınıf Güncelle</h1>
                    <?php

$Sor = $db->prepare("SELECT * from sinif where id=:ID");
$Sor->execute(array(
    'ID' => $_REQUEST['ID']));

while ($Cek = $Sor->fetch(PDO::FETCH_ASSOC)) {

    ?>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sınıf</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="sinifGuncelleislem.php?id=<?php echo $Cek['id'] ?>"
                                    method="post">

                                    <div style="padding:3%">
                                        <div class="form-group">
                                            <label for="exampleInputid">Sınıf ID</label>
                                            <input type="text" name="id" class="form-control" id="exampleInputid"
                                                placeholder="Sınıf ID" value="<?php echo $Cek['id'] ?>" disabled>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputad">Sınıf Adı</label>
                                            <input type="text" name="ad" class="form-control" id="exampleInputad"
                                                placeholder="Sınıf Adı" value="<?php echo $Cek['sinif_ad'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputmevcut">Sınıf Mevcudu</label>
                                            <input type="text" name="mevcut" class="form-control"
                                                id="exampleInputmevcut" placeholder="Sınıf Mevcudu"
                                                value="<?php echo $Cek['sinif_mevcudu'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputibeacon1">I-Beacon 1</label>
                                            <input type="text" name="ibeacon1" class="form-control"
                                                id="exampleInputibeacon1" placeholder="I-Beacon 1"
                                                value="<?php echo $Cek['ibeacon_1'] ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                        <label for="exampleInputibeacon2">I-Beacon 2</label>
                                            <input type="text" name="ibeacon2" class="form-control"
                                                id="exampleInputibeacon2" placeholder="I-Beacon 2"
                                                value="<?php echo $Cek['ibeacon_2'] ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                        <label for="exampleInputibeacon3">I-Beacon 3</label>
                                            <input type="text" name="ibeacon3" class="form-control"
                                                id="exampleInputibeacon3" placeholder="I-beacon 3"
                                                value="<?php echo $Cek['ibeacon_3'] ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                        <label for="exampleInputibeacon4">I-Beacon 4</label>
                                            <input type="text" name="ibeacon4" class="form-control"
                                                id="exampleInputibeacon4" placeholder="I-Beacon 4"
                                                value="<?php echo $Cek['ibeacon_4'] ?>" disabled>
                                        </div>

                                        <input type="submit" class="btn btn-primary btn-block" name="guncelle"
                                            value="GÜNCELLE">

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php }

?>

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