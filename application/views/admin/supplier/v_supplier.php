                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <ul class="list-group">
                                <li class="list-group-item"><a class="btn btn-default" role="button" href="<?php echo site_url('admin/supplier/tambah'); ?>">Tambah Supplier</a>
                                <a class="btn btn-default" role="button" target="_blank" href="<?php echo site_url('welcome_pdf/cetak_supplier'); ?>" >Print Suplier</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tabel Supplier
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>Nama Supplier</th>
                                                    <th>Alamat Supplier</th>
                                                    <th>Nomor Telepon Supplier</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($supplier as $row) {?>
                                                 <tr>
                                                    <td width="90"><a class="btn btn-default btn-sm" role="button" href="<?php echo site_url('admin/supplier/edit/'.$row->id_supplier); ?>"><i class="glyphicon glyphicon-pencil"></i></a><span> </span><a class="btn btn-default btn-sm" role="button" href="<?php echo site_url('admin/supplier/hapus/'.$row->id_supplier); ?>"><i class="glyphicon glyphicon-trash"></i></a></td>
                                                    <td><?php echo $row->nama_supplier; ?></td>
                                                    <td><?php echo $row->alamat_supplier ?></td>
                                                    <td><?php echo $row->telp_supplier; ?></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->