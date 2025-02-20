@extends('games.wrapper')
@section('title')
    Home
@endsection
<link rel="stylesheet" href="{{ asset('css/word.css') }}">
<style>
    #wordinfo {
        position: absolute;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        width: 100%;
        z-index: 10;
        display: none;
    }

    #wordscore {
        position: absolute;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        width: 100%;
        z-index: 11;
        display: none;
        text-align: center;
    }

    .start-button {
        font-size: 0.9rem;
    }
</style>
@section('content')
    <div id="cardinfo">
        <h1 style="color: gold;">CONGRATULATIONS!</h1>
        <br>
        <img class="info-img" style="max-width: 100%;">
        <div class="figure-result">
            <img src="images-v2/gram-berry/22.png" alt="">
        </div>
    </div>
    <div id="cardinstruction">
        <div style="text-align: right;">
            <img src="images-v2/gram-berry/112.png" class="draglogo" style="max-width: 100%;">
        </div>
        <br>
        <div id="instruction-board">
            Tulis deskripsi dari gambar yang muncul, hafalkan karena merupakan petunjuk untuk permainan selanjutnya.
        </div>
        <div class="btn-start-img">
            <img src="images-v2/start.png" alt="" style="max-width: 150px;">
        </div>
        {{-- <div class="figure-instruction">
            <img src="images-v2/gram-berry/22.png" alt="">
        </div> --}}
    </div>
    <div id="cardscore">
        <h1 style="color: gold;">CONGRATULATIONS!</h1>
        <br>
        <img src="images-v2/gram-berry/112.png" alt="" style="max-width: 100%;">
        <div class="start-button">
        </div>
        <div class="figure-score">
            <img src="images-v2/gram-berry/22.png" alt="">
            <div class="btn-submit-img">
                <img src="images-v2/main/7.png" alt="" style="max-width: 150px;">
            </div>
        </div>
    </div>

    <!-- <h1>Match the Right Image</h1> -->
    <div style="text-align: right;">
        <img src="images-v2/gram-berry/28.png" id="draglogo">
    </div>
    <main>
        <section id="game">
            <div id="image-container">
                <img id="game-image" src="images-v2/karbohidrat.png" alt="Gambar yang harus ditebak">
            </div>
            <div id="letters-field"></div>
            <div id="letters-container"></div>
            <div id="input-container">
                <p id="guess-word" class="d-none"></p>
                <button id="reset-button">Reset</button>
            </div>
        </section>
        <section id="message">
            <p id="status"></p>
        </section>
    </main>
    <div class="row scoring"></div>
@endsection

@push('scripts')
    {{-- <script src="/js/word.js?v={{ \Str::uuid() }}"></script> --}}
    <script>
        // Data gambar dan jawaban
        const data = [{
                image: "images-v2/gram-berry/karbohidrat.png",
                word: "CUKUPI|KARBOHIDRAT",
                response_src: 'images-v2/responses/161.png'
            },
            {
                image: "images-v2/gram-berry/protein.png",
                word: "PENUHI|PROTEIN|NABATI",
                response_src: 'images-v2/responses/164.png'
            },
            {
                image: "images-v2/gram-berry/garam.png",
                word: "1 SENDOK TEH|PERHARI",
                response_src: 'images-v2/responses/158.png'
            },
            {
                image: "images-v2/gram-berry/airputih.png",
                word: "8 GELAS|AIR MINERAL",
                response_src: 'images-v2/responses/157.png'
            },
            {
                image: "images-v2/gram-berry/gula.png",
                word: "4|SENDOK MAKAN|PERHARI",
                response_src: 'images-v2/responses/160.png'
            },
            {
                image: "images-v2/gram-berry/minyak.png",
                word: "5|SENDOK MAKAN|PERHARI",
                response_src: 'images-v2/responses/159.png'
            },
            {
                image: "images-v2/gram-berry/sayur.png",
                word: "PERBANYAK|SUMBER|SERAT",
                response_src: 'images-v2/responses/162.png'
            },
            {
                image: "images-v2/gram-berry/buah.png",
                word: "KONSUMSI|2-3|PORSI BUAH",
                response_src: 'images-v2/responses/163.png'
            },
        ];

        $(document).ready(function() {
            let scoreEl = "";
            for (let i = 1; i <= data.length; i++) {
                scoreEl += `<div class="col" id="scoring${i}"><img src="images-v2/gram-berry/40.png" width="50px"></div>`;
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

        $("#wordinfo").on("click", function() {
            $(this).fadeOut();
        });

        // Fungsi untuk memulai game
        function startGame() {
            // Ambil data gambar dan kata saat ini
            const {
                image,
                word
            } = data[currentIndex];
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

        window.addEventListener("keydown", function(event) {
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
                $('#scoring' + (dataIndex + 1)).find('img').prop('src', 'images-v2/gram-berry/46.png')

                const response_src = data[currentIndex].response_src
                $('#cardinfo').find('.info-img').prop('src', response_src)
                $('#cardinfo').fadeIn(500)

                $("#wordinfo").fadeIn();
                setTimeout(nextRound, 1000);
            }
        }

        // Fungsi untuk reset
        document.getElementById("reset-button").addEventListener("click", startGame);

        // Fungsi untuk ke ronde berikutnya
        function nextRound() {
            if (currentIndex == 7) {
                $.ajax({
                    url: "{{ route('game.save-session') }}",
                    type: "PUT",
                    data: {
                        score: currentIndex,
                        stage: "gram-berry",
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(response) {
                        console.log(response);
                    },
                });
                
                $('#cardinfo').click(function() {
                    $('#cardscore').fadeIn()
                });
            }
            currentIndex = (currentIndex + 1) % data.length;


            startGame();
        }

        // Mulai game pertama kali
        startGame();
    </script>
@endpush
