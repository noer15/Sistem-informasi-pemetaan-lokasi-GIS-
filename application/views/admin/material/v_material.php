                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <ul class="list-group">
                                <li class="list-group-item"><a class="btn btn-default" role="button" href="<?php echo site_url('admin/material/tambah'); ?>">Tambah Material</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tabel Materian
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>Gambar</th>
                                                    <th>Nama Material</th>
                                                    <th>Kategori</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($material as $row) {?>
                                                 <tr>
                                                    <td width="90"> <a class="btn btn-default btn-sm" role="button" href="<?php echo site_url('admin/material/edit/'.$row->id_material); ?>"><i class="glyphicon glyphicon-pencil"></i></a><span> </span><a class="btn btn-default btn-sm" role="button" href="<?php echo site_url('admin/material/hapus/'.$row->id_material); ?>"><i class="glyphicon glyphicon-trash"></i></a></td>
                                                    <td class="col-md-3">
                                                        
                                                            <img src="<?php echo base_url('uploads/original/'.$row->gambar_material); ?>" class="img-thumbnail img-responsive col-md-5">
                                                        
                                                        </td>
                                                    <td><?php echo $row->nama_material; ?></td>
                                                    <td><?php echo $row->nama_kategori; ?></td>
                                                    <!-- <td><?php echo "Rp ".number_format($row->harga,0,'.','.');?>/m<sup>3</sup></td> -->
                                                </tr>
                                            <?php
                                            } ?>
                                               
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