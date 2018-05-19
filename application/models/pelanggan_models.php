<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_models extends CI_Model {
//inser obat
		public function insertPelanggan()
		{
			$object = array
			('nama_plg'=>$this->input->post('nama_plg'),
			'jk'=>$this->input->post('jk'),
			'alamat'=>$this->input->post('alamat'),
			'telp'=>$this->input->post('telp')
			);
			$this->db->insert('pelanggan',$object);
		}

		//ambil id dari tabel 
		public function getPelanggan($id)
		{
			$this->db->where('idPlg',$id);
			$query = $this->db->get('pelanggan');
			return $query->result(); 	
		}

		// update data 
		public function updatePelangganId($id)
		{
			$data = array
			('nama_plg'=>$this->input->post('nama_plg'),
			'jk'=>$this->input->post('jk'),
			'alamat'=>$this->input->post('alamat'),
			'telp'=>$this->input->post('telp')
			);
			$this->db->where('idPlg',$id);
			$this->db->update('pelanggan',$data);
		}

		//delete obat
		public function delete($id)
		{
			$this->db->where('idPlg',$id);
			$this->db->delete('pelanggan');
		}

}

/* End of file pelanggan_models.php */
/* Location: ./application/models/pelanggan_models.php */