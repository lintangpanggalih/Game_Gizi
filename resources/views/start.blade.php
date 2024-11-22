<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Are What You Eat - Mobile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        .container {
            text-align: center;
            width: 100%;
            padding: 10px;
            background: #fff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .title {
            font-size: 2rem;
            color: #2e542e;
            font-weight: bold;
            margin: 10px 0;
        }

        .subtitle {
            font-size: 1.5rem;
            color: #a23c3c;
            margin-top: -5px;
        }

        .image img {
            width: 100%;
            max-width: 200px;
            margin-top: 20px;
            border-radius: 10px;
        }

        .table {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
            gap: 10px;
        }

        .food img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .start-button button {
            margin-top: 20px;
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            max-width: 200px;
        }

        .start-button button:hover {
            background-color: #c0392b;
        }

        /* Responsiveness */
        @media screen and (max-width: 480px) {
            .title {
                font-size: 1.5rem;
            }

            .subtitle {
                font-size: 1.2rem;
            }

            .food img {
                width: 60px;
                height: 60px;
            }

            .start-button button {
                font-size: 0.9rem;
                padding: 8px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">You Are</div>
        <div class="subtitle">What You Eat!</div>

        <div class="image">
            <img src="/images/lady.png" alt="Woman eating strawberry">
        </div>

        <div class="table">
            <div class="food">
                <img src="/images/food1.png" alt="Salad">
            </div>
            <div class="food">
                <img src="/images/food2.png" alt="Indonesian dish">
            </div>
            <div class="food">
                <img src="fruit_platter.png" alt="Fruit platter">
            </div>
        </div>

        <div class="start-button">
            <button onclick="startGame()">START NOW</button>
        </div>
    </div>

    <script>
        function startGame() {
            alert("Game is starting!");
        }
    </script>
</body>
</html>
