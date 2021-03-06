<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>AdmQuiz - Cadastro de Administradores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>

    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-grid.css"/>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-reboot.css"/>

    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js.map"></script>
    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../assets/css/estiloAdmin.css"/>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/aj ax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


</head>
<body>
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
              <a href="PagAdmin.html"><img id="admIcon" src="../../assets/imagens/admIcon.png"></a>
        </div>
    <div id="Conteudo">
        <img src="../../assets/imagens/logo.png">
        <form>
            <fieldset id="administrador"><legend id="titulo"> Cadastro de Administradores</legend>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLogin" class="texto">Login: </label>
                    <input type="text" class="form-control" id="inputLogin" placeholder="Login" size="15" maxlength="20">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputSenha" class="texto">Senha: </label>
                    <input type="number" class="form-control" id="inputSenha" placeholder="Senha" size="15" maxlength="20">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCPF" class="texto">CPF: </label>
                    <input type="number" class="form-control" id="inputCPF" placeholder="CPF" ize="11" maxlength="11">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputTelefone" class="texto">Telefone: </label>
                    <input type="number" class="form-control" id="inputTelefone" placeholder="Telefone" ize="11" maxlength="11">
                </div>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="radioAdministrador" name="cCargo" class="custom-control-input">
                <label class="custom-control-label" for="radioAdministrador">Administrador</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="radioGerente" name="cCargo" class="custom-control-input">
                <label class="custom-control-label" for="radioGerente">Gerente</label>
            </div>
            <div id="botaoc">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
                
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
                            <p class="info"><i>AdmQuiz</i> é um projeto integrador idealizado e desenvolvido pelas turmas do 
                                <i>Técnico em Informática 27</i> & <i>Técnico em Administração 06</i> do <b><i>Senac Botucatu</i></b>. </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>