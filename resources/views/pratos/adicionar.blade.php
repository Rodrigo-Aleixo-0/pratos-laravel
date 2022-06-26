@extends('layouts/default')

@section('title', 'Adicionar prato')

@section('content')

<div class="container mt-3">
    <h1>Adicionar novo prato</h1>
    <hr>
    <form action="{{ route('pratos-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nome do prato:</label>
        <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome"><br>

        <label for="">Descrição do prato:</label>
        <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição" cols="33" rows="5"></textarea><br>

        <label for="">Preço do prato:</label>
        <input class="form-control" type="number" step="any" id="preco" name="preco" placeholder="Preço"><br>

        <label for="">Imagem do prato:</label><br>
        <input class="form-control" type="file" id="image" name="image" style="margin-top: 5px;"><br><br>

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
        } else if(document.getElementById('image').value == ''){
            window.alert("Selecione uma imagem para o prato");
            return false
        } else {
            return true
        }
    }
</script>


@endsection