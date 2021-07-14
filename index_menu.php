<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
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
          <a class="navbar-brand" href="index_menu.php"><h2>Book <em>Store</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto"> 
              <li class="nav-item active">
                <a class="nav-link" href="index_menu.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index_upload.php">Upload Book</a>
              </li>
            </ul>
          </div>
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
            <h2>Dapatkan Diskon 10% disemua Buku </h2>
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

    <div class="latest-products">
      <div class="container">
        <div class="row" id="load_data">
        <div class="col-md-12">
          </div>
          <?php
              include 'config.php';
              
              $buku = mysqli_query($koneksi,"select * from buku");

              while ($row = mysqli_fetch_array($buku)) {
                $id_buku = $row["id_buku"];
                $gambar_buku = $row["gambar_buku"];
                $harga = $row["harga"];
                $judul_buku = $row["judul_buku"];
                if (strlen($judul_buku) > 60) {
                  $judul_buku = substr($judul_buku, 0, 60) . "...";
                }
                $synopsis = $row["synopsis"];
                if (strlen($synopsis) > 100) {
                  $synopsis = substr($synopsis, 0, 100) . "...";
                }
            ?>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="imageview.php?id_buku=<?php echo $id_buku; ?>" ></a>
              <div class="down-content" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <a href="#"><h4><?php echo $judul_buku; ?></h4></a>
                <h6><?php echo $harga; ?></h6>
                <p><?php echo $synopsis; ?></p>
              </div>
            </div>
          </div>
          <?php } ?>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="product-item">
                  <a href="#"><img src="imageview.php?id_buku=<?php echo $id_buku; ?>" ></a>
                  <div class="down-content">
                    <a href="#"><h4><?php echo $judul_buku; ?></h4></a>
                    <h6><?php echo $harga; ?></h6>
                    <p><?php echo $synopsis; ?></p>
                  </div>
                </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
    
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
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>

</html>
