<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class posting extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('postingModel');
	}
	
	public function index()
	{
		$this->load->view('Posting');
	}
	
	public function postingBaru() {

		$this->postingModel->postingSPBU();
		redirect('posting');
	}
}