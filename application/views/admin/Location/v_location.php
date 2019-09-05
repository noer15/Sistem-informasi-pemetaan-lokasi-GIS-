                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <ul class="list-group">
                                <li class="list-group-item"><a class="btn btn-default" role="button" href="<?php echo site_url('admin/location/tambah'); ?>">Tambah Location</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tabel Location
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>Latitude</th>
                                                    <th>Longitude</th>
                                                    <th>Nama Lokasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($lokasi as $row) {?>
                                                 <tr>
                                                    <td width="90"><a class="btn btn-default btn-sm" role="button" href="<?php echo site_url('admin/location/edit/'.$row->id_lokasi); ?>"><i class="glyphicon glyphicon-pencil"></i></a><span> </span><a class="btn btn-default btn-sm" role="button" href="<?php echo site_url('admin/location/hapus/'.$row->id_lokasi); ?>"><i class="glyphicon glyphicon-trash"></i></a></td>
                                                    <td><?php echo $row->latitude; ?></td>
                                                    <td><?php echo $row->longitude ?></td>
                                                    <td><?php echo $row->nama_lokasi; ?></td>
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
                    