<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Register</title>
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

        .container-sm {
            /* max-width: 500px; */
            /* margin: 50px auto; */
            /* background: rgba(255, 255, 255, 0.9); */
            /* background-image: url(); */
            background-image: url("/images/bg2.png");
            /* background-position: center; */
            background-repeat: no-repeat;
            background-size: cover;
            height: 80%;
            padding: 10px;
            padding-top: 0px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card {
            width: 18rem;
            justify-items: right;
        }
        .card img {
            max-width: 60%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group select {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* .center-button {
            display: flex;
            justify-content: center;
            align-items: center;
 
        }

        .center-button img{
            width: 200px;
            height: auto;
 
        } */


        button {
            background: none;
            border: none;
            /* padding: 10px 15px;
            border: none;
            max-width: 30%; */
            /* border-radius: 5px; */
            cursor: pointer;
            text-align: center;
        }

        button img {
            max-width: 50%;
        }

        /* button:hover {
            background-color: #218838;
        } */

        .success {
            color: green;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container-sm">
        <!-- <h2>Register</h2> -->
        <div class="card"><img src="/images/register.png" alt="monyet"></div>
        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="full_name">Nama Lengkap</label>
                <input type="text" id="full_name" name="full_name" required>
            </div>

            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <select id="gender" name="gender" required>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="birth_date">Tanggal Lahir</label>
                <input type="date" id="birth_date" name="birth_date" required>
            </div>

            <div class="form-group">
                <label for="whatsapp_number">Nomor WhatsApp</label>
                <input type="text" id="whatsapp_number" name="whatsapp_number" required>
            </div>

            <div class="form-group">
                <label for="weight">Berat Badan (kg)</label>
                <input type="number" id="weight" name="weight" step="0.1" required>
            </div>

            <div class="form-group">
                <label for="height">Tinggi Badan (cm)</label>
                <input type="number" id="height" name="height" step="0.1" required>
            </div>
            <button type="submit">
                <img src="/images/btn_next2.png" alt="next">
            </button>
            

        </form>
    </div>
</body>
</html>
