@extends('wrapper')
<style>
    #draglogo {
        width: 20vh;
        margin-bottom: 5vh;

    }

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

    #cardwrong {
        display: none;
    }

    .figure-wrong {
        position: relative;
    }

    .figure-wrong img {
        max-width: 250px;
    }

    .figure-score {
        position: relative;
        margin-top: -10rem;
        margin-left: -10rem;
    }

    .figure-score img {
        height: 20rem;
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
        })
    </script>
@endpush
