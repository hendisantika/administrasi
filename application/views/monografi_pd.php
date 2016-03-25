<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>
<?php $this->load->view('template/sidebar'); ?>

<script type="text/javascript" src="<?php echo base_url() ?>assets/jQuery/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/jQueryUI/jquery-ui.js"></script>
<script type="text/javascript">
// <![CDATA[
$(document).ready(function () {
    $(function () {
        $("#autocomplete").autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: "<?php echo site_url('autocomplete/suggestions'); ?>",
                    data: {nama: $("#autocomplete").val()},
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                        response(data);
                    }
                });
            },
        });
    });
    $(function () {
        $("#autocomplete2").autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: "<?php echo site_url('autocomplete/suggestions'); ?>",
                    data: {nama: $("#autocomplete2").val()},
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                        response(data);
                    }
                });
            },
        });
    });
});
// ]]>
</script>

<style>
    .pilih1, .pilih2, .pilih3:hover{
        cursor: pointer;
    }
    .ui-autocomplete-loading {
        background: #fff url('../assets/others/loader.gif') right center no-repeat !important;
    }

    .list_item_container {
        width:300px;
        height: 60px;
        padding: 5px 0;
    }
    .image {
        width: 60px;
        height: 60px;
        margin-right: 10px;
        float: left;
    }
    .description {
        font-style: italic;
        font-size: 0.8em;
        color: black;
    }
    .pekerjaan {
        font-style: italic;
        font-size: 0.8em;
        color: black;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Data Jam'iyyah
            <small>Administrasi Anggota Pemuda Persis</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php base_url('anggota'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Input Data Monografi Jam'iyyah</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="box box-info wrap_auto">
            <div class="box-header with-border">
                <h3 class="box-title">Form Input Data Monografi Jam'iyyah tingkat PD</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <div class="box-body content_auto">
                <img class="img-responsive img-rounded center-block" 
                     src="<?php echo base_url('/assets/admin_lte/img/pemuda persis.jpg'); ?>" width="150"><br />
                <h2 align='center'><bold>DATA MONOGRAFI JAM’IYYAH</bold></h2>
                <h2 align='center'><bold>PD PEMUDA PERSATUAN ISLAM</bold></h2>
                <hr>
                <?php echo form_open_multipart('jamiyyah/save_monografi_pd', array('class' => 'form-horizontal')); ?>
                <h3 align='center'><span class="label label-success col-sm-12">
                        <i class="fa fa-user"> DATA PIMPINAN DAERAH</i>
                    </span>
                </h3>
                <hr><br>
                <div class="form-group">
                    <label for="no_pd" class="col-sm-2 control-label">Nomor PD</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="no_pd" id="kd_pd" placeholder="Nomor PD" readonly="" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="nama_pd" id="nama_pd" placeholder="Nama PD" readonly="">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-linkedin" data-toggle="modal" data-target="#myModalPD"><i class="glyphicon glyphicon-search"> Cari</i></button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_pw" class="col-sm-2 control-label">Nomor PW</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="no_pw" id="kd_pw" placeholder="Nomor PW" readonly="" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="nama_pw" id="nama_pw" placeholder="Nama PW" readonly="">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalPW"><i class="glyphicon glyphicon-search"> Cari</i></button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pw" class="col-sm-2 control-label">Provinsi</label>
                    <div class="col-sm-10">
                        <select name="pw" class="form-control" id="provinsi" required>
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
                    <label for="pd" class="col-sm-2 control-label">Kabupaten</label>
                    <div class="col-sm-10">
                        <select name="pd" class="form-control" id="kabupaten" required>
                            <option value=''>- Pilih Kabupaten -</option>
                            <?php
                            foreach ($kabupaten as $kab) {
                                echo '<option value="' . $kab->id . '">' . $kab->nama . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pc" class="col-sm-2 control-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <select name="pc" class="form-control" id="kecamatan" required>
                            <option>- Pilih  Kecamatan -</option>
                            <?php
                            foreach ($kecamatan as $kec) {
                                echo '<option value="' . $kec->id . '">' . $kec->nama . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <h3 align='center'>
                    <span class="label label-success col-sm-12">
                        <i class="fa fa-user"> DATA GEOGRAFIS</i>
                    </span>
                </h3>
                <hr><br>
                <div class="form-group">
                    <label for="latitude" class="col-sm-2 control-label">Latitude / Garis Lintang</label>
                    <div class="col-sm-4">
                        <input type="number" step="any" class="form-control" name="latitude" placeholder="Latitude / Garis Lintang" required title="Masukkan garis lintang" required>
                    </div>
                    <label for="longitude" class="col-sm-2 control-label">Longitude / Garis Bujur</label>
                    <div class="col-sm-4">
                        <input type="number" step="any" class="form-control" name="longitude" placeholder="Longitude / Garis Bujur" required title="Masukkan garis bujur" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-4">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required>
                    </div>
                    <label for="no_telpon" class="col-sm-2 control-label">Nomor Telepon</label>
                    <div class="col-sm-4">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="tel" class="form-control" id="no_telpon" name="no_telpon" pattern=".{9,14}" required title="9 to 14 characters" placeholder="Nomor Telpon">
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-sm-2 control-label">Alamat Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat_utama" placeholder="Alamat Lengkap" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-sm-2 control-label">Alamat Alternatif</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat_alternatif" placeholder="Alamat Alternatif">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Luas Wilayah Kerja" class="col-sm-2 control-label">Luas Wilayah Kerja</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="luas" placeholder="Luas Wilayah Kerja">
                    </div>
                    <label for="Batas Wilayah Utara" class="col-sm-2 control-label">Batas Wilayah Utara</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bw_utara" placeholder="Batas Wilayah Utara">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Batas Wilayah Selatan" class="col-sm-2 control-label">Batas Wilayah Selatan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bw_selatan" placeholder="Batas Wilayah Selatan">
                    </div>
                    <label for="Batas Wilayah Timur" class="col-sm-2 control-label">Batas Wilayah Timur</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bw_timur" placeholder="Batas Wilayah Timur">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Batas Wilayah Barat" class="col-sm-2 control-label">Batas Wilayah Barat</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bw_barat" placeholder="Batas Wilayah Barat">
                    </div>
                    <label for="jarak_dari_ibukota_negara" class="col-sm-2 control-label">Jarak dari ibukota negara</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="jarak_dari_ibukota_negara" placeholder="Jarak dari ibukota negara">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Batas Wilayah Barat" class="col-sm-2 control-label">Jarak dari ibukota provinsi</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="jarak_dari_ibukota_provinsi" placeholder="Jarak dari ibukota provinsi">
                    </div>
                    <label for="Batas Wilayah Barat" class="col-sm-2 control-label">Jarak dari ibukota kabupaten / kota</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="jarak_dari_ibukota_kabupaten" placeholder="Jarak dari ibukota kabupaten / kota">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile" class="col-sm-2 control-label">Foto Kantor</label>
                    <div class="col-sm-10">
                        <!--<input type="file" id="exampleInputFile" name="foto" size="20" accept="image/">-->
                        <input id="foto" type="file" name="foto" accept="image/*" class="file-loading">
                        <p class="help-block">Pilih Foto Kantor Sekretariat!</p>
                    </div>
                </div>
                <hr>
                <h3 align='center'>
                    <span class="label label-success col-sm-12">
                        <i class="fa fa-female"> DATA KEJAMIYYAHAN</i>
                        <br>
                        <i class="fa fa-female"> Data Pimpinan</i>
                        <br>
                        <i class="fa fa-female"> Tasykil</i>
                    </span>
                </h3>
                <hr><br><br>
                <div class="row">
                    <div class="col-sm-12">&nbsp;</div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Ketua</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control autocomplete nama" name="ketua" id="nama1" placeholder="Nama Ketua" required>
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Wakil Ketua</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="wkl_ketua" id="nama2" placeholder="Nama Wakil Ketua">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Sekretaris</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control autocomplete nama" name="sekretaris" id="nama3" placeholder="Sekretaris" required>
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Wakil Sekretaris</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="wkl_sekretaris" id="nama4" placeholder="Wakil Sekretaris">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Bendahara</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bendahara" id="nama5" placeholder="Bendahara" required>
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Wakil Bendahara</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="wkl_bendahara" id="nama6" placeholder="Wakil Bendahara">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Bidang Jam'iyyah</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bid_jamiyyah" id="nama7" placeholder="Bidang Jam'iyyah">
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Wakil Bidang Jam'iyyah</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="wkl_bid_jamiyyah" id="nama8" placeholder="Wakil Bidang Jam'iyyah">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Bidang Kaderisasi</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bid_kaderisasi" id="nama9" placeholder="Bidang Kaderisasi">
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Wakil Bidang Kaderisasi</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="wkl_bid_kaderisasi" id="nama10" placeholder="Bidang Bidang Kaderisasi">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Bidang Administrasi</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bid_administrasi" id="nama11" placeholder="Bidang Administrasi">
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Wakil Bidang Administrasi</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="wkl_bid_administrasi" id="nama12" placeholder="Wakil Bidang Administrasi">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Bidang Pendidikan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bid_pendidikan" id="nama13" placeholder="Bidang Pendidikan">
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Wakil Bidang Pendidikan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="wkl_bid_pendidikan" id="nama14" placeholder="Wakil Bidang Pendidikan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Bidang Da’wah</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bid_dakwah" id="nama15" placeholder="Bidang Da’wah">
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Wakil Bidang Da’wah</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="wkl_bid_dakwah" id="nama16" placeholder="Wakil Bidang Da’wah">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Bid Humas & Pub</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bid_humas_publikasi" id="nama17" placeholder="Bid Humas & Pub">
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Wakil Bidang Humas & Pub</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="wkl_bid_humas_publikasi" id="nama18" placeholder="Wakil Bidang Humas & Pub">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Bidang H.A.L</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bid_hal" id="nama19" placeholder="Bidang Hubungan Antar Lembaga">
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Wakil Bidang H.A.L</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="wkl_bid_hal" id="nama20" placeholder="Wakil Bidang H.A.L">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Bidang Olahraga & Seni</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bid_or_seni" id="nama21" placeholder="Bidang Olahraga & Seni">
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Wakil Bidang Olahraga & Seni</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="wkl_bid_or_seni" id="nama22" placeholder="Wakil Bidang Olahraga & Seni">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Bidang Sosial</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bid_sosial" id="nama23" placeholder="Bidang Sosial">
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Wakil Bidang Sosial</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="wkl_bid_sosial" id="nama24" placeholder="Wakil Bidang Sosial">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Bidang Ekonomi</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bid_ekonomi" id="nama25" placeholder="Bidang Ekonomi">
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Wakil Bidang Ekonomi</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="wkl_bid_ekonomi" id="nama26" placeholder="Wakil Bidang Ekonomi">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Penasehat 1</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="penasehat1" id="nama27" placeholder="Penasehat 1">
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Penasehat 2</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="penasehat2" id="nama28" placeholder="Penasehat 2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Penasehat 3</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="penasehat3" id="nama29" placeholder="Penasehat 3">
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Penasehat 4</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="penasehat4" id="nama30" placeholder="Penasehat 4">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Pembantu Umum 1</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="pembantu_umum1" id="nama31" placeholder="Pembantu umum 1">
                    </div>
                    <label for="nama_istri" class="col-sm-2 control-label">Pembantu Umum 2</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="pembantu_umum2" id="nama32" placeholder="Pembantu Umum 2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Pembantu Umum 3</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="pembantu_umum3" id="nama33" placeholder="Pembantu Umum 1">
                    </div>
                </div>
                <hr>
                <h3 align='center'><span class="label label-success col-sm-12">
                        <i class="fa fa-user-secret"> Waktu Ngantor / Pertemuan Rutin Tasykil</i>
                    </span>
                </h3>
                <hr><br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Setiap Hari</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="hari">
                            <option>-- Pilih Hari --</option>
                            <option value="Ahad">Ahad</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Pukul</label>
                    <div class="col-sm-3 bootstrap-timepicker">
                        <div class="input-group">
                            <input type="text" class="form-control timepicker" name="pukul">

                            <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Musycab terakhir</label>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Masehi</label>
                    <div class="col-sm-3">
                        <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
                            <input type="text" name="masehi" class="form-control" id="tanggal" placeholder="0000-00-00">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                        </div>
                    </div>
                    <label class="col-sm-2 control-label">Tanggal Hijriah</label>
                    <div class="col-sm-3">
                        <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
                            <input type="text" name="hijriah" class="form-control" id="tanggal" placeholder="0000-00-00">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!--    Data Jama'ah            
                        <h3 align='center'><span class="label label-success col-sm-12">
                                        <i class="fa fa-graduation-cap"> Data Jama'ah</i>
                                    </span>
                                </h3>
                                <hr><br>
                                <div class="form-group">
                                    <label for="kd_pj" class="col-sm-2 control-label">Kode PJ</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="kd_pj" placeholder="Kode PJ"> 
                                    </div>
                                    <label for="nama_jamaah" class="col-sm-2 control-label">Nama Jama'ah</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="nama_jamaah" placeholder="Nama Jama'ah"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Musyjam terakhir</label>
                                    <div class="col-sm-3">
                                        <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
                                            <input type="text" name="musyjam_terakhir" class="form-control" id="tanggal" placeholder="0000-00-00">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ketua_pj" class="col-sm-2 control-label">Ketua PJ</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ketua_pj" placeholder="Nama Ketua PJ"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sekretaris" class="col-sm-2 control-label">Sekretaris</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="sekretaris_pj" placeholder="Nama Sekretaris"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="bendahara" class="col-sm-2 control-label">Bendahara</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="bendahara_pj" placeholder="Nama Bendahara"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jml_anggota" class="col-sm-2 control-label">Jumlah Anggota</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="jml_anggota" placeholder="Jumlah Anggota"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat" class="col-sm-2 control-label">Alamat Sekretariat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alamat_pj" placeholder="alamat"> 
                                    </div>
                                </div>-->
                <hr>
                <h3 align='center'><span class="label label-success col-sm-12">
                        <i class="fa fa-users"> Data Keanggotaan</i>
                    </span>
                </h3>
                <hr><br>
                <div class="form-group">
                    <label for="biasa" class="col-sm-2 control-label">Anggota Biasa</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="biasa" placeholder="Anggota Biasa"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="kehormatan" class="col-sm-2 control-label">Anggota Tersiar</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="tersiar" placeholder="Anggota Kehormatan"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="istimewa" class="col-sm-2 control-label">Anggota Istimewa</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="istimewa" placeholder="Anggota Istimewa"> 
                    </div>
                </div>

                <hr>
                <h3 align='center'><span class="label label-success col-sm-12">
                        <i class="fa fa-paint-brush"> Data Mantan Anggota</i>
                    </span>
                </h3>
                <hr><br>
                <div class="form-group">
                    <label for="biasa" class="col-sm-2 control-label">Tidak Her-Registrasi</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="tdk_her" placeholder="Tidak Her-Registrasi"> 
                    </div>
                    <label for="istimewa" class="col-sm-2 control-label">Mutasi Ke Persis</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="mutasi_ke_persis" placeholder="Mutasi Ke Persis"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="kehormatan" class="col-sm-2 control-label">Mutasi Tempat</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="mutasi_tempat" placeholder="Mutasi Tempat"> 
                    </div>
                    <label for="kehormatan" class="col-sm-2 control-label">Mengundurkan diri</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="mengundurkan_diri" placeholder="Mengundurkan diri"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="kehormatan" class="col-sm-2 control-label">Meninggal dunia</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="meninggal_dunia" placeholder="Meninggal dunia"> 
                    </div>
                    <label for="kehormatan" class="col-sm-2 control-label">Calon Anggota / Simpatisan</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="calon_anggota" placeholder="Calon Anggota / Simpatisan"> 
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="reset" class="btn btn-info btn-lg">Batal</button>
                <button type="submit" class="btn btn-success pull-right btn-lg" name="submit">Tambah</button>
            </div><!-- /.box-footer -->
            <?php echo form_close(); ?>
        </div><!-- /.box -->
    </section><!-- right col -->
</div><!-- /.box -->

<!-- Modal PC -->
<div class="modal fade" id="myModalPC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Kode PC</h4>
            </div>
            <div class="modal-body">
                <table id="lookup" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Kode PC</th>
                            <th>Nama PC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pc as $data_pc) { ?>
                            <tr class="pilih1" data-kd_pc="<?php echo $data_pc->kd_pc; ?>" 
                                data-nama_pc="<?php echo $data_pc->nama_pc; ?>">
                                <td><?php echo $data_pc->kd; ?></td>
                                <td><?php echo $data_pc->kd_pc; ?></td>
                                <td><?php echo $data_pc->nama_pc; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>


<!-- Modal PD -->
<div class="modal fade" id="myModalPD" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Kode PD</h4>
            </div>
            <div class="modal-body">
                <table id="lookup" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Kode PD</th>
                            <th>Nama PD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pd as $data_pd) { ?>
                            <tr class="pilih2" data-kd_pd="<?php echo $data_pd->kd_pd; ?>" 
                                data-nama_pd="<?php echo $data_pd->nama_pd; ?>">
                                <td><?php echo $data_pd->kd; ?></td>
                                <td><?php echo $data_pd->kd_pd; ?></td>
                                <td><?php echo $data_pd->nama_pd; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>

<!-- Modal PW -->
<div class="modal fade" id="myModalPW" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Kode PW</h4>
            </div>
            <div class="modal-body">
                <table id="lookup" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Kode PW</th>
                            <th>Nama PW</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pw as $data_pw) { ?>
                            <tr class="pilih3" data-kd_pw="<?php echo $data_pw->kd_pw; ?>" 
                                data-nama_pw="<?php echo $data_pw->nama_pw; ?>">
                                <td><?php echo $data_pw->kd; ?></td>
                                <td><?php echo $data_pw->kd_pw; ?></td>
                                <td><?php echo $data_pw->nama_pw; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>
<!--
<script src="<?php echo base_url('assets/jQuery/jquery-1.12.0.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js'); ?>"></script>-->

<?php $this->load->view('template/jscripts'); ?>

<!-- Pilih Wilayah Indonesia -->
<script>
    $(document).ready(function () {
        $("#provinsi").change(function () {
            var url = "<?php echo site_url('user/add_ajax_kab'); ?>/" + $(this).val();
            $('#kabupaten').load(url);
            return false;
        })

        $("#kabupaten").change(function () {
            var url = "<?php echo site_url('user/add_ajax_kec'); ?>/" + $(this).val();
            $('#kecamatan').load(url);
            return false;
        })

        $("#kecamatan").change(function () {
            var url = "<?php echo site_url('user/add_ajax_des'); ?>/" + $(this).val();
            $('#desa').load(url);
            return false;
        })
    });
</script>

<!--Kode PC-->
<script type="text/javascript">
//  jika dipilih, npa akan masuk ke input dan modal di tutup
// Kode PC
    $(document).on('click', '.pilih1', function (e) {
        document.getElementById("kd_pc").value = $(this).attr('data-kd_pc');
        document.getElementById("nama_pc").value = $(this).attr('data-nama_pc');
        $('#myModalPC').modal('hide');
    });
// Kode PD
    $(document).on('click', '.pilih2', function (e) {
        document.getElementById("kd_pd").value = $(this).attr('data-kd_pd');
        document.getElementById("nama_pd").value = $(this).attr('data-nama_pd');
        $('#myModalPD').modal('hide');
    });
// Kode PW
    $(document).on('click', '.pilih3', function (e) {
        document.getElementById("kd_pw").value = $(this).attr('data-kd_pw');
        document.getElementById("nama_pw").value = $(this).attr('data-nama_pw');
        $('#myModalPW').modal('hide');
    });

//  tabel lookup npa
    $(function () {
        $("#lookup").dataTable({
            "scrollX": true
        });
    });

    //Timepicker
    $(".timepicker").timepicker({
        showInputs: false
    });

    function dummy() {
        var kode_pc = document.getElementById("kd_pc").value;
        alert('Kode PC ' + kode_pc + ' berhasil tersimpan');
    }
</script>

<!-- Kalender Hijriah -->

<!-- File Input -->
<link href="<?php echo base_url('assets/fileinput/css/fileinput.css'); ?>" media="all" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url('assets/fileinput/js/fileinput.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/fileinput/js/fileinput_locale_es.js'); ?>" type="text/javascript"></script>

<!-- File Input -->
<script>
    $(document).on('ready', function () {
        $("#foto").fileinput({
            showCaption: false,
            previewFileType: "Image",
            browseClass: "btn btn-success",
            browseLabel: "Pilih Foto Antum",
            browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
            removeClass: "btn btn-danger",
            removeLabel: "Delete",
            removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
            uploadClass: "btn btn-info",
            uploadLabel: "Upload",
            uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> "
        });
    });
    
    // Script Autocomplete-->
    $(document).ready(function () {
        $("#nama1").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama2").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama3").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama4").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama5").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama6").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama7").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama8").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama9").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama10").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama11").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama12").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama13").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama14").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama15").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama16").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama17").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama18").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama19").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama20").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama21").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama22").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama23").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama24").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama25").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama26").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama27").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama28").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama29").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama30").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama31").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama32").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
        $("#nama33").autocomplete({
            source: "../anggota/get_anggota" // name of controller followed by function
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var inner_html = '<a><div class="list_item_container">\n\
                                                <div class="image"><img src="../assets/foto/anggota/' + item.image + '" width="50px" height="55px"></div>\n\
                                                <div class="label"><font color="#000000" face="Verdana" style="font-style: bold italic; font-size: 12px;">' + item.label + '</font></div>\n\
                                                <div class="description">' + item.description + '</div>\n\
                                                <div class="pekerjaan">' + item.pekerjaan + '</div>\n\
                                    </div></a>';
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
        };
    });
</script>

<?php $this->load->view('template/footer'); ?>