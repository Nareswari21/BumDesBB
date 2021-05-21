<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	// Load library phpspreadsheet
	require('./excel/vendor/autoload.php');

	use PhpOffice\PhpSpreadsheet\Helper\Sample;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	// End load library phpspreadsheet

class danacair extends CI_Controller {

	function __construct(){
        parent::__construct();      
        $this->load->model('model_data');
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
     }

	public function index()
	{
		$data['datas'] = $this->model_data->tampil_data_danacair()->result();
		$data['alamats'] = $this->model_data->tampil_data_alamat()->result();
		$data['id_petugass'] = $this->model_data->tampil_data_petugas()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar_simpanpinjam');
		$this->load->view('v_danacair',$data);
		$this->load->view('templates/footer');
	}
	public function hapus(){
		$id_pencairan = $this->input->post('id_pencairan');

	    $result = $this->model_data->hapus_data_danacair($id_pencairan);
	    if($result){
	      redirect('danacair');
	    }else{
	      echo '<script>alert("gagal");</script>';
	      redirect('danacair');
	    }
	}
	public function reset(){
        $data['datas'] = $this->model_data->reset_danacair();
		$this->load->view('v_danacair', $data);
        redirect('danacair');
	}
	function tambah_aksi(){
		$this->form_validation->set_rules('tgl_pencairan', 'Tanggal Pencairan', 'trim|required');
        $this->form_validation->set_rules('no_kontrak_peminjaman', 'No Kontrak Peminjaman', 'trim|required');
        $this->form_validation->set_rules('id_nasabah', 'ID Nasabah', 'trim|required');
        $this->form_validation->set_rules('no_kk', 'No KK', 'trim|required');
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('jumlah_cair', 'Jumlah Cair', 'trim|required');
        $this->form_validation->set_rules('tenor_peminjaman', 'Tenor Peminjaman', 'trim|required');
        $this->form_validation->set_rules('pendapatan_administrasi', 'Pendapatan Administrasi', 'trim|required');
        $this->form_validation->set_rules('id_petugas', 'ID Petugas', 'trim|required');

        if( $this->form_validation->run() === FALSE ){
            print_r(validation_errors());
        }
        else{
        	// $id_pencairan = $this->input->post('id_pencairan', TRUE);
			$tgl_pencairan = $this->input->post('tgl_pencairan', TRUE);
			$no_kontrak_peminjaman = $this->input->post('no_kontrak_peminjaman', TRUE);
			$id_nasabah = $this->input->post('id_nasabah', TRUE);
			$no_kk = $this->input->post('no_kk', TRUE);
			$nik = $this->input->post('nik', TRUE);
			$nama = $this->input->post('nama', TRUE);
			$alamat = $this->input->post('alamat', TRUE);
			$jumlah_cair = $this->input->post('jumlah_cair', TRUE);
			$tenor_peminjaman = $this->input->post('tenor_peminjaman', TRUE);
			$pendapatan_administrasi = $this->input->post('pendapatan_administrasi', TRUE);
			$id_petugas = $this->input->post('id_petugas', TRUE);

            $this->model_data->input_data_danacair($tgl_pencairan,$no_kontrak_peminjaman,$id_nasabah,$no_kk,$nik,$nama,$alamat,$jumlah_cair,$tenor_peminjaman,$pendapatan_administrasi,$id_petugas);
            redirect('danacair');
        }
	} 
	function edit($id_pencairan){
		$where = array('id_pencairan' => $id_pencairan);
		$data['danacair_tb']= $this->model_data->edit_data_danacair($where,'danacair_tb')->result();
		//print_r($id	);
		$this->load->view('v_danacair', $data);
	}
	function update(){
		$id_pencairan = $this->input->post('id_pencairan');
		$tgl_pencairan = $this->input->post('tgl_pencairan');
		$no_kontrak_peminjaman = $this->input->post('no_kontrak_peminjaman');
		$id_nasabah = $this->input->post('id_nasabah');
		$no_kk = $this->input->post('no_kk');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jumlah_cair = $this->input->post('jumlah_cair');
		$tenor_peminjaman = $this->input->post('tenor_peminjaman');
		$pendapatan_administrasi = $this->input->post('pendapatan_administrasi');
		$id_petugas = $this->input->post('id_petugas');
		
		$updated_data = array(
			'id_pencairan' => $id_pencairan,
			'tgl_pencairan' => $tgl_pencairan,
			'no_kontrak_peminjaman' => $no_kontrak_peminjaman,
			'id_nasabah' => $id_nasabah,
			'no_kk' => $no_kk,
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat,
			'jumlah_cair' => $jumlah_cair,
			'tenor_peminjaman' => $tenor_peminjaman,
			'pendapatan_administrasi' => $pendapatan_administrasi,
			'id_petugas' => $id_petugas
			);
		$this->model_data->update_data_danacair($updated_data, $this->input->post('id_pencairan'));
		redirect('danacair');
	}

