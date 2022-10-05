<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
    header{
        height: 20vh;
        background: AntiqueWhite;
        border-bottom: 5px solid LightCoral;
    }
    footer{
        height:10vh;
        background: LightCoral;
    }
</style>
<body>
    <header class="container-fluid">
        <div class="row">
            <div class="col d-flex justify-content-around mt-5">
                <a href="{{url('/cadastro')}}" class="btn btn-outline-dark btn-lg">Cadastro</a>
                <a href="{{url('/')}}" class="btn btn-outline-dark btn-lg">Procurados</a>
            </div>
        </div>
        @yield('cabecalho')
    </header>
    <main class="container">
        @yield('conteudo')
    </main>
    <footer class="container-fluid">
       <p class="text-center">Projeto produzido por: Maria Alice Silva, Maria Eduarda Arruda e Maria Gabriela Vasconcelos</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>