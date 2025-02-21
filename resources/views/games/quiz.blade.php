@extends('games.wrapper')
@section('title')
    Home
@endsection
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
<style>
    #btn-true {
        background: none;
        background-image: url("{{ asset('images-v2/quiz/42.png') }}");
        background-size: cover;
        background-position: 5px center;
        background-repeat: no-repeat;
        padding-left: 30px;
    }

    #btn-false {
        background: none;
        background-image: url("{{ asset('images-v2/quiz/48.png') }}");
        background-size: cover;
        background-position: 5px center;
        background-repeat: no-repeat;
        padding-left: 30px;
    }

    #options button:active {
        transform: scale(0.95);
        /* Shrinks the button slightly */
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
            <img src="images-v2/quiz/24.png" alt="">
        </div>
    </div>
    <div id="cardscore">
        <h1 style="color: gold;">CONGRATULATIONS!</h1>
        <br>
        <img src="images-v2/quiz/114.png" alt="" style="max-width: 100%;">
        <div class="start-button">
        </div>
        <div class="figure-score">
            <img src="images-v2/quiz/24.png" alt="">
            <div class="btn-submit-img">
                <img src="images-v2/main/7.png" alt="" style="max-width: 150px;">
            </div>
        </div>
    </div>
    <div id="cardinstruction">
        <div style="text-align: right;">
            <img src="images-v2/quiz/30.png" class="draglogo" style="max-width: 100%;">
        </div>
        <br>
        <div id="instruction-board">
            Pilih jawaban "True" atau "False" berdasarkan pernyataan.
        </div>
        <div class="btn-start-img">
            <img src="images-v2/start.png" alt="" style="max-width: 150px;">
        </div>
        {{-- <div class="figure-instruction">
            <img src="images-v2/meat-match-up/14.png" alt="">
        </div> --}}
    </div>
    <div id="cardresult">
        <h1 style="color: gold;">CONGRATULATIONS!</h1>
        <br>
        <img src="images-v2/quiz/124.png" alt="" style="max-width: 100%;">
        <div class="start-button">
        </div>
        <div class="figure-result">
            <img src="images-v2/quiz/chest-opening-1-loop.gif" alt="">
        </div>
    </div>
    <div id="cardwrong">
        <div class="figure-wrong">
            <img src="images-v2/quiz/120.png" alt="">
        </div>
        <img src="images-v2/quiz/121.png" alt="" style="max-width: 250px;margin-top: -50px;">
    </div>

    <div style="text-align: right;">
        <img src="images-v2/quiz/30.png" id="draglogo">
    </div>
    <div class="quiz-container">
        <div id="quiz">
            <div id="question-board">
                <p class="question" id="question"></p>
            </div>
            <div class="row m-0" id="options">
                <div class="col">
                    <button id="btn-true" value="True"></button>
                </div>
                <div class="col">
                    <button id="btn-false" value="False"></button>
                </div>
            </div>
        </div>
        <div class="result" id="result"></div>
        <button class="next" id="next" style="display: none;" onclick=><a href="{{ route('landing.map') }}">Next</a></button>
    </div>
@endsection

