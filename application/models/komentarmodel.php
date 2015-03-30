<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class komentarModel extends CI_model {

	function __construct () {
	parent::__construct();
	$this->load->database();
	} 

	public function komentarSPBU() {
		$nama = $this->input->post('vnama');
		$email = $this->input->post('vemail');
		$komentar = $this->input->post('vkomentar');

	
	$data = array(
	'nama_komentar'=>$nama,
	'email_komentar'=> $email,
	'komentar'=>$komentar,
	);
	
	$this->db->insert('spbu', $data);
	}
}