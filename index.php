<!doctype html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="res/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="res/css/style.css">

    <link rel="shortcut icon" href="res/img/favicon.ico" type="image/x-icon"/>

    <title>Mostratec Forms</title>
  </head>
  <body>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 text-center">
          <img src="res/img/logo-junior.jpg" class="img-fluid">
          <br>
          <br>
          <br>
          <strong>
            REALIZA&Ccedil;&Atilde;O
            <br>
            FUNDA&Ccedil;&Atilde;O ESCOLA T&Eacute;CNICA LIBERATO SALZANO VIEIRA DA CUNHA
          </strong>
          <br>
          <br>
          <form data-js='submit' action="submit.php" method="POST">
            <div  class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tipo" id="afiliacao" value="afiliacao" data-js='tipo' placeholder="AfiliaÃ§Ã£o">
              <label class="form-check-label" for="afiliacao">Afilia&ccedil;&atilde;o</label>
            </div>
            <div  class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tipo" id="reafiliacao" value="reafiliacao"  data-js='tipo' placeholder="ReafiliaÃ§Ã£o">
              <label class="form-check-label" for="reafiliacao">Reafilia&ccedil;&atilde;o</label>
            </div>
            <h4>PREENCHA COM OS DADOS ATUAIS DA SUA FEIRA</h4>
            <br>
            <br>
            <div class="text-left">
              <div class="form-group">
                <label for="nomeInstituicao"><strong>1.</strong> Nome da instituição: </label>
                <input data-js="input" type="text" name="nomeInstituicao" class="form-control" id="Nome da Instituicao">
              </div>
              <div class="form-group">
                <label for="nomeResponsavel">Nome do respons&aacute;vel pela institui&ccedil;&atilde;o organizadora da feira: </label>
                <input data-js="input" type="text" class="form-control" name="nomeResposanvel" id="Nome do Responsavel">
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="telefoneResponsavel">Celular (insira somente números): </label>
                  <input data-js="input" type="number" name="telefoneResponsavel" id="Telefone do Responsavel" class="form-control">
                </div>
                <div class="col">
                  <label for="emailResponsavel">Email: </label>
                  <input data-js="input" type="email" name="emailResponsavel" id="Email do Responsavel" class="form-control">
                </div>
              </div>
              <br>
              <div class="form-group">
                <label for="nomeFeira"><strong>2.</strong>  Informe o nome da sua feira. Caso o nome não se encontre no campo abaixo entrar em contato pelo email <b>mostratec.junior@liberato.com.br</b>:  </label>
                <select class="form-control" name="nomeFeira" data-js="input">
                  <?php
                    require 'vendor/autoload.php';

                    use Medoo\Medoo;

                    $database = new Medoo([
                    	'database_type' => 'mysql',
                    	'database_name' => 'mostratec_junior_afiliacao',
                    	'server' => '127.0.0.1',
                    	'username' => 'root',
                    	'password' => '',
                    	'charset' => 'utf8'
                    ]);

                    $results = $database->select( 'feiras', array( 'cod_feiras', 'nome'));

                    foreach ( $results as $key => $value) {
                      echo "<option value='" . $value['nome'] . "'>" . $value['nome'] . "</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="ruaFeira">Rua: </label>
                  <input data-js="input" type="text" name="ruaFeira" id="Rua da Feira" class="form-control">
                </div>
                <div class="col">
                  <label for="numeroFeira">N&ordm;: </label>
                  <input data-js="input" type="number" name="numeroFeira" id="Numero da Feira" class="form-control">
                </div>
                <div class="col">
                  <label for="cepFeira">CEP: </label>
                  <input data-js="input" type="number" name="cepFeira" id="CEP da Feira" class="form-control">
                </div>
              </div>
              <br>
              <div class="form-row">
                <div class="col">
                  <label for="cidadeFeira">Cidade: </label>
                  <input data-js="input" type="text" name="cidadeFeira" id="Cidade da Feira" class="form-control">
                </div>
                <div class="col">
                  <label for="ufFEira">UF: </label>
                  <input type="text" name="ufFEira" id="UF da Feira" maxlength="2" class="form-control" data-js="input">
                </div>
                <div class="col">
                  <label for="paisFeira">Pa&iacute;s: </label>
                  <input type="text" name="paisFeira" id="Pais da Feira" class="form-control" data-js="input">
                </div>
              </div>
              <br>
              <div class="form-group">
                <label for="socialFeira">Website / Facebook / Blog :</label>
                <input type="text" name="socialFeira" id="Site de Feira" class="form-control" data-js="input">
              </div>
              <div class="form-group">
                <label for="nomeCordenador"><strong>3.</strong> Nome do cordenador da feira: </label>
                <input type="text" name="nomeCordenador" id="Nome de Cordenador" class="form-control" data-js="input">
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="telefoneCordenador">Celular (insira somente números): </label>
                  <input type="number" name="telefoneCordenador" id="Telefone de Cordenador" class="form-control" data-js="input">
                </div>
                <div class="col">
                  <label for="emailCordenador">Email: </label>
                  <input type="email" name="emailCordenador" id="Email do Cordenador" class="form-control" data-js="input">
                </div>
              </div>
              <br>
              <div class="form-group">
                <label for="nomePessoa"><strong>4.</strong> Nome de uma pessoa para contato: </label>
                <input type="text" name="nomePessoa" id="Nome da Pessoa" class="form-control" data-js="input">
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="telefonePessoa">Telefone (insira somente números): </label>
                  <input type="number" name="telefonePessoa" id="Telefone da Pessoa" class="form-control" data-js="input">
                </div>
                <div class="col">
                  <label for="emailPessoa">Email: </label>
                  <input type="email" name="emailPessoa" id="Email da Pessoa" class="form-control" data-js="input">
                </div>
              </div>
              <br>
              <div class="form-checkinline">
                <div class="form-check form-check-inline">
                  <label><strong>5.</strong> Peridiocidade da feira: </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="periodoFeira" id="anual" value="anual" data-js="periodo">
                  <label class="form-check-label" for="anual">Anual</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="periodoFeira" id="outroPeriodo" value="outro" data-js="periodo">
                  <label class="form-check-label" for="outroPeriodo">Outro per&iacute;odo? </label>
                </div>
                <div class="form-group">
                    <input type="text" name="outroPeriodoQual" id="Qual outro periodo" class="form-control">
                </div>
              </div>
              <br>
              <div class="form-group">
                <label for="dataRecenteFeira"><strong>6.</strong> Data de realização da feira de 2019: </label>
                <input type="date" name="dataRecenteFeira" id="Data de Realizacao Mais Recente Feira" class="form-control"data-js="input">
              </div>
              <div class="form-group">
                <label for="dataProximaFeira">Data de realização da feira de 2020:</label>
                <input type="date" name="dataProximaFeira" id="Data da Proxima Feira" class="form-control" data-js="input">
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" name="confirmaData" id="ConfirmaÃ§Ã£o de Data Sim" value="S" class="form-check-input" data-js="confirmacao">
                <label class="form-check-label" for="ConfirmaÃ§Ã£o de Data Sim">Confirmado</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" name="confirmaData" id="ConfirmaÃ§Ã£o de Data Nao" value="N" class="form-check-input" data-js="confirmacao">
                <label class="form-check-label" for="ConfirmaÃ§Ã£o de Data Nao">Previs&atilde;o, pois a data n&atilde;o est&aacute; definida</label>
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="numeroEdicao"><strong>7.</strong> N&uacute;mero de edi&ccedil;&atilde;o da feira: </label>
                <input type="number" name="numeroEdicao" id="Numero de Edicao" class="form-control" data-js="input">
              </div>
              <br>
              <div>
                <span><strong>8.</strong> Marque quais s&atilde;o as areas de pesquisa da sua feira</span>
                <br>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao1" value="artes" id="artes" data-js="check">
                  <label class="form-check-label" for="artes">
                    Artes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao2" value="biologia" id="biologia" data-js="check">
                  <label class="form-check-label" for="biologia">
                    Biologia
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao3" value="educaÃ§Ã£o e pedagogia" id="educacao-e-pedagogia" data-js="check">
                  <label class="form-check-label" for="educacao-e-pedagogia">
                    Educa&ccedil;&atilde;o e pedagogia
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao4" value="eletrÃ´nica, informatica e robotica" id="eletrÃ´nica-informatica-e-robotica" data-js="check">
                  <label class="form-check-label" for="eletrÃ´nica-informatica-e-robotica">
                    Eletr&ocirc;nica, inform&aacute;tica e rob&oacute;tica
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao5" value="engenharia" id="engenharia" data-js="check">
                  <label class="form-check-label" for="engenharia">
                    Engenharia
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao6" value="filosofia" id="filosofia" data-js="check">
                  <label class="form-check-label" for="filosofia">
                    Filosofia
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao7" value="fisica" id="fisica" data-js="check">
                  <label class="form-check-label" for="fisica">
                    F&iacute;sica
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao8" value="geografia" id="geografia" data-js="check">
                  <label class="form-check-label" for="geografia">
                    Geografia
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao9" value="historia" id="historia" data-js="check">
                  <label class="form-check-label" for="historia">
                    Hist&oacute;ria
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao10" value="InclusÃ£o, acessibilidade e tecnologia assistiva" id="inclusÃ£o-acessibilidade-e-tecnologia-assistiva" data-js="check">
                  <label class="form-check-label" for="inclusÃ£o-acessibilidade-e-tecnologia-assistiva">
                    Inclus&atilde;o, acessibilidade e tecnologia assistiva
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao11" value="quimica" id="quimica" data-js="check">
                  <label class="form-check-label" for="quimica">
                    Qu&iacute;mica
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao12" value="LÃ­ngua portuguesa, lÃ­ngua estrangeira e literatura" id="lingua-portuguesa-lingua-estrangeira-e-literatura" data-js="check">
                  <label class="form-check-label" for="lingua-portuguesa-lingua-estrangeira-e-literatura">
                    L&iacute;ngua portuguesa, l&iacute;ngua estrangeira e literatura
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao13" value="matematica" id="matematica" data-js="check">
                  <label class="form-check-label" for="matematica">
                    Matem&aacute;tica
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao14" value="meio ambiente" id="meio-ambiente" data-js="check">
                  <label class="form-check-label" for="meio-ambiente">
                    Meio ambiente
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao15" value="saude" id="saude" data-js="check">
                  <label class="form-check-label" for="saude">
                    Sa&uacute;de
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="opcao16" value="sociologia" id="sociologia" data-js="check">
                  <label class="form-check-label" for="sociologia">
                    Sociologia
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="opcao17" value="outra" id="outra" data-js="check">
                  <label class="form-check-label" for="outra">
                    Outra
                  </label>
                </div>
                <div>
                  <input type="text" name="informeQual" class="form-control" id="Outra Area de Pesquisa">
                </div>
              </div>
              <br><br>
              <div>
                <label><strong>9.</strong> Assinale o tipo de feira</label>
                <div class="form-check">
                  <input type="radio" name="tipoFeira" class="form-check-input" id="escolar" data-js="radio" value="escolar">
                  <label class="form-check-label" for="escolar">Escolar (participam projetos somente de uma escola)</label>
                </div>
                <div class="form-check">
                  <input type="radio" name="tipoFeira" class="form-check-input" id="multiescolar" data-js="radio" value="multiescolar">
                  <label class="form-check-label" for="multiescolar">Multiescolar (participam projetos de diferentes escolas, podendo ser de uma mesma rede ou redes diferentes, inclusive de cidades diferentes) </label>
                </div>
                <div class="form-check">
                  <input type="radio" name="tipoFeira" class="form-check-input" id="municipal" data-js="radio" value="municipal">
                  <label class="form-check-label" for="municipal">Municipal (participam exclusivamente projetos da rede municipal de educa&ccedil;&atilde;o)</label>
                </div>
                <div class="form-check">
                  <input type="radio" name="tipoFeira" class="form-check-input" id="estadual" data-js="radio" value="estadual">
                  <label class="form-check-label" for="estadual">Estadual</label>
                </div>
                <div class="form-check">
                  <input type="radio" name="tipoFeira" class="form-check-input" id="regional" data-js="radio" value="regional">
                  <label class="form-check-label" for="regional">Regional</label>
                </div>
                <div class="form-check">
                  <input type="radio" name="tipoFeira" class="form-check-input" id="nacional" data-js="radio" value="nacional">
                  <label class="form-check-label" for="nacional">Nacional</label>
                </div>
                <div class="form-check">
                  <input type="radio" name="tipoFeira" class="form-check-input" id="internacional" data-js="radio" value="internacional">
                  <label class="form-check-label" for="internacional">Internacional</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="tipoFeira" id="outroQual" value="outro" class="form-check-input" data-js='input'>
                    <label for="outroQual">Outro.Qual? </label>
                </div>
                <div class="form-group">
                  <input type="text" name="outroTipo" id="Outro Tipo de Feira" class="form-control">
                </div>
              </div><br>
              <div class="form-group">
                <label for="observacoesAbrangenciaFeira"><strong>10.</strong> Observa&ccedil;&otilde;es sobre abrang&ecirc;cia da feira (caso necess&aacute;rio, comente sobre a abrang&ecirc;ncia da feira, acrescentando aspectos sobre articula&ccedil;&otilde;es com diferentes esferas administrativas - exemplo  caso a feira receba projetos da rede municipal e estadual, como s&atilde;o definidos os crit&eacute;rios de participa&ccedil;&atilde;o de cada uma dessas redes): </label>
                <textarea class="form-control" name="observacoesAbrangenciaFeira" id="Abrangencia da Feira" rows="3" data-js="input"></textarea>
              </div>
              <br>
              <div>
                <label><strong>11.</strong> Existe um comite de revis&atilde;o ci&ecirc;ntifica na feira (informar a existencia de um grupo dentro da organiza&ccedil;&atilde;o que se dedique &agrave; observa&ccedil;&atilde;o da regulamento e das regras de exposi&ccedil;&atilde;o, bem como da verifica&ccedil;&atilde;o da documenta&ccedil;&atilde;o dos projetos, identificando aspectos de &eacute;tica e seguran&ccedil;a observadas ao longo do processo pelos participantes. Caso exista esse grupo, descrever sua composi&ccedil;&atilde;o e forma de atua&ccedil;&atilde;o): </label>
                <div class="form-check form-check-inline">
                  <input type="radio" name="existeComite" class="form-check-input" id="Existe Comite" value="s" data-js='existe'>
                  <label for="Existe Comite" class="form-check-label">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="existeComite" class="form-check-input" id="Nao Existe Comite" value="n" data-js='existe'>
                  <label for="Nao Existe Comite" class="form-check-label">N&atilde;o</label>
                </div>
              </div>
              <br>
              <div class="form-group">
                <label for="descrevaProcesso"><strong>12.</strong> Descreva o processo para a sele&ccedil;&atilde;o dos projetos inscritos em sua feira (informar se a feira recebe projetos participantes de outras feiras ou afilia&ccedil;&otilde;es, e descrever como isso ocorre. Exemplo: muitos munic&iacute;pios possuem feiras escolares que classificam projetos para a feira municipal, caso seja esse o caso, informe quantas feiras escolares classificat&oacute;rias s&atilde;o realizadas e qual o n&uacute;mero total de projetos, alunos e escolas envolvidos): </label>
                <textarea class="form-control" name="descrevaProcesso" id="Descreva Processo" rows="3" data-js="input"></textarea>
              </div>
              <br>
              <div>
                <label><strong>13.</strong> O n&iacute;vel de ensino dos estudantes para a participa&ccedil;&atilde;o na Mostratec J&uacute;nior deve ser educa&ccedil;&atilde;o infantil ou ensino fundamental. Em sua feira, participam projetos de alunos de quais n&iacute;veis de ensino? </label>
                <div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="nivelEnsinoAlunosEducacaoInfantil" id="educacaoInfantil" data-js="input" value="Educacao infantil" placeholder="EducaÃ§Ã£o Infantil">
                    <label class="form-check-label" for="educacaoInfantil">
                      Educa&ccedil;&atilde;o infantil
                    </label>
                  </div>
                  <div class="form-row">
                    <div class="col">
                      <label class="form-check-label" for="numeroProjetosFundamental">
                        N&uacute;mero de projetos previstos para a pr&oacute;xima edi&ccedil;&atilde;o
                      </label>
                      <input class="form-control" type="number" name="numeroProjetosInfantil" id="Numero de Projetos Infantil">
                    </div>
                    <div class="col">
                      <label class="form-check-label" for="numeroEscolasFundamental">
                        N&uacute;mero de escolas
                      </label>
                      <input type="number" name="numeroEscolasInfantil" id="Numero de Escolas Infantil" class="form-control">
                    </div>
                  </div>
                </div>
                <br>
                <div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="nivelEnsinoAlunosEducacaoFudamental" id="educacaoFundamental" data-js="input" value="Educacao fundamental">
                    <label class="form-check-label" for="educacaoFundamental">
                      Educa&ccedil;&atilde;o fundamental
                    </label>
                  </div>
                  <div class="form-row">
                    <div class="col">
                      <label class="form-check-label" for="numeroProjetosFundamental">
                        N&uacute;mero de projetos previstos para a pr&oacute;xima edi&ccedil;&atilde;o
                      </label>
                      <input class="form-control" type="number" name="numeroProjetosFundamental" id="Numero de Projetos Fundamental">
                    </div>
                    <div class="col">
                      <label class="form-check-label" for="numeroEscolasFundamental">
                        N&uacute;mero de escolas
                      </label>
                      <input type="number" name="numeroEscolasFundamental" id="Numero de Escolas Fundamental" class="form-control">
                    </div>
                  </div>
                </div>
                <br>
                <div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="nivelEnsinoAlunosEducacaoMedioProfissional" id="educacaoMedioProfissional" data-js="input" value="Educacao médio e profissional" placeholder="Ensino mÃ©dio">
                    <label class="form-check-label" for="educacaoMedioProfissional">
                      Ensino m&eacute;dio e ensino profissional t&eacute;cnico de n&iacute;vel m&eacute;dio
                    </label>
                  </div>
                  <div class="form-row">
                    <div class="col">
                      <label class="form-check-label" for="numeroProjetosMedioProfissional">
                        N&uacute;mero de projetos previstos para a pr&oacute;xima edi&ccedil;&atilde;o
                      </label>
                      <input class="form-control" type="number" name="numeroProjetosMedioProfissional" id="numeroProjetosMedioProfissional">
                    </div>
                    <div class="col">
                      <label class="form-check-label" for="numeroEscolasMedioProfissional">
                        N&uacute;mero de escolas
                      </label>
                      <input class="form-control" type="number" name="numeroEscolasMedioProfissional" id="numeroEscolasMedioProfissional">
                    </div>
                  </div>
                  <br>
                <div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="nivelEnsinoAlunosEducacaoSuperior" id="educacaoSuperior" data-js="input" value="educacao superior" placeholder="EducaÃ§Ã£o infantil">
                    <label class="form-check-label" for="educacaoSuperior">
                      Ensino superior
                    </label>
                  </div>
                  <div class="form-row">
                    <div class="col">
                      <label class="form-check-label" for="numeroProjetosSuperior">
                        N&uacute;mero de projetos previstos para a pr&oacute;xima edi&ccedil;&atilde;o
                      </label>
                      <input class="form-control" type="number" name="numeroProjetosSuperior" id="Numero Projetos Superior">
                    </div>
                    <div class="col">
                      <label class="form-check-label" for="numeroEscolasSuperior">
                        N&uacute;mero de escolas
                      </label>
                      <input type="number" name="numeroEscolasSuperior" id="Numero Escolas Superior" class="form-control">
                    </div>
                  </div>
                </div>
                </div>
                <br>
                 <div>
                    <label for="numeroTotalProjetosProximaEdicao" >N&uacute;mero total de projetos previstos para a pr&oacute;xima edi&ccedil;&atilde;o da feira: </label>
                    <input type="number" name="numeroTotalProjetosProximaEdicao" id="Numero Total Projetos Proxima Edicao" class="form-control" data-js="input">
                  </div>
                  <br>
                  <div>
                    <label>N&uacute;mero total de escolas previstos para a pr&oacute;xima edi&ccedil;&atilde;o da feira: </label>
                    <input type="number" name="numeroTotalEscolasProximaEdicao" id="Numero Total Escolas Proxima Edicao" class="form-control" data-js="input">
                  </div>
              </div>
              <br>
              <div>
                <label><strong>14.</strong> Informe a faixa et&aacute;ria dos alunos que participam da feira de acordo com os n&iacute;veis de ensino: </label>
                <div class="form-group">
                  <label for="ensinoInfantil">Ensino infantil</label>
                  <input type="text" class="form-control" name="faixaEtariaInfantil" id="Ensino Infantil" data-js="input">
                </div>
                <div class="form-group">
                  <label for="ensinoFundamental">Ensino fundamental</label>
                  <input type="text" name="faixaEtariaFundamental" id="Ensino Fundamental" class="form-control" data-js="input">
                </div>
                <div class="form-group">
                  <label for="ensinoMedio">Ensino m&eacute;dio</label>
                  <input type="text" name="faixaEtariaMedio" id="Ensino Medio" class="form-control" data-js="input">
                </div>
                <div class="form-group">
                  <label for="ensinoSuperior">Ensino superior</label>
                  <input type="text" name="faixaEtariaSuperior" id="Ensino Superior" class="form-control" data-js="input">
                </div>
              </div>
              <br>
              <div class="form-group">
                <label for="descrevaProcessoAvaliacao"><strong>15.</strong> Descreva a processo de avalia&ccedil;&atilde;o dos projetos de sua feira ( crit&eacute;rios, forma&ccedil;&atilde;o dos avaliadores, etc): </label>
                <textarea class="form-control" rows="3" name="descrevaProcessoAvaliacao" id="Descreva Processo Avaliacao" data-js="input"></textarea>
              </div>
            </div>
              <br><br>
            <div class="text-left">
              <div class="text-center">
                <h4>PREENCHA COM OS DADOS DA &Uacute;LTIMA FEIRA REALIZADA</h4>
                <label>Caso sua feira n&atilde;o tenha projetos conforme especificado nos pr&oacute;ximos dois itens preencha '0'(zero)</label>
              </div><br>
              <div class="form-group">
                <label for="dataUltimaFeira">Informe a data da feira de 2018 ou da última que foi realizada: </label>
                <input type="date" name="dataUltimaFeira" id="Data Ultima Feira" class="form-control" data-js="input">
              </div><br>
              <div class="text-center">
                <p><strong>PREENCHA SOMENTE COM OS DADOS DOS PROJETOS DE ENSINO FUNDAMENTAL E EDUCA&Ccedil;&Atilde;O INFANTIL</strong></p>
              </div>
              <label><strong>16.</strong> Informa&ccedil;&atilde;o sobre os projetos</label>
              <div class="form-group">
                <label for="numero01Estudante">Informe n&uacute;mero de projetos com 01 estudante: </label>
                <input type="text" name="numero01Estudante" id="Numero de Projetos com 1 Estudante" class="form-control" data-js="input">
              </div>
              <div class="form-group">
                <label for="numero02Estudante">Informe n&uacute;mero de projetos com 02 estudantes: </label>
                <input type="text" name="numero02Estudante" id="Numero de Projetos com 2 Estudante" class="form-control" data-js="input">
              </div>
              <div class="form-group">
                <label for="numero03Estudante">Informe n&uacute;mero de projetos com 03 estudantes: </label>
                <input type="text" name="numero03Estudante" id="Numero de Projetos com 3 Estudante" class="form-control" data-js="input">
              </div>
              <div class="form-group">
                <label for="numero04Estudante">Informe n&uacute;mero de projetos com 04 estudantes: </label>
                <input type="text" name="numero04Estudante" id="Numero de Projetos com 4 Estudante" class="form-control" data-js="input">
              </div>
              <div class="form-group">
                <label for="numero05Estudante">Informe n&uacute;mero de projetos com 05 ou mais estudantes: </label>
                <input type="text" name="numero05Estudante" id="Numero de Projetos com 5 Estudante" class="form-control" data-js="input">
              </div>
              <br>
              <div class="form-group">
                <label for="numeroOrientadoresRelacao"><strong>16.1</strong> N&uacute;mero total de professores orientadores em rela&ccedil;&atilde;o aos itens anteriores: </label>
                <input type="number" name="numeroOrientadoresRelacao"  class="form-control" id="Numero Orientadores Relacao" data-js="input">
              </div>
              <label><strong>16.2</strong> Informa&ccedil;&otilde;es sobre escolas em rela&ccedil;&atilde;o ao item 16</label>
              <div class="form-row">
                <div class="col">
                  <label for="numeroEscolasRelacao">N&uacute;mero de escolas p&uacute;blicas: </label>
                  <input type="number" name="numeroEscolasPublicasRelacao" id="Numero Escolas Relacao" class="form-control" data-js="input">
                </div>
                <div class="col">
                  <label>N&uacute;mero De Escolas Privadas: </label>
                  <input type="number" name="numeroEscolasPrivadasRelacao" id="Numero Escolas Privadas Relacao" class="form-control" data-js="input">
                </div>
              </div>
              <br>
              <br>
              <div class="text-center">
                <h4>PREENCHA COM OS DADOS DE TODOS OS PROJETOS QUE PARTICIPARAM DE SUA FEIRA</h4>
                <label>Deve-se somar os dados dos projetos do ensino fundamental, do ensino m&eacute;dio ( incluindo educa&ccedil;&atilde;o profissional t&eacute;cnica de n&iacute;vel m&eacute;dio ) e do ensino superior, se houver.</label>
                <label>
                  <strong>IMPORTANTE: Caso tenha somente projetos do ensino fundamental e/ou educa&ccedil;&atilde;o infantil repita os dados do item anterior. </strong>
                </label>
              </div>
              <label><strong>17.</strong> Informa&ccedil;&otilde;es sobre os projetos</label>
                <div class="form-group">
                  <label for="numeroProjetosEstudante1"><strong>17.1</strong> Projetos com 01 estudante: </label>
                  <input type="number" name="numeroProjetosEstudante1" id="Numero de projetos com 01 estudante" class="form-control" data-js="input">
                </div>
                <br>
                <div class="form-group">
                  <label for="numeroProjetosEstudante2"><strong>17.2</strong> Projetos com 02 estudantes: </label>
                  <input type="number" name="numeroProjetosEstudante2" id="Numero de projetos com 02 estudante" class="form-control" data-js="input">
                </div>
                <br>
                <div class="form-group">
                  <label for="numeroProjetosEstudante3"><strong>17.3</strong> Projetos com 03 estudantes: </label>
                  <input type="number" name="numeroProjetosEstudante3" id="Numero de projetos com 03 estudante" class="form-control" data-js="input">
                </div>
                <br>
                <div class="form-group">
                  <label for="numeroProjetosEstudante4"><strong>17.4</strong> Projetos com 04 estudantes: </label>
                  <input type="number" name="numeroProjetosEstudante4" id="Numero de projetos com 04 estudante" class="form-control" data-js="input">
                </div>
                <br>
                <div class="form-group">
                  <label for="numeroProjetosEstudante5"><strong>17.5</strong> Projetos com 05 estudantes ou mais: </label>
                  <input type="number" name="numeroProjetosEstudante5" id="Numero de projetos com 05 estudante" class="form-control" data-js="input">
                </div>
                <br>
                <div class="form-group">
                  <label for="numeroEstudanteRelacaoItem175"><strong>17.6</strong> Numero total de estudantes em rela&ccedil;&atilde;o ao item 17.5: </label>
                  <input type="number" name="numeroAlunosRelacaoItem175" data-js="input" class="form-control" id="Numero total de estudantes em relaÃ§Ã£o ao item 17.5">
                </div>
                <br>
                <div class="form-group">
                  <label for="totalOrientadoresItem17"><strong>17.7</strong> N&uacute;mero total de professores orientadores em rela&ccedil;&atilde;o ao item 17:</label>
                  <input type="number" name="totalOrientadoresItem17" id="Numero total de professores orientadores" data-js="input" class="form-control">
                </div>
                <br>
                <label>Informa&ccedil;&otilde;es sobre escolas em rela&ccedil;&atilde;o ao item 17: </label>
                <div class="form-group">
                  <label for="numeroEscolasPublicasTotal">N&uacute;mero de escolas p&uacute;blicas: </label>
                  <input type="number" name="numeroEscolasPublicasTotal" id="Numero total de escolas publicas" class="form-control" data-js="input">
                </div>
                <br>
                <div class="form-group">
                  <label for="numeroEscolasPublicasTotal">N&uacute;mero de escolas privadas: </label>
                  <input type="number" name="numeroEscolasPrivadasTotal" id="Numero total de escolas privadas" class="form-control" data-js="input">
                </div>
                <br><br>
                <label>Solicita&ccedil;&otilde;es de vagas na Mostratec Junior 2018: </label>
                <div class="form-group">
                  <label for="numeroProjetosEnsinoFundamental">N&uacute;mero de projetos desejado para credenciamento na Mostratec J&uacute;nior 2018 - ensino fundamental: </label>
                  <input type="number" name="numeroProjetosCredenciamento" id="Numero de projetos desejado para credenciar" class="form-control" data-js="input">
                </div>
                <br>
                <div class="form-group">
                  <label for="numeroProjetosEnsinoInfantil">N&uacute;mero de projetos desejado para credenciamento na Mostratec J&uacute;nior 2018 - ensino infantil: </label>
                  <input type="number" name="numeroProjetosCredenciamentoDesejado" id="Numero de projetos desejado para credenciar" class="form-control" data-js="input">
                </div>
                <br>

                <p class="text-justify"><strong>ATEN&Ccedil;&Atilde;O: O N&Uacute;MERO DE VAGAS SOLICITADO N&Atilde;O SER&Aacute; NECESS&Aacute;RIAMENTE O N&Uacute;MERO DE VAGAS CONCEDIDO. A DISTRIBUI&Ccedil;&Atilde;O DE VAGAS PARA FEIRAS AFILIADAS OBSERVAR&Aacute; O N&Uacute;MERO LIMITE DE PROJETOS PARA A MOSTRATEC J&Uacute;NIOR E A REPRESENTATIVIDADE DE DIFERENTES ESCOLAS, MUNIC&Iacute;PIOS E REALIDADES. A CONFIRMA&Ccedil;&Atilde;O DO N&Uacute;MERO DE VAGAS PARA A MOSTRATEC J&Uacute;NIOR 2018 OCORRER&Aacute; AT&Eacute; O DIA 31 DE MAIO DE 2018.</strong></p>
                <br>
                <br>
                <div class="text-center">
                  <h4>CRIT&Eacute;RIOS DE PARTICIPA&Ccedil;&Atilde;O NA MOSTRATEC J&Uacute;NIOR</h4>
                  <p><STRONG>OS PROJETOS A SEREM CREDENCIADOS PARA A MOSTRATEC DEVEM ATENDER A TODOS OS SEGUINTES CRIT&Eacute;RIOS: </STRONG></p>
                </div>
                <br>
                <p><strong>Para O Aluno: </strong></p>
                <p><strong> A ) </strong>Estar matriculado na educa&ccedil;&atilde;o infantil ou no ensino fundamental;</p>
                <p><strong> B ) </strong>Estar acompanhado de professor orientador respons&aacute;vel pelo projeto;</p>
                <p><strong> C ) </strong>Increver o projeto nos parazos estabelecidos pelo Mostratec J&uacute;nior;</p>
                <p><strong> D ) </strong>Participar apenas com um projeto cient&iacute;fico ou tecnol&oacute;gico;</p>
                <br>
                <p><strong>Para O Projeto: </strong></p>
                <p><strong> A ) </strong>Ter um orientador ( maior que 21 anos );</p>
                <p><strong> B ) </strong>Ser elaborado de acordo com as regras de pesquisa da mostratec;</p>
                <p><strong> C ) </strong>Apresentar o trabalho cont&iacute;nuo de at&eacute; 12 ( doze ) meses, iniciado no ano precedente a feira;</p>
                <br>
                <p><strong>OBSERVA&Ccedil;&Otilde;ES: </strong></p>
                <p>Os projetos devem respeitar normas de seguran&ccedil;a e &eacute;tica para a pesquisa;</p>
                <p>Os projetos devem, obrigatoriamente, atender aos crit&eacute;rios estabelecidos acima, sob pena de perda da vaga</p>
                <br>
                <p><strong>TERMO DE RESPONSABILIDADE</strong></p>
                <p>Estou ciente dos dados informados no formul&aacute;rio de afilia&ccedil;&atilde;o a Mostratec J&uacute;nior 2017, sendo que os mesmos est&atilde;o de acordo com a feira realizada;</p>
                <p>Assumo o compromisso de credenciar projetos(s) conforme os crit&eacute;rios de participa&ccedil;&atilde;o e o regulamento da Mostratec J&uacute;nior;</p>
                <p>Estou ciente de que, caso a feira selecione projetos(s) que esteja(m) em desacordo com o estabelecido pela Mostratec J&uacute;nior, o projeto n&atilde;o ser&aacute; aceito e a feira afialiada  poder&aacute; perder o direito de renovar a afilia&ccedil;&atilde;o no ano seguinte.</p>
                <div class="form-group">
                  <label for="responsavelPreenchimento">Nome do respons&aacute;vel pelo preechimento: </label>
                  <input type="text" name="responsavelPreenchimento" id="Nome do responsavel pelo preenchimento" class="form-control " data-js="input">
                </div>
                <div class="form-group">
                  <label for="cargoResponsavel">Cargo / Fun&ccedil;&atilde;o junto a feira (Ex: secret&aacute;rio(a), coordenadora(a), etc): </label>
                  <input type="text" name="cargoResponsavel" id="Gargo / FunÃ§Ã£o junto a feira" class="form-control" data-js="input">
                </div>
                <div class="form-group">
                  <label for="data">Data: </label>
                  <input type="date" name="data" id="Data" class="form-control" data-js="input">
                </div>

            </div>
            <br>
            <input type="submit" name="submit" value="Enviar" class="btn btn-success">
          </form>
          <br>
          <br>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="res/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="res/js/script.js" ></script>
  </body>
</html>
