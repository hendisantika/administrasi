<?php

/**
 * Description of Jamiyyah
 *
 * @author hendi.santika
 */
class Jamiyyah extends CI_Controller {

    public function __construct() {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->session->userdata('logged_in');
        if ($this->session->status_login != 'logged_in') {
            redirect('auth');
        }

        $this->load->helper(array('url', 'html'));
        $this->load->model(array('m_wilayah', 'm_user', 'm_anggota', 'm_jamiyyah'));
        $this->load->database();
    }

    public function index() {
        $data_pc = $this->m_user->index();
        $this->load->vars('pc', $data_pc);
        $this->load->view('lookup');
    }

    public function pc() {
        $data['provinsi'] = $this->m_wilayah->get_all_provinsi();
//        $data['kabupaten']  = $this->m_wilayah->get_all_kabupaten();
//        $data['kecamatan']  = $this->m_wilayah->get_all_kecamatan();
        $data['path'] = base_url('assets');
//
//        $this->load->view('monografi_pc', $data);
//        $this->load->model('m_wilayah');
        $data_pc = $this->m_wilayah->get_all_pc();
        $data_pd = $this->m_wilayah->get_all_pd();
        $data_pw = $this->m_wilayah->get_all_pw();
//        $this->load->vars('u', $data_pc, $data_pd, $data_pw);
        $this->load->vars('pc', $data_pc);
        $this->load->vars('pd', $data_pd);
        $this->load->vars('pw', $data_pw);
        $this->load->view('monografi_pc', $data);
    }
    
    public function pd() {
        $data['provinsi'] = $this->m_wilayah->get_all_provinsi();
//        $data['kabupaten']  = $this->m_wilayah->get_all_kabupaten();
//        $data['kecamatan']  = $this->m_wilayah->get_all_kecamatan();
        $data['path'] = base_url('assets');
//
//        $this->load->view('monografi_pc', $data);
//        $this->load->model('m_wilayah');
        $data_pc = $this->m_wilayah->get_all_pc();
        $data_pd = $this->m_wilayah->get_all_pd();
        $data_pw = $this->m_wilayah->get_all_pw();
//        $this->load->vars('u', $data_pc, $data_pd, $data_pw);
        $this->load->vars('pc', $data_pc);
        $this->load->vars('pd', $data_pd);
        $this->load->vars('pw', $data_pw);
        $this->load->view('monografi_pd', $data);
    }

    public function pj() {
         $data['provinsi'] = $this->m_wilayah->get_all_provinsi();
//        $data['kabupaten']  = $this->m_wilayah->get_all_kabupaten();
//        $data['kecamatan']  = $this->m_wilayah->get_all_kecamatan();
        $data['path'] = base_url('assets');
//
//        $this->load->view('monografi_pc', $data);
//        $this->load->model('m_wilayah');
        $data_pc = $this->m_wilayah->get_all_pc();
        $data_pd = $this->m_wilayah->get_all_pd();
        $data_pw = $this->m_wilayah->get_all_pw();
//        $this->load->vars('u', $data_pc, $data_pd, $data_pw);
        $this->load->vars('pc', $data_pc);
        $this->load->vars('pd', $data_pd);
        $this->load->vars('pw', $data_pw);
        $this->load->view('monografi_pj', $data);
        
    }

    public function performa_pc() {
        $data['provinsi'] = $this->m_wilayah->get_all_provinsi();

        $data['path'] = base_url('assets');

        $data_pc = $this->m_wilayah->get_all_pc();
        $data_pd = $this->m_wilayah->get_all_pd();
        $data_pw = $this->m_wilayah->get_all_pw();
        $this->load->vars('pc', $data_pc);
        $this->load->vars('pd', $data_pd);
        $this->load->vars('pw', $data_pw);

        $this->load->view('performa_pc', $data);
    }

    public function performa_pd() {
        $data['provinsi'] = $this->m_wilayah->get_all_provinsi();

        $data['path'] = base_url('assets');

        $data_pd = $this->m_wilayah->get_all_pd();
        $data_pw = $this->m_wilayah->get_all_pw();
        $this->load->vars('pd', $data_pd);
        $this->load->vars('pw', $data_pw);

        $this->load->view('performa_pd', $data);
    }

