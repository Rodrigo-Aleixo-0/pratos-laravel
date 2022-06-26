@extends('layouts/default')

@section('title', 'Pratos')

@section('content')

<div class="container mt-3">
    <h1 style="display: inline-block;">Pratos disponíveis</h1>
    <hr>
    @foreach($pratos as $prato)
    <div class="card" style="width: 250px; display: inline-block; margin: 25px;">
        <img class="card-img-top" style="max-height: 180px;" src="/img/pratos/{{$prato->imagem}}" alt="{{$prato->nome}}">
        <div class="card-body">
            <h5 class="card-title">{{$prato->nome}}</h5>
            <a href="pratos/detalhes/{{$prato->id}}" class="btn btn-primary">Mais detalhes</a>
        </div>
    </div>
    @endforeach

</div>

@endsection
