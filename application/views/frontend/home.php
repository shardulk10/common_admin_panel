<?php

  $CI =& get_instance();
  $CI->load->model('banners_model');
  $banners_content = $CI->banners_model->getActiveBannersHome();
  

?>
 <div class="no-padding">
      
          <div class="slider clearfix ">
              <div class="fullwidthbanner-container">
                    <div id="revolution-slider-home-3" class="slider-home-3">
                        <ul>  <!-- SLIDE  -->
                            <?php foreach($banners_content AS $rowBanners) { ?>
                                <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                                  <!-- MAIN IMAGE -->
                                  <img src="<?php echo $rowBanners->image_path?>"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center" data-bgrepeat="no-repeat" alt="<?php echo $rowBanners->banner_heading?>">
                                  
                                  <!-- LAYER NR. 1 -->
                                  <div class="tp-caption sfb h1-text text-red text-center text-cap"
                                        data-x="55"
                                        data-y="250"
                                        data-speed="500"
                                        data-start="800"
                                        data-easing="easeInOutCubic"
                                        ><?php echo $rowBanners->banner_heading?>
                                      </div> 
    
                                 
                                </li>
                            <?php } ?>
                            
                        </ul>
                    </div>
              </div>
            
          </div><!-- End slider  -->
      </div><!-- End Section-->
      
