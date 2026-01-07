<?php
require_once "config.php";

function get_galery(){
        global $db;
        $get = $db->get('`galeri`');
        return $get;
    }

    function get_galery_by_id($id, $column) {
        global $db;
        $db->where ("id", $id);
        $get = $db->getOne ("`galeri`");
        return $get[$column];
    }
?>