<!--
/**
 * Description of performa_pc
 *
 * @author hendi.santika
 */
-->
<?php
$this->load->view('template/header');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<style>
    .pilih1, .pilih2, .pilih3:hover{
        cursor: pointer;
    }
</style>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Performa Jam'iyyah
            <small>Administrasi Anggota Pemuda Persis</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php base_url(''); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Performa Jam'iyyah tingkat PC </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-info">
                    <div class="box box-header">
                        <h3>Form Input Performa Jam'iyyah tingkat Pimpinan Cabang</h3>
                    </div>
                    <div class="box box-body">
                        <img class="img-responsive img-rounded center-block" 
                             src="<?php echo base_url('/assets/admin_lte/img/pemuda persis.jpg'); ?>" width="150"><br />
                        <h1 align='center'><bold>PIMPINAN PUSAT</bold></h1>
                        <h1 align='center'><bold>PEMUDA PERSATUAN ISLAM</bold></h1>
                        <hr>
                        <h3 align='center'><bold>INDEKS PERFORMA JAM’IYYAH (IPJ)</bold></h3>
                        <h3 align='center'><bold>UNTUK TINGKAT PIMPINAN CABANG (PC)</bold></h3>
                        <hr>
                        <!--<h4 align='left'><bold>PETUNJUK PENGISIAN</bold></h4>-->
                        <h3 align='left'>
                            <span class="label label-success col-sm-12 control-label">
                                <i class="fa fa-edit"> PETUNJUK PENGISIAN</i>
                            </span>
                        </h3>
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

<?php $this->load->view('template/jscripts') ?>

<script>
    //  jika dipilih, npa akan masuk ke input dan modal di tutup
// Kode PC
    $(document).on('click', '.pilih1', function (e) {
        document.getElementById("kd_pc").value = $(this).attr('data-kd_pc');
        document.getElementById("nama_pc").value = $(this).attr('data-nama_pc');
        $('#myModalPC').modal('hide');
    });
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


<?php $this->load->view('template/footer') ?>

