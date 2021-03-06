<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdmQuiz - Cadastro de Jogadores</title>

    <script type="text/javascript" src="../..assets/js/jquery.min.js"></script>

    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-grid.css"/>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-reboot.css"/>

    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js.map"></script>
    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../assets/css/estiloCriarJogador.css"/>
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
                <a class="nav-link" href="../Login/LoginAdmin.php">Administrativo</a>
            </li>
          </ul>
          <a href="PagInicial.html"><img id="admIcon" src="../../assets/imagens/admIcon.png"></a>
    </div>
    <div id="Conteudo">
        <img src="../../assets/imagens/logo.png">
        <form>
            <fieldset id="jogador"><legend id="titulo">Cadastro de Jogador</legend>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputNome" class="texto">Nome: </label>
                    <input type="text" class="form-control" id="inputNome" placeholder="Nome" size="30" maxlength="40">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputCPF" class="texto">CPF: </label>
                    <input type="number" class="form-control" id="inputCPF" placeholder="CPF" size="11" maxlength="11">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputTelefone" class="texto">Telefone: </label>
                    <input type="number" class="form-control" id="inputTelefone" placeholder="Telefone" ize="11" maxlength="11">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputTelefone2" class="texto">Telefone: </label>
                    <input type="number" class="form-control" id="inputTelefone2" placeholder="Telefone (opcional)" ize="11" maxlength="11">
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="inputAluno" class="Check">Você é aluno? </label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="radioSim" name="cAluno" class="custom-control-input">
                        <label class="custom-control-label" for="radioSim">Sim</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" id="RadioNao">
                        <input type="radio" id="radioNao" name="cAluno" class="custom-control-input">
                        <label class="custom-control-label" for="radioNao">Não</label>
                    </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCursos" class="texto">Selecione seu curso: </label>
                </div>
                <div class="form-group col-md-4">
                    <select id="inputCursos" class="form-control">
                        <option selected>Escolher...</option>
                        <optgroup label="Cursos Livres">
                            <option> Depilação Facial com Linha </option>
                            <option> Drenagem Linfática Manual </option>
                        <optgroup>
                        <optgroup label="Cursos Técnicos">
                            <option selected> Administração </option>
                            <option> Enfermagem </option>
                            <option> Técnico em Informática </option>
                        </optgroup>
                        <optgroup label="Aprendizagem">
                            <option> Profissional em Comércio de Bens, Serviços e Turismo </option>
                        </optgroup>
                    </select>
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
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