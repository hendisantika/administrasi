<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_wilayah extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all_provinsi() {
        $this->db->select('*');
        $this->db->from('wilayah_provinsi');
        $this->db->order_by("nama", "asc");
        $query = $this->db->get();

        return $query->result();
    }

    function get_all_kabupaten() {
        $this->db->select('*');
        $this->db->from('wilayah_kabupaten');
        $this->db->order_by("nama", "asc");
        $query = $this->db->get();

        return $query->result();
    }
    
    function get_all_kecamatan() {
        $this->db->select('*');
        $this->db->from('wilayah_kecamatan');
        $this->db->order_by("nama", "asc");
        $query = $this->db->get();

        return $query->result();
    }
    
    function get_all_desa() {
        $this->db->select('*');
        $this->db->from('wilayah_desa');
        $this->db->order_by("nama", "asc");
        $query = $this->db->get();

        return $query->result();
    }

    public function get_all_pc() {
        $this->db->select('*');
        $this->db->from('tbl_pc');
        $this->db->order_by("kd", "asc");
        $query = $this->db->get();

        return $query->result();
    }
    public function get_all_pd() {
        $this->db->select('*');
        $this->db->from('tbl_pd');
        $this->db->order_by("kd", "asc");
        $query = $this->db->get();

        return $query->result();
    }
    public function get_all_pw() {
        $this->db->select('*');
        $this->db->from('tbl_pw');
        $this->db->order_by("kd", "asc");
        $query = $this->db->get();

        return $query->result();
    }

}

?>
