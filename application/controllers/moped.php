<?php 

	class Moped extends CI_Controller{
		public function index()
		{
			$data['motor'] = $this->model_motor->moped()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('moped',$data);
			$this->load->view('templates/footer');
		}
		public function detail($id_motor)
		{
			$data['motor'] = $this->model_motor->detail_moped($id_motor);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('detail_moped',$data);
			$this->load->view('templates/footer');
		}
	}