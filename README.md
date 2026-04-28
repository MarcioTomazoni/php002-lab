# 🚀 php002 - Sistema PHP MVC com Login

Projeto desenvolvido para prática de PHP puro em ambiente LAMP, evoluindo de uma estrutura procedural simples para uma aplicação organizada em mini MVC funcional, com autenticação de usuários, sessões e integração com banco de dados MySQL/MariaDB.

---

## 📌 Objetivo

Este projeto tem como principais objetivos:

- Praticar PHP puro sem frameworks
- Aprender arquitetura MVC na prática
- Trabalhar autenticação com sessões
- Utilizar banco de dados MySQL/MariaDB
- Aplicar boas práticas com Git e GitHub
- Construir um projeto real para portfólio

---

## ⚙️ Tecnologias Utilizadas

| Tecnologia | Descrição |
|---|---|
| PHP | Linguagem principal |
| MySQL / MariaDB | Banco de dados relacional |
| PDO | Abstração de banco de dados |
| HTML5 | Estrutura das views |
| CSS3 | Estilização |
| Apache2 | Servidor web |
| Linux Ubuntu MATE | Ambiente de desenvolvimento |
| Git / GitHub | Versionamento |

---

## 🔐 Funcionalidades Atuais

- [x] Login de usuários
- [x] Verificação segura com `password_verify()`
- [x] Sessões PHP
- [x] Dashboard protegido
- [x] Controle básico de rotas
- [x] Estrutura MVC inicial
- [x] Versionamento profissional com Git

---

## 📁 Estrutura do Projeto

```
php002/
├── controllers/
│   └── AuthController.php
│
├── models/
│   ├── Database.php
│   └── User.php
│
├── views/
│   └── auth/
│       ├── login.php
│       └── dashboard.php
│
├── public/
│   └── index.php
│
├── README.md
└── .gitignore
```

---

## 🧠 Como Funciona

A aplicação segue o fluxo:

```
URL → public/index.php → Controller → Model → View
```

**Exemplo:**

```
Login → AuthController → User.php → login.php
```

---

## 🗄️ Banco de Dados

Tabela principal utilizada: `users`

| Campo | Tipo |
|---|---|
| id | INT (PK, AUTO_INCREMENT) |
| name | VARCHAR |
| email | VARCHAR |
| password | VARCHAR (hash) |
| created_at | TIMESTAMP |

---

## 🚀 Como Executar Localmente

### 1. Clonar o projeto

```bash
git clone git@github.com:MarcioTomazoni/php002-lab.git
```

### 2. Mover para ambiente Apache

```bash
/var/www/html/php002
```

### 3. Configurar banco de dados

Ajuste as credenciais no arquivo:

```bash
models/Database.php
```

### 4. Acessar no navegador

```
http://localhost/php002/public/
```

---

## 🔑 Autenticação

O sistema autentica usuários cadastrados na tabela `users`. A senha é validada com:

```php
password_verify()
```

---

## 📈 Evolução do Projeto

Este projeto começou como estrutura simples em PHP procedural e está sendo evoluído progressivamente para:

- MVC organizado
- Código reutilizável
- Melhor segurança
- Melhor documentação
- Estrutura profissional

---

## 🗺️ Próximos Passos

- [ ] Cadastro de usuários
- [ ] Logout MVC
- [ ] Layout com header/footer
- [ ] Router mais robusto
- [ ] Flash messages
- [ ] Painel administrativo
- [ ] CRUD de usuários
- [ ] Melhorias visuais com CSS

---

## 🧠 Aprendizados Demonstrados

- PHP orientado a objetos
- MVC básico funcional
- Sessões PHP
- Autenticação segura
- Integração com banco de dados
- Git e GitHub na prática
- Evolução incremental de software

---

## 📌 Autor

**Márcio Tomazoni**

Projeto criado para estudos, evolução técnica e portfólio profissional.

---

⭐ Se este projeto te inspirou, deixe uma estrela no GitHub!