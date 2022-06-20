<h1>Olá Mundo</h1>
<ul>
    @foreach ($chamado as $chamado)
        <li>
            {{$chamado->email}}
            {{$chamado->setor}}
            {{$chamado->descricao}}
        </li>    
    @endforeach
</ul>  
