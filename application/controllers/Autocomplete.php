<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Autocomplete
 *
 * @author hendi.santika
 */
class Autocomplete extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_autocomplete');
        $this->load->database();
    }

    public function search() {
        // tangkap variabel keyword dari URL
        $keyword = $this->uri->segment(3);

        // cari di database
        $data = $this->db->from('tbl_anggota')->like('nama', $keyword)->get();

        // format keluaran di dalam array
        foreach ($data->result() as $row) {
            $arr['query'] = $keyword;
            $arr['suggestions'][] = array(
                'value' => $row->nama
            );
        }
        // minimal PHP 5.2
        echo json_encode($arr);
    }

    public function suggestions() {
        $nama = $this->input->post('nama', TRUE);
        $rows = $this->m_autocomplete->getData($nama);
        $json_array = array();
        foreach ($rows as $row)
            $json_array[] = $row->nama;
        echo json_encode($json_array);
    }

    public function check_email_availablity() {
        $this->load->model('M_Anggota');
        $get_result = $this->M_Anggota->check_email_availablity();

        if (!$get_result)
            echo '<span style="color:#f00">Email already in use. </span>';
        else
            echo '<span style="color:#0c0">Email Available</span>';
    }


}

?>