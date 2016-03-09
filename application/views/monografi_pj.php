<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/topbar'); ?>
<?php $this->load->view('template/sidebar'); ?>

<style>
    .pilih1, .pilih2, .pilih3:hover{
        cursor: pointer;
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
            <li class="active">Input Data Jama'ah</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Input Data Jama'ah</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <img class="img-responsive img-rounded center-block" 
                     src="<?php echo base_url('/assets/admin_lte/img/pemuda persis.jpg'); ?>" width="150"><br />
                <h2 align='center'><bold>INPUT DATA JAMA’AH</bold></h2>
                <h2 align='center'><bold>PEMUDA PERSATUAN ISLAM</bold></h2>
                <hr>
                <?php echo form_open_multipart('jamiyyah/add_data_jamaah', array('class' => 'form-horizontal')); ?>
                <h3 align='center'><span class="label label-success col-sm-12">
                        <i class="fa fa-user"> DATA PIMPINAN JAMA'AH</i>
                    </span>
                </h3>
                <hr><br>
                <div class="form-group">
                    <label for="kd_pj" class="col-sm-2 control-label">Kode PJ</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="kd_pj" placeholder="Kode PJ" required> 
                    </div>
                    <label for="nama_jamaah" class="col-sm-2 control-label">Nama Jama'ah</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama_jamaah" placeholder="Nama Jama'ah" required> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_pc" class="col-sm-2 control-label">Nomor PC</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="no_pc" id="kd_pc" placeholder="Nomor PC" readonly="" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="nama_pc" id="nama_pc" placeholder="Nama PC" readonly="" required>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalPC"><i class="glyphicon glyphicon-search"> Cari</i></button>
                    </div>
                </div>
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
                <div class="form-group">
                    <label for="desa" class="col-sm-2 control-label">Desa</label>
                    <div class="col-sm-10">
                        <select name="desa" class="form-control" id="desa" required>
                            <option>- Pilih Desa -</option>
                        </select>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="latitude" class="col-sm-2 control-label">Latitude / Garis Lintang</label>
                    <div class="col-sm-4">
                        <input type="number" step="any" class="form-control" name="latitude" placeholder="Latitude / Garis Lintang" required>
                    </div>
                    <label for="longitude" class="col-sm-2 control-label">Longitude / Garis Bujur</label>
                    <div class="col-sm-4">
                        <input type="number" step="any" class="form-control" name="longitude" placeholder="Longitude / Garis Bujur" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Musyjam terakhir</label>
                    <div class="col-sm-3">
                        <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
                            <input type="text" name="musyjam_terakhir" class="form-control" id="tanggal" placeholder="0000-00-00" required>
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ketua_pj" class="col-sm-2 control-label">Ketua PJ</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ketua_pj" placeholder="Nama Ketua PJ" required> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="sekretaris" class="col-sm-2 control-label">Sekretaris</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sekretaris_pj" placeholder="Nama Sekretaris" required> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="bendahara" class="col-sm-2 control-label">Bendahara</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="bendahara_pj" placeholder="Nama Bendahara" required> 
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
                        <input type="text" class="form-control" name="alamat_pj" placeholder="Alamat Lengkap" required> 
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
</script>

<?php $this->load->view('template/footer'); ?>