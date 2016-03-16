<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>
<?php $this->load->view('template/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Foto Anggota
            <small>Administrasi Anggota Pemuda Persis</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php base_url('Dashboard1'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit Foto Anggota</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open_multipart('anggota/update_foto', array('class' => 'form-horizontal')); ?>
            <div class="box-body">
                <img class="img-responsive img-rounded center-block" src="<?php echo base_url('/assets/foto/anggota/' . $foto); ?>" width="150"><br />
                <div class="form-group">
                    <label for="npa" class="col-sm-2 control-label">NPA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="npa" name="npa" value="<?php echo $npa ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>" placeholder="Nama Lengkap" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Foto Antum</label>
                    <div class="col-sm-10">
                        <input id="foto" type="file" name="foto" accept="image/*" class="file-loading">
                        <p class="help-block">Pilih Foto Avatar antum!</p>
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-block btn-light btn-lg btn-info pull-right" name="submit">Update</button>
            </div><!-- /.box-footer -->
            <?php echo form_close(); ?>
        </div><!-- /.box -->
    </section><!-- right col -->
</div><!-- /.box -->
<script src="<?php echo base_url('assets/jQuery/jQuery-2.2.0.min.js'); ?>"></script>
<link href="<?php echo base_url('assets/fileinput/css/fileinput.css'); ?>" media="all" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url('assets/fileinput/js/fileinput.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/fileinput/js/fileinput_locale_LANG.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/fileinput/js/fileinput_locale_es.js'); ?>" type="text/javascript"></script>
<!--</head>-->

<!-- File Input -->
<script>
    $(document).on('ready', function () {
        $("#foto").fileinput({
            showCaption: false,
            previewFileType: "Image",
            browseClass: "btn btn-success",
            browseLabel: "Pilih Foto Antum",
            browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
            removeClass: "btn btn-danger",
            removeLabel: "Delete",
            removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
            uploadClass: "btn btn-info",
            uploadLabel: "Upload",
            uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i>"
        });
    });
</script>

<?php $this->load->view('template/jscripts'); ?>

<link href="<?php echo base_url('assets/fileinput/css/fileinput.css'); ?>" media="all" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url('assets/fileinput/js/fileinput.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/fileinput/js/fileinput_locale_LANG.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/fileinput/js/fileinput_locale_es.js'); ?>" type="text/javascript"></script>

<?php $this->load->view('template/footer'); ?>