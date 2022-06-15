<!doctype html >
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--Gera cabeçalho com imports e metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="Ie3g9pYLR0tcUIY2dXLNpjyyrlZaXeG4r48MPYGB" />
    <link rel="icon" type="image/png" sizes="24x24" href="/img/favicon.png">
    <title>Gamasoft</title>
    
    <!-- Bootstrap Core CSS -->
    <!--<link href="https://gamasoft.distribuidoragama.com.br/bsNew/bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="https://gamasoft.distribuidoragama.com.br/libs/bootstrap.min.css" rel="stylesheet">
    
    <!-- Menu CSS -->
    <link href="https://gamasoft.distribuidoragama.com.br/libs/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">

    <!-- animation CSS -->
    <!--<link href="https://gamasoft.distribuidoragama.com.br/libs/animate.css" rel="stylesheet">-->
    <link href="https://gamasoft.distribuidoragama.com.br/libsNew/animate-3.7.2/animate.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="https://gamasoft.distribuidoragama.com.br/css/style.css" rel="stylesheet">   

    <!-- Chart CSS -->
    <link src="https://gamasoft.distribuidoragama.com.br/plugins/bower_components/Chart.js/Chart.min.css">

     <!-- Loader CSS -->
     <link href="https://gamasoft.distribuidoragama.com.br/css/loader.css" rel="stylesheet">   

    <!-- Custom Table -->
    <!--<link href="https://gamasoft.distribuidoragama.com.br/css/tablesaw.css" rel="stylesheet">   -->
    <!--<link href="https://gamasoft.distribuidoragama.com.br/libsNew/DataTables/datatables.css" rel="stylesheet">-->

    <!-- color CSS -->
    <link href="https://gamasoft.distribuidoragama.com.br/css/gamasoft.css" id="theme" rel="stylesheet">
    
    <!-- Jquery min -->
    <script src="https://gamasoft.distribuidoragama.com.br/libsNew/DataTables/jQuery-1.12.4/jquery-1.12.4.min.js"></script>
        
    <!--<link rel="stylesheet" href="https://gamasoft.distribuidoragama.com.br/css/jquery-ui.css">-->
    <!--<link rel="stylesheet" href="https://gamasoft.distribuidoragama.com.br/libsNew/jquery-ui-1.12.1.custom/base/css/jquery-ui.min.css">-->
    
    <!-- Data tables CSS -->
    <!--<link href="https://gamasoft.distribuidoragama.com.br/css/dataTables.bootstrap.min.css" rel="stylesheet">-->
    <link href="https://gamasoft.distribuidoragama.com.br/libsNew/DataTables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://gamasoft.distribuidoragama.com.br/libsNew/DataTables/FixedColumns-3.3.0/css/fixedColumns.bootstrap4.min.css" rel="stylesheet">
    <link href="https://gamasoft.distribuidoragama.com.br/libsNew/DataTables/Select-1.3.1/css/select.bootstrap4.min.css" rel="stylesheet">
    <link href="https://gamasoft.distribuidoragama.com.br/libsNew/DataTables/KeyTable-2.5.1/css/keyTable.bootstrap4.min.css" rel="stylesheet">
    <link href="https://gamasoft.distribuidoragama.com.br/libsNew/DataTables/Scroller-2.0.1/css/scroller.bootstrap4.min.css" rel="stylesheet">
    <link href="https://gamasoft.distribuidoragama.com.br/libsNew/DataTables/Buttons-1.6.1/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="https://gamasoft.distribuidoragama.com.br/libsNew/DataTables/Editor/editor.dataTables.min.css" rel="stylesheet">
    <link href="https://gamasoft.distribuidoragama.com.br/libsNew/bootstrap-select-1.13.9/dist/css/bootstrap-select.css" rel="stylesheet">  
    <link href="https://gamasoft.distribuidoragama.com.br/libsNew/DataTables/colResize/css/jquery.dataTables.colResize.css" rel="stylesheet">
    
    <!-- Jquery Confirm -->
    <link href="https://gamasoft.distribuidoragama.com.br/libsNew/JqueryConfirm/jquery-confirm.min.css" rel="stylesheet">
    
    <!-- Loader CSS -->
    <link href="https://gamasoft.distribuidoragama.com.br/css/loader.css" id="theme" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">

    <!--Permite inserir aqui o css de cada página-->
    
    </head>
        <body class="fix-sidebar">
            <!-- Importação do jquery -->        
                        <!--Navegação da aplicação -->
                <style>
        .navbar-header {
            background: #0076be;
            height: 60px;
        }

        .table-Contatos {
            padding: 2px 8px;
            border-collapse: collapse;
            color: #4b4747;
            font-size: 10pt;
            height: 25px;
            padding-right: -15px;
            font-weight: normal !important;
        }

        .mb-auto-contato {
            margin-top: 25px;
        }

        .modalContatos {
            width: 70% !important;
        }

        .fonteGreen{
            color: green !important;
            font-weight: 500 !important;
        }
        .fonteRed{
            color: red !important;
            font-weight: 500 !important;
        }
    </style>

    <!-- Top Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
                    <input type="hidden" id="usuario_logado_id" value="92290" class="form-control">
                    <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
        <!--<div class="top-left-part"><a class="logo" href="/gamasoft/public/home"><b>-->
        <div class="top-left-part"><a class="logo" href="/home"><b>
            <img src="https://gamasoft.distribuidoragama.com.br/img/logo-horizontal.png" style="width: 50%;" alt="home" /></b><span class="hidden-xs">GamaSoft</span></a></div>

        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light">
            <h3 style='color:#FFFFFF'><i class="icon-arrow-left-circle ti-menu"> </i></h3>
            </a></li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown"  title='Notificações'>
            <span class='badge badge-pill badge-danger' style='margin-top:-13px'>1</span>
            <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
            <i class="fas fa-headset fa-lg"></i>
        <div class="notify">
            <span class="heartbit"></span>
            <span class="point"></span>
        </div></a>
                <ul class="dropdown-menu mailbox animated bounceInDown" style="overflow-y: auto;max-height: 450px;">
                    <li>
                        <div class="message-center" >                                      
                            <a href="/sac/36015/11637/abrechamado" style="color:#black;">
                                <input type="hidden" id='drop_list_id' value="12457">
                                <div class="mail-contnet">
                                    <b >Chamado  nº 202236015 foi encaminhado para seu setor</b>
                                    <span class="time" style="text-align: center;">13/06/2022 09:06</span>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown" title='Notificações'>
        <span class='badge badge-pill badge-danger' style='margin-top:-13px'>0</span>
        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-lg"></i>
        </a>
        <ul class="dropdown-menu mailbox animated bounceInDown" style="overflow-y: auto;max-height: 400px;"><li>
        <div style='width: 100%;text-align: center;'><h5>Notificações</h5></div>
        <div class="message-center">
            <input type="hidden" id="usuario_logado_id" value="92290" class="form-control">
        </div>
        </li>
        </ul>
            </li>
            <li class="dropdown">
                <a href="/agendamento" title="Sala de Reunião">
                    <i class="fa fa-calendar fa-lg" aria-hidden="true"></i>
            </a>
            </li>

            <li class="dropdown">
                <a title="Contatos" class="openContatos">
                    <i class="fa fa-address-book fa-lg" aria-hidden="true"></i>
                </a>
            </li>
          
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-haspopup="true" v-pre><b class="hidden-xs"> Clicie Horrana Jeronimo Albino <span class="caret"></span></b>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li>
                        <a href="/meu-perfil"><i class="ti-user"></i> Meu Perfil</a>
                    </li>
                    <li>
                        <a href="https://gamasoft.distribuidoragama.com.br/logout" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i class="ti-power-off"></i>Logout</a>

                        <form id="logout-form" action="https://gamasoft.distribuidoragama.com.br/logout" method="POST" style="display: none;">
                        <input type="hidden" name="_token" value="Ie3g9pYLR0tcUIY2dXLNpjyyrlZaXeG4r48MPYGB">
                        </form>
                    </li>
                </ul>
            </li>
            
        </ul>
    </div>
