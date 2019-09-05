                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <ul class="list-group">
                                <li class="list-group-item"><a class="btn btn-default" role="button" href="<?php echo site_url('admin/partner/tambah'); ?>">Tambah Partner</a>
                                    <a class="btn btn-default" role="button" target="_blank" href="<?php echo site_url('welcome_pdf/cetak_partner'); ?>" >Print Partner</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tabel Partner
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Nama Perusahaan</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($partner as $row) {?>
                                                 <tr>
                                                    <td width="90"><a class="btn btn-default btn-sm" role="button" href="<?php echo site_url('admin/partner/edit/'.$row->id_partner); ?>"><i class="glyphicon glyphicon-pencil"></i></a><span> </span><a class="btn btn-default btn-sm" role="button" href="<?php echo site_url('admin/partner/hapus/'.$row->id_partner); ?>"><i class="glyphicon glyphicon-trash"></i></a></td>
                                                    <td><?php echo $row->nama_partner; ?></td>
                                                    <td><?php echo $row->nama_perusahaan ?></td>
                                                    <td><?php echo $row->email_partner; ?></td>
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