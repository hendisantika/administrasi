<?php

/**
 * Description of Profil
 *
 * @author hendi.santika
 */
class Profil extends CI_Controller {

    public function __construct() {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');
        $this->session->userdata('logged_in');
        if ($this->session->status_login != 'logged_in') {
            redirect('auth');
        }

        $this->load->model(array('m_wilayah', 'm_user', 'm_anggota', 'm_jamiyyah'));
        $this->load->database();
    }
    
    public function lihat_pj() {
        $data_jamaah = $this->m_jamiyyah->lihat_pj();
        $this->load->vars('a', $data_jamaah);
        $this->load->view('lihat_pj');
    }
    
    public function lihat_pc() {
        $data_pc = $this->m_jamiyyah->lihat_pc();
        $this->load->vars('a', $data_pc);
        $this->load->view('lihat_pc');
    }
    
    public function lihat_pd() {
        $data_pc = $this->m_jamiyyah->lihat_pd();
        $this->load->vars('a', $data_pc);
        $this->load->view('lihat_pd');
    }
    
    public function pj_details() {
        $kd_pj = $this->uri->segment(3);
        $data['record'] = $this->m_jamiyyah->cek_pj($kd_pj)->row_array();
        $this->load->view('lihat_pj_detail', $data);
    }

    public function pc_details() {
        $kd_pc = $this->uri->segment(3);
        $data['record']     = $this->m_jamiyyah->cek_pc($kd_pc)->row_array();
        $data['record2']    = $this->m_jamiyyah->lihat_pj_per_pc($kd_pc);
        $this->load->view('lihat_pc_detail2', $data);
    }
    
    public function cek_usia() {
        $data['usia'] = $this->m_jamiyyah->cek_usia();
        $this->load->vars('pc', $data);
        $this->load->view('lihat_pc_detail', $data);
        
//        $data_pc = $this->m_user->index();
//        $this->load->vars('pc', $data_pc);
//        $this->load->view('lookup');
    }
}