</nav>

    <div class="white-box">
            <div class="row" style="margin: 0px 0px 10px !important;border-bottom:1px dashed #ccc; padding-bottom:10px;">
            </div>

            <div class="col-md-3">
                <label>Data Inicial</label>
                                            <input type="date" class="form-control" value="2022-06-01" id="inicio_periodo">
            </div>

            <div class="col-md-3">
                <label>Data Final</label>
                                            <input type="date" class="form-control" value="2022-06-30" id="fim_periodo">
            </div>

            <div class="col-md-1">
                <label>Cliente</label>
                <input type="text" class="form-control" value="" id="cliente_filtro">
            </div>

            <div class="col-md-1">
                <label>Produto</label>
                <input type="text" class="form-control" value="" id="produto_filtro">
            </div>

            <div class="col-md-2">
                <label>Chamado</label>
                <input type="text" class="form-control" value="" id="chamado_filtro">
            </div>

            <div class="col-md-2">
                <label>Nota</label>
                <input type="text" class="form-control" value="" id="nota_filtro">
            </div>

            <div class="col-md-2 col-xs-6">
                <label>Aberto por</label>         
                <select class="form-control" id="usuario">
                    <option value="">Selecione</option>
                    <option value="92396">Adrieli Aparecida Chaves da Silva</option>
                    <option value="92387">Akilla Silva Sousa Guimaraes</option>
                    <option value="92271">Ataiana de Araujo Rosa</option>
                    <option value="92290">Clicie Horrana Jeronimo Albino</option>
                    <option value="92340">Daiane Pereira De Oliveira Guimaraes</option>
                    <option value="86183">Erica Cristina da Silva</option>
                    <option value="19">Henrique Deivson Soares Tavares</option>
                    <option value="92287">Jessica Maria Cattone</option>
                    <option value="853">Joao Paulo de Assis Santos</option>
                    <option value="44">Juliane Amato Silva</option>
                    <option value="44164">Naiara Rios de Oliveira Araujo</option>
                    <option value="222">Rosimere Aparecida Barbosa</option>
                    <option value="233">Shauany Evangelista de Oliveira</option>
                    <option value="92367">Yara Caroline Machado Santana </option>
                    <option value="92412">Rosileide da Silva Cunha</option>
                </select>
            </div>

            <div class="col-md-2">
                <label>Status</label>                                                                                                          <select class="form-control" id="status_filtro">
                    <option value="">Selecione</option>
                    <option value="6">Aberto</option>
                    <option value="1">Aguardando</option>
                    <option selected="" value="2">Pendente</option>
                    <option value="3">Retornado</option>
                    <option value="4">Solucionado</option>
                    <option value="5">Cancelados</option>
                </select>
            </div>

            <div class="col-md-3 col-xs-6">
                <label>Assunto</label>
                <select class="form-control" id="assunto_filtro">
                    <option value="">Selecione</option>
                    <option value="241">DEVOLUÇÃO INTEGRAL</option>
                    <option value="33">ATRASO DE ENTREGA</option>
                    <option value="37">AVARIA NO TRANSPORTE</option>
                    <option value="76">DEVOLUÇÃO DE MERCADORIA</option>
                    <option value="87">EXTRAVIO DE VOLUME</option>
                    <option value="91">ENVIO DE BOLETO</option>
                    <option value="113">FALTA DE VOLUME NA ENTREGA</option>
                    <option value="114">FALTOU MERCADORIA NO PEDIDO</option>
                    <option value="131">PRECO ERRADO</option>
                    <option value="140">PRORROGAR BOLETO ATRASO ENTREG</option>
                    <option value="149">SOBRA DE MERCADORIA</option>
                    <option value="187">REENTREGA</option>
                    <option value="191">TROCA DE VOLUMES NA ENTREGA</option>
                    <option value="242">DEVOLUÇÃO PARCIAL</option>
            </select>
            </div>
            <div>
                <button id="filtro_chamado" style="background-color:#0076be;margin-top:2.5%;" class="btn btn-success m-t-2" onclick="teste()">Filtrar</button>
                <button id="limpa_filtro_chamado" style="margin-top:2.5%;" class="btn btn-success m-t-2">Todos</button>
                <button onclick="removeDados();" style="margin-top:2.5%;" class="btn btn-danger m-t-2">Limpa filtro</button>
            </div>

            <div class="row" style="margin: 0px 0px 10px !important;border-bottom:1px dashed #ccc; padding-bottom:10px;">
            </div>
            <div>
                <div class="flex-wrapper"></div>
                </div>

                <div class="row" style="margin: 0px 0px 10px !important;border-bottom:1px dashed #ccc; padding-bottom:10px;">
                </div>

                <div class="row" id="todosChamados" style="margin-top:4%;">
                    <div class="col-lg-12">
                        <div class="card border">
                                
                        </div>
                    </div>
                </div>

            </div>
    </body>
</html>