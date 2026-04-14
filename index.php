<?php
$titulo_pagina = 'Transporte de Cargas';
require_once __DIR__ . '/includes/config.php';

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
        $form_sucesso = enviarEmail($dados);
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
      <?= EMPRESA_CIDADE ?> — Atuamos em todo o Brasil e Uruguai
    </div>

    <img src="/images/logo.png" alt="Milani Transportes" class="hero-logo">

    <p class="hero-desc">
      Especializados no transporte de grãos agrícolas como soja e arroz. Frota própria de carretas, motoristas experientes e mais de 16 anos levando cargas com segurança pelo Brasil e Uruguai.
    </p>

    <div class="hero-acoes">
      <a href="/#contato" class="btn btn-primary">Solicitar Frete</a>
      <a href="/#servicos" class="btn btn-outline">Nossos Serviços</a>
    </div>

    <div class="hero-numeros">
      <div class="numero-item">
        <span class="numero-valor">16<span>+</span></span>
        <span class="numero-label">anos de experiência</span>
      </div>
      <div class="numero-item">
        <span class="numero-valor">10</span>
        <span class="numero-label">carretas próprias</span>
      </div>
      <div class="numero-item">
        <span class="numero-valor">9</span>
        <span class="numero-label">motoristas parceiros</span>
      </div>
      <div class="numero-item">
        <span class="numero-valor">6<span>+</span></span>
        <span class="numero-label">estados atendidos</span>
      </div>
    </div>
  </div>
</section>

<!-- ══ SOBRE ══════════════════════════════════ -->
<section id="sobre">
  <div class="container sobre-grid">
    <div class="sobre-imagem-placeholder">
      <svg width="120" height="120" viewBox="0 0 120 120" fill="none">
        <rect x="10" y="45" width="70" height="35" rx="4" stroke="#555" stroke-width="3"/>
        <path d="M80 58l20-8v30H80V58Z" stroke="#555" stroke-width="3"/>
        <circle cx="28" cy="83" r="10" stroke="#555" stroke-width="3"/>
        <circle cx="80" cy="83" r="10" stroke="#555" stroke-width="3"/>
        <rect x="10" y="30" width="40" height="20" rx="2" stroke="#C0392B" stroke-width="2.5"/>
      </svg>
    </div>

    <div>
      <span class="tag-secao">Nossa história</span>
      <h2 class="titulo-secao">Uma família<br>construída<br>na estrada</h2>
      <p class="subtitulo-secao">
        Tudo começou com Airton Milani, que trabalhou por anos sozinho no Tocantins, rodando o Brasil com um caminhão e muita garra. Com determinação e muito trabalho, foi construindo sua história longe de casa — até que, com o apoio dos filhos Marcos e Matheus Milani, conseguiu ampliar a frota e trazer a empresa para Coxilha, no norte gaúcho, onde a Milani Transportes foi fundada de vez.
      </p>
      <p class="subtitulo-secao" style="margin-top:12px">
        Hoje, com 16 anos de empresa, a Milani opera com 10 carretas próprias e uma equipe de 9 motoristas, atendendo clientes em todo o Brasil e Uruguai. A mesma simplicidade e humildade do início seguem sendo a marca da família — e é isso que os clientes reconhecem e confiam.
      </p>

      <ul class="sobre-lista">
        <li>Fundada por Airton Milani em 2010, com raízes no Tocantins</li>
        <li>Empresa familiar — Marcos e Matheus Milani na gestão</li>
        <li>Especialistas em grãos: soja, arroz e cargas agrícolas</li>
        <li>8 carretas próprias, caminhões sempre carregados em cada viagem</li>
        <li>Atendimento em RS, SC, PR, MG, SP e Uruguai</li>
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
      <p class="subtitulo-secao">Transporte especializado em cargas agrícolas, com rotas que cobrem o sul, sudeste do Brasil e o Uruguai.</p>
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
        <h3 class="servico-titulo">Transporte de Grãos</h3>
        <p class="servico-desc">Especialistas no transporte de soja, arroz e outros grãos agrícolas. Carretas preparadas para garantir a integridade da carga do campo ao destino final.</p>
      </div>

      <div class="servico-card">
        <div class="servico-icone">
          <svg width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <circle cx="14" cy="14" r="11"/>
            <path d="M14 3v11l6 4"/>
          </svg>
        </div>
        <h3 class="servico-titulo">Rotas Interestaduais</h3>
        <p class="servico-desc">Atendemos RS, SC, PR, MG e SP com regularidade. Motoristas que conhecem as rotas e garantem entregas dentro do prazo combinado.</p>
      </div>

      <div class="servico-card">
        <div class="servico-icone">
          <svg width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <path d="M4 14h20M14 4l10 10-10 10"/>
          </svg>
        </div>
        <h3 class="servico-titulo">Frete Internacional</h3>
        <p class="servico-desc">Experiência em rotas para o Uruguai, atendendo exportadores e importadores com toda a documentação e logística necessária.</p>
      </div>

      <div class="servico-card">
        <div class="servico-icone">
          <svg width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <path d="M14 4l2.5 5 5.5.8-4 3.9.95 5.5L14 16.7l-4.95 2.5.95-5.5-4-3.9 5.5-.8L14 4Z"/>
          </svg>
        </div>
        <h3 class="servico-titulo">Frete para Empresas</h3>
        <p class="servico-desc">Sua empresa tem carga disponível? Trabalhamos como parceiros no transporte. Caminhões sempre carregados, sem viagens vazias — eficiência para os dois lados.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ FROTA ══════════════════════════════════ -->
