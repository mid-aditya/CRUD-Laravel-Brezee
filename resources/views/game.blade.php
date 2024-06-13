<!-- @extends('welcome')

@section('tutorial_game')
    <table border="1">
        @foreach ($game as $games)
            <tr>
                <td>
                    <a href="{{ $games->link }}" style="display: inline-block; margin-bottom: 10px;">{{ $games->judul }}</a>
                    <br>
                    <a href="{{ $games->link }}">
                        <img src="{{ $games->gambar }}" alt="{{ $games->judul }}" style="max-width: 300px; max-height: 300px;">
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection -->
