<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameRules</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background-color: #f3f3f3; */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        .container {
            text-align: center;
            max-width: 1200px;
            margin: auto;
            padding: 10px;
            background: #fff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .rules {
            text-align: left;
        }

        .start-button button {
                font-size: 0.9rem;
                padding: 8px 15px;
            }
    </style>
</head>
<body>
    <div class="container">
        <h1>Card Rules</h1>
        <div class="rules">
            <br>
        <h2>Temukan pasangan deskripsi yang tepat dari setiap kotak yang berisi gambar. 
            Pahami pasangan dari masing - masing gambar karena merupakan kata level selanjutnya</h2>
        </div>
        <div class="start-button">
            <button onclick=><a href="{{ route('landing.card')}}">Mengerti</a></button>
        </div>
    </div>
</body>
</html>