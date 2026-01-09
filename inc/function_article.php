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

   

?>