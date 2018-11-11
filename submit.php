<?php

require 'vendor/autoload.php';

use Medoo\Medoo;

// echo json_encode( $_POST);

$tipoFeira = ( $_POST['tipoFeira'] != 'outro') ? $_POST['tipoFeira'] : $_POST['outroTipo'];

$nivelEnsinoAlunosEducacaoInfantil = isset( $_POST['nivelEnsinoAlunosEducacaoInfantil']) ? $_POST['nivelEnsinoAlunosEducacaoInfantil'] : 'n';
$numeroProjetosInfantil = isset( $_POST['nivelEnsinoAlunosEducacaoInfantil']) ? $_POST['numeroProjetosInfantil'] : 0;
$numeroEscolasInfantil = isset( $_POST['nivelEnsinoAlunosEducacaoInfantil']) ? $_POST['numeroEscolasInfantil'] : 0;

$nivelEnsinoAlunosEducacaoFudamental = isset( $_POST['nivelEnsinoAlunosEducacaoFudamental']) ? $_POST['nivelEnsinoAlunosEducacaoFudamental'] : 'n';
$numeroProjetosFundamental = isset( $_POST['nivelEnsinoAlunosEducacaoFudamental']) ? $_POST['numeroProjetosFundamental'] : 0;
$numeroEscolasFundamental = isset( $_POST['nivelEnsinoAlunosEducacaoFudamental']) ? $_POST['numeroEscolasFundamental'] : 0;

$nivelEnsinoAlunosEducacaoMedioProfissional = isset( $_POST['nivelEnsinoAlunosEducacaoMedioProfissional']) ? $_POST['nivelEnsinoAlunosEducacaoMedioProfissional'] : 'n';
$numeroProjetosMedioProfissional = isset( $_POST['nivelEnsinoAlunosEducacaoMedioProfissional']) ? $_POST['numeroProjetosMedioProfissional'] : 0;
$numeroEscolasMedioProfissional = isset( $_POST['nivelEnsinoAlunosEducacaoMedioProfissional']) ? $_POST['numeroEscolasMedioProfissional'] : 0;

$nivelEnsinoAlunosEducacaoSuperior = isset( $_POST['nivelEnsinoAlunosEducacaoSuperior']) ? $_POST['nivelEnsinoAlunosEducacaoSuperior'] : 'n';
$numeroProjetosSuperior = isset( $_POST['nivelEnsinoAlunosEducacaoSuperior']) ? $_POST['numeroProjetosSuperior'] : 0;
$numeroEscolasSuperior = isset( $_POST['nivelEnsinoAlunosEducacaoSuperior']) ? $_POST['numeroEscolasSuperior'] : 0;

$opcao1 = isset( $_POST['opcao1']) ? $_POST['opcao1'] : 'n';
$opcao2 = isset( $_POST['opcao2']) ? $_POST['opcao2'] : 'n';
$opcao3 = isset( $_POST['opcao3']) ? $_POST['opcao3'] : 'n';
$opcao4 = isset( $_POST['opcao4']) ? $_POST['opcao4'] : 'n';
$opcao5 = isset( $_POST['opcao5']) ? $_POST['opcao5'] : 'n';
$opcao6 = isset( $_POST['opcao6']) ? $_POST['opcao6'] : 'n';
$opcao7 = isset( $_POST['opcao7']) ? $_POST['opcao7'] : 'n';
$opcao8 = isset( $_POST['opcao8']) ? $_POST['opcao8'] : 'n';
$opcao9 = isset( $_POST['opcao9']) ? $_POST['opcao9'] : 'n';
$opcao10 = isset( $_POST['opcao10']) ? $_POST['opcao10'] : 'n';
$opcao11 = isset( $_POST['opcao11']) ? $_POST['opcao11'] : 'n';
$opcao12 = isset( $_POST['opcao12']) ? $_POST['opcao12'] : 'n';
$opcao13 = isset( $_POST['opcao13']) ? $_POST['opcao13'] : 'n';
$opcao14 = isset( $_POST['opcao14']) ? $_POST['opcao14'] : 'n';
$opcao15 = isset( $_POST['opcao15']) ? $_POST['opcao15'] : 'n';
$opcao16 = isset( $_POST['opcao16']) ? $_POST['opcao16'] : 'n';
$opcao17 = isset( $_POST['opcao17']) ? $_POST['opcao17'] : 'n';

$database = new Medoo([
	'database_type' => 'mysql',
	'database_name' => 'mostratec_junior_afiliacao',
	'server' => '127.0.0.1',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8'
]);


