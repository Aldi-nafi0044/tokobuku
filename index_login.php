<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="login.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="assets/css/templatemo-sixteen.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/owl.css">
    <title>Login or sign-up page</title>
</head>
<body>
<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index_login.php"><h2>Book <em>Store</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Book</h4>
            <h2>Cari buku-buku tebaik dan terlengkap disini</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Diskon 10%</h4>
            <h2>Dapatkan Diskon 10% disemua Buku</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Free Ongkir</h4>
            <h2>Dapatkan gratis ongkir ke semua wilayah indonesia</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-2">
                    <h3>Login</h3>
                    <form method="post" action="login.php" name="form">
                        
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan Email" value="" id="email" name="email" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Masukkan Password" value="" id="passowrd" name="password" required/>
                        </div>
                        <div class="form-group">
                            <div style="color: red" class="form-control" text="pastikan benar semua">
                            <?php 
                                if(isset($_GET['pesan'])){
                                    if($_GET['pesan'] == "emailsalah"){
                                        echo "email salah";
                                    }else if($_GET['pesan'] == "passsalah"){
                                        echo "password salah";
                                    }else if($_GET['pesan'] == "2salah"){
                                        echo "email dan password salah";
                                    }
                            }
                            ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        
                        </form>
                </div>
                <div class="col-md-6 login-form-1">
                    <h3>Sign Up</h3>
                    <form method="post" action="regester.php" name="form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="masukkan Nama" value="" id="nama" name="nama" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="masukkan Email " value="" id="email" name="email" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="masukkan Password " value="" id="passowrd" name="password" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="masukkan Password kembali" value="" id="confirm" name="confirm" required/>
                        </div>
                        <div class="form-group">
                            <div style="color: black" class="form-control" text="pastikan sudah di isi semua">
                            <?php 
                                if(isset($_GET['pesan'])){
                                    if($_GET['pesan'] == "berhasil"){
                                        echo "berhasil tersimpan";
                                    }else if($_GET['pesan'] == "gagal"){
                                        echo "Password tidak sama dengan konfirmasi password";
                                    }
                            }
                            ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btnSubmit" value="SIMPAN">sign-up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Book Store Co., Ltd.
            
            - Design: <a rel="nofollow noopener"  target="_blank">Nafi Aldiansyah</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>



</body>
</html>