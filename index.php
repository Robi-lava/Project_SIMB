<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencegahan Kebakaran Hutan | Lindungi Hutan Kita</title>
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
            position: absolute;
            width: 100%;
            z-index: 100;
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
        
        /* Hero Section */
        .hero {
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
        }
        
        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(28, 28, 28, 0.7), rgba(28, 28, 28, 0.9)), 
                        url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="800" viewBox="0 0 1200 800"><rect width="1200" height="800" fill="%231C1C1C"/><path d="M0,600 Q300,400 600,600 T1200,400 L1200,800 L0,800 Z" fill="%232E8B57" opacity="0.3"/><circle cx="200" cy="300" r="50" fill="%23FF4500" opacity="0.6"/><circle cx="800" cy="200" r="70" fill="%23FF4500" opacity="0.4"/><path d="M400,500 Q500,300 700,500 T1000,300" stroke="%23FF4500" stroke-width="3" fill="none" opacity="0.5"/></svg>');
            background-size: cover;
            background-position: center;
            z-index: -1;
        }
        
        .hero-content {
            max-width: 700px;
            z-index: 10;
        }
        
        .hero h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 4rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            max-width: 600px;
        }
        
        .cta-buttons {
            display: flex;
            gap: 1rem;
        }
        
        .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            cursor: pointer;
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
        
        .btn-secondary {
            background-color: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }
        
        .btn-secondary:hover {
            background-color: var(--white);
            color: var(--dark-bg);
        }
        
        /* Statistics Section */
        .statistics {
            padding: 5rem 0;
            background-color: var(--dark-bg);
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
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .stat-card {
            background-color: rgba(255, 255, 255, 0.05);
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-number {
            font-family: 'Montserrat', sans-serif;
            font-size: 3rem;
            font-weight: 800;
            color: var(--fire-orange);
            margin-bottom: 0.5rem;
        }
        
        .stat-desc {
            font-size: 1.1rem;
        }
        
        /* Causes Section */
.causes {
    padding: 5rem 0;
    background-color: rgba(46, 139, 87, 0.1);
}

.causes-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.cause-card {
    background-color: rgba(255, 255, 255, 0.05);
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s;
}

.cause-card:hover {
    transform: translateY(-5px);
}

.cause-img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
}

.cause-content {
    padding: 1.5rem;
}

.cause-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.5rem;
    margin-bottom: 1rem;
}
        
        /* Prevention Section */
        .prevention {
            padding: 5rem 0;
            background-color: var(--dark-bg);
        }
        
        .prevention-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .prevention-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .prevention-number {
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
        
        .prevention-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }
        
        /* Donation Section */
        .donation {
            padding: 5rem 0;
            background: linear-gradient(rgba(28, 28, 28, 0.9), rgba(28, 28, 28, 0.9)), 
                        url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="600" viewBox="0 0 1200 600"><rect width="1200" height="600" fill="%231C1C1C"/><path d="M0,400 Q300,200 600,400 T1200,200 L1200,600 L0,600 Z" fill="%232E8B57" opacity="0.2"/><circle cx="900" cy="150" r="40" fill="%23FF4500" opacity="0.3"/></svg>');
            background-size: cover;
            background-position: center;
        }
        
        .donation-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.05);
            padding: 3rem;
            border-radius: 8px;
        }
        
        .donation-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--white);
            font-size: 1rem;
        }
        
        .donation-amounts {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .amount-option {
            flex: 1;
            text-align: center;
            padding: 0.8rem;
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .amount-option:hover, .amount-option.active {
            background-color: var(--forest-green);
            border-color: var(--forest-green);
        }
        
        .btn-donate {
            width: 100%;
            background-color: var(--fire-orange);
            color: var(--white);
            border: none;
            padding: 1rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .btn-donate:hover {
            background-color: #e03d00;
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
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .cta-buttons {
                flex-direction: column;
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
                <a href="index.php" class="logo">Hutan<span>Lestari</span></a>
<nav>
    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="tentang.php">Tentang</a></li>
        <li><a href="statistik.php">Statistik</a></li>
        <li><a href="pencegahan.php">Pencegahan</a></li>
        <li><a href="pelajari.php">Pelajari</a></li>
        <li><a href="peta-interaktif.php">Peta Interaktif</a></li> 
    </ul>
</nav>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="container">
            <div class="hero-content">
                <h1>Hentikan Kebakaran Hutan!</h1>
                <p>Setiap tahun, jutaan hektar hutan hancur akibat kebakaran hutan. Bergabunglah dengan misi kami untuk mencegah kebakaran hutan dan melindungi ekosistem vital planet kita untuk generasi mendatang.</p>
                <div class="cta-buttons">
                    <a href="pelajari.php" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                    <a href="donasi.php" class="btn btn-secondary">Donasi Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="statistics">
        <div class="container">
            <h2 class="section-title">Dampak Kebakaran Hutan</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">4Jt</div>
                    <div class="stat-desc">Hektar hutan terbakar setiap tahun di Indonesia</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">80%</div>
                    <div class="stat-desc">Kebakaran hutan disebabkan oleh manusia</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">Rp43T</div>
                    <div class="stat-desc">Kerugian ekonomi akibat kebakaran hutan</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">1M+</div>
                    <div class="stat-desc">Ton CO2 dilepaskan ke atmosfer setiap tahun</div>
                </div>
            </div>
        </div>
    </section>

<!-- Causes Section -->
<section class="causes">
    <div class="container">
        <h2 class="section-title">Penyebab Umum Kebakaran Hutan</h2>
        <div class="causes-grid">

            <div class="cause-card">
                <img src="image/api_unggung.jpg" alt="Api Unggun" class="cause-img">
                <div class="cause-content">
                    <h3 class="cause-title">Api Unggun</h3>
                    <p>Api unggun yang tidak dipadamkan dengan benar menjadi penyebab utama kebakaran hutan, terutama dalam kondisi kering.</p>
                </div>
            </div>

            <div class="cause-card">
                <img src="image/petir.jpg" alt="Sambaran Petir" class="cause-img">
                <div class="cause-content">
                    <h3 class="cause-title">Sambaran Petir</h3>
                    <p>Penyebab alami seperti petir dapat menyulut vegetasi kering, terutama selama badai petir.</p>
                </div>
            </div>

            <div class="cause-card">
                <img src="image/rokok.jpg" alt="Puntung Rokok" class="cause-img">
                <div class="cause-content">
                    <h3 class="cause-title">Puntung Rokok</h3>
                    <p>Puntung rokok yang dibuang sembarangan dapat membara di rerumputan dan daun kering, memicu kebakaran berjam-jam kemudian.</p>
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- Prevention Section -->
    <section class="prevention">
        <div class="container">
            <h2 class="section-title">Cara Mencegah Kebakaran Hutan</h2>
            <div class="prevention-grid">
                <div class="prevention-card">
                    <div class="prevention-number">1</div>
                    <h3 class="prevention-title">Patuhi Larangan Api</h3>
                    <p>Selalu periksa adanya larangan api atau pembatasan sebelum menyalakan api unggun atau menggunakan peralatan luar ruangan.</p>
                </div>
                <div class="prevention-card">
                    <div class="prevention-number">2</div>
                    <h3 class="prevention-title">Padamkan Api dengan Benar</h3>
                    <p>Rendam api unggun dengan air, aduk abunya, dan pastikan sudah dingin sebelum meninggalkan lokasi.</p>
                </div>
                <div class="prevention-card">
                    <div class="prevention-number">3</div>
                    <h3 class="prevention-title">Buang Korek Api dengan Aman</h3>
                    <p>Pastikan korek api dan rokok benar-benar padam sebelum membuangnya dengan cara yang tepat.</p>
                </div>
                <div class="prevention-card">
                    <div class="prevention-number">4</div>
                    <h3 class="prevention-title">Laporkan Aktivitas Mencurigakan</h3>
                    <p>Jika Anda melihat api yang tidak diawasi atau aktivitas mencurigakan di area hutan, laporkan segera.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Section -->
    <section class="donation">
        <div class="container">
            <div class="donation-container">
                <h2 class="donation-title">Dukung Misi Kami</h2>
                <form id="donation-form">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Donasi</label>
                        <div class="donation-amounts">
                            <div class="amount-option" data-amount="100000">Rp100rb</div>
                            <div class="amount-option" data-amount="250000">Rp250rb</div>
                            <div class="amount-option" data-amount="500000">Rp500rb</div>
                            <div class="amount-option" data-amount="1000000">Rp1jt</div>
                        </div>
                        <input type="text" id="custom-amount" class="form-control" placeholder="Jumlah Lainnya">
                    </div>
                    <button type="submit" class="btn-donate">Donasi Sekarang</button>
                </form>
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
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="tentang.php">Tentang Kami</a></li>
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
        // Donation amount selection
        document.querySelectorAll('.amount-option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.amount-option').forEach(opt => {
                    opt.classList.remove('active');
                });
                this.classList.add('active');
                document.getElementById('custom-amount').value = this.getAttribute('data-amount');
            });
        });

        // Form submission
        document.getElementById('donation-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Terima kasih atas donasi Anda! Dukungan Anda membantu melindungi hutan kita.');
            this.reset();
            document.querySelectorAll('.amount-option').forEach(opt => {
                opt.classList.remove('active');
            });
        });
    </script>
</body>
</html>