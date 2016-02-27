<?php

class M_user extends CI_Model {

    private $table = "tbl_user";
    
    function index() {
//        $query = $this->db->get('tbl_user');
        $query = $this->db->query("SELECT tbl_user.id, tbl_user.npa, tbl_user.username, tbl_user.nama, wilayah_provinsi.nama as pw, wilayah_kabupaten.nama as pd, 
        wilayah_kecamatan.nama as pc, wilayah_desa.nama as desa,  tbl_user.pj, tbl_user.email, tbl_user.no_telpon, tbl_user.alamat, tbl_user.reg_date,
        tbl_user.last_login, tbl_user.level, tbl_user.foto
        FROM tbl_user
        INNER JOIN wilayah_provinsi
        ON tbl_user.pw = wilayah_provinsi.id
        INNER JOIN wilayah_kabupaten 
        ON tbl_user.pd = wilayah_kabupaten.id
        INNER JOIN wilayah_kecamatan 
        ON tbl_user.pc = wilayah_kecamatan.id 
        INNER JOIN wilayah_desa
        ON tbl_user.desa = wilayah_desa.id;");
        return $query->result();
    }
    
    function data($param) {
        $query = $this->db->query("SELECT tbl_user.id, tbl_user.npa, tbl_user.username, tbl_user.nama, wilayah_provinsi.nama as pw, wilayah_kabupaten.nama as pd, 
        wilayah_kecamatan.nama as pc, wilayah_desa.nama as desa,  tbl_user.pj, tbl_user.email, tbl_user.no_telpon, tbl_user.alamat, tbl_user.reg_date,
        tbl_user.last_login, tbl_user.level, tbl_user.foto
        FROM tbl_user
        INNER JOIN wilayah_provinsi
        ON tbl_user.pw = wilayah_provinsi.id
        INNER JOIN wilayah_kabupaten 
        ON tbl_user.pd = wilayah_kabupaten.id
        INNER JOIN wilayah_kecamatan 
        ON tbl_user.pc = wilayah_kecamatan.id 
        INNER JOIN wilayah_desa
        ON tbl_user.desa = wilayah_desa.id;");
        return $query->result();
    }

    public function count_all_users() {
        return $this->db->count_all('tbl_user');
//        $query = $this->db->get();
//        $rowcount = $query->num_rows();
    }
    
    function cek($username, $password) {
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        return $this->db->get("tbl_user");
    }
    
    function lihat_user(){
         return $this->db->get("tbl_user");
    }

    function cekKode($kode) {
        $this->db->where("username", $kode);
        return $this->db->get("tbl_user");
    }

    function cekNpa($npa) {
//        $this->db->where("npa", $npa);
//        return $this->db->get("tbl_user");
        $param = array('npa' => $npa);
//        return $this->db->get_where("tbl_user", $param);
        $this->db->select('tbl_user.id, tbl_user.npa, tbl_user.username, tbl_user.nama, wilayah_provinsi.nama as pw, wilayah_kabupaten.nama as pd, 
        wilayah_kecamatan.nama as pc, wilayah_desa.nama as desa,  tbl_user.pj, tbl_user.email, tbl_user.no_telpon, tbl_user.alamat, tbl_user.reg_date,
        tbl_user.last_login, tbl_user.level, tbl_user.foto');
        $this->db->from('tbl_user');
        $this->db->join('wilayah_provinsi', 'tbl_user.pw = wilayah_provinsi.id', 'inner');
        $this->db->join('wilayah_kabupaten', 'tbl_user.pd = wilayah_kabupaten.id', 'inner');
        $this->db->join('wilayah_kecamatan', 'tbl_user.pc = wilayah_kecamatan.id', 'inner');
        $this->db->join('wilayah_desa', 'tbl_user.desa = wilayah_desa.id', 'inner');
//        $this->db->where(array('npa' => $param));
        $this->db->where($param);
//        return $this->db->get_where("tbl_anggota", $param);
        return $this->db->get();
    }
    
    function get_user($npa)
    {
        $this->db->where('npa', $npa);
        $this->db->from('tbl_user');
        $query = $this->db->get();
        return $query->result();
    }
    
    function edit($npa) {
        $user = $this->db->get_where('tbl_user', array('npa' => $npa))->row();
        return $user;
    }

    function getLoginData($usr, $psw) {
        $u = mysql_real_escape_string($usr);
        $p = md5(mysql_real_escape_string($psw));
        $q_cek_login = $this->db->get_where('tbl_user', array('username' => $u, 'password' => $p));
        if (count($q_cek_login->result()) > 0) {
            foreach ($q_cek_login->result() as $qck) {
                foreach ($q_cek_login->result() as $qad) {
                    $sess_data['logged_in'] = 'anaLoginWebYeuh';
                    $sess_data['id']        = $qad->no;
                    $sess_data['npa']       = $qad->username;
                    $sess_data['username']  = $qad->username;
                    $sess_data['nama']      = $qad->password;
                    $sess_data['email']     = $qad->email;
                    $sess_data['level']     = $qad->hakakses;
                    $this->session->set_userdata($sess_data);
                }
                redirect('dashboard1');
            }
        } else {
            $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
            header('location:' . base_url() . 'index');
        }
    }

    function update($npa, $data) {
        $this->db->where("npa", $npa);
        $this->db->update("tbl_user", $data);
    }

    function simpan($info) {
        $this->db->insert("tbl_user", $info);
    }

    function hapus($kode) {
        $this->db->where("id", $kode);
        $this->db->delete("tbl_user");
    }

}
