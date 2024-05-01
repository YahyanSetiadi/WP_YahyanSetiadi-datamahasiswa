<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('V_index');
	}
	public function form()
	{
		$this->load->view('V_form');
	}
	public function proses() {
		$this->load->model(['ModelForm']);
		$data = [
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'kelas' => $this->input->post('kelas'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama'),
			'prodi' => $this->input->post('prodi'),
			'biaya_kuliah' =>$this->ModelForm->getBiaya($this->input->post('prodi')) 
		];
		$this->load->view('v_tampil', $data);
	}
}
