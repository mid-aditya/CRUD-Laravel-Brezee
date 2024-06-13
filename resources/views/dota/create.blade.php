<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Video</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212; /* Warna latar belakang untuk mode gelap */
            color: #fff; /* Warna teks untuk mode gelap */
            margin: 0;
            padding: 0;
            transition: color 0.3s, background-color 0.3s; /* Transisi untuk perubahan mode */
        }

        .container {
            max-width: 500px;
            margin: 20px auto;
            background-color: #333; /* Warna latar belakang untuk kontainer */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Efek bayangan */
            transition: background-color 0.3s; /* Transisi untuk perubahan mode */
        }

        h1 {
            font-size: 24px;
            color: #fff;
            margin-bottom: 20px; /* Ruang tambahan di bawah judul */
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #fff; /* Warna teks untuk label */
        }

        input[type="text"] {
            width: calc(100% - 22px); /* Lebar input dikurangi dengan lebar padding */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #444; /* Warna latar belakang untuk input */
            color: #fff; /* Warna teks untuk input */
        }

        button[type="submit"] {
            width: 100%; /* Tombol mengisi lebar kontainer */
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s; /* Transisi untuk hover */
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add New Video</h1>
        <form action="{{ route('dota.store') }}" method="POST">
            @csrf
            <label for="judul">Title:</label>
            <input type="text" id="judul" name="judul">
            <label for="gambar">Image URL:</label>
            <input type="text" id="gambar" name="gambar">
            <label for="link">Video URL:</label>
            <input type="text" id="link" name="link">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
