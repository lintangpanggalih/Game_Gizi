// Data gambar dan jawaban
const data = [
    { image: "images/karbohidrat.png", word: "KARBOHIDRAT" },
    { image: "images/protein.png", word: "PROTEIN" },
    { image: "images/garam.png", word: "GARAM" },
    { image: "images/airputih.png", word: "AIRPUTIH" },
    { image: "images/gula.png", word: "GULA" },
];

// Inisialisasi
let currentIndex = 0;
let currentWord = "";
let guessedWord = "";

const imageElement = document.getElementById("game-image");
const lettersContainer = document.getElementById("letters-container");
const guessWordElement = document.getElementById("guess-word");
const statusElement = document.getElementById("status");

$("#wordinfo").on("click", function () {
    $(this).fadeOut();
    console.log(currentIndex);
    if (currentIndex == 4) {
        // if matched value is 4 that means user has answer all words
        $("#cardscore").fadeIn();
        console.log("PPPPPPP");
    }
});

// Fungsi untuk memulai game
function startGame() {
    if (currentIndex == 4) {
        // if matched value is 4 that means user has answer all words
        $("#cardscore").fadeIn();
        console.log("PPPPPPP");
    }
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
    $(button).css("background-color", "#25b800");
    if (guessedWord === currentWord) {
        // statusElement.textContent = "Selamat! Kamu berhasil!";
        $("#wordinfo").fadeIn();
        setTimeout(nextRound, 1);
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
