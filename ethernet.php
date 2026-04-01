<?php include "includes/navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethernet Technology | Wired Communications</title>
    <link rel="stylesheet" href="assets/css/ethernet.css">
</head>
<body>

<header class="hero-section">
    <div class="hero-content">
        <h1>Ethernet Communication</h1>
        <p>Reliable, high-speed physical connection for modern data transmission.</p>
    </div>
</header>

<main class="main-container">
    
    <section class="content-card">
        <h2 class="section-title">Ethernet Overview</h2>
        <div class="text-block">
            <h3>1. Introduction to Ethernet</h3>
            <p>Ethernet is a family of wired networking technologies used in local area networks (LAN), metropolitan area networks (MAN), and wide area networks (WAN). Developed in the 1970s, it has become the global standard for connecting devices like computers, routers, and switches.</p>
            
            <p>The primary role of Ethernet is to provide a reliable, high-speed physical connection for data transmission. Unlike Wi-Fi, which can be prone to interference, Ethernet offers stable performance, lower latency, and higher security.</p>
            
            <div class="highlight-info">
                <h3>3. Evolution Over Time</h3>
                <p>Ethernet has evolved from 10 Mbps (Standard Ethernet) to 100 Mbps (Fast Ethernet) and 1 Gbps (Gigabit Ethernet). Today, advanced fiber-optic Ethernet can reach speeds of 400 Gbps and beyond.</p>
            </div>
        </div>
    </section>

    <section class="content-card">
        <h2 class="section-title">Ethernet Standards</h2>
        <div class="text-block">
            <div class="standard-item">
                <h4>IEEE 802.3</h4>
                <p>The base standard that defines the physical and data link layers of wired Ethernet, setting the rules for cable communication.</p>
            </div>
            <div class="standard-item">
                <h4>100Base-TX (Fast Ethernet)</h4>
                <p>Supports speeds up to 100 Mbps using twisted-pair cabling (Cat5 or higher).</p>
            </div>
            <div class="standard-item">
                <h4>1000Base-T (Gigabit Ethernet)</h4>
                <p>Provides 1 Gbps over copper cabling (Cat5e/Cat6). The most common standard today.</p>
            </div>
            <div class="standard-item">
                <h4>10GBASE-T</h4>
                <p>Provides speeds of 10 Gbps, often used in data centers requiring Cat6a or Fiber Optics.</p>
            </div>
        </div>
    </section>

    <section class="content-card">
        <h2 class="section-title">Ethernet Cable Types</h2>
        <div class="grid-container">
            <div class="info-item">
                <h3>Cat5 & Cat5e</h3>
                <p><strong>Speed:</strong> Up to 1 Gbps.<br><strong>Best Use:</strong> Basic home networking.<br><strong>Frequency:</strong> 100 MHz.</p>
            </div>
            <div class="info-item">
                <h3>Cat6</h3>
                <p><strong>Speed:</strong> 1 Gbps (10 Gbps up to 55m).<br><strong>Best Use:</strong> Gaming and smart offices.<br><strong>Frequency:</strong> 250 MHz.</p>
            </div>
            <div class="info-item">
                <h3>Cat6a</h3>
                <p><strong>Speed:</strong> Reliable 10 Gbps over 100m.<br><strong>Best Use:</strong> Data centers and servers.<br><strong>Frequency:</strong> 500 MHz.</p>
            </div>
            <div class="info-item">
                <h3>Cat7</h3>
                <p><strong>Speed:</strong> 10 Gbps and higher.<br><strong>Best Use:</strong> Industrial environments.<br><strong>Frequency:</strong> 600 MHz.</p>
            </div>
        </div>

        <div class="table-wrapper">
            <h3 class="sub-title">Quick Comparison Table</h3>
            <table>
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Max Speed</th>
                        <th>Frequency</th>
                        <th>Common Usage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Cat5e</td><td>1 Gbps</td><td>100 MHz</td><td>General Home Use</td></tr>
                    <tr><td>Cat6</td><td>1 Gbps (10Gbps short)</td><td>250 MHz</td><td>Gaming & Fast Offices</td></tr>
                    <tr><td>Cat6a</td><td>10 Gbps</td><td>500 MHz</td><td>Data Centers</td></tr>
                    <tr><td>Cat7</td><td>10 Gbps+</td><td>600 MHz</td><td>Industrial & Core Links</td></tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="content-card">
        <h2 class="section-title">Performance Considerations</h2>
        <div class="performance-list">
            <div class="perf-item">
                <h4>1. Data Transmission Speeds</h4>
                <p>Uses "Auto-Negotiation" to settle on the highest shared speed. Supports Full-Duplex for simultaneous data flow.</p>
            </div>
            <div class="perf-item">
                <h4>2. Latency (The "Lag" Factor)</h4>
                <p>Provides a consistent, low-latency connection without "jitter" compared to Wi-Fi.</p>
            </div>
            <div class="perf-item">
                <h4>3. Physical Limitations</h4>
                <p>Follows the 100m Rule. Signal attenuation occurs beyond 100 meters. Shielding (STP) helps prevent EMI and Crosstalk.</p>
            </div>
        </div>
    </section>

    <section class="content-card">
        <h2 class="section-title">Real-World Use Case</h2>
        <ul class="use-case-list">
            <li><strong>Home Network:</strong> Cat6 for consoles and Smart TVs to eliminate lag.</li>
            <li><strong>Office Environment:</strong> Cat6a with PoE (Power over Ethernet) for VoIP phones and cameras.</li>
            <li><strong>Data Centers:</strong> 400 Gbps via Fiber Optics to interconnect server clusters.</li>
        </ul>
    </section>

</main>



</body>
</html>


<?php include "includes/footer.php"; ?>