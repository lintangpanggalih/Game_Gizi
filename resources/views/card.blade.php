@extends('wrapper')
@section('title')
    Home
@endsection

<link rel="stylesheet" href="{{ asset('css/card.css') }}">
<style>
    #cardinfo {
        position: absolute;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        width: 100%;
        z-index: 10;
        display: none;
    }

    #cardscore {
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
        margin-top: -200px;
        margin-left: -200px;
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
    <div id="cardinfo">
        <h1>BERHASIL</h1>
    </div>
    <div id="cardscore">
        <h1 style="color: gold;">CONGRATULATIONS!</h1>
        <br>
        <img src="images/mineral-memory/111.png" alt="" style="max-width: 100%;">
        <div class="start-button">
        </div>
        <div class="figure-score">
            <img src="images/mineral-memory/15.png" alt="" style="max-width: 80%;">
        </div>
        <div class="btn-submit-img">
            <img src="images/main/7.png" alt="" style="max-width: 150px;">
        </div>
    </div>
    <ul class="cards" style="padding: 50px 15px;">
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-1.png" class="img-memory" data-id="card-img-1" alt="Card Image">
            </div>
        </li>
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-2.png" class="img-memory" data-id="card-img-2" alt="Card Image">
            </div>
        </li>
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-3.png" class="img-memory" data-id="card-img-3" alt="Card Image">
            </div>
        </li>
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-4.png" class="img-memory" data-id="card-img-4" alt="Card Image">
            </div>
        </li>
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-5.png" class="img-memory" data-id="card-img-5" alt="Card Image">
            </div>
        </li>
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-6.png" class="img-memory" data-id="card-img-6" alt="Card Image">
            </div>
        </li>
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-7.png" class="img-memory" data-id="card-img-7" alt="Card Image">
            </div>
        </li>
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img-8.png" class="img-memory" data-id="card-img-8" alt="Card Image">
            </div>
        </li>

        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img1.png" class="img-memory" data-id="card-img-1" alt="Card Image">
            </div>
        </li>
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img2.png" class="img-memory" data-id="card-img-2" alt="card-image">
            </div>
        </li>
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img3.png" class="img-memory" data-id="card-img-3" alt="Card Image">
            </div>
        </li>
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img4.png" class="img-memory" data-id="card-img-4" alt="Card Image">
            </div>
        </li>
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img5.png" class="img-memory" data-id="card-img-5" alt="Card Image">
            </div>
        </li>
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img6.png" class="img-memory" data-id="card-img-6" alt="Card Image">
            </div>
        </li>
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img7.png" class="img-memory" data-id="card-img-7" alt="Card Image">
            </div>
        </li>
        <li class="card">
            <div class="view front-view">
                <img src="/images/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images/img8.png" class="img-memory" data-id="card-img-8" alt="Card Image">
            </div>
        </li>
    </ul>
@endsection

@push('scripts')
    <script src="/js/card.js?v={{ \Str::uuid() }}"></script>
    <script>
        $(document).ready(function () {
            $('.btn-submit-img').click(function () {
                location.href = "{{ route('landing.map') }}"
            })
        })
    </script>
@endpush
