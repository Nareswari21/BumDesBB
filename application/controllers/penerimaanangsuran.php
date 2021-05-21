<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	// Load library phpspreadsheet
	require('./excel/vendor/autoload.php');

	use PhpOffice\PhpSpreadsheet\Helper\Sample;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	// End load library phpspreadsheet

class penerimaanangsuran extends CI_Controller {

	function __construct(){
        parent::__construct();      
        $this->load->model('model_data');
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
     }

	public function index()
	{
		$data['datas'] = $this->model_data->tampil_data_angsuran()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar_simpanpinjam');
		$this->load->view('v_penerimaanangsuran',$data);
		$this->load->view('templates/footer');
	}
	public function hapus(){
		$id_angsuran = $this->input->post('id_angsuran');

	    $result = $this->model_data->hapus_data_angsuran($id_angsuran);
	    if($result){
	      redirect('penerimaanangsuran');
	    }else{
	      echo '<script>alert("gagal");</script>';
	      redirect('penerimaanangsuran');
	    }
	}
	public function reset(){
        $data['datas'] = $this->model_data->reset_angsuran();
		$this->load->view('v_penerimaanangsuran', $data);
        redirect('penerimaanangsuran');
	}
	// function tambah_aksi(){
	// 	$id_angsuran = $this->input->post('id_angsuran');
	// 	$id_petugas = $this->input->post('id_petugas');
	// 	$nama = $this->input->post('nama');
	// 	$nik = $this->input->post('nik');
	// 	$tabungan = $this->input->post('tabungan');
	// 	$januari = $this->input->post('januari');
	// 	$februari = $this->input->post('februari');
	// 	$maret = $this->input->post('maret');
	// 	$april = $this->input->post('april');
	// 	$mei = $this->input->post('mei');
	// 	$juni = $this->input->post('juni');
	// 	$juli = $this->input->post('juli');
	// 	$agustus = $this->input->post('agustus');
	// 	$september = $this->input->post('september');
	// 	$oktober = $this->input->post('oktober');
	// 	$november = $this->input->post('november');
	// 	$desember = $this->input->post('desember');
	// 	$total_pembayaran = $this->input->post('total_pembayaran');
 
