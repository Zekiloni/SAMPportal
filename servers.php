<?php require("config.php"); ?>

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
      <div class="main bg-light" align="center">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="titlebg">San Andreas MultiPlayer</div>
              <div class="textbg">
                <a href="http://www.gametracker.rs/server_info/144.76.106.36:27016/" target="_blank">
                  <img src="http://banners.gametracker.rs/144.76.106.36:27016/big/red/banner.jpg" border="0" class="srwbanner">
                </a>
              </div><br>
            </div>
            <div class="col-md-6 ml-auto">
              <div class="titlebg">Counter Strike 1.6</div>
              <div class="textbg">
                <a href="http://www.gametracker.rs/server_info/144.76.106.36:7778/" target="_blank">
                  <img src="http://banners.gametracker.rs/144.76.106.36:7778/big/blue/banner.jpg" border="0" class="srwbanner">
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="titlebg">TeamSpeak 3</div>
              <div class="textbg">
                Comming Soon
              </div><br>
            </div>
            <div class="col-md-6 ml-auto">
              <div class="titlebg">TeamSpeak 3</div>
              <div class="textbg">
                Coming Soon
              </div>
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
