<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Maxima Ventures LLP - Home</title>
    <meta name="description" content="Maxima Ventures LLP Provides Comprehensive Financial Planning
,Retirement Planning,Tax Planning,Loan Portfolio Consolidation,Current Portfolio Analysis">
    <meta name="author" content="Maxima Ventures LLP">
    <meta name="keywords" content="Maxima Ventures LLP,Financial,Investments">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/favicon.png">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Font
  ================================================== -->

    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.min.css">
    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css"/>
  <!-- SELECTBOX
  ================================================== -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/fancySelect.css" media="screen" />
  <!-- SLIDER REVOLUTION 4.x SCRIPTS
  ================================================== -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/extralayers.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/rs-plugin/css/settings.css" media="screen" />
  <!-- OWL CAROUSEL
  ================================================== -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/owl.theme.default.css">
   <!-- Progress Bar
  ================================================== -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap-progressbar-3.3.4.min.css">
  <!-- SCROLL BAR MOBILE MENU
  ================================================== -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/jquery.mCustomScrollbar.css" />
  <!-- MAIN STYLE
  ================================================== -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/style.css"/>
  <!-- color scheme -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/switcher/demo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/switcher/colors/" type="text/css" id="colors">



</head>

<!-- SETTINGS DATA START -->
<?php

  $CI =& get_instance();
  $CI->load->model('settings_model');
  $settings_data_content = $CI->settings_model->getSettingsData('footer_bottom_content');
  $phone = $settings_data_content[0]->value;
  $email = $settings_data_content[1]->value;
  $facebook_page_url = $settings_data_content[2]->value;
  $twitter_page_url = $settings_data_content[3]->value;
  $you_tube_page_url = $settings_data_content[4]->value;
  $linkedin_page_url = $settings_data_content[5]->value;
  $address = $settings_data_content[6]->value;    
  $whatsapp = $settings_data_content[7]->value;

?>
<!-- SETTINGS DATA END -->

