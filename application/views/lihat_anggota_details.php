<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>
<?php $this->load->view('template/sidebar'); ?>
<style>
    .datepicker {
        z-index:1051 !important;
    }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Profil Anggota
            <small>Administrasi Anggota Pemuda Persis</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php base_url('lihat_anggota_details'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profil Anggota</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <?php echo form_open('anggota/edit/' . $record['npa']); ?>
            <div class="col-sm-6">
                <div class="box box-info">
                    <!--            <div class="box-header with-border">
                                    <h3 class="box-title">Detail Data User</h3>
                                </div> /.box-header -->
                    <div class="box-body">
                        <h3><span class="label label-success col-sm-12 control-label">Data Pribadi</span></h3><br><br>
                        <img class="img-responsive img-rounded left-oriented" src="<?php echo base_url('/assets/foto/anggota/' . $record['foto']); ?>" width="150"><br />
                        <table  class="table table-striped">
                            <tr>
                                <th width="35%">NPA</th>
                                <td><?php echo $record['npa'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Nama Lengkap</th>
                                <td><?php echo $record['nama'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Tempat</th>
                                <td><?php echo $record['tempat'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Tanggal Lahir</th>
                                <td><?php echo $record['tanggal_lahir'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Status Merital</th>
                                <td><?php echo $record['status_merital'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Pekerjaan</th>
                                <td><?php echo $record['pekerjaan'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">PW</th>
                                <td><?php echo $record['pw'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">PD</th>
                                <td><?php echo $record['pd'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">PC</th>
                                <td><?php echo $record['pc'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Desa</th>
                                <td><?php echo $record['desa'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">PJ</th>
                                <td><?php echo $record['pj'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Golongan Darah</th>
                                <td><?php echo $record['gol_darah'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Email</th>
                                <td><?php echo $record['email'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">No Telpon</th>
                                <td><?php echo $record['no_telpon1'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">No Telpon</th>
                                <td><?php echo $record['no_telpon2'] ?></td>
                            </tr>
                            <tr>
                                <th width="25%">Alamat</th>
                                <td><?php echo $record['alamat'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Status</th>
                                <td><?php echo $record['status'] ?></td>
                            </tr>
                            <tr>
                            <tr>
                                <th width="35%">Status TAFIQ</th>
                                <td><?php echo $record['tafiq'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Jenis Keanggotaan</th>
                                <td><?php echo $record['jenis_keanggotaan'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Registration Date</th>
                                <td><?php echo $record['reg_date'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Last Updated</th>
                                <td><?php echo $record['last_updated'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Keterangan</th>
                                <td><?php echo $record['ket_anggota'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-lg btn-primary btn-block" name="edit">Edit Data Pribadi Anggota</button>
                        <!--<a class="btn btn-block btn-primary btn-lg" href="<?php base_url('anggota/edit'); ?>">Edit Data Pribadi Anggota</a>-->
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div>
            <?php echo form_close(); ?>

            <!-- Data Pendidikan -->
            <div class="col-sm-6">
                <div class="box box-success">
                    <div class="box-body">
                        <h3><span class="label label-primary col-sm-12 control-label">Data Pendidikan</span></h3>
                        <table class="table-striped">
                            <tr>
                                <th>NPA</th>
                                <td><?php echo $record['npa'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Nama Lengkap</th>
                                <td><?php echo $record['nama'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Pendidikan</th>
                                <td><?php echo $record['pendidikan'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Nama SD</th>
                                <td><?php echo $record['nama_sd'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Lulus SD</th>
                                <td><?php echo $record['lulus_sd'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Nama SMP</th>
                                <td><?php echo $record['nama_smp'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Lulus SMP</th>
                                <td><?php echo $record['lulus_smp'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Nama SMA</th>
                                <td><?php echo $record['nama_sma'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Lulus SMA</th>
                                <td><?php echo $record['lulus_sma'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Nama D1</th>
                                <td><?php echo $record['nama_d1'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Lulus D1</th>
                                <td><?php echo $record['lulus_d1'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Jurusan D1</th>
                                <td><?php echo $record['jurusan_d1'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Nama D2</th>
                                <td><?php echo $record['nama_d2'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Lulus D2</th>
                                <td><?php echo $record['lulus_d2'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Jurusan D2</th>
                                <td><?php echo $record['jurusan_d2'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Nama D3</th>
                                <td><?php echo $record['nama_d3'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Lulus D3</th>
                                <td><?php echo $record['lulus_d3'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Jurusan D3</th>
                                <td><?php echo $record['jurusan_d3'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Nama S1</th>
                                <td><?php echo $record['nama_s1'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Lulus S1</th>
                                <td><?php echo $record['lulus_s1'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Jurusan S1</th>
                                <td><?php echo $record['jurusan_s1'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Nama S2</th>
                                <td><?php echo $record['nama_s2'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Lulus S2</th>
                                <td><?php echo $record['lulus_s2'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Jurusan S2</th>
                                <td><?php echo $record['jurusan_s2'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Nama S3</th>
                                <td><?php echo $record['nama_s3'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Lulus S3</th>
                                <td><?php echo $record['lulus_s3'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Jurusan S3</th>
                                <td><?php echo $record['jurusan_s3'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-block btn-info btn-lg" data-toggle="modal" data-target="#mPendidikan">Edit Pendidikan</button>
                    </div><!-- /.box-footer -->
                </div>
            </div>
            <!--Data Keluarga-->
            <div class="col-sm-6">
                <div class="box box-success">
                    <div class="box-body">
                        <h3><span class="label label-warning col-sm-12 control-label">Data Keluarga</span></h3>
                        <table class="table-striped">
                            <tr>
                                <th width="50%">NPA</th>
                                <td><?php echo $record['npa'] ?></td>
                            </tr>
                            <tr>
                                <th width="50%">Nama Lengkap</th>
                                <td><?php echo $record['nama'] ?></td>
                            </tr>
                            <tr>
                                <th width="50%">Nama Istri</th>
                                <td><?php echo $record['nama_istri'] ?></td>
                            </tr>
                            <tr>
                                <th width="50%">Status Istri</th>
                                <td><?php echo $record['status_istri'] ?></td>
                            </tr>
                            <tr>
                                <th width="50%">Jumlah Anak</th>
                                <td><?php echo $record['jumlah_anak'] ?></td>
                            </tr>
                            <tr>
                                <th width="50%">Keterangan</th>
                                <td><?php echo $record['keterangan'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-block btn-adn btn-lg" data-toggle="modal" data-target="#mKeluarga">Edit Data Keluarga</button>
                    </div><!-- /.box-footer -->
                </div>
            </div>


        </div> <!-- Row 1 -->
        <!-- ROW kadua -->    
        <div class="row">
            <div class="col-sm-6">
                <div class="box box-success">
                    <div class="box-body">
                        <h3><span class="label label-danger col-sm-12 control-label">Data Orangtua</span></h3>
                        <table class="table-striped">
                            <tr>
                                <th width="35%">NPA</th>
                                <td><?php echo $record['npa'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Nama Lengkap</th>
                                <td><?php echo $record['nama'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Nama Ayah</th>
                                <td><?php echo $record['nama_ayah'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Status</th>
                                <td><?php echo $record['status_ayah'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Nama Ibu</th>
                                <td><?php echo $record['nama_ibu'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Status Ibu</th>
                                <td><?php echo $record['status_ibu'] ?></td>
                            </tr>
                            <tr>
                                <th width="35%">Alamat Orangtua</th>
                                <td><?php echo $record['alamat'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-block btn-bitbucket btn-lg" data-toggle="modal" data-target="#mOrangtua">Edit Data Orangtua</button>
                    </div><!-- /.box-footer -->
                </div>
            </div>

            <!--Data Organisasi-->
            <div class="col-sm-6">
                <div class="box box-success">
                    <div class="box-body">
                        <h3><span class="label label-primary col-sm-12 control-label">Data Pengalaman Organisasi</span></h3>
                        <table class="table-striped">
                            <tr>
                                <th width="60%">NPA</th>
                                <td><?php echo $record['npa'] ?></td>
                            </tr>
                            <tr>
                                <th width="60%">Nama Lengkap</th>
                                <td><?php echo $record['nama'] ?></td>
                            </tr>
                            <tr>
                                <th width="60%">Nama Organisasi 1</th>
                                <td><?php echo $record['nama_org1'] ?></td>
                            </tr>
                            <tr>
                                <th width="60%">Tahun Organisasi 1</th>
                                <td><?php echo $record['thn_org1'] ?></td>
                            </tr>
                            <tr>
                                <th width="60%">Lokasi Organisasi 1</th>
                                <td><?php echo $record['lokasi_org1'] ?></td>
                            </tr>
                            <tr>
                                <th width="60%">Jabatan Organisasi 1</th>
                                <td><?php echo $record['jabatan_org1'] ?></td>
                            </tr>
                            <tr>
                                <th width="60%">Nama Organisasi 2</th>
                                <td><?php echo $record['nama_org2'] ?></td>
                            </tr>
                            <tr>
                                <th width="60%">Tahun Organisasi 2</th>
                                <td><?php echo $record['thn_org2'] ?></td>
                            </tr>
                            <tr>
                                <th width="60%">Lokasi Organisasi 2</th>
                                <td><?php echo $record['lokasi_org1'] ?></td>
                            </tr>
                            <tr>
                                <th width="60%">Jabatan Organisasi 2</th>
                                <td><?php echo $record['jabatan_org1'] ?></td>
                            </tr>
                            <tr>
                                <th width="60%">Nama Organisasi 3</th>
                                <td><?php echo $record['nama_org1'] ?></td>
                            </tr>
                            <tr>
                                <th width="60%">Tahun Organisasi 3</th>
                                <td><?php echo $record['thn_org3'] ?></td>
                            </tr>
                            <tr>
                                <th width="60%">Lokasi Organisasi 3</th>
                                <td><?php echo $record['lokasi_org3'] ?></td>
                            </tr>
                            <tr>
                                <th width="60%">Jabatan Organisasi 3</th>
                                <td><?php echo $record['jabatan_org3'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-block btn-foursquare btn-lg" data-toggle="modal" data-target="#mOrganisasi">Edit Data Pengalaman Organisasi</button>
                    </div><!-- /.box-footer -->
                </div>
            </div>
        </div>

        <!-- ROW katilu -->    
        <div class="row">
            <!--Data Keterampilan-->
            <div class="col-sm-6">
                <div class="box box-success">
                    <div class="box-body">
                        <h3><span class="label label-success col-sm-12 control-label">Data Keterampilan</span></h3>
                        <table class="table-striped">
                            <tr>
                                <th width="75%">NPA</th>
                                <td><?php echo $record['npa'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Nama Lengkap</th>
                                <td><?php echo $record['nama'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Keterampilan 1</th>
                                <td><?php echo $record['keterampilan1'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Keterampilan 2</th>
                                <td><?php echo $record['keterampilan2'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Keterampilan 3</th>
                                <td><?php echo $record['keterampilan3'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-block btn-wa btn-lg" data-toggle="modal" data-target="#mKeterampilan">Edit Data Keterampilan</button>
                    </div><!-- /.box-footer -->
                </div>
            </div>
            <!--Data Tafiq -->
            <div class="col-sm-6">
                <div class="box box-info">
                    <div class="box-body">
                        <h3><span class="label label-info col-sm-12 control-label">Data Tafiq</span></h3>
                        <table class="table-striped">
                            <tr>
                                <th width="75%">NPA</th>
                                <td><?php echo $record['npa'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Nama Lengkap</th>
                                <td><?php echo $record['nama'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Level TAFIQ</th>
                                <td><?php echo $record['level'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Mulai</th>
                                <td><?php echo $record['mulai1'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Sampai</th>
                                <td><?php echo $record['selesai1'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Lokasi</th>
                                <td><?php echo $record['lokasi1'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Mulai</th>
                                <td><?php echo $record['mulai2'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Sampai</th>
                                <td><?php echo $record['selesai2'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Lokasi</th>
                                <td><?php echo $record['lokasi2'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Mulai</th>
                                <td><?php echo $record['mulai3'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Sampai</th>
                                <td><?php echo $record['selesai3'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Lokasi</th>
                                <td><?php echo $record['lokasi3'] ?></td>
                            </tr>
                            <tr>
                                <th width="75%">Keterangan</th>
                                <td><?php echo $record['keterangan'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-block btn-danger btn-lg" data-toggle="modal" data-target="#mTafiq">Edit Data Tafiq</button>
                    </div><!-- /.box-footer -->
                </div>
            </div>
        </div>
    </section><!-- right col -->
</div><!-- /.box -->

<!-- Modal Edit Data Pendidikan -->
<div class="modal fade" id="mPendidikan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">
                    <span class="label label-success col-sm-12">
                        <i class="fa fa-graduation-cap"> Edit Data Riwayat Pendidikan</i>
                    </span>
                </h3>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('anggota/update_data_pendidikan'); ?>" id="form" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="npa" class="col-sm-2 control-label">NPA</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="npa" name="npa" value="<?php echo $record['npa'] ?>" readonly=""> 
                        </div>
                        <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama_sd" name="nama" value="<?php echo $record['nama'] ?>" readonly=""> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_sd" class="col-sm-2 control-label">Pendidikan</label>
                        <div class="col-sm-10">
                            <select name="pendidikan" class="form-control" required>
                                <option>-- Pilih Level Pendidikan --</option>
                                <option <?php if ($record['pendidikan'] == 'SD') echo 'selected = "selected"'; ?>value="SD">Sekolah Dasar (SD)</option>
                                <option <?php if ($record['pendidikan'] == 'SMP') echo 'selected = "selected"'; ?>value="SMP">Sekolah Menengah Pertama (SMP)</option>
                                <option <?php if ($record['pendidikan'] == 'TSN') echo 'selected = "selected"'; ?>value="TSN">Tsanawiyyah (Tsn)</option>
                                <option  <?php if ($record['pendidikan'] == 'MA') echo 'selected = "selected"'; ?>value="MA">Madrasah Aliyah (MA)</option>
                                <option  <?php if ($record['pendidikan'] == 'SMA') echo 'selected = "selected"'; ?>value="SMA">Sekolah Menengah Atas (SMA)</option>
                                <option  <?php if ($record['pendidikan'] == 'SMK') echo 'selected = "selected"'; ?>value="SMK">Sekolah Menengah Kejuruan (SMK)</option>
                                <option  <?php if ($record['pendidikan'] == 'STM') echo 'selected = "selected"'; ?>value="STM">Sekolah Teknik Mesin(STM)</option>
                                <option  <?php if ($record['pendidikan'] == 'MLN') echo 'selected = "selected"'; ?>value="MLN">Mu'allimilin (Mln)</option>
                                <option  <?php if ($record['pendidikan'] == 'D!') echo 'selected = "selected"'; ?>value="D1">Diploma 1 (D1)</option>
                                <option  <?php if ($record['pendidikan'] == 'D2') echo 'selected = "selected"'; ?>value="D2">Diploma 2 (D2)</option>
                                <option <?php if ($record['pendidikan'] == 'D3') echo 'selected = "selected"'; ?>value="D3">Diploma 3 (D3)</option>
                                <option  <?php if ($record['pendidikan'] == 'S1') echo 'selected = "selected"'; ?>value="S1">Strata 1 (S1)</option>
                                <option  <?php if ($record['pendidikan'] == 'S2') echo 'selected = "selected"'; ?>value="S2">Strata 2 (S2)</option>
                                <option  <?php if ($record['pendidikan'] == 'S3') echo 'selected = "selected"'; ?>value="S3">Strata 3 (S3)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_sd" class="col-sm-2 control-label">Nama SD</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_sd" name="nama_sd" value="<?php echo $record['nama_sd'] ?>" placeholder="Nama Sekolah Dasar" required> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lulus_sd" class="col-sm-2 control-label">Lulus SD</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="lulus_sd" name="lulus_sd" value="<?php echo $record['lulus_sd'] ?>" placeholder="Tahun Lulus Sekolah Dasar" required> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_smp" class="col-sm-2 control-label">Nama SMP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_smp" name="nama_smp" value="<?php echo $record['nama_smp'] ?>" placeholder="Nama Sekolah Menengah Pertama"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lulus_smp" class="col-sm-2 control-label">Lulus SMP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lulus_smp" name="lulus_smp" value="<?php echo $record['lulus_smp'] ?>" placeholder="Tahun Lulus Sekolah Menengah Pertama"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_sma" class="col-sm-2 control-label">Nama SMA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_sma" name="nama_sma" value="<?php echo $record['nama_sma'] ?>" placeholder="Nama Sekolah Menengah Atas"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lulus_sma" class="col-sm-2 control-label">Lulus SMA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lulus_sma" name="lulus_sma" value="<?php echo $record['lulus_sma'] ?>" placeholder="Tahun Lulus Sekolah Menengah Atas"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_d1" class="col-sm-2 control-label">Nama D1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_d1" name="nama_d1" value="<?php echo $record['nama_d1'] ?>" placeholder="Nama D1"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lulus_d1" class="col-sm-2 control-label">Lulus D1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lulus_d1" name="lulus_d1" value="<?php echo $record['lulus_d1'] ?>" placeholder="Tahun Lulus D1"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jurusan_d1" class="col-sm-2 control-label">Jurusan D1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jurusan_d1" name="jurusan_d1" value="<?php echo $record['jurusan_d1'] ?>" placeholder="Jurusan D1"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_d2" class="col-sm-2 control-label">Nama D2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_d2" name="nama_d2" value="<?php echo $record['nama_d2'] ?>" placeholder="Nama D2"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lulus_d2" class="col-sm-2 control-label">Lulus D2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lulus_d2" name="lulus_d2" value="<?php echo $record['lulus_d2'] ?>" placeholder="Tahun Lulus D2"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jurusan_d2" class="col-sm-2 control-label">Jurusan D2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jurusan_d2" name="jurusan_d2" value="<?php echo $record['jurusan_d2'] ?>" placeholder="Jurusan D2"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_d3" class="col-sm-2 control-label">Nama D3</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_d3" name="nama_d3" value="<?php echo $record['nama_d3'] ?>" placeholder="Nama D3"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lulus_d3" class="col-sm-2 control-label">Lulus D3</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lulus_d3" name="lulus_d3" value="<?php echo $record['lulus_d3'] ?>" placeholder="Tahun Lulus D3"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jurusan_d3" class="col-sm-2 control-label">Jurusan D3</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jurusan_d3" name="jurusan_d3" value="<?php echo $record['jurusan_d3'] ?>" placeholder="Jurusan D3"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_s1" class="col-sm-2 control-label">Nama S1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_s1" name="nama_s1" value="<?php echo $record['nama_s1'] ?>" placeholder="Nama S1"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lulus_s1" class="col-sm-2 control-label">Lulus S1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lulus_s1" name="lulus_s1" value="<?php echo $record['lulus_s1'] ?>" placeholder="Tahun Lulus S1"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jurusan_s1" class="col-sm-2 control-label">Jurusan S1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jurusan_s1" name="jurusan_s1" value="<?php echo $record['jurusan_s1'] ?>" placeholder="Jurusan S1"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_s2" class="col-sm-2 control-label">Nama S2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_s2" name="nama_s2" value="<?php echo $record['nama_s2'] ?>" placeholder="Nama S2"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lulus_s2" class="col-sm-2 control-label">Lulus S2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lulus_d1" name="lulus_s2" value="<?php echo $record['lulus_s2'] ?>" placeholder="Tahun Lulus S2"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jurusan_s2" class="col-sm-2 control-label">Jurusan S2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jurusan_s2" name="jurusan_s2" value="<?php echo $record['jurusan_s2'] ?>" placeholder="Jurusan S2"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_s3" class="col-sm-2 control-label">Nama S3</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_s3" name="nama_s3" value="<?php echo $record['nama_s3'] ?>" placeholder="Nama S3"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lulus_s3" class="col-sm-2 control-label">Lulus S3</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lulus_s3" name="lulus_s3" value="<?php echo $record['lulus_s3'] ?>" placeholder="Tahun Lulus S3"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jurusan_s3" class="col-sm-2 control-label">Jurusan S3</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jurusan_s3" name="jurusan_s3" value="<?php echo $record['jurusan_s3'] ?>" placeholder="Jurusan S3"> 
                        </div>
                    </div>  
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Data Keluarga -->
<div class="modal fade" id="mKeluarga" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">
                    <span class="label label-success col-sm-12">
                        <i class="fa fa-graduation-cap"> Edit Data Keluarga</i>
                    </span>
                </h3>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('anggota/update_data_keluarga'); ?>" id="form" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="npa" class="col-sm-2 control-label">NPA</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="npa" name="npa" value="<?php echo $record['npa'] ?>" readonly=""> 
                        </div>
                        <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama_sd" name="nama" value="<?php echo $record['nama'] ?>" readonly=""> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_istri" class="col-sm-2 control-label">Nama Istri</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_istri" name="nama_istri" value="<?php echo $record['nama_istri'] ?>" placeholder="Nama Istri">
                        </div>
                        <label for="status_istri" class="col-sm-2 control-label">Status Istri</label>
                        <div class="col-sm-4">
                            <label>
                                <input type="radio" class="flat-red" id="status_istri" name="status_istri" <?php echo ($record['status_istri'] == 'Anggota') ? 'checked' : '' ?> value="Anggota">
                                Anggota &nbsp;&nbsp;&nbsp;
                                <input type="radio" class="flat-red" id="status_istri" name="status_istri" <?php echo ($record['status_istri'] == 'Bukan Anggota') ? 'checked' : '' ?> value="Bukan Anggota">
                                Bukan Anggota
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_anak" class="col-sm-2 control-label">Jumlah Anak</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="jumlah_anak" name="jumlah_anak" value="<?php echo $record['jumlah_anak'] ?>" placeholder="Jumlah Anak">
                        </div>
                        <label for="ket_keluarga" class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $record['keterangan'] ?>" placeholder="Keterangan">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Data Orangtua -->
<div class="modal fade" id="mOrangtua" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">
                    <span class="label label-success col-sm-12">
                        <i class="fa fa-graduation-cap"> Edit Data Orangtua</i>
                    </span>
                </h3>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('anggota/update_data_orangtua'); ?>" id="form" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="npa" class="col-sm-2 control-label">NPA</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="npa" name="npa" value="<?php echo $record['npa'] ?>" readonly=""> 
                        </div>
                        <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama_sd" name="nama" value="<?php echo $record['nama'] ?>" readonly=""> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Ayah</label>
                        <div class="col-sm-3">
                            <input type="text" name="nama_ayah" class="form-control" value="<?php echo $record['nama_ayah'] ?>" placeholder="Nama Ayah" required>
                        </div>
                        <label class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-3">
                            <label>
                                <input type="radio" class="flat-red" id="status_ayah" name="status_ayah" <?php echo ($record['status_ayah'] == 'Anggota') ? 'checked' : '' ?> value="Anggota">
                                Anggota &nbsp;&nbsp;&nbsp;
                                <input type="radio" class="flat-red" id="status_ayah" name="status_ayah" <?php echo ($record['status_ayah'] == 'Bukan Anggota') ? 'checked' : '' ?> value="Bukan Anggota">
                                Bukan Anggota
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Ibu</label>
                        <div class="col-sm-3">
                            <input type="text" name="nama_ibu" class="form-control" value="<?php echo $record['nama_ibu'] ?>" placeholder="Nama Ibu" required>
                        </div>
                        <label class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-3">
                            <label>
                                <input type="radio" class="flat-red" id="status_ibu" name="status_ibu" <?php echo ($record['status_ibu'] == 'Anggota') ? 'checked' : '' ?> value="Anggota">
                                Anggota &nbsp;&nbsp;&nbsp;
                                <input type="radio" class="flat-red" id="status_ibu" name="status_ibu" <?php echo ($record['status_ibu'] == 'Bukan Anggota') ? 'checked' : '' ?> value="Bukan Anggota">
                                Bukan Anggota
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat_ortu" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="alamat_ortu" placeholder="Alamat ..." required><?php echo $record['alamat'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ket_orangtua" class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ket_orangtua" name="ket_orangtua" value="<?php echo $record['keterangan'] ?>" placeholder="Keterangan"> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Data Keterampilan -->
<div class="modal fade" id="mKeterampilan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">
                    <span class="label label-success col-sm-12">
                        <i class="fa fa-graduation-cap"> Edit Data Keterampilan</i>
                    </span>
                </h3>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('anggota/update_data_keterampilan'); ?>" id="form" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="npa" class="col-sm-2 control-label">NPA</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="npa" name="npa" value="<?php echo $record['npa'] ?>" readonly=""> 
                        </div>
                        <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama_sd" name="nama" value="<?php echo $record['nama'] ?>" readonly=""> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keterampilan1" class="col-sm-2 control-label">Keterampilan 1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="keterampilan1" name="keterampilan1" value="<?php echo $record['keterampilan1'] ?>" placeholder="Keterampilan 1"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keterampilan1" class="col-sm-2 control-label">Keterampilan 2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="keterampilan2" name="keterampilan2" value="<?php echo $record['keterampilan2'] ?>" placeholder="Keterampilan 2"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keterampilan1" class="col-sm-2 control-label">Keterampilan 3</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="keterampilan3" name="keterampilan3" value="<?php echo $record['keterampilan3'] ?>" placeholder="Keterampilan 3"> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Data Pengalaman Organisasi -->
<div class="modal fade" id="mOrganisasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">
                    <span class="label label-success col-sm-12">
                        <i class="fa fa-graduation-cap"> Edit Data Pengalaman Organisasi</i>
                    </span>
                </h3>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('anggota/update_data_organisasi'); ?>" id="form" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="npa" class="col-sm-2 control-label">NPA</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="npa" name="npa" value="<?php echo $record['npa'] ?>" readonly=""> 
                        </div>
                        <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama_sd" name="nama" value="<?php echo $record['nama'] ?>" readonly=""> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_org1" class="col-sm-2 control-label">Nama Organisasi 1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_org1" name="nama_org1" value="<?php echo $record['nama_org1'] ?>" placeholder="Nama Organisasi 1"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tahun" class="col-sm-2 control-label">Tahun</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="thn_org1" name="thn_org1" value="<?php echo $record['thn_org1'] ?>" placeholder="Tahun"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lokasi1" name="lokasi_org1" value="<?php echo $record['lokasi_org1'] ?>" placeholder="Lokasi"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jabatan_org1" class="col-sm-2 control-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jabatan_org1" name="jabatan_org1" value="<?php echo $record['jabatan_org1'] ?>" placeholder="Jabatan"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_org2" class="col-sm-2 control-label">Nama Organisasi 2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_org2" name="nama_org2" value="<?php echo $record['nama_org2'] ?>" placeholder="Nama Organisasi 2"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tahun" class="col-sm-2 control-label">Tahun</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="thn_org2" name="thn_org2" value="<?php echo $record['thn_org1'] ?>" placeholder="Tahun"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lokasi1" name="lokasi_org2" value="<?php echo $record['lokasi_org2'] ?>" placeholder="Lokasi"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jabatan_org1" class="col-sm-2 control-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jabatan_org1" name="jabatan_org2" value="<?php echo $record['jabatan_org2'] ?>" placeholder="Jabatan"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_org3" class="col-sm-2 control-label">Nama Organisasi 3</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_org3" name="nama_org3" value="<?php echo $record['nama_org3'] ?>" placeholder="Nama Organisasi 3"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tahun" class="col-sm-2 control-label">Tahun</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="thn_org1" name="thn_org3" value="<?php echo $record['thn_org3'] ?>" placeholder="Tahun"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lokasi3" name="lokasi_org3" value="<?php echo $record['lokasi_org3'] ?>" placeholder="Lokasi"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jabatan_org1" class="col-sm-2 control-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jabatan_org3" name="jabatan_org3" value="<?php echo $record['jabatan_org3'] ?>" placeholder="Jabatan"> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Data Tafiq -->
<div class="modal fade" id="mTafiq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">
                    <span class="label label-success col-sm-12">
                        <i class="fa fa-graduation-cap"> Edit Data Tafiq</i>
                    </span>
                </h3>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('anggota/update_data_tafiq'); ?>" id="form" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="npa" class="col-sm-2 control-label">NPA</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="npa" name="npa" value="<?php echo $record['npa'] ?>" readonly=""> 
                        </div>
                        <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama_sd" name="nama" value="<?php echo $record['nama'] ?>" readonly=""> 
                        </div>
                    </div>
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
                                <input type="text" name="mulai1" class="form-control tafiq" id="mulai1" placeholder="0000-00-00" value="<?php echo $record['mulai1'] ?>">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </div>
                            </div>
                        </div>
                        <label class="col-sm-2 control-label">Sampai Tanggal</label>
                        <div class="col-sm-3">
                            <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
                                <input type="text" name="selesai1" class="form-control tafiq" placeholder="0000-00-00" value="<?php echo $record['selesai1'] ?>">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="lokasi1" placeholder="Lokasi Tafiq I" value="<?php echo $record['lokasi1'] ?>"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Dari Tanggal</label>
                        <div class="col-sm-3">
                            <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
                                <input type="text" name="mulai2" class="form-control tafiq" id="tanggal" value="<?php echo $record['mulai2'] ?>">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </div>
                            </div>
                        </div>
                        <label class="col-sm-2 control-label">Sampai Tanggal</label>
                        <div class="col-sm-3">
                            <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
                                <input type="text" name="selesai2" class="form-control tafiq" value="<?php echo $record['selesai2'] ?>">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="lokasi2" placeholder="Lokasi Tafiq II" value="<?php echo $record['lokasi2'] ?>"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Dari Tanggal</label>
                        <div class="col-sm-3">
                            <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
                                <input type="text" name="mulai3" class="form-control tafiq" id="tanggal" placeholder="0000-00-00" value="<?php echo $record['mulai3'] ?>">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </div>
                            </div>
                        </div>
                        <label class="col-sm-2 control-label">Sampai Tanggal</label>
                        <div class="col-sm-3">
                            <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
                                <input type="text" name="selesai3" class="form-control tafiq" placeholder="0000-00-00" value="<?php echo $record['selesai3'] ?>">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="lokasi3" placeholder="Lokasi Tafiq III" value="<?php echo $record['lokasi3'] ?>"> 
                        </div>
                        <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="ket_tafiq" placeholder="Keterangan" value="<?php echo $record['keterangan'] ?>"> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="<?php echo base_url('assets/jQuery/jquery-1.12.0.min.js'); ?>"></script>
<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet" >
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js'); ?>"></script>
<!--<script src="<?php echo base_url('assets/datatables-responsive/js/dataTables.responsive.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/css/dataTables.responsive.css'); ?>"></script>-->
<link href="<?php echo base_url('assets/datatables/tools/css/dataTables.tableTools.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/datatables/tools/js/dataTables.tableTools.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.min.js'); ?>"></script>

<?php $this->load->view('template/jscripts'); ?>

<script>
    $(document).ready(function () {
        $('#data_user').DataTable({
            //          "dom": "Bfrtip",  
            "buttons": ['copy', 'excel', 'pdf'],
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            "scrollX": true
        });
    });
</script>

<?php $this->load->view('template/footer'); ?>