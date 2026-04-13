<?php
define('EMPRESA_NOME', 'Milani Transportes');
define('EMPRESA_SLOGAN', 'Sua carga, nossa responsabilidade.');
define('EMPRESA_CIDADE', 'Coxilha, Rio Grande do Sul');
define('EMPRESA_REGIAO', 'RS, SC, PR, MG, SP e Uruguai');

define('EMPRESA_TELEFONE', '(54) 3379-1028');
define('EMPRESA_WHATSAPP', '5554991223134');
define('EMPRESA_EMAIL', 'transpmilani@gmail.com');
define('EMPRESA_CNPJ', '11.789.154/0001-20');
define('EMPRESA_ENDERECO', 'Av. Ilso José Webber, 684 — Centro');
define('EMPRESA_CEP', '99145-000');
define('EMPRESA_CIDADE_COMPLETA', 'Coxilha — RS, 99145-000');

define('ANO_FUNDACAO', '2010');
define('EMPRESA_FROTA', '8');
define('EMPRESA_MOTORISTAS', '10');

function enviarEmail(array $dados): bool {
    $para     = EMPRESA_EMAIL;
    $assunto  = "Novo contato pelo site: " . htmlspecialchars($dados['assunto']);
    $mensagem = "Nome: {$dados['nome']}\n";
    $mensagem .= "Email: {$dados['email']}\n";
    $mensagem .= "Telefone: {$dados['telefone']}\n";
    $mensagem .= "Assunto: {$dados['assunto']}\n\n";
    $mensagem .= "Mensagem:\n{$dados['mensagem']}";
    $cabecalhos = "From: noreply@milani-transportes.com.br\r\nReply-To: {$dados['email']}";
    return mail($para, $assunto, $mensagem, $cabecalhos);
}