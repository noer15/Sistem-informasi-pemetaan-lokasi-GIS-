                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Form Edit Material
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <form enctype="multipart/form-data" action="<?php echo site_url('admin/material/aksi_edit'); ?>" method="post">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Material</label>
                                                    <input value="<?php echo $material->nama_material; ?>" type="text" name="nama_material" required autocomplete="on" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Kategori </label>
                                                    <?php echo form_dropdown('id_kategori', $kategori, $material->id_kategori,'class="form-control" id="kategori" name="id_kategori" required'); ?>
                                                </div>
                                                <script type="text/javascript">

                                                    $('#kategori').change(function(){
                                                        var id = $('#kategori').val();
                                                        $.ajax({
                                                            url: '<?=site_url()?>/admin/material/getharga/'+id,
                                                        }).done(function(response){
                                                            $('#harga').val(response);
                                                        });
                                                    })
                                                </script>
                                                <div class="form-group">
                                                    <label class="control-label">Harga</label>
                                                    <input value="<?php echo $material->harga; ?>" id="harga" type="number" name="harga" required class="form-control" />
                                                </div>
                                                <div class="form-group"></div>
                                                <div class="form-group">
                                                    <label class="control-label">Ciri-ciri Fisik</label>
                                                    <textarea name="cirifisik_material" required class="form-control"><?php echo $material->cirifisik_material; ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Ukuran </label>
                                                    <input value="<?php echo $material->ukuran_material; ?>" type="text" name="ukuran_material" required class="form-control" />
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Kegunaan </label>
                                                    <textarea name="kegunaan_material" required class="form-control"><?php echo $material->kegunaan_material; ?></textarea>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="control-label">Supplier </label>
                                                    <?php echo form_dropdown('id_supplier', $supplier, $material->id_supplier,'class="form-control" required'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Warna </label>
                                                    <input value="<?php echo $material->warna_material; ?>" type="text" name="warna_material" required class="form-control" />
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9">
                                                        <div class="form-group">
                                                            <label class="control-label">Foto Material</label>
                                                            <input type="file" name="userfile" accept="image/*" />
                                                            <p class="help-block">Upload foto type .jpg .png .jpeg. </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group">
                                                            <a href="<?php echo base_url('uploads/original/'.$material->gambar_material); ?>" target="_blank"> <img src="<?php echo base_url('uploads/original/'.$material->gambar_material); ?>" class="img-thumbnail img-responsive" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input value="<?php echo $material->id_material; ?>" type="hidden" name="id" class="form-control" />

                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <button class="btn btn-default" type="submit">Simpan </button>
                                                    <button onclick="window.history.back()" class="btn btn-default" type="button">Batal</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>