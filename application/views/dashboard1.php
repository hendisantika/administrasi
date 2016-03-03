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
                            <?php echo $jamaah; ?>
                        </h3>
                        <p>PJ yang masuk</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <a href="<?php echo base_url('profil/lihat_pj')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>

                            <?php echo $cabang; ?> 
                        </h3>
                        <p>PC yang masuk</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?php echo base_url('profil/lihat_pc')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo $pd; ?></h3>
                        <p>PD yang masuk</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-database"></i>
                    </div>
                    <a href="<?php echo base_url('profil/lihat_pd')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php echo $anggota; ?></h3>
                        <p>Anggota</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            <?php
                            $this->db->from('tbl_data_geografis_pc');
                            echo $this->db->count_all_results();
                            ?>
                        </h3>
                        <p>PC yang masuk</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>
                            <?php
                            $this->db->from('tbl_data_geografis_pc');
                            echo $this->db->count_all_results();
                            ?>
                        </h3>
                        <p>PC yang masuk</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo $anggota; ?></h3>
                        <p>Anggota</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="<?php echo base_url('anggota/lihat_anggota')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3> 
                            <?php echo $users; ?>
                        </h3>
                        <p>User Terregistrasi</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="box box-info">
                    <div class="bo box-header">
                        <h1 class="box-title">Data Statistik Usia Anggota Pemuda Persis</h1>
                    </div><!-- /.box-header -->
                    <div class="box box-body">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Range Usia</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $total = 0;
                                foreach ($usia as $data) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $data->range_umur; ?></td>
                                        <td><?php echo $data->jumlah; ?></td>
                                    </tr>
                                    <?php
                                    $total += $data->jumlah;
                                    $no++;
                                }
                                ?>
                                <tr>
                                    <td colspan="2" align="center"><bold>Jumlah Total</bold></td>
                            <td><?php echo $total; ?></td>
                            </tr>
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box box-info">
<!--                    <div class="bo box-header">
                        <h1 class="box-title">Grafik Usia Anggota Pemuda Persis</h1>
                    </div> /.box-header -->
                    <div class="box box-body">
                        <!-- fungsi yang ditampilkan dibrowser  -->
                        <div id="cUsia" style="height: 400px"></div>
                    </div>
                </div>
            </div> <!-- Usia -->
            
        </div>
        <!-- Data  Pendidikan -->
        <div class="row">
            <div class="col-lg-6">
                <div class="box box-warning">
                    <div class="bo box-header">
                        <h1 class="box-title">Data Statistik Pendidikan Anggota Pemuda Persis</h1>
                    </div><!-- /.box-header -->
                    <div class="box box-body">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Range Usia</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $total = 0;
                                foreach ($pendidikan as $data) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $data->level_pendidikan; ?></td>
                                        <td><?php echo $data->jumlah; ?></td>
                                    </tr>
                                    <?php
                                    $total += $data->jumlah;
                                    $no++;
                                }
                                ?>
                                <tr>
                                    <td colspan="2" align="center"><bold>Jumlah Total</bold></td>
                            <td><?php echo $total; ?></td>
                            </tr>
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box box-success">
<!--                    <div class="bo box-header">
                        <h1 class="box-title">Grafik Pendidikan Anggota Pemuda Persis</h1>
                    </div> /.box-header -->
                    <div class="box box-body">
                        <!-- fungsi yang ditampilkan dibrowser  -->
                        <div id="cPendidikan" style="height: 400px"></div> 
                    </div>
                </div>
            </div> <!-- Usia -->
        </div>
        <!-- Data  Status Marital -->
        <div class="row">
            <div class="col-lg-6">
                <div class="box box-danger">
                    <div class="bo box-header">
                        <h1 class="box-title">Data Statistik Status Marital Anggota Pemuda Persis</h1>
                    </div><!-- /.box-header -->
                    <div class="box box-body">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Range Usia</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $total = 0;
                                foreach ($merit as $merital) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $merital->status; ?></td>
                                        <td><?php echo $merital->jumlah; ?></td>
                                    </tr>
                                    <?php
                                    $total += $merital->jumlah;
                                    $no++;
                                }
                                ?>
                                <tr>
                                    <td colspan="2" align="center"><bold>Jumlah Total</bold></td>
                            <td><?php echo $total; ?></td>
                            </tr>
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box box-success">
<!--                    <div class="bo box-header">
                        <h1 class="box-title">Grafik Pendidikan Anggota Pemuda Persis</h1>
                    </div> /.box-header -->
                    <div class="box box-body">
                        <!-- fungsi yang ditampilkan di browser  -->
                        <div id="cMerital" style="height: 400px"></div>
                    </div>
                </div>
            </div> <!-- Data Status Merital -->
        </div>
        
        <!-- Data Status Keanggotaan -->
        <div class="row">
            <div class="col-lg-6">
                <div class="box box-danger">
                    <div class="bo box-header">
                        <h1 class="box-title">Data Statistik Status Keanggotaan Anggota Pemuda Persis</h1>
                    </div><!-- /.box-header -->
                    <div class="box box-body">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Jenis Anggota</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $total4 = 0;
                                foreach ($jenis as $data) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $data->status; ?></td>
                                        <td><?php echo $data->jumlah; ?></td>
                                    </tr>
                                    <?php
                                    $total4 += $data->jumlah;
                                    $no++;
                                }
                                ?>
                                <tr>
                                    <td colspan="2" align="center"><bold>Jumlah Total</bold></td>
                            <td><?php echo $total4; ?></td>
                            </tr>
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box box-success">
<!--                    <div class="bo box-header">
                        <h1 class="box-title">Grafik Pendidikan Anggota Pemuda Persis</h1>
                    </div> /.box-header -->
                    <div class="box box-body">
                        <!-- fungsi yang ditampilkan di browser  -->
                        <div id="cJenis" style="height: 400px"></div>
                    </div>
                </div>
            </div> <!-- Data Status Merital -->
        </div>
        
        <!-- Data Golongan Darah -->
        <div class="row">
            <div class="col-lg-6">
                <div class="box box-danger">
                    <div class="bo box-header">
                        <h1 class="box-title">Data Statistik Golongan Darah Anggota Pemuda Persis</h1>
                    </div><!-- /.box-header -->
                    <div class="box box-body">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Golongan Darah</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $total = 0;
                                foreach ($gol_darah as $data) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $data->gol; ?></td>
                                        <td><?php echo $data->jumlah; ?></td>
                                    </tr>
                                    <?php
                                    $total += $data->jumlah;
                                    $no++;
                                }
                                ?>
                                <tr>
                                    <td colspan="2" align="center"><bold>Jumlah Total</bold></td>
                            <td><?php echo $total; ?></td>
                            </tr>
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box box-success">
                    <div class="box box-body">
                        <!-- fungsi yang ditampilkan di browser  -->
                        <div id="cDarah" style="height: 400px"></div>
                    </div>
                </div>
            </div> <!-- Data Golongan Darah -->
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