@extends('layout')
<title>Cadastro</title>
@section('conteudo')
    <div class="container">
        <br>
        <h1 class="display-4 text-center">Cadastre o animal perdido</h1>
        <form action="/salvarcadastro" method="get" class="border-top">
            <br>
            <label for="nome">Nome do animal: </label>
            <input class="form-control" type="text" name="nome">
            <label for="especie">Espécie do animal: </label>
            <input class="form-control" type="text" name="especie">
            <label for="foto">Link para a foto do animal: </label>
            <input class="form-control" type="text" name="foto">
            <label for="telefone">Telefone de contato: </label>
            <input class="form-control" type="tel" name="telefone">
            <br>
            <button class="btn btn-outline-dark btn-lg container" type="submit">Enviar</button>
            <br>
        </form>
    </div>
@endsection