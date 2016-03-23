<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Informasi Kirim Password User via email
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
            <?php echo form_open('', array('class' => 'form-horizontal')); ?>
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Dzikro!</h4>
                
                <p>Syukron Katsiron</p>
                <p>
                    Alhamdulillahirobbil 'alamin.
                </p>
                <p>Password antum (User) telah berhasil terkirim.</p>
                <p>Silahkan cek password anda di email yg telah kami kirimkan ke <a href="mailto:<?php echo $forgot['email'] ?>?Subject=Lupa%20Password" target="_top"><?php echo $forgot['email'] ?></a> !</p>
                <p>Kemudian silahkan login dengan username dan password yang telah dikirimkan tadi.</p>
                <h1>Anda akan diarahkan ke halaman login dalam waktu <span id="waktu">10</span> detik</h1>
            </div><!-- /.box-body -->
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

<?php $this->load->view('template/jscripts'); ?>
<script>
    $(document).ready(function () {
        window.setInterval(function () {
            var sisawaktu = $("#waktu").html();
            var base_url = window.location.origin;
            sisawaktu = eval(sisawaktu);
            if (sisawaktu === 0) {
                location.href = base_url + "/administrasi/auth/";
            } else {
                $("#waktu").html(sisawaktu - 1);
            }
        }, 1000); // 10 Detik
    });
</script>
<style type="text/css">
    body {
        font-size:12pt;
        font-family:verdana;
        background-color:cyan;
    } 
    #waktu {
        font-size:25pt;
        color:red;
    }
</style>

<?php $this->load->view('template/footer'); ?>