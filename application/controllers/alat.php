<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	// Load library phpspreadsheet
	require('./excel/vendor/autoload.php');

	use PhpOffice\PhpSpreadsheet\Helper\Sample;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	// End load library phpspreadsheet

class alat extends CI_Controller {

	function __construct(){
        parent::__construct();      
        $this->load->model('model_data');
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
     }

	public function index()
	{
		$data['datas'] = $this->model_data->tampil_data_alat()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar_penyewaanalat');
		$this->load->view('v_alat',$data);
		$this->load->view('templates/footer_ppob');
	}
	public function hapus(){
		$id_alat = $this->input->post('id_alat');

	    $result = $this->model_data->hapus_data_alat($id_alat);
	    if($result){
	      redirect('alat');
	    }else{
	      echo '<script>alert("gagal");</script>';
	      redirect('alat');
	    }
	}
	public function reset(){
        $data['datas'] = $this->model_data->reset_alat();
		$this->load->view('v_alat', $data);
        redirect('alat');
	}
	function tambah_aksi(){
		$id_alat = $this->input->post('id_alat');
		$jenis_alat = $this->input->post('jenis_alat');
		$biaya_sewa = $this->input->post('biaya_sewa');

 
		$data = array(
			'id_alat' => $id_alat,
			'jenis_alat' => $jenis_alat,
			'biaya_sewa' => $biaya_sewa
			);
		$this->model_data->input_data_alat($data,'alat_tb');
		redirect('alat');
	} 
	function edit($id_alat){
		$where = array('id_alat' => $id_alat);
		$data['alat_tb']= $this->model_data->edit_data_alat($where,'alat_tb')->result();
		//print_r($id	);
		$this->load->view('v_alat', $data);
	}
	function update(){
		$id_alat = $this->input->post('id_alat');
		$jenis_alat = $this->input->post('jenis_alat');
		$biaya_sewa = $this->input->post('biaya_sewa');
		
		$updated_data = array(
			'id_alat' => $id_alat,
			'jenis_alat' => $jenis_alat,
			'biaya_sewa' => $biaya_sewa
			);
		$this->model_data->update_data_alat($updated_data, $this->input->post('id_alat'));
		redirect('alat');
	}
	public function export_excel()
	  {
	   $data=$this->db->get('alat_tb')->result();
	   // Create new Spreadsheet object
	   $spreadsheet = new Spreadsheet();
	 
	   // Set document properties
	   $spreadsheet->getProperties()->setCreator('Nareswari')
	   ->setLastModifiedBy('Nares')
	   ->setTitle('Data alat')
	   ->setSubject('Data Alat Document')
	   ->setDescription('Test document for Office 2019 XLSX, generated using PHP classes.')
	   ->setKeywords('office 2019 openxml php')
	   ->setCategory('Test result file');
	 
	   // Add some data
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A1', 'Nomor')
	   ->setCellValue('B1', 'Jenis Alat')
	   ->setCellValue('C1', 'Biaya Sewa')
	   ;
	 
	   // Miscellaneous glyphs, UTF-8
	   $i=2;
	   $no=1; 
	   
	   foreach($data as $datas) {
	 
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A'.$i, $datas->id_alat)
	   ->setCellValue('B'.$i, $datas->jenis_alat)
	   ->setCellValue('C'.$i, $datas->biaya_sewa);

	 
	   $no++;
	   $i++;
	   }
	 
	   // Rename worksheet
	   $spreadsheet->getActiveSheet()->setTitle('Data Alat '.date('d-m-Y H'));
	 
	   // Set active sheet index to the first sheet, so Excel opens this as the first sheet
	   $spreadsheet->setActiveSheetIndex(0);
	 
	   // Redirect output to a client’s web browser (Xlsx)
	   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	   header('Content-Disposition: attachment;filename="Data_Alat.xlsx"');
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
