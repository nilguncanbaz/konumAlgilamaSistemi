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
                    <h1 class="h3 mb-2 text-gray-800">Duyuru Listesi</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Duyurular</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>SINIF ADI</th>
                                            <th>DUYURU BAŞLIĞI</th>
                                            <th>DUYURU İÇERİĞİ</th>
                                         

                                            <th>İŞLEM</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            $Sor = $db->prepare("SELECT * from duyurular");
                                            $Sor->execute();

                                            while ($Cek = $Sor->fetch(PDO::FETCH_ASSOC)) {?>
                                        <tr>
                                            <td><?php echo $Cek['duyuru_id'] ?></td>
                                            <td><?php echo $Cek['sinif_adi'] ?></td>
                                            <td><?php echo $Cek['duyuru_baslik'] ?></td>
                                            <td><?php echo $Cek['duyuru'] ?></td>
                                            
                                            
                                            <td>
                                            <a href="duyuruGuncelle.php?ID=<?php echo $Cek['duyuru_id'] ?>" class="btn btn-primary btn-circle">
                                                <i class="fas fa-pen"></i>
                                            </a> 
                                            <a href="duyuruSil.php?ID=<?php echo $Cek['duyuru_id'] ?>" class="btn btn-danger btn-circle" onClick="return confirm('Duyuruyu silmek istediğinize emin misiniz?')">
                                                <i class="fas fa-trash"></i>
                                            </a>    
                                               
                                            

                                            </td>

                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
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

    <!-- Logout Modal-->
    

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