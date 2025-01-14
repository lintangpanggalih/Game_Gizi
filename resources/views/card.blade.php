<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript - Card Game</title>
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/2745e261bc.js"></script>
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
    </style>
</head>

<body>
    <div id="cardinfo">
        <h1>BERHASIL</h1>
    </div>
    <div id="cardscore">
        <h1>Score</h1>
        <div class="start-button">
            <button onclick=><a href="{{ route('landing.map')}}">Mengerti</a></button>
        </div>
    </div>
    <div class="container">
        <ul class="cards">
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-1.png" data-id="card-img-1" alt="Card Image">
                </div>
            </li>
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-2.png" data-id="card-img-2" alt="Card Image">
                </div>
            </li>
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-3.png" data-id="card-img-3" alt="Card Image">
                </div>
            </li>
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-4.png" data-id="card-img-4" alt="Card Image">
                </div>
            </li>
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-5.png" data-id="card-img-5" alt="Card Image">
                </div>
            </li>
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-6.png" data-id="card-img-6" alt="Card Image">
                </div>
            </li>
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-7.png" data-id="card-img-7" alt="Card Image">
                </div>
            </li>
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-8.png" data-id="card-img-8" alt="Card Image">
                </div>
            </li>

            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-1.png" data-id="card-img-1" alt="Card Image">
                </div>
            </li>
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-2.png" data-id="card-img-2" alt="card-image">
                </div>
            </li>
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-3.png" data-id="card-img-3" alt="Card Image">
                </div>
            </li>
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-4.png" data-id="card-img-4" alt="Card Image">
                </div>
            </li>
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-5.png" data-id="card-img-5" alt="Card Image">
                </div>
            </li>
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-6.png" data-id="card-img-6" alt="Card Image">
                </div>
            </li>
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-7.png" data-id="card-img-7" alt="Card Image">
                </div>
            </li>
            <li class="card">
                <div class="view front-view"></div>
                <div class="view back-view">
                    <img src="/images/img-8.png" data-id="card-img-8" alt="Card Image">
                </div>
            </li>
        </ul>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/js/card.js?v={{ \Str::uuid(); }}"></script>
</body>

</html>