@push('scripts')
    {{-- <script src="/js/quiz.js?v={{ \Str::uuid() }}"></script> --}}
    <script>
        $(document).ready(function() {
            $('#cardwrong').click(function() {
                $("#cardwrong").fadeOut()
            })
        })
    </script>
    <script>
        const questions = [{
                question: "Pedoman Gizi Seimbang di Indonesia saat ini adalah <br> <b>4 Sehat 5 Sempurna</b>",
                options: ["True", "False"],
                answer: "False",
                response_src: 'images-v2/responses/165.png'
            },
            {
                question: "Pedoman Gizi Seimbang di Indonesia saat ini adalah <br> <b>Tumpeng gizi seimbang.</b>",
                options: ["True", "False"],
                answer: "True",
                response_src: 'images-v2/responses/165.png'
            },
            // {
            //     question: `Empat pilar gizi seimbang adalah: <br> 1. Mengonsumsi makanan yang beragam <br> 2. Membiasakan perilaku hidup bersih <br> 3. Menjaga berat badan ideal <br> 4. Pola hidup aktif dan berolahraga`,
            //     options: ["True", "False"],
            //     answer: "True",
            //     response_src: 'images-v2/responses/166.png'
            // },
            {
                question: "Bagian dasar tumpeng gizi seimbang menggambarkan bahan makanan pokok yang harus dikonsumsi. Makanan pokok merupakan sumber karbohidrat bagi tubuh. Normalnya, porsi makanan pokok yang disarankan adalah 2-3 porsi dalam satu hari.",
                options: ["True", "False"],
                answer: "False",
                response_src: 'images-v2/responses/161.png'
            },
            {
                question: "Lapisan kedua terdapat buah dan sayuran sebagai sumber vitamin, mineral, dan serat pangan. Kandungan buah dan sayur sangat bermanfaat dalam proses metabolisme atau proses bekerjanya fungsi tubuh. Anjuran konsumsi sayur yaitu 3 - 4 porsi dalam satu kali makan.",
                options: ["True", "False"],
                answer: "True",
                response_src: 'images-v2/responses/162.png'
            },
            {
                question: "Lapisan kedua terdapat buah dan sayuran sebagai sumber vitamin, mineral, dan serat pangan. Kandungan buah dan sayur sangat bermanfaat dalam proses metabolisme atau proses bekerjanya fungsi tubuh. Sementara itu, porsi buah disarankan untuk dikonsumsi sebanyak 2-3 porsi dalam satu hari.",
                options: ["True", "False"],
                answer: "True",
                response_src: 'images-v2/responses/163.png'
            },
            {
                question: "Lapisan ketiga terdapat lauk-pauk hewani, susu, serta sumber protein dan lemak lainnya.Protein adalah zat pembangun yang penting bagi kesehatan tubuh.Porsi protein yang disarankan adalah 4-5 porsi makanan sumber protein setiap harinya.",
                options: ["True", "False"],
                answer: "False",
                response_src: 'images-v2/responses/164.png'
            },
            {
                question: "Lapisan puncak terdapat garam, gula, dan lemak. Area puncak yang sempit menandakan kita harus mengkonsumsi ketiga makanan ini dalam jumlah yang sedikit. Anjuran konsumsi gula, garam, dan minyak disingkat menjadi: <br> <b>G4-G1-L5</b>",
                options: ["True", "False"],
                answer: "True",
                response_src: null
            },
            {
                question: "Anjuran Konsumsi Gula: <br> Maksimal 4 sdm (50 gram) per hari.",
                options: ["True", "False"],
                answer: "True",
                response_src: 'images-v2/responses/160.png'
            },
            {
                question: "Anjuran Konsumsi Garam: <br> Maksimal 4 sdm (40 gram) per hari.",
                options: ["True", "False"],
                answer: "False",
                response_src: 'images-v2/responses/158.png'
            },
            {
                question: "Anjuran Konsumsi Lemak: <br> 5 sdm (67 gram) per hari.",
                options: ["True", "False"],
                answer: "True",
                response_src: 'images-v2/responses/159.png'
            },
            {
                question: "Lengkapi gizi seimbang dengan minum air putih yang cukup minimal 8 botol sehari.",
                options: ["True", "False"],
                answer: "False",
                response_src: 'images-v2/responses/157.png'
            },
        ];

        let currentQuestion = 0;
        let score = 0;

        const questionEl = document.getElementById("question");
        const optionsEl = document.getElementById("options");
        const resultEl = document.getElementById("result");
        const nextBtn = document.getElementById("next");

        function loadQuestion() {
            const q = questions[currentQuestion];
            questionEl.innerHTML = q.question;
            // optionsEl.innerHTML = "";
            // q.options.forEach((option) => {
            // const btn = document.createElement("button");
            // btn.textContent = option;
            // btn.addEventListener("click", () => checkAnswer(option));
            // optionsEl.appendChild(btn);
            // });
        }

        $("#options button").click(function() {
            // alert('test')
            const answer = $(this).val();
            checkAnswer(answer);
        });
        // btn.addEventListener("click", () => checkAnswer(option));
        function checkAnswer(selected) {
            const correct = questions[currentQuestion].answer,
                response_src = questions[currentQuestion].response_src;

            if (selected === correct) {
                trueSound.currentTime = 0;
                trueSound.preload = "auto";
                trueSound.play();
                score++;
                console.log(response_src);

                if (response_src) {
                    $('#cardinfo').find('.info-img').prop('src', response_src)
                    $('#cardinfo').fadeIn(500)
                }
            } else {
                falseSound.currentTime = 0;
                falseSound.preload = "auto";
                falseSound.play();

                $("#cardwrong").fadeIn();
                return false;
            }

            currentQuestion++;
            if (currentQuestion < questions.length) {
                loadQuestion();
            } else {
                showResult();
            }
        }

        function showResult() {
            $.ajax({
                url: "{{ route('game.save-session') }}",
                type: "PUT",
                data: {
                    score: score,
                    stage: "quiz",
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(response) {
                    console.log(response);
                },
            });

            $('#cardinfo').click(function() {
                $("#question-board").fadeOut(1000);
                $(questionEl).fadeOut(1000);
                $(optionsEl).fadeOut(1000);
                // resultEl.textContent = `Kamu menjawab ${score} dari ${questions.length} pertanyaan dengan benar!`;
                // nextBtn.style.display = "inline-block";

                setTimeout(() => {
                    // $("#cardscore").fadeIn();

                    $("#cardresult").fadeIn();
                    setTimeout(() => {
                        $("#cardresult")
                            .find("img:nth(0)")
                            .css("visibility", "visible")
                            .css("opacity", "1");

                        $.ajax({
                            url: "{{ route('game.save-result') }}",
                            type: "PUT",
                            success: function(response) {
                                console.log(response);
                            },
                            error: function(response) {
                                console.log(response);
                            },
                        })
                    }, 1000);
                }, 700);

            });
        }

        // function restartQuiz() {
        //   currentQuestion = 0;
        //   score = 0;
        //   questionEl.style.display = "block";
        //   optionsEl.style.display = "block";
        //   resultEl.textContent = "";
        //   nextBtn.style.display = "none";
        //   loadQuestion();
        // }

        // nextBtn.addEventListener("click", restartQuiz);

        // Load the first question when the page loads
        loadQuestion();
    </script>
@endpush
