<?php

require 'vendor/autoload.php';

use Medoo\Medoo;

echo json_encode( $_POST);

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

$database = new Medoo([
	'database_type' => 'mysql',
	'database_name' => 'mostratec_junior_afiliacao',
	'server' => '172.16.0.5',
	'username' => 'site',
	'password' => 'ChWoaTBxTZEzVSHX',
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

try {

  $database->query('Call sp_cadastrar(
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
  )', $parameters);

} catch (\Exception $e) {
  echo $e->getMessage();
}
