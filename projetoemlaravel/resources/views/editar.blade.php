@extends('layout')
<title>Atualizar informações</title>
@section('conteudo')
<div class="container">
    <br>
    <h1 class="display-4 text-center">Atualize as informações</h1>
    <form action="/atualizar/{{$cadastro->id}}" method="get" class="border-top">
        <br>
        <label for="nome">Nome do animal: </label>
        <input class="form-control" type="text" name="nome" value="{{$cadastro->nome}}">
        <label for="especie">Espécie do animal: </label>
        <input class="form-control" type="text" name="especie" value="{{$cadastro->especie}}">
        <label for="foto">Link para a foto do animal: </label>
        <input class="form-control" type="text" name="foto" value="{{$cadastro->foto}}">
        <label for="telefone">Telefone de contato: </label>
        <input class="form-control" type="tel" name="telefone" value="{{$cadastro->telefone}}">
        <br>
        <button class="btn btn-outline-dark btn-lg container" type="submit">Enviar</button>
        <br>
    </form>
</div>
@endsection