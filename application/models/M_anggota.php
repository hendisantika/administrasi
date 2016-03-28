<?php

/**
 * Description of M_Anggota
 *
 * @author hendi.santika
 */
class M_Anggota extends CI_Model {

    function get_anggota($q) {
        $this->db->select('*');
        $this->db->like('nama', $q);
        $query = $this->db->get('tbl_anggota');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row['npa']));
                $new_row['value'] = htmlentities(stripslashes($row['nama']));
                $new_row['description']=htmlentities(stripslashes($row['nama']));
                $new_row['pekerjaan']=htmlentities(stripslashes($row['pekerjaan']));
                $new_row['image'] = htmlentities(stripslashes($row['foto']));
                $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    function simpan($data_pribadi, $data_keluarga, $data_orangtua, $data_pendidikan, $data_organisasi, $data_keterampilan, $data_tafiq) {
        $this->db->insert("tbl_anggota", $data_pribadi);
        $this->db->insert("tbl_keluarga", $data_keluarga);
        $this->db->insert("tbl_orangtua", $data_orangtua);
        $this->db->insert("tbl_pendidikan", $data_pendidikan);
        $this->db->insert("tbl_organisasi", $data_organisasi);
        $this->db->insert("tbl_keterampilan", $data_keterampilan);
        $this->db->insert("tbl_tafiq", $data_tafiq);
    }

    public function lihat_anggota() {
//        $query = $this->db->get('tbl_anggota');
        $query = $this->db->query("SELECT tbl_anggota.npa, tbl_anggota.nama, wilayah_provinsi.nama as pw, wilayah_kabupaten.nama as pd, 
        wilayah_kecamatan.nama as pc, wilayah_desa.nama as desa,  tbl_anggota.pj, tbl_anggota.gol_darah, tbl_anggota.email, tbl_anggota.no_telpon1, tbl_anggota.no_telpon2, tbl_anggota.alamat, tbl_anggota.status,
        tbl_anggota.pekerjaan, tbl_anggota.tempat, tbl_anggota.tanggal_lahir, tbl_anggota.foto
        FROM tbl_anggota
        INNER JOIN wilayah_provinsi
        ON tbl_anggota.pw = wilayah_provinsi.id
        INNER JOIN wilayah_kabupaten 
        ON tbl_anggota.pd = wilayah_kabupaten.id
        INNER JOIN wilayah_kecamatan 
        ON tbl_anggota.pc = wilayah_kecamatan.id 
        INNER JOIN wilayah_desa
        ON tbl_anggota.desa = wilayah_desa.id;");
        return $query->result();
    }

    public function lihat_kode_pc($kd_kec) {
        $query = $this->db->query("SELECT kd_pc, pc, pd, pw FROM tbl_data_geografis_pc where kd_pc = '$kd_kec'");
        return $query->result();
    }

    public function lihat_anggota_pc($kd_kec) {
        $query = $this->db->query("SELECT tbl_anggota.npa, tbl_anggota.nama, wilayah_provinsi.nama as pw, wilayah_kabupaten.nama as pd, 
        wilayah_kecamatan.nama as pc, wilayah_desa.nama as desa,  tbl_anggota.pj, tbl_anggota.gol_darah, tbl_anggota.email, tbl_anggota.no_telpon1, tbl_anggota.no_telpon2, tbl_anggota.alamat, tbl_anggota.status,
        tbl_anggota.pekerjaan, tbl_anggota.tempat, tbl_anggota.tanggal_lahir, tbl_anggota.foto
        FROM tbl_anggota
        INNER JOIN wilayah_provinsi
        ON tbl_anggota.pw = wilayah_provinsi.id
        INNER JOIN wilayah_kabupaten 
        ON tbl_anggota.pd = wilayah_kabupaten.id
        INNER JOIN wilayah_kecamatan 
        ON tbl_anggota.pc = wilayah_kecamatan.id 
        INNER JOIN wilayah_desa
        ON tbl_anggota.desa = wilayah_desa.id
        WHERE tbl_anggota.pc = '$kd_kec';");
        return $query->result();
    }

    function edit($npa) {
        $anggota = $this->db->get_where('tbl_anggota', array('npa' => $npa))->row();
        return $anggota;
    }

    function cekNpa($npa) {
        $param = array('tbl_anggota.npa' => $npa);

        $this->db->select('tbl_anggota.npa, tbl_anggota.nama, wilayah_provinsi.nama as pw, wilayah_kabupaten.nama as pd, 
                            wilayah_kecamatan.nama as pc, wilayah_desa.nama as desa,  tbl_anggota.pj, tbl_anggota.gol_darah, tbl_anggota.email, tbl_anggota.no_telpon1, tbl_anggota.no_telpon2, tbl_anggota.alamat, tbl_anggota.status, tbl_anggota.last_updated,
                            tbl_anggota.pekerjaan, tbl_anggota.status_merital, tbl_anggota.jenis_keanggotaan, tbl_anggota.tafiq, tbl_anggota.reg_date, tbl_anggota.keterangan as ket_anggota, tbl_anggota.tempat, tbl_anggota.tanggal_lahir, tbl_anggota.foto, 
                            tbl_keluarga.nama_istri, tbl_keluarga.status_istri, tbl_keluarga.jumlah_anak, tbl_keluarga.keterangan, 
                            tbl_orangtua.nama_ayah, tbl_orangtua.nama_ibu, tbl_orangtua.status_ayah, tbl_orangtua.status_ibu, , tbl_orangtua.alamat,
                            tbl_organisasi.nama_org1, tbl_organisasi.thn_org1, tbl_organisasi.lokasi_org1, tbl_organisasi.jabatan_org1,
                            tbl_organisasi.nama_org2, tbl_organisasi.thn_org2, tbl_organisasi.lokasi_org2, tbl_organisasi.jabatan_org2,
                            tbl_organisasi.nama_org3, tbl_organisasi.thn_org3, tbl_organisasi.lokasi_org3, tbl_organisasi.jabatan_org3,
                            tbl_pendidikan.nama_sd, tbl_pendidikan.lulus_sd, tbl_pendidikan.pendidikan,
                            tbl_pendidikan.nama_smp, tbl_pendidikan.lulus_smp, 
                            tbl_pendidikan.nama_sma, tbl_pendidikan.lulus_sma, 
                            tbl_pendidikan.nama_d1, tbl_pendidikan.lulus_d1, tbl_pendidikan.jurusan_d1, 
                            tbl_pendidikan.nama_d2, tbl_pendidikan.lulus_d2, tbl_pendidikan.jurusan_d2, 
                            tbl_pendidikan.nama_d3, tbl_pendidikan.lulus_d3, tbl_pendidikan.jurusan_d3, 
                            tbl_pendidikan.nama_s1, tbl_pendidikan.lulus_s1, tbl_pendidikan.jurusan_s1, 
                            tbl_pendidikan.nama_s2, tbl_pendidikan.lulus_s2, tbl_pendidikan.jurusan_s2, 
                            tbl_pendidikan.nama_s3, tbl_pendidikan.lulus_s3, tbl_pendidikan.jurusan_s3, 
                            tbl_keterampilan.keterampilan1, tbl_keterampilan.keterampilan2, tbl_keterampilan.keterampilan3,
                            tbl_tafiq.level, tbl_tafiq.mulai1, tbl_tafiq.selesai1, tbl_tafiq.lokasi1,
                            tbl_tafiq.mulai2, tbl_tafiq.selesai2, tbl_tafiq.lokasi2,
                            tbl_tafiq.mulai3, tbl_tafiq.selesai3, tbl_tafiq.lokasi3');
        $this->db->from('tbl_anggota');
        $this->db->join('wilayah_provinsi', 'tbl_anggota.pw = wilayah_provinsi.id', 'inner');
        $this->db->join('wilayah_kabupaten', 'tbl_anggota.pd = wilayah_kabupaten.id', 'inner');
        $this->db->join('wilayah_kecamatan', 'tbl_anggota.pc = wilayah_kecamatan.id', 'inner');
        $this->db->join('wilayah_desa', 'tbl_anggota.desa = wilayah_desa.id', 'inner');
        $this->db->join('tbl_keluarga', 'tbl_anggota.npa = tbl_keluarga.npa', 'inner');
        $this->db->join('tbl_orangtua', 'tbl_anggota.npa = tbl_orangtua.npa', 'inner');
        $this->db->join('tbl_organisasi', 'tbl_anggota.npa = tbl_organisasi.npa', 'inner');
        $this->db->join('tbl_pendidikan', 'tbl_anggota.npa = tbl_pendidikan.npa', 'inner');
        $this->db->join('tbl_keterampilan', 'tbl_anggota.npa = tbl_keterampilan.npa', 'inner');
        $this->db->join('tbl_tafiq', 'tbl_anggota.npa = tbl_tafiq.npa', 'inner');
        $this->db->where($param);
//        echo $this->db->last_query();exit;
        return $this->db->get();
    }

    public function update($npa, $data_pribadi) {
        // Data Pribadi
        $this->db->where("npa", $npa);
        $this->db->update("tbl_anggota", $data_pribadi);
    }

    public function update_foto($npa, $data) {
        $this->db->where('npa', $npa);
        $this->db->update('tbl_anggota', $data);
    }

    public function update2($npa, $data_pribadi, $data_keluarga, $data_orangtua, $data_pendidikan, $data_organisasi, $data_keterampilan) {
        $this->db->set('a.firstname', 'Pekka');
        $this->db->set('a.lastname', 'Kuronen');
        $this->db->set('b.companyname', 'Suomi Oy');
        $this->db->set('b.companyaddress', 'Mannerheimtie 123, Helsinki Suomi');

        $this->db->where('a.id', 1);
        $this->db->where('a.id = b.id');
        $this->db->update('table as a, table2 as b');

        // Data Pribadi
        $this->db->where(array('npa' => $npa));
        return $this->db->update('tbl_anggota', $data_pribadi);

        $this->db->where(array('npa' => $npa));
        return $this->db->update("tbl_keluarga", $data_keluarga);

        // Data Orangtua
        $this->db->where(array('npa' => $npa));
        return $this->db->update("tbl_orangtua", $data_orangtua);

        // Data Pendidikan
        $this->db->where(array('npa' => $npa));
        return $this->db->update("tbl_pendidikan", $data_pendidikan);

        // Data Organisasi
        $this->db->where(array('npa' => $npa));
        return $this->db->update("tbl_organisasi", $data_organisasi);

        // Data Keterampilan
        $this->db->where(array('npa' => $npa));
        return $this->db->update("tbl_keterampilan", $data_keterampilan);
    }

    public function update_data_pendidikan($npa, $data_pendidikan) {
        // Data Pendidikan
        $this->db->where("npa", $npa);
        $this->db->update("tbl_pendidikan", $data_pendidikan);
    }

    public function update_data_keluarga($npa, $data_keluarga) {
        // Data Keluarga
        $this->db->where("npa", $npa);
        $this->db->update("tbl_keluarga", $data_keluarga);
    }

    public function update_data_orangtua($npa, $data_orangtua) {
        // Data Orangtua
        $this->db->where("npa", $npa);
        $this->db->update("tbl_orangtua", $data_orangtua);
    }

    public function update_data_keterampilan($npa, $data_keterampilan) {
        // Data Keterampilan
        $this->db->where("npa", $npa);
        $this->db->update("tbl_keterampilan", $data_keterampilan);
    }

    public function update_data_organisasi($npa, $data_organisasi) {
        // Data Organisasi
        $this->db->where("npa", $npa);
        $this->db->update("tbl_organisasi", $data_organisasi);
    }
    
    public function update_data_tafiq($npa, $data_tafiq) {
        // Data Tafiq
        $this->db->where("npa", $npa);
        $this->db->update("tbl_tafiq", $data_tafiq);
    }

    public function check_email_availablity() {
        $email = trim($this->input->post('email'));
        $email = strtolower($email);

        $query = $this->db->query('SELECT * FROM tbl_users where email="' . $email . '"');

        if ($query->num_rows() > 0)
            return false;
        else
            return true;
    }

    function delete($npa) {
        $this->db->where('npa', $npa);
        $this->db->delete('tbl_anggota');
    }

}
