<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video List</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #1a1a1a; /* Ganti warna latar belakang menjadi hitam atau warna gelap lainnya */
        color: #fff; /* Ganti warna teks menjadi putih */
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #333; /* Ganti warna latar belakang menjadi abu-abu gelap atau warna gelap lainnya */
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.1); /* Sesuaikan bayangan sesuai kebutuhan */
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        color: #fff; /* Ganti warna teks menjadi putih */
    }

    th, td {
        border: 1px solid #666; /* Ganti warna garis menjadi abu-abu atau warna gelap lainnya */
        padding: 8px;
        text-align: left;
        background-color: #444; /* Ganti warna latar belakang menjadi abu-abu gelap atau warna gelap lainnya */
    }

    th {
        background-color: #222; /* Ganti warna latar belakang header menjadi abu-abu gelap atau warna gelap lainnya */
    }

    img {
        max-width: 100px;
        height: auto;
    }

    a {
        text-decoration: none;
        color: #007bff;
        padding: 6px 12px;
        border: 1px solid #007bff;
        border-radius: 4px;
        background-color: transparent;
        transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    }

    a:hover {
        background-color: #007bff;
        color: #fff;
    }

    .actions {
        white-space: nowrap;
    }

    .actions a {
        margin-right: 5px;
    }

    .delete-form {
        display: inline-block;
    }

    .delete-form button {
        padding: 6px 12px;
        border: 1px solid #dc3545;
        border-radius: 4px;
        background-color: transparent;
        color: #dc3545;
        transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    }

    .delete-form button:hover {
        background-color: #dc3545;
        color: #fff;
    }

    </style>
</head>
<body>
    <div class="container">
        <h1>Video List</h1>
        <a href="{{ route('game.create') }}">Add New Video</a>        <a href="{{ route('dashboard') }}">Back</a>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($game as $games)
                    <tr>
                        <td><img src="{{ $games->gambar }}" alt="{{ $games->judul }}"></td>
                        <td>{{ $games->judul }}</td>
                        <td class="actions">
                            <a href="{{ route('game.edit', $games->id_videos) }}">Edit</a>
                            <form class="delete-form" action="{{ route('game.destroy', $games->id_videos) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
