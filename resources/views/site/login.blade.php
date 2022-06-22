<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Gestão</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css"/>
       
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white h4">GamaSoft</h5>
            <span class="text-muted">Sistema de Chamados</span>
        </div>
        
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
            
              <a class="nav-link active" aria-current="page" href="{{route('site.sair')}}">Sair</a>
            </li>
        </ul>
    </nav>
    @foreach ($usuario as $usuario)
            <p>{{$usuario->nome}}</p>
    @endforeach 
    
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <div class="mx-auto text-align-center" style="width: 15%;">
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
        <select class="form-select" name="Setor" aria-label="Default select example">
            <option selected>Selecione</option>
            <option value="SAC">SAC</option>
            <option value="FINANCEIRO">FINANCEIRO</option>
            <option value="CONTABILIDADE">CONTABILIDADE</option>
          </select>
    </div>
    <div class="form-floating">
        <textarea class="form-control" name="Descricao" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
        <label for="floatingTextarea2">Relate o Problema</label>
    </div>
    <div class="col-12"> 
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
    </form>

    <div class="mx-auto text-align-center" style="width: 10%;">
        <h4>Chamados</h4>
    </div>
       

  {{--tabela de chamados criados--}}
    
    <table class="display" width="100%" id="resgate">

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
<script>
   $(document).ready(function () {
    $('#resgate').DataTable({
        scrollY: '200px',
        scrollCollapse: true,
        paging: false,
    });
});
</script>