	// 	$data = array(
	// 		'id_angsuran' => $id_angsuran,
	// 		'id_petugas' => $id_petugas,
	// 		'nama' => $nama,
	// 		'nik' => $nik,
	// 		'tabungan' => $tabungan,
	// 		'januari' => $januari,
	// 		'februari' => $februari,
	// 		'maret' => $maret,
	// 		'april' => $april,
	// 		'mei' => $mei,
	// 		'juni' => $juni,
	// 		'juli' => $juli,
	// 		'agustus' => $agustus,
	// 		'september' => $september,
	// 		'oktober' => $oktober,
	// 		'november' => $november,
	// 		'desember' => $desember,
	// 		'total_pembayaran' => $total_pembayaran
	// 		);
	// 	$this->model_data->input_data_angsuran($data,'penerimaanangsuran_tb');
	// 	redirect('penerimaanangsuran');
	// } 
	function update(){
		$this->form_validation->set_rules('id_petugas', 'ID Petugas', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('tabungan', 'Tabungan', 'trim|required');
        $this->form_validation->set_rules('biaya_angsuran', 'Biaya Angsuran', 'trim|required');
        $this->form_validation->set_rules('januari', 'Januari', 'trim|required');
        $this->form_validation->set_rules('februari', 'Februari', 'trim|required');
        $this->form_validation->set_rules('maret', 'Maret', 'trim|required');
        $this->form_validation->set_rules('april', 'April', 'trim|required');
        $this->form_validation->set_rules('mei', 'Mei', 'trim|required');
        $this->form_validation->set_rules('juni', 'Juni', 'trim|required');
        $this->form_validation->set_rules('juli', 'Juli', 'trim|required');
        $this->form_validation->set_rules('agustus', 'Agustus', 'trim|required');
        $this->form_validation->set_rules('september', 'Agustus', 'trim|required');
        $this->form_validation->set_rules('oktober', 'Oktober', 'trim|required');
        $this->form_validation->set_rules('november', 'November', 'trim|required');
        $this->form_validation->set_rules('desember', 'Desember', 'trim|required');
        $this->form_validation->set_rules('total_pembayaran', 'Total Pembayaran', 'trim|required');
		
		if( $this->form_validation->run() === FALSE ){
            print_r(validation_errors());
        }
        else{
		$id_angsuran = $this->input->post('id_angsuran');
		$id_petugas = $this->input->post('id_petugas');
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$tabungan = $this->input->post('tabungan');
		$biaya_angsuran = $this->input->post('biaya_angsuran');
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
		$total_pembayaran = $this->input->post('total_pembayaran');
		
		$this->model_data->update_data_angsuran($id_angsuran,$id_petugas,$nama,$nik,$tabungan,$biaya_angsuran,$januari,$februari,$maret,$april,$mei,$juni,$juli,$agustus,$september,$oktober,$november,$desember,$total_pembayaran);
            redirect('penerimaanangsuran');
        }
	}

	public function export_excel()
	  {
	   $data=$this->db->get('penerimaanangsuran_tb')->result();
	   // Create new Spreadsheet object
	   $spreadsheet = new Spreadsheet();
	 
	   // Set document properties
	   $spreadsheet->getProperties()->setCreator('Nareswari')
	   ->setLastModifiedBy('Nares')
	   ->setTitle('Data Angsuran')
	   ->setSubject('Data Angsuran Document')
	   ->setDescription('Test document for Office 2019 XLSX, generated using PHP classes.')
	   ->setKeywords('office 2019 openxml php')
	   ->setCategory('Test result file');
	 
	   // Add some data
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A1', 'Nomor')
	   ->setCellValue('B1', 'ID Petugas')
	   ->setCellValue('C1', 'Nama')
	   ->setCellValue('D1', 'NIK')
	   ->setCellValue('E1', 'Tabungan')
	   ->setCellValue('F1', 'Biaya Angsuran')
	   ->setCellValue('G1', 'Januari')
	   ->setCellValue('H1', 'Februari')
	   ->setCellValue('I1', 'Maret')
	   ->setCellValue('J1', 'april')
	   ->setCellValue('K1', 'Mei')
	   ->setCellValue('L1', 'Juni')
	   ->setCellValue('M1', 'Juli')
	   ->setCellValue('N1', 'Agustus')
	   ->setCellValue('O1', 'September')
	   ->setCellValue('P1', 'Oktober')
	   ->setCellValue('Q1', 'November')
	   ->setCellValue('R1', 'Desember')
	   ->setCellValue('S1', 'Total Pembayaran')
	   ;
	 
	   // Miscellaneous glyphs, UTF-8
	   $i=2;
	   $no=1; 
	   
	   foreach($data as $datas) {
	 
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A'.$i, $datas->id_angsuran)
	   ->setCellValue('B'.$i, $datas->id_petugas)
	   ->setCellValue('C'.$i, $datas->nama)
	   ->setCellValue('D'.$i, $datas->nik)
	   ->setCellValue('E'.$i, $datas->tabungan)
	   ->setCellValue('F'.$i, $datas->biaya_angsuran)
	   ->setCellValue('G'.$i, $datas->januari)
	   ->setCellValue('H'.$i, $datas->februari)
	   ->setCellValue('I'.$i, $datas->maret)
	   ->setCellValue('J'.$i, $datas->april)
	   ->setCellValue('K'.$i, $datas->mei)
	   ->setCellValue('L'.$i, $datas->juni)
	   ->setCellValue('M'.$i, $datas->juli)
	   ->setCellValue('N'.$i, $datas->agustus)
	   ->setCellValue('O'.$i, $datas->september)
	   ->setCellValue('P'.$i, $datas->oktober)
	   ->setCellValue('Q'.$i, $datas->november)
	   ->setCellValue('R'.$i, $datas->desember)
	   ->setCellValue('S'.$i, $datas->total_pembayaran);

	 
	   $no++;
	   $i++;
	   }
	 
	   // Rename worksheet
	   $spreadsheet->getActiveSheet()->setTitle('Data Angsuran '.date('d-m-Y H'));
	 
	   // Set active sheet index to the first sheet, so Excel opens this as the first sheet
	   $spreadsheet->setActiveSheetIndex(0);
	 
	   // Redirect output to a client’s web browser (Xlsx)
	   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	   header('Content-Disposition: attachment;filename="Data Angsuran.xlsx"');
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
