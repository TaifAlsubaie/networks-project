<?php include "includes/navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed Test | Networking Simulation</title>
    <link rel="stylesheet" href="assets/css/speedtest.css">
</head>
<body>

<header class="hero-section">
    <div class="hero-content">
        <h1>Real-Time Speed Test</h1>
        <p>Simulate performance differences in a virtual environment.</p>
    </div>
</header>

<main class="main-container">
    <section class="content-card"> 
        <h2 class="section-title">Network Simulator</h2>
        <p>Select your connection parameters to see how they affect performance.</p>

        <div class="simulator-wrapper">
            <div class="controls-grid">
                <div class="control-group">
                    <label>Connection Type</label>
                    <select id="connType">
                        <option value="eth">Ethernet (Wired)</option>
                        <option value="wifi">Wi-Fi (Wireless)</option>
                    </select>
                </div>
                <div class="control-group">
                    <label>Obstacles / Walls</label>
                    <select id="walls">
                        <option value="0">No Obstacles</option>
                        <option value="2">2 Walls (Medium)</option>
                        <option value="4">4 Walls (Heavy Interference)</option>
                    </select>
                </div>
            </div>
            
            <button class="test-btn" onclick="startSimulation()">RUN TEST</button>

            <div class="results-area">
                <div class="gauge-container">
                    <div class="speed-number" id="speedResult">0</div>
                    <div class="unit">Mbps</div>
                </div>
                <div class="insight-box" id="insightBox">
                    Select settings and run the test.
                </div>
            </div>
        </div>
    </section>
</main>

<script>
function startSimulation() {
    const type = document.getElementById('connType').value;
    const walls = parseInt(document.getElementById('walls').value);
    let speed = 0;
    let insight = "";

    if (type === 'eth') {
        speed = 940; // Ethernet is stable regardless of walls
        insight = "Ethernet maintains a solid 940 Mbps. Physical walls do not affect wired signals.";
    } else {
        // Wi-Fi speed drops significantly per wall
        speed = Math.max(20, 450 - (walls * 100));
        insight = `Wi-Fi speed dropped to ${speed} Mbps due to signal attenuation through obstacles.`;
    }

    document.getElementById('speedResult').innerText = speed;
    document.getElementById('insightBox').innerText = insight;
    document.getElementById('insightBox').style.display = "block";
}
</script>

</body>
</html>
<?php include "includes/footer.php"; ?>
