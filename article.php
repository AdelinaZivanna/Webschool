<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$pageTitle = "Artikel";
include 'inc/header.php';
include 'inc/function_article.php';

$articles = getAllArticle();
?>

<div class="hero-section">
    <div class="container">
        <h1>Artikel & Berita Sekolah</h1>
        <p>Dapatkan informasi terbaru dan wawasan pendidikan</p>
    </div>
</div>

<div class="articles-section">
    <div class="container">
        <div class="section-header">
            <h2>Artikel Terbaru</h2>
            <p>Jelajahi artikel informatif dan inspiratif</p>
        </div>

        <?php if (empty($articles)) : ?>
            <p style="text-align:center;">Tidak ada artikel.</p>
        <?php else : ?>
            <div class="articles-grid">
                <?php foreach ($articles as $a) : ?>

                    <div class="article-card">

                        <?php if (!empty($a['gambar'])) : ?>
                            <div class="article-image">
                                <img src="assets/image/<?= htmlspecialchars($a['gambar']) ?>"
                                     alt="<?= htmlspecialchars($a['judul']) ?>">
                            </div>
                        <?php endif; ?>

                        <div class="article-content">
                            <h3 class="article-title">
                                <?= htmlspecialchars($a['judul']) ?>
                            </h3>

                            <?php
                            $preview = strip_tags($a['isi']);
                            if (strlen($preview) > 180) {
                                $preview = substr($preview, 0, 180) . '...';
                            }
                            ?>

                            <p class="article-preview">
                                <?= htmlspecialchars($preview) ?>
                            </p>

                            <div class="article-meta">
                                <span>
                                    <i class="far fa-calendar"></i>
                                    <?= date('d M Y', strtotime($a['tanggal'])) ?>
                                </span>

                                <a href="detail_article.php?id=<?= $a['id'] ?>" class="read-more">
                                    Baca →
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'inc/footer.php'; ?>
