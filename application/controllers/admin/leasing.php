<?php 

	class Leasing extends CI_Controller{
		public function __construct(){
			parent::__construct();

			if($this->session->userdata('role_id') != '1'){
				$this->session->set_flashdata('pesan','
				<div class="alert alert-danger  alert-dismissible fade show" role="alert">
				 Anda Belum Login
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
				');
				redirect('auth/login');
			}
		}
		public function index()
		{
			$data['leasing'] = $this->model_motor->leasing()->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/leasing',$data);
			$this->load->view('templates_admin/footer');
		}
		
		public function tambah_data()
		{
			$nama_leasing		= $this->input->post('nama_leasing');
			$gambar_leasing	= $_FILES['gambar_leasing']['name'];
				if($gambar_leasing = '' ){}else{
					$config ['upload_path'] = './uploads';
					$config ['allowed_types']	='jpg|jpeg|gif|png';

					$this->load->library('upload',$config);
					if(!$this->upload->do_upload('gambar_leasing')){
						echo "Gambar Gagal Di Upload";
					}else{
						$gambar_leasing = $this->upload->data('file_name');
					}
				}
				$data  = array(
					'nama_leasing' 		=> $nama_leasing , 
					'gambar_leasing'	=> $gambar_leasing
				);
				$this->model_motor->data_leasing($data,'leasing');
					redirect('admin/leasing/index');
		}
		public function delete($id)
			{
				$where	= array('id_leasing'	=> $id);
				$this->model_motor->delete_leasing($where,'leasing');
				redirect('admin/leasing/index');
			}
	}