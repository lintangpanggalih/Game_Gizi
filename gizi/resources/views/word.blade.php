<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Word Game - Tebak Gambar</title>
  <link rel="stylesheet" href="{{ asset('css/word.css') }}">
</head>
<body>
  <header>
    <h1>🐾 Tebak Gambar 🐾</h1>
    <p>Susun huruf untuk menebak gambar!</p>
  </header>
  <main>
    <section id="game">
      <div id="image-container">
        <img id="game-image" src="images/kelinci.png" alt="Gambar yang harus ditebak">
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
  <script src="/js/word.js"></script>
</body>
</html>
