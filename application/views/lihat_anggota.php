<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>
<?php $this->load->view('template/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lihat Data Anggota
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
                <h3 class="box-title">Lihat Data Anggota</h3>
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
                                        <th>Nama Lengkap</th>
                                        <th>PW</th>
                                        <th>PD</th>
                                        <th>PC</th>
                                        <th>Desa</th>
                                        <th>PJ</th>
                                        <th>Email</th>
                                        <th>Nomor Telpon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($a as $data_anggota) { ?>
                                        <tr>
                                            <td><img src="<?php echo base_url('/assets/foto/anggota/' . $data_anggota->foto); ?>" class="img-responsive img-rounded center-block" width="150"></td>
                                            <td><?php echo $data_anggota->npa; ?></td>
                                            <td><?php echo $data_anggota->nama; ?></td>
                                            <td><?php echo $data_anggota->pw; ?></td>
                                            <td><?php echo $data_anggota->pd; ?></td>
                                            <td><?php echo $data_anggota->pc; ?></td>
                                            <td><?php echo $data_anggota->desa; ?></td>
                                            <td><?php echo $data_anggota->pj; ?></td>
                                            <td><?php echo $data_anggota->email; ?></td>
                                            <td><?php echo $data_anggota->no_telpon1; ?></td>
                                            <td>
                                                <a href="<?php echo site_url() ?>anggota/details/<?php echo $data_anggota->npa; ?>" title="Lihat Detail">
                                                    <span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
                                                <a href="#" title="Tambah Foto">
                                                    <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                                                </a>
                                                <a href="<?php echo site_url() ?>anggota/edit/<?php echo $data_anggota->npa; ?>" title="Edit Data">
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span>
                                                </a>  
                                                <?php if ($this->session->level == 'admin') { ?>
                                                <a href="<?php echo site_url() ?>anggota/delete/<?php echo $data_anggota->npa; ?>" title="Hapus Data" 
                                                   onclick ="if (!confirm('Apakah Anda yakin akan menghapus data ini?'))
                                                               return false;">
                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"> </span>
                                                </a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Foto</th>
                                        <th>NPA</th>
                                        <th>Nama Lengkap</th>
                                        <th>PW</th>
                                        <th>PD</th>
                                        <th>PC</th>
                                        <th>Desa</th>
                                        <th>PJ</th>
                                        <th>Email</th>
                                        <th>Nomor Telpon</th>
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
<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet" >
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js'); ?>"></script>
<!--<script src="<?php echo base_url('assets/datatables-responsive/js/dataTables.responsive.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/css/dataTables.responsive.css'); ?>"></script>-->
<link href="<?php echo base_url('assets/datatables/tools/css/dataTables.tableTools.css'); ?>" rel="stylesheet">
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