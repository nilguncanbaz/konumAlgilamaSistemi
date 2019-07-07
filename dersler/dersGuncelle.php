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
                    <h1 class="h3 mb-2 text-gray-800">Ders Güncelle</h1>
                    <?php

$Sor = $db->prepare("SELECT * from dersler where id=:id");
$Sor->execute(array(
    'id' => $_REQUEST['ID']));

while ($Cek = $Sor->fetch(PDO::FETCH_ASSOC)) {

    ?>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Duyuru</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="user" action="dersGuncelleislem.php?id=<?php echo $Cek['id'] ?>" method="post">

                                    <div style="padding:3%">
                                        <div class="form-group">
                                            
                                            <label for="exampleInputid">Duyuru ID</label>
                                            <input type="text" name="id" class="form-control" id="exampleInputid"
                                                placeholder="Ders Id" value="<?php echo $Cek['id'] ?>"
                                                disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputad">Ders Adı</label>
                                            <input type="text" name="ad" class="form-control" id="exampleInputad"
                                                placeholder="Ders Adı" value="<?php echo $Cek['ders_adi'] ?>"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputhoca">Dersi Veren Hoca </label>
                                            <input type="text" name="hoca" class="form-control" id="exampleInputhoca"
                                                placeholder="Dersi Veren Hoca"
                                                value="<?php echo $Cek['ders_hocasi'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputsinif">Dersin Yapıldığı Sınıf</label>
                                                <input type="text" name="sinif" class="form-control" id="exampleInputsinif"
                                                placeholder="Dersin Yapıldığı Sınıf"
                                                value="<?php echo $Cek['ders_sinifi'] ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputsure">Dersin Süresi</label>
                                                <input type="text" name="sure" class="form-control" id="exampleInputsure"
                                                placeholder="Dersin Süresi"
                                                value="<?php echo $Cek['ders_suresi'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputtarih">Dersin Tarihi</label>
                                                <input type="date" name="tarih" class="form-control" id="exampleInputtarih"
                                                placeholder="Dersin Tarihi"
                                                value="<?php echo $Cek['tarih'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputsaat">Dersin Başlama Saati</label>
                                                <input type="time" name="saat" class="form-control" id="exampleInputsaat"
                                                placeholder="Dersin Başlama Saati"
                                                value="<?php echo $Cek['baslama_saati'] ?>" required>
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