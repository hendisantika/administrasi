<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        session_destroy();
        session_start();
        $this->load->model(array('m_user', 'm_dashboard1', 'm_jamiyyah'));
        if ($this->session->set_userdata('username')) {
            redirect('dashboard1');
        }
    }

    public function index() {
        $this->load->view('index');
    }

    public function login() {
        redirect('dashboard1');
    }

    function proses() {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('index');
        } else {
            $usr = $this->input->post('username');
            $psw = $this->input->post('password');
//            $u = mysqli::real_escape_string($usr);
//            $u = $mysqli->real_escape_string($usr);
//            $p = $mysqli->real_escape_string($psw);
//            $cek = $this->m_user->cek($u, $p);
            $cek = $this->m_user->cek($usr, $psw);
            if ($cek->num_rows() > 0) {
//                login berhasil, buat session
                foreach ($cek->result() as $qad) {
                    $sess_data['npa'] = $qad->npa;
                    $sess_data['username'] = $qad->username;
                    $sess_data['nama'] = $qad->nama;
                    $sess_data['email'] = $qad->email;
                    $sess_data['reg_date'] = $qad->reg_date;
                    $sess_data['level'] = $qad->level;
                    $sess_data['status_login'] =  'logged_in';
                    $this->db->where('npa',$sess_data['npa']);
                    $this->db->update('tbl_user',array('last_login'=>date('Y-m-d H:i:sa')));
                    $this->session->set_userdata($sess_data);
                    $sess_data['anggota'] = $this->m_dashboard1->count_anggota();
                    $sess_data['users'] = $this->m_dashboard1->count_users();
                    $sess_data['jamaah'] = $this->m_dashboard1->count_jamaah();
                    $sess_data['cabang'] = $this->m_dashboard1->count_cabang();
                    $sess_data['pd'] = $this->m_dashboard1->count_pd();
                    $sess_data['usia'] = $this->m_jamiyyah->cek_usia();
                    $sess_data['pendidikan'] = $this->m_jamiyyah->cek_pendidikan();
                    $sess_data['merit']      = $this->m_jamiyyah->cek_status_merital();
                    $sess_data['jenis']      = $this->m_jamiyyah->cek_status_keanggotaan();
                }
//                $sessionData = array( 'username' => $usr);
//                $this->session->set_userdata($sessionData);
//                $data['username'] = $this->session->userdata('username');
//                print_r($sess_data); die;
//                redirect('dashboard1', $sess_data);
//                $session = $this->session->userdata($sess_data);
                $this->session->set_userdata('login_state', TRUE);
                $this->session->userdata('logged_in');
                $this->session->set_userdata($sess_data);
                $this->load->view('dashboard1', $sess_data);
//                $this->load->view('template/sidebar', $sess_data);
//                $this->load->view('template/topbar', $sess_data);
            } else {
                $this->session->set_flashdata('result_login', '<br>Username atau Password yang antum masukkan salah!');
                redirect('auth');
            }
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('auth');
    }

}
