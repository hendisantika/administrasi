<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<!-- jQuery 2.2.0 -->
<script src="<?php echo base_url('assets/jQuery/jQuery-2.2.0.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/jQuery/jquery-1.12.0.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/jQuery/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!--<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>-->
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/others/raphael-min.js'); ?>"></script>
<script src="<?php echo base_url('assets/morris/morris.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/sparkline/jquery.sparkline.min.js'); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/knob/jquery.knob.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/others/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/datepicker/bootstrap-datepicker.js'); ?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url('assets/timepicker/bootstrap-timepicker.min.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/fastclick/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/admin_lte/js/app.min.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="<?php echo base_url('assets/admin_lte/js/pages/dashboard.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin_lte/js/pages/dashboard2.js'); ?>"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/admin_lte/js/demo.js'); ?>"></script>


<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css'); ?>">
<script src="<?php echo base_url('assets/datatables-responsive/js/dataTables.responsive.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables-responsive/css/dataTables.responsive.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/tools/css/dataTables.tableTools.css'); ?>">
<script src="<?php echo base_url('assets/datatables/tools/js/dataTables.tableTools.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.min.js'); ?>"></script>

<a class="t-top"><img src="<?php echo base_url()?>assets/admin_lte/img/gotop4.png"></a>

<script type="text/javascript">
 $(function(){
  $(window).scroll(function(){
   if($(this).scrollTop() > 500){
    $('.t-top').fadeIn(); 
   }
   else{
    $('.t-top').fadeOut();
   }
  });
  $(".t-top").click(function(){
   $("html,body").animate({scrollTop:0},600);
   return false;
   });
 });
</script>