<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_models extends CI_Model {

	//mengambul data obat  
	function getdataobat() {
    $this->db->select("idObat");
    $this->db->from('obat');
    $query = $this->db->get();
    return $query;
	} 
	// mengambil data supplier
	function getdataplg() {
    $this->db->select("idPlg");
    $this->db->from('pelanggan');
    $query = $this->db->get();
    return $query;
	}
	// mengambil data pegawai
	function getdatapgw() {
    $this->db->select("idPgw");
    $this->db->from('pegawai');
    $query = $this->db->get();
    return $query;
	}

//inser obat
		public function insertPenjualan()
		{
			$object = array
			('idPlg'=>$this->input->post('idPlg'),
			'idObat'=>$this->input->post('idObat'),
			'tgl_pnj'=>$this->input->post('tgl_pnj'),
			'jumlah'=>$this->input->post('jumlah'),
			'harga'=>$this->input->post('harga'),
			'total'=>$this->input->post('total'),
			'bayar'=>$this->input->post('bayar'),
			'kembalian'=>$this->input->post('kembalian'),
			'idPgw'=>$this->input->post('idPgw')
			);
			$this->db->insert('penjualan',$object);
		}

		//ambil id dari tabel 
		public function getPenjualan($id)
		{
			$this->db->where('a.idPnj',$id);
	    
	    	$this->db->select('a.idPnj,b.nama_plg,c.nama_obat,c.jenis_obat, DATE_FORMAT(a.tgl_pnj, "%d-%m-%Y" ) as tanggal,a.jumlah,a.harga,a.total,a.bayar,a.kembalian,d.nama_peg')
				 ->from('penjualan a')
				 ->join('pelanggan b' , 'a.idPlg=b.idplg')
				 ->join('obat c' , 'a.idObat=c.idObat')
				 ->join('pegawai d' , ' a.idPgw=d.idPgw');
			$query = $this->db->get('penjualan');
			return $query->result(); 	
		}


		//delete obat
		public function delete($id)
		{
			$this->db->where('idPnj',$id);
			$this->db->delete('penjualan');
		}

}

/* End of file penjualan_models.php */
/* Location: ./application/models/penjualan_models.php */