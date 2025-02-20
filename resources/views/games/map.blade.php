@extends('wrapper')
@section('title')
    Home
@endsection
<style>
    body {
        /* font-family: Arial, sans-serif;
        text-align: center;
        display: flex;
        background-color: #f4f4f4;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh; */
    }

    .container {
        padding-top: 150px !important;
    }

    .map-container {
        background-image: url("/images-v2/map.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 90%;
        position: relative;
        /* display: inline-block; */
        /* margin: auto; */
    }

    .map-button {
        background: none;
        position: absolute;
        border: none;
        /* padding: 8px 12px; */
        border-radius: 50%;
        cursor: pointer;
        font-size: 14px;
        background-color: rgba(255, 218, 194, 0.678);
    }

    /* Sesuaikan posisi tombol */
    #button1 {
        top: 20%;
        left: 25%;
    }

    #button2 {
        top: 40%;
        left: 55%;
    }

    #button3 {
        top: 55%;
        left: 25%;
    }

    #button4 {
        top: 75%;
        left: 50%;
    }

    #treasure-map {
        position: fixed;
        width: 50vh;
        top: 15%;
        left: 50%;
        transform: translate(-50%, -20%);
    }

    #rule-board {
        top: 0%;
        left: 50%;
        transform: translate(-50%, -0%);
        position: absolute;
        width: 100%;
        height: 100%;
        /* background-color: #0000007a; */
        z-index: 10;
    }

    #rule-board-img {
        top: 20%;
        left: 50%;
        transform: translate(-50%, -0%);
        position: absolute;
        /* width: 100%;
        height: 100%; */
        /* background-color: #0000007a; */
        z-index: 10;
    }
</style>
@section('content')
    @if (!$stages)
        <div id="rule-board">
            <img src="images-v2/homepage/rule-title.png" alt="" width="300px">
            <img src="images-v2/homepage/rule-board.png" alt="" id="rule-board-img">
        </div>
    @endif
    <div id="map-wrapper" @if (!$stages) style="display: none;" @endif>
        <img id="treasure-map" src="images-v2/homepage/9.png" alt="Peta Harta Karun">
        <div class="map-container">
            <button id="button1" class="map-button" onclick="showMessage('Petunjuk 1: Lihat ke arah pohon besar!')">
                <a href="{{ route('landing.quiz') }}">
                    @if ($stages['quiz'] ?? null)
                        <img src="images-v2/quiz/18.png" alt="" width="100vw">
                    @else
                        <img src="images-v2/homepage/12.png" alt="" width="100vw">
                    @endif
                </a>
            </button>
            <button id="button2" class="map-button" onclick="showMessage('Petunjuk 2: Gali di dekat batu besar!')">
                <a href="{{ route('landing.word') }}">
                    @if ($stages['gram-berry'] ?? null)
                        <img src="images-v2/gram-berry/22.png" alt="" width="100vw">
                    @else
                        <img src="images-v2/homepage/12.png" alt="" width="100vw">
                    @endif
                </a>
            </button>
            <button id="button3" class="map-button">
                <a href="{{ route('landing.card') }}">
                    @if ($stages['mineral-memory'] ?? null)
                        <img src="images-v2/mineral-memory/21.png" alt="" width="100vw">
                    @else
                        <img src="images-v2/homepage/12.png" alt="" width="100vw">
                    @endif
                </a>
            </button>
            <button id="button4" class="map-button" onclick=>
                <a href="{{ route('landing.drag') }}">
                    @if ($stages['meat-match-up'] ?? null)
                        <img src="images-v2/meat-match-up/20.png" alt="" width="100vw">
                    @else
                        <img src="images-v2/homepage/12.png" alt="" width="100vw">
                    @endif
                </a>
            </button>
            {{-- <button id="button4" class="map-button" onclick=><a href="{{ route('landing.cardrule') }}">START NOW</a></button> --}}
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function showMessage(message) {
            alert(message);
        }
        $(document).ready(function() {
            $(window).click(function(e) {
                $('#rule-board').slideUp();
                setTimeout(() => {
                    $('#map-wrapper').fadeIn(500);
                }, 1000);
            })
        })
    </script>
@endpush
