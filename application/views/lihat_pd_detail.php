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

<style>
    .pilih:hover{
        cursor: pointer;
    }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lihat Data Jam'iyyah
            <small>Administrasi Anggota Pemuda Persis</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php base_url('anggota'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Lihat Detail Data Cabang</li>
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
                                                                <p>Prinsip pengisian IPJ ini adalah untuk mengetahui dan memahami kondisi riil 
                                                                    dan objektif dari setiap PC, sehingga bisa diketahui potensi kekuatan apa saja 
                                                                    yang dimiliki PC juga bisa diidentifikasi masalah dan hambatan yang dihadapi oleh 
                                                                    PC sehingga bisa diformulasikan dengan tepat solusi dari setiap permasalahan tersebut.</p>
                                                            </div>
                                                        </div>

                                                        <?php echo form_open('jamiyyah/save_performa_pc'); ?>
                                                        <br>&nbsp;
                                                        <div class="box box-success">
                                                            <div class="box box-body">
                                                                <h3><span class="label label-success col-sm-12 control-label">
                                                                        <i class="fa fa-user-md"> Tasykil</i></span>
                                                                </h3>
                                                                <div class="col-sm-12">
                                                                    <ol>
                                                                        <li>Apakah komposisi tasykil utuh sesuai SK pengesahan? <b> Jawab : <?php echo $performa['q1a'] ?>.</b></li>
                                                                        <li>Apakah setiap tasykil mempunyai pedoman jam'iyyah? <b> Jawab : <?php echo $performa['q2a'] ?>.</b></li>
                                                                        <li>Apakah setiap tasykil memahami tugas pokoknya masing-masing? <b> Jawab : <?php echo $performa['q3a'] ?>.</b></li>
                                                                        <li>Apakah setiap tasykil membuat laporan kinerja secara berkala? <b> Jawab : <?php echo $performa['q4a'] ?>.</b></li>
                                                                        <li>Apakah Ketua membuat progress report tahunan? Jawab : <b><?php echo $performa['q5a'] ?>.</b></li>
                                                                        <li>Berjalankah jadwal ngantor rutin tasykil (minimal tiga kali sebulan)? <b>Jawab : <?php echo $performa['q6a'] ?>.</b></li>
                                                                    </ol>
                                                                </div>
                                                                <div class="form-group">
                                                                    <h3><span class="label label-success col-sm-12 control-label">
                                                                            <i class="fa  fa-bar-chart"> Aktivitas Jam'iyyah & Partisipasi Anggota</i></span>
                                                                    </h3>
                                                                    <div class="col-sm-12">
                                                                        <ol>
                                                                            <li>Apakah jumlah anggota di atas 25 orang? <b>Jawab : <?php echo $performa['q1b'] ?>.</b></li>
                                                                            <li>Bagaimana frekuensi pertemuan tasykil dengan anggota? <b>Jawab : <?php echo $performa['q2b'] ?>.</b></li>
                                                                            <li>Apakah PC memiliki kegiatan rutin (minimal tiga kali sebulan)? <b>Jawab : <?php echo $performa['q3b'] ?>.</b></li>
                                                                            <li>Apakah kegiatan rutin itu berjalan dengan lancar? <b>Jawab : <?php echo $performa['q4b'] ?>.</b></li>
                                                                            <li>Bagaimana rata-rata kehadiran anggota dalam kegiatan rutin PC? (sertakan bukti fisik) <b>Jawab : <?php echo $performa['q5b'] ?>.</b></li>
                                                                            <li>Apakah ada kegiatan insidental di PC? <b>Jawab : <?php echo $performa['q6b'] ?>.</b></li>
                                                                            <li>Bagaimana rata-rata kehadiran anggota dalam kegiatan insidental PC? (sertakan bukti fisik) <b>Jawab : <?php echo $performa['q7b'] ?>.</b></li>
                                                                            <li>Apakah ada kegiatan jamiyyah bersama Persis dan otonom lainnya? <b>Jawab : <?php echo $performa['q8b'] ?>.</b></li>
                                                                            <li>Apakah ada kegiatan yang melibatkan organisasi lain? <b>Jawab : <?php echo $performa['q9b'] ?>.</b></li>
                                                                            <li>Bagaimana publikasi/undangan pada setiap kegiatan PC? <b>Jawab : <?php echo $performa['q10b'] ?>.</b></li>
                                                                        </ol>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <h3><span class="label label-success col-sm-12 control-label">
                                                                                <i class="fa fa-users"> Kaderisasi</i></span>
                                                                        </h3>
                                                                        <ol>
                                                                            <div class="col-sm-12">
                                                                                <li>Jumlah calon anggota yang tercatat ? <b>Jawab : <?php echo $performa['q1c'] ?>.</b></li>
                                                                                <li>Adakah program pembinaan bagi para calon anggota?  <b>Jawab : <?php echo $performa['q2c'] ?>.</b></li></li>
                                                                                <li>Jumlah calon anggota yang mengikuti program pembinaan? <b>Jawab : <?php echo $performa['q3c'] ?>.</b></li>
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
                                                                            <li>Apakah PC sudah memiliki sekretariat yang definitif? <b>Jawab : <?php echo $performa['q1d'] ?>.</b></li>
                                                                            <li>Apakah sekretariat sudah berfungsi sebagai sentra kegiatan jam'iyyah (rapat, ngantor,dll)? <b>Jawab : <?php echo $performa['q2d'] ?>.</b></li>
                                                                            <li>Apakah PC memiliki perangkat kesekretariatan (komputer/mesin tik)? <b>Jawab : <?php echo $performa['q3d'] ?>.</b></li>
                                                                            <li>Apakah PC sudah memiliki Buku Agenda Surat Masuk? <b>Jawab : <?php echo $performa['q4d'] ?>.</b></li>
                                                                            <li>Apakah Buku Agenda Surat Masuk tersebut sudah digunakan? <b>Jawab : <?php echo $performa['q5d'] ?>.</b></li>
                                                                            <li>Apakah surat-surat masuk minimal satu tahun terakhir sudah diarsipkan? <b>Jawab : <?php echo $performa['q6d'] ?>.</b></li>
                                                                            <li>Apakah PC sudah memiliki Buku Agenda Surat Keluar? <b>Jawab : <?php echo $performa['q7d'] ?>.</b></li>
                                                                            <li>Apakah Buku Agenda Surat Keluar tersebut sudah digunakan? <b>Jawab : <?php echo $performa['q8d'] ?>.</b></li>
                                                                            <li>Apakah surat-surat keluar minimal satu tahun terakhir sudah diarsipkan? <b>Jawab : <?php echo $performa['q9d'] ?>.</b></li>
                                                                            <li>Apakah PC sudah memiliki Buku Induk Anggota? <b>Jawab : <?php echo $performa['q10d'] ?>.</b></li>
                                                                            <li>Apakah Buku Induk Anggota sudah digunakan? <b>Jawab : <?php echo $performa['q11d'] ?>.</b></li>
                                                                            <li>Apakah semua data dalam Buku Induk Anggota sudah terisi? <b>Jawab : <?php echo $performa['q12d'] ?>.</b></li>
                                                                            <li>Apakah data yang terdapat dalam Buku Induk Anggota sesuai dengan keadaan sesungguhnya? <b>Jawab : <?php echo $performa['q13d'] ?>.</b></li>
                                                                            <li>Apakah PC sudah memiliki kop surat? <b>Jawab : <?php echo $performa['q14d'] ?>.</b></li>
                                                                            <li>Apakah kop surat tersebut sudah sesuai dengan Pedoman Administrasi Jam’iyyah? <b>Jawab : <?php echo $performa['q15d'] ?>.</b></li>
                                                                            <li>Apakah PC sudah memiliki stempel? <b>Jawab : <?php echo $performa['q16d'] ?>.</b></li>
                                                                            <li>Apakah stempel tersebut sesuai dengan Pedoman Administrasi Jam’iyyah? <b>Jawab : <?php echo $performa['q17d'] ?>.</b></li>
                                                                            <li>Apakah surat resmi PC sudah sesuai dengan Pedoman Administrasi (bentuk, format, penomoran, dll)? <b>Jawab : <?php echo $performa['q18d'] ?>.</b></li>
                                                                            <li>Apakah PC sudah memiliki Buku Agenda Kegiatan? <b>Jawab : <?php echo $performa['q19d'] ?>.</b></li>
                                                                            <li>Apakah Buku Agenda Kegiatan sudah digunakan sebagaimana mestinya? <b>Jawab : <?php echo $performa['q20d'] ?>.</b></li>
                                                                            <li>Apakah jamaah sudah memiliki Buku Daftar Hadir Kegiatan? <b>Jawab : <?php echo $performa['q21d'] ?>.</b></li>
                                                                            <li>Apakah Buku Daftar Hadir Kegiatan dipakai dalam setiap kegiatan? <b>Jawab : <?php echo $performa['q22d'] ?>.</b></li>
                                                                            <li>Apakah PC sudah memiliki Buku Notulen Rapat/Musyawarah? <b>Jawab : <?php echo $performa['q23d'] ?>.</b></li>
                                                                            <li>Apakah Buku Notulen tersebut dipakai dalam setiap rapat/musyawarah? <b>Jawab : <?php echo $performa['q24d'] ?>.</b></li>
                                                                            <li>Apakah PC sudah memiliki Buku Daftar Tamu? <b>Jawab : <?php echo $performa['q25d'] ?>.</b></li>
                                                                            <li>Apakah jamaah sudah memiliki Buku Inventaris? <b>Jawab : <?php echo $performa['q26d'] ?>.</b></li>
                                                                            <li>Apakah semua data dalam buku inventaris tersebut lengkap? <b>Jawab : <?php echo $performa['q27d'] ?>.</b></li>
                                                                            <li>Apakah data dalam buku inventaris sudah sesuai dengan kenyataannya? <b>Jawab : <?php echo $performa['q28d'] ?>.</b></li>
                                                                        </div>
                                                                    </ol>
                                                                </div>
                                                                <div class="form-group">
                                                                    <h3><span class="label label-success col-sm-12 control-label">
                                                                            <i class="fa fa-slideshare"> Musyawarah</i></span>
                                                                    </h3>
                                                                    <ol>
                                                                        <div class="col-sm-12">
                                                                            <li>Apakah masa jihad PC sesuai masa jihad yang tertuang dalam SK pengesahan? <b>Jawab : <?php echo $performa['q1e'] ?>.</b></li>
                                                                            <li>Apakah SK pengesahan PC/tasykil masih ada? <b>Jawab : <?php echo $performa['q2e'] ?>.</b></li>
                                                                            <li>Berapa kali PC melakukan musyawarah kerja selama masa jihad? <b>Jawab : <?php echo $performa['q3e'] ?>.</b></li>
                                                                            <li>Apakah hasil musyawarah kerja tersebut disosialisasikan kepada PJ dan anggota? <b>Jawab : <?php echo $performa['q4e'] ?>.</b></li>
                                                                            <li>Apakah hasil musyawarah kerja tersebut disosialisasikan kepada PD Pemuda? <b>Jawab : <?php echo $performa['q5e'] ?>.</b></li>
                                                                            <li>Apakah hasil musyawarah kerja tersebut disosialisasikan kepada PC Persis? <b>Jawab : <?php echo $performa['q6e'] ?>.</b></li>
                                                                            <li>Apakah hasil musyawarah kerja tersebut disosialisasikan kepada PC Persistri? <b>Jawab : <?php echo $performa['q7e'] ?>.</b></li>
                                                                            <li>Apakah hasil musyawarah kerja tersebut disosialisasikan kepada PC Pemudi? <b>Jawab : <?php echo $performa['q8e'] ?>.</b></li>
                                                                            <li>Berapa kali PC melakukan rapat koordinasi dengan PJ dalam satu tahun? <b>Jawab : <?php echo $performa['q9e'] ?>.</b></li>
                                                                            <li>Bagaimana rata-rata kehadiran PJ dalam rapat koordinasi tersebut? <b>Jawab : <?php echo $performa['q10e'] ?>.</b></li>
                                                                        </div>
                                                                    </ol>
                                                                </div>
                                                                <div class="form-group">
                                                                    <h3><span class="label label-success col-sm-12 control-label">
                                                                            <i class="fa fa-money"> Keuangan Jam'iyyah</i></span>
                                                                    </h3>
                                                                    <ol>
                                                                        <div class="col-sm-12">
                                                                                <li>Bagaimana partisipasi anggota dalam iuran wajib? <b>Jawab : <?php echo $performa['q1f'] ?>.</b></li>
                                                                                <li>Apakah PC rutin setiap bulan menjemput iuran anggota? <b>Jawab : <?php echo $performa['q2f'] ?>.</b></li>
                                                                                <li>Apakah PC memiliki catatan lengkap tentang tagihan iuran anggota? <b>Jawab : <?php echo $performa['q3f'] ?>.</b></li>
                                                                                <li>Apakah PC mengusahakan sumber-sumber pemasukan keuangan lain selain iuran anggota? <b>Jawab : <?php echo $performa['q4f'] ?>.</b></li>
                                                                                <li>Apakah PC memiliki pembukuan keuangan? <b>Jawab : <?php echo $performa['q5f'] ?>.</b></li>
                                                                                <li>Apakah sistem pembukuan keuangan jam'iyyah sudah sesuai dengan Pedoman Pembukuan Keuangan Jam'iyyah? <b>Jawab : <?php echo $performa['q6f'] ?>.</b></li>
                                                                                <li>Bagaimana kondisi neraca/saldo tahunan PC? <b>Jawab : <?php echo $performa['q7f'] ?>.</b></li>
                                                                        </div>
                                                                    </ol>
                                                                </div>  
                                                                <div class="box-footer">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <button type="submit" class="btn btn-success btn-block btn-lg" name="submit"><i class="fa fa-save"> Edit Indeks Performa Jam'iyyah PC</i></button>
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

                        <!-- Data Keanggotaan PC -->
                        <div class="tab-pane active" id="tab_5">
                            <section class="content">
                                <!-- Small boxes (Stat box) -->
                                <div class="box box-success">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Lihat Data Anggota PC <?php echo $record['pc'] ?></h3>
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
                        <div class="tab-pane active" id="tab_6">
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
                        <!-- Data Deskriptif Usia Anggota PC -->

                        <!-- Data Deskriptif Pendidikan Anggota PC -->
                        <div class="tab-pane active" id="tab_7">
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
                        <!-- Data Deskriptif Pekerjaan Anggota PC -->
                        <div class="tab-pane active" id="tab_8">
                            <section class="content">

                            </section>
                        </div>
                        <!-- Data Deskriptif Status Marital Anggota PC -->
                        <div class="tab-pane active" id="tab_9">
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
                        <!-- Data Deskriptif Kegiatan Anggota PC -->
                        <div class="tab-pane active" id="tab_10">
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
                                                                                       $('#data_anggota').DataTable({
                                                                                           "scrollX": true
                                                                                       });
                                                                                   });
</script>
<?php $this->load->view('template/jscripts'); ?>
<?php $this->load->view('template/footer'); ?>
