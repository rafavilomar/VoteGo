<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesa extends CI_Controller {

    public function sesion()
    {
		$this->load->view('mesaElectoral/login');
	}
	

	/************************la casilla(nuevo)************************************************ */
	public function casilla()
    {
		$includes['header'] = $this->load->view('includes/header','',TRUE);
		$includes['footer'] = $this->load->view('includes/footer','',TRUE);
		
		$this->load->view('CasillaVotacion/verificarVotantes',$includes);
	}
	/****************************************************************************************** */
	

	public function validar()
	{
		$includes['header'] = $this->load->view('includes/header','',TRUE);
		$includes['footer'] = $this->load->view('includes/footer','',TRUE);
		$this->load->view('mesaElectoral/mesa', $includes);
	}
}
?>