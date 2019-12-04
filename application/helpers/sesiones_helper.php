<?php
    function saveAdmin($dato)
    {
        $CI =& get_instance();
        $CI->db->insert('admins', $dato);
    }
?>