<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Video</title>
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

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Video</h1>
        <form action="{{ route('game.update', $game->id_videos) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="judul">Title:</label>
            <input type="text" id="judul" name="judul" value="{{ $game->judul }}">
            <label for="gambar">Image URL:</label>
            <input type="text" id="gambar" name="gambar" value="{{ $game->gambar }}">
            <label for="link">Video URL:</label>
            <input type="text" id="link" name="link" value="{{ $game->link }}">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
