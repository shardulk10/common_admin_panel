<section class="bg-grey padding-top-45 padding-bottom-45 clearfix">
      <div class="container">
          <div class="row">
            <div class="section-title">
              <div class="col-md-12">
                <h2>Testimonial</h2>
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
                    <li class="active">Testimonial</li>
                  </ol>
             </div><!--  End col -->
          </div> <!-- End Row -->
       </div><!-- End container -->
    </div><!--  End Section -->

    <div class="line"></div>


    <!-- Demo Testimonials 2 Columns -->
    <section >
      <div class="container">
        <div class="row">
          <div class="testimonial-3-colum-demo">

            <?php
              foreach($testimonials AS $key=>$row) {
            ?>
              <div class="col-md-12">
                <div class="item item-testimonials-3-columns text-left">
                    <p class="quote-icon">“</p>
                    <p><i><?php echo $row->intro;?></i></p>
                    <div class="avatar-testimonials-3-columns">
                      <img height="50" width="50" src="<?php echo $row->image_path;?>" class="img-responsive" alt="Image">
                    </div>
                    <h4 class="name-testimonials-3-columns"><?php echo $row->name;?></h4>
                    <!--<span class="job-testimonials-3-columns">CEO Finanace Theme Group</span>-->
                </div><!-- end item -->
              </div>
            <?php
              }
            ?>
          </div>
        </div>
      </div>
    </section>