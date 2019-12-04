<?php
    function saveEleccion($dato){
        $CI =& get_instance();
        $data = array(
            'nombre' => $dato->nombre,
            'descripcion'  => $dato->descripcion,
            'fecha'  => $dato->fecha
        );
        $CI->db->insert('elecciones', $data);
        saveNiveles($dato->nvlNombre, $dato->nvlDescripcion, $dato->nombre);
    }

    function savePartidos($dato){
        $CI =& get_instance();
        $eleccion = Consultas($dato->eleccion, 'nombre', 'elecciones');
        echo "Entre";
        $data = array(
            'nombre' => $dato->nombre,
            'siglas'  => $dato->siglas,
            'color'  => $dato->color,
            'id_elecciones' => $eleccion->id_elecciones
        );
        $CI->db->insert('partidos', $data);
    }
    function saveVotantes($dato){
        $CI =& get_instance();
        $data = array(
            'nombreV' => $dato->nombreV,
            'nombreC'  => $dato->nombreC,
            'partidoC'  => $dato->partidoC,
            'cargoC' => $dato->cargoC
            
        );
        $CI->db->insert('mivoto', $data);
    }

    function saveCandidatos($dato){
        $CI =& get_instance();
        $partido = Consultas($dato->partido, 'nombre', 'partidos');
        $nivel = Consultas($dato->nivel, 'titulo', 'niveles');
        $data = array(
            'nombres' => $dato->nombre,
            'apellidos'  => $dato->apellido,
            'foto'  => $dato->foto,
            'cedulaC' => $dato->cedula,
            'id_partidos' => $partido->id_partidos,
            'id_niveles' => $nivel->id_niveles
        );
        $CI->db->insert('candidatos', $data);
    }
    
    //Funcion para guardar los niveles
    function saveNiveles($titulo, $desc, $elec)
    {
        $CI =& get_instance();
        //para los niveles
        $todo = array();
        $eleccion = Consultas($elec, 'nombre', 'elecciones');//En esta variable almacenamos la eleccion a la cual pertenera el nivel
        foreach($titulo as $k=>$nom){
            $todo[] = array('id_elecciones'=>$eleccion->id_elecciones, 
                            'titulo'=>$nom, 
                            'descripcion'=>$desc[$k]);
        }
        $CI->db->insert_batch('niveles', $todo);
        
    }
    function showConfig($tabla){
        $CI =& get_instance();
        $resultado = $CI->db->get($tabla);
        return $resultado->result();
    }

    //!Consulta especifica
    //Es una funcion un poco mas especifica que la anterior ya que posee una condicion
    function Consultas($nombre, $columna, $tabla){
        $CI =& get_instance();
        $CI->db->where($columna, $nombre);
        $resultado = $CI->db->get($tabla);
        return $resultado->row();
    }
?>