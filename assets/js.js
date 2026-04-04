function runSimulation() {
    const type = document.getElementById('connectionType').value;
    const env = document.getElementById('environment').value;
    let speed = 0;

    if (type === 'ethernet') {
        speed = 950; 
    } else {
        if (env === 'ideal') speed = 450;
        else if (env === 'average') speed = 150;
        else speed = 45;
    }

    document.getElementById('speedValue').innerText = speed;
    document.getElementById('insightText').innerText = 
        type === 'ethernet' ? "Ethernet maintains consistent speed regardless of obstacles[cite: 28]." 
        : "Wi-Fi performance degraded due to distance and environment[cite: 35].";
}