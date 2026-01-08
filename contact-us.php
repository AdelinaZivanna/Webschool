<?php
$pageTitle = "Kontak";
include 'inc/header.php';
include 'inc/config.php';

$successMessage = '';
$errorMessage = '';


// Proses simpan data kontak ke database
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama  = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pesan = trim($_POST['pesan'] ?? '');
    

    if ($nama && $email && $pesan) {
        $data = [
            'nama'  => $nama,
            'email' => $email,
            'pesan' => $pesan,
        ];


        $insertId = $db->insert('contact', $data);
        if ($insertId) {
            $successMessage = 'Pesan berhasil dikirim.';
        } else {
            $errorMessage = 'Gagal menyimpan pesan. Silakan coba lagi.';
        }
    } else {
        $errorMessage = 'Semua kolom wajib diisi.';
    }
}

// Ambil data kontak terbaru dari database
$contacts = $db->orderBy('created_at', 'DESC')->get('contact');
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

            <?php if ($successMessage): ?>
                <div class="alert alert-success" role="alert">
                    <?= htmlspecialchars($successMessage); ?>
                </div>
            <?php endif; ?>

            <?php if ($errorMessage): ?>
                <div class="alert alert-danger" role="alert">
                    <?= htmlspecialchars($errorMessage); ?>
                </div>
            <?php endif; ?>

            <form method="POST" style="display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--text-dark);">Nama</label>
                    <input type="text" name="nama" style="width: 100%; padding: 12px; border: 2px solid var(--border-color); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 1rem;" placeholder="Masukkan nama Anda" required>
                </div>

                <div>
                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--text-dark);">Email</label>
                    <input type="email" name="email" style="width: 100%; padding: 12px; border: 2px solid var(--border-color); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 1rem;" placeholder="nama@email.com" required>
                </div>

                <div>
                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--text-dark);">Pesan</label>
                    <textarea name="pesan" rows="6" style="width: 100%; padding: 12px; border: 2px solid var(--border-color); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 1rem; resize: vertical;" placeholder="Tulis pesan Anda di sini" required></textarea>
                </div>

                <button type="submit" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white; padding: 15px 30px; border: none; border-radius: 50px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: transform 0.3s; font-family: 'Poppins', sans-serif;">
                    Kirim Pesan <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</div>



    <?php include 'inc/footer.php'; ?>