<?php
/**
 * Description of Registrasi
 *
 * @author hendi.santika
 * Reset Auto Increment
 * ALTER TABLE tablename AUTO_INCREMENT = 2
 */
class Registrasi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->session->userdata('logged_in');
        if($this->session->status_login != 'logged_in'){
            redirect('auth');
        }

        $this->load->helper(array('url', 'html'));
        $this->load->model('m_wilayah');
        $this->load->model('m_user2');
        $this->load->database();
    }

    function index() {
        $data['provinsi'] = $this->m_wilayah->get_all_provinsi();

        $data['path'] = base_url('assets');

        $this->load->view('add_user', $data);
    }
    
    function add() {
        $this->load->view('add_user');
    }

    function add_ajax_kab($id_prov) {
//        $query = $this->db->get_where('wilayah_kabupaten', array('provinsi_id' => $id_prov));
        $this->db->get_where('wilayah_kabupaten', array('provinsi_id' => $id_prov));
        $this->db->order_by("nama", "asc"); 
        $query = $this->db->get_where('wilayah_kabupaten', array('provinsi_id' => $id_prov));
        $data = "<option value=''>- Select Kabupaten -</option>";
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
    
    function post(){
        date_default_timezone_set('Asia/Jakarta');
        if(isset($_POST['submit'])){
            $npa        = $this->input->post('npa');
            $username   = $this->input->post('username');
            $password   = $this->input->post('password');
            $nama       = $this->input->post('nama');
            $prov       = $this->input->post('prov');
            $kab        = $this->input->post('kab');
            $kec        = $this->input->post('kec');
            $des        = $this->input->post('des');
            $pj         = $this->input->post('pj');
            $email      = $this->input->post('email');
            $no_telpon  = $this->input->post('no_telpon');
            $alamat     = $this->input->post('alamat');
//            $alamat       = $this->input->post('reg_date');
            $data       = array(
                                'npa'       =>$npa, 
                                'nama'      =>$nama,
                                'username'  =>$username,
                                'password'  =>$password,
                                'pw'        =>$prov,
                                'pd'        =>$kab,
                                'pc'        =>$kec,
                                'desa'      =>$des,
                                'pj'        =>$pj,
                                'email'     =>$email,
                                'no_telpon' =>$no_telpon,
                                'reg_date'  =>date('Y-m-d H:i:sa'),
                                'level'     =>'user',
                                'alamat'    =>$alamat,
                    );
//            print_r($data);            die();
            $this->m_user2->simpan($data);
            $this->load->view('result');
//            redirect('auth2');
        }else{
            $this->load->model('dashboard1');
        }
    }

}
