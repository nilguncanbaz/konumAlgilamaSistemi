
<!DOCTYPE html>
<html lang="tr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Konum Algılama Sistemi - Giriş </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block "><img src="img/kurumsal_logo.png" alt="" style=" margin:10%; width:100% "></div>
              <div class="col-lg-6" style="margin-top:7%">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Konum Algılama Sistemi</h1>
                  </div>
                  <form class="user" action="home/giris.php" method="post">
                    <div class="form-group">
                      <input type="email" name="eposta" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="E-Posta" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="sifre"class="form-control form-control-user" id="exampleInputPassword" placeholder="Şifre" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <!--<label class="custom-control-label" for="customCheck">Remember Me</label>-->
                      </div>
                    </div>
                  
                    <input type="submit" name="giris" class="btn btn-primary btn-user btn-block" value="Giriş" >

                    
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
