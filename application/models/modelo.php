<?php


class Modelo extends CI_Model {
    public function __construct()
	{
		parent::__construct();	
        $this->load->database();
		
    }

    function cargarCandidatos(){
        $this->db->select('*');
        $this->db->from('candidatos');
        $this->db->join('partidos','candidatos.id_partidos=partidos.id_partidos');
        $this->db->join('niveles','candidatos.id_niveles=niveles.id_niveles');
        return  $this->db->get();
    }

        
        /*foreach ($query->result() as $key) {
            echo $key->nombre.'<br>';
            echo $key->nombres.'<br>';

        }

       /* $query = $this->db->get();

        return $query->result();*/
    }



/* End of file Controllername.php */
?>
