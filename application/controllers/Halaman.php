<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function masuk(){
		$this->load->view('pages/masuk');
	}

	public function view($halaman = 'beranda'){
		if(!file_exists(APPPATH."views/pages/".$halaman.'.php')){
			show_404();
		}

		$this->load->view('pages/'.$halaman);
		$this->load->view('templates/footer');
	}


}
