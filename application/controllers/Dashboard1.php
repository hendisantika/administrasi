<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->status_login != 'logged_in') {
            redirect('auth');
        }
        $this->load->model('m_dashboard1');
        $this->load->model('m_jamiyyah');
        
    }

    public function index() {
        if ($this->session->status_login != 'logged_in') {
            redirect('auth');
        }
        $data['jamaah'] = $this->m_dashboard1->count_jamaah();
        $data['cabang'] = $this->m_dashboard1->count_cabang();
        $data['pd'] = $this->m_dashboard1->count_pd();
        $data['anggota'] = $this->m_dashboard1->count_anggota();
        $data['users'] = $this->m_dashboard1->count_users();
        $data['usia'] = $this->m_jamiyyah->cek_usia();
        $data['pendidikan'] = $this->m_jamiyyah->cek_pendidikan();
        $data['merit'] = $this->m_jamiyyah->cek_status_merital();
        $data['jenis'] = $this->m_jamiyyah->cek_status_keanggotaan();
        $data['gol_darah'] = $this->m_jamiyyah->cek_gol_darah();
//        $this->load->view('dashboard1', $data);
        $this->load->view('dashboard3');
    }

}
