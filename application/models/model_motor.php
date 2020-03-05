<?php 

	class Model_motor extends CI_Model{
		public function dashboard()
		{
			$this->db->select('*');
			$this->db->from('leasing');
			$this->db->join('banner','banner.id = leasing.id');
			return $query = $this->db->get();
		}

		public function matic()
		{
			return $this->db->get('matic');
		}
		public function moped()
		{
			return $this->db->get('moped');
		}
		public function sport()
		{
			return $this->db->get('sport');
		}

		public function data_matic($data,$table)
		{	
			$this->db->insert($table,$data);
		}
		public function data_moped($data,$table)
		{	
			$this->db->insert($table,$data);
		}
		public function data_sport($data,$table)
		{	
			$this->db->insert($table,$data);
		}

		public function edit_matic($where,$table)
		{
			return $this->db->get_where($table,$where);
		}
		public function update_matic($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		public function delete_matic($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function edit_moped($where,$table)
		{
			return $this->db->get_where($table,$where);
		}
		public function update_moped($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
			
		}
		public function delete_moped($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);
			
		}
		public function edit_sport($where,$table)
		{
			return $this->db->get_where($table,$where);
		}
		public function update_sport($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		public function delete_sport($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);			
		}

		public function detail_matic($id_mtr)
		{
			$result = $this->db->where('id_motor',$id_mtr)->get('matic');
				if($result->num_rows() > 0 ){
					return $result->result();
				}else{
					return false;
				}
		}
		public function detail_moped($id_motor)
		{
			$result = $this->db->where('id_motor',$id_motor)->get('moped');
				if($result->num_rows() > 0){
					return $result->result();
			}else{
				return false;
			}
		}
		public function detail_sport($id_motor)
		{
			$result = $this->db->where('id_motor',$id_motor)->get('sport');
				if($result->num_rows() > 0 ){
					return $result->result();
				}else{
					return false;
				}
		}

		//leasing
		public function leasing()
		{
			return $this->db->get('leasing');
		}
		public function data_leasing($data,$table)
		{	
			$this->db->insert($table,$data);
		}
		public function delete_leasing($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);			
		}
		//banner
		public function banner()
		{
			return $this->db->get('banner');
		}
		public function data_banner($data,$table)
		{	
			$this->db->insert($table,$data);
		}
		public function delete_banner($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);			
		}

	}