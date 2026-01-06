<?php
$pageTitle = "Artikel";
include 'inc/header.php';

// Sample articles data (in real app, this would come from database)
$articles = [
    [
        'id' => 1,
        'title' => 'Tips Belajar Efektif untuk Ujian Nasional',
        'category' => 'Pendidikan',
        'excerpt' => 'Pelajari strategi dan teknik belajar yang efektif untuk menghadapi ujian nasional dengan percaya diri dan mendapatkan hasil terbaik.',
        'date' => '15 Januari 2024',
        'author' => 'Admin',
        'image' => 'graduation'
    ],
    [
        'id' => 2,
        'title' => 'Peran Teknologi dalam Pendidikan Modern',
        'category' => 'Teknologi',
        'excerpt' => 'Eksplorasi bagaimana teknologi digital mengubah cara kita belajar dan mengajar di era modern ini.',
        'date' => '12 Januari 2024',
        'author' => 'Admin',
        'image' => 'laptop'
    ],
    [
        'id' => 3,
        'title' => 'Cara Mengelola Waktu Belajar dengan Baik',
        'category' => 'Tips & Trik',
        'excerpt' => 'Panduan lengkap untuk mengatur waktu belajar agar lebih produktif dan efisien dalam mencapai tujuan akademik.',
        'date' => '10 Januari 2024',
        'author' => 'Admin',
        'image' => 'clock'
    ],
    [
        'id' => 4,
        'title' => 'Pentingnya Pendidikan Karakter di Sekolah',
        'category' => 'Pendidikan',
        'excerpt' => 'Memahami pentingnya pendidikan karakter dalam membentuk kepribadian siswa yang baik dan berakhlak mulia.',
        'date' => '8 Januari 2024',
        'author' => 'Admin',
        'image' => 'heart'
    ],
    [
        'id' => 5,
        'title' => 'Belajar Online: Kelebihan dan Tantangannya',
        'category' => 'Teknologi',
        'excerpt' => 'Analisis mendalam tentang pembelajaran online, termasuk kelebihan, kekurangan, dan cara mengoptimalkannya.',
        'date' => '5 Januari 2024',
        'author' => 'Admin',
        'image' => 'globe'
    ],
    [
        'id' => 6,
        'title' => 'Strategi Menghadapi Stress Saat Ujian',
        'category' => 'Tips & Trik',
        'excerpt' => 'Tips praktis untuk mengelola stress dan kecemasan saat menghadapi ujian agar tetap tenang dan fokus.',
        'date' => '3 Januari 2024',
        'author' => 'Admin',
        'image' => 'meditation'
    ]
];

$icons = [
    'graduation' => 'fas fa-graduation-cap',
    'laptop' => 'fas fa-laptop',
    'clock' => 'fas fa-clock',
    'heart' => 'fas fa-heart',
    'globe' => 'fas fa-globe',
    'meditation' => 'fas fa-spa',
    'book' => 'fas fa-book',
    'lightbulb' => 'fas fa-lightbulb'
];
?>

<div class="hero-section">
    <div class="container">
        <h1>Artikel & Berita Sekolah</h1>
        <p>Dapatkan informasi terbaru, tips belajar, dan wawasan pendidikan yang bermanfaat untuk perkembangan akademik Anda</p>
    </div>
</div>

<div class="articles-section">
    <div class="container">
        <div class="section-header">
            <h2>Artikel Terbaru</h2>
            <p>Jelajahi koleksi artikel kami yang informatif dan inspiratif</p>
        </div>

        <div class="search-container">
            <input type="text" class="search-box" placeholder="Cari artikel..." id="searchInput">
            <i class="fas fa-search search-icon"></i>
        </div>

        <div class="articles-grid" id="articlesGrid">
            <?php foreach ($articles as $article): ?>
                <div class="article-card" data-title="<?php echo strtolower($article['title']); ?>" data-category="<?php echo strtolower($article['category']); ?>">
                    <div class="article-image">
                        <i class="<?php echo $icons[$article['image']] ?? $icons['book']; ?>"></i>
                    </div>
                    <div class="article-content">
                        <span class="article-category"><?php echo $article['category']; ?></span>
                        <h3 class="article-title"><?php echo $article['title']; ?></h3>
                        <p class="article-excerpt"><?php echo $article['excerpt']; ?></p>
                        <div class="article-meta">
                            <div class="article-date">
                                <i class="far fa-calendar"></i>
                                <span><?php echo $article['date']; ?></span>
                            </div>
                            <a href="detail_article.php?id=<?php echo $article['id']; ?>" class="read-more">
                                Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script>
    // Search functionality
    const searchInput = document.getElementById('searchInput');
    const articlesGrid = document.getElementById('articlesGrid');
    const articleCards = document.querySelectorAll('.article-card');

    searchInput.addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        
        articleCards.forEach(card => {
            const title = card.getAttribute('data-title');
            const category = card.getAttribute('data-category');
            
            if (title.includes(searchTerm) || category.includes(searchTerm)) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    });
</script>

<?php include 'inc/footer.php'; ?>
