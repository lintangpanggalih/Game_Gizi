@extends('wrapper')
<style>
    .draglogo,
    #draglogo {
        width: 20vh;
        margin-bottom: 5vh;
    }

    #cardinstruction,
    #cardresult,
    #cardwrong,
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

    #cardresult {
        background-color: rgba(128, 36, 0, 0.849);
    }

    #cardresult>img {
        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity 0.5s linear;
    }

    #cardinstruction {
        display: block;
        padding-top: 0px;
        background: linear-gradient(0deg, rgba(255, 217, 0, 0.164), rgba(168, 143, 0, 0.1)), url("{{ asset('images/main/main-bg.png') }}");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    #cardinstruction #instruction-board {
        width: 100%;
        min-height: 200px;
        font-size: 1.2em;
        box-sizing: border-box;
        overflow-wrap: break-word;
        background-image: url("/images/basic/question-board.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 40px 10px;
    }

    .figure-wrong {
        position: relative;
    }

    .figure-wrong img {
        max-width: 250px;
    }

    .figure-result {
        position: relative;
        /* margin-top: -10rem;
        margin-left: -10rem; */
    }

    .figure-result img {
        height: 15rem;
    }

    .figure-instruction {
        position: relative;
        text-align: right;
    }

    .figure-instruction img {
        height: 20rem;
    }

    .btn-start-img {
        margin-left: 5vh;
    }

    .figure-score {
        position: relative;
        margin-top: -10rem;
        margin-left: -10rem;
    }

    .figure-score img {
        height: 20rem;
    }

    .btn-start-img {
        margin-left: 5vh;
    }

    .btn-submit-img {
        position: absolute;
        left: 60%;
        top: 70%;
    }

    .btn-submit-img img {
        height: 100%;
    }

    .scoring {
        align-items: center;
        margin: 0px !important;
        height: 150px;
        margin-top: 10% !important;
        width: 100% !important;
        background-image: url('images/basic/question-board.png');
        background-size: contain;
        background-repeat: repeat-x;
    }
</style>
@section('content')
    @yield('game-content')
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.btn-submit-img').click(function() {
                location.href = "{{ route('landing.map') }}"
            })

            $(".btn-start-img").click(function(e) {
                $('#cardinstruction').slideUp();
                setTimeout(() => {
                    $('#map-wrapper').fadeIn(500);
                }, 1000);
            })
        })
    </script>
@endpush
