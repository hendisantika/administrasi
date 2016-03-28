<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>

<style>
    .tutorialWrapper{
        width: 100%;
    }
    .tutorialWrapper form{
        background-color: #ffc;
        border: 1px solid #cc9;
        padding: 10px;
        font-family: verdana;
        width: 75%;
        font-size: 1em;
    }
    .fieldWrapper{
        margin: 2px 0 2px 0;
        padding: 2;
    }
    .tutorialWrapper label{
        float: left;
        text-align: right;
        margin: 0 5px 0 0;
        width: 30%;
    }
    .tutorialWrapper input{
        width: 200px;
        border: 1px solid #cc9;
    }
    .confirmMessage{
        margin: 0;
        padding: 0;
        font-size: 1em; 
    }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah User
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
                <h3 class="box-title">Form Input Data User</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <?php echo validation_errors(); ?>
            <?php echo form_open_multipart('user/post', array('class' => 'form-horizontal')); ?>
            <div class="box-body">
                <div class="form-group">
                    <label for="npa" class="col-sm-2 control-label">NPA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="npa" name="npa" placeholder="NPA" maxlength="7" pattern="[0-9]{2}[.][0-9]{4}" required title="Silahkan mengisi NPA dengan benar. Contoh : 03.1042">
                        <label id="msgNPA"></label>
                        <span id="ldgNP"><img src="<?php echo base_url(); ?>assets/others/loader.gif" alt="Ajax Indicator" /></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" minlength="6" maxlength="15" placeholder="Username" autofocus pattern="[a-zA-Z0-9]+" required title="Silahkan mengisi username minimal dengan 6 karakter dan maksimal 15 karakter tanpa spasi">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10 fieldWrapper">
                        <input type="password" class="form-control" id="pass1" name="password" minlength="6" maxlength="15" placeholder="Password" autofocus pattern="[a-zA-Z0-9]+" required title="Silahkan mengisi password minimal dengan 6 karakter dan maksimal 15 karakter tanpa spasi">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Confirmasi Password</label>
                    <div class="col-sm-10 fieldWrapper">
                        <input type="password" class="form-control" id="pass2" onkeyup="checkPass(); return false;" name="pass2" placeholder="Password" required title="Silahkan mengisi password minimal dengan 6 karakter dan maksimal 15 karakter">
                        <span id="confirmMessage" class="confirmMessage"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pw" class="col-sm-2 control-label">PW</label>
                    <div class="col-sm-10">
                        <select name="prov" class="form-control" id="provinsi" required>
                            <option>- Pilih Provinsi -</option>
                            <?php
                            foreach ($provinsi as $prov) {
                                echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pd" class="col-sm-2 control-label">PD</label>
                    <div class="col-sm-10">
                        <select name="kab" class="form-control" id="kabupaten" required>
                            <option value=''>- Pilih Kabupaten -</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pc" class="col-sm-2 control-label">PC</label>
                    <div class="col-sm-10">
                        <select name="kec" class="form-control" id="kecamatan" required>
                            <option>- Pilih  Kecamatan -</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="desa" class="col-sm-2 control-label">Desa</label>
                    <div class="col-sm-10">
                        <select name="des" class="form-control" id="desa" required>
                            <option>- Pilih Desa -</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pj" class="col-sm-2 control-label">PJ</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pj" name="pj" placeholder="Pimpinan Jama'ah">
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat ..."></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <!--<input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">-->
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <label id="message"></label>
                        <span id="loading"><img src="<?php echo base_url(); ?>assets/others/loader.gif" alt="Ajax Indicator" /></span> </div>
                </div>
            </div>
            <div class="form-group">
                <label for="no_telpon" class="col-sm-2 control-label">Nomor Telepon</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="no_telpon" name="no_telpon" pattern=".{9,14}" required title="9 to 14 characters" placeholder="Nomor Telpon">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Foto Antum</label>
                <div class="col-sm-10">
                    <!--<input type="file" id="exampleInputFile" name="foto" size="20" accept="image/">-->
                    <input id="foto" type="file" name="foto" accept="image/*" class="file-loading">
                    <p class="help-block">Pilih Foto Avatar antum!</p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <button type="reset" class="btn btn-default" onclick="window.location.href = '/administrasi/auth'">Batal</button>
            <button type="submit" class="btn btn-info pull-right" name="submit">Tambah</button>
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

<script type="text/javascript">
    $(document).ready(function () {
        /// make loader hidden in start
        $('#loading').hide();
        $('#email').blur(function () {
            var email_val = $("#email").val();
            var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
            if (filter.test(email_val)) {
                // show loader
                $('#loading').show();
                $.post("<?php echo site_url() ?>user/cek_akun", {
                    email: email_val
                }, function (response) {
                    $('#loading').hide();
                    $('#message').html('').html(response.message).show().delay(4000).fadeOut();
                });
                return false;
            }
        });
        $('#npa').blur(function () {
            var npa_val = $("#npa").val();
            var filter = /([0-9]{2}[.][0-9]{4})$/g;
            if (filter.test(npa_val)) {
                // show loader
                $('#ldgNPA').show();
                $.post("<?php echo site_url() ?>user/cek_akun", {
                    npa: npa_val
                }, function (response) {
                    $('#ldgNPA').hide();
                    $('#msgNPA').html('').html(response.message).show().delay(4000).fadeOut();
                });
                return false;
            }
        });

    });
</script>

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
            uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> ",
            showUpload: false,
            overwriteInitial: false,
            maxFileSize: 2000
        });
    });
</script>

<!--Cek Password-->
<script type="text/javascript">

    function checkPass()
    {
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('pass1');
        var pass2 = document.getElementById('pass2');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field 
        //and the confirmation field
        if (pass1.value == pass2.value) {
            //The passwords match. 
            //Set the color to the good color and inform
            //the user that they have entered the correct password 
            pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Passwords cocok!"
        } else {
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
//        document.oo.pass2.focus();
            pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Passwords tidak cocok!"
        }
    }
</script>

<?php $this->load->view('template/footer'); ?>