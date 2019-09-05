				<div class="row">
				    <div class="col-lg-6 col-md-6">
				        <div class="panel panel-default">
				            <div class="panel-heading">
				               Form Edit Kategori
				              </div>
				            <div class="panel-body">
				                <form action="<?php echo site_url('admin/kategori/aksi_edit'); ?>" method="post">
				                    <div class="form-group">
				                        <label class="control-label">Nama Kategori</label>
				                        <input value="<?php echo $kategori->id_kategori; ?>" type="hidden" name="id_kategori" required class="form-control" />
				                        <input value="<?php echo $kategori->nama_kategori; ?>" type="text" name="nama_kategori" required class="form-control" />
				                    </div>
				                    <div class="form-group">
				                        <label class="control-label">Harga</label>
				                        <input value="<?php echo $kategori->id_kategori; ?>" type="hidden" name="id_kategori" required class="form-control" />
				                        <input value="<?php echo $kategori->harga; ?>" type="text" name="harga" required class="form-control" />
				                    </div>
				                    <div class="form-group">
				                        <button class="btn btn-default" type="submit">Simpan </button>
				                        <button onclick="window.history.back()" class="btn btn-default" type="button">Batal </button>
				                    </div>
				                </form>
				            </div>
				        </div>
				    </div>
				</div>