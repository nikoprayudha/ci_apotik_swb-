<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('cetak_model');
		$this->load->library('dompdf_gen');
		$this->load->helper('file');
	}

	public function index()
	{
		$data['pegawai_tampil']=$this->cetak_model->view_pegawai();
		$this->load->view('report/preview_pegawai',$data);
	}

	public function viewObat()
	{
		$data['obat_tampil']=$this->cetak_model->view_obat();
		$this->load->view('report/preview_obat',$data);
	}

	public function viewSupplier()
	{
		$data['supplier_tampil']=$this->cetak_model->view_supplier();
		$this->load->view('report/preview_supplier',$data);
	}

	public function viewPelanggan()
	{
		$data['pelanggan_tampil']=$this->cetak_model->view_pelanggan();
		$this->load->view('report/preview_pelanggan',$data);
	}

	public function viewPembelian()
	{
		$data['pembelian_tampil']=$this->cetak_model->view_pembelian();
		$this->load->view('report/preview_pembelian',$data);
	}

	 public function viewExcel() {
	 $data['user']=$this->cetak_model->getPenjualanExcel();
	 $this->load->view('report/preview_excel_penjualan',$data);
	 }

	public function export_excel(){
	 $data['user']=$this->cetak_model->getPenjualanExcel();
	 $this->load->view('report/print_excel_penjualan',$data);
	 }



// -------------------------------------------------------------------------------

	public function cetakPegawai() 
	{	
		$data['pegawai_tampil']=$this->cetak_model->view_pegawai();
		$this->load->view('report/print_pegawai',$data);
		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();

		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("LaporanPegawai.pdf");

		unset($html);
		unset($dompdf);
	}

	public function cetakObat() 
	{	
		$data['obat_tampil']=$this->cetak_model->view_obat();
		$this->load->view('report/print_obat',$data);
		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();

		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("LaporanObat.pdf");

		unset($html);
		unset($dompdf);
	}

	public function cetakSupplier() 
	{	
		$data['supplier_tampil']=$this->cetak_model->view_supplier();
		$this->load->view('report/print_supplier',$data);
		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();

		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("LaporanSupplier.pdf");

		unset($html);
		unset($dompdf);
	}

	public function cetakPelanggan() 
	{	
		$data['pelanggan_tampil']=$this->cetak_model->view_pelanggan();
		$this->load->view('report/print_pelanggan',$data);
		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();

		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("LaporanPelanggan.pdf");

		unset($html);
		unset($dompdf);
	}

	public function cetakPembelian() 
	{	
		$data['pembelian_tampil']=$this->cetak_model->view_pembelian();
		$this->load->view('report/print_pembelian',$data);
		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();

		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("LaporanPembelian.pdf");

		unset($html);
		unset($dompdf);
	}
	
	public function cetakPenjualan($id) 
	{	
		$this->load->model('penjualan_models');
		$data['penjualan']=$this->penjualan_models->getPenjualan($id);
		$this->load->view('report/print_penjualan',$data);
		$paper_size = 'A7';
		$orientation = 'potrait';
		$html = $this->output->get_output();

		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("LaporanPenjualan.pdf");

		unset($html);
		unset($dompdf);
	}

}

/* End of file cetak.php */
/* Location: ./application/controllers/cetak.php */