<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match the Right Image</title>
    <link rel="stylesheet" href="{{ asset('css/drag.css') }}">
</head>
<body>
    <div class="container">
        <h1>Match the Right Image</h1>
        <div class="images">
            <!-- Gambar dengan format PNG -->
            <img src="images/apple.png" alt="Apple" class="image" id="apple">
            <img src="images/banana.png" alt="Banana" class="image" id="banana">
            <img src="images/cherry.png" alt="Cherry" class="image" id="cherry">
        </div>
        <div class="answers">
            <div id="apple-answer" class="answer">Apple</div>
            <div id="banana-answer" class="answer">Banana</div>
            <div id="cherry-answer" class="answer">Cherry</div>
        </div>
        <div id="result"></div>
    </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/js/drag.js?v={{ \Str::uuid(); }}"></script>
</body>
</html>
