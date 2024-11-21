<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz Anak</title>
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
  
</head>
<body>
  <h1>Quiz Anak Cerdas</h1>
  <div class="quiz-container">
    <div id="quiz">
      <div class="question" id="question"></div>
      <div class="options" id="options"></div>
    </div>
    <div class="result" id="result"></div>
    <button class="restart" id="restart" style="display: none;">Mulai Lagi</button>
  </div>
  <script src="/js/quiz.js"></script>
</body>
</html>
