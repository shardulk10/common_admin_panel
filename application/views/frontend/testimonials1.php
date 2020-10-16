<style>
.team-title h4 {
	display: block;
	width: 100%;
	font-family: 'Lato', sans-serif;
	font-size: 25px;
	font-weight: 600;
	letter-spacing: 0.5px;
	/* color: #333; */
	color: #333;
    margin-bottom: 20px;
	text-align: inherit;
}
    
  .team-experts {
	width: 100%;
	max-width: 100%;
	margin-bottom: 40px;
	display: block;
	position: relative;
	border-bottom: 1px dotted #c6c5c5;
}  
   
 .item {
	width: 100%;
	height: 100%;
	position: relative;
	display: block;
	margin-bottom: 20px;
}   
    
    
 .job-experts-team p {
	font-family: 'Lato', sans-serif;
	font-size: 15px;
	font-weight: 400;
	/* color: #333; */
	color: #4d4c4c;
	margin-bottom: 20px;
}
    
   .expert-team-container .job-experts-team:before {
	content: "\f10d";
	font-family: Fontawesome;
	font-size: 51px;
	color: rgba(210, 210, 210, 0.44);
	width: 40px;
	height: 40px;
	position: relative;
	float: left;
	text-align: left;
	top: 19px;
	margin-right: 20px;
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
			  
			        <div class="team-experts">  
					   <div class="expert-team-container">
			       <div class="col-md-3 col-sm-3 col-xm-3 ">
                          <div class="item">
								  <div class="team">
									<img width="80%" src="<?php echo $row->image_path;?>" alt="<?php echo $row->name;?>">
								  </div>
								   <!--<a href="https://www.linkedin.com/" class="in-experts-team">
									  <i class="fa fa-linkedin"></i>
								  </a>-->
                          </div> <!-- end expert img container -->
                             
                    <div class="clearfix"></div>  
                    </div>
				   
				
			       <div class="col-md-10 col-sm-6 col-sm-6">
				    <div class="team-title">
                          <h4 style="margin-bottom: 5px;"><?php echo $row->name;?></h4>
						  </div>
						  <div class="job-experts-team">
                          <p style="text-align:justify"><?php echo $row->intro;?>
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
  