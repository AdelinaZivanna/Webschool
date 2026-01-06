<?php
$pageTitle = "Beranda";
include 'inc/header.php';
?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/css/image/gambar1.jpg" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="assets/css/image/gambar2.jpg" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="assets/css/image/gambar3.jpg" class="d-block w-100" alt="Slide 3">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="hero-section">
    <div class="container">
        <h1>Selamat Datang di Webschool</h1>
        <p>Platform edukasi terdepan untuk pembelajaran yang lebih baik dan menyenangkan</p>
    </div>
</div>

<div class="articles-section">
    <div class="container">
        <div class="section-header">
            <h2>Artikel Populer</h2>
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
