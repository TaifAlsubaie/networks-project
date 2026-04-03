<?php include "includes/navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wireless Technologies</title>

    <!-- ربط ملف CSS -->
    <link rel="stylesheet" href="assets/css/wireless.css">
</head>
<body>

<div class="hero-section">
    <h1>Wireless Communication</h1>
    <p>Fast, flexible, and cable-free connectivity for modern digital environments.</p>
</div>

<div class="container"> <!-- بدأ container -->

    <section>
        <h2>
            1. Wireless Overview
          <img src="assets/images/wireless/wireless.icon.svg" alt="wireless icon" class="wireless-icon"> 
        </h2>

        <h3>Introduction to Wi-Fi Technologies</h3>
        <p>
           Wi-Fi technology is the basis of modern wireless communications, and it relies on IEEE 802.11 standards for transmitting data over radio waves instead of cables. This technology makes devices such as smartphones, laptops and smart home devices connect to the Internet and exchange information at high speed and efficiency without referring to a physical link.
        </p>

        <h3>How Wireless Communication Differs from Ethernet</h3>
        <p>The fundamental difference lies in the Transmission Medium:</p>

        <ul>
            <li>Ethernet: Relies on physical connections via cables (such as Cat5 or Cat6) to transmit electrical or optical signals</li>
            <li>Wi-Fi: Utilizes radio waves (typically in the 2.4 GHz or 5 GHz bands) to broadcast data through the air</li>
            <li>Stability vs. Convenience: While Ethernet provides higher stability and consistent speeds because it is less affected by physical obstructions, Wi-Fi offers freedom of movement and easy connectivity for multiple devices simultaneously without cable clutter</li>
        </ul>

        <h3>Supporting Mobility and Flexibility</h3>
        <p>Flexibility is the greatest advantage of wireless networks, as they support:</p>

        <ul>
            <li>Spatial Freedom: It allows users to move freely through the coverage area without losing contact, which is a must in modern environments such as open offices and smart homes.</li>
            <li>Scalability: New devices can be added to the network effortlessly by simply entering a password, removing the need for wall outlets or additional cabling</li>
            <li>Mobile Device Support: This technology allowed the emergence of "Internet of Things" (IOT) and the spread of devices that do not contain an Ethernet port due to its small size.</li>
        </ul>
    </section>

    <section>
       
       <h2>
              2. Wi-Fi Standards
            <img src="assets/images/wireless/wi-fi.icon.svg" alt="wi-fi icon" class="wifi-icon"> 
    </h2>

        <h3>Evolution of IEEE 802.11 Standards</h3>

        <ul>
            <li>802.11b (1999): The first widely adopted standard, operating on the 2.4 GHz band with speeds up to 11 Mbps</li>
            <li>802.11a (1999): Launched simultaneously but on the 5 GHz band, offering higher speeds up to 54 Mbps, though with a shorter range</li>
            <li>802.11g (2003): Combined the best of both worlds; speeds of 54 Mbps with the superior range of the 2.4 GHz band</li>
            <li>802.11n (Wi-Fi 4 - 2009): Revolutionized networking with MIMO technology, operating on both 2.4 GHz and 5 GHz to reach speeds up to 600 Mbps</li>
            <li>802.11ac (Wi-Fi 5 - 2013): Focused exclusively on the 5 GHz band to deliver gigabit speeds (exceeding 1 Gbps), ideal for high-definition video streaming</li>
            <li>802.11ax (Wi-Fi 6 - 2019): The modern standard, designed for maximum efficiency in high-density areas, supporting speeds up to 9.6 Gbps across both frequency bands</li>
        </ul>

        <h3>Frequency Band Comparison: 2.4 GHz vs. 5 GHz</h3>

        <table>
            <tr>
                <th>Feature</th>
                <th>2.4 GHz Band</th>
                <th>5 GHz Band</th>
            </tr>
            <tr>
                <td>Speed</td>
                <td>Lower (suitable for browsing/emails)</td>
                <td>Much Higher (suitable for gaming/streaming)</td>
            </tr>
            <tr>
                <td>Range (Coverage)</td>
                <td>Longer; penetrates walls easily</td>
                <td>Shorter; more easily blocked by obstacles</td>
            </tr>
            <tr>
                <td>Interference</td>
                <td>High (from microwaves and Bluetooth)</td>
                <td>Low (more channels and less congestion)</td>
            </tr>
        </table>
    </section>

    <section>
        <h2>
            3. Security Protocols
          <img src="assets/images/wireless/protocol.icon.svg" alt="protocol icon" class="protocol-icon"> 
        </h2>

        <h3>Importance of Security Protocols</h3>

        <ul>
            <li>Encryption: Converting data into code that can only be understood by authorized devices</li>
            <li>Privacy: Preventing intruders from monitoring user activity or stealing sensitive information</li>
            <li>Access Control: Ensuring that only authorized users can join the network</li>
        </ul>

        <h3>Types of Wi-Fi Security Protocols</h3>

        <ul>
            <li>WEP (Wired Equivalent Privacy): The oldest security protocol, adopted in 1997 and no longer recommended</li>
            <li>WPA: Introduced as a temporary fix using TKIP but still vulnerable</li>
            <li>WPA2: Uses AES encryption and is widely used today</li>
            <li>WPA3: The latest protocol offering stronger protection against attacks</li>
        </ul>
    </section>

    <section>
        <h2> 
            4. Performance Factors
            <img src="assets/images/wireless/performance.icon.svg" alt="performance icon" class="performance-icon"> 
        </h2>

        <ul>
            <li>Range: Refers to the maximum distance a Wi-Fi signal can travel effectively</li>
            <li>Signal Strength: Weakens as distance increases</li>
            <li>Interference: From devices like microwaves or Bluetooth</li>
            <li>Obstacles: Walls and furniture reduce signal</li>
            <li>Network Congestion: Too many devices reduce performance</li>
        </ul>
    </section>

    <section>
        <h2>5. Real-World Use Cases</h2>

        <ul>
            <li>Home: Connecting devices and supporting smart homes</li>
            <li>Public Places: Internet access in airports, cafes, malls</li>
            <li>Corporate Offices: Supports teamwork and BYOD policies</li>
        </ul>
    </section>

