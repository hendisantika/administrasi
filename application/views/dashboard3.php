<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>
<?php $this->load->view('template/sidebar'); ?>
<style>
#container {
    height: 400px; 
    min-width: 310px; 
    max-width: 800px;
    margin: 0 auto;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper lbl">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard Administrasi Anggota Pemuda Persis 
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            Input
                        </h3>
                        <p>Input Data Anggota</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="<?php echo base_url('anggota'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>
                            Lihat
                        </h3>
                        <p>Lihat Data Anggota</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?php echo base_url('anggota/lihat_anggota'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php $this->load->view('template/jscripts'); ?>
<script src="<?php echo base_url()?>assets/highcharts/highcharts.js"></script>
<script src="<?php echo base_url()?>assets/highcharts/highcharts-3d.js"></script>
<script src="<?php echo base_url()?>assets/highcharts/exporting.js"></script>

<!--Chart Usia-->
<script>
$(function () {
    $('#cUsia').highcharts({
        chart: {
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 15,
                viewDistance: 25,
                depth: 40
            }
        },

        title: {
            text: 'Grafik Usia Anggota Pemuda Persis'
        },

        xAxis: {
            categories: ['Range Usia']
        },

        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },

        tooltip: {
            headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
        },

//        plotOptions: {
//            column: {
//                stacking: 'normal',
//                depth: 40
//            }
//        },

        series: [
         <?php foreach ($usia as $data) { ?>
        {
            name: '<?php echo $data->range_umur; ?>',
            data: [<?php echo $data->jumlah; ?>],
            stack: 'usia'
        },
         <?php } ?>
    ]
    });
});

</script>

<!-- Chart Pendidikan -->
<script>
$(function () {
    $('#cPendidikan').highcharts({
        chart: {
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 15,
                viewDistance: 25,
                depth: 40
            }
        },

        title: {
            text: 'Grafik Pendidikan Anggota Pemuda Persis'
        },

        xAxis: {
            categories: ['Level']
        },

        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },

        tooltip: {
            headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
        },

//        plotOptions: {
//            column: {
//                stacking: 'normal',
//                depth: 40
//            }
//        },

        series: [
         <?php foreach ($pendidikan as $data) { ?>
        {
            name: '<?php echo $data->level_pendidikan; ?>',
            data: [<?php echo $data->jumlah; ?>],
            stack: 'usia'
        },
         <?php } ?>
    ]
    });
});

</script>

<!-- Chart Merital -->
<script>
$(function () {
    $('#cMerital').highcharts({
        chart: {
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 15,
                viewDistance: 25,
                depth: 40
            }
        },

        title: {
            text: 'Grafik Status Merital Anggota Pemuda Persis'
        },

        xAxis: {
            categories: ['Status']
        },

        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },

        tooltip: {
            headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
        },

//        plotOptions: {
//            column: {
//                stacking: 'normal',
//                depth: 40
//            }
//        },

        series: [
         <?php foreach ($merit as $merital) { ?>
        {
            name: '<?php echo $merital->status; ?>',
            data: [<?php echo $merital->jumlah; ?>],
            stack: 'usia'
        },
         <?php } ?>
    ]
    });
});

</script>

<!-- Chart Jenis Keanggotaan -->
<script>
$(function () {
    $('#cJenis').highcharts({
        chart: {
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 15,
                viewDistance: 25,
                depth: 40
            }
        },

        title: {
            text: 'Grafik Jenis Keanggotaan Anggota Pemuda Persis'
        },

        xAxis: {
            categories: ['Status']
        },

        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },

        tooltip: {
            headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
        },

//        plotOptions: {
//            column: {
//                stacking: 'normal',
//                depth: 40
//            }
//        },

        series: [
         <?php foreach ($jenis as $data) { ?>
        {
            name: '<?php echo $data->status; ?>',
            data: [<?php echo $data->jumlah; ?>],
            stack: 'usia'
        },
         <?php } ?>
    ]
    });
});

</script>
<!-- Chart Golongan Darah -->
<script>
$(function () {
    $('#cDarah').highcharts({
        chart: {
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 15,
                viewDistance: 25,
                depth: 40
            }
        },

        title: {
            text: 'Grafik Golongan Darah Anggota Pemuda Persis'
        },

        xAxis: {
            categories: ['Status']
        },

        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },

        tooltip: {
            headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
        },

//        plotOptions: {
//            column: {
//                stacking: 'normal',
//                depth: 40
//            }
//        },

        series: [
         <?php foreach ($gol_darah as $data) { ?>
        {
            name: '<?php echo $data->gol; ?>',
            data: [<?php echo $data->jumlah; ?>],
            stack: 'usia'
        },
         <?php } ?>
    ]
    });
});

</script>

<?php $this->load->view('template/footer'); ?>