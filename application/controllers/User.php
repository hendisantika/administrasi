<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

//       $this->session->userdata('logged_in');
//        if($this->session->status_login != 'logged_in'){
//            redirect('auth');
//        }

        $this->load->model('m_wilayah');
        $this->load->model('m_user');
        $this->load->database();
    }

    public function index() {
        $data['provinsi'] = $this->m_wilayah->get_all_provinsi();

        $data['path'] = base_url('assets');

        $this->load->view('add_user', $data);
    }

    public function lihat_user() {
        $this->load->model('m_user');
        $data_user = $this->m_user->index();
        $this->load->vars('u', $data_user);
        $this->load->view('lihat_user');
    }

    function add_ajax_kab($id_prov) {
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
        $config['upload_path'] = './assets/foto/users';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '1024';
        $config['remove_spaces'] = 'TRUE';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('foto');

        $npa = $this->input->post('npa');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $prov = $this->input->post('prov');
        $kab = $this->input->post('kab');
        $kec = $this->input->post('kec');
        $des = $this->input->post('des');
        $pj = $this->input->post('pj');
        $email = $this->input->post('email');
        $no_telpon = $this->input->post('no_telpon');
        $alamat = $this->input->post('alamat');

        $foto = $this->upload->data('file_name');
//            $awal = $this->upload->data('file_name');
//            $nama_foto = str_replace(" ", "_", $nama."jpg");

        if (isset($_POST['submit']) && ($_FILES['foto']["size"] != 0)) {
//        if (isset($_POST['submit'])) {
//            $foto = $this->upload->data('full_path');
            $data = array(
                'npa' => $npa,
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'pw' => $prov,
                'pd' => $kab,
                'pc' => $kec,
                'desa' => $des,
                'pj' => $pj,
                'email' => $email,
                'no_telpon' => $no_telpon,
                'reg_date' => date('Y-m-d H:i:sa'),
                'level' => 'user',
                'alamat' => $alamat,
                'foto' => $foto
            );
//            print_r('Ada Fotonya');
//            echo "<br>";
//            print_r($data); die();
            $this->m_user->simpan($data);
            $this->load->view('result');
//            redirect('auth');
        } else if (isset($_POST['submit']) && ($_FILES['foto']["size"] == 0)) {
//        if (isset($_POST['submit'])) {
//            $foto = $this->upload->data('full_path');
            $foto = 'avatar.png';

            $data = array(
                'npa' => $npa,
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'pw' => $prov,
                'pd' => $kab,
                'pc' => $kec,
                'desa' => $des,
                'pj' => $pj,
                'email' => $email,
                'no_telpon' => $no_telpon,
                'reg_date' => date('Y-m-d H:i:sa'),
                'level' => 'user',
                'alamat' => $alamat,
                'foto' => 'avatar.png'
            );
//            print_r('Gak Ada Fotonya');
//            echo "<br>";
//            print_r($data); die();
            $this->m_user->simpan($data);
            $this->load->view('result');
//            redirect('auth');
        } else {
//            $this->load->model('dashboard1');
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            die();
        }
    }

    public function forget_password() {
        $this->load->view('forgot_password');
    }

    public function kirim_password() {
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol']     = "smtp";
        $config['smtp_host']    = "ssl://srv6.niagahoster.com";
        $config['smtp_port']    = "465";
        $config['smtp_user']    = "kominfo@pemuda.persis.or.id";
        $config['smtp_pass']    = "kominfo33";
        $config['charset']      = "utf-8";
        $config['mailtype']     = "html";
        $config['newline']      = "\r\n";
        $config['wordwrap']     = TRUE;

        $ci->email->initialize($config);

        $npa = $this->input->post('npa');
        $email = $this->input->post('email');
        
        if (isset($_POST['submit'])) {
            $data = array(
                'npa'   => $npa,
                'email' => $email,
            );
//            print_r('Cek Data : ');
//            echo "<br>";
//            print_r($data); die();
            $data['forgot'] = $this->m_user->kirim_password($data)->row_array();

            $ci->email->from('kominfo@pemuda.persis.or.id', 'Hendi Santika');
//            $npa        = $data['forgot']['npa'];
//            $nama       = $data['forgot']['nama'];
            $alamat     = $data['forgot']['email'];
//            $password   = $data['forgot']['password'];
//            $url        = base_url();
            
            $body = $this->load->view('email_body.php', $data, TRUE);

            $list = array('hendisantika@yahoo.co.id', $alamat);
            $ci->email->to($list);
            $ci->email->subject('Lupa Password');
            $ci->email->message($body);
            
            $this->email->send();
            $this->load->view('kirim_password', $data);

//            print_r("Ini Hasil query nya : ");
//            echo "<br>";
//            print_r($data);
//            echo "NPA           : " . $npa; echo "<br>";
//            echo "Nama Lengkap  : " . $nama; echo "<br>";
//            echo "Alamat Email  : " . $email; echo "<br>";
//            echo "Password      : " . $password; echo "<br>";
//            die();
        }else {
                print_r('Error Kirim Email');
                echo "<br>";
                show_error($this->email->print_debugger());
                die();
            }
    }

    public function details() {
        $npa = $this->uri->segment(3);
//            echo $npa; die;
        $data['record'] = $this->m_user->cekNpa($npa)->row_array();
        $this->load->view('lihat_user_details', $data);
    }

    public function profile() {
//        $npa = $this->uri->segment(3);
        $npa = $nama;
//            echo $npa; die;
        $data['record'] = $this->m_user->cekNpa($npa)->row_array();
        $this->load->view('lihat_user_details', $data);
    }

    function edit() {
        $data['provinsi'] = $this->m_wilayah->get_all_provinsi();
        $data['kabupaten'] = $this->m_wilayah->get_all_kabupaten();
        $data['kecamatan'] = $this->m_wilayah->get_all_kecamatan();
        $data['deso'] = $this->m_wilayah->get_all_desa();
        $data['path'] = base_url('assets');

        $npa = $this->uri->segment(3);
        if ($npa == NULL) {
            redirect('user/lihat_user');
        }

        if (isset($_POST['submit'])) {
            $this->m_user->post();
            redirect('user');
        } else {

            $dt = $this->m_user->edit($npa);
            $data['npa'] = $dt->npa;
            $data['username'] = $dt->username;
            $data['password'] = $dt->password;
            $data['nama'] = $dt->nama;
            $data['pw'] = $dt->pw;
            $data['pd'] = $dt->pd;
            $data['pc'] = $dt->pc;
            $data['desa'] = $dt->desa;
            $data['pj'] = $dt->pj;
            $data['email'] = $dt->email;
            $data['no_telpon'] = $dt->no_telpon;
            $data['alamat'] = $dt->alamat;
            $data['level'] = $dt->level;
            $data['foto'] = $dt->foto;
            $this->load->view('edit_user', $data);
        }
    }

    public function edit_foto() {
        $npa = $this->uri->segment(3);
        if ($npa == NULL) {
            redirect('user/lihat_user');
        } else {
            $dt = $this->m_user->edit($npa);
            $data['npa'] = $dt->npa;
            $data['username'] = $dt->username;
            $data['nama'] = $dt->nama;
            $data['foto'] = $dt->foto;
            $this->load->view('edit_foto_user', $data);
        }
    }

    public function update() {
        if (isset($_POST['submit'])) {
            $npa = $this->input->post('npa');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama = $this->input->post('nama');
            $prov = $this->input->post('prov');
            $kab = $this->input->post('kab');
            $kec = $this->input->post('kec');
            $des = $this->input->post('des');
            $pj = $this->input->post('pj');
            $email = $this->input->post('email');
            $no_telpon = $this->input->post('no_telpon');
            $alamat = $this->input->post('alamat');

            $data = array(
                'npa' => $npa,
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'pw' => $prov,
                'pd' => $kab,
                'pc' => $kec,
                'desa' => $des,
                'pj' => $pj,
                'email' => $email,
                'no_telpon' => $no_telpon,
                'last_updated' => date('Y-m-d H:i:sa'),
                'level' => 'user',
                'alamat' => $alamat
            );
//            print_r($data); die();
            $this->m_user->update($npa, $data);
//            $this->load->view('lihat_user');
            redirect('user/lihat_user');
        } else {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            die();
        }
    }

    public function update_foto() {
        if (isset($_POST['submit']) && $_FILES['foto'] || $_FILES['upload']) {
            $config['upload_path'] = './assets/foto/users';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '1024';
            $config['remove_spaces'] = 'TRUE';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');
//            $foto = $this->upload->data('full_path');
            $foto = $this->upload->data('file_name');
            $npa = $this->input->post('npa');

            $data = array(
                'npa' => $npa,
                'last_updated' => date('Y-m-d H:i:sa'),
                'foto' => $foto
            );
//            print_r($data); die();
            $this->m_user->update_foto($npa, $data);
//            $this->load->view('lihat_user');
            redirect('user/lihat_user');
        } else {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            die();
        }
    }

    public function cek_akun() {
        // allow only Ajax request    
        if ($this->input->is_ajax_request()) {
            // grab the email value from the post variable.
            $npa = $this->input->post('npa');
            $email = $this->input->post('email');
            // check in database - table name : tbl_users  , Field name in the table : email
            if (!empty($npa)) {
                if (!$this->form_validation->is_unique($npa, 'tbl_user.npa')) {
                    // set the json object as output                 
                    $this->output->set_content_type('application/json')->set_output(json_encode(array('message' => 'NPA tsb sudah ada! Harap input NPA yg lain!')));
                } elseif ($this->form_validation->is_unique($npa, 'tbl_user.npa')) {
                    $this->output->set_content_type('application/json')->set_output(json_encode(array('message' => 'NPA tsb dapat digunakan!')));
                }
            }
            if (!empty($email)) {
                if (!$this->form_validation->is_unique($email, 'tbl_user.email')) {
                    // set the json object as output                 
                    $this->output->set_content_type('application/json')->set_output(json_encode(array('message' => 'Alamat email tsb sudah terdaftar. Harap input alamat email yg lain!')));
                } elseif ($this->form_validation->is_unique($email, 'tbl_user.email')) {
                    $this->output->set_content_type('application/json')->set_output(json_encode(array('message' => 'Alamat email tsb dapat digunakan!')));
                }
            }
        }
    }

    public function delete() {
        $npa = $this->uri->segment(3);
        $this->m_user->delete($npa);
        redirect('user/lihat_user');
    }
    
}

?>