    public function save_performa_pc() {
        if (isset($_POST['submit'])) {
            $kd_pc = $this->input->post('kd_pc');
            // Tasykil
            $q1a = $this->input->post('q1a');
            $q2a = $this->input->post('q2a');
            $q3a = $this->input->post('q3a');
            $q4a = $this->input->post('q4a');
            $q5a = $this->input->post('q5a');
            $q6a = $this->input->post('q6a');

            // Aktivitas Jam'iyyah & Partisipasi Anggota
            $q1b = $this->input->post('q1b');
            $q2b = $this->input->post('q2b');
            $q3b = $this->input->post('q3b');
            $q4b = $this->input->post('q4b');
            $q5b = $this->input->post('q5b');
            $q6b = $this->input->post('q6b');
            $q7b = $this->input->post('q7b');
            $q8b = $this->input->post('q8b');
            $q9b = $this->input->post('q9b');
            $q10b = $this->input->post('q10b');

            // Kaderisasi
            $q1c = $this->input->post('q1c');
            $q2c = $this->input->post('q2c');
            $q3c = $this->input->post('q3c');

            // Administrasi Jam'iyyah
            $q1d = $this->input->post('q1d');
            $q2d = $this->input->post('q2d');
            $q3d = $this->input->post('q3d');
            $q4d = $this->input->post('q4d');
            $q5d = $this->input->post('q5d');
            $q6d = $this->input->post('q6d');
            $q7d = $this->input->post('q7d');
            $q8d = $this->input->post('q8d');
            $q9d = $this->input->post('q9d');
            $q10d = $this->input->post('q10d');
            $q11d = $this->input->post('q11d');
            $q12d = $this->input->post('q12d');
            $q13d = $this->input->post('q13d');
            $q14d = $this->input->post('q14d');
            $q15d = $this->input->post('q15d');
            $q16d = $this->input->post('q16d');
            $q17d = $this->input->post('q17d');
            $q18d = $this->input->post('q18d');
            $q19d = $this->input->post('q19d');
            $q20d = $this->input->post('q20d');
            $q21d = $this->input->post('q21d');
            $q22d = $this->input->post('q22d');
            $q23d = $this->input->post('q23d');
            $q24d = $this->input->post('q24d');
            $q25d = $this->input->post('q25d');
            $q26d = $this->input->post('q26d');
            $q27d = $this->input->post('q27d');
            $q28d = $this->input->post('q28d');

            // Musyawarah
            $q1e = $this->input->post('q1e');
            $q2e = $this->input->post('q2e');
            $q3e = $this->input->post('q3e');
            $q4e = $this->input->post('q4e');
            $q5e = $this->input->post('q5e');
            $q6e = $this->input->post('q6e');
            $q7e = $this->input->post('q7e');
            $q8e = $this->input->post('q8e');
            $q9e = $this->input->post('q9e');
            $q10e = $this->input->post('q10e');

            // Keuangan Jam'iyyah
            $q1f = $this->input->post('q1f');
            $q2f = $this->input->post('q2f');
            $q3f = $this->input->post('q3f');
            $q4f = $this->input->post('q4f');
            $q5f = $this->input->post('q5f');
            $q6f = $this->input->post('q6f');
            $q7f = $this->input->post('q7f');

            $data = array(
                'kd_pc' => $kd_pc,
                // Tasykil
                'q1a' => $q1a, 'q2a' => $q2a, 'q3a' => $q3a, 'q4a' => $q4a, 'q5a' => $q5a, 'q6a' => $q6a,
                // Aktivitas Jam'iyyah & Partisipasi Anggota
                'q1b' => $q1b, 'q2b' => $q2b, 'q3b' => $q3b, 'q4b' => $q4b, 'q5b' => $q5b, 'q6b' => $q6b,
                'q7b' => $q7b, 'q8b' => $q8b, 'q9b' => $q9b, 'q10b' => $q10b,
                // Kaderisasi
                'q1c' => $q1c, 'q2c' => $q2c, 'q3c' => $q3c,
                // Administrasi Jam'iyyah
                'q1d' => $q1d, 'q2d' => $q2d, 'q3d' => $q3d, 'q4d' => $q4d, 'q5d' => $q5d, 'q6d' => $q6d,
                'q7d' => $q7d, 'q8d' => $q8d, 'q9d' => $q9d, 'q10d' => $q10d, 'q11d' => $q11d, 'q12d' => $q12d,
                'q13d' => $q13d, 'q14d' => $q14d, 'q15d' => $q15d, 'q16d' => $q16d, 'q17d' => $q17d, 'q18d' => $q18d,
                'q19d' => $q19d, 'q20d' => $q20d, 'q21d' => $q21d, 'q22d' => $q22d, 'q23d' => $q23d, 'q24d' => $q24d,
                'q25d' => $q25d, 'q26d' => $q26d, 'q27d' => $q27d, 'q28d' => $q28d,
                // Musyawarah
                'q1e' => $q1e, 'q2e' => $q2e, 'q3e' => $q3e, 'q4e' => $q4e, 'q5e' => $q5e, 'q6e' => $q6e,
                'q7e' => $q7e, 'q8e' => $q8e, 'q9e' => $q9e, 'q10e' => $q10e,
                // Keuangan Jam'iyyah
                'q1f' => $q1f, 'q2f' => $q2f, 'q3f' => $q3f, 'q4f' => $q4f, 'q5f' => $q5f, 'q6f' => $q6f,
                'q7f' => $q7f,
                'last_survey' => date('Y-m-d H:i:sa')
            );

//            print_r($data); die();
            $this->m_jamiyyah->simpan_performa_pc($data);
            redirect('jamiyyah/pc');
        } else {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            die();
        }
    }

