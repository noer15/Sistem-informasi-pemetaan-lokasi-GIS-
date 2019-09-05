				<div class="row">
				    <div class="col-lg-6 col-md-6">
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                Form Tambah Kategori
				              </div>
				            <div class="panel-body">
				                <form action="<?php echo site_url('admin/kategori/aksi_tambah'); ?>" method="post">
				                    <div class="form-group">
				                        <label class="control-label">Nama Kategori</label>
				                        <input type="text" name="nama_kategori" required class="form-control" />
				                    </div>
				                    <div class="form-group">
				                        <label class="control-label">Harga</label>
				                        <input type="text" name="harga" required class="form-control" />
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