<!-- Component Get a Call Back-->
    <section class="bg-dark">
            <div class="container">
                 <div class="row">
                  <div class="get-call-back-contain">
                    <div class="col-md-6 get-call-back-left">
                      <div class="call-back-text">
                        <h2 class="text-white">Get a Call Back</h2>
                        <div class="clearfix"></div>
                        <p class="text-grey">If you need to speak to us about any query fill in the form below and we will call you back.</p>
                      </div><!-- End call back text left -->
                    </div>
                    <div class="col-md-6 get-call-back-right">
                      <div class="call-back-form">
                        <form name="servicehomeform" id="servicehomeform" method="post" >
                          <p>How can we help? *
                          <?php if(!empty($error_message_form)) {
                            echo "<br/><b style='color:red'>".$error_message_form."</b>";
                          }
                          
                          if(!empty($success_message_form)) {
                            echo "<br/><b style='color:green'>".$success_message_form."</b>";
                          }
                          
                          ?>
                          </p>

                          <select id="selService" name="selService" class="form-control custom-form custom-select">
                            <option selected="selected">Financial Planning</option>
                            <option>SIP </option>
                            <option>Life Insurance </option>
                            <option>Mediclaim </option>
                            <option>Tax Saving </option>
                            <option>Fixed Deposit </option>
                            <option>Home Loan & Balance Transfer </option>
                            <option>Monthly Income </option>
                            <option>Others </option>
                          </select>
                          <div class="row">
                            <div class="form-group col-md-6 custom-form">
                              <input type="text" class="form-control" name="name" id="name" placeholder="Your Name: *" required>
                            </div>
                            <div class="form-group col-md-6 custom-form">
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number: *" required>
                            </div>
                            <div class="form-group col-md-6 custom-form">
                              <input type="text" class="form-control" name="email" id="email" placeholder="Email Address: *" required>
                            </div>
                          </div>

                          <input type="checkbox" id="accept_privacy_policy" name="accept_privacy_policy" value="accepted" > I agree to the <a href="<?php echo base_url(); ?>privacy_policy">Privacy Policy</a><br/>
                          <input type="hidden" id="sbtService" name="sbtService" value="sbtService" >
                          <button type="button" name="sbtServicebtn" value="sbtServicebtn" class="ot-btn large-btn  btn-light btn-submit" onClick="checkBoxValidation();">Submit</button>
                        </form>
                        <script>
                        function checkBoxValidation(){
                            if(document.getElementById("accept_privacy_policy").checked == false) {
                                alert("Please indicate that you have read and agree to the Privacy Policy");
                            } else {
                                document.getElementById("servicehomeform").submit();
                            }
                        }
                        
                        </script>
                      </div><!-- End call back form -->
                    </div>
                  </div>
                </div><!-- End row -->
            </div><!-- End container -->
    </section><!-- End Section -->
    
  <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="video-intro-container">
                        <div class="background-video">
                              <img src="<?php echo base_url(); ?>assets/frontend/images/About/bg-about.jpg" class="images-responsive" alt="Image">
                             <!-- <button data-href="https://www.youtube.com/embed/vOAB6XOkY2E" id="btn-event" class="btn btn-play" ></button >-->
                        </div>



                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                  <h1>Welcome To Maxima Ventures LLP</h1>
                  <div class="clearfix"></div>
                  <?php echo $home_short_about_us->body_content;?>

        <a class="ot-btn  btn-main-color default-size-btn" href="<?php echo base_url(); ?>about_us">Read More</a>
              </div><!-- End col -->
            </div><!-- End row -->
        </div><!-- End container-->
    </section><!-- End section-->



     <!-- Component Thumbnail Left Icon SVG -->
    <div class="padding-top-65 padding-bottom-65 bg-grey">
      <div class="container">

   <h2 class="title text-center margin-bottom-40">Services</h2>
          <div class="row clearfix">
            <div class="col-md-12">
              <article class=" col-sm-6 col-md-3 thumbnail-style thumbnail-icon-item text-center ">

                   <div class="thumbnail">
                      <img class="img-icon-thumbnail" src="<?php echo base_url(); ?>assets/frontend/images/Services/1.png" alt="">
                     <div class="caption">
                       <h4>Portfolio Analysis</h4>
                       <p>
                        People invest saved amounts in different instruments this pool of such ...<a href="<?php echo base_url(); ?>service/current_portfolio_analysis">Read More</a>
                        </p>

                     </div>
                   </div>

              </article><!-- End article -->
              <article class=" col-sm-6 col-md-3 thumbnail-style thumbnail-icon-item text-center ">

                   <div class="thumbnail">
                       <img class="img-icon-thumbnail" src="<?php echo base_url(); ?>assets/frontend/images/Services/2.png" alt="">
                     <div class="caption">
                       <h4>Retirement Planning</h4>
                       <p>
                        Most of us dream to 'Retire Sooner, Retire Richer!'However, it's a far-fetched dream ...<a href="<?php echo base_url(); ?>service/retirement_planning">Read More</a> 
                       </p>

                     </div>
                   </div>

              </article><!-- End article -->
              <article class=" col-sm-6 col-md-3 thumbnail-style thumbnail-icon-item text-center ">

                   <div class="thumbnail">
                       <img class="img-icon-thumbnail" src="<?php echo base_url(); ?>assets/frontend/images/Services/3.png" alt="">
                     <div class="caption">
                       <h4>Taxes Planning</h4>
                       <p>
                        Along with your income what grows is tax liability. Thankfully, the government ...<a href="<?php echo base_url(); ?>service/tax_planning">Read More</a>
                       </p>

                     </div>
                   </div>

              </article><!-- End article -->
               <article class=" col-sm-6 col-md-3 thumbnail-style thumbnail-icon-item text-center ">

                 <div class="thumbnail">
                     <img class="img-icon-thumbnail" src="<?php echo base_url(); ?>assets/frontend/images/Services/6.png" alt="">
                   <div class="caption">
                     <h4>Home Buying</h4>
                     <p>
                      A man's home is his castle! In other words, it gives you rightful roof and immense ...<a href="<?php echo base_url(); ?>service/home_buying">Read More</a>
                     </p>

                   </div>
                 </div>

            </article><!-- End article -->
              <a class="mid-btn  btn-main-color default-size-btn margin-top-40"  href="<?php echo base_url(); ?>service">Read More</a>
            </div>
              
          </div><!-- End Row -->
       
      </div><!-- End container -->
    </div> <!-- End section -->

    <!-- Component Courter Up -->
    <section>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="counter-up counter-up-style-1 text-center">
                  <h2>We help you grow your wealth</h2>
                  <?php echo $home_grow_business->body_content;?>

                  <!--ul>
                    <li>
                      <p><span class="couterup" id="yoe"></span></p>
                      <span class="label-counter">Years of experience</span>
                    </li>
                    <li>
                      <p><span class="couterup" id="hc"></span><span class="unit">K</span></p>
                      <span class="label-counter">Happy Customers</span>
                    </li>
                    <li>
                      <p><span class="couterup" id="satis"></span><span class="unit">%</span></p>
                      <span class="label-counter">Satisfaction</span>
                    </li>
                  </ul-->
                </div><!-- End counter up -->
              </div> <!-- End cold -->
              <a class="mid-btn  btn-main-color default-size-btn margin-top-40"  href="<?php echo base_url(); ?>grow_your_welth">Read More</a>
            </div><!-- End row -->
            
          </div><!-- End container -->
    </section><!-- End Section -->
     <!-- Component Accrodion -->
    <!--section class="our-process bg-dark no-padding">
         <div class="row">
            <div class="process-warp">
              <div class="col-md-6 col-lg-6 img-demo-our-process">
                <img src="<?php echo base_url(); ?>assets/frontend/images/Process/1.jpg" class="img-responsive" alt="Image">
             </div>
             <div class="col-md-6 col-lg-6 accordion-process padding-top-70 padding-bottom-50">
                 <div class="accordion-style-light no-round">
                <div class="accordion-warp">
                  <h2 class="title text-white">Why Choose Us</h2>
                  <div class="clearfix"></div>
                  <div class="panel-group" id="accordion2">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">01. Define Objectives</a>
                          </h4>
                      </div>
                      <div id="collapseOne2" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <div class="accordion-content">
                              <?php echo $define_objectives->body_content;?>

                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" class="collapsed">02. Develop a Plan</a>
                          </h4>
                      </div>
                      <div id="collapseTwo2" class="panel-collapse collapse">
                          <div class="panel-body">
                              <div class="accordion-content">
                              <?php echo $develop_a_plan->body_content;?>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" class="collapsed">03. Implementation</a>
                          </h4>
                      </div>
                      <div id="collapseThree2" class="panel-collapse collapse">
                          <div class="panel-body">
                              <div class="accordion-content">
                              <?php echo $implementation->body_content;?>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion2" href="#collapseFour2" class="collapsed">04. Monitor Results</a>
                          </h4>
                      </div>
                      <div id="collapseFour2" class="panel-collapse collapse">
                          <div class="panel-body">
                              <div class="accordion-content">
                              <?php echo $monitor_results->body_content;?>
                            </div>
                          </div>
                      </div>
                  </div>
                  </div--> <!-- End panel group -->

          <!--a class="ot-btn midium-btn btn-light btn-read margin-top-20" href="abouts.html#why-choose-us">Read More</a>
                </div>
            </div>

             </div--> <!-- End Col -->
            <!--/div>
         </div--> <!-- End Row -->
    <!--/section--> <!-- End container -->
    <!-- Testimonial 3 column -->
    <section class="bg-grey">
      <div class="container">
        <div class="row">
    <div class="col-md-12 col-center m-auto">
      <h2 class="text-center">Happy Clients</h2>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
          
          <?php
            $i = 0; 
            foreach($home_testimonials AS $key=>$row) {
            $defaultClass = "";
            if($i == 0) {
            $defaultClass = "active";
            }
          ?>
          <div class="item carousel-item <?php echo $defaultClass;?>">
            <div class="img-box"><img src="<?php echo $row->image_path;?>"  alt="<?php echo $row->name;?>"></div>
            <p class="testimonial"><?php echo $row->intro;?></p>
            <p class="overview"><b><?php echo $row->name;?></b></p>
          </div>
          <?php
              $i++; 
              } 
          ?>
          
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div><!-- End row -->
   <a href="<?php echo base_url(); ?>testimonials" class="mid-btn  btn-main-color default-size-btn margin-top-40" >Read More</a>
      </div><!-- End container -->
    </section><!-- End section -->

    <!-- Component Progress Bar -->
    <section class="no-padding">
        <div class="container">
          <div class="row">
              <div class="overflow-hidden">
                    <div class="col-md-6 col-lg-6 padding-top-70 padding-bottom-35">
                      <div class=" bar-chart-container " style="text-align:justify">
                        <h2 class="clearfix">Our Commitment</h2>

                        <?php echo $our_commitment->body_content;?>

                        <div class="chart-2 chart-2-v">
                            <div style="" class="chart-v-item">

                                <span class="percent-v update-v"></span>
                                <div class="progress  vertical bottom progress-v">
                                    <div class="progress-bar bar-chart" role="progressbar" data-transitiongoal="85"></div>
                                </div>
                                <span class="label-v">PRODUCTS</span>
                            </div>
                            <div style="" class="chart-v-item">

                                <span class="percent-v update-v"></span>
                                <div class="progress  vertical bottom progress-v">
                                    <div class="progress-bar bar-chart" role="progressbar" data-transitiongoal="90"></div>
                                </div>
                                <span class="label-v">FLEXIBILITY</span>
                            </div>
                            <div style="" class="chart-v-item">

                                <span class="percent-v update-v"></span>
                                <div class="progress  vertical bottom progress-v">
                                    <div class="progress-bar bar-chart" role="progressbar" data-transitiongoal="100"></div>
                                </div>
                                <span class="label-v">ACCESSABILITY</span>
                            </div>
                            <div style="" class="chart-v-item">

                                <span class="percent-v update-v"></span>
                                <div class="progress  vertical bottom progress-v">
                                    <div class="progress-bar bar-chart" role="progressbar" data-transitiongoal="100"></div>
                                </div>
                                <span class="label-v">TRANSPARENCY</span>
                            </div>


                        </div> <!-- End chart -->
                      </div> <!-- End chart container -->
                    </div> <!-- End col -->
                    <div class="col-sm-4 col-md-6 col-lg-6 hidden-xs thumbs-img-for-chart ">
                          <img src="<?php echo base_url(); ?>assets/frontend/images/Commitment/1.png" class="img-responsive" alt="Image">
                    </div> <!-- End row -->
              </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!-- Section Text 3 Column-->
    <section class="bg-grey">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">

                      <h2 class="title">We Make It Easy</h2>
                      <div class="clearfix"></div>
                      <div class="row">
                        <div class="three-column-text clearfix">
                          <div class="col-md-4">
                            <div class="make-easy-item">
                               <h4>Whatsoever</h4>
                               <p>Whatsoever your financial needs are -You need guidance or consultation, looking for long term or short term investments, insurances, loans, etc., we are here for you. Just give us a shout out and we will be glad to help you! </p>
                            </div>
                          </div><!-- end col -->
                          <div class="col-md-4">
                            <div class="make-easy-item">
                              <h4>Wherever</h4>
                              <p>It does not matter in which part of the world you are in! Wherever you are, we will serve you with best of or abilities. We have invested in technology to serve our customers spread across five continents. So, the distance does not matter, we remain just a call/message way.
