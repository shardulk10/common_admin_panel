<section class="bg-grey padding-top-45 padding-bottom-45 clearfix">
      <div class="container">
          <div class="row">
            <div class="section-title">
              <div class="col-md-12">
                <h2>Our Partners</h2>
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
                    <li class="active">Our Partners</li>
                  </ol>
             </div><!--  End col -->
          </div> <!-- End Row -->
       </div><!-- End container -->
    </div><!--  End Section -->

    <div class="line"></div>

      <!-- Component Isotope Project -->
    <section>
            <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="section-isotope-project-4-column">

                        <div class="row">
                          <div class="clearfix projectContainer projectContainer4column">
                               <?php foreach($brands AS $key=>$row) { ?>          
                                 <div class="element-item">
                                  <a class="img-contain-isotope" href="#">
                                    <img src="<?php echo $row->image_path ?>" class="img-responsive" alt="Image">
                                  </a>
                                   <a href="#"> <h5 class="title-project"><?php echo $row->name; ?></h5> </a>
  							                 </div>
                               <?php } ?>
                          </div>  <!-- End project Container -->
                        </div>
                      </div> <!-- End  -->
                    </div><!-- End Col -->
                  </div><!-- End Row -->

            </div> <!-- End Container -->
    </section><!-- End Section -->