    const questions = [
        {
          question: "Apa warna langit saat cerah?",
          options: ["Hijau", "Biru", "Merah", "Kuning"],
          answer: "Biru",
        },
        {
          question: "Berapa jumlah kaki seekor kucing?",
          options: ["2", "4", "6", "8"],
          answer: "4",
        },
        {
          question: "Apa makanan utama panda?",
          options: ["Bambu", "Rumput", "Daging", "Buah"],
          answer: "Bambu",
        },
      ];
  
      let currentQuestion = 0;
      let score = 0;
  
      const questionEl = document.getElementById("question");
      const optionsEl = document.getElementById("options");
      const resultEl = document.getElementById("result");
      const restartBtn = document.getElementById("restart");
  
      function loadQuestion() {
        const q = questions[currentQuestion];
        questionEl.textContent = q.question;
        optionsEl.innerHTML = "";
        q.options.forEach((option) => {
          const btn = document.createElement("button");
          btn.textContent = option;
          btn.addEventListener("click", () => checkAnswer(option));
          optionsEl.appendChild(btn);
        });
      }
  
      function checkAnswer(selected) {
        const correct = questions[currentQuestion].answer;
        if (selected === correct) {
          score++;
        }
        currentQuestion++;
        if (currentQuestion < questions.length) {
          loadQuestion();
        } else {
          showResult();
        }
      }
  
      function showResult() {
        questionEl.style.display = "none";
        optionsEl.style.display = "none";
        resultEl.textContent = `Kamu menjawab ${score} dari ${questions.length} pertanyaan dengan benar!`;
        restartBtn.style.display = "inline-block";
      }
  
      function restartQuiz() {
        currentQuestion = 0;
        score = 0;
        questionEl.style.display = "block";
        optionsEl.style.display = "block";
        resultEl.textContent = "";
        restartBtn.style.display = "none";
        loadQuestion();
      }
  
      restartBtn.addEventListener("click", restartQuiz);
  
      // Load the first question when the page loads
      loadQuestion();