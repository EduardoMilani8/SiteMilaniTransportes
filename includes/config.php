<?php
define('EMPRESA_NOME', 'Milani Transportes');
define('EMPRESA_SLOGAN', 'Sua carga, nossa responsabilidade.');
define('EMPRESA_CIDADE', 'Coxilha, Rio Grande do Sul');
define('EMPRESA_REGIAO', 'Norte do RS e região');

// TODO: Substituir pelos contatos reais
define('EMPRESA_TELEFONE', '(54) 9 9000-0000');
define('EMPRESA_WHATSAPP', '5554990000000');
define('EMPRESA_EMAIL', 'contato@milani-transportes.com.br');
define('EMPRESA_CNPJ', '00.000.000/0001-00'); // substituir

define('ANO_FUNDACAO', '1990'); // substituir pelo ano real

function enviarEmail(array $dados): bool {
    // TODO: configurar SMTP ou PHPMailer para produção
    $para    = EMPRESA_EMAIL;
    $assunto = "Novo contato pelo site: " . htmlspecialchars($dados['assunto']);
    $mensagem = "Nome: {$dados['nome']}\n";
    $mensagem .= "Email: {$dados['email']}\n";
    $mensagem .= "Telefone: {$dados['telefone']}\n";
    $mensagem .= "Assunto: {$dados['assunto']}\n\n";
    $mensagem .= "Mensagem:\n{$dados['mensagem']}";
    $cabecalhos = "From: noreply@milani-transportes.com.br\r\nReply-To: {$dados['email']}";
    return mail($para, $assunto, $mensagem, $cabecalhos);
}
