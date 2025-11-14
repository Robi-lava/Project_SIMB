<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Kebakaran Hutan 2025 | HutanLestari</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        
        /* Quick Stats */
        .quick-stats {
            background-color: rgba(46, 139, 87, 0.1);
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
        
        .stat-trend {
            font-size: 0.9rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .trend-up {
            color: #FF6B6B;
        }
        
        .trend-down {
            color: #51CF66;
        }
        
        /* Charts Section */
        .charts {
            background-color: var(--dark-bg);
        }
        
        .chart-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }
        
        @media (max-width: 768px) {
            .chart-container {
                grid-template-columns: 1fr;
            }
        }
        
        .chart-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 2rem;
        }
        
        .chart-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
            color: var(--fire-orange);
        }
        
        .chart-wrapper {
            position: relative;
            height: 300px;
        }
        
        /* Regional Data */
        .regional {
            background-color: rgba(46, 139, 87, 0.1);
        }
        
        .region-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .region-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 2rem;
        }
        
        .region-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .region-name {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.3rem;
        }
        
        .region-hotspots {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--fire-orange);
        }
        
        .progress-bar {
            height: 8px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            overflow: hidden;
            margin: 1rem 0;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--fire-orange), #FFA500);
            border-radius: 4px;
        }
        
        .region-stats {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
        }
        
        /* Causes Section */
        .causes {
            background-color: var(--dark-bg);
        }
        
        .causes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .cause-item {
            display: flex;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.05);
            padding: 1.5rem;
            border-radius: 8px;
        }
        
        .cause-percentage {
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            color: var(--fire-orange);
            margin-right: 1.5rem;
            min-width: 80px;
        }
        
        .cause-info h3 {
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 0.5rem;
        }
        
        .cause-info p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }
        
        /* Impact Section */
        .impact {
            background-color: rgba(46, 139, 87, 0.1);
        }
        
        .impact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .impact-card {
            background-color: rgba(255, 255, 255, 0.05);
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
        }
        
        .impact-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .impact-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: var(--fire-orange);
        }
        
        /* Data Source */
        .data-source {
            background-color: var(--dark-bg);
            text-align: center;
        }
        
        .source-text {
            max-width: 600px;
            margin: 0 auto;
            color: rgba(255, 255, 255, 0.7);
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
            
            .chart-container {
                grid-template-columns: 1fr;
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
                        <li><a href="statistik.php" class="active">Statistik</a></li>
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
            <h1>Statistik Kebakaran Hutan 2025</h1>
            <p>Data dan analisis terkini tentang kebakaran hutan di Indonesia untuk memahami tren dan pola yang terjadi</p>
        </div>
    </section>

    <!-- Quick Stats Section -->
    <section class="quick-stats">
        <div class="container">
            <h2 class="section-title">Statistik Cepat 2025</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">2.8Jt</div>
                    <div class="stat-desc">Hektar Hutan Terbakar</div>
                    <div class="stat-trend trend-down">
                        <span>↓ 33% dari 2023</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">5.241</div>
                    <div class="stat-desc">Titik Panas Terdeteksi</div>
                    <div class="stat-trend trend-down">
                        <span>↓ 40% dari 2023</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">Rp 28T</div>
                    <div class="stat-desc">Kerugian Ekonomi</div>
                    <div class="stat-trend trend-down">
                        <span>↓ 35% dari 2023</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">0.8M</div>
                    <div class="stat-desc">Ton CO2 Dilepaskan</div>
                    <div class="stat-trend trend-down">
                        <span>↓ 33% dari 2023</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Charts Section -->
    <section class="charts">
        <div class="container">
            <h2 class="section-title">Visualisasi Data 2025</h2>
            <div class="chart-container">
                <div class="chart-card">
                    <h3 class="chart-title">Tren Kebakaran Hutan 2021-2025</h3>
                    <div class="chart-wrapper">
                        <canvas id="trendChart"></canvas>
                    </div>
                </div>
                <div class="chart-card">
                    <h3 class="chart-title">Penyebab Kebakaran Hutan 2025</h3>
                    <div class="chart-wrapper">
                        <canvas id="causeChart"></canvas>
                    </div>
                </div>
                <div class="chart-card">
                    <h3 class="chart-title">Luas Kebakaran per Bulan 2025</h3>
                    <div class="chart-wrapper">
                        <canvas id="monthlyChart"></canvas>
                    </div>
                </div>
                <div class="chart-card">
                    <h3 class="chart-title">Jenis Hutan yang Terbakar 2025</h3>
                    <div class="chart-wrapper">
                        <canvas id="forestTypeChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Regional Data Section -->
    <section class="regional">
        <div class="container">
            <h2 class="section-title">Data Regional 2025</h2>
            <div class="region-grid">
                <div class="region-card">
                    <div class="region-header">
                        <h3 class="region-name">Kalimantan</h3>
                        <div class="region-hotspots">2,154</div>
                    </div>
                    <p>Titik panas terdeteksi</p>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 62%"></div>
                    </div>
                    <div class="region-stats">
                        <span>1.2Jt hektar terbakar</span>
                        <span>43% dari total nasional</span>
                    </div>
                </div>
                <div class="region-card">
                    <div class="region-header">
                        <h3 class="region-name">Sumatera</h3>
                        <div class="region-hotspots">1,782</div>
                    </div>
                    <p>Titik panas terdeteksi</p>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 52%"></div>
                    </div>
                    <div class="region-stats">
                        <span>980rb hektar terbakar</span>
                        <span>35% dari total nasional</span>
                    </div>
                </div>
                <div class="region-card">
                    <div class="region-header">
                        <h3 class="region-name">Sulawesi</h3>
                        <div class="region-hotspots">621</div>
                    </div>
                    <p>Titik panas terdeteksi</p>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 22%"></div>
                    </div>
                    <div class="region-stats">
                        <span>280rb hektar terbakar</span>
                        <span>10% dari total nasional</span>
                    </div>
                </div>
                <div class="region-card">
                    <div class="region-header">
                        <h3 class="region-name">Papua & Maluku</h3>
                        <div class="region-hotspots">484</div>
                    </div>
                    <p>Titik panas terdeteksi</p>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 15%"></div>
                    </div>
                    <div class="region-stats">
                        <span>190rb hektar terbakar</span>
                        <span>7% dari total nasional</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Causes Section -->
    <section class="causes">
        <div class="container">
            <h2 class="section-title">Penyebab Utama Kebakaran 2025</h2>
            <div class="causes-grid">
                <div class="cause-item">
                    <div class="cause-percentage">35%</div>
                    <div class="cause-info">
                        <h3>Pembukaan Lahan</h3>
                        <p>Penurunan signifikan karena regulasi ketat</p>
                    </div>
                </div>
                <div class="cause-item">
                    <div class="cause-percentage">28%</div>
                    <div class="cause-info">
                        <h3>Aktivitas Masyarakat</h3>
                        <p>Peningkatan kesadaran masyarakat</p>
                    </div>
                </div>
                <div class="cause-item">
                    <div class="cause-percentage">22%</div>
                    <div class="cause-info">
                        <h3>Faktor Alam</h3>
                        <p>Peningkatan karena perubahan iklim</p>
                    </div>
                </div>
                <div class="cause-item">
                    <div class="cause-percentage">10%</div>
                    <div class="cause-info">
                        <h3>Kelalaian Perusahaan</h3>
                        <p>Operasional perkebunan dan industri</p>
                    </div>
                </div>
                <div class="cause-item">
                    <div class="cause-percentage">5%</div>
                    <div class="cause-info">
                        <h3>Tidak Diketahui</h3>
                        <p>Penyebab tidak dapat diidentifikasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact">
        <div class="container">
            <h2 class="section-title">Dampak Positif Program 2025</h2>
            <div class="impact-grid">
                <div class="impact-card">
                    <div class="impact-icon">📉</div>
                    <h3 class="impact-title">Penurunan 40%</h3>
                    <p>Titik panas dibandingkan 2023</p>
                </div>
                <div class="impact-card">
                    <div class="impact-icon">🛰️</div>
                    <h3 class="impact-title">85% Coverage</h3>
                    <p>Area terpantau sistem early warning</p>
                </div>
                <div class="impact-card">
                    <div class="impact-icon">👥</div>
                    <h3 class="impact-title">15.200+</h3>
                    <p>Relawan terlatih di 120 desa</p>
                </div>
                <div class="impact-card">
                    <div class="impact-icon">🌱</div>
                    <h3 class="impact-title">45.000 Ha</h3>
                    <p>Lahan direboisasi dan dipulihkan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Source Section -->
    <section class="data-source">
        <div class="container">
            <h2 class="section-title">Sumber Data & Metodologi</h2>
            <div class="source-text">
                <p>Data yang disajikan dikumpulkan dari berbagai sumber terpercaya termasuk Kementerian Lingkungan Hidup dan Kehutanan, LAPAN, BMKG, NASA FIRMS, dan sistem pemantauan HutanLestari.</p>
                <p style="margin-top: 1rem;">Metodologi analisis mencakup pemrosesan data satelit, validasi lapangan, dan machine learning untuk prediksi akurat.</p>
                <p style="margin-top: 1rem; color: var(--fire-orange); font-weight: 500;">Terakhir diperbarui: 15 Desember 2025</p>
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
        // Initialize Charts
        document.addEventListener('DOMContentLoaded', function() {
            // Trend Chart 2021-2025
            const trendCtx = document.getElementById('trendChart').getContext('2d');
            const trendChart = new Chart(trendCtx, {
                type: 'line',
                data: {
                    labels: ['2021', '2022', '2023', '2024', '2025'],
                    datasets: [{
                        label: 'Luas Kebakaran (Juta Ha)',
                        data: [3.5, 3.8, 4.2, 3.2, 2.8],
                        borderColor: '#FF4500',
                        backgroundColor: 'rgba(255, 69, 0, 0.1)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            labels: {
                                color: '#FFFFFF'
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)'
                            },
                            ticks: {
                                color: '#FFFFFF'
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)'
                            },
                            ticks: {
                                color: '#FFFFFF'
                            }
                        }
                    }
                }
            });

            // Cause Chart 2025
            const causeCtx = document.getElementById('causeChart').getContext('2d');
            const causeChart = new Chart(causeCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Pembukaan Lahan', 'Aktivitas Masyarakat', 'Faktor Alam', 'Kelalaian Perusahaan', 'Tidak Diketahui'],
                    datasets: [{
                        data: [35, 28, 22, 10, 5],
                        backgroundColor: [
                            '#FF4500',
                            '#FFA500',
                            '#2E8B57',
                            '#4682B4',
                            '#696969'
                        ],
                        borderWidth: 2,
                        borderColor: '#1C1C1C'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                color: '#FFFFFF',
                                padding: 20
                            }
                        }
                    }
                }
            });

            // Monthly Chart 2025
            const monthlyCtx = document.getElementById('monthlyChart').getContext('2d');
            const monthlyChart = new Chart(monthlyCtx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                    datasets: [{
                        label: 'Luas Kebakaran (Ribu Ha)',
                        data: [85, 62, 45, 30, 22, 18, 20, 120, 280, 420, 580, 720],
                        backgroundColor: '#FF4500',
                        borderColor: '#FF4500',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            labels: {
                                color: '#FFFFFF'
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)'
                            },
                            ticks: {
                                color: '#FFFFFF'
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)'
                            },
                            ticks: {
                                color: '#FFFFFF'
                            }
                        }
                    }
                }
            });

            // Forest Type Chart 2025
            const forestTypeCtx = document.getElementById('forestTypeChart').getContext('2d');
            const forestTypeChart = new Chart(forestTypeCtx, {
                type: 'polarArea',
                data: {
                    labels: ['Hutan Primer', 'Hutan Sekunder', 'Lahan Gambut', 'Perkebunan', 'Semak Belukar'],
                    datasets: [{
                        data: [18, 32, 25, 18, 7],
                        backgroundColor: [
                            '#2E8B57',
                            '#3CB371',
                            '#8B4513',
                            '#FFA500',
                            '#CD853F'
                        ],
                        borderWidth: 2,
                        borderColor: '#1C1C1C'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                color: '#FFFFFF',
                                padding: 20
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>
