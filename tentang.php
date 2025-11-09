<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami | HutanLestari</title>
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
        
        /* About Content */
        .about-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .about-text {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            text-align: justify;
        }
        
        /* Mission Vision Section */
        .mission-vision {
            background-color: rgba(46, 139, 87, 0.1);
        }
        
        .mv-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .mv-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
        }
        
        .mv-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
        }
        
        .mv-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--fire-orange);
        }
        
        /* Team Section */
        .team {
            background-color: var(--dark-bg);
        }
        
        .team-container {
            overflow-x: auto;
            padding: 1rem 0;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1.5rem;
            min-width: 1000px;
        }
        
        @media (max-width: 1200px) {
            .team-grid {
                grid-template-columns: repeat(3, 1fr);
                min-width: auto;
            }
        }
        
        @media (max-width: 768px) {
            .team-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 480px) {
            .team-grid {
                grid-template-columns: 1fr;
            }
        }
        
        .team-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s;
        }
        
        .team-card:hover {
            transform: translateY(-5px);
        }
        
        .team-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }
        
        .team-content {
            padding: 1.5rem;
        }
        
        .team-name {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }
        
        .team-role {
            color: var(--fire-orange);
            font-weight: 500;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
        
        .team-desc {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
        }
        
        /* Values Section */
        .values {
            background-color: rgba(46, 139, 87, 0.1);
        }
        
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .value-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
        }
        
        .value-number {
            width: 50px;
            height: 50px;
            background-color: var(--forest-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            margin: 0 auto 1.5rem;
        }
        
        .value-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.3rem;
            margin-bottom: 1rem;
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
                        <li><a href="tentang.php" class="active">Tentang</a></li>
                        <li><a href="statistik.php">Statistik</a></li>
                        <li><a href="pencegahan.php">Pencegahan</a></li>
                        <li><a href="pelajari.php">Pelajari</a></li>
                        <li><a href="peta-interaktif.php">Peta Interaktif</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Tentang HutanLestari</h1>
            <p>Mengenal lebih dekat organisasi kami yang berdedikasi untuk melindungi hutan Indonesia dari ancaman kebakaran</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <h2 class="section-title">Siapa Kami</h2>
                <div class="about-text">
                    <p>HutanLestari adalah organisasi non-profit yang didirikan pada tahun 2015 dengan misi melindungi dan melestarikan hutan Indonesia dari ancaman kebakaran hutan. Kami hadir sebagai respons terhadap meningkatnya frekuensi dan intensitas kebakaran hutan yang mengancam ekosistem, biodiversitas, dan kehidupan masyarakat.</p>
                    
                    <p>Berdasarkan data yang kami kumpulkan, lebih dari 80% kebakaran hutan di Indonesia disebabkan oleh aktivitas manusia yang dapat dicegah. Melalui pendekatan berbasis sains, teknologi, dan partisipasi masyarakat, kami bekerja untuk menciptakan solusi berkelanjutan dalam pencegahan kebakaran hutan.</p>
                    
                    <p>Hingga saat ini, kami telah berhasil melatih lebih dari 5,000 relawan, membangun 45 pos pemantauan di area rawan kebakaran, dan membantu mengurangi insiden kebakaran hutan sebesar 30% di area intervensi kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision">
        <div class="container">
            <h2 class="section-title">Misi & Visi</h2>
            <div class="mv-grid">
                <div class="mv-card">
                    <div class="mv-icon">🎯</div>
                    <h3 class="mv-title">Misi Kami</h3>
                    <p>Mencegah dan mengurangi insiden kebakaran hutan melalui pendidikan, teknologi, dan pemberdayaan masyarakat, serta memulihkan ekosistem hutan yang rusak akibat kebakaran untuk kelestarian lingkungan dan kesejahteraan generasi mendatang.</p>
                </div>
                <div class="mv-card">
                    <div class="mv-icon">🔭</div>
                    <h3 class="mv-title">Visi Kami</h3>
                    <p>Menjadi organisasi terdepan dalam pencegahan kebakaran hutan di Indonesia, menciptakan masyarakat yang sadar dan aktif dalam perlindungan hutan, serta mewujudkan Indonesia dengan hutan yang lestari dan bebas dari ancaman kebakaran berulang.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values">
        <div class="container">
            <h2 class="section-title">Nilai-Nilai Kami</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-number">1</div>
                    <h3 class="value-title">Integritas</h3>
                    <p>Kami bekerja dengan transparansi dan akuntabilitas dalam setiap program dan penggunaan dana yang dipercayakan kepada kami.</p>
                </div>
                <div class="value-card">
                    <div class="value-number">2</div>
                    <h3 class="value-title">Kolaborasi</h3>
                    <p>Kami percaya bahwa perlindungan hutan membutuhkan kerjasama semua pihak - pemerintah, swasta, dan masyarakat.</p>
                </div>
                <div class="value-card">
                    <div class="value-number">3</div>
                    <h3 class="value-title">Inovasi</h3>
                    <p>Kami terus mengembangkan pendekatan dan teknologi terbaru untuk pencegahan kebakaran hutan yang efektif.</p>
                </div>
                <div class="value-card">
                    <div class="value-number">4</div>
                    <h3 class="value-title">Keberlanjutan</h3>
                    <p>Setiap solusi yang kami tawarkan dirancang untuk jangka panjang dan ramah lingkungan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team">
        <div class="container">
            <h2 class="section-title">Tim Kami</h2>
            <div class="team-container">
                <div class="team-grid">
                    <div class="team-card">
                        <img src="image\robii.jpg" alt="" class="team-img">
                        <div class="team-content">
                            <h3 class="team-name">Robihul Ihsan Lavano</h3>
                            <div class="team-role">Direktur Eksekutif</div>
                            <p class="team-desc">Ahli ekologi hutan dengan pengalaman 15 tahun dalam konservasi dan manajemen kebakaran hutan.</p>
                        </div>
                    </div>
                    <div class="team-card">
                        <img src="image/eva.jpg" alt="" class="team-img">
                        <div class="team-content">
                            <h3 class="team-name">Eva Dewi Agustin</h3>
                            <div class="team-role">Manager Program</div>
                            <p class="team-desc">Spesialis dalam pengembangan program pencegahan kebakaran berbasis masyarakat.</p>
                        </div>
                    </div>
                    <div class="team-card">
                        <img src="image/rizqi.jpg" alt="" class="team-img">
                        <div class="team-content">
                            <h3 class="team-name">Maulana Rizqi Ma’Rufi </h3>
                            <div class="team-role">Koordinator Lapangan</div>
                            <p class="team-desc">Memimpin tim relawan di daerah rawan kebakaran dengan pengalaman praktis 10 tahun.</p>
                        </div>
                    </div>
                    <div class="team-card">
                        <img src="image/azel.jpg" alt="" class="team-img">
                        <div class="team-content">
                            <h3 class="team-name">Fania Azelia </h3>
                            <div class="team-role">Ahli Teknologi</div>
                            <p class="team-desc">Mengembangkan sistem pemantauan dan early warning system untuk deteksi dini kebakaran.</p>
                        </div>
                    </div>
                    <div class="team-card">
                        <img src="image/rifqi.jpg" alt="" class="team-img">
                        <div class="team-content">
                            <h3 class="team-name">Rifqy Rahmad Loekman Hakim</h3>
                            <div class="team-role">Peneliti Utama</div>
                            <p class="team-desc">Peneliti kebakaran hutan dengan spesialisasi dalam ekologi api dan perubahan iklim.</p>
                        </div>
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
                &copy; 2023 HutanLestari. Semua hak dilindungi. | 
                <a href="kebijakan-privasi.html" style="color: rgba(255,255,255,0.5);">Kebijakan Privasi</a> | 
                <a href="syarat-ketentuan.html" style="color: rgba(255,255,255,0.5);">Syarat & Ketentuan</a>
            </div>
        </div>
    </footer>
</body>
</html>