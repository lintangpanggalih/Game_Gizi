@extends('wrapper')
@section('title')
    Home
@endsection
<link rel="stylesheet" href="{{ asset('css/drag.css') }}">
<style>
    .container {
        overflow-y: hidden;
    }

    #draglogo {
        width: 20vh;
        margin-bottom: 10vh;

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
    <div id="cardscore">
        <h1 style="color: gold;">CONGRATULATIONS!</h1>
        <br>
        <img src="images/meat-match-up/110.png" alt="" style="max-width: 100%;">
        <div class="start-button">
        </div>
        <div class="figure-score">
            <img src="images/meat-match-up/14.png" alt="" style="max-width: 60%;">
        </div>
        <div class="btn-submit-img">
            <img src="images/main/7.png" alt="" style="max-width: 150px;">
        </div>
    </div>
    <!-- <h1>Match the Right Image</h1> -->
    <div style="text-align: right;">
        {{-- <img src="images/draglogo.png"> --}}
        <img src="images/draglogo.png" id="draglogo">
    </div>
    <div class="row m-0" style="width: 100%;">
        <div class="col images" style="padding-right: 0px;">
            <!-- Gambar dengan format PNG -->
            <div>
                <img src="images/drag1.png" alt="Drag1" class="image">
            </div>
            <div>
                <img src="images/drag2.png" alt="Drag2" class="image">
            </div>
            <div>
                <img src="images/drag3.png" alt="Drag3" class="image">
            </div>
            <div>
                <img src="images/drag4.png" alt="Drag4" class="image">
            </div>
        </div>
        <div class="col" style="padding-left: 0px;">
            <div>
                <img src="images/meat-match-up/box.png" alt="Drag4" class="image" id="drag1">
            </div>
            <div>
                <img src="images/meat-match-up/box.png" alt="Drag4" class="image" id="drag2">
            </div>
            <div>
                <img src="images/meat-match-up/box.png" alt="Drag4" class="image" id="drag3">
            </div>
            <div>
                <img src="images/meat-match-up/box.png" alt="Drag4" class="image" id="drag4">
            </div>
        </div>
        <div class="col answers" style="padding-right: 0px;">
            <div>
                <img src="images/drag-1.png" id="drag1-answer" class="answer">
            </div>
            <div>
                <img src="images/drag-2.png" id="drag2-answer" class="answer">
            </div>
            <div>
                <img src="images/drag-3.png" id="drag3-answer" class="answer">
            </div>
            <div>
                <img src="images/drag-4.png" id="drag4-answer" class="answer">
            </div>
        </div>
    </div>
    <div id="result"></div>
@endsection

@push('scripts')
    <script src="/js/drag.js?v={{ \Str::uuid() }}"></script>
    
    <script>
        $(document).ready(function () {
            $('.btn-submit-img').click(function () {
                location.href = "{{ route('landing.map') }}"
            })
        })
    </script>
@endpush
