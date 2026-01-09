<?php
   require_once 'config.php';

function getAllArticle() {
    global $db;
    $get = $db->orderBy('tanggal', 'DESC')->get('artikel');
    return $get;
   }

function getArticleById($articles)
{
    $id = 0;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $article = $articles[1];
    if (isset($articles[$id])) {
        $article = $articles[$id];
    }

    return $article;
}

    function get_article(){
    global $db;
    $get = $db->get('`artikel`');
    return $get;
    }
   
?>