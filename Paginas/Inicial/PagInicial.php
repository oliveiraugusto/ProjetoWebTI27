<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>AdmQuiz - Página Inicial</title>
    <meta name="viewport" content="width=device-width, initial scale=1.0"/> 
    <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
  
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-grid.css"/>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-reboot.css"/>

    <script type="text/javascript" src="../../assets/js/PagInicial.js"></script>
    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js.map"></script>
    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../assets/css/estiloPagInicial.css"/>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/aj ax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
</head>
<body>
    <div id="Topo">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="LoginAdmin.html">Administrativo</a>
          </li>
          <li>
            <a class="nav-link" href="#">Ajuda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="LoginJogador.html">Entrar</a>
          </li>
          </ul>
          <a href="PagInicial.html"><img id="admIcon" src="../../assets/imagens/admIcon.png"></a>
    </div>  
    <div id="Conteudo">
        <img src="../../assets/imagens/logo.png"/>
    <div id="divbotao">
    <input type="image" src="../../assets/imagens/botao_jogar.png" alt="Jogar" id="botao_jogar" onclick="VerificarCPF()">
    <a class="btn btn-primary" id="botao_cadastrar" href="CadJogador.html">Cadastrar-se</a>
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
                            <h5 id="info">Informações</h5>
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