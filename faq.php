<?php include "includes/navbar.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs | Network Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --navy-main: #001f3f; 
            --navy-light: #f0f7ff;
            --text-dark: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: #ffffff; 
            color: var(--text-dark); 
            -webkit-font-smoothing: antialiased; 
        }

        /* الهيدر: شفاف وبدون أي أقواس أو خلفيات ملونة */
        .faq-header {
            padding: 80px 10% 40px 10%;
            text-align: center;
            background: transparent;
        }
        .faq-header h1 { 
            font-size: 2.8rem; 
            font-weight: 600; 
            color: var(--navy-main); 
            margin-bottom: 15px;
        }
        .faq-header p { 
            color: var(--text-muted); 
            font-size: 1.1rem;
            font-weight: 400;
        }

        .faq-container { 
            padding: 20px 10% 80px 10%; 
            max-width: 900px; 
            margin: 0 auto; 
        }

        /* كارد السؤال بستايل مودرن ونحيف */
        .faq-card {
            background: #ffffff;
            border: 1px solid var(--border-color); 
            border-left: 4px solid var(--navy-main); 
            border-radius: 12px;
            margin-bottom: 15px;
            overflow: hidden;
            transition: 0.3s ease;
        }

        .faq-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .faq-question {
            padding: 22px 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }
        
        .question-text {
            font-size: 1.05rem;
            font-weight: 500;
            color: var(--navy-main);
        }

        /* الدائرة الكحلية للسهم */
        .icon-wrapper {
            width: 30px;
            height: 30px;
            background: var(--navy-main);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s ease;
        }

        /* السهم النحيف جداً SVG */
        .icon-arrow-svg {
            fill: none;
            stroke: #ffffff; 
            stroke-width: 2; 
            stroke-linecap: round;
            stroke-linejoin: round;
            transition: 0.4s ease;
        }

        /* تأثيرات الفتح */
        .faq-card.active {
            border-color: var(--navy-main);
        }
        .faq-card.active .icon-wrapper {
            background: var(--navy-light);
        }
        .faq-card.active .icon-arrow-svg {
            transform: rotate(180deg);
            stroke: var(--navy-main);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .faq-content { 
            padding: 0 28px 25px 28px; 
            color: var(--text-muted); 
            font-size: 0.95rem;
            line-height: 1.8;
        }

        /* الروابط النصية الذكية (بدلاً من View Details) */
        .quick-link {
            display: inline-block;
            margin-top: 15px;
            color: var(--navy-main);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: 0.2s;
        }
        .quick-link:hover {
            text-decoration: underline;
            opacity: 0.8;
        }

    </style>
</head>
<body>

    <header class="faq-header">
        <h1>Frequently Asked Questions</h1>
        <p>Your guide to the most common inquiries about networking technologies.</p>
    </header>

    <div class="faq-container">
        
        <?php
        $faqs = [
            [
                "q" => "What is the maximum effective distance for Ethernet cables?", 
                "a" => "The standard maximum distance for a copper Ethernet cable (UTP) is 100 meters. Beyond this point, data signals weaken significantly.", 
                "link" => "ethernet.php",
                "link_text" => "Explore more about Ethernet standards →"
            ],
            [
                "q" => "How do obstacles affect Wi-Fi performance?", 
                "a" => "Physical barriers like walls and metal objects absorb radio waves, which can lead to dead zones and reduced stability in your wireless connection.", 
                "link" => "wireless.php",
                "link_text" => "Learn more about signal interference →"
            ],
            [
                "q" => "How do I choose the right Ethernet cable for my network?", 
                "a" => "For high-speed Gigabit networks, Cat6 is highly recommended. For basic home use, Cat5e is usually sufficient for distances under 100m.", 
                "link" => "ethernet.php",
                "link_text" => "Check Ethernet cable categories →"
            ],
            [
                "q" => "What is the difference between WPA2 and WPA3 security?", 
                "a" => "WPA3 is the latest security standard, offering improved encryption and better protection against brute-force attacks compared to WPA2.", 
                "link" => "wireless.php",
                "link_text" => "Discover Wireless security features →"
            ],
            [
                "q" => "Why is Wi-Fi more prone to interference than Ethernet?", 
                "a" => "Wi-Fi operates on shared radio frequencies that can be disrupted by other electronic devices. Ethernet is a dedicated, shielded physical path.", 
                "link" => "comparison.php",
                "link_text" => "Compare connection reliability →"
            ],
            [
                "q" => "Do adapters affect Ethernet speed performance?", 
                "a" => "Yes, low-quality adapters or using old USB 2.0 ports can throttle your connection speed, even if you are using a high-speed Ethernet cable.", 
                "link" => "ethernet.php",
                "link_text" => "View hardware compatibility tips →"
            ],
            [
                "q" => "Is Wi-Fi faster than a wired Ethernet connection?", 
                "a" => "While Wi-Fi 6 is very fast, Ethernet generally provides lower latency and more consistent speeds because it isn't affected by environmental factors.", 
                "link" => "comparison.php",
                "link_text" => "View performance comparison charts →"
            ]
        ];

        foreach ($faqs as $faq) {
            echo '
            <div class="faq-card">
                <div class="faq-question">
                    <span class="question-text">' . $faq['q'] . '</span>
                    <div class="icon-wrapper">
                        <svg class="icon-arrow-svg" width="18" height="18" viewBox="0 0 24 24">
                            <path d="M6 9l6 6 6-6"></path>
                        </svg>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-content">
                        ' . $faq['a'] . '
                        <br><a href="' . $faq['link'] . '" class="quick-link">' . $faq['link_text'] . '</a>
                    </div>
                </div>
            </div>';
        }
        ?>

    </div>

    <script>
        document.querySelectorAll('.faq-question').forEach(q => {
            q.addEventListener('click', () => {
const card = q.parentElement;
                const answer = q.nextElementSibling;

                document.querySelectorAll('.faq-card').forEach(other => {
                    if (other !== card) {
                        other.classList.remove('active');
                        other.querySelector('.faq-answer').style.maxHeight = null;
                    }
                });

                card.classList.toggle('active');
                if (card.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                } else {
                    answer.style.maxHeight = null;
                }
            });
        });
    </script>
</body>
</html>


<?php include "includes/footer.php"; ?>