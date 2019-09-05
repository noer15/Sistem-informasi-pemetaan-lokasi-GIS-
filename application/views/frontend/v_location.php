		<div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-heading02">
                            <h2>Lokasi Jaringan Distribusi</h2>
                            <p>
                               KAMI MEMILIKI LOKASI SETIAP BAGIAN DARI HUNAFA
                            </p>
                        </div><!-- .custom-heading02 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->

                <div class="row">
                    <div class="col-md-12">
                        <?php if (isset($map['html'])) {
							echo  $map['html'];
						}; ?>
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->

                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="custom-heading">
                            <h3>Lokasi hunafa</h3>
                        </div><!-- .custom-heading02 end -->

                        <ul class="locations-li">
                            <li>
                                <ul class="fa-ul">
                                <?php foreach ($lokasi as $row) {?>
                                    <li>
                                        <i class="fa fa-li fa-map-marker"></i>
                                        <?php echo $row->nama_lokasi; ?>
                                    </li>
                                <?php } ?> 
                                </ul><!-- .fa-ul end -->
                            </li>
                        </ul><!-- .locations-li end -->
                    </div><!-- .col-md-3 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->