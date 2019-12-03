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

    function saveNiveles($titulo, $desc, $elec)
    {
        $CI =& get_instance();
        //para los niveles
        $todo = array();
        $eleccion = Consultas($elec, 'nombre', 'elecciones');
        foreach($titulo as $k=>$nom){
            $todo[] = array('id_elecciones'=>$eleccion->id_elecciones, 
                            'titulo'=>$nom, 
                            'descripcion'=>$desc[$k]);
        }
        $CI->db->insert_batch('niveles', $todo);
        
    }
    
    /*function saveNiveles()
    {
        $CI =& get_instance();
        //para los niveles
        $nvlNombre = $_POST['nvlNombre'];
        $nvlDescripcion = $_POST['nvlDescripcion'];
        $todo = array();
        $eleccion = Consultas($dato->eleccion, 'nombre', 'elecciones');
        foreach($nvlNombre as $k=>$nom){
            $todo[] = array($eleccion->id_elecciones, $nom, $nvlDescripcion[$k]);
        }
        $CI->db->build_insert()
        
    }*/

    //!Consulta especifica
    function Consultas($nombre, $columna, $tabla){
        $CI =& get_instance();
        $CI->db->where($columna, $nombre);
        $resultado = $CI->db->get($tabla);
        return $resultado->row();
    }
?>