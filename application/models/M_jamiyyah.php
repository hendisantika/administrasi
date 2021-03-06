<?php

/**
 * Description of M_Anggota
 *
 * @author hendi.santika
 */
class M_Jamiyyah extends CI_Model {

    function simpan_performa_pc($data) {
        $this->db->insert("tbl_performa_pc", $data);
    }

    function simpan_performa_pd($data) {
        $this->db->insert("tbl_performa_pd", $data);
    }

    function simpan_monografi_pc($data_geografis, $data_kejamiyyahan, $data_keanggotaan, $data_x_anggota) {
        $this->db->insert("tbl_data_geografis_pc", $data_geografis);
        $this->db->insert("tbl_data_kejamiyyahan", $data_kejamiyyahan);
        $this->db->insert("tbl_data_keanggotaan", $data_keanggotaan);
        $this->db->insert("tbl_data_x_anggota", $data_x_anggota);
    }

    function simpan_monografi_pd($data_geografis, $data_kejamiyyahan) {
        $this->db->insert("tbl_data_geografis_pd", $data_geografis);
        $this->db->insert("tbl_data_kejamiyyahan_pd", $data_kejamiyyahan);
    }

    function add_data_jamaah($data_jamaah) {
        $this->db->insert("tbl_data_jamaah", $data_jamaah);
    }
    
