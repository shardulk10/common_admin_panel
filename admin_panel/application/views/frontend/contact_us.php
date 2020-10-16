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

?>
<!-- Section Header Title -->
    <section class="bg-grey padding-top-45 padding-bottom-45 clearfix">
      <div class="container">
          <div class="row">
            <div class="section-title">
              <div class="col-md-12">
                <h2>Contact</h2>
              </div>
            </div>
          </div><!-- End Row -->
      </div><!-- End container -->

    </section><!--  End Section -->
    <!-- Section BreadCrumb -->
    <div class="no-padding border-bottom">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                 <ol class="breadcrumb breadcrumb-finance">
                    <li><a href="<?php echo base_url(); ?>"> <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li class="active">Contact</li>
                  </ol>
             </div><!--  End col -->
          </div> <!-- End Row -->
       </div><!-- End container -->
    </div><!--  End Section -->

    <div class="line"></div>

    <!-- Section form contact -->
    <section class="padding-top:50px;">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 left-contact">
    				<h4> Send Us a Message</h4>
          				<form class="form-inline form-contact-finance" name="contactusform" method="post">
            					<div class="row">
        							  <div class="form-group col-sm-12  col-md-4">
        							    <input type="text" class="form-control" name="name" id="yourName" placeholder="Your Name" required>
        							  </div>
        							  <div class="form-group col-sm-12 col-md-4">
        							    <input type="email" class="form-control" name="email" id="yourEmail" placeholder="Your Email" required>
        							  </div>
        							  <div class="form-group col-sm-12 col-md-4">
        							    <input type="text" class="form-control" name="phone" id="phoneNumber" placeholder="Phone Number" required>
        							  </div>
      						    </div>
      						    <div class="input-content">
        						  	<div class="form-group form-textarea">
        					  			<textarea id="textarea" class="form-control" name="comments" rows="6" placeholder="Your Messages" ></textarea>
        						  	</div>
        						  </div>
                      <button  type="submit" name="sbtContactUsForm" value="sbtContactUsForm" class="ot-btn large-btn btn-rounded  btn-main-color btn-submit">Send Mail</button>
      					 </form> <!-- End Form -->
    			</div> <!-- End col -->
    			<div class="col-md-4 right-contact">
    				<h4>Contact Info</h4>
    				<p>
    					You can contact us for inquiries or requests that require a more personal response, 
    				</p>
    				<ul class="address">
    					<li><p><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp; <?php echo $address;?></p></li>
    					<li><p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp; <?php echo $phone;?></p></li>
    					<li><p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp; <?php echo $email;?></p></li>
    					<li><p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp; Mon-Fri 09:00 - 17:00</p></li>
    				</ul>
    			</div> <!-- End col -->
    		</div>
    	</div>
    </section>
    <!-- End Section -->
   	<!-- Section Google Map -->
   	<div class="no-padding ">
   		<div id="map-canvas" class="margin-top-15"></div>
   	</div>
   	<!-- End Section -->


