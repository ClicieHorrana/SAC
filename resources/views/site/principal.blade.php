<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - SAC</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css\estilo_principal.css')}}">
    </head>
    <body>
        <div class="topo">
            <div class="menu">
                <ul>
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="conteudo-destaque">
        
            <div class="esquerda">
                <div class="informacoes">
                    <img src="img/gama.png">
                    <p>Software para gestão empresarial ideal para sua empresa.<p>
                    <div class="chamada">
                        <span class="texto-branco">Gestão completa e descomplicada</span>
                    </div>
                    <br>
                </div>
                <div class="informacao-pagina">
                    <div style="width:30%; margin-left: auto; margin-right: auto;">
                        <form method="post" action="{{route('site.login')}}">
                            @csrf
                            <input name="Email" value="{{ old('Email')}}" type="text" placeholder="E-mail" class="borda-preta">
                            {{$errors->has('Email') ? $errors->first('Email'):'' }}
                            <input name="Senha" value="{{ old('Senha')}}" type="password" required placeholder="Senha" class="borda-preta">
                            {{$errors->has('Senha') ? $errors->first('Senha'):'' }}
                            <button type="submit" class="borda-preta">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>  
        </div>
        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="img/facebook.png">
                <img src="img/linkedin.png">
                <img src="img/youtube.png">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <br>
                <span>Rodovia, Rod. Fernão Dias, s/n - km 483,35 - Jardim Piemont Norte, Betim - MG, 32689-898</span>
                <br>
                <br>
                <span>www.gamasoft.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="img/mapa.png">
            </div>
        </div>
    </div>
       
</html>