<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Votaciones extends CI_Controller {

    public function index()
    {
		$includes['header'] = $this->load->view('includes/header','',TRUE);
        $includes['footer'] = $this->load->view('includes/footer','',TRUE);
        $this->load->view('CasillaVotacion/verificarVotantes', $includes);
    }
    public function votar()
    {
		$includes['header'] = $this->load->view('includes/header','',TRUE);
        $includes['footer'] = $this->load->view('includes/footer','',TRUE);
        $this->load->view('CasillaVotacion/casilla_votacion', $includes);
    }

}


?>