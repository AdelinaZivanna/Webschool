<?php
$pageTitle = "Tambah Artikel";
include 'inc/header.php';
?>

<div class="hero-section">
    <div class="container">
        <h1>Tambah Artikel</h1>
        <p>Unggah artikel dan informasi terbaru sekolah</p>
    </div>
</div>
<div class="articles-section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto; background: white; padding: 40px; border-radius: 16px; box-shadow: var(--shadow-lg);">
            <h2 style="text-align: center; margin-bottom: 30px; color: var(--text-dark);">Form Upload Artikel</h2>
            <form method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">
                        Judul Artikel
                    </label>
                    <input type="text" name="judul"
                           placeholder="Masukkan judul artikel"
                           required
                           style="width: 100%; padding: 12px; border: 2px solid var(--border-color); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 1rem;">
                </div>
                <div>
                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">
                        Gambar Artikel
                    </label>
                    <input type="file" name="gambar" accept="image/*"
                           style="width: 100%; padding: 12px; border: 2px dashed var(--border-color); border-radius: 8px; background: #f9fafb; font-family: 'Poppins', sans-serif;">
                </div>
                <div>
                    <label style="display: block; margin-bottom: 8px; font-weight: 500;">
                        Isi Artikel
                    </label>
                    <textarea name="isi" rows="8"
                              placeholder="Tulis isi artikel di sini..."
                              required
                              style="width: 100%; padding: 12px; border: 2px solid var(--border-color); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 1rem; resize: vertical;"></textarea>
                </div>
                <button type="submit"
                        style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white; padding: 15px 30px; border: none; border-radius: 50px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: transform 0.3s; font-family: 'Poppins', sans-serif;">Upload Artikel <i class="fas fa-upload"></i>
                </button>
            </form>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>
