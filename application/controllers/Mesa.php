<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesa extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('login')){
			$includes['header'] = $this->load->view('includes/header','',TRUE);
			$includes['footer'] = $this->load->view('includes/footer','',TRUE);
			$this->load->view('mesaElectoral/mesa', $includes);
		}
		else{
			header('Location: '.base_url('sesion/login'));
		}
	}
}
?>