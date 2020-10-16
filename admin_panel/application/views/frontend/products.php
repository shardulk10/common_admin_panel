<!-- Section Header Title -->
    <section class="bg-grey padding-top-45 padding-bottom-45 clearfix">
      <div class="container">
          <div class="row">
            <div class="section-title">
              <div class="col-md-12">
                <h2>Products</h2>
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
                    <li class="active">Products</li>
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

                <div class="row">

                  <div class="col-md-12 v-block">
                        <div class="v-block-detail" style="text-align:justify;">
                           <?php echo $products_full_content->body_content;?>
                        </div>
                  </div>  <!--  End col -->
                  <!--div class="col-md-12 v-block">
                         <h3>Income Statement</h3>
                          <div class="v-block-detail">
                           <?php echo $products_full_content->body_content;?>
                          </div>
                  </div--> <!-- End col -->


                  <!-- End col -->

                </div><!-- End v-block -->
            </div>

        </div><!-- End Row -->

      </div><!-- End container -->
    </section><!--  End Section -->
