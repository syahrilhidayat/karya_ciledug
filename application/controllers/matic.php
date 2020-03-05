<?php 

	class Matic extends CI_Controller{
		public function index()
		{
			$data['motor'] = $this->model_motor->matic()->result(); 
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('matic',$data);
			$this->load->view('templates/footer');
		}

		public function detail($id_mtr)
		{
			$data['motor'] = $this->model_motor->detail_matic($id_mtr); 
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('detail_matic',$data);
			$this->load->view('templates/footer');	
		}
	}