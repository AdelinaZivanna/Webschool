<?php
require_once "config.php";

    function get_homepage(){
        global $db;
        $get = $db->get('`image_homepage`');
        return $get;
    }


?>