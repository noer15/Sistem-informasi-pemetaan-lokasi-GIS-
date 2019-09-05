        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-heading">
                            <h3>HUNAFA FOR BUSINESS</h3>
                        </div><!-- .custom-heading.left end -->

                        <p>
                            Kamu butuh urugan banyak? Kami pasti punya.
                            Buat kamu yang harus mengerjakan urugan puluhan hektar, segera daftar sebagai konsumen bisnis kami agar kamu mendapatkan komitmen kami untuk selalu mengadakan sejumlah barang yang kamu butuhkan. 

                        </p>

                        <br />

                        <div class="custom-heading">
                            <h4>Pembayaran kolektif dan transparan</h4>
                        </div><!-- .custom-heading end -->
                         <p>
                                Let say kamu punya kebutuhan 10 truck masing-masing 4 meter kubik, 
                                maka kamu hanya perlu membayar down payment senilai 3 truck, 
                                maka kami akan mengirim 10 truck ke tempat kamu. Kami akan memberi tahu setiap barang akan dimuat untuk dikirim ke tempat kamu. 
                            </p>

                         <div class="custom-heading">
                            <h4>Berikan rewards kepada pengemudi yang sopan dan jujur</h4>
                        </div><!-- .custom-heading end -->
                            <p>
                                Kamu harus memberikan rewards kepada pengemudi yang mengantar ke tempat kamu supaya kami mengetahui pengemudi mana yang bisa memberikan pelayanan terbaik serta jujur dalam bekerja.
                            </p>
                       
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6 clearfix">
                        <!-- .contact form start -->
                       
                            <fieldset>
                                <label>
                                    <span class="required">*</span> Kebutuhan Material:
                                </label>

                                <select name="kebutuhan_konsumen[]" required id="ms" multiple="multiple">
                                <?php foreach ($bisnis as $row) {?>
                                    <option value="<?php echo $row->harga; ?>" id="harga"><?php echo $row->harga; ?>|<?php echo $row->nama_kategori; ?></option>
                                    <?php } ?>
                                </select>
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Luas Bangunan:
                                </label>

                                <input id="luas" required type="number" class="wpcf7-text">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Luas Teras:
                                </label>

                                <input id="jumlah" required type="number" class="wpcf7-text">
                            </fieldset>

                            <label class="control-label">Berapa yang anda butuhkan (m<sup>3</sup>)</label><br/>
                    <button id="hitung">Cek Harga</button>
                   
                    
                    <br /><br />
                    <p style="display: none;color: red;font-size: large;" id="info"></p>

                            
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->