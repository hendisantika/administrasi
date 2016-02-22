<?php

/**
 * Description of Anggota
 *
 * @author hendi.santika
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Anggota extends CI_Controller {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $config['upload_path'] = './assets/foto/anggota';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '1024';
        $config['remove_spaces'] = 'TRUE';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('foto');

        if ($this->session->status_login != 'logged_in') {
            redirect('auth');
        }

        $this->load->model('m_wilayah');
        $this->load->model('m_user');
        $this->load->model('m_anggota');
        $this->load->database();
    }

    function index() {
        $data['provinsi'] = $this->m_wilayah->get_all_provinsi();

        $data['path'] = base_url('assets');

        $this->load->view('add_anggota', $data);
    }

    function add_ajax_kab($id_prov) {
//        $query = $this->db->get_where('wilayah_kabupaten', array('provinsi_id' => $id_prov));
        $this->db->get_where('wilayah_kabupaten', array('provinsi_id' => $id_prov));
        $this->db->order_by("nama", "asc");
        $query = $this->db->get_where('wilayah_kabupaten', array('provinsi_id' => $id_prov));
        $data = "<option value=''>- Pilih Kabupaten -</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function add_ajax_kec($id_kab) {
//        $query = $this->db->get_where('wilayah_kecamatan', array('kabupaten_id' => $id_kab));
        $this->db->get_where('wilayah_kecamatan', array('kabupaten_id' => $id_kab));
        $this->db->order_by("nama", "asc");
        $query = $this->db->get_where('wilayah_kecamatan', array('kabupaten_id' => $id_kab));
        $data = "<option value=''> - Pilih Kecamatan - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function add_ajax_des($id_kec) {
//        $query = $this->db->get_where('wilayah_desa', array('kecamatan_id' => $id_kec));
        $this->db->get_where('wilayah_desa', array('kecamatan_id' => $id_kec));
        $this->db->order_by("nama", "asc");
        $query = $this->db->get_where('wilayah_desa', array('kecamatan_id' => $id_kec));
        $data = "<option value=''> - Pilih Desa - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function post() {
        if (isset($_POST['submit']) && $_FILES['foto']) {
            $config['upload_path'] = './assets/foto/anggota/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '1024';
            $config['remove_spaces'] = 'TRUE';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');
//            $foto = $this->upload->data('full_path');
            $foto = $this->upload->data('file_name');

            // Data Pribadi
            $npa = $this->input->post('npa');
            $nama = $this->input->post('nama');
            $tempat = $this->input->post('tempat');
            $tanggal = $this->input->post('tanggal');
            $status_merital = $this->input->post('status_merital');
            $tafiq = $this->input->post('tafiq');
            $pekerjaan = $this->input->post('pekerjaan');
            $jenis_keanggotaan = $this->input->post('jenis_keanggotaan');
            $pw = $this->input->post('pw');
            $pd = $this->input->post('pd');
            $pc = $this->input->post('pc');
            $des = $this->input->post('des');
            $pj = $this->input->post('pj');
            $gol_darah = $this->input->post('gol_darah');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $no_telpon1 = $this->input->post('no_telpon1');
            $no_telpon2 = $this->input->post('no_telpon2');
            $data_pribadi = array(
                'npa' => $npa,
                'nama' => $nama,
                'tempat' => $tempat,
                'tanggal_lahir' => date('Y-m-d', strtotime($tanggal)),
                'status_merital' => $status_merital,
                'pekerjaan' => $pekerjaan,
                'pw' => $pw,
                'pd' => $pd,
                'pc' => $pc,
                'desa' => $des,
                'pj' => $pj,
                'gol_darah' => $gol_darah,
                'email' => $email,
                'no_telpon1' => $no_telpon1,
                'no_telpon2' => $no_telpon2,
                'alamat' => $alamat,
                'status' => 'Aktif',
                'tafiq' => $tafiq,
                'jenis_keanggotaan' => $jenis_keanggotaan,
                'reg_date' => date('Y-m-d H:i:sa'),
                'foto' => $foto
            );

            // Data Keluarga
            $nama_istri = $this->input->post('nama_istri');
            $status_istri = $this->input->post('status_istri');
            $jumlah_anak = $this->input->post('jumlah_anak');
            $ket_keluarga = $this->input->post('ket_keluarga');
            $data_keluarga = array(
                'npa' => $npa,
                'nama_istri' => $nama_istri,
                'status_istri' => $status_istri,
                'jumlah_anak' => $jumlah_anak,
                'keterangan' => $ket_keluarga
            );

            // Data Orangtua
            $nama_ayah = $this->input->post('nama_ayah');
            $status_ayah = $this->input->post('status_ayah');
            $nama_ibu = $this->input->post('nama_ibu');
            $status_ibu = $this->input->post('status_ibu');
            $alamat_ortu = $this->input->post('alamat_ortu');
            $ket_orangtua = $this->input->post('ket_orangtua');
            $data_orangtua = array(
                'npa' => $npa,
                'nama_ayah' => $nama_ayah,
                'status_ayah' => $status_ayah,
                'nama_ibu' => $nama_ibu,
                'status_ibu' => $status_ibu,
                'alamat' => $alamat_ortu,
                'keterangan' => $ket_orangtua
            );

            // Data Pendidikan
            $nama_sd = $this->input->post('nama_sd');
            $lulus_sd = $this->input->post('lulus_sd');
            $nama_smp = $this->input->post('nama_smp');
            $lulus_smp = $this->input->post('lulus_smp');
            $nama_sma = $this->input->post('nama_sma');
            $lulus_sma = $this->input->post('lulus_sma');
            $nama_d1 = $this->input->post('nama_d1');
            $lulus_d1 = $this->input->post('lulus_d1');
            $jurusan_d1 = $this->input->post('jurusan_d1');
            $nama_d2 = $this->input->post('nama_d2');
            $lulus_d2 = $this->input->post('lulus_d2');
            $jurusan_d2 = $this->input->post('jurusan_d2');
            $nama_d3 = $this->input->post('nama_d3');
            $lulus_d3 = $this->input->post('lulus_d3');
            $jurusan_d3 = $this->input->post('jurusan_d3');
            $nama_s1 = $this->input->post('nama_s1');
            $lulus_s1 = $this->input->post('lulus_s1');
            $jurusan_s1 = $this->input->post('jurusan_s1');
            $nama_s2 = $this->input->post('nama_s2');
            $lulus_s2 = $this->input->post('lulus_s2');
            $jurusan_s2 = $this->input->post('jurusan_s2');
            $nama_s3 = $this->input->post('nama_s3');
            $lulus_s3 = $this->input->post('lulus_s3');
            $jurusan_s3 = $this->input->post('jurusan_s3');
            $data_pendidikan = array(
                'npa' => $npa,
                'nama_sd' => $nama_sd,
                'lulus_sd' => $lulus_sd,
                'nama_smp' => $nama_smp,
                'lulus_smp' => $lulus_smp,
                'nama_sma' => $nama_sma,
                'lulus_sma' => $lulus_sma,
                'nama_d1' => $nama_d1,
                'lulus_d1' => $lulus_d1,
                'jurusan_d1' => $jurusan_d1,
                'nama_d2' => $nama_d2,
                'lulus_d2' => $lulus_d2,
                'jurusan_d2' => $jurusan_d2,
                'nama_d3' => $nama_d3,
                'lulus_d3' => $lulus_d3,
                'jurusan_d3' => $jurusan_d3,
                'nama_s1' => $nama_s1,
                'lulus_s1' => $lulus_s1,
                'jurusan_s1' => $jurusan_s1,
                'nama_s2' => $nama_s2,
                'lulus_s2' => $lulus_s2,
                'jurusan_s2' => $jurusan_s2,
                'nama_s3' => $nama_s3,
                'lulus_s3' => $lulus_s3,
                'jurusan_s3' => $jurusan_s3
            );

            // Data Pengalaman Organisasi
            $nama_org1 = $this->input->post('nama_org1');
            $thn_org1 = $this->input->post('thn_org1');
            $lokasi_org1 = $this->input->post('lokasi_org1');
            $jabatan_org1 = $this->input->post('jabatan_org1');
            $nama_org2 = $this->input->post('nama_org2');
            $thn_org2 = $this->input->post('thn_org2');
            $lokasi_org2 = $this->input->post('lokasi_org2');
            $jabatan_org2 = $this->input->post('jabatan_org2');
            $nama_org3 = $this->input->post('nama_org3');
            $thn_org3 = $this->input->post('thn_org3');
            $lokasi_org3 = $this->input->post('lokasi_org3');
            $jabatan_org3 = $this->input->post('jabatan_org3');
            $data_organisasi = array(
                'npa' => $npa,
                'nama_org1' => $nama_org1,
                'thn_org1' => $thn_org1,
                'lokasi_org1' => $lokasi_org1,
                'jabatan_org1' => $jabatan_org1,
                'nama_org2' => $nama_org2,
                'thn_org2' => $thn_org2,
                'lokasi_org2' => $lokasi_org2,
                'jabatan_org2' => $jabatan_org2,
                'nama_org3' => $nama_org3,
                'thn_org3' => $thn_org3,
                'lokasi_org3' => $lokasi_org3,
                'jabatan_org3' => $jabatan_org3
            );

            // Data Keterampilan
            $keterampilan1 = $this->input->post('keterampilan1');
            $keterampilan2 = $this->input->post('keterampilan2');
            $keterampilan3 = $this->input->post('keterampilan3');
            $data_keterampilan = array(
                'npa' => $npa,
                'keterampilan1' => $keterampilan1,
                'keterampilan2' => $keterampilan2,
                'keterampilan3' => $keterampilan3
            );

            // Data TAFIQ
            $level = $this->input->post('level');
            $mulai = $this->input->post('mulai');
            $selesai = $this->input->post('selesai');
            $lokasi = $this->input->post('lokasi');
            $data_tafiq = array(
                'npa' => $npa,
                'level' => $level,
                'mulai' => date('Y-m-d', strtotime($mulai)),
                'selesai' => date('Y-m-d', strtotime($selesai)),
                'lokasi' => $lokasi
            );

//            echo 'Data Pribadi';
//            echo '<br/>';
//            print_r($data_pribadi);
//            echo '<br/>';
//
//            echo 'Data Keluarga';
//            echo '<br/>';
//            print_r($data_keluarga);
//            echo '<br/>';
//
//            echo 'Data Orangtua';
//            echo '<br/>';
//            print_r($data_orangtua);
//            echo '<br/>';
//
//            echo 'Data Pendidikan';
//            echo '<br/>';
//            print_r($data_pendidikan);
//            echo '<br/>';
//
//            echo 'Data Organisasi';
//            echo '<br/>';
//            print_r($data_organisasi);
//            echo '<br/>';
//
//            echo 'Data Keterampilan';
//            echo '<br/>';
//            print_r($data_keterampilan);
//             echo '<br/>';
//            $error = array('error' => $this->upload->display_errors());
//            print_r($error);
//            die();
            $this->m_anggota->simpan($data_pribadi, $data_keluarga, $data_orangtua, $data_pendidikan, $data_organisasi, $data_keterampilan, $data_tafiq);
//            $this->load->view('lihat_anggota');
            redirect('anggota/lihat_anggota');
        } else {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            die();
//            $this->load->view('dashboard1');
        }
    }

    public function lihat_anggota() {
        $this->load->model('m_anggota');
        $data_anggota = $this->m_anggota->lihat_anggota();
        $this->load->vars('a', $data_anggota);
        $this->load->view('lihat_anggota');
    }

    public function details() {
        $npa = $this->uri->segment(3);
        $data['record'] = $this->m_anggota->cekNpa($npa)->row_array();
        $this->load->view('lihat_anggota_details', $data);
    }

    public function edit() {
        $data['provinsi'] = $this->m_wilayah->get_all_provinsi();
        $data['kabupaten'] = $this->m_wilayah->get_all_kabupaten();
        $data['kecamatan'] = $this->m_wilayah->get_all_kecamatan();
        $data['deso'] = $this->m_wilayah->get_all_desa();
        $data['path'] = base_url('assets');

        $npa = $this->uri->segment(3);
        if ($npa == NULL) {
            redirect('anggota/lihat_anggota');
        }

//        if (isset($_POST['submit'])) {
//            $this->m_anggota->post();
//            redirect('user');
//        }
        else {
//            echo $npa; die;
            $data['record'] = $this->m_anggota->cekNpa($npa)->row_array();

            $dt = $this->m_anggota->edit($npa);
//            $dt = $this->m_anggota->cekNpa($npa);
            // Data Pribadi
            $data['npa'] = $dt->npa;
            $data['nama'] = $dt->nama;
            $data['tempat'] = $dt->tempat;
            $data['tanggal_lahir'] = $dt->tanggal_lahir;
            $data['pekerjaan'] = $dt->pekerjaan;
            $data['status_merital'] = $dt->status_merital;
            $data['pw'] = $dt->pw;
            $data['pd'] = $dt->pd;
            $data['pc'] = $dt->pc;
            $data['desa'] = $dt->desa;
            $data['pj'] = $dt->pj;
            $data['gol_darah'] = $dt->gol_darah;
            $data['email'] = $dt->email;
            $data['no_telpon1'] = $dt->no_telpon1;
            $data['no_telpon2'] = $dt->no_telpon2;
            $data['tafiq'] = $dt->tafiq;
            $data['jenis_keanggotaan'] = $dt->jenis_keanggotaan;
            $data['alamat'] = $dt->alamat;
            $data['keterangan'] = $dt->keterangan;
            $data['foto'] = $dt->foto;

            $this->load->view('edit_anggota', $data);
        }
    }

    public function update() {
        // Data Pribadi
        $npa = $this->input->post('npa');
        $nama = $this->input->post('nama');
        $tempat = $this->input->post('tempat');
        $tanggal = $this->input->post('tanggal');
        $status_merital = $this->input->post('status_merital');
        $pekerjaan = $this->input->post('pekerjaan');
        $pw = $this->input->post('prov');
        $pd = $this->input->post('kab');
        $pc = $this->input->post('kec');
        $des = $this->input->post('des');
        $pj = $this->input->post('pj');
        $gol_darah = $this->input->post('gol_darah');
        $tafiq = $this->input->post('tafiq');
        $jenis_keanggotaan = $this->input->post('jenis_keanggotaan');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $no_telpon1 = $this->input->post('no_telpon1');
        $no_telpon2 = $this->input->post('no_telpon2');
        $data_pribadi = array(
            'npa' => $npa,
            'nama' => $nama,
            'tempat' => $tempat,
            'tanggal_lahir' => date('Y-m-d', strtotime($tanggal)),
            'status_merital' => $status_merital,
            'pekerjaan' => $pekerjaan,
            'pw' => $pw,
            'pd' => $pd,
            'pc' => $pc,
            'desa' => $des,
            'pj' => $pj,
            'gol_darah' => $gol_darah,
            'tafiq' => $tafiq,
            'jenis_keanggotaan' => $jenis_keanggotaan,
            'email' => $email,
            'no_telpon1' => $no_telpon1,
            'no_telpon2' => $no_telpon2,
            'alamat' => $alamat,
            'last_updated' => date('Y-m-d H:i:sa')
//                'foto' => $foto
        );
        if (isset($_POST['submit'])) {

//            $foto = $this->upload->data('full_path');
            $foto = $this->upload->data('file_name');

//            echo 'Data Pribadi';
//            echo '<br/>';
//            print_r($data_pribadi);
//            echo '<br/>';
//            $error = array('error' => $this->upload->display_errors());
//            print_r($error);
//            die();

            $this->m_anggota->update($npa, $data_pribadi);
            redirect('anggota/lihat_anggota');
        } else {
            echo 'Data Pribadi Error';
            echo '<br>';
            print_r($data_pribadi);
            die();
        }
    }

    public function ganti_foto() {
        $this->load->view('ganti_foto');
    }

    public function update_data_pendidikan() {
        // Data Pendidikan
        $npa = $this->input->post('npa');
        $pendidikan = $this->input->post('pendidikan');
        $nama_sd = $this->input->post('nama_sd');
        $lulus_sd = $this->input->post('lulus_sd');
        $nama_smp = $this->input->post('nama_smp');
        $lulus_smp = $this->input->post('lulus_smp');
        $nama_sma = $this->input->post('nama_sma');
        $lulus_sma = $this->input->post('lulus_sma');
        $nama_d1 = $this->input->post('nama_d1');
        $lulus_d1 = $this->input->post('lulus_d1');
        $jurusan_d1 = $this->input->post('lulus_d1');
        $nama_d2 = $this->input->post('nama_d2');
        $lulus_d2 = $this->input->post('lulus_d2');
        $jurusan_d2 = $this->input->post('lulus_d2');
        $nama_d3 = $this->input->post('nama_d3');
        $lulus_d3 = $this->input->post('lulus_d3');
        $jurusan_d3 = $this->input->post('jurusan_d3');
        $nama_s1 = $this->input->post('nama_s1');
        $lulus_s1 = $this->input->post('lulus_s1');
        $jurusan_s1 = $this->input->post('jurusan_s1');
        $nama_s2 = $this->input->post('nama_s2');
        $lulus_s2 = $this->input->post('lulus_s2');
        $jurusan_s2 = $this->input->post('lulus_s2');
        $nama_s3 = $this->input->post('nama_s3');
        $lulus_s3 = $this->input->post('lulus_s3');
        $jurusan_s3 = $this->input->post('lulus_s3');
        $data_pendidikan = array(
            'npa' => $npa,
            'pendidikan' => $pendidikan,
            'nama_sd' => $nama_sd,
            'lulus_sd' => $lulus_sd,
            'nama_smp' => $nama_smp,
            'lulus_smp' => $lulus_smp,
            'nama_sma' => $nama_sma,
            'lulus_sma' => $lulus_sma,
            'nama_d1' => $nama_d1,
            'lulus_d1' => $lulus_d1,
            'jurusan_d1' => $jurusan_d1,
            'nama_d2' => $nama_d2,
            'lulus_d2' => $lulus_d2,
            'jurusan_d2' => $jurusan_d2,
            'nama_d3' => $nama_d3,
            'lulus_d3' => $lulus_d3,
            'jurusan_d3' => $jurusan_d3,
            'nama_s1' => $nama_s1,
            'lulus_s1' => $lulus_s1,
            'jurusan_s1' => $jurusan_s1,
            'nama_s2' => $nama_s2,
            'lulus_s2' => $lulus_s2,
            'jurusan_s2' => $jurusan_s2,
            'nama_s3' => $nama_s3,
            'lulus_s3' => $lulus_s3,
            'jurusan_s3' => $jurusan_s3
        );

        if (isset($_POST['submit'])) {

//            echo 'Data Pendidikan Sukses';
//            echo '<br/>';
//            print_r($data_pendidikan);
//            echo '<br/>';
            $this->m_anggota->update_data_pendidikan($npa, $data_pendidikan);
            redirect('anggota/details/' . $npa);
        } else {
            echo 'Data Pendidikan Error';
            echo '<br/>';
            print_r($data_pendidikan);
            echo '<br/>';
            redirect('anggota/details/' . $npa);
        }
    }

    public function update_data_keluarga() {
        // Data Keluarga
        $npa = $this->input->post('npa');
        $nama_istri = $this->input->post('nama_istri');
        $status_istri = $this->input->post('status_istri');
        $jumlah_anak = $this->input->post('jumlah_anak');
        $keterangan = $this->input->post('keterangan');
        $data_keluarga = array(
            'npa' => $npa,
            'nama_istri' => $nama_istri,
            'status_istri' => $status_istri,
            'jumlah_anak' => $jumlah_anak,
            'keterangan' => $keterangan,
        );

        if (isset($_POST['submit'])) {
//            echo 'Data Keluarga Sukses';
//            echo '<br/>';
//            print_r($data_keluarga);
//            echo '<br/>';
//            die();
            $this->m_anggota->update_data_keluarga($npa, $data_keluarga);
            redirect('anggota/details/' . $npa);
        } else {
            echo 'Data Keluarga Error';
            echo '<br/>';
            print_r($data_keluarga);
            echo '<br/>';
            redirect('anggota/details/' . $npa);
        }
    }

    public function update_data_orangtua() {
        // Data Orangtua
        $npa = $this->input->post('npa');
        $nama_ayah = $this->input->post('nama_ayah');
        $status_ayah = $this->input->post('status_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $status_ibu = $this->input->post('status_ibu');
        $alamat_ortu = $this->input->post('alamat_ortu');
        $data_orangtua = array(
            'npa' => $npa,
            'nama_ayah' => $nama_ayah,
            'status_ayah' => $status_ayah,
            'nama_ibu' => $nama_ibu,
            'status_ibu' => $status_ibu,
            'alamat' => $alamat_ortu
        );


        if (isset($_POST['submit'])) {
//            echo 'Data Orangtua Sukses';
//            echo '<br/>';
//            print_r($data_orangtua);
//            echo '<br/>';
//            die();
            $this->m_anggota->update_data_orangtua($npa, $data_orangtua);
            redirect('anggota/details/' . $npa);
        } else {
            echo 'Data Orangtua Error';
            echo '<br/>';
            print_r($data_orangtua);
            echo '<br/>';
            redirect('anggota/details/' . $npa);
        }
    }

    public function update_data_keterampilan() {
        // Data Keterampilan
        $npa = $this->input->post('npa');
        $keterampilan1 = $this->input->post('keterampilan1');
        $keterampilan2 = $this->input->post('keterampilan2');
        $keterampilan3 = $this->input->post('keterampilan3');
        $data_keterampilan = array(
            'npa' => $npa,
            'keterampilan1' => $keterampilan1,
            'keterampilan2' => $keterampilan2,
            'keterampilan3' => $keterampilan3
        );


        if (isset($_POST['submit'])) {
//            echo 'Data Keterampilan Sukses';
//            echo '<br/>';
//            print_r($data_keterampilan);
//            echo '<br/>';
//            die();
            $this->m_anggota->update_data_keterampilan($npa, $data_keterampilan);
            redirect('anggota/details/' . $npa);
        } else {
            echo 'Data Keterampilan Error';
            echo '<br/>';
            print_r($data_keterampilan);
            echo '<br/>';
            redirect('anggota/details/' . $npa);
        }
    }

    public function update_data_tafiq() {
        // Data TAFIQ
        $npa = $this->input->post('npa');
        $level = $this->input->post('level');
        $mulai = $this->input->post('mulai');
        $selesai = $this->input->post('selesai');
        $lokasi = $this->input->post('lokasi');
        $data_tafiq = array(
            'npa' => $npa,
            'level' => $level,
            'mulai' => $mulai,
            'selesai' => $selesai,
            'lokasi' => $lokasi
        );

        if (isset($_POST['submit'])) {
//            echo 'Data Tafiq Sukses';
//            echo '<br/>';
//            print_r($data_keterampilan);
//            echo '<br/>';
//            die();
            $this->m_anggota->update_data_tafiq($npa, $data_tafiq);
            redirect('anggota/details/' . $npa);
        } else {
            echo 'Data Tafiq Error';
            echo '<br/>';
            print_r($data_tafiq);
            echo '<br/>';
            redirect('anggota/details/' . $npa);
        }
    }

    public function update_data_organisasi() {
        // Data Pengalaman Organisasi
        $npa = $this->input->post('npa');
        $nama_org1 = $this->input->post('nama_org1');
        $thn_org1 = $this->input->post('thn_org1');
        $lokasi_org1 = $this->input->post('lokasi_org1');
        $jabatan_org1 = $this->input->post('jabatan_org1');
        $nama_org2 = $this->input->post('nama_org2');
        $thn_org2 = $this->input->post('thn_org2');
        $lokasi_org2 = $this->input->post('lokasi_org2');
        $jabatan_org2 = $this->input->post('jabatan_org2');
        $nama_org3 = $this->input->post('nama_org3');
        $thn_org3 = $this->input->post('thn_org3');
        $lokasi_org3 = $this->input->post('lokasi_org3');
        $jabatan_org3 = $this->input->post('jabatan_org3');
        $data_organisasi = array(
            'npa' => $npa,
            'nama_org1' => $nama_org1,
            'thn_org1' => $thn_org1,
            'lokasi_org1' => $lokasi_org1,
            'jabatan_org1' => $jabatan_org1,
            'nama_org2' => $nama_org2,
            'thn_org2' => $thn_org2,
            'lokasi_org2' => $lokasi_org2,
            'jabatan_org2' => $jabatan_org2,
            'nama_org3' => $nama_org3,
            'thn_org3' => $thn_org3,
            'lokasi_org3' => $lokasi_org3,
            'jabatan_org3' => $jabatan_org3
        );

        if (isset($_POST['submit'])) {
//            echo 'Data Organisasi Sukses';
//            echo '<br/>';
//            print_r($data_organisasi);
//            echo '<br/>';
//            die();
            $this->m_anggota->update_data_organisasi($npa, $data_organisasi);
            redirect('anggota/details/' . $npa);
        } else {
            echo 'Data Organisasi Error';
            echo '<br/>';
            print_r($data_organisasi);
            echo '<br/>';
            redirect('anggota/details/' . $npa);
        }
    }

    function delete() {
        $npa = $this->uri->segment(3);
        $this->m_anggota->delete($npa);
        redirect('anggota/lihat_anggota');
    }

}