	public function export_excel()
	  {
	   $data=$this->db->get('datacair_tb')->result();
	   // Create new Spreadsheet object
	   $spreadsheet = new Spreadsheet();
	 
	   // Set document properties
	   $spreadsheet->getProperties()->setCreator('Nareswari')
	   ->setLastModifiedBy('Nares')
	   ->setTitle('Pencairan Dana')
	   ->setSubject('Pencairan Dana Document')
	   ->setDescription('Test document for Office 2019 XLSX, generated using PHP classes.')
	   ->setKeywords('office 2019 openxml php')
	   ->setCategory('Test result file');
	 
	   // Add some data
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A1', 'Nomor')
	   ->setCellValue('B1', 'Tanggal Pencairan')
	   ->setCellValue('C1', 'No Kontrak Peminjaman')
	   ->setCellValue('D1', 'ID Nasabah')
	   ->setCellValue('E1', 'No KK')
	   ->setCellValue('F1', 'NIK')
	   ->setCellValue('G1', 'Nama')
	   ->setCellValue('H1', 'Alamat')
	   ->setCellValue('I1', 'Jumlah Dana Cair')
	   ->setCellValue('J1', 'Tenor Peminjaman')
	   ->setCellValue('K1', 'Pendapatan Administrasi')
	   ->setCellValue('L1', 'ID Petugas')
	   ;
	 
	   // Miscellaneous glyphs, UTF-8
	   $i=2;
	   $no=1; 
	   
	   foreach($data as $datas) {
	 
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A'.$i, $datas->id_pencairan)
	   ->setCellValue('B'.$i, $datas->tgl_pencairan)
	   ->setCellValue('C'.$i, $datas->no_kontrak_peminjaman)
	   ->setCellValue('D'.$i, $datas->id_nasabah)
	   ->setCellValue('E'.$i, $datas->no_kk)
	   ->setCellValue('F'.$i, $datas->nik)
	   ->setCellValue('G'.$i, $datas->nama)
	   ->setCellValue('H'.$i, $datas->alamat)
	   ->setCellValue('I'.$i, $datas->jumlah_cair)
	   ->setCellValue('J'.$i, $datas->tenor_peminjaman)
	   ->setCellValue('K'.$i, $datas->pendapatan_administrasi)
	   ->setCellValue('L'.$i, $datas->id_petugas);

	 
	   $no++;
	   $i++;
	   }
	 
	   // Rename worksheet
	   $spreadsheet->getActiveSheet()->setTitle('Pencairan Dana '.date('d-m-Y H'));
	 
	   // Set active sheet index to the first sheet, so Excel opens this as the first sheet
	   $spreadsheet->setActiveSheetIndex(0);
	 
	   // Redirect output to a client’s web browser (Xlsx)
	   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	   header('Content-Disposition: attachment;filename="Pencairan_Dana.xlsx"');
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
