@extends('master')

@section('content')

<h2>Artista- {{$artistas->nome}}</h2>

<form action="{{ route('artistas.destroy', ['artista' => $artistas->id]) }}" method="post">
@csrf
    <input type="hidden" name="_method" value="delete">
    <button type='submit'>Deletar</button>

</form>

@endsection