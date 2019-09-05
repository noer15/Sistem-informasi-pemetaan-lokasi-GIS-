                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Setting User Administrator</h3></div>
                            <div class="panel-body">
                                <form action="<?php echo site_url('admin/login/aksi_edit'); ?>" method="post">
                                    <div class="form-group">
                                        <label class="control-label">Username </label>
                                        <input type="text" name="username" required class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Password </label>
                                        <input type="password" name="password" class="form-control" required />
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