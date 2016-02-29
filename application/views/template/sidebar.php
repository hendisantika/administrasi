
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/admin_lte/img/avatar5.png'); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <!--<p>Hendi Santika</p>-->
                <p><?php echo $this->session->nama; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> 
                        <span>Dashboard</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url('/dashboard1');?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="<?php echo base_url('/dashboard2');?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-users"></i>
                    <span>Data Anggota</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('anggota');?>"><i class="fa fa-user-plus"></i> Input Data Anggota</a></li>
                    <li><a href="<?php echo base_url('anggota/lihat_anggota');?>"><i class="glyphicon glyphicon-eye-open"></i> Lihat Data Anggota</a></li>
                    <li><a href="<?php echo base_url('jamiyyah');?>"><i class="glyphicon glyphicon-eye-open"></i> Tes Lookup</a></li>
                    <li><a href="<?php echo base_url('anggota/ganti_foto');?>"><i class="glyphicon glyphicon-eye-open"></i> Ganti Foto</a></li>
                    <li><a href="<?php echo base_url('anggota/ganti_foto2');?>"><i class="glyphicon glyphicon-eye-open"></i> Ganti Foto2</a></li>
                </ul>
            </li>
            <?php if ($this->session->level == 'admin') { ?>
            <li>
                <a href="<?php echo base_url('user/lihat_user/');?>">
                    <i class="glyphicon glyphicon-user"></i> <span>Data User</span>
                </a>
            </li>
            <?php } ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Data Jam'iyyah</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('jamiyyah/pj');?>"><i class="fa fa-circle-o"></i> Data Monografi PJ</a></li>
                    <li><a href="<?php echo base_url('jamiyyah/pc');?>"><i class="fa fa-circle-o"></i> Data Monografi PC</a></li>
                    <li><a href="<?php echo base_url('jamiyyah/pd');?>"><i class="fa fa-circle-o"></i> Data Monografi PD</a></li>
                    <li><a href="<?php echo base_url('jamiyyah/performa_pc');?>"><i class="fa fa-circle-o"></i> Indeks Performa PC</a></li>
                    <li><a href="<?php echo base_url('jamiyyah/performa_pd');?>"><i class="fa fa-circle-o"></i> Indeks Performa PD</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-area-chart"></i> <span>Profil</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('jamiyyah/tab');?>"><i class="fa fa-circle-o"></i> Tabs</a></li>
                    <li><a href="<?php echo base_url('profil/lihat_pj');?>"><i class="fa fa-circle-o"></i> Pimpinan Jama'ah (PJ)</a></li>
                    <li><a href="<?php echo base_url('profil/lihat_pc');?>"><i class="fa fa-circle-o"></i> Pimpinan Cabang (PC)</a></li>
                    <li><a href="<?php echo base_url('profil/lihat_pd');?>"><i class="fa fa-circle-o"></i> Pimpinan Daerah (PD)</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="pages/calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <small class="label pull-right bg-red">3</small>
                </a>
            </li>
            <li>
                <a href="pages/mailbox/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <small class="label pull-right bg-yellow">12</small>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>