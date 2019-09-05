        <div class="page-content">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="custom-heading">
                            <h3>Kemudahan mendapatkan pesanan</h3>
                        </div><!-- .custom-heading.left end -->

                        <p>
                            Banyak konsumen kamu yang sulit menemukan lokasi pemesananmu, sulit mendapatkan nomer Hpmu, serta sulit melangkahkan kaki datang ke lokasimu. Mereka lebih senang membuka google untuk bertanya tentang lokasi galian di sekitar mereka. Sayangnya, banyak saingan kamu yang lebih melek internet sehingga mempunyai website  bahkan memasang SEO untuk mempromosikan lahan galiannya. Maka kamu kalah oleh sainganmu. Dan kamu Cuma gigit jari melihat puluhan truck telah mendapatkan muatan dari lahan saingan kamu.
                            Kalo kamu gabung di sini, kamu tidak perlu khawatir tidak mendapatkan pesanan, bahkan kamu tidak perlu repot berkomunikasi dengan konsumen kami, serahkan saja pada kami, kamu custom-headingnya perlu siapkan material dan cari pengemudi yang kamu percayai pada aplikasi kami.

                        </p>

                        <br />

                        <div class="custom-heading">
                            <h3>Kemudahan menyaring pengemudi terbaik</h3>
                        </div><!-- .custom-heading.left end -->

                        <p>
                            Seringkali kamu membawakan kubikasi yang tepat sesuai dengan pesanan konsumen, namun ada pengemudi yang menjual sebagian secara pribadi dalam perjalanan antara toko kamu dengan tempat konsumen. Sehingga konsumen kamu komplen dan kamu harus mengganti kekurangannya. Di sini kamu mendapatkan kerugian karena tidak mengetahui integritas pengemudi dumptruck kamu. 
                            Dumptrek memiliki data pengemudi sekitar kamu yang telah teruji integritasnya melalui penilaian langsung oleh konsumen. Sehingga kami akan memilihkan pengemudi dumptruck  sekitar kamu yang bisa kamu percayai dan memiliki kehandalan sebagai sopir. 

                        </p>

                        <br />

                         <div class="custom-heading">
                            <h3>Galian dikirim tepat waktu</h3>
                        </div><!-- .custom-heading.left end -->

                        <p>
                            Urugan kamu telah siap keluar dari toko kamu, tapi masalahnya jalan raya padat merayap, maka dipastikan barang kamu sampai ke konsumen dengan terlambat. Kami  memiliki sistem yang dapat memberikan rute tercepat dengan lebar jalan yang cukup untuk dumptruck.
                        </p>

                        <br />

                         <div class="custom-heading">
                            <h3>Mengoptimalkan kepuasan konsumen</h3>
                        </div><!-- .custom-heading.left end -->

                        <p>
                           Kami berorientasi pada kepuasan konsumen karena jika konsumen puas, maka usaha kamu akan langgeng. Jika kamu memiliki visi yang sama, cepat gabung di sini.
                        </p>

                        <br />

                        
                       
                    </div><!-- .col-md-6 end -->


                    <div class="col-md-6 clearfix">
                        <!-- .contact form start -->
                        <form action="<?php echo site_url('hunafa/partner/aksi_tambah'); ?>" method="post" class="wpcf7">
                            <fieldset>
                                <label>
                                    <span class="required">*</span> Kebutuhaan Material:
                                </label>

                                <select name="kebutuhan_partner[]" required id="ms" multiple="multiple">
                                <?php foreach ($partner as $row) {?>
                                    <option value="<?php echo $row->nama_material; ?>"><?php echo $row->nama_material; ?></option>
                                    <?php } ?>
                                </select>
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Nama Lengkap:
                                </label>

                                <input name="nama_partner" required type="text" class="wpcf7-text">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Nama Perusahaan:
                                </label>

                                <input name="nama_perusahaan" required type="text" class="wpcf7-text">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Email:
                                </label>

                                <input name="email_partner" required type="text" class="wpcf7-text">
                            </fieldset>
                            <fieldset>
                                <label>
                                    <span class="required">*</span> No Hp:
                                </label>

                                <input name="nohp_partner" required type="text" class="wpcf7-text">
                            </fieldset>
                           

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Alamat:
                                </label>

                                <textarea name="alamat_partner" required rows="8" class="wpcf7-textarea"></textarea>
                            </fieldset>

                            <input type="submit" class="wpcf7-submit" value="send" />
                        </form><!-- .wpcf7 end -->
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->