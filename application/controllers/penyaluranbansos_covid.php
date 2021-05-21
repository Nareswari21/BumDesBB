<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	// Load library phpspreadsheet
	require('./excel/vendor/autoload.php');

	use PhpOffice\PhpSpreadsheet\Helper\Sample;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	// End load library phpspreadsheet

class penyaluranbansos_covid extends CI_Controller {

	function __construct(){
        parent::__construct();      
        $this->load->model('model_data');
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
     }

	public function index()
	{
		$data['datas'] = $this->model_data->tampil_data_covid()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar_bansos');
		$this->load->view('v_penyaluranbansoscovid',$data);
		$this->load->view('templates/footer');
	}
	public function hapus(){
		$id_covid = $this->input->post('id_covid');

	    $result = $this->model_data->hapus_data_covid($id_covid);
	    if($result){
	      redirect('penyaluranbansos_covid');
	    }else{
	      echo '<script>alert("gagal");</script>';
	      redirect('penyaluranbansos_covid');
	    }
	}
	public function reset(){
        $data['datas'] = $this->model_data->reset_covid();
		$this->load->view('v_penyaluranbansoscovid', $data);
        redirect('penyaluranbansos_covid');
	}
	function tambah_aksi(){
		$id_covid = $this->input->post('id_covid');
		$nama_bank = $this->input->post('nama_bank');
		$id_pengurus = $this->input->post('id_pengurus');
		$nama_pengurus = $this->input->post('nama_pengurus');
		$nik = $this->input->post('nik');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$ibu_kandung = $this->input->post('ibu_kandung');
		$alamat = $this->input->post('alamat');
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kelurahan');
		$no_kartu = $this->input->post('no_kartu');
		$keterangan_data = $this->input->post('keterangan_data');
 
		$data = array(
			'id_covid' => $id_covid,
			'nama_bank' => $nama_bank,
			'id_pengurus' => $id_pengurus,
			'nama_pengurus' => $nama_pengurus,
			'nik' => $nik,
			'tgl_lahir' => $tgl_lahir,
			'ibu_kandung' => $ibu_kandung,
			'alamat' => $alamat,
			'kecamatan' => $kecamatan,
			'kelurahan' => $kelurahan,
			'no_kartu' => $no_kartu,
			'keterangan_data' => $keterangan_data
			);
		$this->model_data->input_data_covid($data,'bansoscovid_tb');
		redirect('penyaluranbansos_covid');
	} 
	function edit($id_covid){
		$where = array('id_covid' => $id_covid);
		$data['bansoscovid_tb']= $this->model_data->edit_data_covid($where,'bansoscovid_tb')->result();
		//print_r($id	);
		$this->load->view('v_penyaluranbansoscovid', $data);
	}
	function update(){
		$id_covid = $this->input->post('id_covid');
		$nama_bank = $this->input->post('nama_bank');
		$id_pengurus = $this->input->post('id_pengurus');
		$nama_pengurus = $this->input->post('nama_pengurus');
		$nik = $this->input->post('nik');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$ibu_kandung = $this->input->post('ibu_kandung');
		$alamat = $this->input->post('alamat');
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kelurahan');
		$no_kartu = $this->input->post('no_kartu');
		$keterangan_data = $this->input->post('keterangan_data');
		
		$updated_data = array(
			'id_covid' => $id_covid,
			'nama_bank' => $nama_bank,
			'id_pengurus' => $id_pengurus,
			'nama_pengurus' => $nama_pengurus,
			'nik' => $nik,
			'tgl_lahir' => $tgl_lahir,
			'ibu_kandung' => $ibu_kandung,
			'alamat' => $alamat,
			'kecamatan' => $kecamatan,
			'kelurahan' => $kelurahan,
			'no_kartu' => $no_kartu,
			'keterangan_data' => $keterangan_data
			);
		$this->model_data->update_data_covid($updated_data, $this->input->post('id_covid'));
		redirect('penyaluranbansos_covid');
	}
	public function export_excel()
	  {
	   $data=$this->db->get('bansoscovid_tb')->result();
	   // Create new Spreadsheet object
	   $spreadsheet = new Spreadsheet();
	 
	   // Set document properties
	   $spreadsheet->getProperties()->setCreator('Nareswari')
	   ->setLastModifiedBy('Nares')
	   ->setTitle('Data BCovid')
	   ->setSubject('Data BCovid Document')
	   ->setDescription('Test document for Office 2019 XLSX, generated using PHP classes.')
	   ->setKeywords('office 2019 openxml php')
	   ->setCategory('Test result file');
	 
	   // Add some data
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A1', 'Nomor')
	   ->setCellValue('B1', 'Bank')
	   ->setCellValue('C1', 'ID Pengurus')
	   ->setCellValue('D1', 'Nama Pengurus')
	   ->setCellValue('E1', 'NIK')
	   ->setCellValue('F1', 'Tanggal Lahir')
	   ->setCellValue('G1', 'Ibu Kandung')
	   ->setCellValue('H1', 'Alamat')
	   ->setCellValue('I1', 'Kecamatan')
	   ->setCellValue('J1', 'Kelurahan')
	   ->setCellValue('K1', 'No Kartu')
	   ->setCellValue('L1', 'Keterangan Data')
	   ;
	 
	   // Miscellaneous glyphs, UTF-8
	   $i=2;
	   $no=1; 
	   
	   foreach($data as $datas) {
	 
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A'.$i, $datas->id_covid)
	   ->setCellValue('B'.$i, $datas->nama_bank)
	   ->setCellValue('C'.$i, $datas->id_pengurus)
	   ->setCellValue('D'.$i, $datas->nama_pengurus)
	   ->setCellValue('E'.$i, $datas->nik)
	   ->setCellValue('F'.$i, $datas->tgl_lahir)
	   ->setCellValue('G'.$i, $datas->ibu_kandung)
	   ->setCellValue('H'.$i, $datas->alamat)
	   ->setCellValue('I'.$i, $datas->kecamatan)
	   ->setCellValue('J'.$i, $datas->kelurahan)
	   ->setCellValue('K'.$i, $datas->no_kartu)
	   ->setCellValue('L'.$i, $datas->keterangan_data);

	 
	   $no++;
	   $i++;
	   }
	 
	   // Rename worksheet
	   $spreadsheet->getActiveSheet()->setTitle('Data BCovid '.date('d-m-Y H'));
	 
	   // Set active sheet index to the first sheet, so Excel opens this as the first sheet
	   $spreadsheet->setActiveSheetIndex(0);
	 
	   // Redirect output to a client’s web browser (Xlsx)
	   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	   header('Content-Disposition: attachment;filename="Data BCovid.xlsx"');
	   header('Cache-Control: max-age=0');
	   // If you're serving to IE 9, then the following may be needed
	   header('Cache-Control: max-age=1');
	 
	   // If you're serving to IE over SSL, then the following may be needed
	   header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	   header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
	   header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	   header('Pragma: public'); // HTTP/1.0
	 
	   $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
	   $writer->save('php://output');
	   exit;
	  }

}
