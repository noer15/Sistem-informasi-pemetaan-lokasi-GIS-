                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Edit Bisnis
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="<?php echo site_url('admin/bisnis/aksi_edit'); ?>">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Lengkap</label>
                                                    <input value="<?php echo $bisnis->nama_konsumen; ?>" type="text" name="nama_konsumen" class="form-control" required />
                                                    <input value="<?php echo $bisnis->id_konsumen; ?>" type="hidden" name="id_konsumen" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Nama Perusahaan</label>
                                                    <input value="<?php echo $bisnis->nama_perusahaan; ?>" type="text" name="nama_perusahaan" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Email </label>
                                                    <input value="<?php echo $bisnis->email_konsumen; ?>" type="text" name="email_konsumen" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Kebutuhan Material</label>
                                                    <textarea name="kebutuhan_konsumen" class="form-control" required><?php echo $bisnis->kebutuhan_konsumen; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Alamat </label>
                                                    <textarea name="alamat_konsumen" class="form-control" required><?php echo $bisnis->alamat_konsumen; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button class="btn btn-default" type="submit">Simpan </button>
                                                    <button onclick="window.history.back()" class="btn btn-default" type="button">Batal </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>