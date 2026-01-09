<?php
   require_once 'config.php';

   function getAllArticle() {
    global $db;
    $get = $db->orderBy('tanggal', 'DESC')->get('artikel');
    return $get;
   }

   function getArticleById($id) {
    global $db;
    $db->where('id', $id);
    return $db->getOne('artikel');
}

    function get_article(){
    global $db;
    $get = $db->get('`artikel`');
    return $get;
    }

    function get_article_by_id($id, $column) {
        global $db;
        $db->where ("id", $id);
        $get = $db->getOne ("`artikel`");
        return $get[$column];
    }

   
?>