<?php include "includes/navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison | Ethernet vs Wi-Fi Detailed</title>
    <link rel="stylesheet" href="assets/CSS/comparison.css">
    <link rel="stylesheet" href="https://cloudflare.com">
</head>
<body>

<section class="hero-blue-section">
    <div class="container">
        <span class="top-tag">Technical Comparison</span>
        <h1>Ethernet vs Wi-Fi</h1>
        <p class="hero-desc">Explore the fundamental differences between wired and wireless communication. Compare technical specifications, security protocols, and performance factors to determine the best fit for your network environment.</p>
        
        <div class="toggle-wrapper">
            <button id="btn-eth" class="toggle-btn active" onclick="showContent('eth')">Ethernet</button>
            <button id="btn-wifi" class="toggle-btn" onclick="showContent('wifi')">Wi-Fi</button>
        </div>
    </div>
</section>

<main class="container">
    <div id="eth-content" class="tab-content active">
        <div class="cards-grid">
            <div class="info-card">
                <div class="card-icon"><i class="fas fa-network-wired"></i></div>
                <h3>Technical Standards</h3>
                <p>High-performance wired communication based on global IEEE standards.</p>
                <ul class="specs">
                    <li><i class="fas fa-check"></i> IEEE 802.3 Standard Compliance</li>
                    <li><i class="fas fa-check"></i> Supports Full-Duplex Transmission</li>
                    <li><i class="fas fa-check"></i> Low Latency & High Signal Integrity</li>
                </ul>
            </div>
            <div class="info-card">
                <div class="card-icon"><i class="fas fa-shield-virus"></i></div>
                <h3>Physical Security</h3>
                <p>Highest level of security due to physical connection requirements.</p>
                <ul class="specs">
                    <li><i class="fas fa-check"></i> Immune to Remote Signal Sniffing</li>
                    <li><i class="fas fa-check"></i> EMI Resistant (Cat6a/Cat7)</li>
                    <li><i class="fas fa-check"></i> Reliable Physical Port Access</li>
                </ul>
            </div>
            <div class="info-card">
                <div class="card-icon"><i class="fas fa-server"></i></div>
                <h3>Optimized Use Cases</h3>
                <p>Designed for environments requiring 100% uptime and speed.</p>
                <ul class="specs">
                    <li><i class="fas fa-check"></i> Enterprise Data Centers</li>
                    <li><i class="fas fa-check"></i> Professional Desktop Workstations</li>
                    <li><i class="fas fa-check"></i> Lag-Free High-End Gaming</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="wifi-content" class="tab-content">
        <div class="cards-grid">
            <div class="info-card">
                <div class="card-icon"><i class="fas fa-broadcast-tower"></i></div>
                <h3>Modern Standards</h3>
                <p>Flexible wireless communication evolving through IEEE 802.11.</p>
                <ul class="specs">
                    <li><i class="fas fa-check"></i> Wi-Fi 6 (802.11ax) Technology</li>
                    <li><i class="fas fa-check"></i> Dual-Band: 2.4 GHz & 5 GHz</li>
                    <li><i class="fas fa-check"></i> Multi-Device Traffic Management</li>
                </ul>
            </div>
            <div class="info-card">
                <div class="card-icon"><i class="fas fa-key"></i></div>
                <h3>Wireless Protection</h3>
                <p>Advanced software-based encryption to secure airwaves.</p>
                <ul class="specs">
                    <li><i class="fas fa-check"></i> WPA2 (Standard) & WPA3 (Latest)</li>
                    <li><i class="fas fa-check"></i> AES 256-bit Encryption Support</li>
                    <li><i class="fas fa-check"></i> Secure Guest Network Isolation</li>
                </ul>
            </div>
            <div class="info-card">
                <div class="card-icon"><i class="fas fa-mobile-alt"></i></div>
                <h3>Optimized Use Cases</h3>
                <p>Best for mobility and flexibility in modern environments.</p>
                <ul class="specs">
                    <li><i class="fas fa-check"></i> Home & IoT Device Networking</li>
                    <li><i class="fas fa-check"></i> Public Airports & Coffee Shops</li>
                    <li><i class="fas fa-check"></i> Corporate Conference Rooms</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="chart-section">
        <h2>Quick Reference Comparison Chart</h2>
        <div class="table-wrapper">
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
                    <tr><td>Reliability</td><td>Highly Stable (No Jitter)</td><td>Prone to Interference</td></tr>
                    <tr><td>Security</td><td>High (Physical)</td><td>Software (WPA2/WPA3)</td></tr>
                    <tr><td>Coverage</td><td>Fixed (100m per segment)</td><td>Variable (Obstacle Dependent)</td></tr>
                    <tr><td>Latency</td><td>Ultra Low (< 1ms)</td><td>Fluctuating Latency</td></tr>
                    <tr class="verdict-row">
                        <td>Verdict (Best For)</td>
                        <td>Critical Infrastructure & Servers</td>
                        <td>Mobility & Public Access</td>
                    </tr>
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
