<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Larissa Busana</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <ul>
      <div class="date">
                  <li class="left" id="date"><?php echo date("l, d F Y"); ?></li>
                  </div>
      </ul>
   
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>

      <div class="banner_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Wellcome to</h1>
                              <h1 class="coffee_text">Larissa Busana</h1>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <div class="about_taital">About Us</div>
                     <p class="about_text">We provide a wide range of clothing and Muslim clothing ranging from children to adults.</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="images/busanaabout.jpeg"></div>
               </div>
            </div>
         </div>
      </div>

      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="gallery_taital">Our Gallery</h1>
                  <p class="gallery_text">we have established this business since 2020 and these are our products that we have marketed and traded</p>
               </div>
            </div>
            <div class="">
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="images/busana1.jpg" alt="Avatar" class="image">
                           <div class="overlay">
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="images/busana2.jpg" alt="Avatar" class="image">
                           <div class="overlay">
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="images/busana3.jpg" alt="Avatar" class="image">
                           <div class="overlay">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="images/busana4.jpg" alt="Avatar" class="image">
                           <div class="overlay">
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="images/sarung.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="overlay">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="images/busana5.jpg" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="overlay">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="seemore_bt"><a href="#">See More</a></div>
         </div>
      </div>
      <div class="footer_section layout_padding margin_top90">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">About</h3>
                  <p class="footer_text">Quality products and guaranteed comfort</p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">Menu</h3>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
            
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Contact Us</h1>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Address : Bitung Sari, Warung Nangka, Ciawi</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Call : +62 821 2596 7330</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Email : ihsandz.playz980@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>     
   </body>
</html>