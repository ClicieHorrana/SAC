<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Gestão</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css\estilo_principal.css')}}">
    </head>
    <div class="container-fluid">
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
       <nav class="navbar bg-warning margin-0 ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
        </div>
      </nav>
        
        <div class="esquerda">
            <div class="informacao-pagina">
                <div style="width:30%; margin-left: auto; margin-right: auto;">
                {{--card com o formulario de login--}}
                    <div class="card" style="width: 30rem;">
                        <div class="card-header">
                            <img src="img/gama.png" class="card-img-top" alt="1">
                        </div>
                        <div class="card-body">
                            <p>
                            LOGIN
                            </p>
                            <form method="post" action="{{route('site.autenticar')}}">
                            @csrf
                            <input name="Email" value="{{ old('Email')}}" type="text" placeholder="E-mail" class="borda-preta">
                            {{$errors->has('Email') ? $errors->first('Email'):'' }}
                            <input name="Senha" value="{{ old('Senha')}}" type="password" required placeholder="Senha" class="borda-preta">
                            {{$errors->has('Senha') ? $errors->first('Senha'):'' }}
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <div class="card-footer" style="background-color: white">
                            {{--Botoes--}}
                                <div class="d-grid gap-2 d-md-block">
                                    <button  type="submit" style="width:100px"  class="btn btn-primary">Entrar</button>
                                    <button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CadastroModal">Cadastrar</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>  
        </div>
        {{--rodape--}}
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Redes Sociais</h5>
                <img class="img-thumbnail" src="img/facebook.png">
                <img class="img-thumbnail" src="img/linkedin.png">
                <img class="img-thumbnail"src="img/youtube.png">
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Contato</h5>
                <p class="card-text">0800 723 1799</p>
                <p class="card-text">Rodovia, Rod. Fernão Dias, s/n - km 483,35</p>
                <p class="card-text">www.gamasoft.com.br</p>

                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">localizacao</h5>
                <p class="card-text"><img class="img-thumbnail" src="img/mapa.png"></p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            </div>

        </div>
    </div>
    {{--Modal Cadastro--}}
    <!-- Modal -->
    <div class="modal modal-lg" id="CadastroModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
          <div class="row">
            <div class=" mx-auto">
              <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                <div class="card-img-left d-none d-md-flex">
               
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center mb-5 fw-light fs-5">Cadastre-se</h5>
                  
                  <form method="post" action="{{route('site.cadastro')}}" >
                  @csrf
      
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" name="Nome" required autofocus>
                      <label for="floatingInputUsername">Nome</label>
                    </div>
      
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInputEmail" name="Email" placeholder="name@example.com">
                      <label for="floatingInputEmail">Endereço de e-mail</label>
                    </div>
      
                    <hr>
      
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPassword" name="Senha" placeholder="Password">
                      <label for="floatingPassword">Senha</label>
                    </div>
      
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password">
                      <label for="floatingPasswordConfirm">Confirme a Senha</label>
                    </div>
      
                    <div class="d-grid mb-2">
                      <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase " type="submit">Salvar </button>
                    </div>
      
                    <a class="d-block text-center mt-2 small" href="/.">Login</a>
      
                    <hr class="my-4">
      
                   
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
  </form>
</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
        </div>
    </div>
    </div>
{{--script de error--}}
    <script>
    function error(){
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        footer: '<a href="">Why do I have this issue?</a>'})
    }
    </script>
 </body>
 </div>
</html>