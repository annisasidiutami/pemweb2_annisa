<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	public function index(){
		$this->load->helper('form');
		$this->load->model('mahasiswa_model');
		$this->load->model('prodi_model');
		$data['list_mhs'] = $this->mahasiswa_model->get_mahasiswa();
		$data['list_prodi'] = $this->prodi_model->get_prodi();
//		print_r($data);
//		die();

	 	$this->load->view('header');
	 	$this->load->view('mahasiswa/index', $data);
	 	$this->load->view('footer');
	}

	public function mahasiswa_kirim(){
		$this->load->model('mahasiswa_model', 'mhs');
		$this->load->model('prodi_model');
		$this->load->helper('form');

		$this->mhs->nim = $this->input->post('nim');
		$this->mhs->nama = $this->input->post('nama_mahasiswa');
		$this->mhs->gender = $this->input->post('jenis_kelamin');
		$this->mhs->tgl_lahir = $this->input->post('tanggal_lahir');
		$this->mhs->tmp_lahir = $this->input->post('tempat_lahir');
		$this->mhs->prodi_kode = $this->input->post('program_studi');
		$this->mhs->ipk = $this->input->post('ipk');

		$this->mhs->create_mahasiswa();

		$data['list_mhs'] = $this->mhs->get_mahasiswa();
		$data['list_prodi'] = $this->prodi_model->get_prodi();

	 	$this->load->view('header');
	 	$this->load->view('mahasiswa/index', $data);
	 	$this->load->view('footer');
	}

	public function edit_mahasiswa($nim){
		$this->load->helper('form');
		$this->load->model('mahasiswa_model');
		$this->load->model('prodi_model');
		$data['list_mhs'] = $this->mahasiswa_model->get_mahasiswa_id($nim);
		$data['list_prodi'] = $this->prodi_model->get_prodi();
//		var_dump($data['list_mhs'][0]);
//		die();

	 	$this->load->view('header');
	 	$this->load->view('mahasiswa/edit_form', $data);
	 	$this->load->view('footer');
	}

	public function mahasiswa_edit($nim){
		$this->load->model('mahasiswa_model', 'mhs');
		$this->load->model('prodi_model');
		$this->load->helper('form');

		$this->mhs->nama = $this->input->post('nama_mahasiswa');
		$this->mhs->gender = $this->input->post('jenis_kelamin');
		$this->mhs->tgl_lahir = $this->input->post('tanggal_lahir');
		$this->mhs->tmp_lahir = $this->input->post('tempat_lahir');
		$this->mhs->prodi_kode = $this->input->post('program_studi');
		$this->mhs->ipk = $this->input->post('ipk');

		$this->mhs->update_mahasiswa($nim);

		$data['list_mhs'] = $this->mhs->get_mahasiswa();
		$data['list_prodi'] = $this->prodi_model->get_prodi();

	 	$this->load->view('header');
	 	$this->load->view('mahasiswa/index', $data);
	 	$this->load->view('footer');
	}

	public function mahasiswa_hapus($nim){
		$this->load->model('mahasiswa_model', 'mhs');
		$this->load->model('prodi_model');
		$this->load->helper('form');

		$this->mhs->delete_mahasiswa($nim);

		$data['list_mhs'] = $this->mhs->get_mahasiswa();
		$data['list_prodi'] = $this->prodi_model->get_prodi();

	 	$this->load->view('header');
	 	$this->load->view('mahasiswa/index', $data);
	 	$this->load->view('footer');
	}
}
