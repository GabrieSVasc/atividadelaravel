@extends('layout')
<title>Procurados</title>
@section('conteudo')
<h1 class='display-4 text-center'>Animais perdidos</h1>
<table class='table table-bordered'>
<thead>
    <th scope='col'>#</th>
    <th scope='col'>Nome</th>
    <th scope='col'>Espécie</th>
    <th scope='col'>Foto</th>
    <th scope='col'>Telefone</th>
    <th scope='col'></th>
</thead>
</tr>
    @foreach($cadastros as $cadastro)
        <tr>
            <th scope='col'>{{$cadastro->id}}</th>
            <th scope='col'>{{$cadastro->nome}}</th>
            <th scope='col'>{{$cadastro->especie}}</th>
            <th><a href="?mostrar={{$cadastro->id}}">Ver foto</a></th>
            <th scope='col'>{{$cadastro->telefone}}</th>
            <th><a href="/editar/{{$cadastro->id}}">Atualizar</a> <a href="/deletar/{{$cadastro->id}}">Deletar</a></th>
        </tr>
    @endforeach
</table>
@if(isset($_GET['mostrar']))
    @if($_GET['mostrar'])
        @foreach($cadastros as $cadastro)
            @if($cadastro->id == $_GET['mostrar'])
                <img class="container"src="{{$cadastro->foto}}" alt="{{$cadastro->nome}}">
            @endif
        @endforeach
    @endif
@endif
@endsection