</p>
                            </div>
                          </div><!-- end col -->
                          <div class="col-md-4">
                            <div class="make-easy-item">
                              <h4>Whenever</h4>
                              <p>We understand that emergencies can take place at any point of time - day or night, weekday or a weekend. Whenever such incidents happen, feel free to call us. We will be by your side for your financial needs, so one burden is off your shoulder. </p>
                            </div>
                          </div><!-- end col -->
                        </div> <!-- End 3 column text -->


                      </div><!-- End row -->
                  </div><!-- End col12 -->
              </div><!-- End row -->
            </div><!-- End Container -->
    </section><!-- End Section -->

    

     <!-- Component Our Experts Owl -->
     <!-- TEAM SECTION COME HERE START -->
     <!-- TEAM SECTION COME HERE END -->
    <!-- End container -->



    <!-- Component Our Partners Owl -->
    <section>
          <div class="container">
             <div class="row">
               <div class=" col-sm-12 col-md-12 col-lg-12">
                  <h2 class="title">Our Partners</h2>
              <div class="customNavigation">
                <a class="btn prev-partners"><i class="fa fa-angle-left"></i></a>
                <a class="btn next-partners"><i class="fa fa-angle-right"></i></a>
              </div><!-- End owl button -->

              <div id="owl-partners" class="owl-carousel owl-theme owl-partners clearfix">
                <?php foreach($home_brand AS $key=>$row) { 
                ?>
                  <div class="item">
                      <a href="<?php echo base_url(); ?>partners">
                        <img src="<?php echo $row->image_path ?>" class="img-responsive" alt="Image">
                      </a>
                  </div>
                <?php } ?>
                
               </div>

              </div><!-- End row partners -->
             </div><!-- End Row -->
          </div>
    </section><!-- End Section -->

