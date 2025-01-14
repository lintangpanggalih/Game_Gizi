<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match the Right Image</title>
    <link rel="stylesheet" href="{{ asset('css/drag.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container text-center">
        <!-- <h1>Match the Right Image</h1> -->
         <!-- <div class="card"><img src="images/draglogo.png"></div> -->
          <img src="images/draglogo.png" class="rounded float-right" alt="draglogo">
        <div class="row row-cols-2">
            <div class="images">
                <!-- Gambar dengan format PNG -->
                <div class="col">
                    <img src="images/drag1.png" alt="Drag1" class="image" id="drag1">
                </div>
                <div class="col">
                    <img src="images/drag2.png" alt="Drag2" class="image" id="drag2">
                </div>
                <div class="col">
                    <img src="images/drag3.png" alt="Drag3" class="image" id="drag3">
                </div>
                <div class="col">
                    <img src="images/drag4.png" alt="Drag4" class="image" id="drag4">
                </div>
            </div>
            <div class="answers">
                <div class="col" >
                    <img src="images/drag-1.png" id="drag1-answer" class="answer">
                </div>
                <div class="col" >
                    <img src="images/drag-2.png" id="drag2-answer" class="answer">
                </div>
                <div class="col" >
                    <img src="images/drag-3.png" id="drag3-answer" class="answer">
                </div>
                <div class="col" >
                    <img src="images/drag-4.png" id="drag4-answer" class="answer">
                </div>
            </div>
        </div>
        <div id="result"></div>
    </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/js/drag.js?v={{ \Str::uuid(); }}"></script>
</body>
</html>