<section id="frota">
  <div class="container">
    <div class="frota-header">
      <span class="tag-secao">Nossa estrutura</span>
      <h2 class="titulo-secao">Nossa Frota</h2>
      <p class="subtitulo-secao">8 carretas próprias, sempre em manutenção e prontas para qualquer rota.</p>
    </div>

    <div class="frota-grid">
      <div class="frota-card">
        <div class="frota-tipo">Carreta Graneleira</div>
        <div class="frota-detalhe">Especializada no transporte a granel de soja, arroz e outros grãos agrícolas em grandes volumes.</div>
        <span class="frota-tag">8 unidades</span>
      </div>
      <div class="frota-card">
        <div class="frota-tipo">Rotas Sul–Sudeste</div>
        <div class="frota-detalhe">RS → SC → PR → SP → MG. Rotas regulares com motoristas que conhecem cada trecho.</div>
        <span class="frota-tag">Interestadual</span>
      </div>
      <div class="frota-card">
        <div class="frota-tipo">Rota Internacional</div>
        <div class="frota-detalhe">Operações para o Uruguai com experiência em documentação e logística de fronteira.</div>
        <span class="frota-tag">Exportação</span>
      </div>
      <div class="frota-card">
        <div class="frota-tipo">9 Motoristas</div>
        <div class="frota-detalhe">Caminhoneiros parceiros experientes. Os caminhões sempre saem cheios e aguardam carga para o retorno.</div>
        <span class="frota-tag">Equipe própria</span>
      </div>
    </div>

    <p style="color:#666; font-size:14px; margin-top:28px; text-align:center">
      * Fotos da frota em breve.
    </p>
  </div>
</section>

<!-- ══ CONTATO ════════════════════════════════ -->
<section id="contato">
  <div class="container">
    <span class="tag-secao">Fale conosco</span>
    <h2 class="titulo-secao" style="margin-bottom:56px; color:var(--cinza-escuro)">Entre em Contato</h2>

    <div class="contato-grid">
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
            <div class="contato-label">Telefone Fixo</div>
            <a href="tel:5433791028" class="contato-valor">(54) 3379-1028</a>
          </div>
        </div>

        <div class="contato-item">
          <div class="contato-icone">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
              <path d="M10 2a8 8 0 00-6.93 11.98L2 18l4.13-1.05A8 8 0 1010 2zm0 1.5a6.5 6.5 0 110 13 6.5 6.5 0 010-13zm-2.5 3c-.2 0-.5.1-.7.3-.3.3-1 1-1 2.4s1 2.8 1.1 3c.2.1 2 3 4.8 4.2.7.3 1.2.4 1.6.3.5-.1 1.4-.6 1.6-1.1.2-.5.2-1 .1-1.1l-.5-.3-1.8-.8c-.2-.1-.4 0-.6.2l-.7.9c-.1.1-.3.2-.4.1a6.3 6.3 0 01-1.9-1.2 6 6 0 01-1.3-1.7c-.1-.2 0-.3.1-.4l.5-.6c.1-.2.2-.4.1-.6l-.8-1.8c-.1-.3-.3-.4-.4-.4h-.3z"/>
            </svg>
          </div>
          <div>
            <div class="contato-label">WhatsApp</div>
            <a href="https://wa.me/<?= EMPRESA_WHATSAPP ?>?text=Olá, vim pelo site e gostaria de solicitar um frete."
               target="_blank" class="contato-valor">(54) 9122-3134</a>
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
            <div class="contato-label">Endereço</div>
            <span class="contato-valor"><?= EMPRESA_ENDERECO ?><br><?= EMPRESA_CIDADE_COMPLETA ?></span>
          </div>
        </div>

        <a href="https://wa.me/<?= EMPRESA_WHATSAPP ?>?text=Olá, vim pelo site e gostaria de solicitar um frete."
           class="btn btn-primary" target="_blank" rel="noopener" style="margin-top:32px">
          Chamar no WhatsApp
        </a>
      </div>

      <div class="form-contato">
        <div class="form-titulo">Envie sua mensagem</div>

        <?php if ($form_sucesso): ?>
          <div class="alerta alerta-sucesso">Mensagem enviada! Entraremos em contato em breve.</div>
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
              <option value="Frete interestadual">Frete interestadual</option>
              <option value="Frete internacional">Frete internacional (Uruguai)</option>
              <option value="Informações gerais">Informações gerais</option>
            </select>
          </div>

          <div class="form-grupo">
            <label for="mensagem">Mensagem *</label>
            <textarea id="mensagem" name="mensagem" required
                      placeholder="Descreva sua necessidade: origem, destino, tipo de carga, quantidade..."><?= htmlspecialchars($_POST['mensagem'] ?? '') ?></textarea>
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