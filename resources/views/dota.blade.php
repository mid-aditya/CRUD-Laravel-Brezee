<!-- @extends('welcome')

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
@endsection -->
