@extends('master')

@section('content')

<h2>edit</h2>

@if(session()->has('message'))
{{session()->get('message')}}
@endif

<form action="{{ route('artistas.update', ['artista' => $artistas->id])}}" method='post'>
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="nome" value="{{$artistas->nome}}">
    <button type='submit'>Atualizar</button>
</form>

@endsection