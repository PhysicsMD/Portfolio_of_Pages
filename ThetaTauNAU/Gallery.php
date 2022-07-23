<!DOCTYPE html>
<html>
<head>
      <!--- basic page needs
      ================================================== -->
      <meta charset="utf-8">
      <title>Gallery</title>

      <!-- mobile specific metas
      ================================================== -->
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSS
      ================================================== -->
      <link rel="stylesheet"  media="all" href="css/base.css" type="text/css">
      <link rel="stylesheet" media="all" href="css/vendor.css" type="text/css">
      <link rel="stylesheet" media="all" href="css/main.css" type="text/css">

<style type="text/css" media="screen">
* {box-sizing: border-box;}

.container {
  position: relative;
  display:inline-block;
  width: 33%;

}


</style>

      <!-- script
      ================================================== -->
      <script src="js/modernizr.js"></script>
      <script src="js/pace.min.js"></script>

      <!-- favicons
      ================================================== -->
      <link rel="shortcut icon" href="Favicon.png" type="image/png">
      <link rel="icon" href="Favicon.png" type="image/png">

      <!-- icons
      ================================================= -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="top">
  <!-- header
  ================================================== -->
  <header class="s-header">
      <nav class="header-nav">
          <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

          <div class="header-nav__content">
                <h3>Welcome</h3>

                <ul class="header-nav__list">
                    <li><a href="index.html" title="Home" style="#FFD700">Home</a></li>
                    <li><a href="members.html" title="Members">Members</a></li>
                    <li><a href="Rush.html" title="Photos">Rush</a></li>
                    <li><a href="Gallery.php" title="page4">Gallery</a></li>
				</ul>

            </div> <!-- end header-nav__content -->

      </nav> <!-- end header-nav -->

      <a class="header-menu-toggle" href="#0">
          <span class="header-menu-icon"></span>
      </a>

  </header> <!-- end s-header -->
<h1 style="color:#FFD700;text-align:center;">Gallery</h1>
<!--Founders
====================================== -->

<div>
            <div class="gallery">
              
            <?php 
            // Image extensions
            $image_extensions = array("png","jpg","JPG","PNG","JPEG","jpeg","gif");

            // Target directory
            $dir = 'images/Gallery/';
            if (is_dir($dir)){
                
                if ($dh = opendir($dir)){
                    $count = 1;

                    // Read files
                    while (($file = readdir($dh)) !== false){

                        if($file != '' && $file != '.' && $file != '..'){
                            
                            // Thumbnail image path
                            $thumbnail_path = "images/Gallery/".$file;

                            // Image path
                            $image_path = "images/".$file;
                            
                            $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
                            $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

                            // Check its not folder and it is image file
                            if(!is_dir($image_path) && 
                                in_array($thumbnail_ext,$image_extensions) && 
                                in_array($image_ext,$image_extensions)){
                                ?>

                                <!-- Image -->
                                    <img width="20%" style="vertical-align:middle" src="<?php echo $thumbnail_path; ?>" alt="" title=""/>
                                <!-- --- -->
                                <?php

                                // Break
                                if( $count%4 == 0){
                                ?>
                                    <div class="clear"></div>
                                <?php    
                                }
                                $count++;
                            }
                        }
                            
                    }
                    closedir($dh);
                }
            }
            ?>
            </div>
        </div>


        <!-- Script -->
        <script type='text/javascript'>
        $(document).ready(function(){

            // Intialize gallery
            var gallery = $('.gallery a').simpleLightbox();
        });
        </script><!--  Image dump code  -->
<!-- contact
================================================== -->
<section id="contact" class="s-contact">
    <div class="row">
        <div class="col-five tab-full contact-secondary">
            <!--<h3 class="subhead subheadlight"></h3>-->

            <!--<h3 class="subhead subheadlight"></h3>-->

            <p class="contact-address" style="color:white;">
                <h2 style="color:white;">Our Social Media links and info ↓</h2>
                <!-- social media icons
                ============================================ -->
                <a href="https://www.facebook.com/thetataunau/" target="blank"><i class="fa fa-facebook-f icons" style="font-size:36px;color:white;"></i></a>

                <a href="https://twitter.com/thetataunau" target="blank"><i class="fa fa-twitter icons" style="font-size:36px;color:white;"></i></a>

                <a href="https://www.instagram.com/thetataunau/" target="blank"><i class="fa fa-instagram icons" style="font-size:36px;color:white;"></i></a>

                <a href="mailto:thetataunau@gmail.com"><i class="fa fa-envelope-o icons" style="font-size:36px;color:white;"></i></a>
            </p>
        </div> <!-- end contact-secondary -->

    </div> <!-- end row -->
    <div class="row">
        <div class="col-full cl-copyright">
            <span>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by NAU Colony of Theta Tau.
</span>
        </div>
    </div>

    <div class="cl-go-top">
        <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
    </div>

</section> <!-- end s-contact -->
<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader">
    </div>
</div>


<!-- Java Script
================================================== -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>

</html>
