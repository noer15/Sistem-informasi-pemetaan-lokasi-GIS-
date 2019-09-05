				<div class="row">
                    <div class="col-lg-12 col-md-12">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a class="btn btn-default" role="button" href="<?php echo site_url('admin/kategori/tambah'); ?>">Tambah Kategori</a>
                                <a class="btn btn-default" role="button" href="<?php echo site_url('welcome_pdf/cetak_kategori'); ?>" target="_blank">Print Kategori</a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tabel Kategori
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>Nama Kategori</th>
                                                <th>Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($kategori as $key => $row) {?>
                                            <tr>
                                                <td width="90"> <a class="btn btn-default btn-sm" role="button" href="<?php echo site_url('admin/kategori/edit/'.$row->id_kategori); ?>"><i class="glyphicon glyphicon-pencil"></i></a><span> </span><a class="btn btn-default btn-sm" role="button" href="<?php echo site_url('admin/kategori/hapus/'.$row->id_kategori); ?>"><i class="glyphicon glyphicon-trash"></i></a></td>
                                                <td><?php echo $row->nama_kategori; ?></td>
                                                <td>Rp. <?php echo number_format($row->harga,0,'.','.');  ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->