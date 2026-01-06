<?php
$pageTitle = "Beranda";
include 'inc/header.php';
?>

<div class="hero-section">
    <div class="container">
        <h1>Selamat Datang di Webschool</h1>
        <p>Platform edukasi terdepan untuk pembelajaran yang lebih baik dan menyenangkan</p>
        <div style="margin-top: 30px;">
            <a href="article.php" style="display: inline-block; background: white; color: var(--primary-color); padding: 15px 30px; border-radius: 50px; text-decoration: none; font-weight: 600; transition: transform 0.3s;">
                Jelajahi Artikel <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<div class="articles-section">
    <div class="container">
        <div class="section-header">
            <h2>Artikel Populer</h2>
            <p>Baca artikel terpopuler dari koleksi kami</p>
        </div>

        <div class="articles-grid">
            <div class="article-card">
                <div class="article-image">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="article-content">
                    <span class="article-category">Pendidikan</span>
                    <h3 class="article-title">Tips Belajar Efektif untuk Ujian Nasional</h3>
                    <p class="article-excerpt">Pelajari strategi dan teknik belajar yang efektif untuk menghadapi ujian nasional dengan percaya diri dan mendapatkan hasil terbaik.</p>
                    <div class="article-meta">
                        <div class="article-date">
                            <i class="far fa-calendar"></i>
                            <span>15 Januari 2024</span>
                        </div>
                        <a href="detail_article.php?id=1" class="read-more">
                            Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="article-card">
                <div class="article-image">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="article-content">
                    <span class="article-category">Teknologi</span>
                    <h3 class="article-title">Peran Teknologi dalam Pendidikan Modern</h3>
                    <p class="article-excerpt">Eksplorasi bagaimana teknologi digital mengubah cara kita belajar dan mengajar di era modern ini.</p>
                    <div class="article-meta">
                        <div class="article-date">
                            <i class="far fa-calendar"></i>
                            <span>12 Januari 2024</span>
                        </div>
                        <a href="detail_article.php?id=2" class="read-more">
                            Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="article-card">
                <div class="article-image">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="article-content">
                    <span class="article-category">Tips & Trik</span>
                    <h3 class="article-title">Cara Mengelola Waktu Belajar dengan Baik</h3>
                    <p class="article-excerpt">Panduan lengkap untuk mengatur waktu belajar agar lebih produktif dan efisien dalam mencapai tujuan akademik.</p>
                    <div class="article-meta">
                        <div class="article-date">
                            <i class="far fa-calendar"></i>
                            <span>10 Januari 2024</span>
                        </div>
                        <a href="detail_article.php?id=3" class="read-more">
                            Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="article.php" style="display: inline-block; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white; padding: 15px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; transition: transform 0.3s;">
                Lihat Semua Artikel <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>
