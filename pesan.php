<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pesan Kaos - OldFace</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
  <?php include 'css-file.php' ?>
  <link href="css/color.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">
  <div id="preloader"></div>
  <header>
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <nav class="navbar navbar-default">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <h1><span>Old</span>Face</h1>
                  <!-- <img src="img/logo.png" alt="" title=""> -->
                </a>
              </div>
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="page-scroll" href="oldface.php">OldFace</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="kaos.php">Kaos OldFace</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="bahan.php">Bahan Kaos</a>
                  </li>
                  <li class="active">
                    <a class="page-scroll" href="pesan.php">Pesan Kaos</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="contact.php">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div id="oldface" class="area-padding" style="padding-top: 130px">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Pesan Kaos</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <form role="form" action="" method="post">
          <div class="col-md-5 col-sm-5 col-xs-6">
            <div class="well-middle">
              <h5>Pilih Warna</h5>
              <div class="single-well">
                <div class="custom-radios">
                  <div class="form-group">
                    <input type="radio" id="color-1" name="color" value="color-1" checked>
                    <label for="color-1">
                      <span>
                      </span>
                    </label>
                  </div>
                  
                  <div>
                    <input type="radio" id="color-2" name="color" value="color-2">
                    <label for="color-2">
                      <span>
                      </span>
                    </label>
                  </div>
                  
                  <div>
                    <input type="radio" id="color-3" name="color" value="color-3">
                    <label for="color-3">
                      <span>
                      </span>
                    </label>
                  </div>

                  <div>
                    <input type="radio" id="color-4" name="color" value="color-4">
                    <label for="color-4">
                      <span>
                      </span>
                    </label>
                  </div>

                  <div>
                    <input type="radio" id="color-5" name="color" value="color-5">
                    <label for="color-5">
                      <span>
                      </span>
                    </label>
                  </div>

                  <div>
                    <input type="radio" id="color-6" name="color" value="color-6">
                    <label for="color-6">
                      <span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="mb-0">Tipe Kaos</label>
              <input type="text" name="nama" class="form-control" placeholder="Silahkan masukan tipe kaos" tabindex="1"> 
            </div>
            <div class="form-group">
              <label class="mb-0">Bahan Kaos</label>
              <input type="text" name="nama" class="form-control" placeholder="Silahkan masukan bahan kaos" tabindex="1"> 
            </div>
            <div class="form-group">
              <label class="mb-0">Jumlah Kaos</label>
              <input type="text" name="nama" class="form-control" placeholder="Silahkan masukan jumlah kaos" tabindex="1"> 
            </div>
            <div class="form-group">
              <label class="mb-0">Ketebalan Kaos</label>
              <input type="text" name="nama" class="form-control" placeholder="Silahkan masukan ketebalan kaos" tabindex="1"> 
            </div>
            <div class="form-group">
              <label class="mb-0">Ukuran Kaos</label>
              <input type="text" name="nama" class="form-control" placeholder="Silahkan masukan ukuran kaos" tabindex="1"> 
            </div>
          </div>

          <div class="col-md-2 col-sm-2 col-xs-5">
          </div>

          <div class="col-md-4 col-sm-4 col-xs-5">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="img/pesan/kaos-001.jpg" alt="">
                </a>
              </div>
            </div>
            <div class="text-center area-padding">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Masukan Desain</button><br>
              <button type="button" class="btn btn-default btn-lg btn-block" onclick="window.location='biodata.php';">Masukan Biodata Pemesanan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include 'footer.php' ?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <?php include 'js-file.php' ?>
</body>
</html>