<?php 

	class Sport extends CI_Controller{
		public function index()
		{
			$data['motor'] = $this->model_motor->sport()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('sport',$data);
			$this->load->view('templates/footer');
		}
		public function detail($id_motor)
		{
			$data['motor'] = $this->model_motor->detail_sport($id_motor);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('detail_sport',$data);
			$this->load->view('templates/footer');
		}
	}