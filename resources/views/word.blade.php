@extends('wrapper')
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

    #draglogo {
        width: 20vh;
        margin-bottom: 5vh;

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

    .start-button button {
        font-size: 0.9rem;
        padding: 8px 15px;
    }

    #cardscore{
        position: absolute;
        top: 0%;
        left: 0%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.74);
        width: 100%;
        z-index: 11;
        /* display: none; */
        text-align: center;
        padding-top: 10vh;
        overflow: hidden;
    }

    .start-button {
        font-size: 0.9rem;
    }

    .figure-score {
        margin-top: -50%;
        margin-left: -100px;
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
        <img src="images/gram-berry/112.png" alt="" style="max-width: 100%;">
        <div class="start-button">
        </div>
        <div class="figure-score">
            <img src="images/gram-berry/22.png" alt="" style="max-width: 80%;">
        </div>
        <div class="btn-submit-img">
            <img src="images/main/7.png" alt="" style="max-width: 150px;">
        </div>
    </div>

    <!-- <h1>Match the Right Image</h1> -->
    <div style="text-align: right;">
        {{-- <img src="images/draglogo.png"> --}}
        <img src="images/gram-berry/28.png" id="draglogo">
    </div>
    <main>
        <section id="game">
            <div id="image-container">
                <img id="game-image" src="images/karbohidrat.png" alt="Gambar yang harus ditebak">
            </div>
            <div id="letters-container"></div>
            <div id="input-container">
                <p id="guess-word"></p>
                <button id="reset-button">Reset</button>
            </div>
        </section>
        <section id="message">
            <p id="status"></p>
        </section>
    </main>
@endsection

@push('scripts')
    <script src="/js/word.js?v={{ \Str::uuid() }}"></script>
    <script>
        $(document).ready(function () {
            $('.btn-submit-img').click(function () {
                location.href = "{{ route('landing.map') }}"
            })
        })
    </script>
@endpush
