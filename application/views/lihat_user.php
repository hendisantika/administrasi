<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>
<?php $this->load->view('template/sidebar'); ?>

<style>
    .pilih:hover{
        cursor: pointer;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lihat Data User
            <small>Administrasi Anggota Pemuda Persis</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php base_url('lihat_user'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Lihat Data User</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Lihat Data User</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="panel-body">
                    <div class="table-responsive">
        <div class="dataTable_wrapper">
                    <table id="data_user" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>NPA</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Desa</th>
                                <th>PJ</th>
                                <th>PC</th>
                                <th>PD</th>
                                <th>PW</th>
                                <th>Email</th>
                                <th>Nomor Telpon</th>
                                <th>Registration Date</th>
                                <th>Last Login</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($u as $data_user) { ?>
                            <tr class="pilih">
                                    <td><img src="<?php echo base_url('assets/foto/users/' .$data_user->foto); ?>" class="img-responsive img-rounded center-block" width="150"></td>
                                    <td><?php echo $data_user->npa; ?></td>
                                    <td><?php echo $data_user->username; ?></td>
                                    <td><?php echo $data_user->nama; ?></td>
                                    <td><?php echo $data_user->desa; ?></td>
                                    <td><?php echo $data_user->pj; ?></td>
                                    <td><?php echo $data_user->pc; ?></td>
                                    <td><?php echo $data_user->pd; ?></td>
                                    <td><?php echo $data_user->pw; ?></td>
                                    <td><?php echo $data_user->email; ?></td>
                                    <td><?php echo $data_user->no_telpon; ?></td>
                                    <td><?php echo $data_user->reg_date; ?></td>
                                    <td><?php echo $data_user->last_login; ?></td>
                                    <td><?php echo $data_user->level; ?></td>
                                    <td>
                                        <a href="<?php echo site_url() ?>user/details/<?php echo $data_user->npa;?>" title="Lihat Detail">
                                            <span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
                                        <a href="#" title="Tambah Foto">
                                            <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                                        </a>
                                        <a href="<?php echo site_url() ?>user/edit/<?php echo $data_user->npa;?>" title="Edit Data">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span>
                                        </a>  
                                        <a href="#" title="Hapus Data" 
                                           onclick ="if (!confirm('Apakah Anda yakin akan menghapus data ini?'))
                                                       return false;">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"> </span>
                                        </a>
                                    </td>
                                </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Foto</th>
                                <th>NPA</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Desa</th>
                                <th>PJ</th>
                                <th>PC</th>
                                <th>PD</th>
                                <th>PW</th>
                                <th>Email</th>
                                <th>Nomor Telpon</th>
                                <th>Registration Date</th>
                                <th>Last Login</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>

                    </table>
                </div><!-- box-body -->

            </div><!-- box -->
        </div><!-- panel-body -->
                </div> <!-- panel-body  -->
                </div> <!-- panel-body --> 
    </section><!-- right col -->
</div><!-- box -->

<script type="text/javascript" src="<?php echo base_url('assets/jQuery/jquery-1.12.0.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css'); ?>">
<script src="<?php echo base_url('assets/datatables-responsive/js/dataTables.responsive.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables-responsive/css/dataTables.responsive.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/tools/css/dataTables.tableTools.css'); ?>">
<script src="<?php echo base_url('assets/datatables/tools/js/dataTables.tableTools.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.min.js'); ?>"></script>

<script>
       $(document).ready(function () {
           $('#data_user').DataTable({
               "scrollX": true
           });
       });
</script>
<?php $this->load->view('template/jscripts'); ?>
<?php $this->load->view('template/footer'); ?>