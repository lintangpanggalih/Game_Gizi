@extends('games.wrapper')
@section('title')
    Home
@endsection

<link rel="stylesheet" href="{{ asset('css/card.css') }}">
<style>
    .start-button {
        font-size: 0.9rem;
    }
</style>

@section('content')
    <div id="cardinstruction">
        <div style="text-align: right;">
            <img src="images/mineral-memory/27.png" class="draglogo" style="max-width: 100%;">
        </div>
        <br>
        <div id="instruction-board">
            Temukan pasangan deskripsi yang tepat dari setiap kotak yang berisi gambar. hafalkan karena merupakan petunjuk untuk permainan selanjutnya.
        </div>
        <div class="btn-start-img">
            <img src="images/start.png" alt="" style="max-width: 150px;">
        </div>
        <div class="figure-instruction">
            <img src="images/mineral-memory/15.png" alt="">
        </div>
    </div>
    <div id="cardscore">
        <h1 style="color: gold;">CONGRATULATIONS!</h1>
        <br>
        <img src="images/mineral-memory/111.png" alt="" style="max-width: 100%;">
        <div class="start-button">
        </div>
        <div class="figure-score">
            <img src="images/mineral-memory/15.png" alt="">
            <div class="btn-submit-img">
                <img src="images/main/7.png" alt="" style="max-width: 150px;">
            </div>
        </div>
    </div>

    <div style="text-align: right;">
        <img src="images/mineral-memory/27.png" id="draglogo">
    </div>
    <div class="cards" id="cards-container">
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-1.png" class="img-memory" data-id="card-img-1" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-2.png" class="img-memory" data-id="card-img-2" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-3.png" class="img-memory" data-id="card-img-3" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-4.png" class="img-memory" data-id="card-img-4" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-5.png" class="img-memory" data-id="card-img-5" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-6.png" class="img-memory" data-id="card-img-6" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-7.png" class="img-memory" data-id="card-img-7" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-8.png" class="img-memory" data-id="card-img-8" alt="Card Image">
            </div>
        </div>

        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img1.png" class="img-memory" data-id="card-img-1" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img2.png" class="img-memory" data-id="card-img-2" alt="card-image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img3.png" class="img-memory" data-id="card-img-3" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img4.png" class="img-memory" data-id="card-img-4" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img5.png" class="img-memory" data-id="card-img-5" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img6.png" class="img-memory" data-id="card-img-6" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img7.png" class="img-memory" data-id="card-img-7" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img8.png" class="img-memory" data-id="card-img-8" alt="Card Image">
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/js/card.js?v={{ \Str::uuid() }}"></script>
@endpush
