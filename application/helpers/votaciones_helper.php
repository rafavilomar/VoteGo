<?php
    
    function verificarVotante($cedula){
        $CI =& get_instance();
        $CI->db->where('cedulaV', $cedula);
        $resultado = $CI->db->get('votantes');
        if($resultado->num_rows() > 0){
            header("Location: ". base_url('votaciones/votar'));
        }
        else{
            header("Location: ". base_url('votaciones'));
        }
        return $resultado->result();
    }
?>