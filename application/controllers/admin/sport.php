<?php 
	class Sport extends CI_Controller
	{
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
			$data['motor'] = $this->model_motor->sport()->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/sport',$data);
			$this->load->view('templates_admin/footer');
		}
		public function tambah_data()
			{
				$nama_motor 	= $this->input->post('nama_motor');
				$warna_motor 	= $this->input->post('warna_motor');
				$type_motor 	= $this->input->post('type_motor');
				$cc_motor 		= $this->input->post('cc_motor');
				$dp_motor 		= $this->input->post('dp_motor');
				$angsuran23		= $this->input->post('angsuran23');
				$angsuran29		= $this->input->post('angsuran29');
				$angsuran35		= $this->input->post('angsuran35');
				$gambar_motor 	= $_FILES['gambar_motor']['name'];
					
					if($gambar_motor =''){}else{
						$config ['upload_path'] = './uploads';
						$config ['allowed_types'] ='jpg|jpeg|png|gif';

						$this->load->library('upload',$config);
						if(!$this->upload->do_upload('gambar_motor')){
							echo "Gambar Gagal DiUpload!!";
						}else{
							$gambar_motor = $this->upload->data('file_name');
						}
						$gambar_motor 	= $_FILES['gambar_motor']['name'];

				$gambar_spesifikasi 	= $_FILES['gambar_spesifikasi']['name'];
					if($gambar_spesifikasi =''){}else{
						$config ['upload_path'] = './uploads';
						$config ['allowed_types'] ='jpg|jpeg|png|gif';

						$this->load->library('upload',$config);
						if(!$this->upload->do_upload('gambar_spesifikasi')){
							echo "Gambar Gagal DiUpload!!";
						}else{
							$gambar_spesifikasi = $this->upload->data('file_name');
						}
					}

					$data = array(
						'nama_motor'			=> $nama_motor,
						'warna_motor'			=> $warna_motor,
						'type_motor'			=> $type_motor,
						'cc_motor'				=> $cc_motor,
						'dp_motor'				=> $dp_motor,
						'angsuran23'			=> $angsuran23,
						'angsuran29'			=> $angsuran29,
						'angsuran35'			=> $angsuran35,
						'gambar_motor'			=> $gambar_motor,
						'gambar_spesifikasi'	=> $gambar_spesifikasi
					);

					$this->model_motor->data_matic($data,'sport');
					redirect('admin/sport/index');
			}
		}

			public function edit($id)
			{
				$where = array('id_motor'	=> $id);
				$data['motor'] = $this->model_motor->edit_sport($where,'sport')->result();
				$this->load->view('templates_admin/header');
				$this->load->view('templates_admin/sidebar');
				$this->load->view('admin/edit_sport',$data);
				$this->load->view('templates_admin/footer');		
			}

			public function update()
			{
				$id 			= $this->input->post('id_motor');
				$nama_motor 	= $this->input->post('nama_motor');
				$warna_motor 	= $this->input->post('warna_motor');
				$type_motor 	= $this->input->post('type_motor');
				$cc_motor 		= $this->input->post('cc_motor');
				$dp_motor 		= $this->input->post('dp_motor');
				$angsuran23		= $this->input->post('angsuran23');
				$angsuran29		= $this->input->post('angsuran29');
				$angsuran35		= $this->input->post('angsuran35');
				
				$data = array(
					'nama_motor'			=> $nama_motor,
					'warna_motor'			=> $warna_motor,
					'type_motor'			=> $type_motor,
					'cc_motor'				=> $cc_motor,
					'dp_motor'				=> $dp_motor,
					'angsuran23'			=> $angsuran23,
					'angsuran29'			=> $angsuran29,
					'angsuran35'			=> $angsuran35
				);
				$where = array('id_motor'	=> $id);
				$this->model_motor->update_sport($where,$data,'sport');
				redirect('admin/sport/index');
			}
			public function delete($id)
			{
				$where = array('id_motor'	=> $id);
				$this->model_motor->delete_sport($where,'sport');
				redirect('admin/sport/index');
			}

	}

























