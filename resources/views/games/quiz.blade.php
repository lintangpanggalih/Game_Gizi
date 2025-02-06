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
    <script src="/js/quiz.js?v={{ \Str::uuid() }}"></script>
    <script>
        $(document).ready(function() {
            $('#cardwrong').click(function() {
                $("#cardwrong").fadeOut()
            })
        })
    </script>
@endpush
