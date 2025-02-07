@extends('games.wrapper')
@section('title')
    Home
@endsection
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
<style>
    #btn-true {
        background: none;
        background-image: url("{{ asset('images/quiz/42.png') }}");
        background-size: cover;
        background-position: 5px center;
        background-repeat: no-repeat;
        padding-left: 30px;
    }

    #btn-false {
        background: none;
        background-image: url("{{ asset('images/quiz/48.png') }}");
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
    <div id="cardscore">
        <h1 style="color: gold;">CONGRATULATIONS!</h1>
        <br>
        <img src="images/quiz/114.png" alt="" style="max-width: 100%;">
        <div class="start-button">
        </div>
        <div class="figure-score">
            <img src="images/quiz/24.png" alt="">
            <div class="btn-submit-img">
                <img src="images/main/7.png" alt="" style="max-width: 150px;">
            </div>
        </div>
    </div>
    <div id="cardresult">
        <h1 style="color: gold;">CONGRATULATIONS!</h1>
        <br>
        <img src="images/quiz/124.png" alt="" style="max-width: 100%;">
        <div class="start-button">
        </div>
        <div class="figure-result">
            <img src="images/quiz/chest-opening-1-loop.gif" alt="">
        </div>
    </div>
    <div id="cardwrong">
        <div class="figure-wrong">
            <img src="images/quiz/120.png" alt="">
        </div>
        <img src="images/quiz/121.png" alt="" style="max-width: 250px;margin-top: -50px;">
    </div>

    <div style="text-align: right;">
        <img src="images/quiz/30.png" id="draglogo">
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
                question: "Pedoman Gizi Seimbang di Indonesia saat ini adalah 4 Sehat 5 Sempurna",
                options: ["True", "False"],
                answer: "True",
            },
            {
                question: "Pedoman Gizi Seimbang di Indonesia saat ini adalah Pedoman Gizi Seimbang",
                options: ["True", "False"],
                answer: "False",
            },
            {
                question: "Empat Pilar Gizi Seimbang adalah konsumsi makanan beragam, perilaku hidup bersih, berat badan ideal dan pola hidup aktif dan berolahraga",
                options: ["True", "False"],
                answer: "True",
            },
            {
                question: "Bagian dasar tumpeng gizi seimbang menggambarkan bahan makanan pokok yang harus dikonsumsi. Makanan pokok merupakan sumber karbohidrat bagi tubuh. Normalnya porsi makanan pokok yang disarankan adalah 2-3 porsi dalam sehari",
                options: ["True", "False"],
                answer: "True",
            },
            {
                question: "Lapisan kedua terdapat buah dan sayuran sebagai sumber vitamin, mineral dan serat pangan. Kandungan buah dan sayur sangat bermanfaat dalam proses metabolisme. Anjuran konsumsi sayur yaitu 3-4 porsi dalam satu kali makan",
                options: ["True", "False"],
                answer: "False",
            },
            {
                question: "Lapisan kedua terdapat buah dan sayuran sebagai sumber vitamin, mineral dan serat pangan. Kandungan buah dan sayur sangat bermanfaat dalam proses metabolisme. Anjuran konsumsi sayur yaitu 2-3 porsi dalam satu hari",
                options: ["True", "False"],
                answer: "True",
            },
            {
                question: "Lapisan ketiga terdapat lauk pauk hewani, susu serta sumber protein dan lemak lainnya. Protein adalah zat pembangun yang penting bagi kesehatan tubuh. Porsi protein yang disarankan adalah 4-5 porsi makanan sumber protein setiap harinya",
                options: ["True", "False"],
                answer: "False",
            },
            {
                question: "Lapisan puncak terdapat garam, gula dan lemak. Area puncak yang sempit menandakan kita harus mengonsumsi ketiga makanan ini dalam jumlah sedikit. Anjuran konsumsinya disingkat menjadi G4-G1-L5",
                options: ["True", "False"],
                answer: "True",
            },
            {
                question: "Anjuran konsumsi Gula: maksimal 4 sdm(50 gram/orang/hari",
                options: ["True", "False"],
                answer: "False",
            },
            {
                question: "Anjuran konsumsi Garam: maksimal 4 sdm(40 gram/orang/hari",
                options: ["True", "False"],
                answer: "False",
            },
            {
                question: "Anjuran konsumsi Lemak: maksimal 5 sdm(67 gram/orang/hari",
                options: ["True", "False"],
                answer: "False",
            },
            {
                question: "Lengkapi gizi seimbang dengan minum air putih yang cukup minimal 8 botol sehari",
                options: ["True", "False"],
                answer: "False",
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
            questionEl.textContent = q.question;
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
            const correct = questions[currentQuestion].answer;

            if (selected === correct) {
                score++;
            } else {

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
                }, 1000);
            }, 700);
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
