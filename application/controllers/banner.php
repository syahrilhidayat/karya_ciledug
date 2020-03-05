<?php 
	class Banner extends CI_Controller{
		public function index
		{
			$data['banner'] = $this->model_motor->banner()->result();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('dashboard',$data);
			$this->load->view('template/footer');
		}
	}