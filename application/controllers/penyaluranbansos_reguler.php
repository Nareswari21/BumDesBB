<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	// Load library phpspreadsheet
	require('./excel/vendor/autoload.php');

	use PhpOffice\PhpSpreadsheet\Helper\Sample;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	// End load library phpspreadsheet

class penyaluranbansos_reguler extends CI_Controller {

	function __construct(){
        parent::__construct();      
        $this->load->model('model_data');
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
     }

	public function index()
	{
		$data['datas'] = $this->model_data->tampil_data_reguler()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar_bansos');
		$this->load->view('v_penyaluranbansosreguler',$data);
		$this->load->view('templates/footer');
	}
	public function hapus(){
		$id_reguler = $this->input->post('id_reguler');

	    $result = $this->model_data->hapus_data_reguler($id_reguler);
	    if($result){
	      redirect('penyaluranbansos_reguler');
	    }else{
	      echo '<script>alert("gagal");</script>';
	      redirect('penyaluranbansos_reguler');
	    }
	}
	public function reset(){
        $data['datas'] = $this->model_data->reset_reguler();
		$this->load->view('v_penyaluranbansosreguler', $data);
        redirect('penyaluranbansos_reguler');
	}
	function tambah_aksi(){
		$id_reguler = $this->input->post('id_reguler');
		$nama_pengurus = $this->input->post('nama_pengurus');
		$nik = $this->input->post('nik');
		$alamat = $this->input->post('alamat');
		$no_rekening = $this->input->post('no_rekening');
		$januari = $this->input->post('januari');
		$februari = $this->input->post('februari');
		$maret = $this->input->post('maret');
		$april = $this->input->post('april');
		$mei = $this->input->post('mei');
		$juni = $this->input->post('juni');
		$juli = $this->input->post('juli');
		$agustus = $this->input->post('agustus');
		$september = $this->input->post('september');
		$oktober = $this->input->post('oktober');
		$november = $this->input->post('november');
		$desember = $this->input->post('desember');
 
		$data = array(
			'id_reguler' => $id_reguler,
			'nama_pengurus' => $nama_pengurus,
			'nik' => $nik,
			'alamat' => $alamat,
			'no_rekening' => $no_rekening,
			'januari' => $januari,
			'februari' => $februari,
			'maret' => $maret,
			'april' => $april,
			'mei' => $mei,
			'juni' => $juni,
			'juli' => $juli,
			'agustus' => $agustus,
			'september' => $september,
			'oktober' => $oktober,
			'november' => $november,
			'desember' => $desember
			);
		$this->model_data->input_data_reguler($data,'bansosreguler_tb');
		redirect('penyaluranbansos_reguler');
	} 
	function edit($id_reguler){
		$where = array('id_reguler' => $id_reguler);
		$data['bansosreguler_tb']= $this->model_data->edit_data_reguler($where,'bansosreguler_tb')->result();
		//print_r($id	);
		$this->load->view('v_penyaluranbansosreguler', $data);
	}
	function update(){
		$id_reguler = $this->input->post('id_reguler');
		$nama_pengurus = $this->input->post('nama_pengurus');
		$alamat = $this->input->post('alamat');
		$nik = $this->input->post('nik');
		$no_rekening = $this->input->post('no_rekening');
		$januari = $this->input->post('januari');
		$februari = $this->input->post('februari');
		$maret = $this->input->post('maret');
		$april = $this->input->post('april');
		$mei = $this->input->post('mei');
		$juni = $this->input->post('juni');
		$juli = $this->input->post('juli');
		$agustus = $this->input->post('agustus');
		$september = $this->input->post('september');
		$oktober = $this->input->post('oktober');
		$november = $this->input->post('november');
		$desember = $this->input->post('desember');
		
		$updated_data = array(
			'id_reguler' => $id_reguler,
			'nama_pengurus' => $nama_pengurus,
			'alamat' => $alamat,
			'nik' => $nik,
			'no_rekening' => $no_rekening,
			'januari' => $januari,
			'februari' => $februari,
			'maret' => $maret,
			'april' => $april,
			'mei' => $mei,
			'juni' => $juni,
			'juli' => $juli,
			'agustus' => $agustus,
			'september' => $september,
			'oktober' => $oktober,
			'november' => $november,
			'desember' => $desember
			);
		$this->model_data->update_data_reguler($updated_data, $this->input->post('id_reguler'));
		redirect('penyaluranbansos_reguler');
	}

	public function export_excel()
	  {
	   $data=$this->db->get('bansosreguler_tb')->result();
	   // Create new Spreadsheet object
	   $spreadsheet = new Spreadsheet();
	 
	   // Set document properties
	   $spreadsheet->getProperties()->setCreator('Nareswari')
	   ->setLastModifiedBy('Nares')
	   ->setTitle('Data BReguler')
	   ->setSubject('Data BReguler Document')
	   ->setDescription('Test document for Office 2019 XLSX, generated using PHP classes.')
	   ->setKeywords('office 2019 openxml php')
	   ->setCategory('Test result file');
	 
	   // Add some data
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A1', 'Nomor')
	   ->setCellValue('B1', 'Nama Pengurus')
	   ->setCellValue('C1', 'Alamat')
	   ->setCellValue('D1', 'NIK')
	   ->setCellValue('E1', 'No Rekening')
	   ->setCellValue('F1', 'Januari')
	   ->setCellValue('G1', 'Februari')
	   ->setCellValue('H1', 'Maret')
	   ->setCellValue('I1', 'april')
	   ->setCellValue('J1', 'Mei')
	   ->setCellValue('K1', 'Juni')
	   ->setCellValue('L1', 'Juli')
	   ->setCellValue('M1', 'Agustus')
	   ->setCellValue('N1', 'September')
	   ->setCellValue('O1', 'Oktober')
	   ->setCellValue('P1', 'November')
	   ->setCellValue('Q1', 'Desember')
	   ;
	 
	   // Miscellaneous glyphs, UTF-8
	   $i=2;
	   $no=1; 
	   
	   foreach($data as $datas) {
	 
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A'.$i, $datas->id_reguler)
	   ->setCellValue('B'.$i, $datas->nama_pengurus)
	   ->setCellValue('C'.$i, $datas->alamat)
	   ->setCellValue('D'.$i, $datas->nik)
	   ->setCellValue('E'.$i, $datas->no_rekening)
	   ->setCellValue('F'.$i, $datas->januari)
	   ->setCellValue('G'.$i, $datas->februari)
	   ->setCellValue('H'.$i, $datas->maret)
	   ->setCellValue('I'.$i, $datas->april)
	   ->setCellValue('J'.$i, $datas->mei)
	   ->setCellValue('K'.$i, $datas->juni)
	   ->setCellValue('L'.$i, $datas->juli)
	   ->setCellValue('M'.$i, $datas->agustus)
	   ->setCellValue('N'.$i, $datas->september)
	   ->setCellValue('O'.$i, $datas->oktober)
	   ->setCellValue('P'.$i, $datas->november)
	   ->setCellValue('Q'.$i, $datas->desember);

	 
	   $no++;
	   $i++;
	   }
	 
	   // Rename worksheet
	   $spreadsheet->getActiveSheet()->setTitle('Data BReguler'.date('d-m-Y H'));
	 
	   // Set active sheet index to the first sheet, so Excel opens this as the first sheet
	   $spreadsheet->setActiveSheetIndex(0);
	 
	   // Redirect output to a client’s web browser (Xlsx)
	   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	   header('Content-Disposition: attachment;filename="Data BReguler.xlsx"');
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
