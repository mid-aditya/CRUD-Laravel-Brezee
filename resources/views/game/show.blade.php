<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $game->judul }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            cursor: pointer; /* Menampilkan kursor sebagai pointer ketika di hover */
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $game->judul }}</h1>
        <!-- Gambar video -->
        <a href="{{ $game->link }}" target="_blank">
            <img src="{{ $game->gambar }}" alt="{{ $game->judul }}">
        </a>
        <!-- Link ke URL video -->
        <p><strong>Click on the image to watch the video</strong></p>
        <a href="{{ route('game.index') }}">Back to Video List</a>
    </div>
</body>
</html>
