<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Menambahkan Google Fonts baru -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif; /* Font untuk body diubah ke Open Sans */
            background-color: #afbfcf;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .hero {
            background: linear-gradient(135deg, #f3e7e9, #e3f2fd);
            color: #4b4b4b;
            padding: 90px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid #ddd;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: -50px;
            left: 50%;
            width: 160%;
            height: 150%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 20%, transparent 20%);
            background-size: 50px 50px;
            transform: translateX(-50%);
            z-index: 0;
            animation: floating 6s linear infinite;
        }
        @keyframes floating {
            0% { transform: translate(-50%, -50px); }
            50% { transform: translate(-50%, 0); }
            100% { transform: translate(-50%, -50px); }
        }
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            z-index: 1;
            position: relative;
            font-family: 'Montserrat', serif; /* Font untuk judul diubah ke Montserrat */
            font-weight: 700;
        }
        .hero p {
            font-size: 1.25rem;
            z-index: 1;
            position: relative;
            font-weight: 300;
            color: #707070;
            font-family: 'Open Sans', sans-serif; /* Font untuk paragraf diubah ke Open Sans */
        }
        .container {
            margin-top: -50px;
            position: relative;
            z-index: 2;
        }
        .card {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #ffffff;
            border: none;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }
        .card-body {
            text-align: center;
            padding: 40px;
            font-family: 'Open Sans', sans-serif; /* Font untuk isi kartu diubah ke Open Sans */
        }
        .footer {
            background-color: #f1f3f5;
            color: #333;
            text-align: center;
            padding: 30px 0;
            margin-top: 80px;
            font-size: 0.9rem;
            font-family: 'Open Sans', sans-serif; /* Font untuk footer diubah ke Open Sans */
        }
        .btn-primary {
            background-color: #6c757d;
            border-color: #6c757d;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            font-weight: bold;
            padding: 10px 20px;
            font-size: 1.1rem;
            font-family: 'Open Sans', sans-serif; /* Font untuk tombol diubah ke Open Sans */
        }
        .btn-primary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
        .fa-rocket {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="hero">
        <h1>WELCOME TO MY WEBSITE, BRO !!</h1>
        <p>Disini tempat para coder berkumpul dan berbagi kodingan 💻🌸</p>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Halo Bung!</h5>
                        <p class="card-text">Klik tombol di bawah untuk bergabung dengan kami.</p>

                        <!-- Menampilkan pesan -->
                        @if(isset($message))
                            <p class="alert alert-info">Pesan: {{ $message }}</p>
                        @else
                            <p class="alert alert-warning">Tidak ada pesan yang dikirim.</p>
                        @endif

                        <a href="#" class="btn btn-primary"><i class="fas fa-rocket"></i> JOIN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Your Website. All rights reserved.</p>
    </div>

    <!-- JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
