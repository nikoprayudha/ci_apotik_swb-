<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_models extends CI_Model {

	//inser obat
		public function insertObat()
		{
			$object = array
			('idObat'=>$this->input->post('idObat'),
			'nama_obat'=>$this->input->post('nama_obat'),
			'jenis_obat'=>$this->input->post('jenis_obat'),
			'jumlah'=>$this->input->post('jumlah'),
			'harga'=>$this->input->post('harga')
			);
			$this->db->insert('obat',$object);
		}

		//ambil id dari tabel 
		public function getObat($id)
		{
			$this->db->where('idObat',$id);
			$query = $this->db->get('obat');
			return $query->result(); 	
		}

		// update data 
		public function updateObatId($id)
		{
			$data = array
			('idObat'=>$this->input->post('idObat'),
			'nama_obat'=>$this->input->post('nama_obat'),
			'jenis_obat'=>$this->input->post('jenis_obat'),
			'jumlah'=>$this->input->post('jumlah'),
			'harga'=>$this->input->post('harga')
			);
			$this->db->where('idObat',$id);
			$this->db->update('obat',$data);
		}

		//delete obat
		public function delete($id)
		{
			$this->db->where('idObat',$id);
			$this->db->delete('obat');
		}

}

/* End of file obat_models.php */
/* Location: ./application/models/obat_models.php */