<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>
<?php $this->load->view('template/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lihat Data Detail User
            <small>Administrasi Anggota Pemuda Persis</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php base_url('lihat_user_details'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Lihat Data Details User</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Detail Data User</h3>
            </div><!-- /.box-header -->
            <img class="img-responsive img-rounded center-block" src="<?php echo base_url('/assets/foto/users/' . $record['foto']); ?>" width="150"><br />
            <table  class="table table-striped">
                <tr>
                    <th width="25%">NPA</th>
                    <td><?php echo $record['npa'] ?></td>
                </tr>
                <tr>
                    <th width="25%">Username</th>
                    <td><?php echo $record['username'] ?></td>
                </tr>
                <tr>
                    <th width="25%">Nama Lengkap</th>
                    <td><?php echo $record['nama'] ?></td>
                </tr>
                <tr>
                    <th width="25%">PW</th>
                    <td><?php echo $record['pw'] ?></td>
                </tr>
                <tr>
                    <th width="25%">PD</th>
                    <td><?php echo $record['pd'] ?></td>
                </tr>
                <tr>
                    <th width="25%">PC</th>
                    <td><?php echo $record['pc'] ?></td>
                </tr>
                <tr>
                    <th width="25%">Desa</th>
                    <td><?php echo $record['desa'] ?></td>
                </tr>
                <tr>
                    <th width="25%">PJ</th>
                    <td><?php echo $record['pj'] ?></td>
                </tr>
                <tr>
                    <th width="25%">E-mail</th>
                    <td><?php echo $record['email'] ?></td>
                </tr>
                <tr>
                    <th width="25%">No Telpon</th>
                    <td><?php echo $record['no_telpon'] ?></td>
                </tr>
                <tr>
                    <th width="25%">Alamat</th>
                    <td><?php echo $record['alamat'] ?></td>
                </tr>
                <tr>
                    <th width="25%">Registration Date</th>
                    <td><?php echo $record['reg_date'] ?></td>
                </tr>
                <tr>
                    <th width="25%">Last Login</th>
                    <td><?php echo $record['last_login'] ?></td>
                </tr>
                <tr>
                    <th width="25%">Level</th>
                    <td><?php echo $record['level'] ?></td>
                </tr>
            </table>
            <div class="box-footer">
                <a href="<?php echo site_url() ?>user/edit/<?php echo $record['npa'];?>" class="btn btn-block btn-primary btn-lg">Edit Data User</a>
            </div><!-- /.box-footer -->
        </div><!-- /.box -->
    </section><!-- right col -->
</div><!-- /.box -->
<script type="text/javascript" src="<?php echo base_url('assets/jQuery/jquery-1.12.0.min.js'); ?>"></script>
<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet" >
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/js/dataTables.responsive.js'); ?>"></script>
<!--<script src="<?php echo base_url('assets/datatables-responsive/css/dataTables.responsive.css'); ?>"></script>-->
<link href="<?php echo base_url('assets/datatables/tools/css/dataTables.tableTools.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/datatables/tools/js/dataTables.tableTools.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.min.js'); ?>"></script>

<script>
    $(document).ready(function () {
        $('#data_user').DataTable({
            //          "dom": "Bfrtip",  
            "buttons": ['copy', 'excel', 'pdf'],
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            "scrollX": true
        });
    });
</script>

<?php $this->load->view('template/jscripts'); ?>
<?php $this->load->view('template/footer'); ?>