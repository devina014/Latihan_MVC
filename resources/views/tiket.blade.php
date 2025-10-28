<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Tiket Wisata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: white;
            padding: 30px 50px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h2 {
            color: #1e3a8a;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
        }
        .harga {
            color: #16a34a;
            font-weight: bold;
        }
        a {
            display: inline-block;
            margin-top: 25px;
            text-decoration: none;
            background-color: #1d4ed8;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            transition: 0.3s;
        }
        a:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Informasi Tiket Wisata</h2>
        <p>Tempat Wisata: <b>{{ $tempat }}</b></p>
        <p>Harga Tiket: <span class="harga">Rp {{ number_format($harga, 0, ',', '.') }}</span></p>
        <a href="/">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
