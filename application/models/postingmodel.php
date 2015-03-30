<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class postingModel extends CI_model {

	function __construct () {
	parent::__construct();
	$this->load->database();
	} 

	public function postingSPBU() {
		$kode_spbu = $this->input->post('vkode_spbu');
		$lokasi_spbu = $this->input->post('vlokasi_spbu');
		$fasilitas_spbu = $this->input->post('vfasilitas_spbu');
		$jam_spbu = $this->input->post('vjam_spbu');
		$produk_spbu = $this->input->post('vproduk_spbu');
		
	$data = array(
	'kode_spbu'=>$kode_spbu,
	'lokasi_spbu'=> $lokasi_spbu,
	'fasilitas_spbu'=>$fasilitas_spbu,
	'jam_spbu'=> $jam_spbu,
	'produk_spbu'=>$produk_spbu
	);
	
	$this->db->insert('spbu', $data);
	}
}