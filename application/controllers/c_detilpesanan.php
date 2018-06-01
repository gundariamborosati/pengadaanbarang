<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_detilpesanan extends CI_Controller {

	function __construct(){
		parent::__construct();			
		$this->load->model('m_detil_pesanan');	;

	}

	// ini untuk detil
	public function detil_pesanan($id){
		$data['detil_pesan'] = $this->m_detil_pesanan->getDetilPesanan($id);
		$this->load->view('template/header');
		$this->load->view('logistik/list_detil_pesanan' , $data);
		$this->load->view('template/footer');
	}

	//edit pesanan 
	public function edit_detail_pesanan($id_detil_pesanan){
		$where = array('id_detil_pesanan' => $id_detil_pesanan);
		$data['pesanan'] = $this->m_detil_pesanan->detail($where,'detil_pesanan')->result();
	}

	public function update_detilpesanan($id_detil_pesanan){	
		//print_r(	$id_detil_pesanan);
		//$id_pesan = $this->uri->segment(3);
		$id_detil_pesanan = $this->input->post('id_detil_pesanan'); //dari form hidden di viewnya
		$nama_barang=$this->input->post('nama_barang');
		$spesifikasi_barang=$this->input->post('spesifikasi_barang');
		$volume_barang=$this->input->post('volume_barang');
		$satuan=$this->input->post('satuan');
		$data=array(
			'nama_barang'=>$nama_barang,
			'spesifikasi_barang'=>$spesifikasi_barang,
			'volume_barang'=>$volume_barang,
			'satuan'=>$satuan
			);
		$where=array(
			'id_detil_pesanan'=>$id_detil_pesanan
			);
		$this->m_detil_pesanan->updateDetilPesanan($where,$data,'detil_pesanan');

		// redirect
		// get id 
		
		//print_r($id_pesan);
		$idPesan = $this->input->get('id_pesan'); //ambil si ?
		print_r($idPesan);
		redirect(base_url('c_detilpesanan/detil_pesanan/'.$idPesan));		
	}

	//form add detil pesanan
	public function form_add_detilpesanan($id){
		//print_r($id);
		$data = array(
			"id_pesanan" => $id
		);
		$this->load->view('template/header');
		$this->load->view('logistik/add_detil', $data);
		$this->load->view('template/footer');	
	}

	//aksi tambah detil pesanan
	public function add_detil_pesanan($id_pesanan){

		 $form_data = $this->input->post();
		 $nama = $form_data['nama_input'];
		 $spesifikasi = $form_data['spesifikasi_input'];
		 $volume = $form_data['volume_input'];
		 $satuan = $form_data['satuan_input'];

		 $arrayData = array();

		 foreach ($nama as $key => $j){
		 	$id_detil_pesanan = $this->m_detil_pesanan->getIDDetilPesanan();
		 	$arrayData = array (
		 		"id_detil_pesanan" => $id_detil_pesanan,
		 		"id_pesanan" => $id_pesanan,
		 		"nama_barang" => $nama[$key],
		 		"spesifikasi_barang" => $spesifikasi[$key],
		 		"volume_barang" => $volume[$key],
		 		"satuan" => $satuan[$key] 
		 	);

		 	$this->m_detil_pesanan->insertDetilPesanan($arrayData);

		 }

		redirect(base_url('c_pesanan/listPesanan'));
				
	}

}