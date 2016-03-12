<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>
<?php $this->load->view('template/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lihat Data Daerah
            <small>Administrasi Anggota Pemuda Persis</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php base_url(''); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Lihat Data Daerah</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Lihat Data Daerah</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div class="dataTable_wrapper">
                            <table id="data_pc" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Kode PD</th>
                                        <th>Kode PW</th>
                                        <th>PD</th>
                                        <th>PW</th>
                                        <th>No Kontak</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($a as $data_pd) { ?>
                                        <tr>
                                            <td><img src="<?php echo base_url('/assets/foto/pc/' . $data_pd->foto); ?>" class="img-responsive img-rounded center-block" width="150"></td>
                                            <td><?php echo $data_pd->kd_pd; ?></td>
                                            <td><?php echo $data_pd->kd_pw; ?></td>
                                            <td><?php echo $data_pd->pd; ?></td>
                                            <td><?php echo $data_pd->pw; ?></td>
                                            <td><?php echo $data_pd->no_kontak; ?></td>
                                            <td><?php echo $data_pd->email; ?></td>
                                            <td>
                                                <a href="<?php echo site_url() ?>profil/pd_details/<?php echo $data_pd->kd_pd; ?>" title="Lihat Detail">
                                                    <span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
                                                <a href="#" title="Tambah Foto">
                                                    <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                                                </a>
                                                <a href="<?php echo site_url() ?>profil/pd_edit/<?php echo $data_pd->kd_pd; ?>" title="Edit Data">
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
                                        <th>Kode PD</th>
                                        <th>Kode PW</th>
                                        <th>PD</th>
                                        <th>PW</th>
                                        <th>No Kontak</th>
                                        <th>Email</th>
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
       $('#data_pc').DataTable({
           "scrollX": true
       });
   });
</script>
<?php $this->load->view('template/jscripts'); ?>
<?php $this->load->view('template/footer'); ?>