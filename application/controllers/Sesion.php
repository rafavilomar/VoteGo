<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Sesion extends CI_Controller {
    
        public function index()
        {
            $user = $this->input->post('usuario');
            $pass = $this->input->post('contraseña');

            $this->load->model('user');
            $fila = $this->user->getUser($user);

            if($fila != null){
                if($fila->contraseña == $pass){
                    $data = array('user'=> $user,
                    'login'=>true
                    );
                    $this->session->set_userdata($data);
                    header('Location: '.base_url());
                }
                else{
                    header('Location: '.base_url('sesion/login'));
                }
            }
            else{
                header('Location: '.base_url('sesion/login'));
            }  
        }
        
        public function login(){
            $this->load->view('login');
        }
        public function registrarse(){
            $this->load->view('register');
        }
    
    }
    
    /* End of file Controllername.php */
    
?>