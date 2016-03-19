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
            content: "Kantor Sekretariat PC <?php echo $record['pc'] ?>"
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
            Lihat Data Jam'iyyah 2
            <small>Administrasi Anggota Pemuda Persis</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php base_url('anggota'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Lihat Detail 2 Data Cabang</li>
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
                        <li><a href="#tab_2" data-toggle="tab">Data Kejam'iyyahan</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Data Jama'ah</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Data Indeks Performa Jam'iyyah</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Data Keanggotaan</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Data Deskriptif Anggota</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Data Pendidikan</a></li>
                        <li><a href="#tab_8" data-toggle="tab">Data Pekerjaan</a></li>
                        <li><a href="#tab_9" data-toggle="tab">Data Status Marital</a></li>
                        <li><a href="#tab_10" data-toggle="tab">Data Kegiatan</a></li>
                        <li><a href="#tab_11" data-toggle="tab">Data Mubaligh</a></li>
                        <li><a href="#tab_12" data-toggle="tab">Data Potensi Olahraga & Seni</a></li>
                        <li><a href="#tab_13" data-toggle="tab">Data Potensi Ekonomi</a></li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="box-body">
                                <img class="img-responsive img-rounded center-block" 
                                     src="<?php echo base_url('/assets/admin_lte/img/pemuda persis.jpg'); ?>" width="150"><br />
                                <h2 align='center'><bold>PROFIL DATA CABANG <?php echo strtoupper($record['pc']) ?></bold></h2>
                                <h2 align='center'><bold><?php
                                        echo strtoupper($record['pd']);
                                        echo " PROVINSI " . strtoupper($record['pw'])
                                        ?></bold></h2>
                                <h2 align='center'><bold>PEMUDA PERSATUAN ISLAM</bold></h2>
                                <hr>
                                <?php echo form_open_multipart('', array('class' => 'form-horizontal')); ?>
                                <h3 align='center'><span class="label label-success col-sm-12">
                                        <i class="fa fa-user"> DATA PIMPINAN CABANG</i>
                                    </span>
                                </h3><br><br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div id="googleMap" style="width:500px;height:250px;" align="center">Peta Lokasi</div>

                                    </div>
                                    <div class="col-sm-6">
                                        <img class="img-responsive img-rounded left-oriented" style="width:500px;height:250px;" 
                                             src="<?php echo base_url('/assets/foto/pc/' . $record['foto']); ?>" width="150"><br />

                                    </div>
                                </div>
                                <br>

                                <table  class="table table-striped">
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
                                        <th width="35%">Pimpinan Cabang</th>
                                        <td><?php echo $record['pc'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Pimpinan Daerah</th>
                                        <td><?php echo $record['pd'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Pimpinan Wilayah</th>
                                        <td><?php echo $record['pw'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Latitude</th>
                                        <td><?php echo $record['latitude'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Longitude</th>
                                        <td><?php echo $record['longitude'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Alamat Lengkap</th>
                                        <td><?php echo $record['alamat_utama'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Alamat Alternatif</th>
                                        <td><?php echo $record['alamat_alternatif'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Nomor Kontak</th>
                                        <td><?php echo $record['no_kontak'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Email</th>
                                        <td><?php echo $record['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Luas Wilayah Kerja</th>
                                        <td><?php echo $record['luas'] ?> KM<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Batas Wilayah Utara</th>
                                        <td><?php echo $record['bw_utara'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Batas Wilayah Selatan</th>
                                        <td><?php echo $record['bw_selatan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Batas Wilayah Barat</th>
                                        <td><?php echo $record['bw_barat'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Batas Wilayah Timur</th>
                                        <td><?php echo $record['bw_timur'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Jarak Dari Ibukota Negara</th>
                                        <td><?php echo $record['jarak_dari_ibukota_negara'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Jarak Dari Ibukota Provinsi</th>
                                        <td><?php echo $record['jarak_dari_ibukota_provinsi'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Jarak Dari Ibukota Kabupaten / Kota</th>
                                        <td><?php echo $record['jarak_dari_ibukota_kabupaten'] ?></td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <div class="box box-body">
                                <img class="img-responsive img-rounded center-block" 
                                     src="<?php echo base_url('/assets/admin_lte/img/pemuda persis.jpg'); ?>" width="150"><br />
                                <h2 align='center'><bold>PROFIL DATA CABANG <?php echo strtoupper($record['pc']) ?></bold></h2>
                                <h2 align='center'><bold><?php
                                        echo strtoupper($record['pd']);
                                        echo " PROVINSI " . strtoupper($record['pw'])
                                        ?></bold></h2>
                                <h2 align='center'><bold>PEMUDA PERSATUAN ISLAM</bold></h2>
                                <hr>
                                <h3 align='center'><span class="label label-success col-sm-12">
                                        <i class="fa fa-graduation-cap"> Data Kejam'iyyahan</i>
                                    </span>
                                </h3>
                                <hr><br>
                                <table  class="table table-striped">
                                    <tr>
                                        <th width="35%">Penasehat 1</th>
                                        <td><?php echo $record['penasehat1'] ?></td>
                                        <th width="35%">Penasehat 2</th>
                                        <td><?php echo $record['penasehat2'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Penasehat 3</th>
                                        <td><?php echo $record['penasehat3'] ?></td>
                                        <th width="35%">Penasehat 4</th>
                                        <td><?php echo $record['penasehat4'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Ketua</th>
                                        <td><?php echo $record['ketua'] ?></td>
                                        <th width="35%">Wakil Ketua</th>
                                        <td><?php echo $record['wkl_ketua'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Sekretaris</th>
                                        <td><?php echo $record['sekretaris'] ?></td>
                                        <th width="35%">Wakil Sekretaris</th>
                                        <td><?php echo $record['wkl_sekretaris'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Bendahara</th>
                                        <td><?php echo $record['bendahara'] ?></td>
                                        <th width="35%">Wakil Bendahara</th>
                                        <td><?php echo $record['wkl_bendahara'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Bidang Jam'iyyah</th>
                                        <td><?php echo $record['bid_jamiyyah'] ?></td>
                                        <th width="35%">Wakil Bidang Jam'iyyah</th>
                                        <td><?php echo $record['wkl_bid_jamiyyah'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Bidang Kaderisasi</th>
                                        <td><?php echo $record['bid_kaderisasi'] ?></td>
                                        <th width="35%">Wakil Bidang Kaderisasi</th>
                                        <td><?php echo $record['wkl_bid_kaderisasi'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Bidang Administrasi</th>
                                        <td><?php echo $record['bid_administrasi'] ?></td>
                                        <th width="35%">Wakil Bidang Administrasi</th>
                                        <td><?php echo $record['wkl_bid_administrasi'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Bidang Pendidikan</th>
                                        <td><?php echo $record['bid_pendidikan'] ?></td>
                                        <th width="35%">Wakil Bidang Pendidikan</th>
                                        <td><?php echo $record['wkl_bid_pendidikan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Bidang Dakwah</th>
                                        <td><?php echo $record['bid_dakwah'] ?></td>
                                        <th width="35%">Wakil Bidang Dakwah</th>
                                        <td><?php echo $record['wkl_bid_dakwah'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Bidang Humas & Publikasi</th>
                                        <td><?php echo $record['bid_humas_publikasi'] ?></td>
                                        <th width="35%">Wakil Bidang Humas & Publikasi</th>
                                        <td><?php echo $record['wkl_bid_humas_publikasi'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Bidang Hubungan Antar Lembaga</th>
                                        <td><?php echo $record['bid_hal'] ?></td>
                                        <th width="35%">Wakil Bidang Hubungan Antar Lembaga</th>
                                        <td><?php echo $record['wkl_bid_hal'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Bidang Olahraga & Seni</th>
                                        <td><?php echo $record['bid_or_seni'] ?></td>
                                        <th width="35%">Wakil Bidang Olahraga & Seni</th>
                                        <td><?php echo $record['wkl_bid_or_seni'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Bidang Sosial</th>
                                        <td><?php echo $record['bid_sosial'] ?></td>
                                        <th width="35%">Wakil Bidang Sosial</th>
                                        <td><?php echo $record['wkl_bid_sosial'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Pembantu Umum 1</th>
                                        <td><?php echo $record['pembantu_umum1'] ?></td>
                                        <th width="35%">Pembantun Umum 2</th>
                                        <td><?php echo $record['pembantu_umum2'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Pembantu Umum 3</th>
                                        <td><?php echo $record['pembantu_umum3'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Waktu Ngantor / Pertemuan Rutin Tasykil</th>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Setiap hari</th>
                                        <td><?php echo $record['hari'] ?></td>
                                        <th width="35%">Pukul</th>
                                        <td><?php echo $record['pukul'] ?></td>
                                    </tr>
                                    <tr>
                                        <th width="35%">Musycab terakhir</th>
                                        <td><?php echo $record['musycab_terakhir_m'] ?></td>
                                    </tr>

                                </table>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                            <div class="box box-info">
                                <div class="box box-body">
                                    <img class="img-responsive img-rounded center-block" 
                                         src="<?php echo base_url('/assets/admin_lte/img/pemuda persis.jpg'); ?>" width="150"><br />
                                    <h2 align='center'><bold>PROFIL DATA CABANG <?php echo strtoupper($record['pc']) ?></bold></h2>
                                    <h2 align='center'><bold><?php
                                            echo strtoupper($record['pd']);
                                            echo " PROVINSI " . strtoupper($record['pw'])
                                            ?></bold></h2>
                                    <h2 align='center'><bold>PEMUDA PERSATUAN ISLAM</bold></h2>
                                    <hr>
                                    <h3 align='center'><span class="label label-success col-sm-12">
                                            <i class="fa fa-graduation-cap"> Data Jama'ah</i>
                                        </span>
                                    </h3>
                                    <hr><br>
                                    <div class="box-body">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <div class="dataTable_wrapper">
                                                    <table id="data_pj" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Foto</th>
                                                                <th>Kode PJ</th>
                                                                <th>Kode PC</th>
                                                                <th>Kode PD</th>
                                                                <th>Kode PW</th>
                                                                <th>Nama Jamaah</th>
                                                                <th>Musyjam Terakhir</th>
                                                                <th>Ketua PJ</th>
                                                                <th>Jml Anggota</th>
                                                                <th>Alamat</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $no = 1;
                                                            foreach ($record2 as $data_jamaah) {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $no; ?></td>
                                                                    <td><img src="<?php echo base_url('/assets/foto/pj/' . $data_jamaah->foto); ?>" class="img-responsive img-rounded center-block" width="150"></td>
                                                                    <td><?php echo $data_jamaah->kd_pj; ?></td>
                                                                    <td><?php echo $data_jamaah->kd_pc; ?></td>
                                                                    <td><?php echo $data_jamaah->kd_pd; ?></td>
                                                                    <td><?php echo $data_jamaah->kd_pw; ?></td>
                                                                    <td><?php echo $data_jamaah->nama_jamaah; ?></td>
                                                                    <td><?php echo $data_jamaah->musyjam_terakhir; ?></td>
                                                                    <td><?php echo $data_jamaah->ketua_pj; ?></td>
                                                                    <td><?php echo $data_jamaah->jml_anggota; ?></td>
                                                                    <td><?php echo $data_jamaah->alamat; ?></td>
                                                                    <td>
                                                                        <a href="<?php echo site_url() ?>profil/pj_details/<?php echo $data_jamaah->kd_pj; ?>" title="Lihat Detail">
                                                                            <span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
                                                                        <a href="#" title="Tambah Foto">
                                                                            <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                                                                        </a>
                                                                        <a href="<?php echo site_url() ?>profil/pj_details/<?php echo $data_jamaah->kd_pj; ?>" title="Edit Data">
                                                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span>
                                                                        </a>  
                                                                        <a href="#" title="Hapus Data" 
                                                                           onclick ="if (!confirm('Apakah Anda yakin akan menghapus data ini?'))
                                                                                       return false;">
                                                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"> </span>
                                                                        </a>
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
                                                                <th>Kode PJ</th>
                                                                <th>Kode PC</th>
                                                                <th>Kode PD</th>
                                                                <th>Kode PW</th>
                                                                <th>Nama Jamaah</th>
                                                                <th>Musyjam Terakhir</th>
                                                                <th>Ketua PJ</th>
                                                                <th>Jml Anggota</th>
                                                                <th>Alamat</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </tfoot>

                                                    </table>
                                                    <!--</div> box-body -->

                                                </div><!-- box -->
                                            </div><!-- panel-body -->
                                        </div> <!-- panel-body  -->
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Tab 3 -->

                        <!--Tab 4-->
                        <div class="tab-pane" id="tab_13">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="dataTable_wrapper">
                                        <table id="data_pj" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Foto</th>
                                                    <th>Nama Jamaah</th>
                                                    <th>Musyjam Terakhir</th>
                                                    <th>Ketua PJ</th>
                                                    <th>Jml Anggota</th>
                                                    <th>Alamat</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($record2 as $data_jamaah) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><img src="<?php echo base_url('/assets/foto/pj/' . $data_jamaah->foto); ?>" class="img-responsive img-rounded center-block" width="150"></td>
                                                        <td><?php echo $data_jamaah->nama_jamaah; ?></td>
                                                        <td><?php echo $data_jamaah->musyjam_terakhir; ?></td>
                                                        <td><?php echo $data_jamaah->ketua_pj; ?></td>
                                                        <td><?php echo $data_jamaah->jml_anggota; ?></td>
                                                        <td><?php echo $data_jamaah->alamat; ?></td>
                                                        <td>
                                                            <a href="<?php echo site_url() ?>profil/pj_details/<?php echo $data_jamaah->kd_pj; ?>" title="Lihat Detail">
                                                                <span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
                                                            <a href="#" title="Tambah Foto">
                                                                <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                                                            </a>
                                                            <a href="<?php echo site_url() ?>profil/pj_details/<?php echo $data_jamaah->kd_pj; ?>" title="Edit Data">
                                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span>
                                                            </a>  
                                                            <a href="#" title="Hapus Data" 
                                                               onclick ="if (!confirm('Apakah Anda yakin akan menghapus data ini?'))
                                                                               return false;">
                                                                <span class="glyphicon glyphicon-trash" aria-hidden="true"> </span>
                                                            </a>
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
                                                    <th>Nama Jamaah</th>
                                                    <th>Musyjam Terakhir</th>
                                                    <th>Ketua PJ</th>
                                                    <th>Jml Anggota</th>
                                                    <th>Alamat</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>

                                        </table>
                                    </div><!-- box-body -->

                                </div><!-- box -->
                            </div><!-- panel-body -->
                        </div>

                        <!-- Indeks Performa Jam'iyyah PC -->
                        <div class="tab-pane active" id="tab_4">
                            <div class="box-body">
                                <img class="img-responsive img-rounded center-block" 
                                     src="<?php echo base_url('/assets/admin_lte/img/pemuda persis.jpg'); ?>" width="150"><br />
                                <h3 align='center'><bold>INDEKS PERFORMA JAM’IYYAH (IPJ)</bold></h3>
                                <h3 align='center'><bold>DATA CABANG <?php
                                        echo strtoupper($record['pc']);
                                        echo " " . strtoupper($record['pd']);
                                        echo " PROVINSI " . strtoupper($record['pw'])
                                        ?></bold></h2>
                                    <h3 align='center'><bold>PEMUDA PERSATUAN ISLAM</bold></h3>
                                    <hr>
                                    <?php echo form_open_multipart('', array('class' => 'form-horizontal')); ?>
                                    <h3 align='center'><span class="label label-success col-sm-12">
                                            <i class="fa fa-user"> Indeks Performa Jam'iyyah PC</i>
                                        </span>
                                    </h3><br><br>
                                    <section class="content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="box box-info">
                                                    <div class="box box-body">
                                                        <div class="row">
                                                            <div class="col-sm-12">&nbsp;</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <ol>
                                                                    <li>Silakan isi data isian di bawah ini dengan klik checkbox <i class=" fa fa-check-circle-o"></i> pada setiap pilihan sesuai dengan kondisi yang sebenarnya.</li>
                                                                    <li>Prinsip pengisian IPJ ini adalah untuk mengetahui dan memahami kondisi riil dan objektif dari setiap PC, sehingga bisa diketahui potensi kekuatan apa saja yang dimiliki PC juga bisa diidentifikasi masalah dan hambatan yang dihadapi oleh PC sehingga bisa diformulasikan dengan tepat solusi dari setiap permasalahan tersebut.</li>
                                                                </ol>
                                                            </div>
                                                        </div>

                                                        <?php echo form_open('jamiyyah/save_performa_pc'); ?>
                                                        <div class="form-group">
                                                            <label for="no_pc" class="col-sm-2 control-label">Nomor PC</label>
                                                            <div class="col-sm-2">
                                                                <input type="text" class="form-control" name="kd_pc" id="kd_pc" placeholder="Nomor PC" readonly="" required>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" name="nama_pc" id="nama_pc" placeholder="Nama PC" readonly="">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalPC"><i class="glyphicon glyphicon-search"> Cari</i></button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pw" class="col-sm-2 control-label">PW</label>
                                                            <div class="col-sm-10">
                                                                <select name="pw" class="form-control" id="provinsi">
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
                                                                <select name="pd" class="form-control" id="kabupaten">
                                                                    <option value=''>- Pilih Kabupaten -</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pc" class="col-sm-2 control-label">PC</label>
                                                            <div class="col-sm-10">
                                                                <select name="pc" class="form-control" id="kecamatan">
                                                                    <option>- Pilih  Kecamatan -</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_pc" class="col-sm-2 control-label">Alamat Lengkap</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_pc" class="col-sm-2 control-label">Nama Ketua PC</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="ketua_pc" name="ketua_pc" placeholder="Nama Ketua PC">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_hp" class="col-sm-2 control-label">Nomor HP Ketua PC</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomer HP Ketua PC">
                                                            </div>
                                                        </div>
                                                        <br>&nbsp;
                                                        <div class="box box-success">
                                                            <div class="box box-body">
                                                                <h3><span class="label label-success col-sm-12 control-label">
                                                                        <i class="fa fa-user-md"> Tasykil</i></span>
                                                                </h3>
                                                                <div class="form-group">
                                                                    <div class="col-sm-12">
                                                                        <ol>
                                                                            <div class="col-sm-12">
                                                                                <li>Apakah komposisi tasykil utuh sesuai SK pengesahan?</li>
                                                                                <div class="col-sm-12">
                                                                                    <label>
                                                                                        <input type="radio" class="flat-red" name="q1a" value="Utuh sesuai SK" required> Utuh sesuai SK <br>
                                                                                        <input type="radio" class="flat-red" name="q1a" value="70'%' sesuai SK" required> 70% sesuai SK <br>
                                                                                        <input type="radio" class="flat-red" name="q1a" value="50'%' sesuai SK" required> 50% sesuai SK <br>
                                                                                        <input type="radio" class="flat-red" name="q1a" value="25'%' sesuai SK" required> 25% sesuai SK <br>
                                                                                        <input type="radio" class="flat-red" name="q1a" value="25'%' sesuai SK" required> Kurang 25% sesuai SK <br>
                                                                                    </label>
                                                                                </div><br>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <li>Apakah setiap tasykil mempunyai pedoman jam'iyyah?</li>
                                                                                <div class="col-sm-12">
                                                                                    <label>
                                                                                        <input type="radio" class="flat-red" name="q2a" value="Semua mempunyai" required> Semua mempunyai <br>
                                                                                        <input type="radio" class="flat-red" name="q2a" value="Sebagian besar mempunyai" required> Sebagian besar mempunyai <br>
                                                                                        <input type="radio" class="flat-red" name="q2a" value="Sebagian besar tidak mempunyai" required> Sebagian besar tidak mempunyai <br>
                                                                                        <input type="radio" class="flat-red" name="q2a" value="Semua tidak mempunyai" required> Semua tidak mempunyai <br>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <li>Apakah setiap tasykil memahami tugas pokoknya masing-masing?</li>
                                                                                <div class="col-sm-12">
                                                                                    <label>
                                                                                        <input type="radio" class="flat-red" name="q3a" value="Semua memahami" required> Semua memahami <br>
                                                                                        <input type="radio" class="flat-red" name="q3a" value="Sebagian besar memahami" required> Sebagian besar memahami <br>
                                                                                        <input type="radio" class="flat-red" name="q3a" value="Sebagian besar tidak memahami" required> Sebagian besar tidak memahami <br>
                                                                                        <input type="radio" class="flat-red" name="q3a" value="Semua tidak memahami" required> Semua tidak memahami <br>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <li>Apakah setiap tasykil membuat laporan kinerja secara berkala?</li>
                                                                                <div class="col-sm-12">
                                                                                    <label>
                                                                                        <input type="radio" class="flat-red" name="q4a" value="Membuat secara berkala" required> Membuat secara berkala <br>
                                                                                        <input type="radio" class="flat-red" name="q4a" value="Pernah membuat" required> Pernah membuat <br>
                                                                                        <input type="radio" class="flat-red" name="q4a" value="Tidak pernah" required> Tidak pernah <br>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <li>Apakah Ketua membuat progress report tahunan?</li>
                                                                                <div class="col-sm-12">
                                                                                    <label>
                                                                                        <input type="radio" class="flat-red" name="q5a" value="Membuat secara berkala" required> Membuat secara berkala <br>
                                                                                        <input type="radio" class="flat-red" name="q5a" value="Pernah membuat" required> Pernah membuat <br>
                                                                                        <input type="radio" class="flat-red" name="q5a" value="Tidak pernah" required> Tidak pernah <br>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <li>Berjalankah jadwal ngantor rutin tasykil (minimal tiga kali sebulan)?</li>
                                                                                <div class="col-sm-12">
                                                                                    <label>
                                                                                        <input type="radio" class="flat-red" name="q6a" value="Berjalan > tiga kali sebulan" required> Berjalan > tiga kali sebulan <br>
                                                                                        <input type="radio" class="flat-red" name="q6a" value="Berjalan < tiga kali sebulan" required> Berjalan < tiga kali sebulan <br>
                                                                                        <input type="radio" class="flat-red" name="q6a" value="Tidak berjalan" required> Tidak berjalan <br>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <h3><span class="label label-success col-sm-12 control-label">
                                                                        <i class="fa  fa-bar-chart"> Aktivitas Jam'iyyah & Partisipasi Anggota</i></span>
                                                                </h3>
                                                                <ol>
                                                                    <div class="col-sm-12">
                                                                        <li>Apakah jumlah anggota di atas 25 orang?</li>
                                                                        <div class="col-sm-12">
                                                                            <label>
                                                                                <input type="radio" class="flat-red" name="q1b" value="Jumlah anggota > 25 orang" required> Jumlah anggota > 25 orang <br>
                                                                                <input type="radio" class="flat-red" name="q1b" value="Jumlah anggota kurang dari 25 orang" required> Jumlah anggota kurang dari 25 orang <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <li>Bagaimana frekuensi pertemuan tasykil dengan anggota?</li>
                                                                        <div class="col-sm-12">
                                                                            <label>
                                                                                <input type="radio" class="flat-red" name="q2b" value="Sering dengan seluruh anggota" required> Sering dengan seluruh anggota <br>
                                                                                <input type="radio" class="flat-red" name="q2b" value="Sering dengan sebagian besar anggota" required> Sering dengan sebagian besar anggota <br>
                                                                                <input type="radio" class="flat-red" name="q2b" value="Sering dengan sebagian kecil anggota" required> Sering dengan sebagian kecil anggota <br>
                                                                                <input type="radio" class="flat-red" name="q2b" value="Jarang" required> Jarang <br>
                                                                                <input type="radio" class="flat-red" name="q2b" value="Tidak pernah" required> Tidak pernah <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <li>Apakah PC memiliki kegiatan rutin (minimal tiga kali sebulan)?</li>
                                                                        <div class="col-sm-12">
                                                                            <label>
                                                                                <input type="radio" class="flat-red" name="q3b" value="Berjalan > tiga kali sebulan" required> Berjalan > tiga kali sebulan <br>
                                                                                <input type="radio" class="flat-red" name="q3b" value="Berjalan < tiga kali sebulan" required> Berjalan < tiga kali sebulan <br>
                                                                                <input type="radio" class="flat-red" name="q3b" value="Tidak berjalan" required> Tidak berjalan <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <li>Apakah kegiatan rutin itu berjalan dengan lancar?</li>
                                                                        <div class="col-sm-12">
                                                                            <label>
                                                                                <input type="radio" class="flat-red" name="q4b" value="Kegiatan rutin > tiga kali sebulan" required> Kegiatan rutin > tiga kali sebulan <br>
                                                                                <input type="radio" class="flat-red" name="q4b" value="Kegiatan rutin jamaah kurang dari tiga kali sebulan" required> Kegiatan rutin jamaah kurang dari tiga kali sebulan <br>
                                                                                <input type="radio" class="flat-red" name="q4b" value="Tidak ada" required> Tidak ada <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <li>Bagaimana rata-rata kehadiran anggota dalam kegiatan rutin PC? (sertakan bukti fisik)</li>
                                                                        <div class="col-sm-12">
                                                                            <label>
                                                                                <input type="radio" class="flat-red" name="q5b" value="100% anggota hadir" required> 100% anggota hadir <br>
                                                                                <input type="radio" class="flat-red" name="q5b" value="75% anggota hadir" required> 75% anggota hadir <br>
                                                                                <input type="radio" class="flat-red" name="q5b" value="50% anggota hadir" required> 50% anggota hadir <br>
                                                                                <input type="radio" class="flat-red" name="q5b" value="Kurang dari 50% anggota hadir" required> Kurang dari 50% anggota hadir <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <li>Apakah ada kegiatan insidental di PC?</li>
                                                                        <div class="col-sm-12">
                                                                            <label>
                                                                                <input type="radio" class="flat-red" name="q6b" value="Ada" required> Ada <br>
                                                                                <input type="radio" class="flat-red" name="q6b" value="Tidak" required> Tidak <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <li>Bagaimana rata-rata kehadiran anggota dalam kegiatan insidental PC? (sertakan bukti fisik)</li>
                                                                        <div class="col-sm-12">
                                                                            <label>
                                                                                <input type="radio" class="flat-red" name="q7b" value="100% anggota hadir" required> 100% anggota hadir <br>
                                                                                <input type="radio" class="flat-red" name="q7b" value="75% anggota hadir" required> 75% anggota hadir <br>
                                                                                <input type="radio" class="flat-red" name="q7b" value="50% anggota hadir" required> 50% anggota hadir <br>
                                                                                <input type="radio" class="flat-red" name="q7b" value="Kurang dari 50% anggota hadir" required> Kurang dari 50% anggota hadir<br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <li>Apakah ada kegiatan jamiyyah bersama Persis dan otonom lainnya?</li>
                                                                        <div class="col-sm-12">
                                                                            <label>
                                                                                <input type="radio" class="flat-red" name="q8b" value="Ada dan selalu mengikuti" required> Ada dan selalu mengikuti <br>
                                                                                <input type="radio" class="flat-red" name="q8b" value="Ada dan sering mengikuti" required> Ada dan sering mengikuti <br>
                                                                                <input type="radio" class="flat-red" name="q8b" value="Ada dan jarang mengikuti" required> Ada dan jarang mengikuti <br>
                                                                                <input type="radio" class="flat-red" name="q8b" value="Tidak ada" required> Tidak ada <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <li>Apakah ada kegiatan yang melibatkan organisasi lain?</li>
                                                                        <div class="col-sm-12">
                                                                            <label>
                                                                                <input type="radio" class="flat-red" name="q9b" value="Ada dan selalu mengikuti" required> Ada dan selalu mengikuti <br>
                                                                                <input type="radio" class="flat-red" name="q9b" value="Ada dan sering mengikuti" required> Ada dan sering mengikuti <br>
                                                                                <input type="radio" class="flat-red" name="q9b" value="Ada dan jarang mengikuti" required> Ada dan jarang mengikuti <br>
                                                                                <input type="radio" class="flat-red" name="q9b" value="Tidak ada" required> Tidak ada <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <li>Bagaimana publikasi/undangan pada setiap kegiatan PC?</li>
                                                                        <div class="col-sm-12">
                                                                            <label>
                                                                                <input type="radio" class="flat-red" name="q10b" value="Setiap kegiatan ada publikasi/undangan tertulis" required> Setiap kegiatan ada publikasi/undangan tertulis <br>
                                                                                <input type="radio" class="flat-red" name="q10b" value="Setiap kegiatan ada publikasi/undangan lisan" required> Setiap kegiatan ada publikasi/undangan lisan <br>
                                                                                <input type="radio" class="flat-red" name="q10b" value="Sebagian besar kegiatan ada publikasi/undangan tertulis" required> Sebagian besar kegiatan ada publikasi/undangan tertulis <br>
                                                                                <input type="radio" class="flat-red" name="q10b" value="Sebagian besar kegiatan ada publikasi/undangan lisan" required> Sebagian besar kegiatan ada publikasi/undangan lisan <br>
                                                                                <input type="radio" class="flat-red" name="q10b" value="Tidak ada"> Tidak ada <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </ol>

                                                            </div>

                                                            <div class="form-group">
                                                                <h3><span class="label label-success col-sm-12 control-label">
                                                                        <i class="fa fa-users"> Kaderisasi</i></span>
                                                                </h3>
                                                                <ol>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Jumlah calon anggota yang tercatat ?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q1c" value="Lebih dari 10 orang" required> Lebih dari 10 orang <br>
                                                                                    <input type="radio" class="flat-red" name="q1c" value="Kurang dari 10 orang" required> Kurang dari 10 orang <br>
                                                                                    <input type="radio" class="flat-red" name="q1c" value="Tidak ada" required> Tidak ada <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Adakah program pembinaan bagi para calon anggota?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q2c" value="Ada" required> Ada <br>
                                                                                    <input type="radio" class="flat-red" name="q2c" value="Tidak ada" required> Tidak ada <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Jumlah calon anggota yang mengikuti program pembinaan?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q3c" value="Semua calon anggota yang tercatat mengikuti program pembinaan" required> Semua calon anggota yang tercatat mengikuti program pembinaan <br>
                                                                                    <input type="radio" class="flat-red" name="q3c" value="Sebagian besar calon  anggota yang tercatat mengikuti program pembinaan" required> Sebagian besar calon  anggota yang tercatat mengikuti program pembinaan <br>
                                                                                    <input type="radio" class="flat-red" name="q3c" value="Sebagian kecil calon anggota yang tercatat mengikuti program pembinaan" required> Sebagian kecil calon anggota yang tercatat mengikuti program pembinaan <br>
                                                                                    <input type="radio" class="flat-red" name="q3c" value="Tidak ada calon anggota yang mengikuti program pembinaan" required> Tidak ada calon anggota yang mengikuti program pembinaan <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </ol>
                                                            </div>  
                                                            <div class="form-group">
                                                                <h3><span class="label label-success col-sm-12 control-label">
                                                                        <i class="fa fa-book"> Administrasi Jam'iyyah</i></span>
                                                                </h3>
                                                                <ol>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah PC sudah memiliki sekretariat yang definitif?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q1d" value="Sudah" required> Sudah <br>
                                                                                    <input type="radio" class="flat-red" name="q1d" value="Belum" required> Belum <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah sekretariat sudah berfungsi sebagai sentra kegiatan jam'iyyah (rapat, ngantor,dll)?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q2d" value="Sudah" required> Sudah <br>
                                                                                    <input type="radio" class="flat-red" name="q2d" value="Sebagian besar sudah" required> Sebagian besar sudah <br>
                                                                                    <input type="radio" class="flat-red" name="q2d" value="Sebagian besar belum" required> Sebagian besar belum <br>
                                                                                    <input type="radio" class="flat-red" name="q2d" value="Belum" required> Belum <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah PC memiliki perangkat kesekretariatan (komputer/mesin tik)?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q3d" value="Sudah" required> Sudah <br>
                                                                                    <input type="radio" class="flat-red" name="q3d" value="Belum" required> Belum <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah PC sudah memiliki Buku Agenda Surat Masuk?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q4d" value="Memiliki" required> Memiliki <br>
                                                                                    <input type="radio" class="flat-red" name="q4d" value="Belum memiliki" required> Belum memiliki <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah Buku Agenda Surat Masuk tersebut sudah digunakan?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q5d" value="Selalu digunakan" required> Selalu digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q5d" value="Sering digunakan" required> Sering digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q5d" value="Jarang digunakan" required> Jarang digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q5d" value="Belum digunakan" required> Belum digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q5d" value="Tidak ada Buku Agenda Surat Masuk" required> Tidak ada Buku Agenda Surat Masuk <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah surat-surat masuk minimal satu tahun terakhir sudah diarsipkan?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q6d" value="Seluruh surat masuk diarsipkan" required> Seluruh surat masuk diarsipkan <br>
                                                                                    <input type="radio" class="flat-red" name="q6d" value="Sebagian besar surat masuk diarsipkan" required> Sebagian besar surat masuk diarsipkan <br>
                                                                                    <input type="radio" class="flat-red" name="q6d" value="Sebagian besar surat masuk tidak diarsipkan" required> Sebagian besar surat masuk tidak diarsipkan <br>
                                                                                    <input type="radio" class="flat-red" name="q6d" value="Surat-surat masuk tidak diarsipkan" required> Surat-surat masuk tidak diarsipkan <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah PC sudah memiliki Buku Agenda Surat Keluar?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q7d" value="Memiliki" required> Memiliki <br>
                                                                                    <input type="radio" class="flat-red" name="q7d" value="Belum memiliki" required> Belum memiliki <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah Buku Agenda Surat Keluar tersebut sudah digunakan?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q8d" value="Selalu digunakan" required> Selalu digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q8d" value="Sering digunakan" required> Sering digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q8d" value="Jarang digunakan" required> Jarang digunakan<br>
                                                                                    <input type="radio" class="flat-red" name="q8d" value="Belum digunakan" required> Belum digunakan<br>
                                                                                    <input type="radio" class="flat-red" name="q8d" value="Tidak ada Buku Agenda Surat Keluar" required> Tidak ada Buku Agenda Surat Keluar<br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah surat-surat keluar minimal satu tahun terakhir sudah diarsipkan?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q9d" value="Seluruh surat keluar diarsipkan" required> Seluruh surat keluar diarsipkan <br>
                                                                                    <input type="radio" class="flat-red" name="q9d" value="Sebagian besar surat keluar diarsipkan" required> Sebagian besar surat keluar diarsipkan <br>
                                                                                    <input type="radio" class="flat-red" name="q9d" value="Sebagian besar surat keluar tidak diarsipkan" required> Sebagian besar surat keluar tidak diarsipkan<br>
                                                                                    <input type="radio" class="flat-red" name="q9d" value="Surat-surat keluar tidak diarsipkan" required> Surat-surat keluar tidak diarsipkan<br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah PC sudah memiliki Buku Induk Anggota?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q10d" value="Memiliki" required> Memiliki <br>
                                                                                    <input type="radio" class="flat-red" name="q10d" value="Belum memiliki" required> Belum memiliki <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah Buku Induk Anggota sudah digunakan?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q11d" value="Sudah digunakan" required> Sudah digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q11d" value="Belum digunakan" required> Belum digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q11d" value="Tidak ada Buku Induk Anggota" required> Tidak ada Buku Induk Anggota <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah semua data dalam Buku Induk Anggota sudah terisi?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q12d" value="Sudah terisi" required> Sudah terisi <br>
                                                                                    <input type="radio" class="flat-red" name="q12d" value="Sebagian besar data sudah diisi" required> Sebagian besar data sudah diisi <br>
                                                                                    <input type="radio" class="flat-red" name="q12d" value="Sebagian besar data belum diisi" required> Sebagian besar data belum diisi <br>
                                                                                    <input type="radio" class="flat-red" name="q12d" value="Belum terisi" required> Belum terisi <br>
                                                                                    <input type="radio" class="flat-red" name="q12d" value="Tidak ada Buku Induk Anggota" required> Tidak ada Buku Induk Anggota <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah data yang terdapat dalam Buku Induk Anggota sesuai dengan keadaan sesungguhnya?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q13d" value="Sesuai" required> Sesuai <br>
                                                                                    <input type="radio" class="flat-red" name="q13d" value="Sebagian besar sesuai" required> Sebagian besar sesuai <br>
                                                                                    <input type="radio" class="flat-red" name="q13d" value="Sebagian besar tidak sesuai" required> Sebagian besar tidak sesuai <br>
                                                                                    <input type="radio" class="flat-red" name="q13d" value="Tidak sesuai" required> Tidak sesuai <br>
                                                                                    <input type="radio" class="flat-red" name="q13d" value="Tidak ada Buku Induk Anggota" required> Tidak ada Buku Induk Anggota <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah PC sudah memiliki kop surat?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q14d" value="Memiliki" required> Memiliki <br>
                                                                                    <input type="radio" class="flat-red" name="q14d" value="Belum memiliki" required> Belum memiliki <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah kop surat tersebut sudah sesuai dengan Pedoman Administrasi Jam’iyyah?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q15d" value="Sesuai" required> Sesuai <br>
                                                                                    <input type="radio" class="flat-red" name="q15d" value="Tidak sesuai" required> Tidak sesuai <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah PC sudah memiliki stempel?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q16d" value="Memiliki" required> Memiliki <br>
                                                                                    <input type="radio" class="flat-red" name="q16d" value="Belum memiliki" required> Belum memiliki <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah stempel tersebut sesuai dengan Pedoman Administrasi Jam’iyyah?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q17d" value="Sesuai" required> Sesuai <br>
                                                                                    <input type="radio" class="flat-red" name="q17d" value="Tidak sesuai" required> Tidak sesuai <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah surat resmi PC sudah sesuai dengan Pedoman Administrasi (bentuk, format, penomoran, dll)?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q18d" value="Sesuai" required> Sesuai <br>
                                                                                    <input type="radio" class="flat-red" name="q18d" value="Tidak sesuai" required> Tidak sesuai <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah PC sudah memiliki Buku Agenda Kegiatan?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q19d" value="Memiliki" required> Memiliki <br>
                                                                                    <input type="radio" class="flat-red" name="q19d" value="Belum memiliki" required> Belum memiliki <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah Buku Agenda Kegiatan sudah digunakan sebagaimana mestinya?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q20d" value="Selalu digunakan" required> Selalu digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q20d" value="Sering digunakan" required> Sering digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q20d" value="Jarang digunakan" required> Jarang digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q20d" value="Belum digunakan" required> Belum digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q20d" value="Tidak ada Buku Agenda Kegiatan" required> Tidak ada Buku Agenda Kegiatan <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah jamaah sudah memiliki Buku Daftar Hadir Kegiatan?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q21d" value="Memiliki" required> Memiliki <br>
                                                                                    <input type="radio" class="flat-red" name="q21d" value="Belum memiliki" required> Belum memiliki <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah Buku Daftar Hadir Kegiatan dipakai dalam setiap kegiatan?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q22d" value="Selalu digunakan" required> Selalu digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q22d" value="Sering digunakan" required> Sering digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q22d" value="Jarang digunakan" required> Jarang digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q22d" value="Belum digunakan" required> Belum digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q22d" value="Tidak ada Buku Daftar Hadir Kegiatan" required> Tidak ada Buku Daftar Hadir Kegiatan <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah PC sudah memiliki Buku Notulen Rapat/Musyawarah?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q23d" value="Memiliki" required> Memiliki <br>
                                                                                    <input type="radio" class="flat-red" name="q23d" value="Belum memiliki" required> Belum memiliki <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah Buku Notulen tersebut dipakai dalam setiap rapat/musyawarah?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q24d" value="Selalu digunakan" required> Selalu digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q24d" value="Sering digunakan" required> Sering digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q24d" value="Jarang digunakan" required> Jarang digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q24d" value="Belum digunakan" required> Belum digunakan <br>
                                                                                    <input type="radio" class="flat-red" name="q24d" value="Tidak ada Buku Notulen" required> Tidak ada Buku Notulen <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah PC sudah memiliki Buku Daftar Tamu?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q25d" value="Memiliki" required> Memiliki <br>
                                                                                    <input type="radio" class="flat-red" name="q25d" value="Belum memiliki" required> Belum memiliki <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah jamaah sudah memiliki Buku Inventaris?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q26d" value="Memiliki" required> Memiliki <br>
                                                                                    <input type="radio" class="flat-red" name="q26d" value="Belum memiliki" required> Belum memiliki <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah semua data dalam buku inventaris tersebut lengkap?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q27d" value="Sudah" required> Sudah <br>
                                                                                    <input type="radio" class="flat-red" name="q27d" value="Sebagian besar data sudah lengkap diisi" required> Sebagian besar data sudah lengkap diisi <br>
                                                                                    <input type="radio" class="flat-red" name="q27d" value="Sebagian besar data belum lengkap diisi" required> Sebagian besar data belum lengkap diisi <br>
                                                                                    <input type="radio" class="flat-red" name="q27d" value="Belum" required> Belum <br>
                                                                                    <input type="radio" class="flat-red" name="q27d" value="Tidak ada Buku Inventaris" required> Tidak ada Buku Inventaris <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah data dalam buku inventaris sudah sesuai dengan kenyataannya?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q28d" value="Sudah" required> Sudah <br>
                                                                                    <input type="radio" class="flat-red" name="q28d" value="Sebagian besar data sudah sesuai" required> Sebagian besar data sudah sesuai <br>
                                                                                    <input type="radio" class="flat-red" name="q28d" value="Sebagian besar data belum sesuai" required> Sebagian besar data belum sesuai <br>
                                                                                    <input type="radio" class="flat-red" name="q28d" value="Belum" required> Belum <br>
                                                                                    <input type="radio" class="flat-red" name="q28d" value="Tidak ada Buku Inventaris" required> Tidak ada Buku Inventaris <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </ol>
                                                            </div>
                                                            Musyawarah
                                                            <div class="form-group">
                                                                <h3><span class="label label-success col-sm-12 control-label">
                                                                        <i class="fa fa-slideshare"> Musyawarah</i></span>
                                                                </h3>
                                                                <ol>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah masa jihad PC sesuai masa jihad yang tertuang dalam SK pengesahan?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q1e" value="Sesuai" required> Sesuai <br>
                                                                                    <input type="radio" class="flat-red" name="q1e" value="Tidak sesuai" required> Tidak sesuai <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah SK pengesahan PC/tasykil masih ada?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q2e" value="Ada" required> Ada <br>
                                                                                    <input type="radio" class="flat-red" name="q2e" value="Tidak ada" required> Tidak ada <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Berapa kali PC melakukan musyawarah kerja selama masa jihad?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q3e" value="Satu tahun satu kali" required> Satu tahun satu kali <br>
                                                                                    <input type="radio" class="flat-red" name="q3e" value="Satu kali" required> Satu kali <br>
                                                                                    <input type="radio" class="flat-red" name="q3e" value="Belum pernah" required> Belum pernah <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah hasil musyawarah kerja tersebut disosialisasikan kepada PJ dan anggota?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q4e" value="Ya" required> Ya <br>
                                                                                    <input type="radio" class="flat-red" name="q4e" value="Tidak" required> Tidak <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah hasil musyawarah kerja tersebut disosialisasikan kepada PD Pemuda?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q5e" value="Ya" required> Ya <br>
                                                                                    <input type="radio" class="flat-red" name="q5e" value="Tidak" required> Tidak <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah hasil musyawarah kerja tersebut disosialisasikan kepada PC Persis?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q6e" value="Ya" required> Ya <br>
                                                                                    <input type="radio" class="flat-red" name="q6e" value="Tidak" required> Tidak <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah hasil musyawarah kerja tersebut disosialisasikan kepada PC Persistri?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q7e" value="Ya" required> Ya <br>
                                                                                    <input type="radio" class="flat-red" name="q7e" value="Tidak" required> Tidak <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah hasil musyawarah kerja tersebut disosialisasikan kepada PC Pemudi?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q8e" value="Ya" required> Ya <br>
                                                                                    <input type="radio" class="flat-red" name="q8e" value="Tidak" required> Tidak <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Berapa kali PC melakukan rapat koordinasi dengan PJ dalam satu tahun?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q9e" value="> 6 kali setahun" required> > 6 kali setahun <br>
                                                                                    <input type="radio" class="flat-red" name="q9e" value="Antara 3 – 5 kali setahun" required> Antara 3 – 5 kali setahun <br>
                                                                                    <input type="radio" class="flat-red" name="q9e" value="Kurang dari 3 kali setahun" required> Kurang dari 3 kali setahun <br>
                                                                                    <input type="radio" class="flat-red" name="q9e" value="Belum pernah" required> Belum pernah <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Bagaimana rata-rata kehadiran PJ dalam rapat koordinasi tersebut?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q10e" value="Semua PJ hadir" required> Semua PJ hadir <br>
                                                                                    <input type="radio" class="flat-red" name="q10e" value="75% PJ hadir" required> 75% PJ hadir <br>
                                                                                    <input type="radio" class="flat-red" name="q10e" value="50% PJ hadir" required> 50% PJ hadir <br>
                                                                                    <input type="radio" class="flat-red" name="q10e" value="Kurang dari 50% PJ hadir" required> Kurang dari 50% PJ hadir <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </ol>
                                                            </div>

                                                            <div class="form-group">
                                                                <h3><span class="label label-success col-sm-12 control-label">
                                                                        <i class="fa fa-money"> Keuangan Jam'iyyah</i></span>
                                                                </h3>
                                                                <ol>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Bagaimana partisipasi anggota dalam iuran wajib?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q1f" value="100% anggota memenuhi" required> 100% anggota memenuhi <br>
                                                                                    <input type="radio" class="flat-red" name="q1f" value="75% anggota memenuhi" required> 75% anggota memenuhi <br>
                                                                                    <input type="radio" class="flat-red" name="q1f" value="50% anggota memenuhi" required> 50% anggota memenuhi <br>
                                                                                    <input type="radio" class="flat-red" name="q1f" value="Kurang dari 50% anggota memenuhi" required> Kurang dari 50% anggota memenuhi <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah PC rutin setiap bulan menjemput iuran anggota?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q2f" value="Ya" required> Ya <br>
                                                                                    <input type="radio" class="flat-red" name="q2f" value="Tidak" required> Tidak <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah PC memiliki catatan lengkap tentang tagihan iuran anggota?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q3f" value="Ya" required> Ya <br>
                                                                                    <input type="radio" class="flat-red" name="q3f" value="Tidak" required> Tidak <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah PC mengusahakan sumber-sumber pemasukan keuangan lain selain iuran anggota?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q4f" value="Ya" required> Ya <br>
                                                                                    <input type="radio" class="flat-red" name="q4f" value="Tidak" required> Tidak <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah PC memiliki pembukuan keuangan?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q5f" value="Ya" required> Ya <br>
                                                                                    <input type="radio" class="flat-red" name="q5f" value="Tidak" required> Tidak <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah sistem pembukuan keuangan jam'iyyah sudah sesuai dengan Pedoman Pembukuan Keuangan Jam'iyyah?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q6f" value="Ya" required> Ya <br>
                                                                                    <input type="radio" class="flat-red" name="q6f" value="Tidak" required> Tidak <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12">
                                                                            <li>Bagaimana kondisi neraca/saldo tahunan PC?</li>
                                                                            <div class="col-sm-12">
                                                                                <label>
                                                                                    <input type="radio" class="flat-red" name="q7f" value="Saldo" required> Saldo <br>
                                                                                    <input type="radio" class="flat-red" name="q7f" value="Nol" required> Nol <br>
                                                                                    <input type="radio" class="flat-red" name="q7f" value="Defisit" required> Defisit <br>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </ol>
                                                            </div>  
                                                            <div class="box-footer">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <button type="submit" class="btn btn-success btn-block btn-lg" name="submit"><i class="fa fa-save"> Save Indeks Performa Jam'iyyah PC</i></button>
                                                                    </div>
                                                                </div>
                                                            </div><!-- /.box-footer -->
                                                        </div>
<?php echo form_close(); ?>
                                                    </div>                    
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                            </div>

                            <!-- /.tab-content -->
                        </div>
                        <!-- nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
            </div> <!-- /.row -->


            <!-- END CUSTOM TABS -->
    </section><!-- right col -->



<?php echo form_close(); ?>
</div><!-- /.box -->


<script type="text/javascript" src="<?php echo base_url('assets/jQuery/jquery-1.12.0.min.js'); ?>"></script>
<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet" >
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js'); ?>"></script>
<!--<script src="<?php echo base_url('assets/datatables-responsive/js/dataTables.responsive.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/css/dataTables.responsive.css'); ?>"></script>-->
<link href="<?php echo base_url('assets/datatables/tools/css/dataTables.tableTools.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/datatables/tools/js/dataTables.tableTools.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.min.js'); ?>"></script>



<script>
                                                                   $(document).ready(function () {
                                                                       $('#data_pj').DataTable({
                                                                           "scrollX": true
                                                                       });
                                                                       $('#data_pc').DataTable({
                                                                           "scrollX": true
                                                                       });
                                                                   });
</script>
<?php $this->load->view('template/jscripts'); ?>
<?php $this->load->view('template/footer'); ?>