    public function save_performa_pd() {
        if (isset($_POST['submit'])) {
            $kd_pd = $this->input->post('kd_pd');
            // Tasykil
            $q1a = $this->input->post('q1a');
            $q2a = $this->input->post('q2a');
            $q3a = $this->input->post('q3a');
            $q4a = $this->input->post('q4a');
            $q5a = $this->input->post('q5a');
            $q6a = $this->input->post('q6a');

            // Aktivitas Jam'iyyah & Partisipasi Anggota
            $q1b = $this->input->post('q1b');
            $q2b = $this->input->post('q2b');
            $q3b = $this->input->post('q3b');
            $q4b = $this->input->post('q4b');
            $q5b = $this->input->post('q5b');
            $q6b = $this->input->post('q6b');
            $q7b = $this->input->post('q7b');
            $q8b = $this->input->post('q8b');
            $q9b = $this->input->post('q9b');
            $q10b = $this->input->post('q10b');

            // Kaderisasi
            $q1c = $this->input->post('q1c');
            $q2c = $this->input->post('q2c');
            $q3c = $this->input->post('q3c');

            // Administrasi Jam'iyyah
            $q1d = $this->input->post('q1d');
            $q2d = $this->input->post('q2d');
            $q3d = $this->input->post('q3d');
            $q4d = $this->input->post('q4d');
            $q5d = $this->input->post('q5d');
            $q6d = $this->input->post('q6d');
            $q7d = $this->input->post('q7d');
            $q8d = $this->input->post('q8d');
            $q9d = $this->input->post('q9d');
            $q10d = $this->input->post('q10d');
            $q11d = $this->input->post('q11d');
            $q12d = $this->input->post('q12d');
            $q13d = $this->input->post('q13d');
            $q14d = $this->input->post('q14d');
            $q15d = $this->input->post('q15d');
            $q16d = $this->input->post('q16d');
            $q17d = $this->input->post('q17d');
            $q18d = $this->input->post('q18d');
            $q19d = $this->input->post('q19d');
            $q20d = $this->input->post('q20d');
            $q21d = $this->input->post('q21d');
            $q22d = $this->input->post('q22d');
            $q23d = $this->input->post('q23d');
            $q24d = $this->input->post('q24d');
            $q25d = $this->input->post('q25d');
            $q26d = $this->input->post('q26d');
            $q27d = $this->input->post('q27d');
            $q28d = $this->input->post('q28d');

            // Musyawarah
            $q1e = $this->input->post('q1e');
            $q2e = $this->input->post('q2e');
            $q3e = $this->input->post('q3e');
            $q4e = $this->input->post('q4e');
            $q5e = $this->input->post('q5e');
            $q6e = $this->input->post('q6e');
            $q7e = $this->input->post('q7e');
            $q8e = $this->input->post('q8e');
            $q9e = $this->input->post('q9e');
            $q10e = $this->input->post('q10e');

            // Keuangan Jam'iyyah
            $q1f = $this->input->post('q1f');
            $q2f = $this->input->post('q2f');
            $q3f = $this->input->post('q3f');
            $q4f = $this->input->post('q4f');
            $q5f = $this->input->post('q5f');
            $q6f = $this->input->post('q6f');
            $q7f = $this->input->post('q7f');

            $data = array(
                'kd_pd' => $kd_pd,
                // Tasykil
                'q1a' => $q1a, 'q2a' => $q2a, 'q3a' => $q3a, 'q4a' => $q4a, 'q5a' => $q5a, 'q6a' => $q6a,
                // Aktivitas Jam'iyyah & Partisipasi Anggota
                'q1b' => $q1b, 'q2b' => $q2b, 'q3b' => $q3b, 'q4b' => $q4b, 'q5b' => $q5b, 'q6b' => $q6b,
                'q7b' => $q7b, 'q8b' => $q8b, 'q9b' => $q9b, 'q10b' => $q10b,
                // Kaderisasi
                'q1c' => $q1c, 'q2c' => $q2c, 'q3c' => $q3c,
                // Administrasi Jam'iyyah
                'q1d' => $q1d, 'q2d' => $q2d, 'q3d' => $q3d, 'q4d' => $q4d, 'q5d' => $q5d, 'q6d' => $q6d,
                'q7d' => $q7d, 'q8d' => $q8d, 'q9d' => $q9d, 'q10d' => $q10d, 'q11d' => $q11d, 'q12d' => $q12d,
                'q13d' => $q13d, 'q14d' => $q14d, 'q15d' => $q15d, 'q16d' => $q16d, 'q17d' => $q17d, 'q18d' => $q18d,
                'q19d' => $q19d, 'q20d' => $q20d, 'q21d' => $q21d, 'q22d' => $q22d, 'q23d' => $q23d, 'q24d' => $q24d,
                'q25d' => $q25d, 'q26d' => $q26d, 'q27d' => $q27d, 'q28d' => $q28d,
                // Musyawarah
                'q1e' => $q1e, 'q2e' => $q2e, 'q3e' => $q3e, 'q4e' => $q4e, 'q5e' => $q5e, 'q6e' => $q6e,
                'q7e' => $q7e, 'q8e' => $q8e, 'q9e' => $q9e, 'q10e' => $q10e,
                // Keuangan Jam'iyyah
                'q1f' => $q1f, 'q2f' => $q2f, 'q3f' => $q3f, 'q4f' => $q4f, 'q5f' => $q5f, 'q6f' => $q6f,
                'q7f' => $q7f,
                'last_survey' => date('Y-m-d H:i:sa')
            );

//            print_r($data); die();
            $this->m_jamiyyah->simpan_performa_pd($data);
            redirect('jamiyyah/pc');
        } else {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            die();
        }
    }

