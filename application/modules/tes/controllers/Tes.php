<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->_public_view= $this->config->item('public_view');
	}

	public function index()
	{
		$data=array('page_content' => 'tes');
		$this->load->view($this->_public_view,$data);
	}
	public function open()
	{
		$this->load->view('tes');
	}
}
