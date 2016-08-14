<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>
<?php $this->load->view('template/sidebar'); ?>

<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>
    var myCenter = new google.maps.LatLng(<?php echo $record['latitude'] ?>, <?php echo $record['longitude'] ?>);
    var marker;

    function initialize()
    {
        var mapProp = {
            center: myCenter,
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter,
            animation: google.maps.Animation.BOUNCE
        });

        marker.setMap(map);

        var infowindow = new google.maps.InfoWindow({
            content: "Kantor Sekretariat Jama'ah <?php echo $record['nama_jamaah'] ?>"
        });

        infowindow.open(map, marker);

        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });

    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lihat Data Jam'iyyah
            <small>Administrasi Anggota Pemuda Persis</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php base_url('anggota'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Lihat Detail Data Jama'ah</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">

                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs form-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Data Monografi</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Data Keanggotaan</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Data Deskriptif Anggota</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Data Pendidikan</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Data Pekerjaan</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Data Status Marital</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Data Kegiatan</a></li>
                        <li><a href="#tab_8" data-toggle="tab">Data Mubaligh</a></li>
                        <li><a href="#tab_9" data-toggle="tab">Data Potensi Olahraga & Seni</a></li>
                        <li><a href="#tab_10" data-toggle="tab">Data Potensi Ekonomi</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="box-body">
                                <img class="img-responsive img-rounded center-block" 
                                     src="<?php echo base_url('/assets/admin_lte/img/pemuda persis.jpg'); ?>" width="150"><br />
                                <h2 align='center'><bold>PROFIL DATA JAMA'AH <?php echo strtoupper($record['nama_jamaah']) ?></bold></h2>
                                <h2 align='center'><bold>CABANG <?php echo strtoupper($record['kecamatan']) ?></bold></h2>
                                <h2 align='center'><bold><?php
                                        echo strtoupper($record['kabupaten']);
                                        echo " PROVINSI " . strtoupper($record['provinsi'])
                                        ?></bold></h2>
                                <h2 align='center'><bold>PEMUDA PERSATUAN ISLAM</bold></h2>
                                <hr>
                                <?php echo form_open_multipart('', array('class' => 'form-horizontal')); ?>
                                </h3><br><br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div id="googleMap" style="width:500px;height:250px;" align="center">Peta Lokasi</div>

                                    </div>
                                    <div class="col-sm-6">
                                        <img class="img-responsive img-rounded left-oriented" style="width:500px;height:250px;" 
                                             src="<?php echo base_url('/assets/foto/pj/' . $record['foto']); ?>" width="150"><br />

                                    </div>
                                </div>
                                <br>
                                <table  class="table table-striped">
                                    <tr>
                                        <th width="35%">Kode PJ</th>
                                        <td><?php echo $record['kd_pj'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Kode PC</th>
                                        <td><?php echo $record['kd_pc'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Kode PD</th>
                                        <td><?php echo $record['kd_pd'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Kode PW</th>
                                        <td><?php echo $record['kd_pw'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Nama Jama'ah</th>
                                        <td><?php echo $record['nama_jamaah'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Desa</th>
                                        <td><?php echo $record['desa'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Kecamatan</th>
                                        <td><?php echo $record['kecamatan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Kabupaten</th>
                                        <td><?php echo $record['kabupaten'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Provinsi</th>
                                        <td><?php echo $record['provinsi'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Ketua PJ</th>
                                        <td><?php echo $record['ketua_pj'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Sekretaris</th>
                                        <td><?php echo $record['sekretaris'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Bendahara</th>
                                        <td><?php echo $record['bendahara'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Jumlah Anggota</th>
                                        <td><?php echo $record['jml_anggota'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Alamat Lengkap</th>
                                        <td><?php echo $record['alamat'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <!-- Data Keanggotaan PJ -->
                        <div class="tab-pane active" id="tab_2">
                            <section class="content">
                                <!-- Small boxes (Stat box) -->
                                <div class="box box-success">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Lihat Data Anggota PJ <?php echo $record['nama_jamaah'] ?></h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="dataTable_wrapper">
                                                    <table id="data_anggota" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Foto</th>
                                                                <th>NPA</th>
                                                                <th>Nama Lengkap</th>
                                                                <th>PW</th>
                                                                <th>PD</th>
                                                                <th>PC</th>
                                                                <th>Desa</th>
                                                                <th>PJ</th>
                                                                <th>Email</th>
                                                                <th>Nomor Telpon</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $no = 1;
                                                            foreach ($anggota as $data_anggota) {
                                                                ?>
                                                                <tr class="pilih">
                                                                    <td><?php echo $no; ?></td>
                                                                    <td><img src="<?php echo base_url('/assets/foto/anggota/' . $data_anggota->foto); ?>" class="img-responsive img-rounded center-block" width="150"></td>
                                                                    <td><?php echo $data_anggota->npa; ?></td>
                                                                    <td><?php echo $data_anggota->nama; ?></td>
                                                                    <td><?php echo $data_anggota->pw; ?></td>
                                                                    <td><?php echo $data_anggota->pd; ?></td>
                                                                    <td><?php echo $data_anggota->pc; ?></td>
                                                                    <td><?php echo $data_anggota->desa; ?></td>
                                                                    <td><?php echo $data_anggota->pj; ?></td>
                                                                    <td><?php echo $data_anggota->email; ?></td>
                                                                    <td><?php echo $data_anggota->no_telpon1; ?></td>
                                                                    <td>
                                                                        <a href="<?php echo site_url() ?>anggota/details/<?php echo $data_anggota->npa; ?>" title="Lihat Detail">
                                                                            <span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
                                                                        <a href="<?php echo site_url() ?>anggota/edit_foto/<?php echo $data_anggota->npa; ?>" title="Tambah/Edit Foto">
                                                                            <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                                                                        </a>
                                                                        <a href="<?php echo site_url() ?>anggota/edit/<?php echo $data_anggota->npa; ?>" title="Edit Data">
                                                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span>
                                                                        </a>  
                                                                        <?php if ($this->session->level == 'admin') { ?>
                                                                            <a href="<?php echo site_url() ?>anggota/delete/<?php echo $data_anggota->npa; ?>" title="Hapus Data" 
                                                                               onclick ="if (!confirm('Apakah Anda yakin akan menghapus data ini?'))
                                                                                                   return false;">
                                                                                <span class="glyphicon glyphicon-trash" aria-hidden="true"> </span>
                                                                            </a>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                                $no++;
                                                            }
                                                            ?>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Foto</th>
                                                                <th>NPA</th>
                                                                <th>Nama Lengkap</th>
                                                                <th>PW</th>
                                                                <th>PD</th>
                                                                <th>PC</th>
                                                                <th>Desa</th>
                                                                <th>PJ</th>
                                                                <th>Email</th>
                                                                <th>Nomor Telpon</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div><!-- box-body -->

                                            </div><!-- box -->
                                        </div><!-- panel-body -->
                                    </div> <!-- panel-body  -->
                                </div> <!-- panel-body --> 
                            </section><!-- Data Anggota PC  -->
                        </div>
                        <!-- Data Deskriptif Anggota PC -->
                        <div class="tab-pane active" id="tab_3">
                            <section class="content">

                                <div class="box box-info">
                                    <div class="bo box-header">
                                        <h1 class="box-title">Data Statistik Usia Anggota Pemuda Persis</h1>
                                    </div><!-- /.box-header -->
                                    <div class="box box-body">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Jama'ah</th>
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
                                                        <th>Nama Jama'ah</th>
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
                            </section>
                        </div>
                        <!-- Data Deskriptif Usia Anggota PJ -->

                        <!-- Data Deskriptif Pendidikan Anggota PJ -->
                        <div class="tab-pane active" id="tab_4">
                            <section class="content">
                                <div class="box box-warning">
                                    <div class="bo box-header">
                                        <h1 class="box-title">Data Statistik Pendidikan Anggota Pemuda Persis</h1>
                                    </div><!-- /.box-header -->
                                    <div class="box box-body">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Level Pendidikan</th>
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
                            </section>
                        </div>
                        <!-- Data Deskriptif Pekerjaan Anggota PJ -->
                        <div class="tab-pane active" id="tab_5">
                            <section class="content">

                            </section>
                        </div>
                        <!-- Data Deskriptif Status Marital Anggota PJ -->
                        <div class="tab-pane active" id="tab_6">
                            <section class="content">
                                <div class="box box-danger">
                                    <div class="bo box-header">
                                        <h1 class="box-title">Data Statistik Status Marital Anggota Pemuda Persis</h1>
                                    </div><!-- /.box-header -->
                                    <div class="box box-body">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Status</th>
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
                            </section>
                        </div>
                        <!-- Data Deskriptif Kegiatan Anggota PJ -->
                        <div class="tab-pane active" id="tab_7">
                            <section class="content">

                            </section>
                        </div>
                        <!-- Data Deskriptif Muballigh Anggota PC -->
                        <div class="tab-pane active" id="tab_11">
                            <section class="content">

                            </section>
                        </div>

                    </div>
                    <!-- nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
        </div> <!-- /.row -->

    </section>
</div>
<?php echo form_close(); ?>
</div><!-- /.box -->
</section><!-- right col -->
</div><!-- /.box -->

<?php $this->load->view('template/jscripts'); ?>
<?php $this->load->view('template/footer'); ?>
