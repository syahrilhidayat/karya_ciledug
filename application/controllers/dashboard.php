<?php 

	class Dashboard extends CI_Controller{
		public function index()
		{
			$data['leasing'] = $this->model_motor->leasing()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('dashboard',$data);
			$this->load->view('templates/footer');
		}
		
	}