		<div id="footer-wrapper" class="footer-dark">
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <li class="widget widget-text">
                                <div class="title">
                                    <h3>contact us</h3>
                                </div>

                                <address>
                                    Jl. Raya Sunan Gunung Jati No 66<br />
                                   Desa Pasindangan Kecamatan Jamblang Kabupaten Cirebon
                                </address>

                                <span class="text-big">
                                     +62 81 312 702 005
                                </span>
                                <br />

                                <!-- <a href="mailto:">www.dumptrek.com</a> -->
                                <br />
                                <ul class="footer-social-icons">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul><!-- .footer-social-icons end -->
                            </li><!-- .widget.widget-text end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>Kebijakan</h3>
                                </div>

                                <ul>
                                    <li><a href="<?php echo site_url('home/privasi') ?>">Kebijakan Privacy</a></li>
                                </ul>
                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </footer><!-- #footer end -->

            <div class="copyright-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>HUNAFA 2018</p>
                        </div><!-- .col-md-6 end -->

                        
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div><!-- .copyright-container end -->

            <a href="#" class="scroll-up">Scroll</a>
        </div><!-- #footer-wrapper end -->

        <script src="<?php echo base_url('assets'); ?>/js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
        <script src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script><!-- .bootstrap script -->
        <script src="<?php echo base_url('assets'); ?>/js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->  
        <script src="<?php echo base_url('assets'); ?>/owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
        <script src="<?php echo base_url('assets'); ?>/js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
        <script src="<?php echo base_url('assets'); ?>/js/include.js"></script><!-- custom js functions -->
        <script src="<?php echo base_url('assets'); ?>/js/jquery.matchHeight-min.js"></script><!-- for columns with background image -->
        <script src="<?php echo base_url('assets'); ?>/js/jquery.nivo.slider.pack.js"></script><!-- Nivo slider script -->
        <script src="<?php echo base_url('assets'); ?>/multiple-select.js"></script>

        <script>
            $(function() {
                $('#ms').change(function() {
                    console.log($(this).val());
                }).multipleSelect({
                    width: '100%'
                });
            });
        </script>

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                $('#client-carousel').owlCarousel({
                    items: 6,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        600: {
                            items: 3,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        1000: {
                            items: 6,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true
                        }
                    }
                });
            });
            /* ]]> */
        </script>

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                function equalHeight() {
                    $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
                        var maxHeight = $(this).outerHeight();
                        $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
                    });
                };
                
                $(document).ready(equalHeight);
                $(window).resize(equalHeight);

                $('#client-carousel').owlCarousel({
                    items: 6,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        600: {
                            items: 3,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        1000: {
                            items: 6,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true
                        }
                    }
                });
            });
            /* ]]> */
        </script>
 

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                $('#slider-1').nivoSlider({
                    controlNav: false
                });
            });
            /* ]]> */
        </script>

        <script>
            function toRp(angka){
                var rev     = parseInt(angka, 10).toString().split('').reverse().join('');
                var rev2    = '';
                for(var i = 0; i < rev.length; i++){
                    rev2  += rev[i];
                    if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
                        rev2 += '.';
                    }
                }
                return 'Rp ' + rev2.split('').reverse().join('');
            }

            $(document).ready(function(){
                $("#cek").click(function(){
                    var luas = $("#luas").val();
                    var jumlah = $("#jumlah").val();
                    var total = (luas * 34 + jumlah *24 );
                    $("#out").text("Jumlah Material: "+total + " Genteng");
                    $("#out").show();
                });
            });

          $(document).ready(function(){
                $("#hitung").click(function(){
                    var harga = $("#harga").val();
                    var luas = $("#luas").val();
                    var jumlah = $("#jumlah").val();
                    var total = toRp(harga * luas *34 + harga*jumlah*24);
                    $("#info").text("Harga total: "+total);
                    $("#info").show();
                });
            });


          
        </script>

        <?php if ($this->session->flashdata('pesan') !== null ) {?>
        <script type="text/javascript">
            alert("<?php echo $this->session->flashdata('pesan'); ?>");
        </script>
        <?php } ?>
       