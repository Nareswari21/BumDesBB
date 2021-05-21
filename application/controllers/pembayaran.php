<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	// Load library phpspreadsheet
	require('./excel/vendor/autoload.php');

	use PhpOffice\PhpSpreadsheet\Helper\Sample;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	// End load library phpspreadsheet

class pembayaran extends CI_Controller {

	function __construct(){
        parent::__construct();      
        $this->load->model('model_data');
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('session','form_validation');
     }

	public function index()
	{
		$data['datas'] = $this->model_data->tampil_data_pembayaran()->result();
		$data['alats'] = $this->model_data->tampil_data_alat()->result();
		$data['penyewas'] = $this->model_data->tampil_data_penyewa()->result();
		$data['alamats'] = $this->model_data->tampil_data_alamat()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar_penyewaanalat');
		$this->load->view('v_pembayaran',$data);
		$this->load->view('templates/footer');
	}
	public function hapus(){
		$id_penyewa = $this->input->post('id_penyewa');
		$id_pembayaran = $this->input->post('id_pembayaran');

	    $result = $this->model_data->hapus_data_pembayaran($id_penyewa,$id_pembayaran);
	    if($result){
	      redirect('pembayaran');
	    }else{
	      echo '<script>alert("gagal");</script>';
	      redirect('pembayaran');
	    }
	}
	public function reset(){
        $data['datas'] = $this->model_data->reset_pembayaran();
		$this->load->view('v_pembayaran', $data);
        redirect('pembayaran');
	}
	function tambah_aksi(){
		// $this->form_validation->set_rules('id_alat', 'ID Alat', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('tgl_sewa', 'tgl_sewa', 'trim|required');
        $this->form_validation->set_rules('biaya_sewa', 'biaya_sewa', 'trim|required');
        $this->form_validation->set_rules('lama_sewa', 'lama_sewa', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');


        if( $this->form_validation->run() === FALSE ){
            print_r(validation_errors());
        }
        else{
            $id_penyewa   = $this->input->post('id_penyewa', TRUE);
            $nama = $this->input->post('nama', TRUE);
            $nik= $this->input->post('nik', TRUE);
            $alamat= $this->input->post('alamat', TRUE);
            $tgl_sewa= $this->input->post('tgl_sewa', TRUE);
            $biaya_sewa= $this->input->post('biaya_sewa', TRUE);
            $lama_sewa= $this->input->post('lama_sewa', TRUE);
            $total_pembayaran = $this->input->post('total_pembayaran', TRUE);
            $keterangan= $this->input->post('keterangan', TRUE);


            $this->model_data->input_data_pembayaran($id_penyewa, $nama, $nik, $alamat, $tgl_sewa, $biaya_sewa, $lama_sewa, $total_pembayaran, $keterangan);
            redirect('pembayaran');
        }
	}
	function update(){
		// $this->form_validation->set_rules('id_alat', 'ID Alat', 'trim|required');
        $this->form_validation->set_rules('tgl_sewa', 'tgl_sewa', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('biaya_sewa', 'biaya_sewa', 'trim|required');
        $this->form_validation->set_rules('lama_sewa', 'lama_sewa', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');


        if( $this->form_validation->run() === FALSE ){
            print_r(validation_errors());
        }
        else{
            $id_penyewa = $this->input->post('id_penyewa', TRUE);
            $tgl_sewa= $this->input->post('tgl_sewa', TRUE);
            $nama = $this->input->post('nama', TRUE);
            $nik= $this->input->post('nik', TRUE);
            $alamat= $this->input->post('alamat', TRUE);
            $biaya_sewa= $this->input->post('biaya_sewa', TRUE);
            $lama_sewa= $this->input->post('lama_sewa', TRUE);
            $total_pembayaran = $this->input->post('total_pembayaran', TRUE);
            $keterangan= $this->input->post('keterangan', TRUE);


            $this->model_data->update_data_pembayaran($id_penyewa, $tgl_sewa, $nama, $nik, $alamat, $biaya_sewa, $lama_sewa, $total_pembayaran, $keterangan);
            redirect('pembayaran');
        }
	}
	public function export_excel()
	  {
	   $data=$this->db->get('penyewa_tb')->result();
	   // Create new Spreadsheet object
	   $spreadsheet = new Spreadsheet();
	 
	   // Set document properties
	   $spreadsheet->getProperties()->setCreator('Nareswari')
	   ->setLastModifiedBy('Nares')
	   ->setTitle('Data Penyewa')
	   ->setSubject('Data Penyewa Document')
	   ->setDescription('Test document for Office 2019 XLSX, generated using PHP classes.')
	   ->setKeywords('office 2019 openxml php')
	   ->setCategory('Test result file');
	 
	   // Add some data
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A1', 'Nomor')
	   ->setCellValue('B1', 'ID Alat')
	   ->setCellValue('C1', 'Nama')
	   ->setCellValue('D1', 'NIK')
	   ->setCellValue('E1', 'Alamat')
	   ->setCellValue('F1', 'Tanggal Sewa')
	   ->setCellValue('G1', 'Lama Sewa')
	   ->setCellValue('H1', 'Total Pembayaran')
	   ;
	 
	   // Miscellaneous glyphs, UTF-8
	   $i=2;
	   $no=1; 
	   
	   foreach($data as $datas) {
	 
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A'.$i, $datas->id_penyewa)
	   ->setCellValue('B'.$i, $datas->id_alat)
	   ->setCellValue('C'.$i, $datas->nama)
	   ->setCellValue('D'.$i, $datas->nik)
	   ->setCellValue('E'.$i, $datas->alamat)
	   ->setCellValue('F'.$i, $datas->tgl_sewa)
	   ->setCellValue('G'.$i, $datas->lama_sewa)
	   ->setCellValue('H'.$i, $datas->total_pembayaran);

	 
	   $no++;
	   $i++;
	   }
	 
	   // Rename worksheet
	   $spreadsheet->getActiveSheet()->setTitle('Data Penyewa '.date('d-m-Y H'));
	 
	   // Set active sheet index to the first sheet, so Excel opens this as the first sheet
	   $spreadsheet->setActiveSheetIndex(0);
	 
	   // Redirect output to a client’s web browser (Xlsx)
	   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	   header('Content-Disposition: attachment;filename="Data_Penyewa.xlsx"');
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
