<?php include "includes/navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison | Ethernet vs Wi-Fi Detailed</title>
    <link rel="stylesheet" href="assets/CSS/comparison.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<section class="hero-blue-section">
    <div class="container">
        <h1>Ethernet vs Wi-Fi</h1>
        <p class="hero-desc">A comprehensive technical comparison of wired stability versus wireless flexibility. Explore how these technologies differ in speed, security, and reliability across various network environments.</p>
        
        <div class="toggle-wrapper">
            <button id="btn-eth" class="toggle-btn active" onclick="showContent('eth')">Ethernet (Wired)</button>
            <button id="btn-wifi" class="toggle-btn" onclick="showContent('wifi')">Wi-Fi (Wireless)</button>
        </div>
    </div>
</section>

<main class="container">
    <div id="eth-content" class="tab-content active">
        <div class="cards-grid">
            <div class="info-card">
                <div class="card-icon blue"><i class="fas fa-bolt"></i></div>
                <h3>Standards & Speeds</h3>
                <p>Consistent full-duplex transmission based on IEEE 802.3 standards.</p>
                <ul class="specs">
                    <li><i class="fas fa-check"></i> <strong>100Base-TX:</strong> Fast Ethernet (100 Mbps).</li>
                    <li><i class="fas fa-check"></i> <strong>1000Base-T:</strong> Gigabit Ethernet (1 Gbps).</li>
                    <li><i class="fas fa-check"></i> <strong>10Gbase-T:</strong> High-speed 10 Gbps via Cat6a/7.</li>
                </ul>
            </div>
            <div class="info-card featured">
                <div class="card-icon green"><i class="fas fa-shield-alt"></i></div>
                <h3>Security & Reliability</h3>
                <p>Maximum stability with inherent physical security.</p>
                <ul class="specs">
                    <li><i class="fas fa-check"></i> <strong>Security:</strong> Requires physical port access; immune to remote signal sniffing.</li>
                    <li><i class="fas fa-check"></i> <strong>Immunity:</strong> No interference from electronic devices or walls (EMI resistant).</li>
                    <li><i class="fas fa-check"></i> <strong>Distance:</strong> Reliable up to 100 meters per cable segment.</li>
                </ul>
            </div>
            <div class="info-card">
                <div class="card-icon purple"><i class="fas fa-briefcase"></i></div>
                <h3>Real-World Use Cases</h3>
                <p>Preferred in environments where uptime and speed are critical.</p>
                <ul class="specs">
                    <li><i class="fas fa-check"></i> <strong>Enterprise:</strong> Large data centers and server farms.</li>
                    <li><i class="fas fa-check"></i> <strong>Productivity:</strong> Professional office workstations and desktop setups.</li>
                    <li><i class="fas fa-check"></i> <strong>High-End:</strong> Lag-free gaming and 4K/8K video production.</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="wifi-content" class="tab-content">
        <div class="cards-grid">
            <div class="info-card">
                <div class="card-icon blue"><i class="fas fa-signal"></i></div>
                <h3>Wireless Standards</h3>
                <p>Evolution of IEEE 802.11 standards providing mobility and flexibility.</p>
                <ul class="specs">
                    <li><i class="fas fa-check"></i> <strong>802.11n (Wi-Fi 4):</strong> Up to 600 Mbps (2.4/5 GHz).</li>
                    <li><i class="fas fa-check"></i> <strong>802.11ac (Wi-Fi 5):</strong> Up to 3.46 Gbps (5 GHz).</li>
                    <li><i class="fas fa-check"></i> <strong>802.11ax (Wi-Fi 6):</strong> Up to 9.6 Gbps with efficient
multi-device handling.</li>
                </ul>
            </div>
            <div class="info-card featured">
                <div class="card-icon green"><i class="fas fa-key"></i></div>
                <h3>Security & Performance</h3>
                <p>Protection via encryption protocols and environmental factors.</p>
                <ul class="specs">
                    <li><i class="fas fa-check"></i> <strong>Protocols:</strong> WPA2 (Standard) and WPA3 (Latest & most secure).</li>
                    <li><i class="fas fa-check"></i> <strong>Factors:</strong> Range varies by distance, obstacles (walls), and RF interference.</li>
                    <li><i class="fas fa-check"></i> <strong>Congestion:</strong> Performance can drop in crowded networks with many clients.</li>
                </ul>
            </div>
            <div class="info-card">
                <div class="card-icon purple"><i class="fas fa-home"></i></div>
                <h3>Real-World Use Cases</h3>
                <p>Designed for environments requiring mobility and flexibility.</p>
                <ul class="specs">
                    <li><i class="fas fa-check"></i> <strong>Daily Use:</strong> Home networking and smart home device connectivity.</li>
                    <li><i class="fas fa-check"></i> <strong>Public:</strong> Coffee shops, airports, and public browsing areas.</li>
                    <li><i class="fas fa-check"></i> <strong>Corporate:</strong> Guest networks and conference rooms in modern offices.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="chart-section">
        <div class="table-wrapper">
            <h2>Quick Reference <span>Comparison Chart</span></h2>
            <table>
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Ethernet (Wired)</th>
                        <th>Wi-Fi (Wireless)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Max Speed</td><td>Up to 10 Gbps (Dedicated)</td><td>Up to 9.6 Gbps (Shared)</td></tr>
                    <tr><td>Reliability</td><td>Highly Stable (No Jitter)</td><td>Prone to Interference/Congestion</td></tr>
                    <tr><td>Security</td><td>High (Physical Access Required)</td><td>Software-based (WPA2/WPA3)</td></tr>
                    <tr><td>Coverage/Range</td><td>Fixed (100m per cable segment)</td><td>Variable (Indoor ~35m / Outdoor ~100m)</td></tr>
                    <tr><td>Best For (Use Case)</td><td>Data Centers & Offices (Fixed)</td><td>Homes & Public Spaces (Mobile)</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<script>
function showContent(type) {
    document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
    document.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
    
    if(type === 'eth') {
        document.getElementById('eth-content').classList.add('active');
        document.getElementById('btn-eth').classList.add('active');
    } else {
        document.getElementById('wifi-content').classList.add('active');
        document.getElementById('btn-wifi').classList.add('active');
    }
}
</script>

<?php include "includes/footer.php"; ?>
</body>
</html>