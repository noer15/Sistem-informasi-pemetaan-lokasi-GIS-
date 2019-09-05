                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Edit Location
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <form action="<?php echo site_url('admin/location/aksi_edit'); ?>" method="post">
                                            <div class="col-lg-12 col-md-12">
                                            	<?php echo $map['html']; ?>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Latitude </label>
                                                    <input id="latitude" value="<?php echo $lokasi->latitude; ?>" type="text" required readonly class="form-control" name="latitude" />
                                                    <input  value="<?php echo $lokasi->id_lokasi; ?>" type="hidden" class="form-control" name="id_lokasi" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Longitude </label>
                                                    <input value="<?php echo $lokasi->longitude; ?>" id="longitude" type="text" readonly required class="form-control" name="longitude" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Nama Lokasi</label>
                                                    <textarea required name="nama_lokasi" class="form-control"><?php echo $lokasi->nama_lokasi; ?></textarea>
                                                </div>
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
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJGxbuldQVV1qodn-Ge3uSqoe7rWRg8vk"
  type="text/javascript"></script>