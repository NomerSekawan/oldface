<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Submit Pesan - OldFace</title>
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
                  <li>
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
            <h2>Submit Pemesanan</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <form role="form" action="" method="post">
          <div class="col-md-5 col-sm-5 col-xs-6">
            <div class="well-middle">
              <div class="form-group">
                <label class="mb-0">Nama Pemesan</label>
                <input type="text" name="nama" class="form-control" placeholder="Silahkan masukan nama pemesan" tabindex="1"> 
              </div>
              <div class="form-group">
                <label class="mb-0">Kontak Pemesan</label>
                <input type="text" name="nama" class="form-control" placeholder="Silahkan masukan kontak pemesan" tabindex="1"> 
              </div>
              
              <button type="submit" class="btn btn-primary btn-lg btn-block">Submit Pemesanan</button><br>
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