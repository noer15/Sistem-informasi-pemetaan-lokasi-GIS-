                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Tambah Material
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <form enctype="multipart/form-data" action="<?php echo site_url('admin/material/aksi_tambah'); ?>" method="post">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Material</label>
                                                    <input type="text" name="nama_material" required autocomplete="on" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Kategori </label>
                                                    <select class="form-control" id="kategori" name="id_kategori">
                                                        <option>Pilih Kategori</option>
                                                        <?php foreach($kategori as $kt): ?>
                                                            <option value="<?=$kt->id_kategori?>"><?=$kt->nama_kategori?></option>
                                                        <?php endforeach; ?>
                                                    </select>
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
                                                    <input type="number" name="harga" id="harga" required class="form-control" />
                                                </div>
                                                <div class="form-group"></div>
                                                <div class="form-group">
                                                    <label class="control-label">Ciri-ciri Fisik</label>
                                                    <textarea name="cirifisik_material" required class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Ukuran </label>
                                                    <input type="text" name="ukuran_material" required class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Warna </label>
                                                    <input type="text" name="warna_material" required class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Kegunaan </label>
                                                    <textarea name="kegunaan_material" required class="form-control"></textarea>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="control-label">Supplier </label>
                                                    <?php echo form_dropdown('id_supplier', $supplier,'','class="form-control" required'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Foto Material</label>
                                                    <input type="file" name="userfile" required accept="image/*" />
                                                    <p class="help-block">Upload foto type .jpg .png .jpeg. </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <button class="btn btn-default" type="submit">Simpan </button>
                                                    <button class="btn btn-default" onclick="window.history.back()" type="button">Batal</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               