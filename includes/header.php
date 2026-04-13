<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= EMPRESA_NOME ?> — Transporte de cargas em <?= EMPRESA_CIDADE ?> e região. Frota própria, motoristas experientes.">
  <title><?= isset($titulo_pagina) ? $titulo_pagina . ' | ' : '' ?><?= EMPRESA_NOME ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700;800&family=Barlow:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/milani-transportes/css/style.css"></head>
<body>

<header class="site-header" id="topo">
  <div class="container header-inner">
    <a href="/" class="logo">
      <img src="/milani-transportes/images/logo.png" alt="Milani Transportes" class="logo-img">
    </a>

    <nav class="nav-principal" id="nav-principal">
      <a href="/#sobre" class="nav-link">Sobre</a>
      <a href="/#servicos" class="nav-link">Serviços</a>
      <a href="/#frota" class="nav-link">Nossa Frota</a>
      <a href="/#contato" class="nav-link nav-cta">Solicitar Frete</a>
    </nav>

    <button class="nav-toggle" id="nav-toggle" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>
