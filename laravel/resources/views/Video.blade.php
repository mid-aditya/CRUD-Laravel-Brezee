@extends('welcome')
@section('Content_vid')
<table border="1">

    @foreach($game as $Get)
    <tr>
        <a href={{ $Get->link }}><img src={{$Get->gambar}}></img></a>
        <a href={{ $Get->link }}>{{ $Get->judul }} </a><br>

    </tr>
    @endforeach
</table>
@endsection