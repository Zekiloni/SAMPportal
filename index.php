<?php
require ("config.php");
include "assets/functions/smf.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Style -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom Style -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <title><?php echo sitename; ?></title>
  </head>
  <body>
    <div class="container" style="padding-top:100px;">
      <?php include "assets/functions/menu.php"; ?>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/slider/slider1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slider/slider2.jpg" alt="Second slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="server bg-dark">
        <marquee behavior="scroll" direction="left">Dobrodošao na zvanicni sajt <?php echo sitename; ?> vlasnik servera je <?php echo owner; ?>, IP servera: <?php echo $serverip ,":", $serverport; ?></marquee>
      </div>
      <div class="main bg-light" align="center">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <div class="container">
                <div class="row justify-content-between">
                  <div class="col-sm-3">
                    <div class="titlebg">GTA San Andreas</div>
                    <div class="textbg">
                      <img src="assets/img/download/gta.png" alt="" class="dlicons">
                      <p><a href="#">Download</a></p>
                    </div><br>
                  </div>
                  <div class="col-sm-3">
                    <div class="titlebg">SAMP Client</div>
                    <div class="textbg">
                      <img src="assets/img/download/samp.png" alt="" class="dlicons">
                      <p><a href="#">Download</a></p>
                    </div><br>
                  </div>
                  <div class="col-sm-3">
                    <div class="titlebg">TeamSpeak 3</div>
                    <div class="textbg">
                      <img src="assets/img/download/ts.png" alt="" class="dlicons">
                      <p><a href="#">Download</a></p>
                    </div><br>
                  </div>
                  <div class="col-sm-3">
                    <div class="titlebg">Discord</div>
                    <div class="textbg">
                      <img src="assets/img/download/discord.png" alt="" class="dlicons">
                      <p><a href="#">Download</a></p>
                    </div><br>
                  </div>
                </div>
              </div><br>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9">
                <?php SMFPosts(); ?>
              <div class="titlebg">O Nama</div>
              <div class="textbg">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut dolor tellus. Aliquam aliquam rutrum sapien in pharetra. Curabitur et orci pellentesque, consequat libero et, rutrum lectus. Aliquam elit felis, dignissim eu porta vel, pharetra vel erat. Nulla euismod ullamcorper dolor quis feugiat. Curabitur ligula lorem, auctor vitae egestas nec, ornare nec nulla. Sed sit amet imperdiet ex. In et quam semper, mollis sem sit amet, mollis purus. Nam tincidunt, felis sit amet dapibus vulputate, diam lectus porttitor diam, eget tristique mi libero et ligula.</p>
              </div><br>
              <div class="titlebg">Partneri</div>
              <div class="textbg">
                <a href="#"><img src="http://noobot.info/uploader/image.php?di=98L7" style="max-width: 100%;"></a>
              </div><br>
            </div>
            <div class="col-md-3 ml-auto">
              <div class="titlebg">Server Banner</div>
              <div class="textbg">
                <a href="http://www.gametracker.rs/server_info/<?php echo $serverip ,":", $serverport; ?>/" target="_blank">
                  <img src="http://banners.gametracker.rs/<?php echo $serverip ,":", $serverport; ?>/vertical/blue/banner.jpg" border="0">
                </a>
              </div><br>
              <div class="titlebg">Staff Team</div>
              <div class="textbg">
                <?php Staff(); ?>
              </div><br>
            </div>
          </div>
        </div>
      </div>
      <div class="footer bg-dark">
        <?php echo $copyright ," &copy; ", sitename ,"<br>", $madeby; ?>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
