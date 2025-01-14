<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Word Game - Tebak Gambar</title>
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

        .start-button button {
                font-size: 0.9rem;
                padding: 8px 15px;
            }
  </style>
</head>
<body>
<div id="wordinfo">
        <h1>BERHASIL</h1>
    </div>
    <div id="wordscore">
        <h1>Score</h1>
        <div class="start-button">
            <button onclick=><a href="{{ route('landing.map')}}">Mengerti</a></button>
        </div>
    </div>
  <header>
    <h1>🐾 Tebak Gambar 🐾</h1>
    <p>Susun huruf untuk menebak gambar!</p>
  </header>
  <main>
    <section id="game">
      <div id="image-container">
        <img id="game-image" src="images/img8.png" alt="Gambar yang harus ditebak">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="/js/word.js?v={{ \Str::uuid(); }}"></script>
</body>
</html>
