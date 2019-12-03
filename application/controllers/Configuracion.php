<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Configuracion extends CI_Controller {
    
        /*public function index()
        {        
            $includes['header'] = $this->load->view('includes/header','',TRUE);
            $includes['footer'] = $this->load->view('includes/footer','',TRUE);
            $this->load->view('')
        }*/
        public function sesion(){
            $this->load->view('login');
        }
        public function registrarse(){
            $this->load->view('register');
        }
        public function index()
        {
            $includes['header'] = $this->load->view('includes/header','',TRUE);
            $includes['footer'] = $this->load->view('includes/footer','',TRUE);
            $this->load->view('configuracion/elecciones', $includes);
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