<body>


    <div id="overlay"></div>
    <!-- Overlay Mobile Menu Click -->
    <div class="mobile-menu-first">
        <div id="mobile-menu-right" class="mobile-menu-dark">
          <div class="mCustomScrollbar light" data-mcs-theme="minimal-dark">
               <div class="header-mobile-menu hmm-v1">
                  <a class="has-icon" href="tel:<?php echo $phone;?>"><span class="lnr lnr-phone-handset icon-set-1 icon-xs"></span> <span class="sub-text-icon text-middle"><?php echo $phone;?></span></a>
                 <!--a href="contacts.html" class="ot-btn large-btn btn-main-color">Get A Quote</a>-->
              </div> <!-- End header mobile menu -->
              <ul>
                  <li><a href="<?php echo base_url(); ?>"><i class="icon-home"></i> Home</a></li>
                  <li><a href="<?php echo base_url(); ?>about_us">About Us </a></li>
                  <li><a href="<?php echo base_url(); ?>service">Services</a> </li>
                  <li><a href="<?php echo base_url(); ?>products">Products</a> </li>
                  <li><a href="<?php echo base_url(); ?>partners">Partners</a> </li>
          <li><a href="<?php echo base_url(); ?>testimonials">Happy Clients</a> </li>
          <li><a href="<?php echo base_url(); ?>our_team">Team</a></li>
                  <li><a href="<?php echo base_url(); ?>contact_us">Contact Us </a></li>
              </ul>
              <div class="footer-mobile-menu fmm-v1">
                  <ul class="social">
                      <li class="facebook"><a href="<?php echo $facebook_page_url;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                      <li class="twitter"><a href="<?php echo $twitter_page_url;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                      <li class="youtube"><a href="<?php echo $you_tube_page_url;?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                      <li class="linkedin"><a href="<?php echo $linkedin_page_url;?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>                 
                       <!--li class="whatsapp"><a href="<?php echo $whatsapp;?>" target="_blank"><i class="fa fa-whatsapp"></i></a></li-->                                       
                      
                           
                  </ul>
                  <ul class="address-footer-mobile">

                    <li><a href=""><span class="lnr lnr-map-marker"></span> 8th floor, 379 Hudson St,<br> New York, NY 10018</a></li>
                    <li><a href="tel:<?php echo $phone;?> "><span class="lnr lnr-smartphone"></span> <?php echo $phone;?> </a></li>
                    <li><a href="mailto:<?php echo $email;?>"><span class="lnr lnr-envelope"></span> <?php echo $email;?></a></li>

                  </ul>
              </div><!-- End footer mobile menu -->
          </div>
        </div> <!-- /#rmm   -->
    </div><!-- End Mobile Menu -->
  <div id="page">
    <div class="top-bar top-bar-dark">
      <div class="container">
        <div class="left-top-bar left-top-bar-long">

               <p><a><span class="fa fa-mobile"></span> :  <?php echo $phone;?> </a></p>
               <p><a href="<?php echo $whatsapp;?>" target="_blank"><span class="fa fa-whatsapp"></span></a></p>
               <p><a href="mailto:<?php echo $email;?>"><span  class="fa fa-envelope-o" ></span> :  <?php echo $email;?></a></p>
                
                <div class="popover-container visible-xs">
                    <button type="button" class="btn btn-popover popover-dark" data-container="body" data-toggle="popover" data-placement="bottom" title="<?php echo $phone;?>" data-content="<?php echo $phone;?>">
                        <span class="lnr lnr-phone-handset"></span>
                      </button>

                      <button type="button" class="btn btn-popover popover-dark" data-container="body" data-toggle="popover" data-placement="bottom" title="07:30 am – 06:00 pm" data-content="Every Day">
                        <span class="lnr lnr lnr-clock"></span>
                      </button> 
                </div>
        </div> <!-- End left top bar -->
        <div class="right-top-bar">
            <ul class="social">
                <li class="facebook"><a href="<?php echo $facebook_page_url;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="<?php echo $twitter_page_url;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li class="youtube"><a href="<?php echo $you_tube_page_url;?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li class="linkedin"><a href="<?php echo $linkedin_page_url;?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <!--li class="whatsapp"><a href="<?php echo $whatsapp;?>" target="_blank"><i class="fa fa-whatsapp"></i></a></li-->                                
            </ul>
        </div><!-- End right top bar -->
      </div> <!-- End container -->
    </div> <!-- End top bar -->

    <header id="sticked-menu" class="header header-v5">
      <div class="container">
        <div class="logo">
            <div class="mm-toggle visible-xs visible-sm">
              <i class="fa-remove fa fa-bars"></i><span class="mm-label">Menu</span>
            </div>
            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/frontend/images/Header/logo.png" class="img-responsive" alt="Image"></a>
        </div>
        <nav class="navi-desktop-site hidden-sm hidden-xs">
                  <ul class="navi-level-1 uppercase">
                        <li class="has-sub"><a href="<?php echo base_url(); ?>" <?php echo (!empty($active_home) ? 'class="active"' : '')?> >Home <!--<i class="fa fa-angle-down"></i>--></a>
                            <!-- <ul class="navi-level-2 ">
                                <li><a href="index.html">Home Page Verison 1</a></li>
                                <li><a href="home_2.html">Home Page Verison 2</a></li>
                                <li><a href="home_3.html">Home Page Verison 3</a></li>
                                <li><a href="home_4.html">Home Page Verison 4</a></li>
                                <li><a href="home_5.html">Home Page Verison 5</a></li>
                <li><a href="home_6.html">Home Page Verison 6</a></li>
                            </ul>-->
                        </li>
            <li><a href="<?php echo base_url(); ?>about_us" <?php echo (!empty($active_about_us) ? 'class="active"' : '')?> >About Us</a></li>
            <li class="has-sub"><a href="<?php echo base_url(); ?>service" <?php echo (!empty($active_service) ? 'class="active"' : '')?>>Services</a> </li>
            <li class="has-sub"><a href="<?php echo base_url(); ?>products" <?php echo (!empty($active_products) ? 'class="active"' : '')?>>Products</a> </li>
            <li class="has-sub"><a href="<?php echo base_url(); ?>partners" <?php echo (!empty($active_partners) ? 'class="active"' : '')?>>Partners</a></li>
            <li class="has-sub"><a href="<?php echo base_url(); ?>testimonials" <?php echo (!empty($active_testimonials) ? 'class="active"' : '')?>>Happy Clients</a></li>
            <li class="has-sub"><a href="<?php echo base_url(); ?>our_team" <?php echo (!empty($active_ourteam) ? 'class="active"' : '')?>>Team</a></li>
            <li class="has-sub"><a href="<?php echo base_url(); ?>contact_us" <?php echo (!empty($active_contact_us) ? 'class="active"' : '')?>>Contact Us</a> </li>
                    </ul>
        </nav>
      </div> <!-- End container -->
    </header><!-- END HEADER -->
