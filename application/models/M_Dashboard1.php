<?php

class M_Dashboard1 extends CI_Model {

    public function count_anggota() {
        $this->db->from('tbl_anggota');
        return $this->db->count_all_results();
    }
    
    public function count_jamaah() {
        $this->db->from('tbl_data_jamaah');
        return $this->db->count_all_results();
    }
    
    public function count_cabang() {
        $this->db->from('tbl_data_geografis_pc');
        return $this->db->count_all_results();
    }
    
    public function count_pd() {
        $this->db->from('tbl_data_geografis_pd');
        return $this->db->count_all_results();
    }
    
    public function count_users() {
        $this->db->from('tbl_user');
        return $this->db->count_all_results();
    }

}

?>
