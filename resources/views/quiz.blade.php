<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz Anak</title>
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <h1>Quiz Anak Cerdas</h1>
  <div class="quiz-container">
    <div id="quiz">
      <div class="question" id="question"></div>
      <div class="options" id="options"></div>
    </div>
    <div class="result" id="result"></div>
    <button class="next" id="next" style="display: none;" onclick=><a href="{{ route('landing.map')}}">Next</a></button>
  </div>
  <script src="/js/quiz.js?v={{ \Str::uuid(); }}"></script>
</body>
</html>
