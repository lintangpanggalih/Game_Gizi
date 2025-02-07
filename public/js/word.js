// Data gambar dan jawaban
const data = [
    { image: "images/gram-berry/karbohidrat.png", word: "CUKUPI|KARBOHIDRAT" },
    { image: "images/gram-berry/protein.png", word: "PENUHI|PROTEIN|NABATI" },
    { image: "images/gram-berry/garam.png", word: "1 SENDOK TEH|PERHARI" },
    { image: "images/gram-berry/airputih.png", word: "8 GELAS|AIR MINERAL" },
    { image: "images/gram-berry/gula.png", word: "4|SENDOK MAKAN|PERHARI" },
    { image: "images/gram-berry/minyak.png", word: "5|SENDOK MAKAN|PERHARI" },
    { image: "images/gram-berry/sayur.png", word: "PERBAYAK|SUMBER|SERAT" },
    { image: "images/gram-berry/buah.png", word: "KONSUMSI|2-3|PORSI BUAH" },
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
const lettersField = document.getElementById("letters-field");
const guessWordElement = document.getElementById("guess-word");
const statusElement = document.getElementById("status");

$("#wordinfo").on("click", function () {
    $(this).fadeOut();
    if (currentIndex == 7) {
        // if matched value is 4 that means user has answer all words
        $("#cardscore").fadeIn();
    }
});

// Fungsi untuk memulai game
function startGame() {
    // Ambil data gambar dan kata saat ini
    const { image, word } = data[currentIndex];
    currentWord = word.replaceAll("|", "").replaceAll(" ", "");
    guessedWord = "";
    statusElement.textContent = "";

    // Tampilkan gambar
    imageElement.src = image;

    // Reset huruf dan kata tebakan
    guessWordElement.textContent = guessedWord;
    lettersContainer.innerHTML = "";
    lettersField.innerHTML = "";

    // Acak huruf
    const arrangedLetters = word.split("");
    const shuffledLetters = word.replaceAll("|", "").replaceAll(" ", "").split("").sort(() => Math.random() - 0.5);
    
    // Tampilkan huruf
    arrangedLetters.forEach((letter) => {
        if (letter === "|" || letter === " ") {
            const br = document.createElement("br");
            lettersField.appendChild(br);
        } else {
            const button = document.createElement("button");
            button.textContent = letter;
            button.classList.add("letter-field");
            lettersField.appendChild(button);
            // button.addEventListener("click", () => selectLetter(letter, button));
        }
    });

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

    
    const letterField = Array.from(document.querySelectorAll('.letter-field:not(.selected)'))
    letterField[0].textContent = letter.toUpperCase();
    letterField[0].classList.add("selected")

    // letterField.some((button) => {
    //     const letterText = button.textContent;
    //     const letterKey = letter.toUpperCase();
        
        
    //     if (letterText == letterKey) {
    //         button.classList.add("selected")
    //         // button.click();

    //         return true;
    //     }
    // })
    
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
    if (currentIndex == 7) {
        // if matched value is 4 that means user has answer all words
        $("#cardscore").fadeIn();
    }
    currentIndex = (currentIndex + 1) % data.length;
    

    startGame();
}

// Mulai game pertama kali
startGame();
