<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard2 extends CI_Controller {

    public function index() {
        if ($this->session->status_login != 'logged_in') {
            redirect('auth');
        }
        $this->load->view('dashboard2');
    }

}
