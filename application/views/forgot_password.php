<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Lupa Password | ANA (Administrasi Anggota Pemuda Persis)</title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/admin_lte/img/pemudapersis.ico');?>" />
        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/font-awesome-4.5.0/css/font-awesome.min.css"); ?>" />

        <link rel="stylesheet" href="<?php echo base_url("assets/others/select2.css"); ?>" />
        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo base_url("assets/fonts/fonts.googleapis.com.css"); ?>" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo base_url("assets/others/ace2.min.css"); ?>" />

        <!--[if lte IE 9]>
        <link rel="stylesheet" href="assets/css/ace-part2.min.css" />
        <![endif]-->
        <link rel="stylesheet" href="<?php echo base_url("assets/others/ace-rtl.min.css"); ?>" />

        <!--[if lte IE 9]>
        <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->
        <style>

            .paypalbox{
                position:relative;
                width:250px;
                height:auto;
                position:fixed;
                bottom:0;
                left:60px;
            }
            .tombolpaypal{
                text-align:center;
                text-decoration:none;
                width:240px;
                height:auto;
                background:#555;
                padding:5px 5px 15px;
                display:none;
            }
            .paypal{
                background:#efefef;
                border:0;
                margin:0 auto;
                padding:5px 18px;
                font-size:18px;
                font-weight:700;
                color:#333;
                text-align:center;
                display:inline-block;
                border-radius:3px;
            }
            .paypal:hover{
                background:#ddd;
            }
            .paypalheader{
                background:#5090c1;
                border-radius:3px 3px 0 0;
                margin:0 auto;
                padding:8px 23px;
                font-size:18px;
                font-weight:700;
                color:#fff;
                text-align:center;
                display:block;
                cursor:pointer;
            }
            .tombolpaypal a{
                text-decoration:none;
            }
            .tombolpaypal p{
                color:#ddd;
                font-size:14px;
                margin:5px 0 10px;
            }

        </style>

    </head>

    <!--<body class="login-layout blur-login" OnLoad="document.login.username.focus();">-->
    <body class="login-layout blur-login">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="ace-icon fa fa-users green"></i>
                                    <span class="red">ANA</span><span class="white">ONLINE</span>
                                </h1>
                                <span class="white"><h5>Administrasi Anggota Pemuda Persis</h5></span>
                            </div>

                            <div class="space-6"></div>
                            <div id="loading" style="text-align: center"></div>
                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <div class="header blue lighter bigger">
                                                <h4>Lupa password antum?</h4>
                                                <h4>No problem kami akan segera mengirimkan password antum.</h4>
                                            </div>
                                            <h4 class="header blue lighter bigger">
                                                <i class="ace-icon fa fa-unlock-alt green"></i>
                                                Silahkan masukkan informasi berikut ini :
                                            </h4>

                                            <div class="space-6"></div>

                                            <?php echo form_open('user/kirim_password'); ?>
                                                <fieldset>
                                                    <?php
                                                    if (validation_errors() || $this->session->flashdata('result_login')) {
                                                        ?>
                                                        <div class="alert alert-error" style="background-color:#dd4b39 !important;">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <strong>Warning!</strong>
                                                            <?php echo validation_errors(); ?> 
                                                            <?php echo $this->session->flashdata('result_login'); ?>
                                                        </div>    
                                                    <?php } ?>

                                                    <div class="form-group">
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text"  name="npa" class="form-control"  placeholder="Masukkan NPA Antum" />
                                                                <i class="ace-icon fa fa-user"></i>
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="email" name="email"  class="form-control" placeholder="Masukkan Email Antum" />
                                                                <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="clearfix">

                                                        <div class="form-group">
                                                            <button name="submit" class="width-50 pull-right btn btn-sm btn-primary">
                                                                <i class="ace-icon fa fa-key"></i>
                                                                <span class="bigger-110">Kirim Password</span>
                                                            </button>
                                                            <div>
                                                            </div>

                                                            <div class="space-4"></div>
                                                            </fieldset>
                                                            <!--</form>-->
                                                            <?php echo form_close(); ?>
                                                            <div class="social-or-login center">
                                                                <span class="bigger-110">Contact Person</span>
                                                            </div>

                                                            <div class="space-6"></div>

                                                            <div class="social-login center">
                                                                <a href="https://www.facebook.com/hendisantika" class="btn btn-primary" target="_blank">
                                                                    <i class="ace-icon fa fa-facebook"></i>
                                                                </a>

                                                                <a href="https://www.twitter.com/hendisantika34" class="btn btn-info" target="_blank">
                                                                    <i class="ace-icon fa fa-twitter"></i>
                                                                </a>

                                                                <a href="https://plus.google.com/u/0/+hendisantika" class="btn btn-danger" target="_blank">
                                                                    <i class="ace-icon fa fa-google-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div><!-- /.widget-main -->

                                                        <div class="toolbar clearfix">
                                                            <div>
                                                                <a href="<?php echo site_url(''); ?>" class="forgot-password-link">
                                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                                    Sudah punya akun? Login di sini
                                                                </a>
                                                            </div>

                                                            <div>
                                                                <a href="<?php echo site_url('user'); ?>" class="user-signup-link">
                                                                    Belum Punya akun? Klik di sini
                                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.widget-body -->
                                                    </div><!-- /.login-box -->

                                                    <div class="navbar-fixed-top align-right">
                                                        <br />
                                                        &nbsp;
                                                        <a id="btn-login-dark" href="#">Dark</a>
                                                        &nbsp;
                                                        <span class="blue">/</span>
                                                        &nbsp;
                                                        <a id="btn-login-blur" href="#">Blur</a>
                                                        &nbsp;
                                                        <span class="blue">/</span>
                                                        &nbsp;
                                                        <a id="btn-login-light" href="#">Light</a>
                                                        &nbsp; &nbsp; &nbsp;
                                                    </div>
                                                    </div>
                                                    </div><!-- /.col -->
                                                    </div><!-- /.row -->
                                                    </div><!-- /.main-content -->
                                                    </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="<?php echo base_url("assets/jQuery/jQuery-2.2.0.min.js"); ?>"></script>
        <script type='text/javascript'>
            jQuery(document).ready(function ($) {
                $('.paypalheader').click(function () {
                    $('.tombolpaypal').slideToggle(500);
                });
            });
        </script>

        <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/jQuery/jquery.validate.min.js"); ?>"></script>

        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement)
                document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>


        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function ($) {
                $(document).on('click', '.toolbar a[data-target]', function (e) {
                    e.preventDefault();
                    var target = $(this).data('target');
                    $('.widget-box.visible').removeClass('visible');//hide others
                    $(target).addClass('visible');//show target
                });
            });

            //you don't need this, just used for changing background
            jQuery(function ($) {
                $('#btn-login-dark').on('click', function (e) {
                    $('body').attr('class', 'login-layout');
                    $('#id-text2').attr('class', 'white');
                    $('#id-company-text').attr('class', 'blue');

                    e.preventDefault();
                });
                $('#btn-login-light').on('click', function (e) {
                    $('body').attr('class', 'login-layout light-login');
                    $('#id-text2').attr('class', 'grey');
                    $('#id-company-text').attr('class', 'blue');

                    e.preventDefault();
                });
                $('#btn-login-blur').on('click', function (e) {
                    $('body').attr('class', 'login-layout blur-login');
                    $('#id-text2').attr('class', 'white');
                    $('#id-company-text').attr('class', 'light-blue');

                    e.preventDefault();
                });

            });
        </script>
    </body>
</html>
