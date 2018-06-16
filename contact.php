<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>OldFace</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
  <?php include 'css-file.php' ?>
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
                  <li class="active">
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

  <div class="contact-inner area-padding" style="padding-top: 130px">
    <div class="contact-overly"></div>
    <div class="container ">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Contact Kami</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start contact icon column -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="contact-icon text-center">
            <div class="single-icon">
              <i class="fa fa-mobile"></i>
              <p>
                Call: +1 5589 55488 55<br>
                <span>Monday-Friday (9am-5pm)</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="contact-icon text-center">
            <div class="single-icon">
              <i class="fa fa-envelope-o"></i>
              <p>
                Email: info@example.com<br>
                <span>Web: www.example.com</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="contact-icon text-center">
            <div class="single-icon">
              <i class="fa fa-map-marker"></i>
              <p>
                Location: A108 Adam Street<br>
                <span>NY 535022, USA</span>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="form contact-form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php' ?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <?php include 'js-file.php' ?>
</body>
</html>