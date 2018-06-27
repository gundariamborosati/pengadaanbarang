<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_progress extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_progress');
			$this->load->model('m_statusPesanan');

	}
		 //call model
	public function home(){
		$this->load->view('template/header'); // default template
		$this->load->view('logistik/dashboard'); // dashboard vendornya
		$this->load->view('template/footer'); 
	}

	public function viewProgress(){
	
	 	$data ['progress'] = $this->m_progress->viewProgress()->result();
	 	$this->load->view('template/header');
		$this->load->view('logistik/view_progress',$data);
		$this->load->view('template/footer'); 
	 }

	public function viewProgress_direktur(){
		$data ['progress'] = $this->m_progress->viewProgress()->result();
	 	$this->load->view('template/header');
	 	$this->load->view('direktur/view_progress_direct',$data);
	$this->load->view('template/footer'); 
	 }


	
	 function input(){
	 	// $data = array(
			// 	'username' => $this->m_progress->ambilDataNamaCustomer(),
			// 	'nama_perusahaan' => $this->m_progress->ambilDataNamaVendor()
				
			// );
	 		$data['customer']=$this->m_progress->ambilDataNamaCustomer();
	 		$data['vendor']=$this->m_progress->ambilDataNamaVendor();
         $this->load->view('template/header');
		$this->load->view('logistik/input_progress',$data);
		$this->load->view('template/footer');
    }  
	function inputProgress(){
		 $id_progress = $this->m_progress->getIdProgress();
         $customer = $this->input->post('nama_customer');
         $vendor = $this->input->post('nama_vendor');
        $progress      = $this->input->post('progress');
        $kendala     = $this->input->post('kendala');
        
        $data = array(
         'id_progress' => $id_progress,
       
        	'tanggal' => date('Y-m-d'),
        'nama_customer' => $customer,
        'nama_vendor' =>$vendor,
        'progress'      =>$progress,
        'kendala'     =>$kendala
        );
        $this->m_progress->inputProgress($data, 'progress_pengadaan');
        var_dump( $this->m_progress->inputProgresss);
        redirect('c_progress/viewProgress');   
       }



	

       public function edit($id_progress){
		$where = array('id_progress' => $id_progress);
		$data['progress'] = $this->m_progress->edit_data($where,'progress_pengadaan')->result();
		$this->load->view('template/header');
		$this->load->view('logistik/edit_progress',$data);
		$this->load->view('template/footer');
	}
	
	public function updateProgress($id_progress){	
		$progress=$this->input->post('progress');
		$kendala=$this->input->post('kendala');

		$data=array(
			'progress' => $progress,
			'kendala'=>$kendala
			);
		$where=array(
			'id_progress' => $id_progress
			);
		$this->m_progress->update_progress($where,$data,'progress_pengadaan');
	
		     redirect('c_progress/viewProgress');
	}

	function hapusProgress($id_progress){
        $where=array('id_progress' => $id_progress);
        $this->m_progress->delete($where,'progress_pengadaan');
        redirect('c_progress/viewProgress');
        }




   public function cetak() {
	
		$tgl_start		= $this->input->post('tgl_start');
		$tgl_end		= $this->input->post('tgl_end');
		
		$data['tgl_start']	= $tgl_start;
		$data['tgl_end']	= $tgl_end;		
 	
		$data['progress']	= $this->db->query("SELECT * FROM progress_pengadaan WHERE tanggal >= '$tgl_start' AND tanggal <= '$tgl_end' ORDER BY id_progress")->result(); 
			$this->load->view('direktur/vcetaklaporan', $data);
		 
	}	
	





       

	
 public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}
}
