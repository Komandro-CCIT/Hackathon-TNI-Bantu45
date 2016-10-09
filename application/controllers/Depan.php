<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depan extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Home | Bantu45',
			'header' => '',
			'jenistemplate' => '1',
			'beritaterbaru' => $this->modeldepan->loadberitabaru()
		);
		$this->template->load('frontend/template', 'frontend/home', $data);
	}

	public function about(){
		$data = array(
			'title' => 'About | Bantu45',
			'header' => 'About',
			'jenistemplate' => '2'
		);
		$this->template->load('frontend/template', 'frontend/about', $data);
	}

	public function berita(){
		$data = array(
			'title' => 'Berita | Bantu45',
			'header' => 'Berita',
			'jenistemplate' => '2',
			'berita' => $this->modeldepan->loadberita()
		);
		$this->template->load('frontend/template', 'frontend/berita', $data);
	}

	public function beritadetail($id = ''){
		$data = array(
			'title' => 'Berita Detail | Bantu45',
			'header' => 'Berita',
			'jenistemplate' => '2',
			'beritadetail' => $this->modeldepan->beritadetail($id)
		);
		$this->template->load('frontend/template', 'frontend/beritadetail', $data);
	}
}