    public function tes() {
        $kd_pc = $this->input->post('npa');
        print_r($kd_pc);
    }

    public function save_monografi_pc() {
        if (isset($_POST['submit']) && $_FILES['foto']) {
            $config['upload_path'] = './assets/foto/pc/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '2048';
            $config['remove_spaces'] = 'TRUE';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');
//            $foto = $this->upload->data('full_path');
            $foto = $this->upload->data('file_name');

            // Data DATA GEOGRAFIS
            $kd_pc = $this->input->post('no_pc');
            $kd_pd = $this->input->post('no_pd');
            $kd_pw = $this->input->post('no_pw');
            $pw = $this->input->post('pw');
            $pd = $this->input->post('pd');
            $pc = $this->input->post('pc');
            $latitude = $this->input->post('latitude');
            $longitude = $this->input->post('longitude');
            $email = $this->input->post('email');
            $no_kontak = $this->input->post('no_telpon');
            $alamat_utama = $this->input->post('alamat_utama');
            $alamat_alternatif = $this->input->post('alamat_alternatif');
            $luas = $this->input->post('luas');
            $bw_utara = $this->input->post('bw_utara');
            $bw_selatan = $this->input->post('bw_selatan');
            $bw_timur = $this->input->post('bw_timur');
            $bw_barat = $this->input->post('bw_barat');
            $jarak_dari_ibukota_negara = $this->input->post('jarak_dari_ibukota_negara');
            $jarak_dari_ibukota_provinsi = $this->input->post('jarak_dari_ibukota_provinsi');
            $jarak_dari_ibukota_kabupaten = $this->input->post('jarak_dari_ibukota_kabupaten');
            $data_geografis = array(
                'kd_pc' => $kd_pc,
                'kd_pd' => $kd_pd,
                'kd_pw' => $kd_pw,
                'pw' => $pw,
                'pd' => $pd,
                'pc' => $pc,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'email' => $email,
                'no_kontak' => $no_kontak,
                'alamat_utama' => $alamat_utama,
                'alamat_alternatif' => $alamat_alternatif,
                'luas' => $luas,
                'bw_utara' => $bw_utara,
                'bw_selatan' => $bw_selatan,
                'bw_timur' => $bw_timur,
                'bw_barat' => $bw_barat,
                'jarak_dari_ibukota_negara' => $jarak_dari_ibukota_negara,
                'jarak_dari_ibukota_provinsi' => $jarak_dari_ibukota_provinsi,
                'jarak_dari_ibukota_kabupaten' => $jarak_dari_ibukota_kabupaten,
                'last_updated' => date('Y-m-d H:i:sa'),
                'foto' => $foto
            );

            // DATA KEJAMIYYAHAN
            $ketua = $this->input->post('ketua');
            $wkl_ketua = $this->input->post('wkl_ketua');
            $sekretaris = $this->input->post('sekretaris');
            $wkl_sekretaris = $this->input->post('wkl_sekretaris');
            $bendahara = $this->input->post('bendahara');
            $wkl_bendahara = $this->input->post('wkl_bendahara');
            $bid_jamiyyah = $this->input->post('bid_jamiyyah');
            $wkl_bid_jamiyyah = $this->input->post('wkl_bid_jamiyyah');
            $bid_kaderisasi = $this->input->post('bid_kaderisasi');
            $wkl_bid_kaderisasi = $this->input->post('wkl_bid_kaderisasi');
            $bid_administrasi = $this->input->post('bid_administrasi');
            $wkl_bid_administrasi = $this->input->post('wkl_bid_administrasi');
            $bid_pendidikan = $this->input->post('bid_pendidikan');
            $wkl_bid_pendidikan = $this->input->post('wkl_bid_pendidikan');
            $bid_dakwah = $this->input->post('bid_dakwah');
            $wkl_bid_dakwah = $this->input->post('wkl_bid_dakwah');
            $bid_humas_publikasi = $this->input->post('bid_humas_publikasi');
            $wkl_bid_humas_publikasi = $this->input->post('wkl_bid_humas_publikasi');
            $bid_hal = $this->input->post('bid_hal');
            $wkl_bid_hal = $this->input->post('wkl_bid_hal');
            $bid_or_seni = $this->input->post('bid_or_seni');
            $wkl_bid_or_seni = $this->input->post('wkl_bid_or_seni');
            $bid_sosial = $this->input->post('bid_sosial');
            $wkl_bid_sosial = $this->input->post('wkl_bid_sosial');
            $bid_ekonomi = $this->input->post('bid_ekonomi');
            $wkl_bid_ekonomi = $this->input->post('wkl_bid_ekonomi');
            $penasehat1 = $this->input->post('penasehat1');
            $penasehat2 = $this->input->post('penasehat2');
            $penasehat3 = $this->input->post('penasehat3');
            $penasehat4 = $this->input->post('penasehat4');
            $pembantu_umum1 = $this->input->post('pembantu_umum1');
            $pembantu_umum2 = $this->input->post('pembantu_umum2');
            $pembantu_umum3 = $this->input->post('pembantu_umum3');
            $hari = $this->input->post('hari');
            $pukul = $this->input->post('pukul');
            $masehi = $this->input->post('mesehi');
            $hijriah = $this->input->post('hijriah');

            $data_kejamiyyahan = array(
                'kd_pc' => $kd_pc,
                'kd_pd' => $kd_pd,
                'kd_pw' => $kd_pw,
                'penasehat1' => $penasehat1,
                'penasehat2' => $penasehat2,
                'penasehat3' => $penasehat3,
                'penasehat4' => $penasehat4,
                'ketua' => $ketua,
                'wkl_ketua' => $wkl_ketua,
                'sekretaris' => $sekretaris,
                'wkl_sekretaris' => $wkl_sekretaris,
                'bendahara' => $bendahara,
                'wkl_bendahara' => $wkl_bendahara,
                'bid_jamiyyah' => $bid_jamiyyah,
                'wkl_bid_jamiyyah' => $wkl_bid_jamiyyah,
                'bid_kaderisasi' => $bid_kaderisasi,
                'wkl_bid_kaderisasi' => $wkl_bid_kaderisasi,
                'bid_administrasi' => $bid_administrasi,
                'wkl_bid_administrasi' => $wkl_bid_administrasi,
                'bid_pendidikan' => $bid_pendidikan,
                'wkl_bid_pendidikan' => $wkl_bid_pendidikan,
                'bid_dakwah' => $bid_dakwah,
                'wkl_bid_dakwah' => $wkl_bid_dakwah,
                'bid_humas_publikasi' => $bid_humas_publikasi,
                'wkl_bid_humas_publikasi' => $wkl_bid_humas_publikasi,
                'bid_hal' => $bid_hal,
                'wkl_bid_hal' => $wkl_bid_hal,
                'bid_or_seni' => $bid_or_seni,
                'wkl_bid_or_seni' => $wkl_bid_or_seni,
                'bid_sosial' => $bid_sosial,
                'wkl_bid_sosial' => $wkl_bid_sosial,
                'bid_ekonomi' => $bid_ekonomi,
                'wkl_bid_ekonomi' => $wkl_bid_ekonomi,
                'penasehat1' => $penasehat1,
                'penasehat2' => $penasehat2,
                'penasehat3' => $penasehat3,
                'penasehat4' => $penasehat4,
                'pembantu_umum1' => $pembantu_umum1,
                'pembantu_umum2' => $pembantu_umum2,
                'pembantu_umum3' => $pembantu_umum3,
                'hari' => $hari,
                'pukul' => $pukul,
                'musycab_terakhir_m' => date('Y-m-d', strtotime($masehi)),
                'musycab_terakhir_h' => date('Y-m-d', strtotime($hijriah)),
                'last_updated' => date('Y-m-d H:i:sa')
            );


            // Data Keanggotaan
            $biasa = $this->input->post('biasa');
            $tersiar = $this->input->post('tersiar');
            $istimewa = $this->input->post('istimewa');
            $data_keanggotaan = array(
                'kd_pc' => $kd_pc,
                'kd_pd' => $kd_pd,
                'kd_pw' => $kd_pw,
                'biasa' => $biasa,
                'tersiar' => $tersiar,
                'istimewa' => $istimewa,
            );

            //Data Mantan Anggota
            $tdk_her = $this->input->post('tdk_her');
            $mutasi_ke_persis = $this->input->post('mutasi_ke_persis');
            $mutasi_tempat = $this->input->post('mutasi_tempat');
            $mengundurkan_diri = $this->input->post('mengundurkan_diri');
            $meninggal_dunia = $this->input->post('meninggal_dunia');
            $calon_anggota = $this->input->post('calon_anggota');
            $data_x_anggota = array(
                'kd_pc' => $kd_pc,
                'kd_pd' => $kd_pd,
                'kd_pw' => $kd_pw,
                'tdk_her' => $tdk_her,
                'mutasi_ke_persis' => $mutasi_ke_persis,
                'mutasi_tempat' => $mutasi_tempat,
                'mengundurkan_diri' => $mengundurkan_diri,
                'meninggal_dunia' => $meninggal_dunia,
                'calon_anggota' => $calon_anggota
            );
//            
//            echo 'Data Geografis';
//            echo '<br/>';
//            print_r($data_geografis);
//            echo '<br/>';
//            echo 'Data Kejamiyyahan';
//            echo '<br/>';
//            print_r($data_kejamiyyahan);
//            echo '<br/>';
//
//            echo 'Data Keanggotaan';
//            echo '<br/>';
//            print_r($data_keanggotaan);
//            echo '<br/>';
//
//            echo 'Data Mantan Anggota';
//            echo '<br/>';
//            print_r($data_x_anggota);
//            echo '<br/>';
//
//            $error = array('error' => $this->upload->display_errors());
//            print_r($error);
//            die();

            $this->m_jamiyyah->simpan_monografi_pc($data_geografis, $data_kejamiyyahan, $data_keanggotaan, $data_x_anggota, $data_jamaah);
//            $this->load->view('dashboard1');
            redirect('Dashboard1');
        } else {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            die();
//            $this->load->view('dashboard1');
        }
    }
    
