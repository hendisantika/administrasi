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
                        <li><a href="#tab_4" data-toggle="tab">Data Keanggotaan</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Data Deskriptif Anggota</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Data Pendidikan</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Data Pekerjaan</a></li>
                        <li><a href="#tab_8" data-toggle="tab">Data Status Marital</a></li>
                        <li><a href="#tab_9" data-toggle="tab">Data Kegiatan</a></li>
                        <li><a href="#tab_10" data-toggle="tab">Data Mubaligh</a></li>
                        <li><a href="#tab_11" data-toggle="tab">Data Potensi Olahraga & Seni</a></li>
                        <li><a href="#tab_12" data-toggle="tab">Data Potensi Ekonomi</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="box-body">
                                <img class="img-responsive img-rounded center-block" 
                                     src="<?php echo base_url('/assets/admin_lte/img/pemuda persis.jpg'); ?>" width="150"><br />
                                <h2 align='center'><bold>PROFIL DATA CABANG <?php echo strtoupper($record['pc']) ?></bold></h2>
                                <h2 align='center'><bold><?php echo strtoupper($record['pd']);
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
                                <h2 align='center'><bold><?php echo strtoupper($record['pd']);
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
                            <div class="box box-body">
                                <img class="img-responsive img-rounded center-block" 
                                     src="<?php echo base_url('/assets/admin_lte/img/pemuda persis.jpg'); ?>" width="150"><br />
                                <h2 align='center'><bold>PROFIL DATA CABANG <?php echo strtoupper($record['pc']) ?></bold></h2>
                                <h2 align='center'><bold><?php echo strtoupper($record['pd']);
                                        echo " PROVINSI " . strtoupper($record['pw']) ?></bold></h2>
                                <h2 align='center'><bold>PEMUDA PERSATUAN ISLAM</bold></h2>
                                <hr>
                                <h3 align='center'><span class="label label-success col-sm-12">
                                        <i class="fa fa-graduation-cap"> Data Jama'ah</i>
                                    </span>
                                </h3>
                                <hr><br>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <!--<div class="dataTable_wrapper">-->
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
                                                    <?php   $no = 1;
                                                            foreach ($record2 as $data_jamaah) { ?>
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
                                                    <?php $no++; }  ?>
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
                                        <!--</div> box-body -->

                                    </div><!-- box -->
                                </div><!-- panel-body -->
                            </div> <!-- panel-body  -->
                        </div>
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->

</div>
<!-- /.row -->
<!-- END CUSTOM TABS -->
</section><!-- right col -->
<?php echo form_close(); ?>
</div><!-- /.box -->

<?php $this->load->view('template/jscripts'); ?>
<!--<script type="text/javascript" src="<?php // echo base_url('assets/jQuery/jquery-1.12.0.min.js'); ?>"></script>
<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet" >
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/js/dataTables.responsive.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/css/dataTables.responsive.css'); ?>"></script>
<link href="<?php echo base_url('assets/datatables/tools/css/dataTables.tableTools.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/datatables/tools/js/dataTables.tableTools.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.min.js'); ?>"></script>-->

<script>
   $(document).ready(function () {
       $('#data_pj').DataTable({
           "scrollX": true
       });
   });
</script>

<?php $this->load->view('template/footer'); ?>
