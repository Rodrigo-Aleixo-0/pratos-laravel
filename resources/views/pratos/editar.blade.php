@extends('layouts/default')

@section('title', 'Editar prato')

@section('content')

<div class="container mt-3">
    <h1>Editar prato</h1>
    <hr>
    <form action="/{{ $prato->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label for="">Nome do prato:</label>
        <input class="form-control" type="text" id="nome" name="nome" placeholder="nome" value="{{ $prato->nome }}"><br>

        <label for="">Descrição do prato:</label>
        <textarea class="form-control" id="descricao" name="descricao" placeholder="descricao" cols="33" rows="5">{{ $prato->descricao }}</textarea><br>
        
        <label for="">Preço do prato:</label>
        <input class="form-control" type="number" step="any" id="preco" name="preco" placeholder="preco" value="{{ $prato->preco }}"><br>

        <label style="font-weight: bold;" for="">Imagem atual</label>
        <div class="card" style="width: 250px; margin-top: 10px; margin-bottom: 10px;">
            <img class="card-img-top img-thumbnail" src="/img/pratos/{{ $prato->imagem }}" alt="">
        </div>
        
        <input class="form-control" type="file" id="image" name="image"><br>

        <button type="submit" class="btn btn-primary" onclick="return enviar()">Salvar</button>

        <a href="{{ route('pratos-lista') }}" class="btn btn-primary" style="display: inline; padding: 7px;">Voltar</a>
    </form>
</div>

<script>
    function enviar(){
        if(document.getElementById('nome').value == ''){
            window.alert("Digite um nome para o prato");
            return false
        } else if(document.getElementById('descricao').value == ''){
            window.alert("Digite uma descrição para o prato");
            return false
        } else if(document.getElementById('preco').value == ''){
            window.alert("Digite um preço para o prato");
            return false
        } else {
            return true
        }
    }
</script>


@endsection