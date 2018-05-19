<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_models extends CI_Model {

	//inser pegawai
		public function insertPegawai()
		{
			$object = array
			('nama_peg'=>$this->input->post('nama_peg'),
			'jk'=>$this->input->post('jk'),
			'agama'=>$this->input->post('agama'),
			'alamat'=>$this->input->post('alamat'),	
			'telp'=>$this->input->post('telp'),
			'foto'=>$this->upload->data('file_name'),
			'profesi'=>$this->input->post('profesi'),
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))
			);
			$this->db->insert('pegawai',$object);
		}

		//ambil id dari tabel 
		public function getPegawai($id)
		{
			$this->db->where('idPgw',$id);
			$query = $this->db->get('pegawai');
			return $query->result(); 	
		}

		// update data 
		public function updatePegId($id)
		{
			$data = array
			('nama_peg'=>$this->input->post('nama_peg'),
			'jk'=>$this->input->post('jk'),
			'agama'=>$this->input->post('agama'),
			'alamat'=>$this->input->post('alamat'),	
			'telp'=>$this->input->post('telp'),
			'foto'=>$this->upload->data('file_name'),
			'profesi'=>$this->input->post('profesi'),
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))
			);
			$this->db->where('idPgw',$id);
			$this->db->update('pegawai',$data);
		}

		//delete pegawai
		public function delete($id)
		{
			$this->db->where('idPgw',$id);
			$this->db->delete('pegawai');
		}

}

/* End of file pegawai_models.php */
/* Location: ./application/models/pegawai_models.php */