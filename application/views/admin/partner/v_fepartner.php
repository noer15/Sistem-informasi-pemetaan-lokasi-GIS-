                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Edit Partner
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="<?php echo site_url('admin/partner/aksi_edit'); ?>">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Lengkap</label>
                                                    <input value="<?php echo $partner->nama_partner; ?>" type="text" name="nama_partner" class="form-control" required />
                                                    <input value="<?php echo $partner->id_partner; ?>" type="hidden" name="id_partner" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Nama Perusahaan</label>
                                                    <input value="<?php echo $partner->nama_perusahaan; ?>" type="text" name="nama_perusahaan" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Email </label>
                                                    <input value="<?php echo $partner->email_partner; ?>" type="text" name="email_partner" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Kebutuhan Material</label>
                                                    <textarea name="kebutuhan_partner" class="form-control" required><?php echo $partner->kebutuhan_partner; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">No Hp </label>
                                                    <input value="<?php echo $partner->nohp_partner; ?>" type="text" name="nohp_partner" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Alamat </label>
                                                    <textarea name="alamat_partner" class="form-control" required><?php echo $partner->alamat_partner; ?></textarea>
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