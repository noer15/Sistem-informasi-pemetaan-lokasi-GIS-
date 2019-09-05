			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo site_url('admin/material'); ?>">Hunafa</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a target="_blank" href="<?php echo site_url('home'); ?>"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('nama'); ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?php echo site_url('admin/login/setting'); ?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('admin/login/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            
                            <li>
                                <a href="<?php echo site_url('admin/kategori') ?>"><i class="fa fa-tags fa-fw"></i> Kategori</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/supplier') ?>"><i class="fa fa-user-plus fa-fw"></i> Supplier</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/material'); ?>"><i class="fa fa-briefcase fa-fw"></i> Material</a>
                            </li>
                            
                            <li>
                                <a href="<?php echo site_url('admin/partner') ?>"><i class="fa fa-users fa-fw"></i> Partnership</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/location') ?>"><i class="fa fa-map-marker fa-fw"></i> Location</a>
                            </li>
                          <!--   <li>
                                <a href="<?php echo site_url('admin/bisnis') ?>"><i class="fa fa-briefcase fa-fw"></i> Bisnis</a>
                            </li> -->
                            
                            
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            