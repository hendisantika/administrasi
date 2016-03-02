<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>
<?php $this->load->view('template/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Data Anggota
            <small>Administrasi Anggota Pemuda Persis</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php base_url('anggota'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Input Data Anggota</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Input Data Anggota</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <!--<form class="form-horizontal" action="registrasi/post">-->
            <?php echo form_open_multipart('anggota/post', array('class' => 'form-horizontal')); ?>
            <div class="box-body">
                <img class="img-responsive img-rounded center-block" 
                     src="<?php echo base_url('/assets/admin_lte/img/pemuda persis.jpg'); ?>" width="150"><br />
                <h1 align='center'><bold>PIMPINAN PUSAT</bold></h1>
                <h1 align='center'><bold>PEMUDA PERSATUAN ISLAM</bold></h1>
                <hr>
                <h3 align='center'><span class="label label-success col-sm-12">
                        <i class="fa fa-user"> Data Pribadi</i>
                    </span>
                </h3>
                <hr><br>
                <div class="form-group">
                    <label for="npa" class="col-sm-2 control-label">NPA</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="npa" name="npa" placeholder="NPA" required>
                    </div>
                    <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tempat</label>
                    <div class="col-sm-3">
                        <input type="text" name="tempat" class="form-control" placeholder="TEMPAT LAHIR" required>
                    </div>
                    <label class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-2">
                        <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
                            <input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="0000-00-00" required>
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status Merital</label>
                    <div class="col-sm-3">
                        <select name="status_merital" class="form-control" id="status_merital">
                            <option>- Status Merital -</option>
                            <option value="Single">Single</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Duda">Duda</option>
                        </select>
                    </div>
                    <label for="pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pw" class="col-sm-2 control-label">PW</label>
                    <div class="col-sm-3">
                        <select name="pw" class="form-control" id="provinsi">
                            <option>- Pilih Provinsi -</option>
                            <?php
                            foreach ($provinsi as $prov) {
                                echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <label for="pd" class="col-sm-2 control-label">PD</label>
                    <div class="col-sm-5">
                        <select name="pd" class="form-control" id="kabupaten">
                            <option value=''>- Pilih Kabupaten -</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pc" class="col-sm-2 control-label">PC</label>
                    <div class="col-sm-3">
                        <select name="pc" class="form-control" id="kecamatan">
                            <option>- Pilih  Kecamatan -</option>
                        </select>
                    </div>
                    <label for="desa" class="col-sm-2 control-label">Desa</label>
                    <div class="col-sm-5">
                        <select name="des" class="form-control" id="desa">
                            <option>- Pilih Desa -</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pj" class="col-sm-2 control-label">PJ</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="pj" name="pj" placeholder="Pimpinan Jama'ah" required>
                    </div>
                    <label for="gol_darah" class="col-sm-2 control-label">Golongan Darah</label>
                    <div class="col-sm-5">
                        <select name="gol_darah" class="form-control">
                            <option>- Pilih Golongan Darah -</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat ..." required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-4">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
                    </div>
                    <label for="no_telpon" class="col-sm-1 control-label">Nomor Telepon 1</label>
                    <div class="col-sm-2">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="tel" class="form-control" id="no_telpon" name="no_telpon1" pattern=".{9,14}" required title="9 to 14 characters" placeholder="Nomor Telpon">
                    </div>
                    <label for="no_telpon" class="col-sm-1 control-label">Nomor Telepon 2</label>
                    <div class="col-sm-2">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="tel" class="form-control" id="no_telpon" name="no_telpon2" pattern=".{9,14}"  placeholder="Nomor Telpon">
                    </div>
                </div>
                <div class="form-group">
                    <label for="jenis_keanggotaan" class="col-sm-2 control-label">Jenis Keanggotaan</label>
                    <div class="col-sm-3">
                        <select name="jenis_keanggotaan" class="form-control">
                            <option>- Jenis Keanggotaan -</option>
                            <option value="Biasa">Biasa</option>
                            <option value="Tersiar">Tersiar</option>
                            <option value="Istimewa">Istimewa</option>
                        </select>
                    </div>
                    <label for="tafiq" class="col-sm-2 control-label">Sudah Ikut Tafiq</label>
                    <div class="col-sm-3">
                        <label>
                            <input type="radio" class="flat-red" name="tafiq" value="Sudah" required> Sudah &nbsp;&nbsp;&nbsp;
                            <input type="radio" class="flat-red" name="tafiq" value="Belum" required> Belum &nbsp;&nbsp;&nbsp;
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile" class="col-sm-2 control-label">Foto Antum</label>
                    <div class="col-sm-4">
<!--                        <input type="file" id="exampleInputFile" name="foto" size="20" accept="image/">
                        <br>-->
                         <input id="foto" type="file" name="foto" accept="image/*" class="file-loading">
                        <p class="help-block">Pilih Foto Avatar antum!</p>
                    </div>
                </div>
                <hr>
                <h3 align='center'><span class="label label-danger col-sm-12">
                        <i class="fa fa-female"> Data Keluarga</i>
                    </span>
                </h3>
                <hr><br>
                <div class="form-group">
                    <label for="nama_istri" class="col-sm-2 control-label">Nama Istri</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nama_istri" name="nama_istri" placeholder="Nama Istri">
                    </div>
                    <label for="status_istri" class="col-sm-2 control-label">Status Istri</label>
                    <div class="col-sm-4">
                        <label>
                            <input type="radio" class="flat-red" id="status_istri" name="status_istri" value="Anggota" checked="" required>
                            Anggota &nbsp;&nbsp;&nbsp;
                            <input type="radio" class="flat-red" id="status_istri" name="status_istri" value="Bukan Anggota" required>
                            Bukan Anggota
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jumlah_anak" class="col-sm-2 control-label">Jumlah Anak</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="jumlah_anak" name="jumlah_anak" placeholder="Jumlah Anak">
                    </div>
                    <label for="ket_keluarga" class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="keterangan" name="ket_keluarga" placeholder="Keterangan (Anggota Pemudi Persis / Persistri)">
                    </div>
                </div>
                <hr>
                <h3 align='center'><span class="label label-default col-sm-12">
                        <i class="fa fa-user-secret"> Data Orangtua</i>
                    </span>
                </h3>
                <hr><br>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Ayah</label>
                    <div class="col-sm-3">
                        <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah" required>
                    </div>
                    <label class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-3">
                        <label>
                            <input type="radio" class="flat-red" id="status_ayah" name="status_ayah" value="Anggota" checked="" required>
                            Anggota &nbsp;&nbsp;&nbsp;
                            <input type="radio" class="flat-red" id="status_ayah" name="status_ayah" value="Bukan Anggota" required>
                            Bukan Anggota
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Ibu</label>
                    <div class="col-sm-3">
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu" required>
                    </div>
                    <label class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-3">
                        <label>
                            <input type="radio" class="flat-red" id="status_ibu" name="status_ibu" value="Anggota" checked="" required>
                            Anggota &nbsp;&nbsp;&nbsp;
                            <input type="radio" class="flat-red" id="status_ibu" name="status_ibu" value="Bukan Anggota" required>
                            Bukan Anggota
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat_ortu" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" name="alamat_ortu" placeholder="Alamat ..." required></textarea>
                    </div>
                </div>
                <!--                <div class="form-group">
                                    <label for="ket_orangtua" class="col-sm-2 control-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="ket_orangtua" name="ket_orangtua" placeholder="Keterangan"> 
                                    </div>
                                </div>-->

                <hr>
                <h3 align='center'><span class="label label-info col-sm-12">
                        <i class="fa fa-graduation-cap"> Data Riwayat Pendidikan</i>
                    </span>
                </h3>
                <hr><br>
                <div class="form-group">
                    <label for="nama_sd" class="col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-10">
                        <select name="pendidikan" class="form-control" required>
                            <option>-- Pilih Level Pendidikan --</option>
                            <option value="SD">Sekolah Dasar (SD)</option>
                            <option value="SMP">Sekolah Menengah Pertama (SMP)</option>
                            <option value="TSN">Tsanawiyyah (Tsn)</option>
                            <option value="MA">Madrasah Aliyah (MA)</option>
                            <option value="SMA">Sekolah Menengah Atas (SMA)</option>
                            <option value="SMK">Sekolah Menengah Kejuruan (SMK)</option>
                            <option value="STM">Sekolah Teknik Mesin(STM)</option>
                            <option value="MLN">Mu'allimilin (Mln)</option>
                            <option value="D1">Diploma 1 (D1)</option>
                            <option value="D2">Diploma 2 (D2)</option>
                            <option value="D3">Diploma 3 (D3)</option>
                            <option value="S1">Strata 1 (S1)</option>
                            <option value="S2">Strata 2 (S2)</option>
                            <option value="S3">Strata 3 (S3)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_sd" class="col-sm-2 control-label">Nama SD</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_sd" name="nama_sd" placeholder="Nama Sekolah Dasar" required> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="lulus_sd" class="col-sm-2 control-label">Lulus SD</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="lulus_sd" name="lulus_sd" placeholder="Tahun Lulus Sekolah Dasar" required> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_smp" class="col-sm-2 control-label">Nama SMP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_smp" name="nama_smp" placeholder="Nama Sekolah Menengah Pertama"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="lulus_smp" class="col-sm-2 control-label">Lulus SMP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lulus_smp" name="lulus_smp" placeholder="Tahun Lulus Sekolah Menengah Pertama"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_sma" class="col-sm-2 control-label">Nama SMA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_sma" name="nama_sma" placeholder="Nama Sekolah Menengah Atas"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="lulus_sma" class="col-sm-2 control-label">Lulus SMA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lulus_sma" name="lulus_sma" placeholder="Tahun Lulus Sekolah Menengah Atas"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_d1" class="col-sm-2 control-label">Nama D1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_d1" name="nama_d1" placeholder="Nama D1"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="lulus_d1" class="col-sm-2 control-label">Lulus D1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lulus_d1" name="lulus_d1" placeholder="Tahun Lulus D1"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="jurusan_d1" class="col-sm-2 control-label">Jurusan D1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jurusan_d1" name="jurusan_d1" placeholder="Jurusan D1"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_d2" class="col-sm-2 control-label">Nama D2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_d2" name="nama_d2" placeholder="Nama D2"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="lulus_d2" class="col-sm-2 control-label">Lulus D2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lulus_d2" name="lulus_d2" placeholder="Tahun Lulus D2"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="jurusan_d2" class="col-sm-2 control-label">Jurusan D2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jurusan_d3" name="jurusan_d2" placeholder="Jurusan D2"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_d3" class="col-sm-2 control-label">Nama D3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_d3" name="nama_d3" placeholder="Nama D3"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="lulus_d3" class="col-sm-2 control-label">Lulus D3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lulus_d3" name="lulus_d3" placeholder="Tahun Lulus D3"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="jurusan_d3" class="col-sm-2 control-label">Jurusan D3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jurusan_d3" name="jurusan_d3" placeholder="Jurusan D3"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_s1" class="col-sm-2 control-label">Nama S1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_s1" name="nama_s1" placeholder="Nama S1"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="lulus_s1" class="col-sm-2 control-label">Lulus S1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lulus_s1" name="lulus_s1" placeholder="Tahun Lulus S1"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="jurusan_s1" class="col-sm-2 control-label">Jurusan S1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jurusan_s1" name="jurusan_s1" placeholder="Jurusan S1"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_s2" class="col-sm-2 control-label">Nama S2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_s2" name="nama_s2" placeholder="Nama S2"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="lulus_s2" class="col-sm-2 control-label">Lulus S2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lulus_d1" name="lulus_s2" placeholder="Tahun Lulus S2"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="jurusan_s2" class="col-sm-2 control-label">Jurusan S2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jurusan_s2" name="jurusan_s2" placeholder="Jurusan S2"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_s3" class="col-sm-2 control-label">Nama S3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_s3" name="nama_s3" placeholder="Nama S3"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="lulus_s3" class="col-sm-2 control-label">Lulus S3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lulus_s3" name="lulus_s3" placeholder="Tahun Lulus S3"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="jurusan_s3" class="col-sm-2 control-label">Jurusan S3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jurusan_s3" name="jurusan_s3" placeholder="Jurusan S3"> 
                    </div>
                </div>
                <hr>
                <h3 align='center'><span class="label label-primary col-sm-12">
                        <i class="fa fa-users"> Data Pengalaman Organisasi</i>
                    </span>
                </h3>
                <hr><br>
                <div class="form-group">
                    <label for="nama_org1" class="col-sm-2 control-label">Nama Organisasi 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_org1" name="nama_org1" placeholder="Nama Organisasi 1"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="tahun" class="col-sm-2 control-label">Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="thn_org1" name="thn_org1" placeholder="Tahun"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lokasi1" name="lokasi_org1" placeholder="Lokasi"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="jabatan_org1" class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jabatan_org1" name="jabatan_org1" placeholder="Jabatan"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_org2" class="col-sm-2 control-label">Nama Organisasi 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_org2" name="nama_org2" placeholder="Nama Organisasi 2"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="tahun" class="col-sm-2 control-label">Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="thn_org2" name="thn_org2" placeholder="Tahun"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lokasi1" name="lokasi_org2" placeholder="Lokasi"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="jabatan_org1" class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jabatan_org1" name="jabatan_org2" placeholder="Jabatan"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_org3" class="col-sm-2 control-label">Nama Organisasi 3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_org3" name="nama_org3" placeholder="Nama Organisasi 3"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="tahun" class="col-sm-2 control-label">Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="thn_org1" name="thn_org3" placeholder="Tahun"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lokasi3" name="lokasi_org3" placeholder="Lokasi"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="jabatan_org1" class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jabatan_org3" name="jabatan_org3" placeholder="Jabatan"> 
                    </div>
                </div>
                <hr>
                <h3 align='center'><span class="label label-warning col-sm-12">
                        <i class="fa fa-paint-brush"> Data Keterampilan yang dimiliki</i>
                    </span>
                </h3>
                <hr><br>
                <div class="form-group">
                    <label for="keterampilan1" class="col-sm-2 control-label">Keterampilan 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="keterampilan1" name="keterampilan1" placeholder="Keterampilan 1"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterampilan1" class="col-sm-2 control-label">Keterampilan 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="keterampilan2" name="keterampilan2" placeholder="Keterampilan 2"> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterampilan1" class="col-sm-2 control-label">Keterampilan 3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="keterampilan3" name="keterampilan3" placeholder="Keterampilan 3"> 
                    </div>
                </div>
                <h3 align='center'><span class="label label-success col-sm-12">
                        <i class="fa fa-area-chart"> Data TAFIQ (Tazwidul Fityanil Quran)</i>
                    </span>
                </h3>
                <hr><br>
                <div class="form-group">
                    <label for="level" class="col-sm-2 control-label">Level</label>
                    <div class="col-sm-3" class="form-control">
                        <select name="level" class="form-control">
                            <option>-- Pilih Level --</option>
                            <option value="1">Tafiq I</option>
                            <option value="2">Tafiq II</option>
                            <option value="3">Tafiq III</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Dari Tanggal</label>
                    <div class="col-sm-3">
                        <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
                            <input type="text" name="mulai" class="form-control" id="tanggal" placeholder="0000-00-00">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                        </div>
                    </div>
                    <label class="col-sm-2 control-label">Sampai Tanggal</label>
                    <div class="col-sm-5">
                        <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
                            <input type="text" name="selesai" class="form-control" placeholder="0000-00-00">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="lokasi" placeholder="Lokasi Tafiq"> 
                    </div>
                    <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="ket_tafiq" placeholder="Keterangan"> 
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="reset" class="btn btn-info btn-lg"><i class="glyphicon glyphicon-refresh"> Batal</i></button>
                <button type="submit" class="btn btn-success pull-right btn-lg" name="submit"><i class="fa fa-user-plus"> Tambah</i></button>
            </div><!-- /.box-footer -->
            <?php echo form_close(); ?>
        </div><!-- /.box -->
    </section><!-- right col -->
</div><!-- /.box -->

<script src="<?php echo base_url('assets/jQuery/jQuery-2.2.0.min.js'); ?>"></script>
<link href="<?php echo base_url('assets/fileinput/css/fileinput.css'); ?>" media="all" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url('assets/fileinput/js/fileinput.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/fileinput/js/fileinput_locale_LANG.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/fileinput/js/fileinput_locale_es.js'); ?>" type="text/javascript"></script>

</head>
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
</script>

<?php $this->load->view('template/jscripts'); ?>

<!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">-->
<link href="<?php echo base_url('assets/fileinput/css/fileinput.css'); ?>" media="all" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url('assets/fileinput/js/fileinput.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/fileinput/js/fileinput_locale_es.js'); ?>" type="text/javascript"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>-->


<?php $this->load->view('template/footer'); ?>