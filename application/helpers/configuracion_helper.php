<?php
    function saveEleccion($dato){
        $CI =& get_instance();
        $data = array(
            'nombre' => $dato->nombre,
            'descripcion'  => $dato->descripcion,
            'fecha'  => $dato->fecha
        );
        $CI->db->insert('elecciones', $data);
    }

    function savePartidos($dato){
        $CI =& get_instance();
        $data = array(
            'nombre' => $dato->nombre,
            'siglas'  => $dato->siglas,
            'color'  => $dato->color
        );
        $CI->db->insert('partidos', $data);
    }

    function saveCandidatos($dato){
        $CI =& get_instance();
        $data = array(
            'nombres' => $dato->nombre,
            'apellidos'  => $dato->apellido,
            'foto'  => $dato->foto,
            'cedulaC' => $dato->cedula
        );
        $CI->db->insert('candidatos', $data);
    }
?>