    function pc_yg_sudah_input_data(){
		$query = $this->db->query("SELECT wilayah_provinsi.nama as pw, 
                    wilayah_kabupaten.nama as pd, wilayah_kecamatan.nama as pc, COUNT(tbl_anggota.npa) as jumlah
        FROM ((((tbl_anggota
        INNER JOIN wilayah_provinsi
        ON tbl_anggota.pw = wilayah_provinsi.id)
        INNER JOIN wilayah_kabupaten 
        ON tbl_anggota.pd = wilayah_kabupaten.id)
        INNER JOIN wilayah_kecamatan 
        ON tbl_anggota.pc = wilayah_kecamatan.id) 
        INNER JOIN wilayah_desa
        ON tbl_anggota.desa = wilayah_desa.id)
        GROUP BY pw, pd, pc
        ORDER BY pw, pd, pc ASC;");
        
        return $query->result();
        
	}

    function lihat_pj() {
        $query = $this->db->query("SELECT tbl_data_jamaah.kd_pj, tbl_data_jamaah.nama_jamaah, wilayah_provinsi.nama as pw, wilayah_kabupaten.nama as pd, 
        wilayah_kecamatan.nama as pc, wilayah_desa.nama as desa,  tbl_data_jamaah.latitude, tbl_data_jamaah.longitude, tbl_data_jamaah.musyjam_terakhir, tbl_data_jamaah.ketua_pj, tbl_data_jamaah.sekretaris, tbl_data_jamaah.bendahara,
        tbl_data_jamaah.jml_anggota, tbl_data_jamaah.foto
        FROM tbl_data_jamaah
        INNER JOIN wilayah_provinsi
        ON tbl_data_jamaah.provinsi = wilayah_provinsi.id
        INNER JOIN wilayah_kabupaten 
        ON tbl_data_jamaah.kabupaten = wilayah_kabupaten.id
        INNER JOIN wilayah_kecamatan 
        ON tbl_data_jamaah.kecamatan = wilayah_kecamatan.id 
        INNER JOIN wilayah_desa
        ON tbl_data_jamaah.desa = wilayah_desa.id;");
        return $query->result();
    }

    function lihat_pj_per_pc($kd_pc) {
        $query = $this->db->query("SELECT tbl_data_jamaah.kd_pj, tbl_data_jamaah.kd_pc, tbl_data_jamaah.kd_pd, tbl_data_jamaah.kd_pw, tbl_data_jamaah.nama_jamaah, wilayah_provinsi.nama as pw, wilayah_kabupaten.nama as pd, 
        wilayah_kecamatan.nama as pc, wilayah_desa.nama as desa,  tbl_data_jamaah.latitude, tbl_data_jamaah.longitude, tbl_data_jamaah.musyjam_terakhir, tbl_data_jamaah.ketua_pj, tbl_data_jamaah.sekretaris, tbl_data_jamaah.bendahara,
        tbl_data_jamaah.jml_anggota, tbl_data_jamaah.foto, tbl_data_jamaah.alamat
        FROM tbl_data_jamaah
        INNER JOIN wilayah_provinsi
        ON tbl_data_jamaah.provinsi = wilayah_provinsi.id
        INNER JOIN wilayah_kabupaten 
        ON tbl_data_jamaah.kabupaten = wilayah_kabupaten.id
        INNER JOIN wilayah_kecamatan 
        ON tbl_data_jamaah.kecamatan = wilayah_kecamatan.id 
        INNER JOIN wilayah_desa
        ON tbl_data_jamaah.desa = wilayah_desa.id
        where tbl_data_jamaah.kd_pc = '$kd_pc'");
//        echo $this->db->last_query();exit;
        return $query->result();
//        return $this->db->get();
    }

    function lihat_pc() {
        $query = $this->db->query("SELECT tbl_data_geografis_pc.kd_pc, tbl_data_geografis_pc.kd_pd, tbl_data_geografis_pc.kd_pw, wilayah_provinsi.nama as pw, wilayah_kabupaten.nama as pd, 
        wilayah_kecamatan.nama as pc, tbl_data_geografis_pc.latitude, tbl_data_geografis_pc.longitude, 
        tbl_data_geografis_pc.no_kontak, tbl_data_geografis_pc.email, tbl_data_geografis_pc.foto
        FROM tbl_data_geografis_pc
        INNER JOIN wilayah_provinsi
        ON tbl_data_geografis_pc.pw = wilayah_provinsi.id
        INNER JOIN wilayah_kabupaten 
        ON tbl_data_geografis_pc.pd = wilayah_kabupaten.id
        INNER JOIN wilayah_kecamatan 
        ON tbl_data_geografis_pc.pc = wilayah_kecamatan.id;");
        return $query->result();
    }

    function lihat_pc_per_pd($kd_pd) {
        $query = $this->db->query("SELECT tbl_data_geografis_pc.kd_pc, tbl_data_geografis_pc.kd_pd, tbl_data_geografis_pc.kd_pw, wilayah_provinsi.nama as pw, wilayah_kabupaten.nama as pd, 
        wilayah_kecamatan.nama as pc, tbl_data_geografis_pc.latitude, tbl_data_geografis_pc.longitude, 
        tbl_data_geografis_pc.no_kontak, tbl_data_geografis_pc.email, tbl_data_geografis_pc.foto
        FROM tbl_data_geografis_pc
        INNER JOIN wilayah_provinsi
        ON tbl_data_geografis_pc.pw = wilayah_provinsi.id
        INNER JOIN wilayah_kabupaten 
        ON tbl_data_geografis_pc.pd = wilayah_kabupaten.id
        INNER JOIN wilayah_kecamatan 
        ON tbl_data_geografis_pc.pc = wilayah_kecamatan.id
        WHERE kd_pd = '$kd_pd'");
        return $query->result();
    }

    function lihat_pd() {
        $query = $this->db->query("SELECT tbl_data_geografis_pd.kd_pd, tbl_data_geografis_pd.kd_pw, wilayah_provinsi.nama as pw, wilayah_kabupaten.nama as pd, 
        tbl_data_geografis_pd.latitude, tbl_data_geografis_pd.longitude, 
        tbl_data_geografis_pd.no_kontak, tbl_data_geografis_pd.email, tbl_data_geografis_pd.foto
        FROM tbl_data_geografis_pd
        INNER JOIN wilayah_provinsi
        ON tbl_data_geografis_pd.pw = wilayah_provinsi.id
        INNER JOIN wilayah_kabupaten 
        ON tbl_data_geografis_pd.pd = wilayah_kabupaten.id;");
        return $query->result();
    }

    function cek_pj($kd_pj) {
        $param = array('tbl_data_jamaah.kd_pj' => $kd_pj);
        $this->db->select('tbl_data_jamaah.kd_pj, tbl_data_jamaah.kd_pc, tbl_data_jamaah.kd_pd, tbl_data_jamaah.kd_pw, tbl_data_jamaah.nama_jamaah, wilayah_provinsi.nama as provinsi, wilayah_kabupaten.nama as kabupaten, 
        wilayah_kecamatan.nama as kecamatan, wilayah_desa.nama as desa, tbl_data_jamaah.latitude, tbl_data_jamaah.longitude, tbl_data_jamaah.musyjam_terakhir, tbl_data_jamaah.ketua_pj, tbl_data_jamaah.sekretaris, tbl_data_jamaah.bendahara,
        tbl_data_jamaah.jml_anggota, tbl_data_jamaah.alamat, tbl_data_jamaah.foto');
        $this->db->from('tbl_data_jamaah');
        $this->db->join('wilayah_provinsi', 'tbl_data_jamaah.provinsi = wilayah_provinsi.id', 'inner');
        $this->db->join('wilayah_kabupaten', 'tbl_data_jamaah.kabupaten = wilayah_kabupaten.id', 'inner');
        $this->db->join('wilayah_kecamatan', 'tbl_data_jamaah.kecamatan = wilayah_kecamatan.id', 'inner');
        $this->db->join('wilayah_desa', 'tbl_data_jamaah.desa = wilayah_desa.id', 'inner');
        $this->db->where($param);
        return $this->db->get();
    }

    function cek_pc($kd_pc) {
        $param = array('tbl_data_geografis_pc.kd_pc' => $kd_pc);
        $this->db->select('tbl_data_geografis_pc.kd_pc, tbl_data_geografis_pc.kd_pd, tbl_data_geografis_pc.kd_pw, wilayah_provinsi.nama as provinsi, wilayah_kabupaten.nama as kabupaten, 
        wilayah_kecamatan.nama as pc, tbl_data_geografis_pc.pc as nama_pc, wilayah_kabupaten.nama as pd, wilayah_provinsi.nama as pw, tbl_data_geografis_pc.latitude, tbl_data_geografis_pc.longitude, tbl_data_geografis_pc.alamat_utama, tbl_data_geografis_pc.alamat_alternatif, tbl_data_geografis_pc.no_kontak, tbl_data_geografis_pc.email,
        tbl_data_geografis_pc.luas, tbl_data_geografis_pc.bw_utara, tbl_data_geografis_pc.bw_selatan, tbl_data_geografis_pc.bw_timur, tbl_data_geografis_pc.bw_barat,
        tbl_data_geografis_pc.jarak_dari_ibukota_negara, tbl_data_geografis_pc.jarak_dari_ibukota_provinsi, tbl_data_geografis_pc.jarak_dari_ibukota_kabupaten, tbl_data_geografis_pc.foto,
        tbl_data_kejamiyyahan.penasehat1, tbl_data_kejamiyyahan.penasehat2, tbl_data_kejamiyyahan.penasehat3, tbl_data_kejamiyyahan.penasehat4,   
        tbl_data_kejamiyyahan.ketua, tbl_data_kejamiyyahan.wkl_ketua, tbl_data_kejamiyyahan.sekretaris, tbl_data_kejamiyyahan.wkl_sekretaris, tbl_data_kejamiyyahan.bendahara, tbl_data_kejamiyyahan.wkl_bendahara,
        tbl_data_kejamiyyahan.bid_jamiyyah, tbl_data_kejamiyyahan.wkl_bid_jamiyyah, tbl_data_kejamiyyahan.bid_kaderisasi, tbl_data_kejamiyyahan.wkl_bid_kaderisasi,
        tbl_data_kejamiyyahan.bid_administrasi, tbl_data_kejamiyyahan.wkl_bid_administrasi, tbl_data_kejamiyyahan.bid_pendidikan, tbl_data_kejamiyyahan.wkl_bid_pendidikan,
        tbl_data_kejamiyyahan.bid_dakwah, tbl_data_kejamiyyahan.wkl_bid_dakwah, tbl_data_kejamiyyahan.bid_humas_publikasi, tbl_data_kejamiyyahan.wkl_bid_humas_publikasi,
        tbl_data_kejamiyyahan.bid_hal, tbl_data_kejamiyyahan.wkl_bid_hal, tbl_data_kejamiyyahan.bid_or_seni, tbl_data_kejamiyyahan.wkl_bid_or_seni,
        tbl_data_kejamiyyahan.bid_sosial, tbl_data_kejamiyyahan.wkl_bid_sosial, tbl_data_kejamiyyahan.pembantu_umum1, tbl_data_kejamiyyahan.pembantu_umum2, tbl_data_kejamiyyahan.pembantu_umum3,
        tbl_data_kejamiyyahan.hari, tbl_data_kejamiyyahan.pukul, tbl_data_kejamiyyahan.musycab_terakhir_m');
//        tbl_data_jamaah.nama_jamaah, tbl_data_jamaah.musyjam_terakhir, tbl_data_jamaah.ketua_pj, tbl_data_jamaah, tbl_data_jamaah.jml_anggota, tbl_data_jamaah.alamat, tbl_data_jamaah.foto');
        $this->db->from('tbl_data_geografis_pc');
        $this->db->join('wilayah_provinsi', 'tbl_data_geografis_pc.pw = wilayah_provinsi.id', 'inner');
        $this->db->join('wilayah_kabupaten', 'tbl_data_geografis_pc.pd = wilayah_kabupaten.id', 'inner');
        $this->db->join('wilayah_kecamatan', 'tbl_data_geografis_pc.pc = wilayah_kecamatan.id', 'inner');
        $this->db->join('tbl_data_kejamiyyahan', 'tbl_data_geografis_pc.kd_pc = tbl_data_kejamiyyahan.kd_pc', 'inner');
//        $this->db->join('tbl_data_jamaah', 'tbl_data_geografis_pc.pc = wilayah_kecamatan.id', 'inner');
        $this->db->where($param);
//        echo $this->db->last_query();exit;
        return $this->db->get();
    }

    function cek_performa_pc($kd_pc) {
        $param = array('tbl_performa_pc.kd_pc' => $kd_pc);
//        $query = $this->db->query("SELECT * FROM tbl_performa_pc where kd_pc = '$kd_pc'");
//        return $query->result();
        $this->db->select('*');
        $this->db->from('tbl_performa_pc');
        $this->db->where($param);
        return $this->db->get();
    }

    function cek_pd($kd_pd) {
        $param = array('tbl_data_geografis_pd.kd_pd' => $kd_pd);
        $this->db->select('tbl_data_geografis_pd.kd_pd, tbl_data_geografis_pd.kd_pw, wilayah_provinsi.nama as provinsi, wilayah_kabupaten.nama as kabupaten, 
        tbl_data_geografis_pd.pd as nama_pd, tbl_data_geografis_pd.pd as nama_pd, wilayah_kabupaten.nama as pd, wilayah_provinsi.nama as pw, tbl_data_geografis_pd.latitude, tbl_data_geografis_pd.longitude, tbl_data_geografis_pd.alamat_utama, tbl_data_geografis_pd.alamat_alternatif, tbl_data_geografis_pd.no_kontak, tbl_data_geografis_pd.email,
        tbl_data_geografis_pd.luas, tbl_data_geografis_pd.bw_utara, tbl_data_geografis_pd.bw_selatan, tbl_data_geografis_pd.bw_timur, tbl_data_geografis_pd.bw_barat,
        tbl_data_geografis_pd.jarak_dari_ibukota_negara, tbl_data_geografis_pd.jarak_dari_ibukota_provinsi, tbl_data_geografis_pd.jarak_dari_ibukota_kabupaten, tbl_data_geografis_pd.foto,
        tbl_data_kejamiyyahan_pd.penasehat1, tbl_data_kejamiyyahan_pd.penasehat2, tbl_data_kejamiyyahan_pd.penasehat3, tbl_data_kejamiyyahan_pd.penasehat4,   
        tbl_data_kejamiyyahan_pd.ketua, tbl_data_kejamiyyahan_pd.wkl_ketua, tbl_data_kejamiyyahan_pd.sekretaris, tbl_data_kejamiyyahan_pd.wkl_sekretaris, tbl_data_kejamiyyahan_pd.bendahara, tbl_data_kejamiyyahan_pd.wkl_bendahara,
        tbl_data_kejamiyyahan_pd.bid_jamiyyah, tbl_data_kejamiyyahan_pd.wkl_bid_jamiyyah, tbl_data_kejamiyyahan_pd.bid_kaderisasi, tbl_data_kejamiyyahan_pd.wkl_bid_kaderisasi,
        tbl_data_kejamiyyahan_pd.bid_administrasi, tbl_data_kejamiyyahan_pd.wkl_bid_administrasi, tbl_data_kejamiyyahan_pd.bid_pendidikan, tbl_data_kejamiyyahan_pd.wkl_bid_pendidikan,
        tbl_data_kejamiyyahan_pd.bid_dakwah, tbl_data_kejamiyyahan_pd.wkl_bid_dakwah, tbl_data_kejamiyyahan_pd.bid_humas_publikasi, tbl_data_kejamiyyahan_pd.wkl_bid_humas_publikasi,
        tbl_data_kejamiyyahan_pd.bid_hal, tbl_data_kejamiyyahan_pd.wkl_bid_hal, tbl_data_kejamiyyahan_pd.bid_or_seni, tbl_data_kejamiyyahan_pd.wkl_bid_or_seni,
        tbl_data_kejamiyyahan_pd.bid_sosial, tbl_data_kejamiyyahan_pd.wkl_bid_sosial, tbl_data_kejamiyyahan_pd.pembantu_umum1, tbl_data_kejamiyyahan_pd.pembantu_umum2, tbl_data_kejamiyyahan_pd.pembantu_umum3,
        tbl_data_kejamiyyahan_pd.hari, tbl_data_kejamiyyahan_pd.pukul, tbl_data_kejamiyyahan_pd.musyda_terakhir_m');
        $this->db->from('tbl_data_geografis_pd');
        $this->db->join('wilayah_provinsi', 'tbl_data_geografis_pd.pw = wilayah_provinsi.id', 'inner');
        $this->db->join('wilayah_kabupaten', 'tbl_data_geografis_pd.pd = wilayah_kabupaten.id', 'inner');
        $this->db->join('tbl_data_kejamiyyahan_pd', 'tbl_data_geografis_pd.kd_pd = tbl_data_kejamiyyahan_pd.kd_pd', 'inner');
        $this->db->where($param);
//        echo $this->db->last_query();exit;
        return $this->db->get();
    }

    function cek_performa_pd($kd_pd) {
        $param = array('tbl_performa_pd.kd_pd' => $kd_pd);
//        $query = $this->db->query("SELECT * FROM tbl_performa_pc where kd_pc = '$kd_pc'");
//        return $query->result();
        $this->db->select('*');
        $this->db->from('tbl_performa_pd');
        $this->db->where($param);
        return $this->db->get();
    }

    function cek_usia() {
        $query = $this->db->query("SELECT CASE
                                      WHEN umur < 20 THEN '< 20'
                                      WHEN umur BETWEEN 20 and 25 THEN '20 - 25'
                                      WHEN umur BETWEEN 26 and 30 THEN '26 - 30'
                                      WHEN umur BETWEEN 31 and 35 THEN '31 - 35'
                                      WHEN umur >= 35 THEN '> 35'
                                      WHEN umur IS NULL THEN '(NULL)'
                                      END as range_umur,
                                      COUNT(*) AS jumlah

                                      FROM (SELECT npa, nama, tanggal_lahir, TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) AS umur FROM `tbl_anggota`)  as dummy_table
                                      GROUP BY range_umur
                                      ORDER BY range_umur;");
        return $query->result();
    }

    function cek_usia_anggota_pc() {
        $query = $this->db->query("SELECT CASE
                                      WHEN umur < 20 THEN '< 20'
                                      WHEN umur BETWEEN 20 and 25 THEN '20 - 25'
                                      WHEN umur BETWEEN 26 and 30 THEN '26 - 30'
                                      WHEN umur BETWEEN 31 and 35 THEN '31 - 35'
                                      WHEN umur >= 35 THEN '> 35'
                                      WHEN umur IS NULL THEN '(NULL)'
                                      END as range_umur,
                                      COUNT(*) AS jumlah

                                      FROM (SELECT npa, nama, tanggal_lahir, TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) AS umur FROM `tbl_anggota`)  as dummy_table
                                      GROUP BY range_umur
                                      ORDER BY range_umur;");
        return $query->result();
    }

    function cek_usia_anggota_pj() {
        $query = $this->db->query("SELECT CASE
                                      WHEN umur < 20 THEN '< 20'
                                      WHEN umur BETWEEN 20 and 25 THEN '20 - 25'
                                      WHEN umur BETWEEN 26 and 30 THEN '26 - 30'
                                      WHEN umur BETWEEN 31 and 35 THEN '31 - 35'
                                      WHEN umur >= 35 THEN '> 35'
                                      WHEN umur IS NULL THEN '(NULL)'
                                      END as range_umur,
                                      COUNT(*) AS jumlah

                                      FROM (SELECT npa, nama, tanggal_lahir, TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) AS umur FROM `tbl_anggota`)  as dummy_table
                                      GROUP BY range_umur
                                      ORDER BY range_umur;");
        return $query->result();
    }
    function cek_usia_anggota_pd() {
        $query = $this->db->query("SELECT CASE
                                      WHEN umur < 20 THEN '< 20'
                                      WHEN umur BETWEEN 20 and 25 THEN '20 - 25'
                                      WHEN umur BETWEEN 26 and 30 THEN '26 - 30'
                                      WHEN umur BETWEEN 31 and 35 THEN '31 - 35'
                                      WHEN umur >= 35 THEN '> 35'
                                      WHEN umur IS NULL THEN '(NULL)'
                                      END as range_umur,
                                      COUNT(*) AS jumlah

                                      FROM (SELECT npa, nama, tanggal_lahir, TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) AS umur FROM `tbl_anggota`)  as dummy_table
                                      GROUP BY range_umur
                                      ORDER BY range_umur;");
        return $query->result();
    }

    function cek_pendidikan() {
        $query = $this->db->query("SELECT CASE
                                    WHEN level = 'SD' THEN 'SD'
                                    WHEN level = 'SMP' THEN 'SMP'
                                    WHEN level = 'Tsn' THEN 'Tsn'
                                    WHEN level = 'SMK' THEN 'SMK'
                                    WHEN level = 'SMA' THEN 'SMA'
                                    WHEN level = 'MA' THEN 'MA'
                                    WHEN level = 'STM' THEN 'STM'
                                    WHEN level = 'Mln' THEN 'Mln'
                                    WHEN level = 'D1' THEN 'D1'
                                    WHEN level = 'D2' THEN 'D2'
                                    WHEN level = 'D3' THEN 'D3'
                                    WHEN level = 'S1' THEN 'S1'
                                    WHEN level = 'S2' THEN 'S2'
                                    WHEN level = 'S3' THEN 'S3'
                                    WHEN level LIKE '%--%' THEN 'Belum Diisi'
                                    WHEN level IS NULL THEN '(NULL)'
                                    END level_pendidikan,
                                    COUNT(*) AS jumlah

                                    FROM (SELECT npa, pendidikan as level FROM `tbl_pendidikan`)  as dummy_table
                                    GROUP BY level;");
        return $query->result();
    }

    function cek_pendidikan_anggota_pc() {
        $query = $this->db->query("SELECT CASE
                                    WHEN level = 'SD' THEN 'SD'
                                    WHEN level = 'SMP' THEN 'SMP'
                                    WHEN level = 'Tsn' THEN 'Tsn'
                                    WHEN level = 'SMK' THEN 'SMK'
                                    WHEN level = 'SMA' THEN 'SMA'
                                    WHEN level = 'MA' THEN 'MA'
                                    WHEN level = 'STM' THEN 'STM'
                                    WHEN level = 'Mln' THEN 'Mln'
                                    WHEN level = 'D1' THEN 'D1'
                                    WHEN level = 'D2' THEN 'D2'
                                    WHEN level = 'D3' THEN 'D3'
                                    WHEN level = 'S1' THEN 'S1'
                                    WHEN level = 'S2' THEN 'S2'
                                    WHEN level = 'S3' THEN 'S3'
                                    WHEN level IS NULL THEN '(NULL)'
                                    END level_pendidikan,
                                    COUNT(*) AS jumlah

                                    FROM (SELECT npa, pendidikan as level FROM `tbl_pendidikan`)  as dummy_table
                                    GROUP BY level;");
        return $query->result();
    }
    
    function cek_pendidikan_anggota_pd() {
        $query = $this->db->query("SELECT CASE
                                    WHEN level = 'SD' THEN 'SD'
                                    WHEN level = 'SMP' THEN 'SMP'
                                    WHEN level = 'Tsn' THEN 'Tsn'
                                    WHEN level = 'SMK' THEN 'SMK'
                                    WHEN level = 'SMA' THEN 'SMA'
                                    WHEN level = 'MA' THEN 'MA'
                                    WHEN level = 'STM' THEN 'STM'
                                    WHEN level = 'Mln' THEN 'Mln'
                                    WHEN level = 'D1' THEN 'D1'
                                    WHEN level = 'D2' THEN 'D2'
                                    WHEN level = 'D3' THEN 'D3'
                                    WHEN level = 'S1' THEN 'S1'
                                    WHEN level = 'S2' THEN 'S2'
                                    WHEN level = 'S3' THEN 'S3'
                                    WHEN level IS NULL THEN '(NULL)'
                                    END level_pendidikan,
                                    COUNT(*) AS jumlah

                                    FROM (SELECT npa, pendidikan as level FROM `tbl_pendidikan`)  as dummy_table
                                    GROUP BY level;");
        return $query->result();
    }

    function cek_pendidikan_anggota_pj() {
        $query = $this->db->query("SELECT CASE
                                    WHEN level = 'SD' THEN 'SD'
                                    WHEN level = 'SMP' THEN 'SMP'
                                    WHEN level = 'Tsn' THEN 'Tsn'
                                    WHEN level = 'SMK' THEN 'SMK'
                                    WHEN level = 'SMA' THEN 'SMA'
                                    WHEN level = 'MA' THEN 'MA'
                                    WHEN level = 'STM' THEN 'STM'
                                    WHEN level = 'Mln' THEN 'Mln'
                                    WHEN level = 'D1' THEN 'D1'
                                    WHEN level = 'D2' THEN 'D2'
                                    WHEN level = 'D3' THEN 'D3'
                                    WHEN level = 'S1' THEN 'S1'
                                    WHEN level = 'S2' THEN 'S2'
                                    WHEN level = 'S3' THEN 'S3'
                                    WHEN level IS NULL THEN '(NULL)'
                                    END level_pendidikan,
                                    COUNT(*) AS jumlah

                                    FROM (SELECT npa, pendidikan as level FROM `tbl_pendidikan`)  as dummy_table
                                    GROUP BY level;");
        return $query->result();
    }
    
    function cek_status_merital() {
        $query = $this->db->query("SELECT CASE
                                    WHEN status = 'Single' THEN 'Single'
                                    WHEN status = 'Menikah' THEN 'Menikah'
                                    WHEN status = 'Duda' THEN 'Duda'
                                    WHEN status LIKE '%-%' THEN 'Belum Diisi'
                                    WHEN status IS NULL THEN '(NULL)'
                                    END as status,
                                    COUNT(*) AS jumlah

                                    FROM (SELECT npa, status_merital as status FROM `tbl_anggota`)  as dummy_table
                                    GROUP BY status
                                    ");
        return $query->result();
    }

    function cek_status_merital_anggota_pc() {
        $query = $this->db->query("SELECT CASE
                                    WHEN status = 'Single' THEN 'Single'
                                    WHEN status = 'Menikah' THEN 'Menikah'
                                    WHEN status = 'Duda' THEN 'Duda'
                                    WHEN status = '- S' THEN 'Duda'
                                    WHEN status IS NULL THEN '(NULL)'
                                    END as status,
                                    COUNT(*) AS jumlah

                                    FROM (SELECT npa, status_merital as status FROM `tbl_anggota`)  as dummy_table
                                    GROUP BY status
                                    ");
        return $query->result();
    }
    function cek_status_merital_anggota_pd() {
        $query = $this->db->query("SELECT CASE
                                    WHEN status = 'Single' THEN 'Single'
                                    WHEN status = 'Menikah' THEN 'Menikah'
                                    WHEN status = 'Duda' THEN 'Duda'
                                    WHEN status IS NULL THEN '(NULL)'
                                    END as status,
                                    COUNT(*) AS jumlah

                                    FROM (SELECT npa, status_merital as status FROM `tbl_anggota`)  as dummy_table
                                    GROUP BY status
                                    ");
        return $query->result();
    }

    function cek_status_merital_anggota_pj() {
        $query = $this->db->query("SELECT CASE
                                    WHEN status = 'Single' THEN 'Single'
                                    WHEN status = 'Menikah' THEN 'Menikah'
                                    WHEN status = 'Duda' THEN 'Duda'
                                    WHEN status IS NULL THEN '(NULL)'
                                    END as status,
                                    COUNT(*) AS jumlah

                                    FROM (SELECT npa, status_merital as status FROM `tbl_anggota`)  as dummy_table
                                    GROUP BY status
                                    ");
        return $query->result();
    }

    function cek_status_keanggotaan() {
        $query = $this->db->query("SELECT CASE
                                    WHEN status = 'Biasa' THEN 'Biasa'
                                    WHEN status = 'Tersiar' THEN 'Tersiar'
                                    WHEN status = 'Istimewa' THEN 'Istimewa'
                                    WHEN status LIKE '%-%' THEN 'Belum Diisi'
                                    WHEN status IS NULL THEN '(NULL)'
                                    END as status,
                                    COUNT(*) AS jumlah

                                    FROM (SELECT npa, jenis_keanggotaan as status FROM `tbl_anggota`)  as dummy_table
                                    GROUP BY status
                                    ");
        return $query->result();
    }

    function cek_gol_darah() {
        $query = $this->db->query("SELECT CASE
                                    WHEN gol = 'A' THEN 'A'
                                    WHEN gol = 'B' THEN 'B'
                                    WHEN gol = 'AB' THEN 'AB'
                                    WHEN gol = 'O' THEN 'O'
                                    WHEN gol LIKE '%-%' THEN 'Belum Diisi'
                                    WHEN gol IS NULL THEN '(NULL)'
                                    END as gol,
                                    COUNT(*) AS jumlah

                                    FROM (SELECT npa, gol_darah as gol FROM `tbl_anggota`)  as dummy_table
                                    GROUP BY gol
                                    ");
        return $query->result();
    }

}
