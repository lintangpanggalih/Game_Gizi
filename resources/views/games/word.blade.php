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
    <div id="cardinstruction">
        <div style="text-align: right;">
            <img src="images/gram-berry/112.png" class="draglogo" style="max-width: 100%;">
        </div>
        <br>
        <div id="instruction-board">
            Tulis deskripsi dari gambar yang muncul, hafalkan karena merupakan petunjuk untuk permainan selanjutnya.
        </div>
        <div class="btn-start-img">
            <img src="images/start.png" alt="" style="max-width: 150px;">
        </div>
        <div class="figure-instruction">
            <img src="images/gram-berry/22.png" alt="">
        </div>
    </div>
    <div id="cardscore">
        <h1 style="color: gold;">CONGRATULATIONS!</h1>
        <br>
        <img src="images/gram-berry/112.png" alt="" style="max-width: 100%;">
        <div class="start-button">
        </div>
        <div class="figure-score">
            <img src="images/gram-berry/22.png" alt="">
            <div class="btn-submit-img">
                <img src="images/main/7.png" alt="" style="max-width: 150px;">
            </div>
        </div>
    </div>

    <!-- <h1>Match the Right Image</h1> -->
    <div style="text-align: right;">
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
    <div class="row scoring"></div>
@endsection

@push('scripts')
    <script src="/js/word.js?v={{ \Str::uuid() }}"></script>
@endpush
