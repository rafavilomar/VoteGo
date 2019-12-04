<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Votaciones extends CI_Controller {

    public function __construct()
	{
		parent::__construct();	

		$this->load->model('modelo');
	}


    public function index()
    {
		$includes['header'] = $this->load->view('includes/header','',TRUE);
        $includes['footer'] = $this->load->view('includes/footer','',TRUE);
        $this->load->view('CasillaVotacion/verificarVotantes', $includes);
    }
    public function votar()
    {
        

        $data = array();

        $data['query']=$this->modelo->cargarCandidatos();
        //echo var_dump($data);

		/*$includes['header'] = $this->load->view('includes/header','',TRUE);
        $includes['footer'] = $this->load->view('includes/footer','',TRUE);*/
        $this->load->view('CasillaVotacion/casilla_votacion', $data);
     }

    /*************************los voletines(nuevo)************************************************ */
    public function Voletines()
    {
            /*********************a qui hara falta deseguro un foreach: lo pondre aqui por siacaso_ ->
             * foreach($_POST as $clave=>$valor){
             * elmensaje= str_replace("{{$clave}}", $valor,$elmensaje)
             * }
             * 
             * ************************ */
            
            // $dati= array();

           
        function getSslPage($url){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_REFERER, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $rs=curl_exec($ch);
            curl_close($ch);
            return $rs;

        }

  $dati=$this->modelo->cargarExportar();

             foreach ($dati as $mostrar) {
                 
             
            $elmensaje = $mostrar->nombreV." Voto por: ".$mostrar->nombreC."\n Partido: ".$mostrar->partidoC."\n Cargo: ".$mostrar->cargoC;

        $apiToken = "914329277:AAEOTFKPNJeEBy8nxb4GcPGg4U6l_s8RsaM";
        $data=[
            'chat_id'=>'-1001267509599',
            'text'=> $elmensaje
        ];

        $response=
        getSslPage("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));

}
/*$token = "914329277:AAEOTFKPNJeEBy8nxb4GcPGg4U6l_s8RsaM";
$id = "-100841282388";
$urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
$msg = "porfa vor y funcione";
echo var_dump($urlMsg ."\n///////////////////");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlMsg);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
echo var_dump(curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 //echo var_dump($ch);
$server_output = curl_exec($ch);

curl_close($ch);*/

    $dato = array();

    $dato['mivoto']=$this->modelo->cargarExportar();
    $this->load->view('CasillaVotacion/exportar',$dato);

    $this->modelo->borrador();
	
    }


   /* public function reportespdf(){
        $dato = array();

        $dato['mivoto']=$this->modelo->cargarExportar();
        $this->load->view('CasillaVotacion/exportar',$dato);
    }*/

    

}


?>