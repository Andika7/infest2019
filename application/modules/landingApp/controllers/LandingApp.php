<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingApp extends CI_Controller {

	function __Construct(){
		parent::__Construct ();
		 $this->load->database(); // load database
		 $this->load->model('LombaModel'); // load model 
	   }

	public function index()
	{
		$this->data['lombas'] = $this->LombaModel->getPosts(); 
		$this->load->view('landingApp', $this->data);
	}


}
