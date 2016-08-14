<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>
<?php $this->load->view('template/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Data Pribadi Anggota
            <small>Administrasi Anggota Pemuda Persis</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php base_url('edit_anggota'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Data Pribadi Anggota</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit Data Pribadi Anggota</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <!--<form class="form-horizontal" action="registrasi/post">-->
            <?php echo form_open_multipart('anggota/update', array('class' => 'form-horizontal')); ?>
            <div class="box-body">
                 <h3 align='center'><span class="label label-info col-sm-12">
                        <i class="fa fa-female"> Data Pribadi</i>
                    </span>
                </h3>
                <hr><br>
                <img class="img-responsive img-rounded center-block" src="<?php echo base_url('/assets/foto/anggota/' . $foto); ?>" width="150"><br />
                <div class="form-group">
                    <label for="npa" class="col-sm-2 control-label">NPA</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="npa" name="npa" value="<?php echo $npa ?>" readonly>
                    </div>
                    <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>" placeholder="Nama Lengkap" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tempat</label>
                    <div class="col-sm-3">
                        <input type="text" name="tempat" class="form-control" value="<?php echo $tempat ?>" placeholder="TEMPAT LAHIR" required>
                    </div>
                    <label class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-2">
                        <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
                            <input type="text" name="tanggal" class="form-control" id="tanggal" value="<?php echo $tanggal_lahir ?>" placeholder="0000-00-00" required>
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status Merital</label>
                    <div class="col-sm-3">
                        <select name="status_merital" class="form-control" id="status_merital" required>
                            <option>- Status Merital -</option>
                            <option value="Single" <?php if ($status_merital == "Single") echo 'selected="selected"'; ?>>Single</option>
                            <option value="Menikah" <?php if ($status_merital == "Menikah") echo 'selected="selected"'; ?>>Menikah</option>
                            <option value="Duda" <?php if ($status_merital == "Duda") echo 'selected="selected"'; ?>>Duda</option>
                        </select>
                    </div>
                    <label for="pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="pekerjaan" value="<?php echo $pekerjaan ?>" placeholder="Pekerjaan" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pw" class="col-sm-2 control-label">PW</label>
                    <div class="col-sm-3">
                        <select name="prov" class="form-control" id="provinsi">
                            <option>- Pilih Provinsi -</option>
                            <?php
                            foreach ($provinsi as $prov) {
                                if ($prov->id == $pw) {
                                    echo '<option value="' . $prov->id . '"selected label="' . $prov->nama . '" >' . $prov->nama . '</option>';
                                } else {
                                    echo '<option value="' . $prov->id . '" label="' . $prov->nama . '" >' . $prov->nama . '</option>';
                                }
                            }
                            ?> 
                        </select>
                    </div>
                    <label for="pd" class="col-sm-2 control-label">PD</label>
                    <div class="col-sm-5">
                        <select name="kab" class="form-control" id="kabupaten">
                            <option value=''>- Pilih Kabupaten -</option>
                            <?php
                            foreach ($kabupaten as $kab) {
                                if ($kab->id == $pd) {
                                    echo '<option value="' . $kab->id . '"selected label="' . $kab->nama . '" >' . $kab->nama . '</option>';
                                } else {
                                    echo '<option value="' . $kab->id . '" label="' . $kab->nama . '" >' . $kab->nama . '</option>';
                                }
                            }
                            ?> 
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pc" class="col-sm-2 control-label">PC</label>
                    <div class="col-sm-3">
                        <select name="kec" class="form-control" id="kecamatan">
                            <option>- Pilih  Kecamatan -</option>
                            <?php
                            foreach ($kecamatan as $kec) {
                                if ($kec->id == $pc) {
                                    echo '<option value="' . $kec->id . '"selected label="' . $kec->nama . '" >' . $kec->nama . '</option>';
                                } else {
                                    echo '<option value="' . $kec->id . '" label="' . $kec->nama . '" >' . $kec->nama . '</option>';
                                }
                            }
                            ?> 
                        </select>
                    </div>
                    <label for="desa" class="col-sm-2 control-label">Desa</label>
                    <div class="col-sm-5">
                        <select name="des" class="form-control" id="desa">
                            <option>- Pilih Desa -</option>
                            <?php
                            foreach ($deso as $ds) {
                                if ($ds->id == $desa) {
                                    echo '<option value="' . $ds->id . '"selected label="' . $ds->nama . '" >' . $ds->nama . '</option>';
                                } else {
                                    echo '<option value="' . $ds->id . '" label="' . $ds->nama . '" >' . $ds->nama . '</option>';
                                }
                            }
                            ?> 
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pj" class="col-sm-2 control-label">PJ</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="pj" name="pj" value="<?php echo $pj ?>" placeholder="Pimpinan Jama'ah" required>
                    </div>
                    <label for="gol_darah" class="col-sm-2 control-label">Golongan Darah</label>
                    <div class="col-sm-5">
                        <select name="gol_darah" class="form-control" required>
                            <option>- Pilih Golongan Darah -</option>
                            <option value="A"  <?php if ($gol_darah == "A") echo "Selected='selected'"?>>A</option>
                            <option value="B"  <?php if ($gol_darah == "B") echo 'selected="selected"'; ?>>B</option>
                            <option value="AB" <?php if ($gol_darah == "AB") echo "Selected='Selected'";?>>AB</option>
                            <option value="O"  <?php if ($gol_darah == "O") echo "Selected='Selected'";?>>O</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat ..." required><?php echo $alamat ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-4">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" id="inputEmail3" name="email" value="<?php echo $email ?>" placeholder="Email">
                    </div>
                    <label for="no_telpon" class="col-sm-1 control-label">Nomor Telepon 1</label>
                    <div class="col-sm-2">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="tel" class="form-control" value="<?php echo $no_telpon1 ?>" name="no_telpon1" pattern=".{9,14}" required title="9 to 14 characters" placeholder="Nomor Telpon">
                    </div>
                    <label for="no_telpon" class="col-sm-1 control-label">Nomor Telepon 2</label>
                    <div class="col-sm-2">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="tel" class="form-control" value="<?php echo $no_telpon2 ?>" name="no_telpon2" pattern=".{9,14}"  placeholder="Nomor Telpon">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="jenis_keanggotaan" class="col-sm-2 control-label">Jenis Keanggotaan</label>
                    <div class="col-sm-3">
                        <select name="jenis_keanggotaan" class="form-control" required>
                            <option>- Jenis Keanggotaan -</option>
                            <option value="Biasa" <?php if ($jenis_keanggotaan == "Biasa") echo "Selected='selected'"?>>Biasa</option>
                            <option value="Tersiar" <?php if ($jenis_keanggotaan == "Tersiar") echo "Selected='selected'"?>>Tersiar</option>
                            <option value="Istimewa" <?php if ($jenis_keanggotaan == "Istimewa") echo "Selected='selected'"?>>Istimewa</option>
                        </select>
                    </div>
                    <label for="tafiq" class="col-sm-2 control-label">Sudah Ikut Tafiq</label>
                    <div class="col-sm-3">
                        <label>
                            <input type="radio" class="flat-red" name="tafiq" value="Sudah" <?php echo ($tafiq == "Sudah") ? 'Checked' : '' ?>  required> Sudah &nbsp;&nbsp;&nbsp;
                            <input type="radio" class="flat-red" name="tafiq" value="Belum" <?php echo ($tafiq == "Belum") ? "Checked" : "" ?> required> Belum &nbsp;&nbsp;&nbsp;
                        </label>
                    </div>
                </div>
<!--                <div class="form-group">
                    <label for="exampleInputFile" class="col-sm-2 control-label">Foto Antum</label>
                    <div class="col-sm-10">
                        <input type="file" id="exampleInputFile" name="foto" size="20" accept="image/" value="<?php echo $foto ?>"><?php echo $foto ?>
                        <p class="help-block">Pilih Foto Avatar antum!</p>
                    </div>
                </div>-->
            </div><!-- /.box-body -->
            <div class="box-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success btn-block btn-lg" name="submit"><i class="fa fa-pencil"> Update</i></button>
                    </div>
                    <!--                    <div class="col-sm-6">
                                            <button type="reset" class="btn btn-info btn-block btn-lg"><i class="glyphicon glyphicon-refresh"> Batal</i></button>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success btn-block btn-lg" name="submit"><i class="fa fa-pencil"> Update</i></button>
                                        </div>-->
                </div>
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
</head>
<script>
    $(document).ready(function () {
        $("#provinsi").change(function () {
            var url = "<?php echo site_url('user/add_ajax_kab'); ?>/" + $(this).val();
            $('#kabupaten').load(url);
            return false;
        })

        $("#kabupaten").change(function () {
            var url = "<?php echo site_url('user/add_ajax_kec'); ?>/" + $(this).val();
            $('#kecamatan').load(url);
            return false;
        })

        $("#kecamatan").change(function () {
            var url = "<?php echo site_url('user/add_ajax_des'); ?>/" + $(this).val();
            $('#desa').load(url);
            return false;
        })
    });
</script>

<!-- File Input -->
<script>
    $(document).on('ready', function () {
        $("#input-21").fileinput({
            previewFileType: "image",
            browseClass: "btn btn-success",
            browseLabel: "Pick Image",
            browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
            removeClass: "btn btn-danger",
            removeLabel: "Delete",
            removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
            uploadClass: "btn btn-info",
            uploadLabel: "Upload",
            uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> "
        });
    });
</script>

<script>
    $('#file-es').fileinput({
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif'],
    });
    $("#file-0").fileinput({
        'allowedFileExtensions': ['jpg', 'png', 'gif'],
    });
    $("#file-1").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
//allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });
    /*
     $(".file").on('fileselect', function(event, n, l) {
     alert('File Selected. Name: ' + l + ', Num: ' + n);
     });
     */
    $("#file-3").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
    });
    $("#file-4").fileinput({
        uploadExtraData: {kvId: '10'}
    });
    $(".btn-warning").on('click', function () {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });
    $(".btn-info").on('click', function () {
        $('#file-4').fileinput('refresh', {previewClass: 'bg-info'});
    });
    $(document).ready(function () {
        $("#test-upload").fileinput({
            'showPreview': false,
            'allowedFileExtensions': ['jpg', 'png', 'gif'],
            'elErrorContainer': '#errorBlock'
        });
    });
</script>

<?php $this->load->view('template/jscripts'); ?>
<?php $this->load->view('template/footer'); ?>