</div> <!-- نهاية container -->

<div class="container">
<section class="content-card">
        <h2 class="section-title" >
         6.Interactive wireless Diagram
        </h2>
        <p style="text-align: center; color: #666; margin-bottom: 20px;">
           Click on each part of the picture to learn about the function of each of them
        </p>
        
        <div class="interactive-container">
           <img src="assets/images/wireless/wifi-network-diagram.png" alt="Wi-Fi Network Diagram" class="main-image">

            <div class="spot" id="pt-internet">
<span class="tooltip-text">Global network for data exchange.</span>
            </div>
            <div class="spot" id="pt-router">
        <span class="tooltip-text">Wi-Fi Router: Broadcasts data via radio waves (2.4 GHz or 5 GHz).</span>
    </div>

 <div class="spot" id="pt-laptop">
        <span class="tooltip-text">Laptop: Mobile client device connecting wirelessly for spatial freedom.</span>
    </div>
      <div class="spot" id="pt-phone">
        <span class="tooltip-text">Smartphone: Compact device relying on Wi-Fi due to lack of Ethernet ports.</span>
    </div>
 <div class="spot" id="pt-tv">
        <span class="tooltip-text">Smart TV: Entertainment device in the Smart Home ecosystem.</span>
    </div>
 <div class="spot" id="pt-modem">
        <span class="tooltip-text">Modem: Receives signals from ISP and converts them for the network.</span>
    </div>
        </div>
    </section>
    </div>

    <script>
    function toggleTooltips() {
        // نحدد كل النصوص التي تحمل كلاس tooltip
        const tooltips = document.querySelectorAll('.tooltip');
        
        tooltips.forEach(tp => {
            // إذا ضغطتي والسويتش مفتوح (النصوص طالعة)، يخفيهم فوراً بدون تأخير
            if (tp.classList.contains('show')) {
                tp.style.transitionDelay = '0s'; 
                tp.classList.remove('show');
            } 
            // إذا كانوا مخفيين، يظهرهم بالترتيب (التأخير الزمني محدد في ملف CSS)
            else {
                tp.style.transitionDelay = ''; // يرجع يستخدم التأخير الموجود في CSS
                tp.classList.add('show');
            }
        });
    }
</script>

</body>
</html>


<?php include "includes/footer.php"; ?>
>>>>>>> c3ad3e9328210498b484340341479bd39d65d49e
