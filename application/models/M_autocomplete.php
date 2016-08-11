<?php
 
class M_Autocomplete extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getData($nama)
    {
        $this->db->select('nama');
        $this->db->like('nama', $nama);
           $query = $this->db->get('tbl_anggota');
        return $query->result();
    }
}