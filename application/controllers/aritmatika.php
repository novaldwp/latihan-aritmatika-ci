<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aritmatika extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('menu_hitung');
	}

	public function perkalian()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('a1', 'Angka Pertama', 'required|integer');
		$this->form_validation->set_rules('a2', 'Angka Kedua', 'required|integer');
		if($this->form_validation->run())
			{
				$data['a1'] = (int)$this->input->post('a1',TRUE);
				$data['a2'] = (int)$this->input->post('a2',TRUE);
				$data['hasil'] = $data['a1'] * $data['a2'];
			} else {
				$data['a1'] = 0;
				$data['a2'] = 0;
				$data['hasil'] = 0;
			}
		$this->load->view('perkalian',$data);	
	}


	public function pembagian()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('a1','Angka Pertama','required|is_natural_no_zero');
		$this->form_validation->set_rules('a2','Angka Kedua','required|is_natural_no_zero');
		if($this->form_validation->run())
			{
				$data['a1'] = (int)$this->input->post('a1',TRUE);
				$data['a2'] = (int)$this->input->post('a2',TRUE);
				$data['hasil'] = $data['a1'] / $data['a2'];
			} else {
				$data['a1'] = 0;
				$data['a2'] = 0;
				$data['hasil'] = 0;
			}
		$this->load->view('pembagian',$data);	
	}


	public function penjumlahan()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('a1','Angka Pertama','required|integer');
		$this->form_validation->set_rules('a2','Angka Kedua','required|integer');
		if($this->form_validation->run())
			{
				$data['a1'] = (int)$this->input->post('a1',TRUE);
				$data['a2'] = (int)$this->input->post('a2',TRUE);
				$data['hasil'] = $data['a1'] + $data['a2'];
			} else {
				$data['a1'] = 0;
				$data['a2'] = 0;
				$data['hasil'] = 0;
			}
		$this->load->view('penjumlahan',$data);		
	}

	public function pengurangan()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('a1','Angka Pertama','required|integer');
		$this->form_validation->set_rules('a2','Angka Kedua','required|integer');
		if($this->form_validation->run())
			{
				$data['a1'] = (int)$this->input->post('a1',TRUE);
				$data['a2'] = (int)$this->input->post('a2',TRUE);
				$data['hasil'] = $data['a1'] - $data['a2'];
			} else {
				$data['a1'] = 0;
				$data['a2'] = 0;
				$data['hasil'] = 0;
			}
		$this->load->view('pengurangan',$data);	
	}
}

/* End of file aritmatika.php */
/* Location: ./application/controllers/aritmatika.php */