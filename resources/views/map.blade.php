<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Harta Karun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            display: flex;
            background-color: #f4f4f4;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }
        .map-container {
            background-image: url("/images/bg2.png");
            /* background-position: center; */
            background-repeat: no-repeat;
            background-size: cover;
            height: 80%;
            position: relative;
            display: inline-block;
            margin: auto;
            /* margin: 20px; */
        }
        .map-container img {
            padding: 150px 0;
            width: 100%;
            max-width: 600px;   
            border: 2px solid #8B4513;
            border-radius: 8px;
        }
        .map-button {
            position: absolute;
            background-color: rgba(255, 215, 0, 0.8);
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        .map-button:hover {
            background-color: rgba(255, 165, 0, 0.8);
        }
        /* Sesuaikan posisi tombol */
        #button1 { top: 30%; left: 50%; }
        #button2 { top: 50%; left: 50%; }
        #button3 { top: 70%; left: 30%; }
        #button4 { 
            top: 80%; 
            left: 55%; 
            background-color: #e74c3c;
            }
    </style>
</head>
<body>
    <!-- <h1>Peta Harta Karun</h1>
    <p>Klik pada area peta untuk menemukan petunjuk!</p> -->
    <div class="map-container">
        <img src="images/map.png" alt="Peta Harta Karun">
        <button id="button1" class="map-button" onclick="showMessage('Petunjuk 1: Lihat ke arah pohon besar!')">Area 1</button>
        <button id="button2" class="map-button" onclick="showMessage('Petunjuk 2: Gali di dekat batu besar!')">Area 2</button>
        <button id="button3" class="map-button" onclick="showMessage('Petunjuk 3: Cari di bawah air terjun!')">Area 3</button>
        <button id="button4" class="map-button" onclick=><a href="{{ route('landing.cardrule')}}">START NOW</a></button>
    </div>
    <script>
        function showMessage(message) {
            alert(message);
        }
    </script>
</body>
</html>
