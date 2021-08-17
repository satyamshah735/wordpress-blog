<?php
wp_head();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>
    <?php bloginfo('name');?>
    <?php wp_title(); ?>
    <?php

        if(is_front_page())
        {
          echo "| ";
          bloginfo('description');
        }
        
    ?>
      
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.css">
  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/navmenu/css/menumaker.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/aos.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/ionicons.min.css">
  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/flaticon.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/icomoon.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    
</head>
<body
    <?php
    body_class();
    ?>
>




<!-- Navigation menu starts here -->

<div class="bg-top navbar-light top-nav">
  <div class="container">
    <div class="row no-gutters d-flex align-items-center align-items-stretch">
      <div class="col-lg-8 col-md-9 d-block">
        <div class="row d-flex">
          <div class="col-md d-flex topper align-items-center align-items-stretch top-cust-nav">
            <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
            <div class="text">
              <span>Email</span>
              <span>rmeschool2067@gmail.com</span>
            </div>
          </div>
          <div class="col-md d-flex topper align-items-center align-items-stretch top-cust-nav">
            <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
            <div class="text">
              <span>Call</span>
              <span>Call Us: 091-561250</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-center">
        <div class="col-md topper d-flex align-items-center justify-content-end">
          <p class="mb-0">
            <a href="#" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center top-nav-btn">
              <span>Apply now</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
      $logoimg= get_header_image();  //getting logo image from header

?>

<!-- displaying dynamic logo througout pages -->

<div class="bg-top navbar-light" id="logo-nav">
  <div class="container">
    <div class="row no-gutters d-flex align-items-center align-items-stretch">
      <div class="col-lg-4 col-md-3 d-flex align-items-center py-4 cust-pad">
        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img class="img img-responsive" src="<?php echo $logoimg; ?>"> 


          <div class="logo-text">
            <h4>Radiant Montessori English School</h4>
            <!-- <h4>School</h4> -->
            <span>Tikapur, Kailali</span>
          </div>
        </a>
      </div>
      <div class="col-lg-8 col-md-9 d-block">
        <div class="row d-flex">
          <div class="col-md topper d-flex align-items-center justify-content-end">
            <div class="ftco-footer-widget mb-5 nav-social clearfix">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



      <?php
        wp_nav_menu(array('theme_location'=>'primary-menu', 'menu_class'=>'nav'
        ))
      ?>
    <!-- END nav -->

    <!-- Navigation menu ends here -->
