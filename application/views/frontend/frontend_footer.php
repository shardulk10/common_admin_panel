<?php
$CI =& get_instance();
$CI->load->model('Staticpages_model');
$footer_bottom_content = $CI->Staticpages_model->getStaticDetailsUsingSlug('footer_bottom_content'); 

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

<section style="padding: 30px 0px">
          <div class="container">
            <div class="row">
              <a class="mid-btn  btn-main-color default-size-btn margin-top-40" style="width:300px" href="<?php echo base_url(); ?>contact_us">Contact Us For More Details</a>
            </div><!-- End row -->
            
          </div><!-- End container -->
    </section><!-- End Section -->
    
    <!-- Footer -->
    <footer class=" bg-dark-footer footer">
            <div class="container">
              <div class="row">
                <div class="footer-row">

                    <div class="footer-col-1">
                        <a href="index.html"><img src="<?php echo base_url(); ?>assets/frontend/images/Footer/logo-footer.png" class="img-responsive" alt="Image"></a>
                        <?php echo $footer_bottom_content->body_content;?>

                        </div>


                    <div class="footer-col-2">
                      <h3 class="text-white">Main Menu</h3>
                     <div class="border-2-side">
                     <ul >
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>about_us">About Us</a></li>
                    <li><a href="<?php echo base_url(); ?>service">Services</a></li>
                    <li><a href="<?php echo base_url(); ?>partners">Partners</a></li>
                    <li><a href="<?php echo base_url(); ?>testimonials">Happy Clients</a></li>
                    <li><a href="<?php echo base_url(); ?>our_team">Team</a></li>
                    <li><a href="<?php echo base_url(); ?>contact_us">Contact Us </a></li>
                    <li><a href="<?php echo base_url(); ?>disclaimer">Disclaimer </a></li>
                    <li><a href="<?php echo base_url(); ?>privacy_policy">Privacy Policy </a></li>

                  </ul>

               </div>
               </div>
                    <div class="footer-col-3">
                          <h3 class="text-white">Contact us</h3>
                        <div class="border-3-side">
                        <p><?php echo $address;?></p>
                        <p>Phone: <?php echo $phone;?></p>
                        <p>Email: <?php echo $email;?></p>
                        </div>

                    </div>

                </div> <!-- End footer row -->
                <div class="col-md-12 footer-link">
                  <p>Copyright @2019 All rights reserved by Maxima Ventures LLP </p>

                   <ul class="social social-footer">
                            <li class="facebook"><a href="<?php echo $facebook_page_url;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="<?php echo $twitter_page_url;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="youtube"><a href="<?php echo $you_tube_page_url;?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li class="linkedin"><a href="<?php echo $linkedin_page_url;?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>                  
                            <li class="whatsapp"><a href="<?php echo $whatsapp;?>" target="_blank"><i class="fa fa-whatsapp"></i></a></li>                            
                          </ul>


                </div>
              </div><!-- End Row -->

            </div><!-- End container -->
    </footer><!-- End  -->
  </div> <!-- End Page -->
    <a id="to-the-top" style="display: block;"><i class="fa fa-angle-up"></i></a> <!-- Back To Top -->
     <!-- SCRIPT
    ================================================== -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/vendor/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/jpreLoader.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/easing.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/fancySelect.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/custom.js"></script>
    <!-- Switcher
    ================================================== -->
    <script src="<?php echo base_url(); ?>assets/frontend/switcher/demo.js"></script>
    <!-- Mobile Menu
    ================================================== -->
     <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/jquery.mobile-menu.js"></script>
     <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/sticky.min.js"></script>
    <!-- Revo Lib
    ================================================== -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Custom Revoslider -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/revoslider-custom.js"></script>
    <!-- Counter Up
    ================================================== -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/jquery.animateNumber.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/custom-counterup.js"></script>
    <!-- Initializing the isotope
    ================================================== -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/custom-isotope.js"></script>
    <!-- Initializing Owl Carousel
    ================================================== -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/custom-owl.js"></script>
    <!-- Progress Bar Chart
    ================================================== -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/bootstrap-progressbar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/plugins/custom-progressbar.js"></script>
</body>
</html>