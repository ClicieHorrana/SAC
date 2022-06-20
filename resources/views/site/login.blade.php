<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Gestão</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="/img/gama.png" alt="" width="150" height="70">
            </a>
        </div>
    </nav>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <div class="mx-auto text-align-center" style="width: 450px;">
        <h4>Registre seu chamado</h4>
    </div>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
 
        {{--Formulario de chamados--}}

    <div style="width:100%; margin-left: auto; margin-right: auto;"> 
    <form class="row g-3" method="post" action="{{route('site.chamado')}}">
    @csrf
        <div class="col-md-6">
            <label for="inputEmail4"  class="form-label">Email</label>
            <input type="email" name="Email" class="form-control" id="inputEmail4">
        </div>
    <div class="col-md-6">
        <label for="inputPassword4"  class="form-label">Setor</label>
        <input type="password" name="Setor" class="form-control" id="inputPassword4">
    </div>
    <div class="form-floating">
        <textarea class="form-control" name="Descricao" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
        <label for="floatingTextarea2">Relate o Problema</label>
    </div>
    <div class="col-12"> 
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
    </form>

    <div class="mx-auto text-align-center" style="width: 355px;">
        <h4>Chamados</h4>
    </div>
       

  {{--tabela de chamados criados--}}
    
    <table class="table">

        <thead>
            <tr>
            <th scope="col">Criador</th>
            <th scope="col">Setor</th>
            <th scope="col">Descricao</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        @foreach ($chamado as $chamado)
            <td>{{$chamado->email}}</td>
            <td>{{$chamado->setor}}</td>
            <td>{{$chamado->descricao}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
    </body>
</html>