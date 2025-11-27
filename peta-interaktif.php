<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Risiko Kebakaran Hutan | HutanLestari</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
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
            background-color: var(--dark-bg);
            box-shadow: 0 2px 10px rgba(0,0,0,0.5);
            position: fixed; 
            width: 100%;
            z-index: 1000;
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
        
        .page-header {
            padding: 10rem 0 3rem; 
            background: linear-gradient(rgba(28, 28, 28, 0.8), rgba(28, 28, 28, 0.9)), 
                        url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="300" viewBox="0 0 1200 300"><rect width="1200" height="300" fill="%231C1C1C"/><path d="M0,200 Q300,100 600,200 T1200,100 L1200,300 L0,300 Z" fill="%232E8B57" opacity="0.3"/><circle cx="900" cy="80" r="30" fill="%23FF4500" opacity="0.3"/></svg>');
            background-size: cover;
            background-position: center;
        }
        
        .page-header h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 3rem;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .page-header p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            text-align: center;
        }
        
        .map-section {
            padding: 2rem 0 5rem;
        }
        
        .map-container {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }
        
        @media (min-width: 992px) {
            .map-container {
                flex-direction: row;
                align-items: flex-start;
            }
        }
        
        .map-controls {
            flex: 1;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 2rem;
            width: 100%;
        }
        
        @media (min-width: 992px) {
            .map-controls {
                max-width: 350px;
                position: sticky;
                top: 100px;
            }
        }
        
        .map-legend {
            margin-bottom: 2rem;
        }
        
        .map-legend h3, .map-filters h3 {
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        
        .legend-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.8rem;
        }
        
        .legend-color {
            width: 20px;
            height: 20px;
            border-radius: 4px;
            margin-right: 10px;
        }
        
        .filter-group {
            margin-bottom: 1.5rem;
        }
        
        .filter-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .filter-select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--white);
            font-size: 1rem;
        }
        
        .filter-checkbox {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        
        .filter-checkbox input {
            margin-right: 0.5rem;
        }
        
        .map-display {
            flex: 2;
            height: 600px; 
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
        }
        
        #interactive-map {
            width: 100%;
            height: 100%;
            background-color: #222;
        }
        

        .info-panel {
            background-color: rgba(28, 28, 28, 0.9);
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 2rem;
            border-left: 4px solid var(--fire-orange);
        }
        
        .info-panel h3 {
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 1rem;
            color: var(--fire-orange);
        }
        
        .info-panel p {
            margin-bottom: 1rem;
        }
        
        .btn {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            cursor: pointer;
            border: none;
            font-family: 'Open Sans', sans-serif;
            font-size: 1rem;
            width: 100%;
            text-align: center;
        }
        
        .btn-primary {
            background-color: var(--fire-orange);
            color: var(--white);
        }
        
        .btn-primary:hover {
            background-color: #e03d00;
        }
        
        .statistics {
            padding: 5rem 0;
            background-color: rgba(46, 139, 87, 0.1);
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
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--fire-orange);
            margin-bottom: 0.5rem;
        }
        
        .stat-desc {
            font-size: 1.1rem;
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
        
        @media (max-width: 768px) {
            .page-header h1 { font-size: 2.2rem; }
            .section-title { font-size: 2rem; }
            nav ul { display: none; }
        }
        
        .risk-high { background-color: #FF4500; }
        .risk-medium { background-color: #FFA500; }
        .risk-low { background-color: #FFFF00; }
        .risk-very-low { background-color: #90EE90; }
        .risk-no-data { background-color: #CCCCCC; }
        
        .custom-marker {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            border: 2px solid white;
        }
        
        .leaflet-popup-content-wrapper {
            background-color: var(--dark-bg);
            color: var(--white);
        }
        .leaflet-popup-tip {
            background-color: var(--dark-bg);
        }
        .leaflet-container a {
            color: var(--fire-orange);
        }
        .leaflet-control-layers {
            background: #333;
            color: #fff;
            border: 1px solid #555;
        }
    </style>
</head>
<body>
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
                        <li><a href="pelajari.php">Pelajari</a></li>
                        <li><a href="peta-interaktif.php" class="active">Peta Interaktif</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="page-header">
        <div class="container">
            <h1>Peta Risiko Kebakaran Hutan</h1>
            <p>Pantau area dengan risiko kebakaran hutan tinggi di Indonesia secara real-time dan dapatkan informasi terbaru tentang titik panas (hotspot).</p>
        </div>
    </section>

    <section class="map-section">
        <div class="container">
            <div class="map-container">
                <div class="map-controls">
                    <div class="map-legend">
                        <h3>Legenda Risiko</h3>
                        <div class="legend-item"><div class="legend-color risk-high"></div><div class="legend-label">Risiko Tinggi</div></div>
                        <div class="legend-item"><div class="legend-color risk-medium"></div><div class="legend-label">Risiko Sedang</div></div>
                        <div class="legend-item"><div class="legend-color risk-low"></div><div class="legend-label">Risiko Rendah</div></div>
                        <div class="legend-item"><div class="legend-color risk-very-low"></div><div class="legend-label">Risiko Sangat Rendah</div></div>
                        <div class="legend-item"><div class="legend-color risk-no-data"></div><div class="legend-label">Tidak Ada Data</div></div>
                    </div>
                    
                    <div class="map-filters">
                        <h3>Filter Peta</h3>
                        <div class="filter-group">
                            <label for="province-select">Provinsi</label>
                            <select id="province-select" class="filter-select">
                                <option value="all">Semua Provinsi</option>
                                <option value="kalimantan">Kalimantan</option>
                                <option value="sumatera">Sumatera</option>
                                <option value="sulawesi">Sulawesi</option>
                                <option value="papua">Papua</option>
                                <option value="java">Jawa</option>
                            </select>
                        </div>
                        
                        <div class="filter-group">
                            <label for="risk-level">Tingkat Risiko</label>
                            <select id="risk-level" class="filter-select">
                                <option value="all">Semua Tingkat Risiko</option>
                                <option value="high">Tinggi</option>
                                <option value="medium">Sedang</option>
                                <option value="low">Rendah</option>
                            </select>
                        </div>
                        
                        <div class="filter-group">
                            <label>Tampilkan</label>
                            <div class="filter-checkbox">
                                <input type="checkbox" id="show-hotspots" checked>
                                <label for="show-hotspots">Titik Panas (Hotspots)</label>
                            </div>
                            <div class="filter-checkbox">
                                <input type="checkbox" id="show-risk-areas" checked>
                                <label for="show-risk-areas">Area Berisiko</label>
                            </div>
                            <div class="filter-checkbox">
                                <input type="checkbox" id="show-prevention" checked>
                                <label for="show-prevention">Lokasi Pencegahan</label>
                            </div>
                        </div>
                        
                        <button id="apply-filters" class="btn btn-primary">Terapkan Filter</button>
                    </div>
                    
                    <div class="info-panel">
                        <h3>Informasi Penting</h3>
                        <p>Peta ini menampilkan data risiko kebakaran hutan berdasarkan analisis cuaca, kelembaban tanah, dan titik panas satelit.</p>
                        <button id="report-incident" class="btn btn-primary">Laporkan Kejadian</button>
                    </div>
                </div>
                
                <div class="map-display">
                    <div id="interactive-map"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="statistics">
        <div class="container">
            <h2 class="section-title">Statistik Terkini</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">142</div>
                    <div class="stat-desc">Titik Panas Terdeteksi Hari Ini</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">6</div>
                    <div class="stat-desc">Provinsi dengan Risiko Tinggi</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">12.5K</div>
                    <div class="stat-desc">Hektar Hutan Terbakar (Tahun Ini)</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">-18%</div>
                    <div class="stat-desc">Penurunan Titik Panas vs Tahun Lalu</div>
                </div>
            </div>
        </div>
    </section>

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

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        const darkMap = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 19
        });

        const lightMap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

        const map = L.map('interactive-map', {
            center: [-2.5489, 118.0149],
            zoom: 5,
            layers: [darkMap] 
        });


        setTimeout(function(){ 
            map.invalidateSize(); 
        }, 100);

        const hotspotsLayer = L.layerGroup().addTo(map);
        const preventionLayer = L.layerGroup().addTo(map);
        const riskAreasLayer = L.layerGroup().addTo(map);

        const baseLayers = {
            "Peta Gelap": darkMap,
            "Peta Terang": lightMap
        };

        const overlays = {
            "Titik Panas": hotspotsLayer,
            "Area Berisiko": riskAreasLayer,
            "Lokasi Pencegahan": preventionLayer
        };

        L.control.layers(baseLayers, overlays).addTo(map);

        const riskLevels = {
            'high': '#FF4500', 'medium': '#FFA500', 'low': '#FFFF00',
            'very-low': '#90EE90', 'no-data': '#CCCCCC'
        };
        
        const hotspots = [
            { lat: -0.7893, lng: 113.9213, risk: 'high', province: 'kalimantan', description: 'Titik panas terdeteksi di Kalimantan Tengah' },
            { lat: -2.3683, lng: 115.2833, risk: 'medium', province: 'kalimantan', description: 'Aktivitas kebakaran terdeteksi di Kalimantan Selatan' },
            { lat: 0.5071, lng: 101.4478, risk: 'high', province: 'sumatera', description: 'Titik panas dengan risiko tinggi di Riau' },
            { lat: -3.3199, lng: 114.5901, risk: 'low', province: 'kalimantan', description: 'Titik panas dengan risiko rendah' },
            { lat: -2.1159, lng: 106.1097, risk: 'medium', province: 'sumatera', description: 'Aktivitas kebakaran di Bangka Belitung' },
            { lat: -1.4300, lng: 102.1400, risk: 'high', province: 'sumatera', description: 'Titik panas dengan risiko tinggi di Jambi' },
            { lat: -5.1477, lng: 119.4327, risk: 'low', province: 'sulawesi', description: 'Titik panas dengan risiko rendah di Sulawesi Selatan' },
            { lat: -7.7971, lng: 110.3688, risk: 'very-low', province: 'java', description: 'Aktivitas minimal di Yogyakarta' }
        ];

        const preventionLocations = [
            { lat: -0.7893, lng: 114.9213, type: 'monitoring', name: 'Pos Pengawasan Kalimantan Tengah' },
            { lat: 0.5071, lng: 101.9478, type: 'water-source', name: 'Sumber Air Darurat Riau' },
            { lat: -2.1159, lng: 106.2097, type: 'community', name: 'Kelompok Masyarakat Peduli Api Bangka' },
            { lat: -5.1477, lng: 119.5327, type: 'monitoring', name: 'Pos Pengawasan Sulawesi Selatan' }
        ];

        function addHotspots() {
            hotspotsLayer.clearLayers();
            hotspots.forEach(hotspot => {
                const markerColor = riskLevels[hotspot.risk];
                const marker = L.circleMarker([hotspot.lat, hotspot.lng], {
                    color: markerColor, fillColor: markerColor, fillOpacity: 0.7, radius: 8
                }).bindPopup(`<div style="color: #333;"><h3 style="margin:0 0 5px; color:${markerColor}">Titik Panas</h3><p>${hotspot.description}</p></div>`);
                hotspotsLayer.addLayer(marker);
            });
        }
        
        function addPreventionLocations() {
            preventionLayer.clearLayers();
            preventionLocations.forEach(location => {
                let iconColor = location.type === 'monitoring' ? '#2E8B57' : (location.type === 'water-source' ? '#1E90FF' : '#FFD700');
                let iconText = location.type === 'monitoring' ? 'M' : (location.type === 'water-source' ? 'W' : 'C');
                
                const marker = L.marker([location.lat, location.lng], {
                    icon: L.divIcon({
                        className: 'custom-marker',
                        html: iconText,
                        iconSize: [30, 30],
                        iconAnchor: [15, 15]
                    })
                }).bindPopup(`<div style="color: #333;"><h3 style="margin:0 0 5px;">${location.name}</h3></div>`);
                preventionLayer.addLayer(marker);
            });
        }

        function addRiskAreas() {
            riskAreasLayer.clearLayers();
            const riskAreas = [
                { lat: -0.5, lng: 114, risk: 'high', radius: 80000 },
                { lat: 0.5, lng: 101.5, risk: 'high', radius: 60000 },
                { lat: -2.5, lng: 115.5, risk: 'medium', radius: 50000 }
            ];
            riskAreas.forEach(area => {
                const color = riskLevels[area.risk];
                L.circle([area.lat, area.lng], {
                    color: color, fillColor: color, fillOpacity: 0.2, radius: area.radius
                }).addTo(riskAreasLayer);
            });
        }

        addHotspots();
        addPreventionLocations();
        addRiskAreas();

        document.getElementById('show-hotspots').addEventListener('change', function() {
            if(this.checked) map.addLayer(hotspotsLayer); else map.removeLayer(hotspotsLayer);
        });
        document.getElementById('show-risk-areas').addEventListener('change', function() {
            if(this.checked) map.addLayer(riskAreasLayer); else map.removeLayer(riskAreasLayer);
        });
        document.getElementById('show-prevention').addEventListener('change', function() {
            if(this.checked) map.addLayer(preventionLayer); else map.removeLayer(preventionLayer);
        });
        
        document.getElementById('apply-filters').addEventListener('click', function() {
            addHotspots(); addPreventionLocations(); addRiskAreas();
            alert("Filter berhasil diterapkan (Simulasi)");
        });
    </script>
</body>
</html>
