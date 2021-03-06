<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller
{
	public function index(){
		$this->load->helper('form');
		$this->load->model('dosen_model');
		$this->load->model('prodi_model');
		$data['list_dsn'] = $this->dosen_model->get_dosen();
		$data['list_prodi'] = $this->prodi_model->get_prodi();

		$this->load->view('header');
	 	$this->load->view('dosen/index', $data);
	 	$this->load->view('footer');
	}

	public function dosen_kirim(){
		$this->load->model('dosen_model', 'dsn');
		$this->load->model('prodi_model');
		$this->load->helper('form');

		$this->dsn->nidn = $this->input->post('nidn');
		$this->dsn->nama = $this->input->post('nama_dosen');
		$this->dsn->gender = $this->input->post('jenis_kelamin');
		$this->dsn->tgl_lahir = $this->input->post('tanggal_lahir');
		$this->dsn->tmp_lahir = $this->input->post('tempat_lahir');
		$this->dsn->prodi_kode = $this->input->post('program_studi');
		$this->dsn->pendidikan_akhir = $this->input->post('pendidikan_akhir');

		$this->dsn->create_dosen();

		$data['list_dsn'] = $this->dsn->get_dosen();
		$data['list_prodi'] = $this->prodi_model->get_prodi();

	 	$this->load->view('header');
	 	$this->load->view('dosen/index', $data);
	 	$this->load->view('footer');
	}

	public function edit_dosen($nidn){
		$this->load->helper('form');
		$this->load->model('dosen_model');
		$this->load->model('prodi_model');
		$data['list_dsn'] = $this->dosen_model->get_dosen_id($nidn);
		$data['list_prodi'] = $this->prodi_model->get_prodi();

	 	$this->load->view('header');
	 	$this->load->view('dosen/edit_form', $data);
	 	$this->load->view('footer');
	}

	public function dosen_edit($nidn){
		$this->load->model('dosen_model', 'dsn');
		$this->load->model('prodi_model');
		$this->load->helper('form');

		$this->dsn->nama = $this->input->post('nama_dosen');
		$this->dsn->gender = $this->input->post('jenis_kelamin');
		$this->dsn->tgl_lahir = $this->input->post('tanggal_lahir');
		$this->dsn->tmp_lahir = $this->input->post('tempat_lahir');
		$this->dsn->prodi_kode = $this->input->post('program_studi');
		$this->dsn->pendidikan_akhir = $this->input->post('pendidikan_akhir');

		$this->dsn->update_dosen($nidn);

		$data['list_dsn'] = $this->dsn->get_dosen();
		$data['list_prodi'] = $this->prodi_model->get_prodi();

	 	$this->load->view('header');
	 	$this->load->view('dosen/index', $data);
	 	$this->load->view('footer');
	}

	public function dosen_hapus($nidn){
		$this->load->model('dosen_model', 'dsn');
		$this->load->model('prodi_model');
		$this->load->helper('form');

		$this->dsn->delete_dosen($nidn);

		$data['list_dsn'] = $this->dsn->get_dosen();
		$data['list_prodi'] = $this->prodi_model->get_prodi();

	 	$this->load->view('header');
	 	$this->load->view('dosen/index', $data);
	 	$this->load->view('footer');
	}
}
