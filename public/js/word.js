// Data gambar dan jawaban
const data = [
    { image: "images/karbohidrat.png", word: "KARBOHIDRAT" },
    { image: "images/protein.png", word: "PROTEIN" },
    { image: "images/garam.png", word: "GARAM" },
    { image: "images/airputih.png", word: "AIRPUTIH" },
    { image: "images/gula.png", word: "GULA" },
];

$(document).ready(function () {
    let scoreEl = "";
    for (let i = 1; i <= data.length; i++) {
        scoreEl += `<div class="col" id="scoring${i}"><img src="images/gram-berry/40.png" width="50px"></div>`;
    }

    $(".scoring").html(scoreEl);
});
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
    if (currentIndex == 4) {
        // if matched value is 4 that means user has answer all words
        $("#cardscore").fadeIn();
    }
});

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
        lettersContainer.appendChild(button);
        button.addEventListener("click", () => selectLetter(letter, button));
    });
}

window.addEventListener("keydown", function (event) {
    if (event.defaultPrevented) {
      return; // Do nothing if the event was already processed
    }
    const pressed = event.key;
    const letterButton = Array.from(document.querySelectorAll('.letter-button:not(.selected)'))
    letterButton.some((button) => {
        const letterText = button.textContent;
        const pressedKey = pressed.toUpperCase();
        
        if (letterText == pressedKey) {
            button.classList.add("selected")
            console.log('peler');
            button.click();

            return true;
        }
    })
    
    // Cancel the default action to avoid it being handled twice
    event.preventDefault();
}, true);

// Fungsi saat huruf dipilih
function selectLetter(letter, button) {
    guessedWord += letter;
    guessWordElement.textContent = guessedWord;
    button.disabled = true;
    $(button).css("background-color", "#25b800");
    if (guessedWord === currentWord) {
        // statusElement.textContent = "Selamat! Kamu berhasil!";
        const dataIndex = currentIndex;
        $('#scoring' + (dataIndex + 1)).find('img').prop('src', 'images/gram-berry/46.png')

        $("#wordinfo").fadeIn();
        setTimeout(nextRound, 1000);
    }
}

// Fungsi untuk reset
document.getElementById("reset-button").addEventListener("click", startGame);

// Fungsi untuk ke ronde berikutnya
function nextRound() {
    console.log(currentIndex);
    if (currentIndex == 4) {
        // if matched value is 4 that means user has answer all words
        $("#cardscore").fadeIn();
    }
    currentIndex = (currentIndex + 1) % data.length;
    

    startGame();
}

// Mulai game pertama kali
startGame();
