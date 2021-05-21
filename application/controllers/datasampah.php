<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	// Load library phpspreadsheet
	require('./excel/vendor/autoload.php');

	use PhpOffice\PhpSpreadsheet\Helper\Sample;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	// End load library phpspreadsheet

class datasampah extends CI_Controller {

	function __construct(){
        parent::__construct();      
        $this->load->model('model_data');
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
     }

	public function index()
	{
		$data['datas'] = $this->model_data->tampil_data_sampah()->result();
		$data['alamats'] = $this->model_data->tampil_data_alamat()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar_datasampah');
		$this->load->view('v_datasampah',$data);
		$this->load->view('templates/footer');
	}
	public function hapus(){
		$id_sampah = $this->input->post('id_sampah');

	    $result = $this->model_data->hapus_data_sampah($id_sampah);
	    if($result){
	      redirect('datasampah');
	    }else{
	      echo '<script>alert("gagal");</script>';
	      redirect('datasampah');
	    }
	}
	public function reset_sampah(){
        $data['datas'] = $this->model_data->reset_sampah();
		$this->load->view('v_datasampah', $data);
        redirect('datasampah');
	}
	function tambah_aksi(){
		$id_sampah = $this->input->post('id_sampah');
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$alamat = $this->input->post('alamat');
		$januari_bayar = $this->input->post('januari_bayar');
		$januari_sisa = $this->input->post('januari_sisa');
		$februari_bayar = $this->input->post('februari_bayar');
		$februari_sisa = $this->input->post('februari_sisa');
		$maret_bayar = $this->input->post('maret_bayar');
		$maret_sisa = $this->input->post('maret_sisa');
		$april_bayar = $this->input->post('april_bayar');
		$april_sisa = $this->input->post('april_sisa');
		$mei_bayar = $this->input->post('mei_bayar');
		$mei_sisa = $this->input->post('mei_sisa');
		$juni_bayar = $this->input->post('juni_bayar');
		$juni_sisa = $this->input->post('juni_sisa');
		$juli_bayar = $this->input->post('juli_bayar');
		$juli_sisa = $this->input->post('juli_sisa');
		$agustus_bayar = $this->input->post('agustus_bayar');
		$agustus_sisa = $this->input->post('agustus_sisa');
		$september_bayar = $this->input->post('september_bayar');
		$september_sisa = $this->input->post('september_sisa');
		$oktober_bayar = $this->input->post('oktober_bayar');
		$oktober_sisa = $this->input->post('oktober_sisa');
		$november_bayar = $this->input->post('november_bayar');
		$november_sisa = $this->input->post('november_sisa');
		$desember_bayar = $this->input->post('desember_bayar');
		$desember_sisa = $this->input->post('desember_sisa');
		$total_tagihan = $this->input->post('total_tagihan');
 
		$data = array(
			'id_sampah' => $id_sampah,
			'nama' => $nama,
			'nik' => $nik,
			'alamat' => $alamat,
			'januari_bayar' => $januari_bayar,
			'januari_sisa' => $januari_sisa,
			'februari_bayar' => $februari_bayar,
			'februari_sisa' => $februari_sisa,
			'maret_bayar' => $maret_bayar,
			'maret_sisa' => $maret_sisa,
			'april_bayar' => $april_bayar,
			'april_sisa' => $april_sisa,
			'mei_bayar' => $mei_bayar,
			'mei_sisa' => $mei_sisa,
			'juni_bayar' => $juni_bayar,
			'juni_sisa' => $juni_sisa,
			'juli_bayar' => $juli_bayar,
			'juli_sisa' => $juli_sisa,
			'agustus_bayar' => $agustus_bayar,
			'agustus_sisa' => $agustus_sisa,
			'september_bayar' => $september_bayar,
			'september_sisa' => $september_sisa,
			'oktober_bayar' => $oktober_bayar,
			'oktober_sisa' => $oktober_sisa,
			'november_bayar' => $november_bayar,
			'november_sisa' => $november_sisa,
			'desember_bayar' => $desember_bayar,
			'desember_sisa' => $desember_sisa,
			'total_tagihan' => $total_tagihan
			);
		$this->model_data->input_data_sampah($data,'datasampah_tb');
		redirect('datasampah');
	} 
	function edit($id_sampah){
		$where = array('id_sampah' => $id_sampah);
		$data['datasampah_tb']= $this->model_data->edit_data_sampah($where,'datasampah_tb')->result();
		//print_r($id	);
		$this->load->view('v_datasampah', $data);
	}
	function update(){
		$id_sampah = $this->input->post('id_sampah');
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$alamat = $this->input->post('alamat');
		$januari_bayar = $this->input->post('januari_bayar');
		$januari_sisa = $this->input->post('januari_sisa');
		$februari_bayar = $this->input->post('februari_bayar');
		$februari_sisa = $this->input->post('februari_sisa');
		$maret_bayar = $this->input->post('maret_bayar');
		$maret_sisa = $this->input->post('maret_sisa');
		$april_bayar = $this->input->post('april_bayar');
		$april_sisa = $this->input->post('april_sisa');
		$mei_bayar = $this->input->post('mei_bayar');
		$mei_sisa = $this->input->post('mei_sisa');
		$juni_bayar = $this->input->post('juni_bayar');
		$juni_sisa = $this->input->post('juni_sisa');
		$juli_bayar = $this->input->post('juli_bayar');
		$juli_sisa = $this->input->post('juli_sisa');
		$agustus_bayar = $this->input->post('agustus_bayar');
		$agustus_sisa = $this->input->post('agustus_sisa');
		$september_bayar = $this->input->post('september_bayar');
		$september_sisa = $this->input->post('september_sisa');
		$oktober_bayar = $this->input->post('oktober_bayar');
		$oktober_sisa = $this->input->post('oktober_sisa');
		$november_bayar = $this->input->post('november_bayar');
		$november_sisa = $this->input->post('november_sisa');
		$desember_bayar = $this->input->post('desember_bayar');
		$desember_sisa = $this->input->post('desember_sisa');
		$total_tagihan = $this->input->post('total_tagihan');
		
		$updated_data = array(
			'id_sampah' => $id_sampah,
			'nama' => $nama,
			'nik' => $nik,
			'alamat' => $alamat,
			'januari_bayar' => $januari_bayar,
			'januari_sisa' => $januari_akhir=$januari_sisa-$januari_bayar,
			'februari_bayar' => $februari_bayar,
			'februari_sisa' => $februari_akhir=$februari_sisa-$februari_bayar,
			'maret_bayar' => $maret_bayar,
			'maret_sisa' => $maret_akhir=$maret_sisa-$maret_bayar,
			'april_bayar' => $april_bayar,
			'april_sisa' => $april_akhir=$april_sisa-$april_bayar,
			'mei_bayar' => $mei_bayar,
			'mei_sisa' => $mei_akhir=$mei_sisa-$mei_bayar,
			'juni_bayar' => $juni_bayar,
			'juni_sisa' => $juni_akhir=$juni_sisa-$juni_bayar,
			'juli_bayar' => $juli_bayar,
			'juli_sisa' => $juli_akhir=$juli_sisa-$juli_bayar,
			'agustus_bayar' => $agustus_bayar,
			'agustus_sisa' => $agustus_akhir=$agustus_sisa-$agustus_bayar,
			'september_bayar' => $september_bayar,
			'september_sisa' => $september_akhir=$september_sisa-$september_bayar,
			'oktober_bayar' => $oktober_bayar,
			'oktober_sisa' => $oktober_akhir=$oktober_sisa-$oktober_bayar,
			'november_bayar' => $november_bayar,
			'november_sisa' => $november_akhir=$november_sisa-$november_bayar,
			'desember_bayar' => $desember_bayar,
			'desember_sisa' => $desember_akhir=$desember_sisa-$desember_bayar,
			'total_tagihan' => $januari_akhir+$februari_akhir+$maret_akhir+$april_akhir+$mei_akhir+$juni_akhir+$juli_akhir+$agustus_akhir+$september_akhir+$oktober_akhir+$november_akhir+$desember_akhir
			);
		$this->model_data->update_data_sampah($updated_data, $this->input->post('id_sampah'));
		redirect('datasampah');
	}

