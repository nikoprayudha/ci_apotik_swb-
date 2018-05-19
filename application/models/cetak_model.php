<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_model extends CI_Model {

	public function view_pegawai() 
	{
		$this->db->select('idPgw,nama_peg,jk,agama,alamat,telp,profesi,username,foto');
			$query = $this->db->get('pegawai');
			return $query->result();
	}
	
	public function view_obat()
	{
		$this->db->select('idObat,nama_obat,jenis_obat,jumlah,harga');
			$query = $this->db->get('obat');
			return $query->result();
	}

	public function view_supplier()
	{
		$this->db->select('idSup,nama_sup,perusahaan,alamat,telp');
			$query = $this->db->get('supplier');
			return $query->result();
	}

	public function view_pelanggan()
	{
		$this->db->select('idPlg,nama_plg,jk,alamat,telp');
			$query = $this->db->get('pelanggan');
			return $query->result();
	}
	public function view_pembelian()
	{
		$this->db->select('a.idPem,b.nama_sup,b.perusahaan,c.nama_obat,  DATE_FORMAT(a.tgl_beli, "%d-%m-%Y" ) as tanggal,a.jumlah,a.harga,a.total,a.bayar,a.kembalian,d.nama_peg')
				 ->from('pembelian a')
				 ->join('supplier b' , 'a.idSup=b.idSup')
				 ->join('obat c' , 'a.idObat=c.idObat')
				 ->join('pegawai d' , ' a.idPgw=d.idPgw');
			$query = $this->db->get('pembelian');
			return $query->result();
	}

	public function getPenjualanExcel()
	{
		$this->db->select('a.idPnj,b.nama_plg,c.nama_obat,c.jenis_obat, DATE_FORMAT(a.tgl_pnj, "%d-%m-%Y" ) as tanggal,a.jumlah,a.harga,a.total,a.bayar,a.kembalian,d.nama_peg')
				 ->from('penjualan a')
				 ->join('pelanggan b' , 'a.idPlg=b.idplg')
				 ->join('obat c' , 'a.idObat=c.idObat')
				 ->join('pegawai d' , ' a.idPgw=d.idPgw');
			$query = $this->db->get('penjualan');
		return $query->result();
	}		


}

/* End of file cetak_model.php */
/* Location: ./application/models/cetak_model.php */