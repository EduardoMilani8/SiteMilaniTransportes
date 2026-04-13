<?php
$titulo_pagina = 'Transporte de Cargas';
require_once __DIR__ . '/includes/config.php';

// ── Processamento do formulário de contato ──
$form_sucesso = false;
$form_erro    = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_contato'])) {
    $nome     = trim(strip_tags($_POST['nome']     ?? ''));
    $email    = trim(strip_tags($_POST['email']    ?? ''));
    $telefone = trim(strip_tags($_POST['telefone'] ?? ''));
    $assunto  = trim(strip_tags($_POST['assunto']  ?? ''));
    $mensagem = trim(strip_tags($_POST['mensagem'] ?? ''));

    if ($nome && $email && filter_var($email, FILTER_VALIDATE_EMAIL) && $mensagem) {
        $dados = compact('nome', 'email', 'telefone', 'assunto', 'mensagem');
        $form_sucesso = enviarEmail($dados); // função em config.php
        if (!$form_sucesso) $form_erro = true;
    } else {
        $form_erro = true;
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<!-- ══ HERO ══════════════════════════════════ -->
<section class="hero" id="inicio">
  <div class="hero-bg-pattern"></div>
  <div class="hero-vermelho-barra"></div>

  <div class="container hero-content">
    <div class="hero-badge">
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
        <circle cx="7" cy="7" r="6" stroke="currentColor" stroke-width="1.5"/>
        <path d="M4 7h6M7 4l3 3-3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
      </svg>
      <?= EMPRESA_CIDADE ?> e Região
    </div>

    <h1 class="hero-titulo">
      Transportes
      <span class="destaque">Milani</span>
    </h1>

    <p class="hero-desc">
      Conectamos sua carga ao destino com segurança, pontualidade e uma equipe de motoristas comprometidos. Atendemos empresas e clientes em toda a região norte do RS.
    </p>

    <div class="hero-acoes">
      <a href="#contato" class="btn btn-primary">
        Solicitar Frete
      </a>
      <a href="#servicos" class="btn btn-outline">
        Nossos Serviços
      </a>
    </div>

    <div class="hero-numeros">
      <div class="numero-item">
        <span class="numero-valor">+20<span>anos</span></span>
        <span class="numero-label">de experiência</span>
      </div>
      <div class="numero-item">
        <span class="numero-valor">100<span>%</span></span>
        <span class="numero-label">comprometimento</span>
      </div>
      <div class="numero-item">
        <span class="numero-valor">RS<span> inteiro</span></span>
        <span class="numero-label">área de atuação</span>
      </div>
    </div>
  </div>
</section>

<!-- ══ SOBRE ══════════════════════════════════ -->
<section id="sobre">
  <div class="container sobre-grid">
    <div class="sobre-imagem-placeholder">
      <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="10" y="45" width="70" height="35" rx="4" stroke="#555" stroke-width="3"/>
        <path d="M80 58l20-8v30H80V58Z" stroke="#555" stroke-width="3"/>
        <circle cx="28" cy="83" r="10" stroke="#555" stroke-width="3"/>
        <circle cx="80" cy="83" r="10" stroke="#555" stroke-width="3"/>
        <rect x="10" y="30" width="40" height="20" rx="2" stroke="#C0392B" stroke-width="2.5"/>
      </svg>
    </div>

    <div>
      <span class="tag-secao">Quem somos</span>
      <h2 class="titulo-secao">Tradição e<br>confiança no<br>transporte</h2>
      <p class="subtitulo-secao">
        A Milani Transportes atua há décadas na região norte do Rio Grande do Sul, oferecendo serviços de frete e transporte de cargas para empresas e clientes que precisam de confiabilidade e pontualidade.
      </p>
      <p class="subtitulo-secao" style="margin-top:12px">
        Contamos com uma frota própria e uma equipe de motoristas experientes que realizam viagens com total responsabilidade, garantindo que sua carga chegue no prazo e em perfeitas condições.
      </p>

      <ul class="sobre-lista">
        <li>Frota própria com manutenção regular e rastreamento</li>
        <li>Motoristas parceiros com experiência comprovada</li>
        <li>Atendemos fretes solicitados por outras empresas</li>
        <li>Comprometimento com prazo e integridade da carga</li>
        <li>Atendimento personalizado para cada cliente</li>
      </ul>
    </div>
  </div>
</section>

<!-- ══ SERVIÇOS ═══════════════════════════════ -->
<section id="servicos">
  <div class="container">
    <div class="servicos-header">
      <span class="tag-secao">O que fazemos</span>
      <h2 class="titulo-secao">Nossos Serviços</h2>
      <p class="subtitulo-secao">Soluções completas de transporte para empresas e clientes que precisam de eficiência e segurança.</p>
    </div>

    <div class="servicos-grid">
      <div class="servico-card">
        <div class="servico-icone">
          <svg width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <rect x="2" y="9" width="18" height="12" rx="2"/>
            <path d="M20 13l6-4v12h-6"/>
            <circle cx="7" cy="22" r="2.5"/>
            <circle cx="21" cy="22" r="2.5"/>
          </svg>
        </div>
        <h3 class="servico-titulo">Frete de Cargas</h3>
        <p class="servico-desc">Transporte de cargas com destino a qualquer ponto do Rio Grande do Sul e regiões. Segurança e pontualidade garantidas.</p>
      </div>

      <div class="servico-card">
        <div class="servico-icone">
          <svg width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <path d="M14 4l2.5 5 5.5.8-4 3.9.95 5.5L14 16.7l-4.95 2.5.95-5.5-4-3.9 5.5-.8L14 4Z"/>
          </svg>
        </div>
        <h3 class="servico-titulo">Frete Terceirizado</h3>
        <p class="servico-desc">Sua empresa tem frete disponível? A Milani executa o transporte com profissionalismo. Parceria ágil e confiável entre empresas.</p>
      </div>

      <div class="servico-card">
        <div class="servico-icone">
          <svg width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <path d="M4 14h20M4 14l5-5M4 14l5 5M24 14l-5-5M24 14l-5 5"/>
          </svg>
        </div>
        <h3 class="servico-titulo">Rotas Regionais</h3>
        <p class="servico-desc">Atendemos rotas regulares na região de Coxilha e norte gaúcho, com flexibilidade para cargas emergenciais.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ FROTA ══════════════════════════════════ -->
<section id="frota">
  <div class="container">
    <span class="tag-secao">Nossa estrutura</span>
    <h2 class="titulo-secao">Nossa Frota</h2>
    <p class="subtitulo-secao">Caminhões próprios, mantidos e preparados para qualquer tipo de carga.</p>

    <div class="frota-grid">
      <div class="frota-card">
        <div class="frota-tipo">Caminhão Truck</div>
        <div class="frota-detalhe">6 eixos — ideal para cargas pesadas de média e longa distância.</div>
        <span class="frota-tag">Disponível</span>
      </div>
      <div class="frota-card">
        <div class="frota-tipo">Caminhão Toco</div>
        <div class="frota-detalhe">4 eixos — versatilidade para cargas variadas e rotas urbanas.</div>
        <span class="frota-tag">Disponível</span>
      </div>
      <div class="frota-card">
        <div class="frota-tipo">Carroceria Aberta</div>
        <div class="frota-detalhe">Para cargas agrícolas, materiais de construção e equipamentos.</div>
        <span class="frota-tag">Disponível</span>
      </div>
      <div class="frota-card">
        <div class="frota-tipo">Motoristas Parceiros</div>
        <div class="frota-detalhe">Equipe de caminhoneiros experientes que trabalham para nós nos fretes.</div>
        <span class="frota-tag">Equipe própria</span>
      </div>
    </div>

    <p style="color:#666; font-size:14px; margin-top:28px; text-align:center">
      * Tipos de veículo ilustrativos — atualize conforme a frota real da empresa.
    </p>
  </div>
</section>

<!-- ══ CONTATO ════════════════════════════════ -->
<section id="contato">
  <div class="container">
    <span class="tag-secao">Fale conosco</span>
    <h2 class="titulo-secao" style="margin-bottom:56px">Entre em Contato</h2>

    <div class="contato-grid">
      <!-- Informações de contato -->
      <div class="contato-info">
        <h3>Solicite um orçamento</h3>

        <div class="contato-item">
          <div class="contato-icone">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
              <path d="M3 5a2 2 0 012-2h10a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"/>
              <path d="M3 7l7 5 7-5"/>
            </svg>
          </div>
          <div>
            <div class="contato-label">E-mail</div>
            <a href="mailto:<?= EMPRESA_EMAIL ?>" class="contato-valor"><?= EMPRESA_EMAIL ?></a>
          </div>
        </div>

        <div class="contato-item">
          <div class="contato-icone">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
              <path d="M3 5.5C3 4.67 3.67 4 4.5 4h.5l2 4.5-1.5 1.5a11 11 0 004.5 4.5L11.5 13 16 15v.5c0 .83-.67 1.5-1.5 1.5C7.04 17 3 12.96 3 8v-2.5Z"/>
            </svg>
          </div>
          <div>
            <div class="contato-label">Telefone / WhatsApp</div>
            <a href="tel:<?= preg_replace('/\D/', '', EMPRESA_TELEFONE) ?>" class="contato-valor"><?= EMPRESA_TELEFONE ?></a>
          </div>
        </div>

        <div class="contato-item">
          <div class="contato-icone">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
              <circle cx="10" cy="8" r="3"/>
              <path d="M10 2C6.69 2 4 4.69 4 8c0 4.5 6 10 6 10s6-5.5 6-10c0-3.31-2.69-6-6-6Z"/>
            </svg>
          </div>
          <div>
            <div class="contato-label">Localização</div>
            <span class="contato-valor"><?= EMPRESA_CIDADE ?></span>
          </div>
        </div>

        <a href="https://wa.me/<?= EMPRESA_WHATSAPP ?>?text=Olá, vim pelo site e gostaria de solicitar um frete."
           class="btn btn-primary" target="_blank" rel="noopener" style="margin-top:32px">
          Chamar no WhatsApp
        </a>
      </div>

      <!-- Formulário -->
      <div class="form-contato">
        <div class="form-titulo">Envie sua mensagem</div>

        <?php if ($form_sucesso): ?>
          <div class="alerta alerta-sucesso">Mensagem enviada com sucesso! Entraremos em contato em breve.</div>
        <?php elseif ($form_erro): ?>
          <div class="alerta alerta-erro">Erro ao enviar. Verifique os campos e tente novamente.</div>
        <?php endif; ?>

        <form method="POST" action="#contato">
          <input type="hidden" name="form_contato" value="1">

          <div class="form-row">
            <div class="form-grupo">
              <label for="nome">Seu nome *</label>
              <input type="text" id="nome" name="nome" required placeholder="João da Silva"
                     value="<?= htmlspecialchars($_POST['nome'] ?? '') ?>">
            </div>
            <div class="form-grupo">
              <label for="telefone">Telefone / WhatsApp</label>
              <input type="tel" id="telefone" name="telefone" placeholder="(54) 9 9000-0000"
                     value="<?= htmlspecialchars($_POST['telefone'] ?? '') ?>">
            </div>
          </div>

          <div class="form-grupo">
            <label for="email">E-mail *</label>
            <input type="email" id="email" name="email" required placeholder="seu@email.com"
                   value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
          </div>

          <div class="form-grupo">
            <label for="assunto">Assunto</label>
            <select id="assunto" name="assunto">
              <option value="Solicitar frete">Solicitar frete</option>
              <option value="Parceria empresarial">Parceria empresarial</option>
              <option value="Informações gerais">Informações gerais</option>
              <option value="Outro">Outro</option>
            </select>
          </div>

          <div class="form-grupo">
            <label for="mensagem">Mensagem *</label>
            <textarea id="mensagem" name="mensagem" required
                      placeholder="Descreva sua necessidade: origem, destino, tipo de carga..."><?= htmlspecialchars($_POST['mensagem'] ?? '') ?></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center">
            Enviar Mensagem
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
