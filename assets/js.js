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
let currentQuestion = 0;
let score = 0;

function startQuiz() {
    document.getElementById("startBtn").style.display = "none";
    document.getElementById("quizForm").style.display = "block";

    let questions = document.querySelectorAll('.question-card');
    questions[0].style.display = "block";
}
function nextQuestion() {
    let questions = document.querySelectorAll('.question-card');
    let current = questions[currentQuestion];

    let correct = current.getAttribute('data-correct');
    let selected = current.querySelector('input[type="radio"]:checked');

    if (!selected) {
        alert("Please select an answer!");
        return;
    }

    let options = current.querySelectorAll('label');

    // 🔥 تلوين الإجابات
    options.forEach((opt, index) => {
        let val = (index + 1).toString();

        if (val === correct) {
            opt.classList.add("correct"); // أخضر
        }

        if (val === selected.value && val !== correct) {
            opt.classList.add("wrong"); // أحمر
        }
    });

    // حساب السكور
    if (selected.value === correct) {
        score++;
    }

    // ⏳ انتظر شوي قبل الانتقال
    setTimeout(() => {
        current.style.display = "none";
        currentQuestion++;

        if (currentQuestion < questions.length) {
            questions[currentQuestion].style.display = "block";
        } else {
            showResult(questions.length);
        }
    }, 2000); // 0.8 ثانية
}

function showResult(total) {
    document.getElementById("nextBtn").style.display = "none";

    document.getElementById("result").innerText =
        "Your Score: " + score + " / " + total;
}