<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apotik extends CI_Controller {

	public function __construct()
		{
			parent::__construct();

			$this->load->model('pegawai_models');
			$this->load->model('obat_models');
			$this->load->model('supplier_models');
			$this->load->model('pelanggan_models');
			$this->load->model('penjualan_models');
			$this->load->model('pembelian_models');
			$this->load->helper('url','file','form');
			$this->load->library('form_validation');

			if($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
			}else {
				redirect('login','refresh');
			}

		}
		
/* Link Controller*/
	public function index()
	{	
		$this->load->view('home');
	}
	public function pegawai()
	{
	$this->load->view('pegawai');
	} 
	public function obat()
	{
		$this->load->view('obat');
	}
	public function supplier()
	{
		$this->load->view('supplier');
	}
	public function pelanggan()
	{
		$this->load->view('pelanggan');
	}
	public function pembelian()
	{
		$this->load->view('pembelian');
	}
	public function penjualan()
	{
		$this->load->view('penjualan');
	}

/*PEGAWAI==========================================================================*/
	public function data_server_pegawai()
		{
			$this->load->library('Datatables');
			$this->datatables
				 ->select('idPgw,nama_peg,jk,agama,alamat,telp,foto,profesi,username')
				 ->from('pegawai');
				 echo $this->datatables->generate();
		}		

	public function createPegawai()
		{	
			$this->form_validation->set_rules('nama_peg','Nama','trim|required');
			$this->form_validation->set_rules('jk','Jenis Kelamin','trim|required');
			$this->form_validation->set_rules('agama','agama','trim|required');
			$this->form_validation->set_rules('alamat','alamat','trim|required');
			$this->form_validation->set_rules('telp','telepon','trim|required');
			$this->form_validation->set_rules('profesi','profesi','trim|required');
			$this->form_validation->set_rules('username','username','trim|required');
			$this->form_validation->set_rules('password','password','trim|required');

			$this->load->model('pegawai_models');

		if($this->form_validation->run()==FALSE)
			{
				$this->load->view('tambah_pegawai');
			} 
			 else {	

				$config['upload_path'] 		='assets/upload/';
				$config['allowed_types']	='gif|jpg|png';
				$config['max_size']			= '10000';
				$config['max_width']		= '102480';
				$config['max_height']		= '7680';

			$this->load->library('upload', $config);

			if( ! $this->upload->do_upload('foto'))
			{
				$eror = array('error' => $this->upload->display_errors());
				$this->load->view('tambah_pegawai',$error);
			}
				else {	

				$image_data = $this->upload->data();
				$configer = array (
					'image_library' => 'gd2',
					'source_image' => $image_data['full_path'],
					'maintain_ratio' => TRUE,
					'width' => 300,
					'height' => 768,
					);

				$this->load->library('image_lib', $config);
				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();
				
				$this->pegawai_models->insertPegawai();
				echo '<script>alert("You Have Successfully Created this record!");</script>';
				redirect('apotik/pegawai', 'refresh');
				
				}
			} //else	
		} //end create pegawai

		// update pegawai
		public function updatePegawai($id)
		{	
			$this->form_validation->set_rules('nama_peg','Nama','trim|required');
			$this->form_validation->set_rules('jk','Jenis Kelamin','trim|required');
			$this->form_validation->set_rules('agama','agama','trim|required');
			$this->form_validation->set_rules('alamat','alamat','trim|required');
			$this->form_validation->set_rules('telp','telepon','trim|required');
			$this->form_validation->set_rules('profesi','profesi','trim|required');
			$this->form_validation->set_rules('username','username','trim|required');
			$this->form_validation->set_rules('password','password','trim|required');
			
			//load model get id  
			$data['pegawai']=$this->pegawai_models->getPegawai($id);

		if($this->form_validation->run()==FALSE)
			{
				$this->load->view('update_pegawai',$data);
			}
			else {

				$config['upload_path'] 		='assets/upload/';
				$config['allowed_types']	='gif|jpg|png';
				$config['max_size']			='10000';
				$config['max_width']		='10248';
				$config['max_height']		='7680';

			$this->load->library('upload', $config);

			if( ! $this->upload->do_upload('foto'))
			{
				$eror = array('error' => $this->upload->display_errors());
				$this->load->view('update_pegawai',$error);
			}
				else {	

				$image_data = $this->upload->data();
				$configer = array (
					'image_library' => 'gd2',
					'source_image' => $image_data['full_path'],
					'maintain_ratio' => TRUE,
					'width' => 300,
					'height' => 768,
					);

				$this->load->library('image_lib', $config);
				$this->image_lib->clear();
				$this->image_lib->initialize($configer);
				$this->image_lib->resize();

				$this->pegawai_models->updatePegId($id);
				echo '<script>alert("You Have Successfully updated this Record!");</script>';
				redirect('apotik/pegawai', 'refresh');
					}	
			} //end else 
		} //end update pegawai


		public function deletePegawai($id)
		{
			$this->pegawai_models->delete($id);
			redirect('apotik/pegawai');
		} //end delete
		
/*END PEGAWAI ====================================================================*/

// -------------------------------------------------------------------------------

/*OBAT==========================================================================*/
	public function data_server_obat()
		{
			$this->load->library('Datatables');
			$this->datatables
				 ->select('idObat,nama_obat,jenis_obat,jumlah,harga')
				 ->from('obat');
				 echo $this->datatables->generate();
		}		

	public function createObat()
		{	
			$this->form_validation->set_rules('idObat','idObat','trim|required');
			$this->form_validation->set_rules('nama_obat','nama_obat','trim|required');
			$this->form_validation->set_rules('jenis_obat','jenis_obat','trim|required');
			$this->form_validation->set_rules('jumlah','jumlah','trim|required');
			$this->form_validation->set_rules('harga','harga','trim|required');
	
			$this->load->model('obat_models');

		if($this->form_validation->run()==FALSE)
			{
				$this->load->view('tambah_obat');
			} 
			else {	
				$this->obat_models->insertObat();
				echo '<script>alert("You Have Successfully Created this record!");</script>';
				redirect('apotik/obat', 'refresh');
			} //else	
		} //end create pegawai

		// update pegawai
		public function updateObat($id)
		{	
			$this->form_validation->set_rules('idObat','idObat','trim|required');
			$this->form_validation->set_rules('nama_obat','nama_obat','trim|required');
			$this->form_validation->set_rules('jenis_obat','jenis_obat','trim|required');
			$this->form_validation->set_rules('jumlah','jumlah','trim|required');
			$this->form_validation->set_rules('harga','harga','trim|required');
	
			//load model get id  
			$data['obat']=$this->obat_models->getObat($id);

		if($this->form_validation->run()==FALSE)
			{
				$this->load->view('update_obat',$data);
			}
			else {	
				$this->obat_models->updateObatId($id);
				echo '<script>alert("You Have Successfully updated this Record!");</script>';
				redirect('apotik/obat', 'refresh');
			} //end else 
		} //end update pegawai


		public function deleteObat($id)
		{
			$this->obat_models->delete($id);
			redirect('apotik/obat');
		} //end delete
		
/*END OBAT ==========================================================================*/

// -------------------------------------------------------------------------------

/*SUPPLIER==========================================================================*/
	public function data_server_supplier()
		{
			$this->load->library('Datatables');
			$this->datatables
				 ->select('idSup,nama_sup,perusahaan,alamat,telp')
				 ->from('supplier');
				 echo $this->datatables->generate();
		}		

	public function createSupplier()
		{	
			$this->form_validation->set_rules('nama_sup','nama_sup','trim|required');
			$this->form_validation->set_rules('perusahaan','perusahaan','trim|required');
			$this->form_validation->set_rules('alamat','alamat','trim|required');
			$this->form_validation->set_rules('telp','telp','trim|required');
	
			$this->load->model('supplier_models');

		if($this->form_validation->run()==FALSE)
			{
				$this->load->view('tambah_supplier');
			} 
			else {	
				$this->supplier_models->insertSupplier();
				echo '<script>alert("You Have Successfully Created this record!");</script>';
				redirect('apotik/supplier', 'refresh');
			} //else	
		} //end create pegawai

		// update pegawai
		public function updateSupplier($id)
		{	
			$this->form_validation->set_rules('nama_sup','nama_sup','trim|required');
			$this->form_validation->set_rules('perusahaan','perusahaan','trim|required');
			$this->form_validation->set_rules('alamat','alamat','trim|required');
			$this->form_validation->set_rules('telp','telp','trim|required');
			//load model get id  
			$data['supplier']=$this->supplier_models->getSupplier($id);

		if($this->form_validation->run()==FALSE)
			{
				$this->load->view('update_supplier',$data);
			}
			else {	
				$this->supplier_models->updateSupplierId($id);
				echo '<script>alert("You Have Successfully updated this Record!");</script>';
				redirect('apotik/supplier', 'refresh');
			} //end else 
		} //end update pegawai


		public function deleteSupplier($id)
		{
			$this->supplier_models->delete($id);
			redirect('apotik/supplier');
		} //end delete
		
/*END SUPPLIER ==========================================================================*/

// -------------------------------------------------------------------------------

/*PELANGGAN==========================================================================*/
	public function data_server_pelanggan()
		{
			$this->load->library('Datatables');
			$this->datatables
				 ->select('idPlg,nama_plg,jk,alamat,telp')
				 ->from('pelanggan');
				 echo $this->datatables->generate();
		}		

	public function createPelanggan()
		{	
			$this->form_validation->set_rules('nama_plg','nama_plg','trim|required');
			$this->form_validation->set_rules('jk','jenis Kelamin','trim|required');
			$this->form_validation->set_rules('alamat','alamat','trim|required');
			$this->form_validation->set_rules('telp','telp','trim|required');
	
			$this->load->model('pelanggan_models');

		if($this->form_validation->run()==FALSE)
			{
				$this->load->view('tambah_pelanggan');
			} 
			else {	
				$this->pelanggan_models->insertPelanggan();
				echo '<script>alert("You Have Successfully Created this record!");</script>';
				redirect('apotik/pelanggan', 'refresh');
			} //else	
		} //end create pegawai

		// update pegawai
		public function updatePelanggan($id)
		{	
			$this->form_validation->set_rules('nama_plg','nama_plg','trim|required');
			$this->form_validation->set_rules('jk','jenis Kelamin','trim|required');
			$this->form_validation->set_rules('alamat','alamat','trim|required');
			$this->form_validation->set_rules('telp','telp','trim|required');
			//load model get id  
			$data['pelanggan']=$this->pelanggan_models->getPelanggan($id);

		if($this->form_validation->run()==FALSE)
			{
				$this->load->view('update_pelanggan',$data);
			}
			else {	
				$this->pelanggan_models->updatePelangganId($id);
				echo '<script>alert("You Have Successfully updated this Record!");</script>';
				redirect('apotik/pelanggan', 'refresh');
			} //end else 
		} //end update pegawai


		public function deletePelanggan($id)
		{
			$this->pelanggan_models->delete($id);
			redirect('apotik/pelanggan');
		} //end delete
		
/*END PELANGGAN ==========================================================================*/

// -------------------------------------------------------------------------------

/*PEMBELIAN==========================================================================*/
	public function data_server_pembelian()
		{
			$this->load->library('Datatables');
			$this->datatables
		->select('a.idPem,b.nama_sup,b.perusahaan,c.nama_obat,DATE_FORMAT(a.tgl_beli, "%d-%m-%Y" ) as tanggal,a.jumlah,a.harga,a.total,a.bayar,a.kembalian,d.nama_peg')
				 ->from('pembelian a')
				 ->join('supplier b' , 'a.idSup=b.idSup')
				 ->join('obat c' , 'a.idObat=c.idObat')
				 ->join('pegawai d' , ' a.idPgw=d.idPgw');
				 echo $this->datatables->generate();
		}
	public function data_tampil_obat()
		{
			$this->load->library('Datatables');
			$this->datatables
				 ->select('idObat,nama_obat,jenis_obat,jumlah,harga')
				 ->from('obat');
				 echo $this->datatables->generate();
		}
	public function data_tampil_supplier()
		{
			$this->load->library('Datatables');
			$this->datatables
				 ->select('idSup,nama_sup,perusahaan,alamat,telp')
				 ->from('supplier');
				 echo $this->datatables->generate();
		}
	public function data_tampil_pegawai()
		{
			$this->load->library('Datatables');
			$this->datatables
				 ->select('idPgw,nama_peg,jk,agama,alamat,telp,foto,profesi,username')
				 ->from('pegawai');
				 echo $this->datatables->generate();
		}								

	public function createPembelian()
		{	
			$this->form_validation->set_rules('idObat','idObat','trim|required');
			$this->form_validation->set_rules('idSup','idSup','trim|required');
			$this->form_validation->set_rules('tgl_beli','tgl_beli','trim|required');
			$this->form_validation->set_rules('jumlah','jumlah','trim|required');
			$this->form_validation->set_rules('harga','harga','trim|required');
			$this->form_validation->set_rules('total','total','trim|required');
			$this->form_validation->set_rules('bayar','bayar','trim|required');
			$this->form_validation->set_rules('kembalian','kembalian','trim|required');
			$this->form_validation->set_rules('idPgw','idPgw','trim|required');
	
			$this->load->model('pembelian_models');
			//ambil data dari model   
			$data['obt'] = $this->pembelian_models->getdataid1();
			$data['spl'] = $this->pembelian_models->getdataid2();
			$data['pgw'] = $this->pembelian_models->getdataid3();

		if($this->form_validation->run()==FALSE)
			{
				$this->load->view('tambah_pembelian',$data);
			
			} 
			else {	
				$this->pembelian_models->insertPembelian();
				echo '<script>alert("You Have Successfully Created this record!");</script>';
				redirect('apotik/pembelian', 'refresh');
			} //else	
		} //end create pegawai

		// update pegawai
		public function updatePembelian($id)
		{	
			$this->form_validation->set_rules('idObat','idObat','trim|required');
			$this->form_validation->set_rules('idSup','idSup','trim|required');
			$this->form_validation->set_rules('tgl_beli','tgl_beli','trim|required');
			$this->form_validation->set_rules('jumlah','jumlah','trim|required');
			$this->form_validation->set_rules('harga','harga','trim|required');
			$this->form_validation->set_rules('total','total','trim|required');
			$this->form_validation->set_rules('bayar','bayar','trim|required');
			$this->form_validation->set_rules('kembalian','kembalian','trim|required');
			$this->form_validation->set_rules('idPgw','idPgw','trim|required');
			//load model get id  
			$data['pembelian']=$this->pembelian_models->getPembelian($id);

		if($this->form_validation->run()==FALSE)
			{
				$this->load->view('update_pembelian',$data);
			}
			else {	
				$this->pembelian_models->updatePembelianId($id);
				echo '<script>alert("You Have Successfully updated this Record!");</script>';
				redirect('apotik/pembelian', 'refresh');
			} //end else 
		} //end update pegawai


		public function deletePembelian($id)
		{
			$this->pembelian_models->delete($id);
			redirect('apotik/pembelian');
		} //end delete
		
/*END PEMBELIAN ==========================================================================*/

// -------------------------------------------------------------------------------

/*PENJUALAN==========================================================================*/
	public function data_server_penjualan()
		{
			$this->load->library('Datatables');
			$this->datatables
		->select('a.idPnj,b.nama_plg,c.nama_obat,c.jenis_obat, DATE_FORMAT(a.tgl_pnj, "%d-%m-%Y" ) as tanggal,a.jumlah,a.harga,a.total,a.bayar,a.kembalian,d.nama_peg')
				 ->from('penjualan a')
				 ->join('pelanggan b' , 'a.idPlg=b.idplg')
				 ->join('obat c' , 'a.idObat=c.idObat')
				 ->join('pegawai d' , ' a.idPgw=d.idPgw');
				 echo $this->datatables->generate();
		}
	public function data_view_obat()
		{
			$this->load->library('Datatables');
			$this->datatables
				 ->select('idObat,nama_obat,jenis_obat,jumlah,harga')
				 ->from('obat');
				 echo $this->datatables->generate();
		}
	public function data_view_pelanggan()
		{
			$this->load->library('Datatables');
			$this->datatables
				 ->select('idPlg,nama_plg,jk,alamat,telp')
				 ->from('pelanggan');
				 echo $this->datatables->generate();
		}
	public function data_view_pegawai()
		{
			$this->load->library('Datatables');
			$this->datatables
				 ->select('idPgw,nama_peg,jk,agama,alamat,telp,foto,profesi,username')
				 ->from('pegawai');
				 echo $this->datatables->generate();
		}								

	public function createPenjualan()
		{	
			$this->form_validation->set_rules('idPlg','idPlg','trim|required');
			$this->form_validation->set_rules('idObat','idObat','trim|required');
			$this->form_validation->set_rules('tgl_pnj','tgl_pnj','trim|required');
			$this->form_validation->set_rules('jumlah','jumlah','trim|required');
			$this->form_validation->set_rules('harga','harga','trim|required');
			$this->form_validation->set_rules('total','total','trim|required');
			$this->form_validation->set_rules('bayar','bayar','trim|required');
			$this->form_validation->set_rules('kembalian','kembalian','trim|required');
			$this->form_validation->set_rules('idPgw','idPgw','trim|required');
	
			$this->load->model('penjualan_models');
			//ambil data dari model   
			$data['obt'] = $this->penjualan_models->getdataobat();
			$data['plg'] = $this->penjualan_models->getdataplg();
			$data['pgw'] = $this->penjualan_models->getdatapgw();

		if($this->form_validation->run()==FALSE)
			{
				$this->load->view('tambah_penjualan',$data);
			
			} 
			else {	
				$this->penjualan_models->insertPenjualan();
				echo '<script>alert("You Have Successfully Created this record!");</script>';
				redirect('apotik/penjualan', 'refresh');
			} //else	
		} //end create penjualan

		// print penjualan
		public function printPenjualan($id)
		{	
			$data['penjualan']=$this->penjualan_models->getPenjualan($id);
			$this->load->view('report/preview_penjualan',$data);
		} //end print penjualan
		

		public function deletePenjualan($id)
		{
			$this->penjualan_models->delete($id);
			redirect('apotik/penjualan');
		} //end delete
		
/*END PENJUALAN ==========================================================================*/
}

/* End of file apotik.php */
/* Location: ./application/controllers/apotik.php */