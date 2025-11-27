<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami | Pencegahan Kebakaran Hutan</title>
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
        
        header {
            padding: 1.5rem 0;
            background-color: rgba(28, 28, 28, 0.9);
            position: fixed;
            background-color: var(--dark-bg);  
            box-shadow: 0 2px 10px rgba(0,0,0,0.5);
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
        
        nav a:hover,
        nav a.active {
            color: var(--fire-orange);
        }
        
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
        
        .contact-section {
            padding: 5rem 0;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-top: 3rem;
        }
        
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }
        
        .info-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 2rem;
            display: flex;
            gap: 1.5rem;
            transition: transform 0.3s;
        }
        
        .info-card:hover {
            transform: translateY(-5px);
        }
        
        .info-icon {
            font-size: 2.5rem;
            color: var(--fire-orange);
            min-width: 60px;
        }
        
        .info-content h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }
        
        .info-content p {
            color: rgba(255, 255, 255, 0.8);
        }
        
        .info-content a {
            color: var(--fire-orange);
            text-decoration: none;
            transition: opacity 0.3s;
        }
        
        .info-content a:hover {
            opacity: 0.8;
        }
        
        .contact-form {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 2.5rem;
        }
        
        .contact-form h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.05);
            color: var(--white);
            font-family: 'Open Sans', sans-serif;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        
        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--fire-orange);
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }
        
        .btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            cursor: pointer;
            border: none;
            font-size: 1rem;
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
        
        .emergency-contact {
            background-color: rgba(255, 69, 0, 0.1);
            padding: 5rem 0;
        }
        
        .emergency-box {
            background-color: rgba(255, 69, 0, 0.2);
            border: 2px solid var(--fire-orange);
            border-radius: 8px;
            padding: 3rem;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .emergency-box h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--fire-orange);
        }
        
        .emergency-box p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }
        
        .emergency-numbers {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }
        
        .emergency-number {
            background-color: var(--fire-orange);
            padding: 1.5rem 2rem;
            border-radius: 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            font-weight: 800;
        }
        
        .map-section {
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
        
        .map-container {
            border-radius: 8px;
            overflow: hidden;
            height: 400px;
            background-color: rgba(255, 255, 255, 0.05);
        }
        
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
        
        .success-message {
            display: none;
            background-color: var(--forest-green);
            padding: 1rem;
            border-radius: 4px;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        
        .success-message.show {
            display: block;
        }
        
        @media (max-width: 968px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
            
            .emergency-numbers {
                flex-direction: column;
                align-items: center;
            }
        }
        
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
            
            .emergency-box h2 {
                font-size: 2rem;
            }
            
            .emergency-number {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
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
                        <li><a href="kontak.php" class="active">Kontak</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="page-header">
        <div class="container">
            <h1>Hubungi Kami</h1>
            <p>Kami siap membantu Anda. Hubungi kami untuk informasi lebih lanjut, laporan kebakaran, atau kolaborasi dalam upaya pencegahan kebakaran hutan.</p>
        </div>
    </section>

    <section class="emergency-contact">
        <div class="container">
            <div class="emergency-box">
                <h2>🚨 Darurat Kebakaran Hutan</h2>
                <p>Jika Anda melihat kebakaran hutan atau situasi darurat, segera hubungi nomor darurat berikut:</p>
                <div class="emergency-numbers">
                    <div class="emergency-number">115</div>
                    <div class="emergency-number">021-123-4567</div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="info-card">
                        <div class="info-icon">📍</div>
                        <div class="info-content">
                            <h3>Alamat Kantor</h3>
                            <p>Jalan Magelang No. 123<br>Yogyakarta, 12560<br>Indonesia</p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">📞</div>
                        <div class="info-content">
                            <h3>Telepon</h3>
                            <p>Kantor: <a href="tel:+62211234567">(021) 123-4567</a><br>
                            Darurat: <a href="tel:115">115</a></p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">📧</div>
                        <div class="info-content">
                            <h3>Email</h3>
                            <p>Umum: <a href="mailto:info@hutanlestari.org">info@hutanlestari.org</a><br>
                            Laporan: <a href="mailto:laporan@hutanlestari.org">laporan@hutanlestari.org</a></p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">⏰</div>
                        <div class="info-content">
                            <h3>Jam Operasional</h3>
                            <p>Senin - Jumat: 08:00 - 17:00<br>
                            Sabtu: 09:00 - 14:00<br>
                            Minggu & Libur: Tutup<br>
                            <strong>(Darurat 24/7)</strong></p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h2>Kirim Pesan</h2>
                    <div class="success-message" id="successMessage">
                        Terima kasih! Pesan Anda telah berhasil dikirim.
                    </div>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Nama Lengkap *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subjek *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Pilih subjek...</option>
                                <option value="laporan">Laporan Kebakaran</option>
                                <option value="informasi">Permintaan Informasi</option>
                                <option value="kolaborasi">Kolaborasi</option>
                                <option value="relawan">Jadi Relawan</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Pesan *</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section">
        <div class="container">
            <h2 class="section-title">Lokasi Kami</h2>
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.291087955583!2d110.36809631477803!3d-7.756381794405547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59f1fb2f2b45%3A0x20986e2fe9c79cdd!2sUniversitas%20Gadjah%20Mada!5e0!3m2!1sid!2sid!4v1635000000000!5m2!1sid!2sid" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <div class="footer-logo">Hutan<span style="color: var(--fire-orange);">Lestari</span></div>
                    <p>Berdedikasi untuk mencegah kebakaran hutan dan melestarikan ekosistem alami kita melalui pendidikan, kesadaran, dan aksi langsung.</p>
                </div>
                <div class="footer-links">
                    <h3>Tautan Cepat</h3>
                    <ul>
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="tentang.php">Tentang Kami</a></li>
                        <li><a href="statistik.php">Statistik</a></li>
                        <li><a href="pencegahan.php">Pencegahan</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Sumber Daya</h3>
                    <ul>
                        <li><a href="pelajari.php">Pelajari Lebih Lanjut</a></li>
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
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const successMessage = document.getElementById('successMessage');
            successMessage.classList.add('show');
        
            this.reset();
            
            setTimeout(() => {
                successMessage.classList.remove('show');
            }, 5000);
            
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    </script>
</body>
</html>
