<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Page
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function view($view,$data = [])
	{
		$this->ci->load->view('templates/header', $data);
		$this->ci->load->view('templates/footer');
		$this->ci->load->view($view, $data);
	}
}
