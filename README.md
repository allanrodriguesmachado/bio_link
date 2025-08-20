# BioLink - Sua Página de Links Personalizada

![Capa do BioLink](https://placehold.co/1200x630/4F46E5/FFFFFF?text=BioLink&font=inter)

**BioLink** é uma aplicação web moderna e de código aberto, desenvolvida com Laravel, que permite a criação de páginas de perfil personalizadas. É a ferramenta ideal para influenciadores, profissionais, empresas e criadores de conteúdo centralizarem todos os seus links importantes em um único lugar, de forma elegante e eficaz.

---

## 📋 Índice

- [✨ Sobre o Projeto](#-sobre-o-projeto)
- [🚀 Funcionalidades Principais](#-funcionalidades-principais)
- [🛠️ Tecnologias Utilizadas](#-tecnologias-utilizadas)
- [🏁 Como Começar](#-como-começar)
    - [Pré-requisitos](#pré-requisitos)
    - [Instalação](#instalação)
- [🖼️ Screenshots](#-screenshots)
- [📜 Licença](#-licença)
- [📬 Contato](#-contato)

---

## ✨ Sobre o Projeto

O projeto nasceu com o objetivo de oferecer uma alternativa prática, moderna e visualmente atraente a serviços como o Linktree. Com o BioLink, o usuário tem controle total sobre a aparência de sua página, além de ter acesso a métricas essenciais para entender seu público.

## 🚀 Funcionalidades Principais

- **🎨 Customização de Perfil:** Altere sua foto, nome, cargo e descrição para refletir sua identidade.
- **🔗 Gerenciamento de Links:** Adicione, edite, remova e reordene seus links de forma intuitiva com uma interface de arrastar e soltar (drag-and-drop).
- **📊 Análise de Cliques (Em breve):** Acompanhe o desempenho de cada link com estatísticas detalhadas. *(Você pode remover ou adaptar esta funcionalidade conforme o andamento do projeto)*
- **🌙 Tema Claro e Escuro:** Interface adaptada para a preferência visual do usuário.
- **📱 Design Responsivo:** Experiência de usuário otimizada para desktops, tablets e celulares.

---

## 🛠️ Tecnologias Utilizadas

Este projeto foi construído com as seguintes tecnologias:

- **Backend:**
    - [PHP 8.2+](https://www.php.net/)
    - [Laravel 12](https://laravel.com/)
- **Frontend:**
    - [Blade](https://laravel.com/docs/11.x/blade)
    - [Tailwind CSS](https://tailwindcss.com/)
    - [Alpine.js](https://alpinejs.dev/)
- **Banco de Dados:**
    - Compatível com MySQL, PostgreSQL, SQLite
- **Ambiente de Desenvolvimento:**
    - [Laravel Sail](https://laravel.com/docs/11.x/sail) (Docker)
    - [Composer](https://getcomposer.org/)
    - [Vite](https://vitejs.dev/)

---

## 🏁 Como Começar

Siga estas instruções para ter uma cópia do projeto rodando na sua máquina local.

### Pré-requisitos

Certifique-se de ter os seguintes softwares instalados:
- PHP >= 8.2
- Composer
- Node.js & NPM
- Docker (se for usar o Laravel Sail)

### Instalação

1. **Clone o repositório:**
   ```sh
   git clone [https://github.com/seu-usuario/seu-repositorio.git](https://github.com/seu-usuario/seu-repositorio.git)
   cd seu-repositorio
   ```

2. **Instale as dependências do Composer:**
   ```sh
   composer install
   ```

3. **Instale as dependências do NPM:**
   ```sh
   npm install
   ```

4. **Configure o ambiente:**
    - Copie o arquivo de exemplo `.env`:
      ```sh
      cp .env.example .env
      ```
    - Gere a chave da aplicação:
      ```sh
      php artisan key:generate
      ```
    - Configure as variáveis de banco de dados (`DB_HOST`, `DB_DATABASE`, etc.) no seu arquivo `.env`.

5. **Execute as migrations do banco de dados:**
   ```sh
   php artisan migrate
   ```

6. **Compile os assets de frontend:**
   ```sh
   npm run dev
   ```

7. **Inicie o servidor de desenvolvimento:**
    - **Usando o Artisan:**
      ```sh
      php artisan serve
      ```
    - **Ou usando o Laravel Sail (recomendado):**
      ```sh
      ./vendor/bin/sail up -d
      ```

Agora você pode acessar a aplicação em `http://localhost:8000`.


## 📜 Licença

Distribuído sob a licença MIT. Veja `LICENSE` para mais informações.

---

## 📬 Contato

**Allan Rodrigues:** - [allanrodriguesdeveloper@gmail.com](mailto:allanrodriguesdeveloper@gmail.com)

**Link do Projeto:** [allanrodriguesmachado/bio_link](https://github.com/allanrodriguesmachado/bio_link)
