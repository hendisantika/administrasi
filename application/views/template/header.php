<?php 
     header("Cache-Control: private, max-age=10800, pre-check=10800");
     header("Pragma: private");
     header("Expires: " . date(DATE_RFC822,strtotime("+2 day")));
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Administrasi Pemuda Persis | Dashboard</title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/admin_lte/img/pemudapersis.ico'); ?>" />
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome-4.5.0/css/font-awesome.min.css'); ?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url('assets/ionicons-2.0.1/css/ionicons.min.css'); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin_lte/css/AdminLTE.min.css'); ?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin_lte/css/skins/_all-skins.min.css'); ?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url('assets/iCheck/flat/blue.css'); ?>">
        <!-- Morris chart -->
        <link rel="stylesheet" href="<?php echo base_url('assets/morris/morris.css'); ?>">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?php echo base_url('assets/datepicker/datepicker3.css'); ?>">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo base_url('assets/daterangepicker/daterangepicker-bs3.css'); ?>">
        <!-- Bootstrap time Picker -->
        <link rel="stylesheet" href="<?php echo base_url('assets/timepicker/bootstrap-timepicker.min.css'); ?>">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">

        <!-- File Input-->
<!--        <link href="<?php echo base_url('assets/fileinput/css/fileinput.css'); ?>" media="all" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url('assets/fileinput/js/fileinput.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/fileinput/js/fileinput_locale_LANG.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/fileinput/js/fileinput_locale_es.js'); ?>" type="text/javascript"></script>-->

<!--        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>-->
        <style>
            .social {
                margin: 0;
                padding: 0;
            }

            .social ul {
                margin: 0;
                padding: 5px;
            }

            .social ul li {
                margin: 5px;
                list-style: none outside none;
                display: inline-block;
            }

            .social i {
                width: 40px;
                height: 40px;
                color: #FFF;
                background-color: #909AA0;
                font-size: 22px;
                text-align:center;
                padding-top: 12px;
                border-radius: 50%;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                -o-border-radius: 50%;
                transition: all ease 0.3s;
                -moz-transition: all ease 0.3s;
                -webkit-transition: all ease 0.3s;
                -o-transition: all ease 0.3s;
                -ms-transition: all ease 0.3s;
            }

            .social i:hover {
                color: #FFF;
                text-decoration: none;
                transition: all ease 0.3s;
                -moz-transition: all ease 0.3s;
                -webkit-transition: all ease 0.3s;
                -o-transition: all ease 0.3s;
                -ms-transition: all ease 0.3s;
            }

            .social .fa-facebook:hover {
                background: #4060A5;
            }

            .social .fa-twitter:hover {
                background: #00ABE3;
            }

            .social .fa-google-plus:hover {
                background: #e64522;
            }

            .social .fa-github:hover {
                background: #343434;
            }

            .social .fa-pinterest:hover {
                background: #cb2027;
            }

            .social .fa-linkedin:hover {
                background: #0094BC;
            }

            .social .fa-flickr:hover {
                background: #FF57AE;
            }

            .social .fa-instagram:hover {
                background: #375989;
            }

            .social .fa-vimeo-square:hover {
                background: #83DAEB;
            }

            .social .fa-stack-overflow:hover {
                background: #FEA501;
            }

            .social .fa-dropbox:hover {
                background: #017FE5;
            }

            .social .fa-tumblr:hover {
                background: #3a5876;
            }

            .social .fa-dribbble:hover {
                background: #F46899;
            }

            .social .fa-skype:hover {
                background: #00C6FF;
            }

            .social .fa-stack-exchange:hover {
                background: #4D86C9;
            }

            .social .fa-youtube:hover {
                background: #FF1F25;
            }

            .social .fa-xing:hover {
                background: #005C5E;
            }

            .social .fa-rss:hover {
                background: #e88845;
            }

            .social .fa-foursquare:hover {
                background: #09B9E0;
            }

            .social .fa-youtube-play:hover {
                background: #DF192A;
            }

            .t-top{
                background: url(<?php echo base_url()?>assets/admin_lte/img/gotop4.png);
/*                background-position: right top;
                background-attachment: fixed;*/
                /*opacity: 0.9;*/
/*                width: 50px;
                height: 50px;*/
                position: fixed;
                right:10px;
                bottom: 10px;
                /*
                border-left:15px solid transparent;
                border-right:15px solid transparent;
                border-bottom:20px solid black;*/
                content: "";
                z-index: 400;
            }
            .lbr{
                height:900px;
            }
            .fixCenter{
                top:50%;
                bottom: 50%;
                margin:0 auto;
                font-size: 1.3em;
                color:red;position: fixed;font-weight: bold;font-family: segoe-ui;
            }
        </style>

    </head>