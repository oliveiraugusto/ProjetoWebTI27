<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdmQuiz - Página Administrativa</title>

    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.css"/>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.css"/>

    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js.map"></script>
    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../assets/css/estiloPagAdmin.css"/>

    
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
                <a class="nav-link" href="PagInicial.html">Sair</a>
            </li>
        </ul>
    </div>
    <a href="PagInicial.html"><img id="admIcon" src="../assets/imagens/admIcon.png"></a>
    <div id="Conteudo">
        <img src="../assets/imagens/favicon.ico">
        <h2>
            Bem-vindo a Área Administrativa</br>"Usuário"
        </h2>
            <form>
                <fieldset id="administrador"><legend id="tituloAdministrador">Administrador</legend>
                    <a href="CadAdmin.html"><button type="button" class="btn btn-primary">Cadastrar</button></a>
                    <a href="#"><button type="button" class="btn btn-primary">Alterar</button></a>
                    <a href="#"><button type="button" class="btn btn-primary">Deletar</button></a>
                    <a href="#"><button type="button" class="btn btn-primary">Listar</button></a>
                </fieldset>
            </form>
            <form>
                <fieldset id="categoria"><legend id="tituloCategoria">Categorias</legend>
                    <a href="CadCategoria.html"><button type="button" class="btn btn-primary">Cadastrar</button></a>
                    <a href="#"><button type="button" class="btn btn-primary">Alterar</button></a>
                    <a href="#"><button type="button" class="btn btn-primary">Deletar</button></a>
                    <a href="#"><button type="button" class="btn btn-primary">Listar</button></a>
                </fieldset>
            </form>
            <form>
                <fieldset id="jogador"><legend id="tituloJogador">Jogador</legend>
                    <a href="CadJogador.html"><button type="button" class="btn btn-primary">Cadastrar</button></a>
                    <a href="#"><button type="button" class="btn btn-primary">Alterar</button></a>
                    <a href="#"><button type="button" class="btn btn-primary">Deletar</button></a>
                    <a href="#"><button type="button" class="btn btn-primary">Listar</button></a>
                </fieldset>
            </form>
            <form>
                <fieldset id="perguntas"><legend id="tituloPerguntas">Perguntas</legend>
                    <a href="CadPerguntas.html"><button type="button" class="btn btn-primary">Cadastrar</button></a>
                    <a href="#"><button type="button" class="btn btn-primary">Alterar</button></a>
                    <a href="#"><button type="button" class="btn btn-primary">Deletar</button></a>
                    <a href="#"><button type="button" class="btn btn-primary">Listar</button></a>
                </fieldset>
            </form>
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