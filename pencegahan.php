<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencegahan Kebakaran Hutan | HutanLestari</title>
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
            z-index: 1000;
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
        
        nav a:hover, nav a.active {
            color: var(--fire-orange);
        }
        
        /* Page Header */
        .page-header {
            padding: 8rem 0 4rem;
            background: linear-gradient(rgba(28, 28, 28, 0.8), rgba(28, 28, 28, 0.9)), 
                        url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="400" viewBox="0 0 1200 400"><rect width="1200" height="400" fill="%231C1C1C"/><path d="M0,250 Q300,150 600,250 T1200,150 L1200,400 L0,400 Z" fill="%232E8B57" opacity="0.3"/><circle cx="900" cy="100" r="40" fill="%23FF4500" opacity="0.3"/></svg>');
            background-size: cover;
            background-position: center;
            text-align: center;
        }
        
        .page-header h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 3rem;
            margin-bottom: 1rem;
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
        
        /* Prevention Steps */
        .prevention-steps {
            background-color: var(--dark-bg);
        }
        
        .steps-container {
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .step-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 3rem;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 2rem;
            transition: transform 0.3s;
        }
        
        .step-item:hover {
            transform: translateY(-5px);
        }
        
        .step-number {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--fire-orange), #FFA500);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            font-weight: 800;
            margin-right: 2rem;
            flex-shrink: 0;
        }
        
        .step-content h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--fire-orange);
        }
        
        .step-content ul {
            list-style: none;
            margin-left: 1rem;
        }
        
        .step-content li {
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
        }
        
        .step-content li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--forest-green);
            font-weight: bold;
        }
        
        /* Community Programs */
        .community-programs {
            background-color: rgba(46, 139, 87, 0.1);
        }
        
        .programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .program-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s;
        }
        
        .program-card:hover {
            transform: translateY(-5px);
        }
        
        .program-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
        }
        
        .program-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--fire-orange);
        }
        
        /* Technology Section */
        .technology {
            background-color: var(--dark-bg);
        }
        
        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .tech-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
        }
        
        .tech-icon {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }
        
        .tech-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--fire-orange);
        }
        
        /* Emergency Preparedness */
        .emergency {
            background-color: rgba(46, 139, 87, 0.1);
        }
        
        .emergency-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .emergency-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 2rem;
        }
        
        .emergency-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            color: var(--fire-orange);
            text-align: center;
        }
        
        .emergency-list {
            list-style: none;
        }
        
        .emergency-list li {
            margin-bottom: 1rem;
            padding-left: 2rem;
            position: relative;
        }
        
        .emergency-list li::before {
            content: '🆘';
            position: absolute;
            left: 0;
        }
        
        /* Download Resources */
        .resources {
            background-color: var(--dark-bg);
        }
        
        .resources-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .resource-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s;
        }
        
        .resource-card:hover {
            transform: translateY(-5px);
        }
        
        .resource-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .resource-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }
        
        .btn {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            cursor: pointer;
            border: none;
            font-family: 'Open Sans', sans-serif;
            font-size: 0.9rem;
        }
        
        .btn-primary {
            background-color: var(--fire-orange);
            color: var(--white);
        }
        
        .btn-primary:hover {
            background-color: #e03d00;
            transform: translateY(-2px);
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
        
        .footer-about {
            grid-column: 1 / -1;
            text-align: center;
            margin-bottom: 2rem;
        }
        
        @media (min-width: 768px) {
            .footer-about {
                grid-column: auto;
                text-align: left;
                margin-bottom: 0;
            }
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
            color: var(--white);
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
            font-size: 0.9rem;
        }
        
        .footer-links a:hover {
            color: var(--fire-orange);
        }
        
        .footer-contact li {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            line-height: 1.5;
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
                font-size: 2.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            nav ul {
                display: none;
            }
            
            .step-item {
                flex-direction: column;
                text-align: center;
            }
            
            .step-number {
                margin-right: 0;
                margin-bottom: 1rem;
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
                        <li><a href="index.html">Beranda</a></li>
                        <li><a href="tentang.html">Tentang</a></li>
                        <li><a href="statistik.html">Statistik</a></li>
                        <li><a href="pencegahan.html" class="active">Pencegahan</a></li>
                        <li><a href="pelajari.html">Pelajari</a></li>
                        <li><a href="peta-interaktif.html">Peta Interaktif</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Pencegahan Kebakaran Hutan</h1>
            <p>Pelajari langkah-langkah praktis dan strategis untuk mencegah kebakaran hutan dan melindungi ekosistem kita</p>
        </div>
    </section>

    <!-- Prevention Steps Section -->
    <section class="prevention-steps">
        <div class="container">
            <h2 class="section-title">Langkah-Langkah Pencegahan</h2>
            <div class="steps-container">
                <div class="step-item">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Pengelolaan Api yang Bertanggung Jawab</h3>
                        <ul>
                            <li>Selalu pantau peringatan cuaca dan kondisi kekeringan</li>
                            <li>Hindari menyalakan api unggun saat kondisi berangin</li>
                            <li>Gunakan area yang ditentukan untuk api unggun</li>
                            <li>Pastikan api benar-benar padam sebelum meninggalkan lokasi</li>
                            <li>Siapkan air atau pemadam api di dekat lokasi</li>
                        </ul>
                    </div>
                </div>
                
                <div class="step-item">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Pembuangan Sampah yang Aman</h3>
                        <ul>
                            <li>Jangan membuang puntung rokok sembarangan</li>
                            <li>Pastikan korek api benar-benar padam sebelum dibuang</li>
                            <li>Hindari membakar sampah saat cuaca kering</li>
                            <li>Gunakan tempat sampah yang tertutup rapat</li>
                            <li>Laporkan pembuangan sampah ilegal</li>
                        </ul>
                    </div>
                </div>
                
                <div class="step-item">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Pengelolaan Vegetasi</h3>
                        <ul>
                            <li>Buat jalur pemisah api di sekitar properti</li>
                            <li>Bersihkan daun kering dan ranting yang mudah terbakar</li>
                            <li>Pangkas cabang pohon yang dekat dengan bangunan</li>
                            <li>Gunakan tanaman tahan api untuk landscaping</li>
                            <li>Lakukan pembakaran terkendali oleh ahli</li>
                        </ul>
                    </div>
                </div>
                
                <div class="step-item">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Edukasi dan Kesadaran Masyarakat</h3>
                        <ul>
                            <li>Ikuti pelatihan pencegahan kebakaran hutan</li>
                            <li>Bagikan informasi pencegahan ke tetangga</li>
                            <li>Kenali tanda-tanda bahaya kebakaran</li>
                            <li>Laporkan aktivitas mencurigakan</li>
                            <li>Ikuti perkembangan informasi cuaca dan risiko kebakaran</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Programs Section -->
    <section class="community-programs">
        <div class="container">
            <h2 class="section-title">Program Masyarakat</h2>
            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-icon">👥</div>
                    <h3 class="program-title">Desa Tangguh Bencana</h3>
                    <p>Program pemberdayaan masyarakat desa dalam pencegahan dan penanganan kebakaran hutan dengan sistem early warning.</p>
                </div>
                
                <div class="program-card">
                    <div class="program-icon">🛡️</div>
                    <h3 class="program-title">Kelompok Masyarakat Peduli Api</h3>
                    <p>Pembentukan kelompok masyarakat yang bertugas memantau dan mencegah aktivitas berpotensi kebakaran.</p>
                </div>
                
                <div class="program-card">
                    <div class="program-icon">🌱</div>
                    <h3 class="program-title">Agroforestry Berkelanjutan</h3>
                    <p>Program alternatif mata pencaharian yang ramah lingkungan dan mengurangi praktik pembakaran lahan.</p>
                </div>
                
                <div class="program-card">
                    <div class="program-icon">📚</div>
                    <h3 class="program-title">Sekolah Lingkungan</h3>
                    <p>Edukasi dini tentang pencegahan kebakaran hutan untuk siswa sekolah dasar dan menengah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section class="technology">
        <div class="container">
            <h2 class="section-title">Teknologi Pencegahan</h2>
            <div class="tech-grid">
                <div class="tech-card">
                    <div class="tech-icon">🛰️</div>
                    <h3 class="tech-title">Pemantauan Satelit</h3>
                    <p>Sistem deteksi dini titik panas menggunakan teknologi satelit dengan update real-time.</p>
                </div>
                
                <div class="tech-card">
                    <div class="tech-icon">📱</div>
                    <h3 class="tech-title">Aplikasi Mobile</h3>
                    <p>Aplikasi untuk melaporkan kejadian dan menerima peringatan dini kebakaran hutan.</p>
                </div>
                
                <div class="tech-card">
                    <div class="tech-icon">🌡️</div>
                    <h3 class="tech-title">Sensor Cuaca</h3>
                    <p>Jaringan sensor untuk memantau kelembaban, suhu, dan kondisi cuaca berisiko.</p>
                </div>
                
                <div class="tech-card">
                    <div class="tech-icon">🤖</div>
                    <h3 class="tech-title">Drone Patroli</h3>
                    <p>Penggunaan drone untuk memantau area sulit dijangkau dan mendeteksi titik api.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Preparedness Section -->
    <section class="emergency">
        <div class="container">
            <h2 class="section-title">Kesiapan Darurat</h2>
            <div class="emergency-grid">
                <div class="emergency-card">
                    <h3 class="emergency-title">Sebelum Kebakaran</h3>
                    <ul class="emergency-list">
                        <li>Buat rencana evakuasi keluarga</li>
                        <li>Siapkan tas darurat dengan dokumen penting</li>
                        <li>Ketahui rute evakuasi terdekat</li>
                        <li>Pasok masker dan obat-obatan</li>
                        <li>Simpan nomor darurat yang mudah diakses</li>
                    </ul>
                </div>
                
                <div class="emergency-card">
                    <h3 class="emergency-title">Saat Kebakaran</h3>
                    <ul class="emergency-list">
                        <li>Ikuti instruksi pihak berwenang</li>
                        <li>Evakuasi segera jika diperintahkan</li>
                        <li>Tutup semua jendela dan ventilasi</li>
                        <li>Gunakan masker untuk melindungi pernapasan</li>
                        <li>Bawa tas darurat dan dokumen penting</li>
                    </ul>
                </div>
                
                <div class="emergency-card">
                    <h3 class="emergency-title">Setelah Kebakaran</h3>
                    <ul class="emergency-list">
                        <li>Kembali hanya setelah dinyatakan aman</li>
                        <li>Periksa kerusakan properti dengan hati-hati</li>
                        <li>Dokumentasikan kerusakan untuk klaim</li>
                        <li>Ikuti program pemulihan lingkungan</li>
                        <li>Ikuti konseling jika diperlukan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Resources Section -->
    <section class="resources">
        <div class="container">
            <h2 class="section-title">Sumber Daya Unduhan</h2>
            <div class="resources-grid">
                <div class="resource-card">
                    <div class="resource-icon">📋</div>
                    <h3 class="resource-title">Panduan Pencegahan</h3>
                    <p>Panduan lengkap pencegahan kebakaran hutan untuk masyarakat</p>
                    <a href="#" class="btn btn-primary">Unduh PDF</a>
                </div>
                
                <div class="resource-card">
                    <div class="resource-icon">🏠</div>
                    <h3 class="resource-title">Checklist Kesiapan</h3>
                    <p>Checklist kesiapan darurat kebakaran untuk keluarga</p>
                    <a href="#" class="btn btn-primary">Unduh PDF</a>
                </div>
                
                <div class="resource-card">
                    <div class="resource-icon">📞</div>
                    <h3 class="resource-title">Kontak Darurat</h3>
                    <p>Daftar nomor darurat dan kontak penting</p>
                    <a href="#" class="btn btn-primary">Unduh PDF</a>
                </div>
                
                <div class="resource-card">
                    <div class="resource-icon">🎯</div>
                    <h3 class="resource-title">Materi Edukasi</h3>
                    <p>Materi presentasi untuk edukasi masyarakat</p>
                    <a href="#" class="btn btn-primary">Unduh ZIP</a>
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
                        <li><a href="tentang.html">Tentang Kami</a></li>
                        <li><a href="program.html">Program Kami</a></li>
                        <li><a href="relawan.html">Jadi Relawan</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Sumber Daya</h3>
                    <ul>
                        <li><a href="tips-pencegahan.html">Tips Pencegahan</a></li>
                        <li><a href="peta-interaktif.html">Peta Interaktif</a></li>
                        <li><a href="statistik.html">Statistik</a></li>
                        <li><a href="penelitian.html">Penelitian</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Kontak</h3>
                    <ul class="footer-contact">
                        <li><a href="mailto:info@hutanlestari.org">info@hutanlestari.org</a></li>
                        <li><a href="tel:+62211234567">(021) 123-4567</a></li>
                        <li>Jalan Konservasi No. 123<br>Jakarta Selatan, 12560</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2025 HutanLestari. Semua hak dilindungi. | 
                <a href="kebijakan-privasi.html" style="color: rgba(255,255,255,0.5);">Kebijakan Privasi</a> | 
                <a href="syarat-ketentuan.html" style="color: rgba(255,255,255,0.5);">Syarat & Ketentuan</a>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.step-item, .program-card, .tech-card, .emergency-card, .resource-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>