@extends('master')

@section('content')

<h2>Criar</h2>

@if(session()->has('message'))
{{session()->get('message')}}
@endif

<form action="{{ route('artistas.store')}}" method="post">
@csrf
<input type="text" name="nome" placeholder="Nome" required>
    <button type="submit">Criar</button>
</form>


@endsection