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

         infowindow.open(map,marker);

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
        <!-- Small boxes (Stat box) -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Profil Data Jama'ah</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <img class="img-responsive img-rounded center-block" 
                     src="<?php echo base_url('/assets/admin_lte/img/pemuda persis.jpg'); ?>" width="150"><br />
                <h2 align='center'><bold>PROFIL DATA JAMA’AH</bold></h2>
                <h2 align='center'><bold>PEMUDA PERSATUAN ISLAM</bold></h2>
                <hr>
                <?php echo form_open_multipart('jamiyyah/edit_data_jamaah', array('class' => 'form-horizontal')); ?>
                <h3 align='center'><span class="label label-success col-sm-12">
                        <i class="fa fa-user"> DATA PIMPINAN JAMA'AH</i>
                    </span>
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
            <div class="box-footer">
                <button type="submit" class="btn btn-lg btn-primary btn-block" name="edit">Edit Data Jama'ah</button>
            </div><!-- /.box-footer -->
        </div><!-- /.box -->
</div>
<?php echo form_close(); ?>
</div><!-- /.box -->
</section><!-- right col -->
</div><!-- /.box -->

<?php $this->load->view('template/jscripts'); ?>
<?php $this->load->view('template/footer'); ?>
