<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>@yield('title') - You Are What You Eat</title>
    <style>
        @font-face {
            font-family: "Core Narae";
            font-weight: normal;
            src: url("https://db.onlinewebfonts.com/t/d133af06cd91ba4a1fa4b9ccea3f4a35.eot");
            src: url("https://db.onlinewebfonts.com/t/d133af06cd91ba4a1fa4b9ccea3f4a35.eot?#iefix")format("embedded-opentype"),
                url("https://db.onlinewebfonts.com/t/d133af06cd91ba4a1fa4b9ccea3f4a35.woff2")format("woff2"),
                url("https://db.onlinewebfonts.com/t/d133af06cd91ba4a1fa4b9ccea3f4a35.woff")format("woff"),
                url("https://db.onlinewebfonts.com/t/d133af06cd91ba4a1fa4b9ccea3f4a35.ttf")format("truetype"),
                url("https://db.onlinewebfonts.com/t/d133af06cd91ba4a1fa4b9ccea3f4a35.svg#Core Narae Pro W01 Pro")format("svg");
        }

        @font-face {
            font-family: "Core Narae Bold";
            font-weight: bold;
            src: url("https://db.onlinewebfonts.com/t/2cbe273bc15d21da5011223497a52975.eot");
            src: url("https://db.onlinewebfonts.com/t/2cbe273bc15d21da5011223497a52975.eot?#iefix")format("embedded-opentype"),
                url("https://db.onlinewebfonts.com/t/2cbe273bc15d21da5011223497a52975.woff2")format("woff2"),
                url("https://db.onlinewebfonts.com/t/2cbe273bc15d21da5011223497a52975.woff")format("woff"),
                url("https://db.onlinewebfonts.com/t/2cbe273bc15d21da5011223497a52975.ttf")format("truetype"),
                url("https://db.onlinewebfonts.com/t/2cbe273bc15d21da5011223497a52975.svg#Core Narae Pro W01 Pro Bold")format("svg");
        }

        /* Basic Reset */
        body,
        h1,
        p {
            max-width: 768px;
            margin: 0 auto;
            padding: 0;
        }

        body {
            font-family: 'Core Narae', 'Core Narae Bold', Arial, Helvetica, sans-serif;
            background-color: #e6e6e6;
            text-align: center;
            line-height: 1.5;
            padding: 0cm !important;
            box-sizing: border-box;
            /* overflow-y: scroll; */
        }

        .container {
            position: relative;
            margin: 0;
            padding: 0cm;
            height: 100vh;
            background: white;
            background: linear-gradient(0deg, rgba(255, 217, 0, 0.164), rgba(168, 143, 0, 0.1)), url("{{ asset('images/main/main-bg.png') }}");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
        }

        input,
        select {
            font-family: Arial, Helvetica, sans-serif;
        }

        .input-mask {
            background-image: url("{{ asset('images/main/6.png') }}");
            background-size: cover;
            background-position: 5px center;
            background-repeat: no-repeat;
            padding-left: 30px;
        }

        .input-mask>input,
        .input-mask>select {
            border: none !important;
            background-color: transparent !important;
        }

        .input-mask>input:focus,
        .input-mask>select:focus {
            box-shadow: none !important;
        }

        .btn-start-img,
        .btn-submit-img {
            cursor: pointer;
            width: fit-content;
            border: none;
            outline: none;
            background-color: transparent;
        }

        .btn-start-img:active img,
        .btn-submit-img:active img {
            transform: scale(0.95);
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }

            header {
                font-size: 1.2rem;
            }

            .button {
                font-size: 0.9rem;
                padding: 8px 15px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('scripts')
</body>

</html>
