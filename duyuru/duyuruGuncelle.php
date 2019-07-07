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
                    <h1 class="h3 mb-2 text-gray-800">Duyuru Güncelle</h1>
                    <?php

$Sor = $db->prepare("SELECT * from duyurular where duyuru_id=:duyuru_id");
$Sor->execute(array(
    'duyuru_id' => $_REQUEST['ID']));

while ($Cek = $Sor->fetch(PDO::FETCH_ASSOC)) {

    ?>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Duyuru</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="duyuruGuncelleislem.php?id=<?php echo $Cek['duyuru_id'] ?>" method="post">

                                    <div style="padding:3%">
                                        <div class="form-group">
                                            
                                            <label for="exampleInputid">Duyuru ID</label>
                                            <input type="text" name="id" class="form-control" id="exampleInputid"
                                                placeholder="Duyuru Id" value="<?php echo $Cek['duyuru_id'] ?>"
                                                disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputad">Sınıf Adı</label>
                                            <input type="text" name="ad" class="form-control" id="exampleInputad"
                                                placeholder="Sınıf Adı" value="<?php echo $Cek['sinif_adi'] ?>"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputbaslik">Duyuru Başlığı </label>
                                            <input type="text" name="baslik" class="form-control" id="exampleInputbaslik"
                                                placeholder="Duyuru Başlığı"
                                                value="<?php echo $Cek['duyuru_baslik'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputkat">Duyuru İçeriği</label>
                                                <input type="text" name="icerik" class="form-control" id="exampleInputicerik"
                                                placeholder="Duyuru İçeriği"
                                                value="<?php echo $Cek['duyuru'] ?>" required>
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