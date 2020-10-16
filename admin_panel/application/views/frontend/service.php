<!-- Section Header Title -->
    <section class="bg-grey padding-top-45 padding-bottom-45 clearfix">
      <div class="container">
          <div class="row">
            <div class="section-title">
              <div class="col-md-12">
                <h2>Our services</h2>
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
                    <li class="active">Our Services</li>
                  </ol>
             </div><!--  End col -->
          </div> <!-- End Row -->
       </div><!-- End container -->
    </div><!--  End Section -->

    <div class="line"></div>

    <!--Services Detail -->
    <section class="padding-top-50">
      <div class="container">
        <div class="row">

            <div class="col-md-12 services-detail-content">


                <div class="h-block">

                    <div class="row">
                      <div class="col-sm-6 col-md-7" style="text-align:justify">
                            <?php echo $service_content->body_content;?>
                      </div>
                      <div class="col-sm-6 col-md-5 ">

					    <img src="<?php echo base_url(); ?>assets/frontend/images/Services/detail.jpg" class="img-responsive img-header-detail" alt="Image">

                          <div class="brochures-download ">
                            <p>DOWNLOAD BROCHURES</p>
                            <button type="button" class="btn btn-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> DownloadFile.pdf</button>
                            <button type="button" class="btn btn-download"><i class="fa fa-file-word-o" aria-hidden="true"></i> DownloadFile.pdf</button>
                          </div>
                      </div>
                    </div><!-- End row -->
                </div><!-- End H-block -->
                <div class="row">

                  <div class="col-md-12 v-block">
                        <div class="v-block-detail" style="text-align:justify;">
                           <?php echo $service_para_2->body_content;?>
                        </div>
                  </div>  <!--  End col -->
                  <!--div class="col-md-12 v-block">
                         <h3>Income Statement</h3>
                          <div class="v-block-detail">
                           <?php echo $service_para_3->body_content;?>
                          </div>
                  </div--> <!-- End col -->


                  <!-- End col -->

                </div><!-- End v-block -->
            </div>

        </div><!-- End Row -->

      </div><!-- End container -->
    </section><!--  End Section -->