    public function save_monografi_pd() {
        if (isset($_POST['submit']) && $_FILES['foto']) {
            $config['upload_path'] = './assets/foto/pd/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '2048';
            $config['remove_spaces'] = 'TRUE';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');
//            $foto = $this->upload->data('full_path');
            $foto = $this->upload->data('file_name');

            // Data DATA GEOGRAFIS
            $kd_pd = $this->input->post('no_pd');
            $kd_pw = $this->input->post('no_pw');
            $pw = $this->input->post('pw');
            $pd = $this->input->post('pd');
            $pc = $this->input->post('pc');
            $latitude = $this->input->post('latitude');
            $longitude = $this->input->post('longitude');
            $email = $this->input->post('email');
            $no_kontak = $this->input->post('no_telpon');
            $alamat_utama = $this->input->post('alamat_utama');
            $alamat_alternatif = $this->input->post('alamat_alternatif');
            $luas = $this->input->post('luas');
            $bw_utara = $this->input->post('bw_utara');
            $bw_selatan = $this->input->post('bw_selatan');
            $bw_timur = $this->input->post('bw_timur');
            $bw_barat = $this->input->post('bw_barat');
            $jarak_dari_ibukota_negara = $this->input->post('jarak_dari_ibukota_negara');
            $jarak_dari_ibukota_provinsi = $this->input->post('jarak_dari_ibukota_provinsi');
            $jarak_dari_ibukota_kabupaten = $this->input->post('jarak_dari_ibukota_kabupaten');
            $data_geografis = array(
                'kd_pd' => $kd_pd,
                'kd_pw' => $kd_pw,
                'pw' => $pw,
                'pd' => $pd,
                'pc' => $pc,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'email' => $email,
                'no_kontak' => $no_kontak,
                'alamat_utama' => $alamat_utama,
                'alamat_alternatif' => $alamat_alternatif,
                'luas' => $luas,
                'bw_utara' => $bw_utara,
                'bw_selatan' => $bw_selatan,
                'bw_timur' => $bw_timur,
                'bw_barat' => $bw_barat,
                'jarak_dari_ibukota_negara' => $jarak_dari_ibukota_negara,
                'jarak_dari_ibukota_provinsi' => $jarak_dari_ibukota_provinsi,
                'jarak_dari_ibukota_kabupaten' => $jarak_dari_ibukota_kabupaten,
                'last_updated' => date('Y-m-d H:i:sa'),
                'foto' => $foto
            );

            // DATA KEJAMIYYAHAN
            $ketua = $this->input->post('ketua');
            $wkl_ketua = $this->input->post('wkl_ketua');
            $sekretaris = $this->input->post('sekretaris');
            $wkl_sekretaris = $this->input->post('wkl_sekretaris');
            $bendahara = $this->input->post('bendahara');
            $wkl_bendahara = $this->input->post('wkl_bendahara');
            $bid_jamiyyah = $this->input->post('bid_jamiyyah');
            $wkl_bid_jamiyyah = $this->input->post('wkl_bid_jamiyyah');
            $bid_kaderisasi = $this->input->post('bid_kaderisasi');
            $wkl_bid_kaderisasi = $this->input->post('wkl_bid_kaderisasi');
            $bid_administrasi = $this->input->post('bid_administrasi');
            $wkl_bid_administrasi = $this->input->post('wkl_bid_administrasi');
            $bid_pendidikan = $this->input->post('bid_pendidikan');
            $wkl_bid_pendidikan = $this->input->post('wkl_bid_pendidikan');
            $bid_dakwah = $this->input->post('bid_dakwah');
            $wkl_bid_dakwah = $this->input->post('wkl_bid_dakwah');
            $bid_humas_publikasi = $this->input->post('bid_humas_publikasi');
            $wkl_bid_humas_publikasi = $this->input->post('wkl_bid_humas_publikasi');
            $bid_hal = $this->input->post('bid_hal');
            $wkl_bid_hal = $this->input->post('wkl_bid_hal');
            $bid_or_seni = $this->input->post('bid_or_seni');
            $wkl_bid_or_seni = $this->input->post('wkl_bid_or_seni');
            $bid_sosial = $this->input->post('bid_sosial');
            $wkl_bid_sosial = $this->input->post('wkl_bid_sosial');
            $bid_ekonomi = $this->input->post('bid_ekonomi');
            $wkl_bid_ekonomi = $this->input->post('wkl_bid_ekonomi');
            $penasehat1 = $this->input->post('penasehat1');
            $penasehat2 = $this->input->post('penasehat2');
            $penasehat3 = $this->input->post('penasehat3');
            $penasehat4 = $this->input->post('penasehat4');
            $pembantu_umum1 = $this->input->post('pembantu_umum1');
            $pembantu_umum2 = $this->input->post('pembantu_umum2');
            $pembantu_umum3 = $this->input->post('pembantu_umum3');
            $hari = $this->input->post('hari');
            $pukul = $this->input->post('pukul');
            $masehi = $this->input->post('mesehi');
            $hijriah = $this->input->post('hijriah');

            $data_kejamiyyahan = array(
                'kd_pd' => $kd_pd,
                'kd_pw' => $kd_pw,
                'penasehat1' => $penasehat1,
                'penasehat2' => $penasehat2,
                'penasehat3' => $penasehat3,
                'penasehat4' => $penasehat4,
                'ketua' => $ketua,
                'wkl_ketua' => $wkl_ketua,
                'sekretaris' => $sekretaris,
                'wkl_sekretaris' => $wkl_sekretaris,
                'bendahara' => $bendahara,
                'wkl_bendahara' => $wkl_bendahara,
                'bid_jamiyyah' => $bid_jamiyyah,
                'wkl_bid_jamiyyah' => $wkl_bid_jamiyyah,
                'bid_kaderisasi' => $bid_kaderisasi,
                'wkl_bid_kaderisasi' => $wkl_bid_kaderisasi,
                'bid_administrasi' => $bid_administrasi,
                'wkl_bid_administrasi' => $wkl_bid_administrasi,
                'bid_pendidikan' => $bid_pendidikan,
                'wkl_bid_pendidikan' => $wkl_bid_pendidikan,
                'bid_dakwah' => $bid_dakwah,
                'wkl_bid_dakwah' => $wkl_bid_dakwah,
                'bid_humas_publikasi' => $bid_humas_publikasi,
                'wkl_bid_humas_publikasi' => $wkl_bid_humas_publikasi,
                'bid_hal' => $bid_hal,
                'wkl_bid_hal' => $wkl_bid_hal,
                'bid_or_seni' => $bid_or_seni,
                'wkl_bid_or_seni' => $wkl_bid_or_seni,
                'bid_sosial' => $bid_sosial,
                'wkl_bid_sosial' => $wkl_bid_sosial,
                'bid_ekonomi' => $bid_ekonomi,
                'wkl_bid_ekonomi' => $wkl_bid_ekonomi,
                'penasehat1' => $penasehat1,
                'penasehat2' => $penasehat2,
                'penasehat3' => $penasehat3,
                'penasehat4' => $penasehat4,
                'pembantu_umum1' => $pembantu_umum1,
                'pembantu_umum2' => $pembantu_umum2,
                'pembantu_umum3' => $pembantu_umum3,
                'hari' => $hari,
                'pukul' => $pukul,
                'musycab_terakhir_m' => date('Y-m-d', strtotime($masehi)),
                'musycab_terakhir_h' => date('Y-m-d', strtotime($hijriah)),
                'last_updated' => date('Y-m-d H:i:sa')
            );


            // Data Keanggotaan
            $biasa = $this->input->post('biasa');
            $tersiar = $this->input->post('tersiar');
            $istimewa = $this->input->post('istimewa');
            $data_keanggotaan = array(
                'kd_pd' => $kd_pd,
                'kd_pw' => $kd_pw,
                'biasa' => $biasa,
                'tersiar' => $tersiar,
                'istimewa' => $istimewa,
            );

            //Data Mantan Anggota
            $tdk_her = $this->input->post('tdk_her');
            $mutasi_ke_persis = $this->input->post('mutasi_ke_persis');
            $mutasi_tempat = $this->input->post('mutasi_tempat');
            $mengundurkan_diri = $this->input->post('mengundurkan_diri');
            $meninggal_dunia = $this->input->post('meninggal_dunia');
            $calon_anggota = $this->input->post('calon_anggota');
            $data_x_anggota = array(
                'kd_pd' => $kd_pd,
                'kd_pw' => $kd_pw,
                'tdk_her' => $tdk_her,
                'mutasi_ke_persis' => $mutasi_ke_persis,
                'mutasi_tempat' => $mutasi_tempat,
                'mengundurkan_diri' => $mengundurkan_diri,
                'meninggal_dunia' => $meninggal_dunia,
                'calon_anggota' => $calon_anggota
            );
//            
//            echo 'Data Geografis';
//            echo '<br/>';
//            print_r($data_geografis);
//            echo '<br/>';
//            echo 'Data Kejamiyyahan';
//            echo '<br/>';
//            print_r($data_kejamiyyahan);
//            echo '<br/>';
//
//            echo 'Data Keanggotaan';
//            echo '<br/>';
//            print_r($data_keanggotaan);
//            echo '<br/>';
//
//            echo 'Data Mantan Anggota';
//            echo '<br/>';
//            print_r($data_x_anggota);
//            echo '<br/>';
//
//            $error = array('error' => $this->upload->display_errors());
//            print_r($error);
//            die();

            $this->m_jamiyyah->simpan_monografi_pd($data_geografis, $data_kejamiyyahan, $data_keanggotaan, $data_x_anggota, $data_jamaah);
//            $this->load->view('dashboard1');
            redirect('Dashboard1');
        } else {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            die();
//            $this->load->view('dashboard1');
        }
    }