	public function export_excel()
	  {
	   $data=$this->db->get('datasampah_tb')->result();
	   // Create new Spreadsheet object
	   $spreadsheet = new Spreadsheet();
	 
	   // Set document properties
	   $spreadsheet->getProperties()->setCreator('Nareswari')
	   ->setLastModifiedBy('Nares')
	   ->setTitle('Data Sampah')
	   ->setSubject('Data Sampah Document')
	   ->setDescription('Test document for Office 2019 XLSX, generated using PHP classes.')
	   ->setKeywords('office 2019 openxml php')
	   ->setCategory('Test result file');
	 
	   // Add some data
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A1', 'Nomor')
	   ->setCellValue('B1', 'Nama')
	   ->setCellValue('C1', 'NIK')
	   ->setCellValue('D1', 'Alamat')
	   ->setCellValue('E1', 'Januari Bayar')
	   ->setCellValue('F1', 'Januari Sisa')
	   ->setCellValue('G1', 'Februari Bayar')
	   ->setCellValue('H1', 'Februari Sisa')
	   ->setCellValue('I1', 'Maret Bayar')
	   ->setCellValue('J1', 'Maret Sisa')
	   ->setCellValue('K1', 'april Bayar')
	   ->setCellValue('L1', 'april Sisa')
	   ->setCellValue('M1', 'Mei Bayar')
	   ->setCellValue('N1', 'Mei Sisa')
	   ->setCellValue('O1', 'Juni Bayar')
	   ->setCellValue('P1', 'Juni Sisa')
	   ->setCellValue('Q1', 'Juli Bayar')
	   ->setCellValue('R1', 'Juli Sisa')
	   ->setCellValue('S1', 'Agustus Bayar')
	   ->setCellValue('T1', 'Agustus Sisa')
	   ->setCellValue('U1', 'September Bayar')
	   ->setCellValue('V1', 'September Sisa')
	   ->setCellValue('W1', 'Oktober Bayar')
	   ->setCellValue('X1', 'Oktober Sisa')
	   ->setCellValue('Y1', 'November Bayar')
	   ->setCellValue('Z1', 'November Sisa')
	   ->setCellValue('AA1', 'Desember Bayar')
	   ->setCellValue('AB1', 'Desember Sisa')
	   ->setCellValue('AC1', 'Total Tagihan')
	   ;
	 
	   // Miscellaneous glyphs, UTF-8
	   $i=2;
	   $no=1; 
	   
	   foreach($data as $datas) {
	 
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A'.$i, $datas->id_sampah)
	   ->setCellValue('B'.$i, $datas->nama)
	   ->setCellValue('C'.$i, $datas->nik)
	   ->setCellValue('D'.$i, $datas->alamat)
	   ->setCellValue('E'.$i, $datas->januari_bayar)
	   ->setCellValue('F'.$i, $datas->januari_sisa)
	   ->setCellValue('G'.$i, $datas->februari_bayar)
	   ->setCellValue('H'.$i, $datas->februari_sisa)
	   ->setCellValue('I'.$i, $datas->maret_bayar)
	   ->setCellValue('J'.$i, $datas->maret_sisa)
	   ->setCellValue('K'.$i, $datas->april_bayar)
	   ->setCellValue('L'.$i, $datas->april_sisa)
	   ->setCellValue('M'.$i, $datas->mei_bayar)
	   ->setCellValue('N'.$i, $datas->mei_sisa)
	   ->setCellValue('O'.$i, $datas->juni_bayar)
	   ->setCellValue('P'.$i, $datas->juni_sisa)
	   ->setCellValue('Q'.$i, $datas->juli_bayar)
	   ->setCellValue('R'.$i, $datas->juli_sisa)
	   ->setCellValue('S'.$i, $datas->agustus_bayar)
	   ->setCellValue('T'.$i, $datas->agustus_sisa)
	   ->setCellValue('U'.$i, $datas->september_bayar)
	   ->setCellValue('V'.$i, $datas->september_sisa)
	   ->setCellValue('W'.$i, $datas->oktober_bayar)
	   ->setCellValue('X'.$i, $datas->oktober_sisa)
	   ->setCellValue('Y'.$i, $datas->november_bayar)
	   ->setCellValue('Z'.$i, $datas->november_sisa)
	   ->setCellValue('AA'.$i, $datas->desember_bayar)
	   ->setCellValue('AB'.$i, $datas->desember_sisa)
	   ->setCellValue('AC'.$i, $datas->total_tagihan);

	 
	   $no++;
	   $i++;
	   }
	 
	   // Rename worksheet
	   $spreadsheet->getActiveSheet()->setTitle('Data Sampah '.date('d-m-Y H'));
	 
	   // Set active sheet index to the first sheet, so Excel opens this as the first sheet
	   $spreadsheet->setActiveSheetIndex(0);
	 
	   // Redirect output to a client’s web browser (Xlsx)
	   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	   header('Content-Disposition: attachment;filename="Data_Sampah.xlsx"');
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
