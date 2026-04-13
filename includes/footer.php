
<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <img src="/milani-transportes/images/logo.png" alt="Milani Transportes" class="footer-logo-img">
      <p><?= EMPRESA_SLOGAN ?></p>
      <p class="footer-cidade"><?= EMPRESA_CIDADE ?></p>
    </div>
    <div class="footer-col">
      <h4>Navegação</h4>
      <a href="/#sobre">Sobre nós</a>
      <a href="/#servicos">Serviços</a>
      <a href="/#frota">Nossa Frota</a>
      <a href="/#contato">Contato</a>
    </div>
    <div class="footer-col">
      <h4>Contato</h4>
      <a href="tel:<?= preg_replace('/\D/', '', EMPRESA_TELEFONE) ?>"><?= EMPRESA_TELEFONE ?></a>
      <a href="mailto:<?= EMPRESA_EMAIL ?>"><?= EMPRESA_EMAIL ?></a>
      <a href="https://wa.me/<?= EMPRESA_WHATSAPP ?>" target="_blank" rel="noopener">WhatsApp</a>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <span>&copy; <?= date('Y') ?> <?= EMPRESA_NOME ?>. Todos os direitos reservados.</span>
      <span>Desenvolvido com PHP</span>
    </div>
  </div>
</footer>

<a href="https://wa.me/<?= EMPRESA_WHATSAPP ?>?text=Olá, vim pelo site e gostaria de solicitar um frete."
   class="whatsapp-float" target="_blank" rel="noopener" aria-label="WhatsApp">
  <svg width="28" height="28" viewBox="0 0 28 28" fill="none">
    <path d="M14 2C7.37 2 2 7.37 2 14c0 2.13.56 4.12 1.54 5.84L2 26l6.34-1.51A11.94 11.94 0 0014 26c6.63 0 12-5.37 12-12S20.63 2 14 2Z" fill="#25D366"/>
    <path d="M20.1 17.3c-.3-.15-1.77-.87-2.04-.97-.28-.1-.48-.15-.68.15-.2.3-.77.97-.95 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.47-.89-.79-1.49-1.76-1.66-2.06-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.68-1.63-.93-2.23-.24-.59-.49-.51-.68-.52h-.58c-.2 0-.52.07-.79.37-.27.3-1.03 1.01-1.03 2.46 0 1.45 1.05 2.85 1.2 3.05.15.2 2.07 3.16 5.01 4.43.7.3 1.25.48 1.67.61.7.22 1.34.19 1.84.12.56-.08 1.73-.71 1.97-1.39.24-.68.24-1.27.17-1.39-.07-.12-.27-.19-.57-.34Z" fill="white"/>
  </svg>
</a>

<script src="/milani-transportes/js/main.js"></script>
</body>
</html>
