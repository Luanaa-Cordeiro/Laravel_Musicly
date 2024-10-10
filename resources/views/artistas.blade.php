@extends('master')

@section('content')

<a href="{{route('artistas.create')}}">Adicionar</a>
<hr>

<h2>Artistas</h2>

<ul>
    @foreach($artistas as $artista)
    <li>{{$artista->nome}} | <a href="{{ route('artistas.edit', ['artista' => $artista->id]) }}">editar</a>
 | <a href="{{route('artistas.show',['artista' => $artista->id])}}">Mostrar</a></li> 
    @endforeach
</ul>

@endsection