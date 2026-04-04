<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed Test | Automated Performance</title>
    
    <link rel="stylesheet" href="assets/css/index.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    
    <style>
        .hero-automated {
            background-color: #fcfdfe; 
            padding: 120px 20px;
            text-align: center;
            position: relative;
        }

        .hero-automated .automation-tag {
            color: #2c5da1;
            font-family: monospace;
            font-size: 1.1rem;
            margin-bottom: 25px;
            display: inline-block;
        }

        .hero-automated h1 {
            font-size: 3.5rem;
            font-weight: 900;
            color: #1d3476; 
            margin: 0 0 25px 0;
            letter-spacing: -1px;
            line-height: 1.1;
        }

        .hero-automated p {
            color: #64748b;
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto 50px;
            line-height: 1.6;
            font-weight: 500;
        }

        .test-initiator-btn {
            background: #1d3476; 
            color: white;
            border: none;
            padding: 18px 45px;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 4px 15px rgba(29, 52, 118, 0.2);
        }

        .test-initiator-btn:hover {
            background: #2c5da1; 
            transform: scale(1.03) translateY(-2px);
            box-shadow: 0 8px 25px rgba(44, 93, 161, 0.3);
        }

        .network-overlay {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.15;
            font-size: 80px;
            color: #1d3476;
            pointer-events: none;
        }
        .network-overlay.left { left: 80px; }
        .network-overlay.right { right: 80px; }

        .main-container {
            max-width: 900px;
            margin: 30px auto 80px;
            padding: 40px;
            display: none; 
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05); 
            border: 1px solid #f1f5f9;
            text-align: center;
        }

        .controls-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin-bottom: 30px;
            text-align: left;
        }

        .control-group label {
            display: block;
            font-weight: 700;
            color: #1a3a5f;
            margin-bottom: 10px;
        }

        select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #f1f5f9;
            border-radius: 12px;
            font-size: 1rem;
            color: #334155;
            background: #f8fafc;
            cursor: pointer;
            transition: 0.3s;
        }

        select:focus {
            border-color: #2c5da1;
            outline: none;
        }

        .internal-test-btn {
            background: linear-gradient(135deg, #1a3a5f 0%, #2c5da1 100%);
            color: white;
            border: none;
            padding: 18px;
            border-radius: 14px;
            font-size: 1.1rem;
            font-weight: 800;
            cursor: pointer;
            width: 100%;
            box-shadow: 0 4px 15px rgba(44, 93, 161, 0.3);
            transition: 0.3s;
        }

        .internal-test-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(44, 93, 161, 0.4);
        }

        .gauge-wrapper {
            position: relative;
            width: 250px;
            height: 250px;
            margin: 40px auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gauge-svg {
            transform: rotate(-90deg);
            width: 100%;
            height: 100%;
        }

        .gauge-bg {
            fill: none;
            stroke: #f1f5f9;
            stroke-width: 12;
        }

        .gauge-progress {
            fill: none;
            stroke: #2c5da1; 
            stroke-width: 12;
            stroke-linecap: round;
            stroke-dasharray: 628; 
            stroke-dashoffset: 628; 
            transition: stroke-dashoffset 2s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .speed-display {
            position: absolute;
            text-align: center;
        }

        .speed-number {
            font-size: 4.5rem;
            font-weight: 900;
            color: #1a3a5f;
            line-height: 1;
        }

        .unit {
            color: #94a3b8;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 1rem;
        }

        .insight-box {
            margin-top: 30px;
            padding: 20px;
            background-color: #f0f7ff;
            border-radius: 12px;
            color: #1e40af;
            font-weight: 500;
            text-align: center;
            border: 1px solid #dbeafe;
            display: none;
            animation: fadeIn 0.5s ease forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head> 
<body>

<header class="main-header">
    <?php include "includes/navbar.php"; ?>
</header>

<header class="hero-automated">
    <h1>Network Performance Simulator</h1>
    <p>Interactive simulation to analyze data throughput and signal stability. Compare Ethernet reliability against Wireless attenuation to optimize networking benchmarks.</p>
    
    <button class="test-initiator-btn" onclick="openTestSection()">Click to start the test</button>
    
    <div class="network-overlay left"><i class="fa-solid fa-cloud"></i></div>
    <div class="network-overlay right"><i class="fa-solid fa-network-wired"></i></div>
</header>

<main class="main-container" id="testArea">
    <section class="content-card"> 
        <div class="controls-grid">
            <div class="control-group">
                <label>Connection Type</label>
                <select id="connType">
                    <option value="eth">Ethernet (Wired)</option>
                    <option value="wifi">Wi-Fi (Wireless)</option>
                </select>
            </div>
            <div class="control-group">
                <label>Signal Obstacles</label>
                <select id="walls">
                    <option value="0">No Obstacles (Open Space)</option>
                    <option value="2">2 Walls (Medium House)</option>
                    <option value="4">4 Walls (Heavy Interference)</option>
                </select>
            </div>
        </div>
        
        <button class="internal-test-btn" onclick="startGaugeSimulation()">RUN PERFORMANCE TEST</button>

        <div class="gauge-wrapper">
            <svg class="gauge-svg" viewBox="0 0 210 210">
                <circle class="gauge-bg" cx="105" cy="105" r="100"></circle>
                <circle id="progressCircle" class="gauge-progress" cx="105" cy="105" r="100"></circle>
            </svg>
            <div class="speed-display">
                <div class="speed-number" id="numResult">0</div>
                <div class="unit">Mbps</div>
            </div>
        </div>

        <div class="insight-box" id="insightBox"></div>
    </section>
</main>

<?php include "includes/footer.php"; ?>


<script>
function openTestSection() {
    const area = document.getElementById('testArea');
    area.style.display = 'block';
    window.scrollTo({
        top: area.offsetTop - 100,
        behavior: 'smooth'
    });
}

function startGaugeSimulation() {
    const type = document.getElementById('connType').value;
    const walls = parseInt(document.getElementById('walls').value);
    const circle = document.getElementById('progressCircle');
    const numDisplay = document.getElementById('numResult');
    const insightBox = document.getElementById('insightBox');

    let target = (type === 'eth') ? 940 : Math.max(30, 450 - (walls * 100));
    
    circle.style.strokeDashoffset = 628;
    numDisplay.innerText = "0";
    insightBox.style.display = "none";

    setTimeout(() => {
        const offset = 628 - (628 * (target / 1000));
        circle.style.strokeDashoffset = offset;

        let current = 0;
        let timer = setInterval(() => {
            current += Math.ceil(target / 25); 
            if (current >= target) {
                current = target;
                clearInterval(timer);
                showInsightText(type, target);
            }
            numDisplay.innerText = current;
        }, 40);
    }, 100);
}

function showInsightText(type, speed) {
    const insightBox = document.getElementById('insightBox');
    let message = "";
    if (type === 'eth') {
        message = "<strong>Ethernet Result:</strong> Wired connections are not affected by physical obstacles. High speed maintained.";
    } else {
        message = `<strong>Wi-Fi Result:</strong> Signal dropped to ${speed} Mbps. Obstacles like walls weaken radio waves.`;
    }
    insightBox.innerHTML = message;
    insightBox.style.display = "block";
}
</script>

</body>
</html>