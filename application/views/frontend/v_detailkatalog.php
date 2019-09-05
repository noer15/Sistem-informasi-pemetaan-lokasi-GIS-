        <div class="page-content">
            <div class="container">
                <div class="row">
                    <center>
                        
                            <h3><?php echo $material->nama_material; ?></h3>
                        

                        <p>
                            <?php echo $material->cirifisik_material; ?>
                        </p>
                    </center>
                        

                        <br />
                    <div class="col-md-6">
                        <img src="<?php echo base_url('uploads/original/'.$material->gambar_material); ?>" alt=""/>
                    </div>
                         <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table">

                                <thead>
                                    <tr>
                                        <th>material detail</th>
                                        <th>keterangan</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Nama material</td>
                                        <td><?php echo $material->nama_material; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td><?php echo "Rp ".number_format($material->harga,0,'.','.');?>/m<sup>3</sup></td>
                                    </tr>
                                    <tr>
                                        <td>Ukuran material</td>
                                        <td><?php echo $material->ukuran_material; ?> cm</td>
                                    </tr>
                                    <tr>
                                        <td>Warna material</td>
                                        <td><?php echo $material->warna_material; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kegunaan material</td>
                                        <td><?php echo $material->kegunaan_material ?></td>
                                    </tr>
                                    <tr>
                                        <td>No tlp</td>
                                        <td><?php echo $materials->telp_supplier ?></td>
                                    </tr>
                                </tbody>
                            </table><!-- .table end -->
                        </div><!-- .table-responsive end -->
                        <br />
                    <label class="control-label">Berapa yang anda butuhkan (m<sup>3</sup>)</label><br/>
                    <p style="display: none;">harga: <input id="harga" type="text" value="<?php echo $material->harga; ?>"></p>
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

                            <!-- <label class="control-label">Berapa yang anda butuhkan (m<sup>3</sup>)</label><br/> <--><br>
                    <button id="hitung">Cek Harga</button>
                    <button id="cek">Cek barang</button>
                   
                    
                    <br /><br />
                    <p style="display: none;color: red;font-size: large;" id="info"></p>
                    <p style="display: none;color: blue;font-size: large;" id="out"></p>


                    </div><!-- .col-md-9 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->   