    public function add_data_jamaah() {
        if (isset($_POST['submit']) && $_FILES['foto']) {
            $config['upload_path'] = './assets/foto/pj/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '2048';
            $config['remove_spaces'] = 'TRUE';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');
//            $foto = $this->upload->data('full_path');
            $foto = $this->upload->data('file_name');


            // DATA Jama'ah
            $kd_pj = $this->input->post('kd_pj');
            $kd_pc = $this->input->post('no_pc');
            $kd_pd = $this->input->post('no_pd');
            $kd_pw = $this->input->post('no_pw');
            $pw = $this->input->post('pw');
            $pd = $this->input->post('pd');
            $pc = $this->input->post('pc');
            $desa = $this->input->post('desa');
            $latitude = $this->input->post('latitude');
            $longitude = $this->input->post('longitude');
            $nama_jamaah = $this->input->post('nama_jamaah');
            $musyjam_terakhir = $this->input->post('musyjam_terakhir');
            $ketua_pj = $this->input->post('ketua_pj');
            $sekretaris_pj = $this->input->post('sekretaris_pj');
            $bendahara_pj = $this->input->post('bendahara_pj');
            $jml_anggota_pj = $this->input->post('jml_anggota');
            $alamat_pj = $this->input->post('alamat_pj');
            $data_jamaah = array(
                'kd_pj' => $kd_pj,
                'kd_pc' => $kd_pc,
                'kd_pd' => $kd_pd,
                'kd_pw' => $kd_pw,
                'provinsi' => $pw,
                'kabupaten' => $pd,
                'kecamatan' => $pc,
                'desa' => $desa,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'nama_jamaah' => $nama_jamaah,
                'musyjam_terakhir' => date('Y-m-d', strtotime($musyjam_terakhir)),
                'ketua_pj' => $ketua_pj,
                'sekretaris' => $sekretaris_pj,
                'bendahara' => $bendahara_pj,
                'jml_anggota' => $jml_anggota_pj,
                'alamat' => $alamat_pj,
                'foto' => $foto,
            );
            
//            echo 'Data Jamaah';
//            echo '<br/>';
//            print_r($data_jamaah);
//            echo '<br/>';
//            
//            $error = array('error' => $this->upload->display_errors());
//            print_r($error);
//            die();
            
            $this->m_jamiyyah->add_data_jamaah($data_jamaah);
            redirect('dashboard1');
            
        } else {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            die();
//            $this->load->view('dashboard1');
        }
    }

    public function tab() {
        $this->load->view('tab');
    }

    /* Query Hitung Umur
     * 
     * SELECT npa, nama, tanggal_lahir, TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) AS umur FROM `tbl_anggota`

      SELECT
      CASE
      WHEN umur < 20 THEN '< 20'
      WHEN umur BETWEEN 20 and 25 THEN '20 - 25'
      WHEN umur BETWEEN 26 and 30 THEN '26 - 30'
      WHEN umur BETWEEN 31 and 35 THEN '31 - 35'
      WHEN umur >= 35 THEN '> 35'
      WHEN umur IS NULL THEN '(NULL)'
      END as range_umur,
      COUNT(*) AS jumlah

      FROM (SELECT npa, nama, tanggal_lahir, TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) AS umur FROM `tbl_anggota`)  as dummy_table
      GROUP BY range_umur
      ORDER BY range_umur;
     * 
     */
}
