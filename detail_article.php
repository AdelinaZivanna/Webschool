<?php
error_reporting(E_ALL);   
ini_set('display_errors', 1);   
ini_set('display_startup_errors', 1);
include 'inc/function_article.php';

$articles = getAllArticle();
$article = getArticleById($articles); 


$pageTitle = $article['judul'];
include 'inc/header.php';
?>

<div class="container">
    <a href="article.php" class="back-button">
        <i class="fas fa-arrow-left"></i> Kembali ke Daftar Artikel
    </a>
</div>

<article class="article-detail">
    <div class="article-header">
        <div class="container">
            <span class="category">ARTIKEL</span>
            <h1><?php echo $article['judul']; ?></h1>
            <div class="meta-info">
                <span>
                    <i class="far fa-calendar"></i>
                    <?php echo $article['tanggal']; ?>
                </span>
            </div>
        </div>
    </div>
    
  
        <div class="article-content-text">
            <?php echo $article['isi']; ?>
        </div>
    </div>
</article>

<?php include 'inc/footer.php'; ?>