$parameters = array(
  ':nome_responsavel_preenchimento_cadastro_in' => $_POST['responsavelPreenchimento'],
  ':cargo_responsavel_preenchimento_cargo_in' =>$_POST['cargoResponsavel'],
  ':data_cadastro_in' => $_POST['data'],
  ':nome_pessoa_pra_contato_in' => $_POST['nomePessoa'],
  ':telefone_pessoa_pra_contato_in' => $_POST['telefonePessoa'],
  ':email_pessoa_pra_contato_in' => $_POST['emailPessoa'],
  ':nome_instituicao_in' => $_POST['nomeInstituicao'],
  ':nome_responsavel_in' => $_POST['nomeResposanvel'],
  ':telefone_responsavel_in' => $_POST['telefoneResponsavel'],
  ':email_responsavel_in' => $_POST['emailResponsavel'],
  ':rua_in' => $_POST['ruaFeira'],
  ':numero_in' => $_POST['numeroFeira'],
  ':cep_in' => $_POST['cepFeira'],
  ':cidade_in' => $_POST['cidadeFeira'],
  ':estado_in' => $_POST['ufFEira'],
  ':pais_in' => $_POST['paisFeira'],
  ':nome_in' => $_POST['nomeCordenador'],
  ':telefone_in' => $_POST['telefoneCordenador'],
  ':email_in' => $_POST['emailCordenador'],
  ':nome_feira_in' => $_POST['nomeFeira'],
  ':site_in' => $_POST['socialFeira'],
  ':peridiocidade_in' => $_POST['periodoFeira'],
  ':data_realizacao_mais_recente_in' => $_POST['dataRecenteFeira'],
  ':data_realizacao_proxima_in' => $_POST['dataProximaFeira'],
  ':data_confirmada_in' => $_POST['confirmaData'],
  ':numero_edicao_in' => $_POST['numeroEdicao'],
  ':tipo_de_feira_in' => $tipoFeira,
  ':descricao_abrangencia_in' => $_POST['observacoesAbrangenciaFeira'],
  ':existe_comite_revisao_cientifica_in' => $_POST['existeComite'],
  ':descricao_processo_selecao_in' => $_POST['descrevaProcesso'],
  ':descricao_processo_avaliacao_feira_in' => $_POST['descrevaProcessoAvaliacao'],
  ':data_ultima_feira_realizada_in' => $_POST['dataUltimaFeira'],
  ':numero_projetos_proxima_edicao_in' => $_POST['numeroTotalProjetosProximaEdicao'],
  ':numero_escolas_proxima_edicao_in' => $_POST['numeroTotalEscolasProximaEdicao'],
  ':ultima_feira_numero_projetos_um_estudante_in' => $_POST['numero01Estudante'],
  ':ultima_feira_numero_projetos_dois_estudantes_in' => $_POST['numero02Estudante'],
  ':ultima_feira_numero_projetos_tres_estudantes_in' => $_POST['numero03Estudante'],
  ':ultima_feira_numero_projetos_quatro_estudantes_in' => $_POST['numero04Estudante'],
  ':ultima_feira_numero_projetos_cinco_ou_mais_estudantes_in' => $_POST['numero05Estudante'],
  ':ultima_feira_numero_total_professores_in' => $_POST['numeroOrientadoresRelacao'],
  ':ultima_feira_numero_escolas_publicas' => $_POST['numeroEscolasPublicasRelacao'],
  ':ultima_feira_numero_escolas_privadas_in' => $_POST['numeroEscolasPrivadasRelacao'],
  ':todos_projetos_um_estudante_in' => $_POST['numeroProjetosEstudante1'],
  ':todos_projetos_dois_estudantes_in' => $_POST['numeroProjetosEstudante2'],
  ':todos_projetos_tres_estudantes_in' => $_POST['numeroProjetosEstudante3'],
  ':todos_projetos_quatro_estudantes_in' => $_POST['numeroProjetosEstudante4'],
  ':todos_projetos_cinco_ou_mais_estudantes_in' => $_POST['numeroProjetosEstudante5'],
  ':numero_total_estudantes_in' => $_POST['numeroAlunosRelacaoItem175'],
  ':numero_total_de_orientadores_in' => $_POST['totalOrientadoresItem17'],
  ':numero_total_escolas_publicas_in' => $_POST['numeroEscolasPublicasTotal'],
  ':numero_total_escolas_privadas_in' => $_POST['numeroEscolasPrivadasTotal'],
  ':numero_total_projetos_credenciamento_in' => $_POST['numeroProjetosCredenciamento'],
  ':numero_projetos_desejado_credenciamento_in' => $_POST['numeroProjetosCredenciamentoDesejado'],
  ':opcao1' => $opcao1,
  ':opcao2' => $opcao2,
  ':opcao3' => $opcao3,
  ':opcao4' => $opcao4,
  ':opcao5' => $opcao5,
  ':opcao6' => $opcao6,
  ':opcao7' => $opcao7,
  ':opcao8' => $opcao8,
  ':opcao9' => $opcao9,
  ':opcao10' => $opcao10,
  ':opcao11' => $opcao11,
  ':opcao12' => $opcao12,
  ':opcao13' => $opcao13,
  ':opcao14' => $opcao14,
  ':opcao15' => $opcao15,
  ':opcao16' => $opcao16,
  ':opcao17' => $opcao17,
  ':nivel_escolas_ensino_infantil_in' => $nivelEnsinoAlunosEducacaoInfantil,
  ':numero_escolas_ensino_infantil_in' => $numeroProjetosInfantil,
  ':numero_projetos_ensino_infantil_in' => $numeroEscolasInfantil,
  ':nivel_escolas_ensino_fundamental_in' => $nivelEnsinoAlunosEducacaoFudamental,
  ':numero_escolas_ensino_fundamental_in' => $numeroProjetosFundamental,
  ':numero_projetos_ensino_fundamental_in' => $numeroEscolasFundamental,
  ':nivel_escolas_ensino_medio_in' => $nivelEnsinoAlunosEducacaoMedioProfissional,
  ':numero_escolas_ensino_medio_in' => $numeroProjetosMedioProfissional,
  ':numero_projetos_ensino_medio_in' => $numeroEscolasMedioProfissional,
  ':nivel_escolas_ensino_superior_tecnico_in' => $nivelEnsinoAlunosEducacaoSuperior,
  ':numero_escolas_ensino_superior_tecnico_in' => $numeroProjetosSuperior,
  ':numero_projetos_ensino_superior_tecnico_in' => $numeroEscolasSuperior
);


