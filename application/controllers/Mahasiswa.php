<?php

class Mahasiswa extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model', 'mahasiswa');
		$this->load->model('Jurusan_model', 'jurusan');
		$this->load->library('Page');
		$this->load->library('form_validation');
		$this->load->library('pagination');
	}
	public function index()
	{
		// query search
		if($this->input->post('submit')){
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword'] = $this->session->userdata('keyword');
		}
		$this->db->like('nama', $data['keyword']);
		$this->db->or_like('nrp', $data['keyword']);
		$this->db->from('mahasiswa');

		// set paginate
		$config['total_rows'] = $this->db->count_all_results();
		$config['base_url'] = 'http://localhost/ci-app/mahasiswa/index';
		$config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);
		$data['total_rows'] = $config['total_rows'];

		$data['judul'] = 'Daftar Mahasiswa';
		$data['mahasiswa'] = $this->mahasiswa->getMahasiswa($config['per_page'], $data['start'], $data['keyword']);
		$this->page->view('mahasiswa/index', $data);
	}

	public function form($id = 0)
	{
		if($this->input->post('submit')){
			$field['nama'] = $this->input->post('nama');
			$field['nrp'] = $this->input->post('nrp');
			$field['email'] = $this->input->post('email');
			$field['jurusan'] = $this->input->post('jurusan');

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			if ($this->form_validation->run() == FALSE	)
			{
				$data['judul'] = 'Tambah Mahasiswa';
				$this->page->view('mahasiswa/form', $data);
			}
			else
			{
				try{
					if($id){
						$this->mahasiswa->update($id, $field);
						$msg = 'Data Mahasiswa telah diubah!';
					}else{
						$this->mahasiswa->insert($field);
						$msg = 'Data Mahasiswa telah ditambahkan!';
					}
					$this->session->set_flashdata('msg', $msg);
					redirect('mahasiswa');
				}catch (Exception $e){
					$this->session->set_flashdata('msg', 'Data Mahasiswa gagal disimpan');
				}
			}
		}else{
			$data['jurusan'] = $this->jurusan->get_all();
			if($id == 0){
				$data['judul'] = 'Tambah Mahasiswa';
				$this->page->view('mahasiswa/form', $data);

			}else{
				$data['judul'] = 'Edit Data Mahasiswa';
				$data['data'] = $this->mahasiswa->find($id);
				$this->page->view('mahasiswa/form', $data);
			}
		}
	}

	public function delete($id)
	{
		try{
			$this->mahasiswa->delete($id);
			$msg = 'Data Mahasiswa berhasil dihapus';
			$this->session->set_flashdata('msg', $msg);
			redirect('mahasiswa', 'refresh');

		}catch (Exception $e){
			$this->session->set_flashdata('msg', 'Data Mahasiswa gagal dihapus');
		}
	}
}
