<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>You Are What You Eat - Mobile</title>
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

        .container{
            text-align: center;
            /* max-width: 500px; */
            /* max-height: fit-content; */
            /* margin: auto;
            padding: 10px;
            background: #fff; */
            /* box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); */
            /* border-radius: 10px; */
        }
        
        .hero-image {
            /* background-color: #cccccc; */
            background-image: url("/images/bg2.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 80%;
            /* position: relative; */

        }

        .image img {
            width: 100%;
            /* max-width: 500px; */
            /* margin-top: 20px; */
            /* border-radius: 10px; */
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

        /* .start-button button {
            text-decoration: none;
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
        } */

        .start-button button:hover {
            background-color: #c0392b;
        }

        /* Responsiveness */
        @media screen and (max-width: 600px) {
            
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
        <!-- <div class="title">You Are</div>
        <div class="subtitle">What You Eat!</div> -->

        <div class="hero-image">
        <div class="image">
            <img src="/images/lady2.png" alt="Woman eating strawberry">
        </div>
        <br>
        <a class="btn btn-danger" href="{{ route('landing.biodata')}}" role="button">START NOW</a>
        </div>
        

        <!-- <div class="table">
            <div class="food">
                <img src="/images/food1.png" alt="Salad">
            </div>
            <div class="food">
                <img src="/images/food2.png" alt="Indonesian dish">
            </div>
            <div class="food">
                <img src="fruit_platter.png" alt="Fruit platter">
            </div>
        </div> -->

        <!-- <div class="start-button">
            <button onclick=><a href="{{ route('landing.biodata')}}">START NOW</a></button>
        </div> -->
        
    </div>
</body>
</html>