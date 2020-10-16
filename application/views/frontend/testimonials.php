<style>
#testimonialsiconimage {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.container span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container {
      text-align: center;
  }
  #testimonialsiconimage {
      margin: auto;
      float: none;
      display: block;
  }
}
</style>
	
<!-- Section Header Title -->
    <section class="bg-grey padding-top-45 padding-bottom-45 clearfix">
      <div class="container">
          <div class="row">
            <div class="section-title">
              <div class="col-md-12">
                <h2>Team</h2>
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
                    <li><a href="index.html"> <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li class="active">Team</li>
                  </ol>
             </div><!--  End col -->
          </div> <!-- End Row -->
       </div><!-- End container -->
    </div><!--  End Section -->

    <div class="line"></div>

    

  <div class="container">
        <div class="line"></div>
      </div>
    <!-- Component Our Experts Owl -->
    <section>
          <div class="container">
              <div class="row">
			  
			  
			  <?php
                 foreach($testimonials AS $key=>$row) {
              ?>
			  
			        <div class="team-experts" style="">  
					   <div class="expert-team-container">
			       <div class="col-md-2 col-sm-2 col-xm-2 " style="padding-left: 5px; padding-right: 5px; ">
                          <div class="item">
								  <div class="team">
									<img id="testimonialsiconimage" width="80%" src="<?php echo $row->image_path;?>" alt="<?php echo $row->name;?>">
								  </div>
								   <!--<a href="https://www.linkedin.com/" class="in-experts-team">
									  <i class="fa fa-linkedin"></i>
								  </a>-->
                          </div> <!-- end expert img container -->
                             
                     
                    </div>
				   
				
			       <div class="col-md-10 col-sm-10 col-sm-10" style="padding-left: 5px; padding-right: 5px; border-right: 2px solid #ccc; border-bottom: 2px solid #ccc;background-color: #fff; " >
				    <div class="team-title">
                          <h4 style="margin-bottom: 5px; color: #273269; text-transform: uppercase;"><?php echo $row->name;?></h4>
						  </div>
						  <div class="job-experts-team">
                          <p style="text-align:justify; color:#6d6d6d"><?php echo $row->intro;?>
<p>
						  </div>
				   </div>
			     
                  </div>
              </div>
			  <!--end team expert two -->  
			  <?php
                }
              ?>
              
          </div><!-- End row -->
		  
		  
			      
          </div>
		 
            

		 
		
		  
    </section><!-- End container -->
  