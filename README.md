# Portfólio - Gustavo Marques de Lima

Portfólio pessoal desenvolvido para apresentar projetos, habilidades e experiência profissional. Site moderno, responsivo e otimizado com design clean e animações suaves.

## 🚀 Tecnologias Utilizadas

- **HTML5** - Estrutura semântica e acessível
- **CSS3** - Estilização moderna com animações
- **JavaScript (Vanilla)** - Interatividade e validação de formulários
- **Bootstrap 5.3.2** - Framework CSS para layout responsivo
- **Bootstrap Icons** - Ícones modernos
- **AOS (Animate On Scroll)** - Animações ao rolar a página
- **PHP** - Processamento de formulário de contato (opcional)

## ✨ Funcionalidades

- ✅ Design responsivo e moderno
- ✅ Modo escuro/claro com persistência de preferência
- ✅ Animações suaves ao scroll
- ✅ Barra de progresso de leitura
- ✅ Formulário de contato com validação completa
- ✅ Seções: Início, Sobre Mim, Experiência, Projetos e Contato
- ✅ Links para repositórios GitHub dos projetos
- ✅ Download de currículo em PDF
- ✅ Menu de navegação fixo com efeito glassmorphism
- ✅ Botão "Voltar ao topo"
- ✅ Acessibilidade (ARIA labels, navegação por teclado)
- ✅ SEO otimizado

## 📁 Estrutura do Projeto

```
Projeto-Portfolio/
│
├── index.html              # Página principal
├── style.css               # Estilos customizados
├── processar_contato.php   # Backend para processar formulário (opcional)
├── curriculo.pdf           # Currículo para download
├── imagens/
│   └── foto-perfil.jpg     # Foto de perfil
└── README.md               # Este arquivo
```

## 🛠️ Como Executar

### Opção 1: Servidor Local (XAMPP/WAMP/MAMP)

1. Clone o repositório:
```bash
git clone https://github.com/GusttavoMLima/Projeto-Portfolio.git
```

2. Copie a pasta para o diretório do servidor:
   - **XAMPP**: `C:\xampp\htdocs\`
   - **WAMP**: `C:\wamp64\www\`
   - **MAMP**: `/Applications/MAMP/htdocs/`

3. Inicie o servidor Apache

4. Acesse no navegador:
```
http://localhost/Projeto-Portfolio/
```

### Opção 2: GitHub Pages

O site está configurado para funcionar no GitHub Pages. O formulário de contato usa automaticamente `mailto:` quando detectado que está rodando no GitHub Pages.

1. Acesse as configurações do repositório no GitHub
2. Vá em **Settings > Pages**
3. Selecione a branch `main` e pasta `/ (root)`
4. Salve e aguarde alguns minutos
5. Acesse: `https://gusttavomlima.github.io/Projeto-Portfolio/`

### Opção 3: Servidor de Desenvolvimento Simples

```bash
# Python 3
python -m http.server 8000

# Node.js (com http-server)
npx http-server
```

Acesse: `http://localhost:8000`

## 📝 Formulário de Contato

O formulário de contato possui validação completa:

- **Validação no cliente**: Email, nome e mensagem são validados antes do envio
- **Validação no servidor**: Quando usando PHP, validação adicional no backend
- **Fallback automático**: No GitHub Pages, usa `mailto:` automaticamente

### Configuração do PHP (Opcional)

Se quiser usar o processamento PHP do formulário:

1. Certifique-se de ter PHP instalado
2. O arquivo `processar_contato.php` já está configurado
3. Para enviar emails reais, descomente e configure a função `mail()` no PHP

## 🎨 Personalização

### Cores e Tema

As cores principais podem ser alteradas no arquivo `style.css` através das variáveis CSS ou classes Bootstrap.

### Conteúdo

Edite o arquivo `index.html` para personalizar:
- Informações pessoais
- Experiências profissionais
- Projetos
- Links de redes sociais

## 📱 Responsividade

O site é totalmente responsivo e otimizado para:
- 📱 Mobile (320px+)
- 📱 Tablet (768px+)
- 💻 Desktop (1024px+)
- 🖥️ Large Desktop (1200px+)

## ♿ Acessibilidade

- Navegação por teclado
- ARIA labels em elementos interativos
- Contraste adequado de cores
- Estrutura semântica HTML5
- Suporte a leitores de tela

## 🔗 Links

- **GitHub**: [@GusttavoMLima](https://github.com/GusttavoMLima)
- **LinkedIn**: [Gustavo Marques de Lima](https://www.linkedin.com/in/gustavo-marques-de-lima)
- **Email**: delimagustavomarques@gmail.com

## 📄 Licença

Este projeto é de uso pessoal. Todos os direitos reservados.

## 👤 Autor

**Gustavo Marques de Lima**

- Estudante de Desenvolvimento de Software Multiplataforma na FATEC Itapira
- Auxiliar Fiscal
- Apaixonado por tecnologia e soluções criativas

---

⭐ Se este projeto foi útil para você, considere dar uma estrela no repositório!

