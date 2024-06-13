@extends('welcome')

@section('content')
    <table border="1">
        @foreach ($videos as $video)
            <tr>
                <td>
                    <a href="{{ $video->link }}" style="display: inline-block; margin-bottom: 10px;">{{ $video->judul }}</a>
                    <br>
                    <a href="{{ $video->link }}">
                        <img src="{{ $video->gambar }}" alt="{{ $video->judul }}" style="max-width: 300px; max-height: 300px;">
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

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
@endsection

@section('content_dota')
    <table border="1">
        @foreach ($dota as $dotas)
            <tr>
                <td>
                    <a href="{{ $dotas->link }}" style="display: inline-block; margin-bottom: 10px;">{{ $dotas->judul }}</a>
                    <br>
                    <a href="{{ $dotas->link }}">
                        <img src="{{ $dotas->gambar }}" alt="{{ $dotas->judul }}" style="max-width: 300px; max-height: 300px;">
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection