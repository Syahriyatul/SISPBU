<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class komentar extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('komentarModel');
	}
	
	public function index()
	{
		$this->load->view('Detail');
	}
	
	public function komentarBaru() {

		$this->komentarModel->komentarSPBU();
		redirect('Detail');
	}
}