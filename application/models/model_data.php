<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_data extends CI_Model{

	//petugas
	function login($id_petugas,$password) {
        $this->db->where('id_petugas', $id_petugas);
        $this->db->where('password', $password);
        $query =  $this->db->get('petugas_tb');
        return $query->num_rows();
    }

    function data_login($id_petugas,$password) {
        $this->db->where('id_petugas', $id_petugas);
        $this->db->where('password', $password);
        return $this->db->get('petugas_tb')->row();
    }
    public function input_data_register($data,$table){
		$this->db->insert($table,$data);
	}


	//danacair
	public function tampil_data_danacair(){
		return $this->db->get('datacair_tb');
	}
	public function tampil_data_petugas(){
		return $this->db->get('petugas_tb');
	}
	public function input_data_danacair($tgl_pencairan,$no_kontrak_peminjaman,$id_nasabah,$no_kk,$nik,$nama,$alamat,$jumlah_cair,$tenor_peminjaman,$pendapatan_administrasi,$id_petugas){
		$this->db->insert('datacair_tb', array( 'tgl_pencairan' => $tgl_pencairan, 'no_kontrak_peminjaman' => $no_kontrak_peminjaman, 'id_nasabah' => $id_nasabah, 'no_kk' => $no_kk, 'nik' => $nik, 'nama' => $nama, 'alamat' => $alamat, 'jumlah_cair' => $jumlah_cair, 'tenor_peminjaman' => $tenor_peminjaman, 'pendapatan_administrasi' => $pendapatan_administrasi, 'id_petugas' => $id_petugas));

        $this->db->insert('penerimaanangsuran_tb', array('nik' => $nik, 'nama' => $nama, 'id_petugas' => $id_petugas, 'tabungan' => 'null', 'biaya_angsuran' => 'null', 'januari' => 'null', 'februari' => 'null', 'maret' =>'null', 'april' => 'null', 'mei' => 'null', 'juni' => 'null', 'juli' => 'null', 'agustus' => 'null', 'september' => 'null', 'oktober' => 'null', 'november' => 'null', 'desember' => 'null', 'total_pembayaran' => 'null'));

        $this->db->insert('itungdebit_tb', array('tgl_pencairan' => $tgl_pencairan, 'no_kontrak_peminjaman' => $no_kontrak_peminjaman, 'jaminan' => 'null', 'nik' => $nik, 'no_kk' => $no_kk, 'nama' => $nama,'alamat' => $alamat, 'tenor_peminjaman' => $tenor_peminjaman, 'pokok_pinjaman' => 'null', 'biaya_angsuran' => 'null', 'jasa_pinjaman' => 'null', 'total_pembayaranpokok' =>'null', 'total_pembayaranjasa' => 'null', 'sisa_pokok' => 'null', 'sisa_jasa' => 'null', 'piutang_angsuran' => 'null'));
	}
	public function edit_data_danacair($where,$table){	
		return $this->db->get_where($table,$where);
	}
	public function update_data_danacair($updated_data, $id_pencairan){
		$this->db->where('id_pencairan', $id_pencairan); 
		$this->db->update('datacair_tb', $updated_data);
	}
	public function hapus_data_danacair($id_pencairan){
        $result = $this->db->delete('datacair_tb', array('id_pencairan' => $id_pencairan)); 
        return $result;
    }
	public function reset_danacair(){
   $query=$this->db->query("TRUNCATE TABLE datacair_tb;");
    return $query;
    }


    //penerimaanangsuran
	public function tampil_data_angsuran(){
		return $this->db->get('penerimaanangsuran_tb');
	}
	public function update_data_angsuran($id_angsuran,$id_petugas,$nama,$nik,$tabungan,$biaya_angsuran,$januari,$februari,$maret,$april,$mei,$juni,$juli,$agustus,$september,$oktober,$november,$desember,$total_pembayaran){
		
		$this->db->where('id_angsuran', $id_angsuran); 

		$this->db->update('penerimaanangsuran_tb', array('id_petugas' => $id_petugas, 'nama' => $nama, 'nik' => $nik, 'tabungan' => $tabungan, 'biaya_angsuran' => $biaya_angsuran,'januari' => $januari, 'februari' => $februari, 'maret' =>$maret , 'april' => $april, 'mei' =>$mei, 'juni' =>$juni, 'juli' =>$juli, 'agustus' => $agustus, 'september' => $september, 'oktober' => $oktober, 'november' => $november, 'desember' => $desember, 'total_pembayaran' => $tabungan+$januari+$februari+$maret+$april+$mei+$juni+$juli+$agustus+$september+$oktober+$november+$desember));

		$this->db->update('itungdebit_tb', array('biaya_angsuran' => $biaya_angsuran));
	}
	public function hapus_data_angsuran($id_angsuran){
        $result = $this->db->delete('penerimaanangsuran_tb', array('id_angsuran' => $id_angsuran)); 
        return $result;
    }
	public function reset_angsuran(){
    $query=$this->db->query("TRUNCATE TABLE penerimaanangsuran_tb;");
    return $query;
    }


    //itungdebit
	public function tampil_data_itungdebit(){
		return $this->db->get('itungdebit_tb');
	}
	public function update_data_itungdebit($updated_data, $id_total){
		$this->db->where('id_total', $id_total); 
		$this->db->update('itungdebit_tb', $updated_data);
	}
	public function hapus_data_itungdebit($id_total){
        $result = $this->db->delete('itungdebit_tb', array('id_total' => $id_total)); 
        return $result;
    }
	public function reset_itungdebit(){
   $query=$this->db->query("TRUNCATE TABLE itungdebit_tb;");
    return $query;
    }


	//ppob
	public function tampil_data_ppob(){
		return $this->db->get('ppob_tb');
	}
	public function tampil_data_transaksi(){
		return $this->db->get('transaksi_tb');
	}
	public function input_data_ppob($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data_ppob($where,$table){	
		return $this->db->get_where($table,$where);
	}
	public function update_data_ppob($updated_data, $id_ppob){
		$this->db->where('id_ppob', $id_ppob); 
		$this->db->update('ppob_tb', $updated_data);
	}
	public function hapus_data_ppob($id_ppob){
        $result = $this->db->delete('ppob_tb', array('id_ppob' => $id_ppob)); 
        return $result;
    }
	public function reset_ppob(){
   $query=$this->db->query("TRUNCATE TABLE ppob_tb;");
    return $query;
    }
	public function tampil_data_transfer(){
		return $this->db->get('transfer_tb');
	}


    //alat
	public function tampil_data_alat(){
		return $this->db->get('alat_tb');
	}
	public function input_data_alat($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data_alat($where,$table){	
		return $this->db->get_where($table,$where);
	}
	public function update_data_alat($updated_data, $id_ppob){
		$this->db->where('id_alat', $id_alat); 
		$this->db->update('alat_tb', $updated_data);
	}
	public function hapus_data_alat($id_alat){
        $result = $this->db->delete('alat_tb', array('id_alat' => $id_alat)); 
        return $result;
    }
	public function reset_alat(){
   $query=$this->db->query("TRUNCATE TABLE alat_tb;");
    return $query;
    }


    //pembayaran
	public function tampil_data_pembayaran(){
		return $this->db->get('pembayaran_tb');
	}
	public function input_data_pembayaran($id_penyewa, $nama, $nik, $alamat, $tgl_sewa, $biaya_sewa, $lama_sewa, $total_pembayaran, $keterangan){
		$this->db->insert('penyewa_tb', array('nama' => $nama, 'nik' => $nik, 'alamat' => $alamat));

        $last_id = $this->db->insert_id();

        $this->db->insert('pembayaranalat_tb', array('id_penyewa' => $last_id, 'tgl_sewa' => $tgl_sewa, 'biaya_sewa' => $biaya_sewa, 'lama_sewa' => $lama_sewa, 'total_pembayaran' => $biaya_sewa*$lama_sewa, 'keterangan' => $keterangan));
	}
	public function edit_data_pembayaran($where,$table){	
		return $this->db->get_where($table,$where);
	}
	public function update_data_pembayaran($id_penyewa, $tgl_sewa, $nama, $nik, $alamat, $biaya_sewa, $lama_sewa, $total_pembayaran, $keterangan){
		
		$this->db->where('id_penyewa', $id_penyewa);

		$this->db->update('penyewa_tb', array('nama' => $nama, 'nik' => $nik, 'alamat' => $alamat));
        $this->db->update('pembayaranalat_tb', array('tgl_sewa' => $tgl_sewa, 'biaya_sewa' => $biaya_sewa, 'lama_sewa' => $lama_sewa, 'total_pembayaran' => $biaya_sewa*$lama_sewa, 'keterangan' => $keterangan));
    }
	public function hapus_data_pembayaran($id_penyewa,$id_pembayaran){
        $result = $this->db->delete('penyewa_tb', array('id_penyewa' => $id_penyewa)); 
        $result = $this->db->delete('pembayaranalat_tb', array('id_pembayaran' => $id_pembayaran)); 
        return $result;
    }
	public function reset_pembayaran(){
   $query=$this->db->query("TRUNCATE TABLE penyewa_tb;");
   $query=$this->db->query("TRUNCATE TABLE pembayaranalat_tb;");
    return $query;
    }


    //penyewa
    public function tampil_data_penyewa(){
		return $this->db->get('penyewa_tb');
	}
	public function tampil_data_penyewaanalat(){
		$this->db->order_by('nik','ASC');
		return $this->db->from('penyewa_tb')
          ->join('alat_tb', 'alat_tb.id_alat=penyewa_tb.id_alat')
          ->get()
          ->result();
	}


    //covid
	public function tampil_data_covid(){
		return $this->db->get('bansoscovid_tb');
	}
	public function input_data_covid($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data_covid($where,$table){	
		return $this->db->get_where($table,$where);
	}
	public function update_data_covid($updated_data, $id_covid){
		$this->db->where('id_covid', $id_covid); 
		$this->db->update('bansoscovid_tb', $updated_data);
	}
	public function hapus_data_covid($id_covid){
        $result = $this->db->delete('bansoscovid_tb', array('id_covid' => $id_covid)); 
        return $result;
    }
	public function reset_covid(){
   $query=$this->db->query("TRUNCATE TABLE bansoscovid_tb;");
    return $query;
    }


    //reguler
	public function tampil_data_reguler(){
		return $this->db->get('bansosreguler_tb');
	}
	public function input_data_reguler($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data_reguler($where,$table){	
		return $this->db->get_where($table,$where);
	}
	public function update_data_reguler($updated_data, $id_reguler){
		$this->db->where('id_reguler', $id_reguler); 
		$this->db->update('bansosreguler_tb', $updated_data);
	}
	public function hapus_data_reguler($id_reguler){
        $result = $this->db->delete('bansosreguler_tb', array('id_reguler' => $id_reguler)); 
        return $result;
    }
	public function reset_reguler(){
   $query=$this->db->query("TRUNCATE TABLE bansosreguler_tb;");
    return $query;
    }


	//data sampah
	public function tampil_data_sampah(){
		return $this->db->get('datasampah_tb');
	}
	public function tampil_data_alamat(){
		return $this->db->get('alamat_tb');
	}
	public function input_data_sampah($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data_sampah($where,$table){	
		return $this->db->get_where($table,$where);
	}
	public function update_data_sampah($updated_data, $id_sampah){
		$this->db->where('id_sampah', $id_sampah); 
		$this->db->update('datasampah_tb', $updated_data);
	}
	public function reset_sampah(){
   $query=$this->db->query("TRUNCATE TABLE datasampah_tb;");
    return $query;
    }
    public function hapus_data_sampah($id_sampah){
        $result = $this->db->delete('datasampah_tb', array('id_sampah' => $id_sampah)); 
        return $result;
    }


    //bukarekeningbumdes
    public function tampil_data_rekeningbumdes(){
		return $this->db->get('bukatabunganbumdes_tb');
	}
	public function input_data_rekeningbumdes($id_rekeningbumdes,$nama_bank,$kode_bank,$tgl_buatrek,$saldo_awal,$id_petugas){
		$this->db->insert('bukatabunganbumdes_tb', array( 'nama_bank' => $nama_bank, 'kode_bank' => $kode_bank, 'tgl_buatrek' => $tgl_buatrek, 'saldo_awal' => $saldo_awal,'id_petugas' => $id_petugas));
		$this->db->insert('tabunganbumdes_tb', array( 'kode_bank' => $kode_bank, 'tgl_transaksi' => $tgl_buatrek, 'id_petugas' => $id_petugas, 'nominal' => $saldo_awal));
	}
	public function edit_data_rekeningbumdes($where,$table){	
		return $this->db->get_where($table,$where);
	}
	public function update_data_rekeningbumdes($updated_data, $id_rekeningbumdes){
		$this->db->where('id_rekeningbumdes', $id_rekeningbumdes); 
		$this->db->update('bukatabunganbumdes_tb', $updated_data);
	}
	public function reset_rekeningbumdes(){
   $query=$this->db->query("TRUNCATE TABLE bukatabunganbumdes_tb;");
    return $query;
    }
    public function hapus_data_rekeningbumdes($id_rekeningbumdes){
        $result = $this->db->delete('bukatabunganbumdes_tb', array('id_rekeningbumdes' => $id_rekeningbumdes)); 
        return $result;
    }


    //tabunganbumdes
    public function tampil_data_tabunganbumdes(){
		return $this->db->get('tabunganbumdes_tb');
	}
	public function input_data_tabunganbumdes($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data_tabunganbumdes($where,$table){	
		return $this->db->get_where($table,$where);
	}
	public function update_data_tabunganbumdes($updated_data, $id_tabunganbumdes){
		$this->db->where('id_tabunganbumdes', $id_tabunganbumdes); 
		$this->db->update('tabunganbumdes_tb', $updated_data);
	}
	public function reset_tabunganbumdes(){
   $query=$this->db->query("TRUNCATE TABLE tabunganbumdes_tb;");
    return $query;
    }
    public function hapus_data_tabunganbumdes($id_tabunganbumdes){
        $result = $this->db->delete('tabunganbumdes_tb', array('id_tabunganbumdes' => $id_tabunganbumdes)); 
        return $result;
    }
    public function detail_transaksibumdes($where,$table){
		return $this->db->get_where($table,$where);
	}
	public function Total1($where,$table)
	{
	   $this->db->select_sum('nominal');
	   $query = $this->db->get_where($table,$where);
	   if($query->num_rows()>0)
	   {
	     return $query->row()->nominal;
	   }
	   else
	   {
	     return 0;
	   }
	}


	//bukarekeningnasabah
    public function tampil_data_rekeningnasabah(){
		return $this->db->get('bukatabungannasabah_tb');
	}
	public function input_data_rekeningnasabah($id_rekeningnasabah,$tgl_buatrek,$nama,$no_kk,$nik,$alamat,$saldo_awal,$id_petugas){
		$this->db->insert('bukatabungannasabah_tb', array('tgl_buatrek' => $tgl_buatrek, 'nama' => $nama, 'no_kk' => $no_kk, 'nik' => $nik, 'alamat' => $alamat, 'saldo_awal' => $saldo_awal,'id_petugas' => $id_petugas));
		$this->db->insert('tabungannasabah_tb', array( 'nik' => $nik, 'tgl_transaksi' => $tgl_buatrek, 'id_petugas' => $id_petugas, 'nominal' => $saldo_awal));
	}
	public function edit_data_rekeningnasabah($where,$table){	
		return $this->db->get_where($table,$where);
	}
	public function update_data_rekeningnasabah($updated_data, $id_rekeningnasabah){
		$this->db->where('id_rekeningnasabah', $id_rekeningnasabah); 
		$this->db->update('bukatabungannasabah_tb', $updated_data);
	}
	public function reset_rekeningnasabah(){
   $query=$this->db->query("TRUNCATE TABLE bukatabungannasabah_tb;");
    return $query;
    }
    public function hapus_data_rekeningnasabah($id_rekeningnasabah){
        $result = $this->db->delete('bukatabungannasabah_tb', array('id_rekeningnasabah' => $id_rekeningnasabah)); 
        return $result;
    }


    //tabungannasabah
    public function tampil_data_tabungannasabah(){
		return $this->db->get('tabungannasabah_tb');
	}
	public function input_data_tabungannasabah($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data_tabungannasabah($where,$table){	
		return $this->db->get_where($table,$where);
	}
	public function update_data_tabungannasabah($updated_data, $id_tabungannasabah){
		$this->db->where('id_tabungannasabah', $id_tabungannasabah); 
		$this->db->update('tabungannasabah_tb', $updated_data);
	}
	public function reset_tabungannasabah(){
   $query=$this->db->query("TRUNCATE TABLE tabungannasabah_tb;");
    return $query;
    }
    public function hapus_data_tabungannasabah($id_tabungannasabah){
        $result = $this->db->delete('tabungannasabah_tb', array('id_tabungannasabah' => $id_tabungannasabah)); 
        return $result;
    }
    public function detail_transaksinasabah($where,$table){
		return $this->db->get_where($table,$where);
	}
	public function Total2($where,$table)
	{
	   $this->db->select_sum('nominal');
	   $query = $this->db->get_where($table,$where);
	   if($query->num_rows()>0)
	   {
	     return $query->row()->nominal;
	   }
	   else
	   {
	     return 0;
	   }
	}
}
