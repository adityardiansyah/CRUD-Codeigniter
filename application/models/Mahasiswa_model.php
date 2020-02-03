<?php

class Mahasiswa_model extends CI_Model{
	public function getAllMahasiswa()
	{
		return $this->db->get('mahasiswa')->result_array();
	}

	public function getMahasiswa($limit, $start, $keyword)
	{
		$this->db->select('mahasiswa.*, jurusan.nama as nama_jurusan');
		$this->db->join('jurusan','jurusan.id = mahasiswa.jurusan','left');
		if($keyword){
			$this->db->like('mahasiswa.nama', $keyword);
			$this->db->or_like('mahasiswa.nrp', $keyword);
		}
		return $this->db->get('mahasiswa', $limit, $start)->result_array();
	}

	public function find($id)
	{
		return $this->db->get_where('mahasiswa', ['id' => $id])->row();
	}

	public function update($id, $data)
	{
		$this->db->update('mahasiswa', $data, ['id'=>$id]);
	}

	public function insert($data)
	{
		$this->db->insert('mahasiswa', $data);
	}

	public function delete($id)
	{
		$this->db->delete('mahasiswa', ['id'=>$id]);
	}

	public function get_count_all()
	{
		return $this->db->get('mahasiswa')->num_rows();
	}
}
