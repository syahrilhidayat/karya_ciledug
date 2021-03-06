<?php 

	class Banner extends CI_Controller{
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
			$data['banner'] = $this->model_motor->banner()->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/banner',$data);
			$this->load->view('templates_admin/footer');
		}
		
		public function tambah_data()
		{
			$nama_banner		= $this->input->post('nama_banner');
			$gambar_banner		= $_FILES['gambar_banner']['name'];
				if($gambar_banner = '' ){}else{
					$config ['upload_path'] = './uploads';
					$config ['allowed_types']	='jpg|jpeg|gif|png';

					$this->load->library('upload',$config);
					if(!$this->upload->do_upload('gambar_banner')){
						echo "Gambar Gagal Di Upload";
					}else{
						$gambar_banner = $this->upload->data('file_name');
					}
				}
				$data  = array(
					'nama_banner' 		=> $nama_banner , 
					'gambar_banner'		=> $gambar_banner
				);
				$this->model_motor->data_banner($data,'banner');
					redirect('admin/banner/index');
		}
		public function delete($id)
			{
				$where	= array('id_banner'	=> $id);
				$this->model_motor->delete_banner($where,'banner');
				redirect('admin/banner/index');
			}
	}