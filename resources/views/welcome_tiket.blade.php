<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Tiket Wisata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3acfd5 0%, #3a4ed5 100%);
            color: white;
            text-align: center;
            padding-top: 80px;
        }
        h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        a {
            display: block;
            width: 250px;
            margin: 10px auto;
            background-color: white;
            color: #1e40af;
            text-decoration: none;
            padding: 10px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }
        a:hover {
            background-color: #dbeafe;
        }
        footer {
            margin-top: 60px;
            font-size: 14px;
            color: #e0e7ff;
        }
    </style>
</head>
<body>
    <h1>🎫 Selamat Datang di Sistem Tiket Wisata</h1>
    <p>Silakan pilih destinasi wisata untuk melihat harga tiket:</p>

    <a href="/tiket/Papuma/20000">🎟️ Tiket Papuma (Rp 20.000)</a>
    <a href="/tiket/WatuUlo/15000">🎟️ Tiket Watu Ulo (Rp 15.000)</a>
    <a href="/tiket/PancerPuger/10000">🎟️ Tiket Pancer Puger (Rp 10.000)</a>

    <footer>© 2025 Sistem Tiket Wisata — Laravel Route Demo</footer>
</body>
</html>
