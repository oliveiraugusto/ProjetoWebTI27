<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categorias</title>


    <!--Diretorio de CSS que configuram os detalhes da página-->
    <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>

    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-grid.css"/>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-reboot.css"/>

    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js.map"></script>
    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../assets/css/estiloCategoria.css"/>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/aj ax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

</head>

<body>
    <div id="Topo">
        <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="#">Ajuda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Inicial/PagInicial.php">Sair</a>
            </li>
          </ul>
          <a href="PagInicial.html">
              <img id="admIcon" src="../../assets/imagens/logo.png">
        </a>
    </div>

    <div id="Conteudo">
        <h1>Categorias</h1>
        <a href="#" class="btn btn-primary">Nova Categoria</a>
        <table class="table table-striped table-hover">
            <tr style="text-align: center; font-weight: bold;">
                <td>ID</td>
                <td>Nome Categoria</td>
                <td> Opções </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Administração</td>
                <td>
                    <a href="#" class="btn btn-warning">Atualizar</a>
                    <a href="#" class="btn btn-danger">Deletar</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Finanças</td>
                <td>
                    <a href="#" class="btn btn-warning">Atualizar</a>
                    <a href="#" class="btn btn-danger">Deletar</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>REcursos humanos</td>
                <td>
                    <a href="#" class="btn btn-warning">Atualizar</a>
                    <a href="#" class="btn btn-danger">Deletar</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Outra Coisa</td>
                <td>
                    <a href="#" class="btn btn-warning">Atualizar</a>
                    <a href="#" onclick="return dialog('tem certeza que vai fazer essa cagada?');" class="btn btn-danger">Deletar</a>
                </td>
            </tr>
        </table>
    </div>

    <div id="Rodape">
        <div class="content">
            <footer id="myFooter">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <h5>Inicio</h5>
                            <ul>
                                <li><a href="PagInicial.html">Home</a></li>
                                <li><a href="#">Dicas</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <h5>Sobre nós</h5>
                            <ul>
                                <li><a href="#">Informações Sobre o Jogo</a></li>
                                <li><a href="#">Desenvolvedores</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <h5>Suporte</h5>
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Telefones</a></li>
                                <li><a href="#">Chat</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3 info">
                            <h5>Informações</h5>
                            <p> Lorem ipsum nam quisque aliquam sapien cras vulputate torquent metus aenean, vehicula aenean dui mi risus hac a mattis at. 
                                pulvinar torquent tempor congue lorem non sociosqu tortor, conubia at pretium tortor nisi consequat.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>