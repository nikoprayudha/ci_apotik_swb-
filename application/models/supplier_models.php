<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_models extends CI_Model {

	//inser obat
		public function insertSupplier()
		{
			$object = array
			('nama_sup'=>$this->input->post('nama_sup'),
			'perusahaan'=>$this->input->post('perusahaan'),
			'alamat'=>$this->input->post('alamat'),
			'telp'=>$this->input->post('telp')
			);
			$this->db->insert('supplier',$object);
		}

		//ambil id dari tabel 
		public function getSupplier($id)
		{
			$this->db->where('idSup',$id);
			$query = $this->db->get('supplier');
			return $query->result(); 	
		}

		// update data 
		public function updateSupplierId($id)
		{
			$data = array
			('nama_sup'=>$this->input->post('nama_sup'),
			'perusahaan'=>$this->input->post('perusahaan'),
			'alamat'=>$this->input->post('alamat'),
			'telp'=>$this->input->post('telp')
			);
			$this->db->where('idSup',$id);
			$this->db->update('supplier',$data);
		}

		//delete obat
		public function delete($id)
		{
			$this->db->where('idSup',$id);
			$this->db->delete('supplier');
		}

}

/* End of file supplier_models.php */
/* Location: ./application/models/supplier_models.php */