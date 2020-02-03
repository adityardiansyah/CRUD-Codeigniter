<?php

class Jurusan_model extends CI_Model{
	public function get_all()
	{
		return $this->db->get('jurusan')->result_array();
	}
}
