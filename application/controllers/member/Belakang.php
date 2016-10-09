<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belakang extends CI_Controller {

	public function cektoken(){
		$url="http://hackathon.mabesad.mil.id/auth/login"; // URL
		$data = '_format=json&app_id=hackathon&secret_key=Y4NTidF6EJ7nDMytB9Km40kzjsn5mlOS&username=demo&password=demo';
		$header =  array(); // MEMBUAT ARRAY
		$header[] ='Content-Type: application/x-www-form-urlencoded';
		$ch = curl_init(); // MEMANGGIL ARRAY
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data); // RAW BODY ATAU VALUE PARAMETER
		curl_setopt($ch, CURLOPT_HTTPHEADER,$header); // HEADER
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
		$result = curl_exec($ch)or die(curl_error($ch)); // EKSEKUSI CURL API
		curl_close($ch);
		//$data = json_decode($result); // DECODE JSON
		return $result;

	}

	public function loginproses(){
		$email = $this->input->post("email");
		$pswd = sha1($this->input->post("pswd"));
		$hasillogin = $this->modelbelakang->ceklogin1($email,$pswd);
						if($hasillogin > 0){
								$hasil1['cek1'] = $this->modelbelakang->loadmember($email,$pswd);
								foreach($hasil1['cek1']->result() as $a){
								$datauser = array(
									 'nama'  => $a->nama_satuan,
	 									'kd_smkl'  => $a->kd_smkl,
									 'isLoginUser' => TRUE,
									 'statususer' => '2',
									 'token' => $this->cektoken()
								);
								//$_SESSION['token'] = $this->cektoken();
								$this->session->set_userdata($datauser);
								redirect('member', 'refresh');
							}
						} else {
					 		 $hasillogin1 = $this->modelbelakang->ceklogin2($email,$pswd);
					 			if($hasillogin1 != 0){
										$hasil2['cek1'] = $this->modelbelakang->loadadmin($email,$pswd);
										foreach($hasil2['cek1']->result() as $a){
										$datauser = array(
											'idadmin' => $a->id_admin,
											 'nama'  => $a->nama,
			 									'email'  => $a->email,
											 'isLoginAdmin' => TRUE,
											 'statususer' => '1',
											 'token' => $this->cektoken()
										);
										//$_SESSION['token'] = $this->cektoken();
										$this->session->set_userdata($datauser);
										redirect('member', 'refresh');
									}
								} else {
												redirect('depan', 'refresh');
								}
						}
	}

	public function logoutproses(){
			$datauser = array(
					 'nama'  => '',
						'kd_smkl'  => '',
					 'isLoginUser' => FALSE,
					 'statususer' => '',
					 'token' => '',
						 'idadmin' => '',
							 'email'  => '',
							'isLoginAdmin' => FALSE
			);
				unset($_SESSION['nama']);
				unset($_SESSION['kd_smkl']);
				unset($_SESSION['email']);
				unset($_SESSION['isLoginUser']);
				unset($_SESSION['statususer']);
				unset($_SESSION['token']);
				unset($_SESSION['idadmin']);
				unset($_SESSION['isLoginAdmin']);
				$this->session->unset_userdata('$datauser');
		     		redirect('depan', 'refresh');
			}

	public function index()
	{
		if($this->session->userdata('isLoginUser') || $this->session->userdata('isLoginAdmin')) {
		//$cektoken = $this->cektoken();
		$data = array(
			'title' => 'Home Member | Bantu45'
		);
		$this->template->load('backend/template', 'backend/home', $data);
		} else {
			redirect('depan', 'refresh');
		}
	}

	public function bantuan() {
	if($this->session->userdata('isLoginAdmin')) {
			$data = array(
				'title' => 'Bantuan Admin | Bantu45'
			);
			$this->template->load('backend/template', 'backend/bantuan', $data);
		} else {
    	redirect('member/belakang', 'refresh');
		}
	}

	public function cekberita() {
		//$cektoken = $this->cektoken();
		if($this->session->userdata('isLoginUser')) {
			$data = array(
				'title' => 'Semua Berita Member | Bantu45',
				'berita' => $this->modeldepan->loadberita()
			);
			$this->template->load('backend/template', 'backend/cekberita', $data);
		} else {
			redirect('depan', 'refresh');
		}
	}

	public function prosestambahberita() {
		if($this->session->userdata('isLoginAdmin')) {
		$judul = $this->input->post("judul");
		$alamat = $this->input->post("alamat");
		$langt = $this->input->post("langt");
		$longt = $this->input->post("longt");
		$deskripsi = $this->input->post("deskripsi");
		$hasil = $this->modelbelakang->simpanberita($judul,$alamat,$langt,$longt,$deskripsi);
		} else {
			redirect('depan', 'refresh');
		}
	}

	public function beritadetail($id=''){
	if($this->session->userdata('isLoginUser')) {
		$data = array(
			'title' => 'Berita Detail Member | Bantu45',
			'beritadetail' => $this->modeldepan->beritadetail($id)
		);
		$this->template->load('backend/template', 'backend/beritadetail', $data);
		} else {
			redirect('depan', 'refresh');
		}

	}

	public function proseskirimbantuan(){
	if($this->session->userdata('isLoginUser')) {
		$personal1[] = $this->input->post("personel");
		$count = count($this->input->post("personel"));
		foreach ($this->input->post("personel") as $key) {
				$data = array(
							'id_kirim_bantuan' => 'null',
	           'id_bantuan' => $this->input->post("id_bantuan"),
	           'kd_smkl' => '1A1B',
	           'ur_smkl' => 'KODIM NANAS-0112',
						 'personel' => $key
	           );
			$hasil = $this->db->insert('kirim_bantuan', $data);
		}
			if($hasil > 0){
				echo "<script type='text/javascript'>
						swal('Sukses!', 'Berhasil Kirim Data Personel', 'success');</script>";
							header ('location:cekberita');
			} else {
				echo "<script type='text/javascript'>
						swal('Gagal!', 'Gagal Kirim Data Personel!', 'error');</script>";
							header ('location:cekberita');
			}
		} else {
				redirect('depan', 'refresh');
			}
	}

	public function cekbantuan(){
		if($this->session->userdata('isLoginAdmin')) {
		$data = array(
			'title' => 'Cek Bantuan Admin | Bantu45',
			'beritabantuan' => $this->modelbelakang->beritabantuan()
		);
		$this->template->load('backend/template', 'backend/cekkirimanbantuan', $data);
		} else {
			redirect('member/belakang', 'refresh');
		}
	}

	public function beritakirimanbantuandetail($id = ''){
		if($this->session->userdata('isLoginAdmin')) {
			$data = array(
				'title' => 'Cek Bantuan Detail Admin | Bantu45',
				'beritabantuandetail' => $this->modelbelakang->beritakirimanbantuandetail($id)
			);
			$this->template->load('backend/template', 'backend/beritakirimanbantuandetail', $data);
			} else {
				redirect('member/belakang', 'refresh');
			}
	}

/*public function downloaddata($id = ''){
			$data = array(
				'title' => 'Cek Bantuan Detail Admin | Bantu45',
				'beritabantuandetail' => $this->modelbelakang->beritakirimanbantuandetail($id)
			);
			$this->template->load('backend/template', 'backend/downloaddata', $data);
	}*/


}
