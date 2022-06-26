@extends('layouts/default')

@section('title', 'Detalhes do prato')

@section('content')

<div class="container mt-3">
    <h1>{{$prato->nome}}</h1>
    <hr>
    <h4 style="font-weight: bold;">Descrição do prato</h4><br>
    <p>{{$prato->descricao}}</p><br>
    <hr>
    <h4 style="font-weight: bold;">Preço do prato</h4>
    <p>R$ {{$prato->preco}}</p>
</div>    


@endsection
