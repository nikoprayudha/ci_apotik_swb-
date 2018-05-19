<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian_models extends CI_Model {

	//mengambul data obat  
	function getdataid1() {
    $this->db->select("idObat");
    $this->db->from('obat');
    $query = $this->db->get();
    return $query;
	} 
	// mengambil data supplier
	function getdataid2() {
    $this->db->select("idSup");
    $this->db->from('supplier');
    $query = $this->db->get();
    return $query;
	}
	// mengambil data pegawai
	function getdataid3() {
    $this->db->select("idPgw");
    $this->db->from('pegawai');
    $query = $this->db->get();
    return $query;
	}

//inser obat
		public function insertPembelian()
		{
			$object = array
			('idObat'=>$this->input->post('idObat'),
			'idSup'=>$this->input->post('idSup'),
			'tgl_beli'=>$this->input->post('tgl_beli'),
			'jumlah'=>$this->input->post('jumlah'),
			'harga'=>$this->input->post('harga'),
			'total'=>$this->input->post('total'),
			'bayar'=>$this->input->post('bayar'),
			'kembalian'=>$this->input->post('kembalian'),
			'idPgw'=>$this->input->post('idPgw')
			);
			$this->db->insert('pembelian',$object);
		}

		//ambil id dari tabel 
		public function getPembelian($id)
		{
			$this->db->where('idPem',$id);
			$query = $this->db->get('pembelian');
			return $query->result(); 	
		}

		// update data 
		public function updatePembelianId($id)
		{
			$data = array
			('idObat'=>$this->input->post('idObat'),
			'idSup'=>$this->input->post('idSup'),
			'tgl_beli'=>$this->input->post('tgl_beli'),
			'jumlah'=>$this->input->post('jumlah'),
			'harga'=>$this->input->post('harga'),
			'total'=>$this->input->post('total'),
			'bayar'=>$this->input->post('bayar'),
			'kembalian'=>$this->input->post('kembalian'),
			'idPgw'=>$this->input->post('idPgw')
			);
			$this->db->where('idPem',$id);
			$this->db->update('pembelian',$data);
		}

		//delete obat
		public function delete($id)
		{
			$this->db->where('idPem',$id);
			$this->db->delete('pembelian');
		}
	
}

/* End of file pembelian_models.php */
/* Location: ./application/models/pembelian_models.php */