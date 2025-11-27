<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi Korban Kebakaran Hutan | HutanLestari</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #FF4500;
            --dark-bg: #1C1C1C;
            --card-bg: rgba(255, 255, 255, 0.05);
            --white: #FFFFFF;
            --text-gray: #B0B0B0;
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
            background-color: var(--dark-bg);
            position: fixed;
            width: 100%;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
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
            color: var(--primary-color);
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
            color: var(--primary-color);
        }

        .donation-header {
            padding: 10rem 0 3rem;
            text-align: center;
            background: linear-gradient(rgba(28, 28, 28, 0.9), rgba(28, 28, 28, 0.95)),
                url('image/image_3edd8a.jpg');
            background-size: cover;
            background-position: center;
        }

        .donation-header h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .donation-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            padding: 3rem 0 5rem;
            align-items: start;
        }

        .donation-info h2 {
            font-family: 'Montserrat', sans-serif;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        .impact-item {
            display: flex;
            margin-bottom: 1.5rem;
            background: var(--card-bg);
            padding: 1.5rem;
            border-radius: 8px;
            align-items: center;
        }

        .impact-icon {
            font-size: 2rem;
            margin-right: 1.5rem;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .donation-form-card {
            background-color: var(--card-bg);
            padding: 2.5rem;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .form-label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: 600;
        }

        .amount-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .amount-btn {
            padding: 1rem;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.2);
            color: var(--white);
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
        }

        .amount-btn:hover,
        .amount-btn.active {
            border-color: var(--primary-color);
            background: var(--primary-color);
        }

        .input-group {
            margin-bottom: 1.5rem;
        }

        .form-input {
            width: 100%;
            padding: 1rem;
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            color: white;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .btn-submit {
            width: 100%;
            padding: 1.2rem;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 700;
            cursor: pointer;
            text-transform: uppercase;
        }

        .btn-submit:hover {
            opacity: 0.9;
        }

        #payment-instruction {
            display: none;
        }

        .payment-summary {
            text-align: center;
            margin-bottom: 2rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 1.5rem;
        }

        .big-amount {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary-color);
            margin: 0.5rem 0;
        }

        .bank-details {
            background: rgba(0, 0, 0, 0.4);
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .bank-logo {
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            display: block;
        }

        .account-number {
            font-size: 1.8rem;
            font-family: monospace;
            letter-spacing: 2px;
            margin: 1rem 0;
            display: block;
        }

        .copy-btn {
            background: transparent;
            border: 1px solid var(--white);
            color: var(--white);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            cursor: pointer;
            margin-left: 10px;
        }

        .copy-btn:hover {
            background: var(--white);
            color: var(--dark-bg);
        }

        .qr-placeholder {
            background: white;
            width: 200px;
            height: 200px;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            font-weight: bold;
        }

        .btn-secondary {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: var(--text-gray);
            width: 100%;
            padding: 1rem;
            margin-top: 1rem;
            border-radius: 8px;
            cursor: pointer;
        }

        /* Footer */
        footer {
            background-color: #111;
            padding: 3rem 0;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            margin-top: auto;
        }

        @media (max-width: 900px) {
            .donation-layout {
                grid-template-columns: 1fr;
            }

            nav ul {
                display: none;
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
                        <li><a href="donasi.php" class="active">Donasi</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="donation-header">
        <div class="container">
            <h1>Bantu Pulihkan Hutan & Korban</h1>
            <p>Donasi Anda akan disalurkan langsung untuk bantuan medis, logistik pemadam, dan pemulihan ekosistem.</p>
        </div>
    </section>

    <section class="container">
        <div class="donation-layout">

            <div class="donation-info">
                <h2>Transparansi Donasi</h2>
                <div class="impact-item">
                    <div class="impact-icon">🏥</div>
                    <div>
                        <h3>Bantuan Medis</h3>
                        <p style="color:var(--text-gray)">Masker, oksigen, dan obat-obatan untuk korban asap.</p>
                    </div>
                </div>
                <div class="impact-item">
                    <div class="impact-icon">🚒</div>
                    <div>
                        <h3>Operasional Pemadaman</h3>
                        <p style="color:var(--text-gray)">Logistik dan peralatan safety untuk relawan.</p>
                    </div>
                </div>
                <div class="impact-item">
                    <div class="impact-icon">🌱</div>
                    <div>
                        <h3>Bibit Pohon</h3>
                        <p style="color:var(--text-gray)">Penanaman kembali area hutan yang hangus terbakar.</p>
                    </div>
                </div>
            </div>

            <div class="donation-form-card">

                <div id="donation-step-1">
                    <h3 style="margin-bottom: 1.5rem; font-family: 'Montserrat', sans-serif;">Pilih Nominal Donasi</h3>

                    <form id="formDonasi" onsubmit="goToPayment(event)">
                        <label class="form-label">Nominal</label>
                        <div class="amount-grid">
                            <button type="button" class="amount-btn" onclick="selectAmount(this, 50000)">50000</button>
                            <button type="button" class="amount-btn active" onclick="selectAmount(this, 100000)">100000</button>
                            <button type="button" class="amount-btn" onclick="selectAmount(this, 250000)">250000</button>
                            <button type="button" class="amount-btn" onclick="selectAmount(this, 500000)">500000</button>
                        </div>

                        <div class="input-group">
                            <input type="number" id="customAmount" class="form-input" placeholder="Atau masukkan nominal lain, contoh 800000">
                        </div>

                        <div class="input-group">
                            <label class="form-label">Nama (Opsional)</label>
                            <input type="text" id="donorName" class="form-input" placeholder="Nama Orang Baik">
                        </div>

                        <div class="input-group">
                            <label class="form-label">Email (Untuk Bukti Donasi)</label>
                            <input type="email" id="donorEmail" class="form-input" placeholder="contoh@email.com" required>
                        </div>
                        <div class="input-group">
                            <label class="form-label">Metode Pembayaran</label>
                            <select id="paymentMethod" class="form-input" style="cursor: pointer;">
                                <option value="qris">QRIS (Scan Barcode)</option>
                                <option value="bca">Transfer Bank BCA</option>
                                <option value="mandiri">Transfer Bank Mandiri</option>
                                <option value="bri">Transfer Bank BRI</option>
                            </select>
                        </div>

                        <button type="submit" class="btn-submit">Lanjut Pembayaran</button>
                    </form>
                </div>

                <div id="donation-step-2" style="display: none;">
                    <h3 style="margin-bottom: 1.5rem; text-align: center;">Selesaikan Pembayaran</h3>

                    <div class="payment-summary">
                        <p style="color: var(--text-gray)">Total Donasi Anda</p>
                        <div class="big-amount" id="displayAmount">Rp 0</div>
                        <p id="displayNameDisplay" style="font-size: 0.9rem;">Dari: Hamba Allah</p>
                        <p id="displayEmail" style="font-size: 0.8rem; color: var(--text-gray);"></p>
                    </div>

                    <div id="qris-area" style="display: none; text-align: center;">
                        <div class="qr-placeholder">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=HutanLestariDonasi" alt="QRIS Code">
                        </div>
                        <p>Scan QRIS di atas menggunakan GoPay, OVO, Dana, atau Mobile Banking.</p>
                    </div>

                    <div id="bank-area" style="display: none;">
                        <div class="bank-details">
                            <span class="bank-logo" id="bankNameDisplay">BANK NAME</span>
                            <span class="account-number" id="accountNumberDisplay">0000 0000 0000</span>
                            <p>a.n Yayasan Hutan Lestari</p>
                            <button class="copy-btn" onclick="copyToClipboard()">Salin No. Rek</button>
                        </div>
                        <p style="text-align: center; font-size: 0.9rem; color: var(--text-gray)">
                            Silakan transfer sesuai nominal tepat hingga 3 digit terakhir.
                        </p>
                    </div>

                    <div style="margin-top: 2rem;">
                        <button class="btn-submit" onclick="finishPayment()">Saya Sudah Transfer</button>
                        <button class="btn-secondary" onclick="backToForm()">Kembali / Ubah</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="copyright">
                &copy; 2023 HutanLestari. Semua hak dilindungi.
            </div>
        </div>
    </footer>

    <script>
        let currentAmount = 100000; // Default

        // 1. Logika Tombol Nominal
        function selectAmount(btn, value) {
            document.querySelectorAll('.amount-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentAmount = value;
            document.getElementById('customAmount').value = '';
        }

        document.getElementById('customAmount').addEventListener('input', function(e) {
            document.querySelectorAll('.amount-btn').forEach(b => b.classList.remove('active'));
            currentAmount = parseInt(e.target.value) || 0;
        });

        // 2. Transisi ke Halaman Pembayaran
        function goToPayment(e) {
            e.preventDefault();

            if (currentAmount < 10000) {
                alert("Mohon maaf, minimal donasi adalah Rp 10.000");
                return;
            }

            // Ambil Data dari Input
            const name = document.getElementById('donorName').value || 'Hamba Allah';
            const email = document.getElementById('donorEmail').value; // Ambil email
            const method = document.getElementById('paymentMethod').value;

            // Tampilkan Data di Langkah 2
            document.getElementById('displayAmount').innerText = 'Rp ' + currentAmount.toLocaleString('id-ID');
            document.getElementById('displayNameDisplay').innerText = 'Dari: ' + name;
            document.getElementById('displayEmail').innerText = 'Bukti akan dikirim ke: ' + email; // Tampilkan info email

            // Logika Tampilan Bank / QRIS
            const qrisArea = document.getElementById('qris-area');
            const bankArea = document.getElementById('bank-area');

            if (method === 'qris') {
                qrisArea.style.display = 'block';
                bankArea.style.display = 'none';
            } else {
                qrisArea.style.display = 'none';
                bankArea.style.display = 'block';

                const bankName = document.getElementById('bankNameDisplay');
                const accNum = document.getElementById('accountNumberDisplay');

                if (method === 'bca') {
                    bankName.innerText = "BANK BCA";
                    accNum.innerText = "123 456 7890";
                } else if (method === 'mandiri') {
                    bankName.innerText = "BANK MANDIRI";
                    accNum.innerText = "123 000 456 789";
                } else if (method === 'bri') {
                    bankName.innerText = "BANK BRI";
                    accNum.innerText = "1234 01 0000 567";
                }
            }

            // Animasi Ganti Halaman
            document.getElementById('donation-step-1').style.display = 'none';
            document.getElementById('donation-step-2').style.display = 'block';

            document.querySelector('.donation-form-card').scrollIntoView({
                behavior: 'smooth'
            });
        }

        function backToForm() {
            document.getElementById('donation-step-1').style.display = 'block';
            document.getElementById('donation-step-2').style.display = 'none';
        }

        function finishPayment() {
            const email = document.getElementById('donorEmail').value;
            alert("Terima kasih! Bukti donasi akan segera dikirim ke email: " + email);
            location.reload();
        }

        function copyToClipboard() {
            const num = document.getElementById('accountNumberDisplay').innerText.replace(/\s/g, '');
            navigator.clipboard.writeText(num);
            alert("Nomor rekening berhasil disalin!");
        }
    </script>
</body>

</html>