$result = $database->query('Call sp_cadastrar(
  :nome_responsavel_preenchimento_cadastro_in,
  :cargo_responsavel_preenchimento_cargo_in,
  :data_cadastro_in,
  :nome_pessoa_pra_contato_in,
  :telefone_pessoa_pra_contato_in,
  :email_pessoa_pra_contato_in,
  :nome_instituicao_in,
  :nome_responsavel_in,
  :telefone_responsavel_in,
  :email_responsavel_in,
  :rua_in,
  :numero_in,
  :cep_in,
  :cidade_in,
  :estado_in,
  :pais_in,
  :nome_in,
  :telefone_in,
  :email_in,
  :nome_feira_in,
  :site_in,
  :peridiocidade_in,
  :data_realizacao_mais_recente_in,
  :data_realizacao_proxima_in,
  :data_confirmada_in,
  :numero_edicao_in,
  :tipo_de_feira_in,
  :descricao_abrangencia_in,
  :existe_comite_revisao_cientifica_in,
  :descricao_processo_selecao_in,
  :descricao_processo_avaliacao_feira_in,
  :data_ultima_feira_realizada_in,
  :numero_projetos_proxima_edicao_in,
  :numero_escolas_proxima_edicao_in,
  :ultima_feira_numero_projetos_um_estudante_in,
  :ultima_feira_numero_projetos_dois_estudantes_in,
  :ultima_feira_numero_projetos_tres_estudantes_in,
  :ultima_feira_numero_projetos_quatro_estudantes_in,
  :ultima_feira_numero_projetos_cinco_ou_mais_estudantes_in,
  :ultima_feira_numero_total_professores_in,
  :ultima_feira_numero_escolas_publicas,
  :ultima_feira_numero_escolas_privadas_in,
  :todos_projetos_um_estudante_in,
  :todos_projetos_dois_estudantes_in,
  :todos_projetos_tres_estudantes_in,
  :todos_projetos_quatro_estudantes_in,
  :todos_projetos_cinco_ou_mais_estudantes_in,
  :numero_total_estudantes_in,
  :numero_total_de_orientadores_in,
  :numero_total_escolas_publicas_in,
  :numero_total_escolas_privadas_in,
  :numero_total_projetos_credenciamento_in,
  :numero_projetos_desejado_credenciamento_in,
  :opcao1,
  :opcao2,
  :opcao3,
  :opcao4,
  :opcao5,
  :opcao6,
  :opcao7,
  :opcao8,
  :opcao9,
  :opcao10,
  :opcao11,
  :opcao12,
  :opcao13,
  :opcao14,
  :opcao15,
  :opcao16,
  :opcao17,
  :nivel_escolas_ensino_infantil_in,
  :numero_escolas_ensino_infantil_in,
  :numero_projetos_ensino_infantil_in,
  :nivel_escolas_ensino_fundamental_in,
  :numero_escolas_ensino_fundamental_in,
  :numero_projetos_ensino_fundamental_in,
  :nivel_escolas_ensino_medio_in,
  :numero_escolas_ensino_medio_in,
  :numero_projetos_ensino_medio_in,
  :nivel_escolas_ensino_superior_tecnico_in,
  :numero_escolas_ensino_superior_tecnico_in,
  :numero_projetos_ensino_superior_tecnico_in
)', $parameters)->fetchAll();

// echo json_encode( $result);
