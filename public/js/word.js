// Data gambar dan jawaban
const data = [
    { image: "images/kelinci.png", word: "KELINCI" },
    { image: "images/harimau.png", word: "HARIMAU" },
    { image: "images/burung.png", word: "BURUNG" },
    { image: "images/gajah.png", word: "GAJAH" },
    { image: "images/monyet.png", word: "MONYET" }
  ];
  
  // Inisialisasi
  let currentIndex = 0;
  let currentWord = "";
  let guessedWord = "";
  
  const imageElement = document.getElementById("game-image");
  const lettersContainer = document.getElementById("letters-container");
  const guessWordElement = document.getElementById("guess-word");
  const statusElement = document.getElementById("status");
  
  // Fungsi untuk memulai game
  function startGame() {
    // Ambil data gambar dan kata saat ini
    const { image, word } = data[currentIndex];
    currentWord = word;
    guessedWord = "";
    statusElement.textContent = "";
  
    // Tampilkan gambar
    imageElement.src = image;
  
    // Reset huruf dan kata tebakan
    guessWordElement.textContent = guessedWord;
    lettersContainer.innerHTML = "";
  
    // Acak huruf
    const shuffledLetters = word.split("").sort(() => Math.random() - 0.5);
  
    // Tampilkan huruf
    shuffledLetters.forEach((letter) => {
      const button = document.createElement("button");
      button.textContent = letter;
      button.classList.add("letter-button");
      button.addEventListener("click", () => selectLetter(letter, button));
      lettersContainer.appendChild(button);
    });
  }
  
  // Fungsi saat huruf dipilih
  function selectLetter(letter, button) {
    guessedWord += letter;
    guessWordElement.textContent = guessedWord;
    button.disabled = true;
  
    if (guessedWord === currentWord) {
      statusElement.textContent = "Selamat! Kamu berhasil!";
      setTimeout(nextRound, 2000);
    }
  }
  
  // Fungsi untuk reset
  document.getElementById("reset-button").addEventListener("click", startGame);
  
  // Fungsi untuk ke ronde berikutnya
  function nextRound() {
    currentIndex = (currentIndex + 1) % data.length;
    startGame();
  }
  
  // Mulai game pertama kali
  startGame();
  