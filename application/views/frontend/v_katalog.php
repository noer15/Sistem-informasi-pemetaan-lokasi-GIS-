        <div class="page-content custom-bkg bkg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-heading02">
                            <h2>Katalog</h2>
                            <p>MATERIAL YANG KAMI SEDIAKAN</p>
                        </div><!-- .custom-heading02 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->

                <div class="row">
                <?php foreach ($material as $row) {?>
                    <div class="col-md-3 col-sm-3">
                        <div class="service-feature-box">
                            <div class="service-media">
                                <img src="<?php echo base_url('/uploads/thumbs_material/'.$row->gambar_material); ?>" alt="Trucking"/>

                                <a href="<?php echo site_url('hunafa/katalog/detail_katalog/'.$row->id_material) ?>" class="read-more02">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div><!-- .service-media end -->

                            <div class="service-body">
                                <div class="custom-heading">
                                    <h6><?php echo $row->nama_material; ?></h6>
                                </div><!-- .custom-heading end -->
                                <span></span>
                            </div><!-- .service-body end -->
                        </div><!-- .service-feature-box-end -->
                    </div><!-- .col-md-4 end -->
                    <?php } ?>
                    <!-- end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->       
