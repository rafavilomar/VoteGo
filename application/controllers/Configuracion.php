<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Configuracion extends CI_Controller {
        public $eleccion;
        public $partido;
    
        public function index()
        {
            if($this->session->userdata('login')){
                $includes['header'] = $this->load->view('includes/header','',TRUE);
                $includes['footer'] = $this->load->view('includes/footer','',TRUE);
                $this->load->view('configuracion/elecciones', $includes);
            }
            else{
                header('Location: '.base_url('sesion/login'));
            }
        }
        public function partidos()
        {
            $includes['header'] = $this->load->view('includes/header','',TRUE);
            $includes['footer'] = $this->load->view('includes/footer','',TRUE);
            $this->load->view('configuracion/partidos', $includes);
        }
        public function candidatos()
        {
            $includes['header'] = $this->load->view('includes/header','',TRUE);
            $includes['footer'] = $this->load->view('includes/footer','',TRUE);
            $this->load->view('configuracion/candidatos', $includes);
        }
    
    }
    
    /* End of file Configuracion.php */
    
?>