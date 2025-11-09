<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelajari Lebih Lanjut | Pencegahan Kebakaran Hutan</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --fire-orange: #FF4500;
            --forest-green: #2E8B57;
            --dark-bg: #1C1C1C;
            --white: #FFFFFF;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: var(--dark-bg);
            color: var(--white);
            line-height: 1.6;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* Header Styles */
        header {
            padding: 1.5rem 0;
            background-color: rgba(28, 28, 28, 0.9);
            position: fixed;
            width: 100%;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 1.8rem;
            color: var(--white);
            text-decoration: none;
        }
        
        .logo span {
            color: var(--fire-orange);
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav li {
            margin-left: 2rem;
        }
        
        nav a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        nav a:hover {
            color: var(--fire-orange);
        }
        
        /* Page Header */
        .page-header {
            padding: 10rem 0 5rem;
            background: linear-gradient(rgba(28, 28, 28, 0.8), rgba(28, 28, 28, 0.9)), 
                        url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="600" viewBox="0 0 1200 600"><rect width="1200" height="600" fill="%231C1C1C"/><path d="M0,400 Q300,200 600,400 T1200,200 L1200,600 L0,600 Z" fill="%232E8B57" opacity="0.3"/><circle cx="900" cy="150" r="40" fill="%23FF4500" opacity="0.3"/></svg>');
            background-size: cover;
            background-position: center;
            text-align: center;
        }
        
        .page-header h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
        }
        
        .page-header p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* Section Styles */
        section {
            padding: 5rem 0;
        }
        
        .section-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: var(--fire-orange);
            margin: 1rem auto;
        }
        
        /* Impact Section */
        .impact {
            background-color: var(--dark-bg);
        }
        
        .impact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .impact-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 2rem;
            transition: transform 0.3s;
        }
        
        .impact-card:hover {
            transform: translateY(-5px);
        }
        
        .impact-icon {
            font-size: 3rem;
            color: var(--fire-orange);
            margin-bottom: 1.5rem;
        }
        
        .impact-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        /* Prevention Methods Section */
        .prevention-methods {
            background-color: rgba(46, 139, 87, 0.1);
        }
        
        .methods-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .method-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .method-number {
            width: 50px;
            height: 50px;
            background-color: var(--forest-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            margin-bottom: 1.5rem;
        }
        
        .method-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }
        
        /* Resources Section */
        .resources {
            background-color: var(--dark-bg);
        }
        
        .resources-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .resource-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s;
        }
        
        .resource-card:hover {
            transform: translateY(-5px);
        }
        
        .resource-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }
        
        .resource-content {
            padding: 1.5rem;
        }
        
        .resource-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            cursor: pointer;
            margin-top: 1rem;
        }
        
        .btn-primary {
            background-color: var(--fire-orange);
            color: var(--white);
            border: 2px solid var(--fire-orange);
        }
        
        .btn-primary:hover {
            background-color: transparent;
            color: var(--fire-orange);
        }
        
        /* FAQ Section */
        .faq {
            background-color: rgba(46, 139, 87, 0.1);
        }
        
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .faq-item {
            margin-bottom: 1.5rem;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            overflow: hidden;
        }
        
        .faq-question {
            padding: 1.5rem;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.2rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .faq-answer {
            padding: 0 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, padding 0.3s ease-out;
        }
        
        .faq-item.active .faq-answer {
            padding: 0 1.5rem 1.5rem;
            max-height: 500px;
        }
        
        .faq-toggle {
            font-size: 1.5rem;
            transition: transform 0.3s;
        }
        
        .faq-item.active .faq-toggle {
            transform: rotate(45deg);
        }
        
        /* Footer */
        footer {
            background-color: #111;
            padding: 3rem 0 1.5rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-logo {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }
        
        .footer-links h3 {
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .footer-links ul {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 0.5rem;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--fire-orange);
        }
        
        .copyright {
            text-align: center;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            nav ul {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
                background: none;
                border: none;
                color: var(--white);
                font-size: 1.5rem;
                cursor: pointer;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <a href="index.html" class="logo">Hutan<span>Lestari</span></a>
                <nav>
                    <ul>
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="tentang.php">Tentang</a></li>
                        <li><a href="statistik.php">Statistik</a></li>
                        <li><a href="pencegahan.php">Pencegahan</a></li>
                        <li><a href="pelajari.php" class="active">Pelajari</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Pelajari Lebih Lanjut</h1>
            <p>Dapatkan informasi mendalam tentang kebakaran hutan, dampaknya, dan cara-cara efektif untuk mencegahnya. Pengetahuan adalah langkah pertama menuju aksi.</p>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact">
        <div class="container">
            <h2 class="section-title">Dampak Kebakaran Hutan</h2>
            <div class="impact-grid">
                <div class="impact-card">
                    <div class="impact-icon">🔥</div>
                    <h3 class="impact-title">Dampak Lingkungan</h3>
                    <p>Kebakaran hutan menghancurkan ekosistem, mengurangi keanekaragaman hayati, dan melepaskan karbon dalam jumlah besar ke atmosfer, mempercepat perubahan iklim.</p>
                </div>
                <div class="impact-card">
                    <div class="impact-icon">🏥</div>
                    <h3 class="impact-title">Dampak Kesehatan</h3>
                    <p>Asap kebakaran hutan mengandung partikel berbahaya yang dapat menyebabkan masalah pernapasan, iritasi mata, dan memperburuk kondisi kesehatan yang sudah ada.</p>
                </div>
                <div class="impact-card">
                    <div class="impact-icon">💰</div>
                    <h3 class="impact-title">Dampak Ekonomi</h3>
                    <p>Kebakaran hutan menyebabkan kerugian ekonomi besar melalui kerusakan properti, hilangnya mata pencaharian, biaya pemadaman, dan penurunan pariwisata.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Prevention Methods Section -->
    <section class="prevention-methods">
        <div class="container">
            <h2 class="section-title">Metode Pencegahan</h2>
            <div class="methods-grid">
                <div class="method-card">
                    <div class="method-number">1</div>
                    <h3 class="method-title">Pendidikan Masyarakat</h3>
                    <p>Meningkatkan kesadaran masyarakat tentang bahaya kebakaran hutan dan cara mencegahnya melalui program pendidikan dan kampanye kesadaran.</p>
                </div>
                <div class="method-card">
                    <div class="method-number">2</div>
                    <h3 class="method-title">Pengelolaan Vegetasi</h3>
                    <p>Mengurangi bahan bakar potensial dengan membersihkan vegetasi kering, membuat jalur pemisah api, dan menerapkan pembakaran terkendali.</p>
                </div>
                <div class="method-card">
                    <div class="method-number">3</div>
                    <h3 class="method-title">Teknologi Pemantauan</h3>
                    <p>Menggunakan teknologi seperti satelit, drone, dan sensor untuk mendeteksi kebakaran lebih awal dan memantau area berisiko tinggi.</p>
                </div>
                <div class="method-card">
                    <div class="method-number">4</div>
                    <h3 class="method-title">Regulasi dan Penegakan Hukum</h3>
                    <p>Menerapkan dan menegakkan peraturan tentang penggunaan api, pembukaan lahan, dan aktivitas lain yang dapat memicu kebakaran hutan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="resources">
        <div class="container">
            <h2 class="section-title">Sumber Daya Tambahan</h2>
            <div class="resources-grid">
                <div class="resource-card">
                    <img src="image/panduan_pencegahan.png" alt="Panduan Pencegahan" class="resource-img">
                    <div class="resource-content">
                        <h3 class="resource-title">Panduan Pencegahan Kebakaran Hutan</h3>
                        <p>Unduh panduan lengkap tentang cara mencegah kebakaran hutan di berbagai situasi dan lingkungan.</p>
                        <a href="#" class="btn btn-primary">Unduh Sekarang</a>
                    </div>
                </div>
                <div class="resource-card">
                    <img src="image/peta_risiko.jpeg" alt="Peta Risiko" class="resource-img">
                    <div class="resource-content">
                        <h3 class="resource-title">Peta Risiko Kebakaran Hutan</h3>
                        <p>Akses peta interaktif yang menunjukkan area dengan risiko kebakaran hutan tinggi di Indonesia.</p>
                        <a href="peta-interaktif.php" class="btn btn-primary">Lihat Peta</a>
                    </div>
                </div>
                <div class="resource-card">
                    <img src="image/laporan_penelitian.jpg" alt="Laporan Penelitian" class="resource-img">
                    <div class="resource-content">
                        <h3 class="resource-title">Laporan Penelitian Terbaru</h3>
                        <p>Baca laporan penelitian terbaru tentang penyebab, dampak, dan metode pencegahan kebakaran hutan.</p>
                        <a href="https://drive.google.com/file/d/1p4REt4ADl2zz4lPpbxHq0p_dwRTXtuxU/view?usp=sharing" class="btn btn-primary">Baca Laporan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <div class="container">
            <h2 class="section-title">Pertanyaan Umum</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        Apa penyebab utama kebakaran hutan di Indonesia?
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Penyebab utama kebakaran hutan di Indonesia adalah aktivitas manusia, termasuk pembukaan lahan untuk perkebunan, pertanian berpindah, api unggun yang tidak diawasi, dan pembuangan puntung rokok sembarangan. Faktor alam seperti petir juga dapat menyebabkan kebakaran, tetapi persentasenya lebih kecil.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        Bagaimana saya bisa membantu mencegah kebakaran hutan?
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Anda dapat membantu dengan: selalu mematikan api unggun sepenuhnya sebelum meninggalkan lokasi, tidak membuang puntung rokok sembarangan, melaporkan aktivitas mencurigakan yang dapat memicu kebakaran, mendukung organisasi yang bekerja untuk pencegahan kebakaran hutan, dan menyebarkan kesadaran tentang pentingnya pencegahan.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        Apa yang harus dilakukan jika melihat kebakaran hutan?
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Jika Anda melihat kebakaran hutan, segera hubungi layanan darurat setempat (115 atau nomor darurat lokal). Jangan mencoba memadamkan api sendiri jika sudah besar. Evakuasi area dengan cepat, tutup hidung dan mulut dengan kain basah jika asap tebal, dan ikuti instruksi dari pihak berwenang.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        Bagaimana perubahan iklim mempengaruhi kebakaran hutan?
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Perubahan iklim memperburuk risiko kebakaran hutan dengan meningkatkan suhu global, memperpanjang musim kemarau, dan membuat vegetasi lebih kering dan mudah terbakar. Selain itu, kebakaran hutan sendiri melepaskan karbon dalam jumlah besar, menciptakan siklus yang mempercepat perubahan iklim.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <div class="footer-logo">Hutan<span>Lestari</span></div>
                    <p>Berdedikasi untuk mencegah kebakaran hutan dan melestarikan ekosistem alami kita melalui pendidikan, kesadaran, dan aksi langsung.</p>
                </div>
                <div class="footer-links">
                    <h3>Tautan Cepat</h3>
                    <ul>
                        <li><a href="index.html">Beranda</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Program Kami</a></li>
                        <li><a href="#">Jadi Relawan</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Sumber Daya</h3>
                    <ul>
                        <li><a href="#">Tips Pencegahan Kebakaran</a></li>
                        <li><a href="#">Kesiapan Darurat</a></li>
                        <li><a href="#">Statistik Kebakaran Hutan</a></li>
                        <li><a href="#">Penelitian & Laporan</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Hubungi Kami</h3>
                    <ul>
                        <li><a href="mailto:info@hutanlestari.org">info@hutanlestari.org</a></li>
                        <li><a href="tel:+62211234567">(021) 123-4567</a></li>
                        <li>Jalan Magelang No. 123<br>Yogyakarta, 12560</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2023 HutanLestari. Semua hak dilindungi.
            </div>
        </div>
    </footer>

    <script>
        // FAQ Toggle
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentNode;
                item.classList.toggle('active');
            });
        });
    </script>
</body>
</html>