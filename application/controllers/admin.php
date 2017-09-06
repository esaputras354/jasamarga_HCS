<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
	}

	public function index()
	{
		if($this->session->userdata('status')!='login'){
			redirect(base_url('index.php/login'));
		} else {
			$data['result'] = $this->mdata->get_data();
			//$data['hasil'] = ....;
			//print_r($data['result']);
			$this->load->view('tables',$data);
			//$this->load->view('login');
		}
	}

	// public function balabala($npp,$tanggal){		
	// 	$data['data'] = $this->mdata->select_data($npp, $tanggal);		
	// 	$this->load->view('balabala',$data);
	// }

	public function jabatan($npp, $tanggal){	
		$data['data'] = $this->mdata->select_data($npp, $tanggal);	
		$data['jabatan'] = $this->mdata->get_jabatan();		
		$this->load->view('balabala',$data);
	}

	// public function upload(){
	// 	// $data['view_isi'] = "tables";
	// 	print_r('upload');
	// 	//$this->load->view('tables');
	// }

	public function upload_db(){
			if ($_FILES['file']['name']) {			
			$fileName = time().$_FILES['file']['name'];

			$config['upload_path'] = FCPATH .'assets';
			$config['file_name'] = $fileName;
			$config['allowed_types'] = 'xls|xlsx';
			$config['max_size'] = 10000;

			$this->load->library('upload');
			$this->upload->initialize($config);

			if(! $this->upload->do_upload('file') )
			$this->upload->display_errors();

			$media = $this->upload->data('file');
			$inputFileName = $this->upload->data('full_path');

			try {
				$inputFileType = IOFactory::identify($inputFileName);
				$objReader = IOFactory::createReader($inputFileType);
				$objPHPExcel = $objReader->load($inputFileName);
			} catch(Exception $e) {
				die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
			}

			$sheet = $objPHPExcel->getSheet(0);
			$highestRow = $sheet->getHighestRow();
			$highestColumn = $sheet->getHighestColumn();
			$banyakUpload = 0;
			for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array
				$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

				//Sesuaikan sama nama kolom tabel di database
				$data = array(
					"npp"=> $rowData[0][1],
					"nama"=> $rowData[0][2],
					"proyeksi" => $rowData[0][4] ,
					"tanggal" =>  \PHPExcel_Style_NumberFormat::toFormattedString($rowData[0][3], 'YYYY-MM-DD'),
					
					"ach" =>  $rowData[0][5],
					"ing" =>  $rowData[0][6],
					"cso" =>  $rowData[0][7],
					"cln" =>  $rowData[0][8],
					"bp" =>  $rowData[0][9],
					"bac" =>  $rowData[0][10],
					"deci" =>  $rowData[0][11],
					"tl" =>  $rowData[0][12],
					"at" =>  $rowData[0][13],
					"co" =>  $rowData[0][14],
					"imp" =>  $rowData[0][15],
					"init" =>  $rowData[0][16],
					"ct" =>  $rowData[0][17],
					"inf" =>  $rowData[0][18],
					"oc" =>  $rowData[0][19],
					"oa" =>  $rowData[0][20],
					"iu" =>  $rowData[0][21],
					"tw" =>  $rowData[0][22],
					//"jumlah" => $rowData[0][17]
				);

				if($rowData[0][1] == NULL && $rowData[0][2] == NULL && $rowData[0][4] == NULL && $rowData[0][3] == NULL && $rowData[0][5] == NULL && $rowData[0][6] == NULL && $rowData[0][7] == NULL && $rowData[0][8] == NULL && $rowData[0][9] == NULL && $rowData[0][10] == NULL && $rowData[0][11] == NULL && $rowData[0][12] == NULL && $rowData[0][13] == NULL && $rowData[0][14] == NULL && $rowData[0][15] == NULL && $rowData[0][16] == NULL && $rowData[0][17] == NULL&& $rowData[0][18] == NULL&& $rowData[0][19] == NULL&& $rowData[0][20] == NULL && $rowData[0][21] == NULL && $rowData[0][22] == NULL){
				echo "<script>
						alert('$banyakUpload data sukses di upload');
						window.location.href='http://localhost/assessment/index.php';
					</script>";
				}

				$cek = $this->mdata->cek_database($rowData[0][1], \PHPExcel_Style_NumberFormat::toFormattedString($rowData[0][3], 'YYYY-MM-DD'));

				if($cek->num_rows() > 0){

				} else {
					//sesuaikan nama dengan nama tabel
					$this->mdata->upload_database($data);
					$banyakUpload++;
				}
			}
			unlink($inputFileName);
			echo "<script>
					alert('Upload Success');
					window.location.href='http://localhost/assessment/index.php';
				</script>";
		} else {
			echo "<script>
					alert('Select Your File!');
					window.location.href='http://localhost/assessment/index.php';
				</script>";
		}
	}

	public function hapus_karyawan($id){
		$hapus = $this->mdata->delete_data($id);
		echo "<script>
				alert('Berhasil menghapus data');
				window.location.href='http://localhost/assessment/index.php';
			</script>";
	}

	// public function pilihdata($npp, $tanggal){
	// 	$data = $this->mdata->select_data($npp, $tanggal);
	// }

}
