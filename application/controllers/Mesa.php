<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesa extends CI_Controller {

    public function sesion()
    {
<<<<<<< HEAD
		$this->load->view('login');
    }
=======
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
	

>>>>>>> 558a027e19a7986146bb1ad8ef696b3eb1fd3699
	public function validar()
	{
		$includes['header'] = $this->load->view('includes/header','',TRUE);
		$includes['footer'] = $this->load->view('includes/footer','',TRUE);
		$this->load->view('mesaElectoral/mesa', $includes);
	}
}
?>