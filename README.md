# Milani Transportes — Site PHP

Site institucional desenvolvido em PHP puro (sem framework).

## Estrutura do Projeto

```
milani-transportes/
├── index.php              ← Página principal (todas as seções)
├── .htaccess              ← Configurações Apache (cache, segurança)
├── css/
│   └── style.css          ← Estilos completos
├── js/
│   └── main.js            ← Menu mobile, animações
├── includes/
│   ├── config.php         ← ⚠️ EDITE AQUI: dados da empresa
│   ├── header.php         ← Cabeçalho reutilizável
│   └── footer.php         ← Rodapé + botão WhatsApp
└── images/                ← Coloque fotos da frota aqui
```

---

## ✅ Primeiros passos — o que personalizar

### 1. Dados da empresa (`includes/config.php`)
Abra o arquivo e substitua:
- `EMPRESA_TELEFONE` → número real
- `EMPRESA_WHATSAPP` → DDI+DDD+número (sem espaços, ex: `5554999991234`)
- `EMPRESA_EMAIL`    → e-mail real
- `EMPRESA_CNPJ`     → CNPJ real
- `ANO_FUNDACAO`     → ano real de fundação

### 2. Frota (`index.php` — seção #frota)
Atualize os cards de frota conforme os caminhões reais da empresa.

### 3. Números do hero (`index.php` — seção .hero-numeros)
Atualize "+20 anos", etc., para os valores reais.

### 4. Fotos
Coloque fotos dos caminhões/empresa na pasta `images/` e referencie no `index.php` substituindo o placeholder SVG por uma tag `<img>`.

---

## 🚀 Deploy — Hosts gratuitos recomendados

### Opção 1: InfinityFree (recomendado para PHP)
1. Acesse https://infinityfree.com e crie uma conta
2. Crie um novo hosting (subdomínio gratuito ou domínio próprio)
3. Acesse o **File Manager** ou use **FTP** (credenciais no painel)
4. Suba todos os arquivos para a pasta `htdocs/`
5. Pronto — o PHP já está ativo

**FTP com FileZilla:**
- Host: informado no painel InfinityFree
- Usuário/senha: criados no painel
- Porta: 21

### Opção 2: 000WebHost (Hostinger gratuito)
1. Acesse https://www.000webhost.com
2. Crie conta e novo site
3. Upload via File Manager ou FTP
4. PHP 8.x disponível

### Opção 3: Heroku (com buildpack PHP) — para quem quer Git deploy
```bash
# Na raiz do projeto, adicione Procfile:
echo "web: vendor/bin/heroku-php-apache2" > Procfile

# Deploy
git init && git add . && git commit -m "inicial"
heroku create milani-transportes
git push heroku main
```

---

## 📧 Configurar envio de e-mail (formulário de contato)

A função `enviarEmail()` em `config.php` usa `mail()` nativo do PHP.
Em hosts gratuitos isso muitas vezes não funciona.

**Recomendado: usar PHPMailer com Gmail SMTP:**

```bash
composer require phpmailer/phpmailer
```

Então em `config.php`, substitua a função `enviarEmail()`:

```php
use PHPMailer\PHPMailer\PHPMailer;

function enviarEmail(array $dados): bool {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'seuemail@gmail.com';
        $mail->Password   = 'sua_senha_de_app'; // App Password do Google
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->setFrom('seuemail@gmail.com', 'Milani Transportes');
        $mail->addAddress(EMPRESA_EMAIL);
        $mail->Subject = "Contato site: " . $dados['assunto'];
        $mail->Body    = implode("\n", array_map(fn($k,$v) => "$k: $v", array_keys($dados), $dados));
        $mail->send();
        return true;
    } catch (\Exception $e) {
        return false;
    }
}
```

---

Desenvolvido por Eduardo Milani — IFSUL Passo Fundo
