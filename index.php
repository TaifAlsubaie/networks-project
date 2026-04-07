<?php include "includes/navbar.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting the World | Networks Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --blue-primary:#2c5da1; 
            --dark-navy: #4065b8;    
            --text-gray: #cbd5e1;
            --border-gray: #e2e8f0; 
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #ffffff; color: #1e293b; line-height: 1.6; }

        .hero {
            position: relative;
            background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.7)), 
                        url('assets/images/index/net.jpeg'); 
            background-size: cover;
            background-position: center;
            height: 70vh;
            display: flex;
            align-items: center;
            padding: 0 10%;
            color: white;
        }

        .hero-content { max-width: 800px; }
        .hero h1 { font-size: 3.5rem; margin-bottom: 20px; font-weight: 700; }
        .hero p { font-size: 1.2rem; color: var(--text-gray); line-height: 1.8; }
        
        .diagram-section { padding: 80px 10%; text-align: center; }
        .diagram-section h2 { 
            color: #1a3a5f; 
            margin-bottom: 30px; 
            font-weight: 700;
        }
        .diagram-grid { 
            display: flex; 
            justify-content: center; 
            gap: 30px; 
            margin-top: 40px;
        }

        .card { 
            flex: 1; 
            max-width: 400px; 
            text-align: center; 
            padding: 30px;
            border: 2px solid var(--border-gray); 
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: 0.3s;
        }
        
        .card img { width: 100px; height: auto; margin-bottom: 20px; }
        .card h3 { margin-bottom: 15px; font-size: 1.5rem; color: var(--dark-navy); }
        .card p { font-size: 1rem; color: #64748b; margin-bottom: 25px; }

        
        .btn-oval {
            background: var(--blue-primary);
            color: white;
            padding: 12px 35px;
            border-radius: 50px; 
            text-decoration: none;
            font-weight: 700;
            font-size: 0.9rem;
            transition: 0.3s;
            margin-top: auto; 
        }
        .btn-oval:hover { opacity: 0.9; transform: translateY(-2px); }
        
        .quiz-section { padding: 60px 10%; background-color: #f8fafc; text-align: center; }
        .quiz-card {
            max-width: 700px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: 1px solid var(--border-gray);
        }
        .quiz-card h2 { color:#1a3a5f; margin-bottom: 30px; }
        .quiz-item { text-align: left; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 1px solid #f1f5f9; }
        .quiz-item p { font-weight: 600; color: var(--dark-navy); margin-bottom: 10px; }
        .quiz-options { display: flex; flex-direction: column; gap: 8px; }
        .quiz-option { cursor: pointer; font-size: 0.95rem; color: #64748b; }
        #quiz-result { margin-top: 20px; font-weight: 700; padding: 15px; border-radius: 10px; display: none; }
    </style>
</head>
<body>

    <header class="hero">
        <div class="hero-content">
            <h1>Where Efficiency Meets Cutting-Edge Technology</h1>
            <p>Ethernet and Wi-Fi are two main technologies for connecting devices to Local Area Networks (LAN) and the Internet . </p>
        </div>
    </header>

    <section class="diagram-section">
        <h2>Visual Overview</h2>
        <div class="diagram-grid">
            <div class="card">
                <img src="assets/images/index/ethernet-icon.png" alt="Ethernet">
                <h3>Ethernet</h3>
                <p>A wired technology that uses physical cables to connect devices to a network .</p>
                <a href="ethernet.php" class="btn-oval">Ethernet</a>
            </div>

            <div class="card">
                <img src="assets/images/index/wifi-icon.png" alt="Wireless">
                <h3>Wireless</h3>
                <p>A wireless technology that transmits data via radio waves for mobility and flexibility .</p>
                <a href="wireless.php" class="btn-oval">Wireless</a>
            </div>
        </div>
    </section>

    <section class="quiz-section">
        <div class="quiz-card">
            <h2>Quick Knowledge Check</h2>
            
            <div class="quiz-item">
                <p>1. Which connection is known for having higher stability and less interference ? </p>
                <div class="quiz-options">
                    <label class="quiz-option"><input type="radio" name="q1" value="correct"> Ethernet (Wired)</label>
                    <label class="quiz-option"><input type="radio" name="q1" value="wrong"> Wi-Fi (Wireless)</label>
                </div>
            </div>

            <div class="quiz-item">
                <p>2. What is the primary benefit of using Wireless (Wi-Fi) ? </p>
                <div class="quiz-options">
                    <label class="quiz-option"><input type="radio" name="q2" value="wrong"> Needs physical cables</label>
                    <label class="quiz-option"><input type="radio" name="q2" value="correct"> Mobility and ease of connection</label>
                </div>
            </div>

            <div class="quiz-item">
                <p>3. Which cable is commonly used for Ethernet networks ? </p>
                <div class="quiz-options">
                    <label class="quiz-option"><input type="radio" name="q3" value="correct"> RJ45 / Cat6 Cable</label>
                    <label class="quiz-option"><input type="radio" name="q3" value="wrong"> HDMI Cable</label>
                </div>
            </div>

            <div id="quiz-result"></div>
            <button type="button" onclick="checkQuiz()" class="btn-oval" style="width: 100%; border: none; cursor: pointer; margin-top: 20px;">Submit Quiz</button>
        </div>
    </section>

    <script>
        function checkQuiz() {
            let score = 0;
            const q1 = document.querySelector('input[name="q1"]:checked');
            const q2 = document.querySelector('input[name="q2"]:checked');
            const q3 = document.querySelector('input[name="q3"]:checked');

if(!q1 ||  !q2 || !q3) {
                alert("Please answer all questions!");
                return;
            }

            if(q1.value === "correct") score++;
            if(q2.value === "correct") score++;
            if(q3.value === "correct") score++;

            const resultDiv = document.getElementById('quiz-result');
            resultDiv.style.display = "block";
            resultDiv.innerHTML = "Your Score: " + score + "/3";
            
            if(score === 3) {
                resultDiv.style.backgroundColor = "#d4edda";
                resultDiv.style.color = "#155724";
                resultDiv.innerHTML += " - Excellent!";
            } else {
                resultDiv.style.backgroundColor = "#fff3cd";
                resultDiv.style.color = "#856404";
                resultDiv.innerHTML += " - Try again to get a full score.";
            }
        }
    </script>

<script>
    function checkQuiz() {
        let score = 0;
        const questions = ['q1', 'q2', 'q3'];
        const results = [];

        
        let allAnswered = true;
        questions.forEach(q => {
            const selected = document.querySelector(`input[name="${q}"]:checked`);
            if (!selected) allAnswered = false;
            results.push(selected);
        });

        if (!allAnswered) {
            alert("Please answer all questions!");
            return;
        }

        
        document.querySelectorAll('.quiz-item').forEach(item => {
            item.style.backgroundColor = "transparent";
            item.style.borderRadius = "0px";
            item.style.paddingLeft = "0px";
        });

        
        results.forEach((selected, index) => {
            const parentItem = selected.closest('.quiz-item');
            
            if (selected.value === "correct") {
                score++;
                
                parentItem.style.backgroundColor = "#eaffea"; 
                parentItem.style.paddingLeft = "10px";
                parentItem.style.borderRadius = "8px";
            } else {
               
                parentItem.style.backgroundColor = "#ffeaea";
                parentItem.style.paddingLeft = "10px";
                parentItem.style.borderRadius = "8px";
            }
        });

        
        const resultDiv = document.getElementById('quiz-result');
        resultDiv.style.display = "block";
        
        if (score === 3) {
            resultDiv.style.backgroundColor = "#d4edda";
            resultDiv.style.color = "#155724";
            resultDiv.innerHTML = "Your Score: " + score + "/3 - Excellent! All answers are correct. ";
        } else {
            resultDiv.style.backgroundColor = "#fff3cd";
            resultDiv.style.color = "#856404";
            resultDiv.innerHTML = "Your Score: " + score + "/3 - Some answers are incorrect. Correct questions are highlighted in green, and mistakes in red.";
        }

        resultDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
</script>
</body>
</html>


<?php include "includes/footer.php"; ?>