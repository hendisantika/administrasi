<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>
<?php $this->load->view('template/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Data User
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
                <h3 class="box-title">Form Edit Data User</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <!--<form class="form-horizontal" action="registrasi/post">-->
            <?php echo form_open_multipart('user/update',array('class' => 'form-horizontal'));?>
                <div class="box-body">
                    <img class="img-responsive img-rounded center-block" src="<?php echo base_url('/assets/foto/users/' . $foto); ?>" width="150"><br />
                    <div class="form-group">
                        <label for="npa" class="col-sm-2 control-label">NPA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="npa" name="npa" value="<?php echo $npa ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $username ?>" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $password ?>" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>" placeholder="Nama Lengkap" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pw" class="col-sm-2 control-label">PW</label>
                        <div class="col-sm-10">
                            <select name="prov" class="form-control" id="provinsi">
                                <option>- Pilih Provinsi -</option>
                                <?php
                                foreach ($provinsi as $prov) {
                                    if($prov->id == $pw){                                        
                                        echo '<option value="' . $prov->id . '"selected label="' . $prov->nama . '" >' . $prov->nama . '</option>';
                                    }else{
                                        echo '<option value="' . $prov->id . '" label="' . $prov->nama . '" >' . $prov->nama . '</option>';
                                    }
                                }
                                ?> 
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pd" class="col-sm-2 control-label">PD</label>
                        <div class="col-sm-10">
                            <select name="kab" class="form-control" id="kabupaten">
                                <option value=''>- Pilih Kabupaten -</option>
                                <?php
                                foreach ($kabupaten as $kab) {
                                    if($kab->id == $pd){                                        
                                        echo '<option value="' . $kab->id . '"selected label="' . $kab->nama . '" >' . $kab->nama . '</option>';
                                    }else{
                                        echo '<option value="' . $kab->id . '" label="' . $kab->nama . '" >' . $kab->nama . '</option>';
                                    }
                                }
                                ?> 
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pc" class="col-sm-2 control-label">PC</label>
                        <div class="col-sm-10">
                            <select name="kec" class="form-control" id="kecamatan">
                                <option>- Pilih  Kecamatan -</option>
                                <?php
                                foreach ($kecamatan as $kec) {
                                    if($kec->id == $pc){                                        
                                        echo '<option value="' . $kec->id . '"selected label="' . $kec->nama . '" >' . $kec->nama . '</option>';
                                    }else{
                                        echo '<option value="' . $kec->id . '" label="' . $kec->nama . '" >' . $kec->nama . '</option>';
                                    }
                                }
                                ?> 
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="desa" class="col-sm-2 control-label">Desa</label>
                        <div class="col-sm-10">
                            <select name="des" class="form-control" id="desa">
                                <option>- Pilih Desa -</option>
                                <?php
                                foreach ($deso as $ds) {
                                    if($ds->id == $desa){                                        
                                        echo '<option value="' . $ds->id . '"selected label="' . $ds->nama . '" >' . $ds->nama . '</option>';
                                    }else{
                                        echo '<option value="' . $ds->id . '" label="' . $ds->nama . '" >' . $ds->nama . '</option>';
                                    }
                                }
                                ?> 
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pj" class="col-sm-2 control-label">PJ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pj" name="pj" value="<?php echo $pj ?>" placeholder="Pimpinan Jama'ah">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat ..."><?php echo $alamat ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="email" value="<?php echo $email ?>" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no_telpon" class="col-sm-2 control-label">Nomor Telepon</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="no_telpon" name="no_telpon" value="<?php echo $no_telpon ?>" pattern=".{9,14}" required title="9 to 14 characters" placeholder="Nomor Telpon">
                        </div>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputFile" class="col-sm-2 control-label">Foto Antum</label>
                        <div class="col-sm-10">
                            <input type="file" id="exampleInputFile" name="foto" size="20" accept="image/" value="<?php echo base_url('/assets/foto/users/' . $foto); ?>">
                            <p class="help-block">Pilih Foto Avatar antum!</p>
                        </div>
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-block btn-light btn-lg btn-info pull-right" name="submit">Update</button>
                </div><!-- /.box-footer -->
            <?php echo form_close();?>
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
	$(document).on('ready', function() {
		$("#foto").fileinput({
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
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $("#file-0").fileinput({
        'allowedFileExtensions' : ['jpg', 'png','gif'],
    });
    $("#file-1").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
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
    $(".btn-warning").on('click', function() {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });    
    $(".btn-info").on('click', function() {
        $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
    });
    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
    });
	</script>

<?php $this->load->view('template/jscripts'); ?>
<?php $this->load->view('template/footer'); ?>