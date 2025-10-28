<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil {{ $vina }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 60%;
            margin: 50px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 30px;
        }
        h1 {
            color: #2c3e50;
        }
        .info {
            margin-top: 20px;
        }
        .info p {
            font-size: 18px;
            line-height: 1.6;
        }
        .highlight {
            color: #3498db;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profil {{ $vina }}</h1>
        <div class="info">
            <p>Halo, <span class="highlight">{{ $vina }}</span>! 👋</p>
            <p>Selamat datang di halaman profil pribadi kamu.</p>
            <p>Berikut adalah informasi dasar (contoh):</p>
            <ul>
                <li>Nama Lengkap: {{ $vina }}</li>
                <li>Pekerjaan: Mahasiswa</li>
                <li>Hobi: Desain, Coding, dan Jalan-jalan</li>
                <li>Email: {{ strtolower($vina) }}@gmail.com</li>
            </ul>
        </div>
    </div>
</body>
</html>
