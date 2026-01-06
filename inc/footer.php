    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3><i class="fas fa-graduation-cap"></i> Webschool</h3>
                    <p>Platform edukasi terdepan untuk pembelajaran yang lebih baik dan menyenangkan.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="article.php">Artikel</a></li>
                        <li><a href="contact-us.php">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Kategori</h4>
                    <ul>
                        <li><a href="#">Pendidikan</a></li>
                        <li><a href="#">Teknologi</a></li>
                        <li><a href="#">Tips & Trik</a></li>
                        <li><a href="#">Berita</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Kontak</h4>
                    <ul>
                        <li><i class="fas fa-envelope"></i> info@webschool.com</li>
                        <li><i class="fas fa-phone"></i> +62 123 456 789</li>
                        <li><i class="fas fa-map-marker-alt"></i> Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Webschool. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');
        
        if (hamburger) {
            hamburger.addEventListener('click', () => {
                hamburger.classList.toggle('active');
                navMenu.classList.toggle('active');
            });
        }

        // Close menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
    </script>
</body>
</html>
