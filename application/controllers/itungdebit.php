<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	// Load library phpspreadsheet
	require('./excel/vendor/autoload.php');

	use PhpOffice\PhpSpreadsheet\Helper\Sample;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	// End load library phpspreadsheet

class itungdebit extends CI_Controller {

	function __construct(){
        parent::__construct();      
        $this->load->model('model_data');
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
     }

	public function index()
	{
		$data['datas'] = $this->model_data->tampil_data_itungdebit()->result();
		// $data['id_petugass'] = $this->model_data->tampil_data_petugas()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar_simpanpinjam');
		$this->load->view('v_itungdebit',$data);
		$this->load->view('templates/footer');
	}
	public function hapus(){
		$id_total = $this->input->post('id_total');

	    $result = $this->model_data->hapus_data_itungdebit($id_total);
	    if($result){
	      redirect('itungdebit');
	    }else{
	      echo '<script>alert("gagal");</script>';
	      redirect('itungdebit');
	    }
	}
	public function reset(){
        $data['datas'] = $this->model_data->reset_itungdebit();
		$this->load->view('v_itungdebit', $data);
        redirect('itungdebit');
	}
	function update(){
		$id_total = $this->input->post('id_total');
		$tgl_pencairan = $this->input->post('tgl_pencairan');
		$no_kontrak_peminjaman = $this->input->post('no_kontrak_peminjaman');
		$jaminan = $this->input->post('jaminan');
		$nik = $this->input->post('nik');
		$no_kk = $this->input->post('no_kk');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tenor_peminjaman = $this->input->post('tenor_peminjaman');
		$biaya_angsuran = $this->input->post('biaya_angsuran');
		$pokok_pinjaman = $this->input->post('pokok_pinjaman');
		$jasa_pinjaman = $this->input->post('jasa_pinjaman');
		$total_pembayaranpokok = $this->input->post('total_pembayaranpokok');
		$total_pembayaranpjasa = $this->input->post('total_pembayaranjasa');
		$sisa_pokok = $this->input->post('sisa_pokok');
		$sisa_jasa= $this->input->post('sisa_jasa');
		$piutang_angsuran= $this->input->post('piutang_angsuran');
 
		$updated_data = array(
			'id_total' => $id_total,
			'tgl_pencairan' => $tgl_pencairan,
			'no_kontrak_peminjaman' => $no_kontrak_peminjaman,
			'jaminan' => $jaminan,
			'nik' => $nik,
			'no_kk' => $no_kk,
			'nama' => $nama,
			'alamat' => $alamat,
			'tenor_peminjaman' => $tenor_peminjaman,
			'biaya_angsuran' => $biaya_angsuran,
			'pokok_pinjaman' => $pokok_pinjaman,
			'jasa_pinjaman' => $pokok_pinjaman*'18',
			'total_pembayaranpokok' => $pokok_pinjaman-$piutang_angsuran,
			'total_pembayaranjasa' => $total_pembayaranjasa,
			'sisa_pokok' => $sisa_pokok,
			'sisa_jasa' => $sisa_jasa,
			'piutang_angsuran' => ($piutang_angsuran*$biaya_angsuran)
			);
		$this->model_data->update_data_itungdebit($updated_data, $this->input->post('id_total'));
		redirect('itungdebit');
	} 

	public function export_excel()
	  {
	   $data=$this->db->get('itungdebit_tb')->result();
	   // Create new Spreadsheet object
	   $spreadsheet = new Spreadsheet();
	 
	   // Set document properties
	   $spreadsheet->getProperties()->setCreator('Nareswari')
	   ->setLastModifiedBy('Nares')
	   ->setTitle('Data Debitur')
	   ->setSubject('Data Debitur Document')
	   ->setDescription('Test document for Office 2019 XLSX, generated using PHP classes.')
	   ->setKeywords('office 2019 openxml php')
	   ->setCategory('Test result file');
	 
	   // Add some data
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A1', 'Nomor')
	   ->setCellValue('B1', 'Tanggal Pencairan')
	   ->setCellValue('C1', 'No Kontrak Peminjaman')
	   ->setCellValue('D1', 'Jaminan')
	   ->setCellValue('E1', 'NIK')
	   ->setCellValue('F1', 'No KK')
	   ->setCellValue('G1', 'Nama')
	   ->setCellValue('H1', 'Alamat')
	   ->setCellValue('J1', 'Tenor Peminjaman')
	   ->setCellValue('K1', 'Biaya Angsuran')
	   ->setCellValue('L1', 'Pokok Pinjaman')
	   ->setCellValue('M1', 'Jasa Pinjaman')
	   ->setCellValue('N1', 'Total Pembayaran Pokok')
	   ->setCellValue('O1', 'Total Pembayaran Jasa')
	   ->setCellValue('P1', 'Sisa Pokok')
	   ->setCellValue('Q1', 'Sisa Jasa')
	   ->setCellValue('R1', 'Piutang Angsuran')
	   ;
	 
	   // Miscellaneous glyphs, UTF-8
	   $i=2;
	   $no=1; 
	   
	   foreach($data as $datas) {
	 
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A'.$i, $datas->id_total)
	   ->setCellValue('B'.$i, $datas->tgl_pencairan)
	   ->setCellValue('C'.$i, $datas->no_kontrak_peminjaman)
	   ->setCellValue('D'.$i, $datas->jaminan)
	   ->setCellValue('E'.$i, $datas->nik)
	   ->setCellValue('F'.$i, $datas->no_kk)
	   ->setCellValue('G'.$i, $datas->nama)
	   ->setCellValue('H'.$i, $datas->alamat)
	   ->setCellValue('J'.$i, $datas->tenor_peminjaman)
	   ->setCellValue('K'.$i, $datas->biaya_angsuran)
	   ->setCellValue('L'.$i, $datas->pokok_pinjaman)
	   ->setCellValue('M'.$i, $datas->jasa_pinjaman)
	   ->setCellValue('N'.$i, $datas->total_pembayaranpokok)
	   ->setCellValue('O'.$i, $datas->total_pembayaranjasa)
	   ->setCellValue('P'.$i, $datas->sisa_pokok)
	   ->setCellValue('Q'.$i, $datas->sisa_jasa)
	   ->setCellValue('R'.$i, $datas->piutang_angsuran);

	 
	   $no++;
	   $i++;
	   }
	 
	   // Rename worksheet
	   $spreadsheet->getActiveSheet()->setTitle('Data Debitur '.date('d-m-Y H'));
	 
	   // Set active sheet index to the first sheet, so Excel opens this as the first sheet
	   $spreadsheet->setActiveSheetIndex(0);
	 
	   // Redirect output to a client’s web browser (Xlsx)
	   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	   header('Content-Disposition: attachment;filename="Data Debitur.xlsx"');
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
