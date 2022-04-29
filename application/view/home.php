<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="static/css/bootstrap.css" crossorigin="anonymous">

    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='static/css/x3dom.css'>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="static/css/custom.css" crossorigin="anonymous">

      <!-- Lets have some fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- fancyBox3 -->
    <link rel="stylesheet" type="text/css" href="static/css/jquery.fancybox.min.css">
    
    <title>Best assignment of All!</title>

  </head>
  <body id="bodyColor">
      <?php require "page_header.php" ?>

      <!-- This is the main contents of the page, it has a background image across 1 column, followed by three columns holding cards in a row for the 3 images and associated texts
      -->
      <div class="container-fluid">
          <?php require "page_home.php" ?>
          <?php require "page_about.php" ?>
          <?php require "page_models.php" ?>
      </div>
      <?php require "page_footer.php" ?>
      <?php require "page_contact.php" ?>

      <!-- JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="static/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
      <script src="static/js/popper.min.js" crossorigin="anonymous"></script>
      <script src="static/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="static/js/fontawesome-all.min.js"></script>
      <!-- Custom JavaScript code for your 3d App -->
      <script src="static/js/custom.js" crossorigin="anonymous"></script>
      <!-- JavaScript to swap for SPA and restyle -->
      <script src="static/js/swap_restyle.js"></script>
      <!-- Include the x3dom JavaScript -->
      <script type='text/javascript' src='static/js/x3dom-1.7.2/x3dom.js'></script>
      <!-- JavaScript and PHP based Gallery generator  -->
      <script type="text/javascript" src="static/js/gallery_generator.js"></script>
      <!-- JQuery code to get content data from a backend JSON file -->
      <script src="static/js/getJsonData.js"></script>
      <!-- JavaScript model interactions -->
      <script src="static/js/modelInteractions.js"></script>
      <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
      <script src="static/js/jquery.fancybox.min.js"></script>
  </body>