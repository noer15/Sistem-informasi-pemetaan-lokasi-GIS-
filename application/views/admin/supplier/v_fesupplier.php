				<div class="row">
				    <div class="col-lg-12 col-md-12">
				        <div class="panel panel-default">
				            <div class="panel-heading">
				               Form Edit Supplier
				              </div>
				            <div class="panel-body">
				                <form action="<?php echo site_url('admin/Supplier/aksi_edit'); ?>" method="post">
				                    <div class="form-group">
				                        <label class="control-label">Nama Supplier</label>
				                        <input required value="<?php echo $supplier->id_supplier; ?>" type="hidden" class="form-control" name="id_supplier" />
				                        <input value="<?php echo $supplier->nama_supplier; ?>" type="text" class="form-control" name="nama_supplier" />
				                    </div>
				                    <div class="form-group">
				                        <label class="control-label">Alamat Supplier</label>
				                        <textarea required class="form-control" name="alamat_supplier"><?php echo $supplier->alamat_supplier; ?></textarea>
				                    </div>
				                    <div class="form-group">
				                        <label class="control-label">Nomor Telepon Supplier</label>
				                        <input required value="<?php echo $supplier->telp_supplier; ?>" type="text" class="form-control" name="telp_supplier" />
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