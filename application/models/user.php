<?php
    class User extends CI_Model{
        public function getUser($usuario = '')
        {
            $result = $this->db->query('SELECT * FROM Admins WHERE usuario = "'.$usuario.'" Limit 1');
            if($result->num_rows() > 0){
                return $result->row();
            }else{
                return null;
            }
        }
    }
?>