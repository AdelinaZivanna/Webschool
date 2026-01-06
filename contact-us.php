<?php
$pageTitle = "Kontak";
include 'inc/header.php';
?>

<div class="hero-section">
    <div class="container">
        <h1>Hubungi Kami</h1>
        <p>Kami siap membantu menjawab pertanyaan Anda</p>
    </div>
</div>

<div class="articles-section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto; background: white; padding: 40px; border-radius: 16px; box-shadow: var(--shadow-lg);">
            <h2 style="text-align: center; margin-bottom: 30px; color: var(--text-dark);">Formulir Kontak</h2>
            <form style="display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--text-dark);">Nama</label>
                    <input type="text" style="width: 100%; padding: 12px; border: 2px solid var(--border-color); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 1rem;" placeholder="Masukkan nama Anda" required>
                </div>
                <div>
                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--text-dark);">Email</label>
                    <input type="email" style="width: 100%; padding: 12px; border: 2px solid var(--border-color); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 1rem;" placeholder="nama@email.com" required>
                </div>
                <div>
                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--text-dark);">Subjek</label>
                    <input type="text" style="width: 100%; padding: 12px; border: 2px solid var(--border-color); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 1rem;" placeholder="Subjek pesan" required>
                </div>
                <div>
                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--text-dark);">Pesan</label>
                    <textarea rows="6" style="width: 100%; padding: 12px; border: 2px solid var(--border-color); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 1rem; resize: vertical;" placeholder="Tulis pesan Anda di sini" required></textarea>
                </div>
                <button type="submit" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white; padding: 15px 30px; border: none; border-radius: 50px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: transform 0.3s; font-family: 'Poppins', sans-serif;">
                    Kirim Pesan <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>
