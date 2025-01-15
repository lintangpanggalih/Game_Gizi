@extends('wrapper')
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

    #cardscore, 
    #cardwrong {
        position: absolute;
        top: 0%;
        left: 0%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.74);
        width: 100%;
        z-index: 11;
        display: none;
        text-align: center;
        padding-top: 10vh;
        overflow: hidden;
    }

    .start-button {
        font-size: 0.9rem;
    }

    .figure-score {
        margin-top: -120%;
        /* margin-left: -200px; */
    }

    .btn-submit-img {
        position: absolute;
        left: 50%;
        top: 85%;
        /* margin-top: 200px;
        margin-left: -200px; */
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
            <img src="images/quiz/24.png" alt="" style="max-width: 60%;">
        </div>
        <div class="btn-submit-img">
            <img src="images/main/7.png" alt="" style="max-width: 150px;">
        </div>
    </div>
    <div id="cardwrong">
        <h1 style="color: rgb(240, 67, 67);">OOPS, TRY AGAIN!</h1>
        <br>
        <img src="images/quiz/121.png" alt="" style="max-width: 70%;margin-top: 200px;">
        <div class="start-button">
        </div>
        <div class="figure-score">
            <img src="images/quiz/120.png" alt="" style="max-width: 60%;">
        </div>
    </div>
    <h1>Quiz Anak Cerdas</h1>
    <div class="quiz-container">
        <div id="quiz">
            <div id="question-board">
                <p class="question" id="question"></p>
            </div>
            <div class="row" id="options">
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
    <script src="/js/quiz.js?v={{ \Str::uuid() }}"></script>
    <script>
        $(document).ready(function () {
            $('.btn-submit-img').click(function () {
                location.href = "{{ route('landing.map') }}"
            })
            $('#cardwrong').click(function () {
                $("#cardwrong").fadeOut()
            })
        })
    </script>
@endpush
