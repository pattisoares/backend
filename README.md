## Projeto completo

Este projeto está dividido em dois repositórios:

- Backend (Laravel): https://github.com/pattisoares/backend
- Frontend (React): https://github.com/pattisoares/frontend

# API - Cadastro e Lista de Recados

API desenvolvida em Laravel para gerenciamento de usuários e recados pessoais.

## Tecnologias

- PHP 8
- Laravel 11
- Laravel Sanctum
- MySQL 8

## Funcionalidades

- Cadastro de usuários
- Login com autenticação utilizando Sanctum
- Logout
- Listagem de recados
- Cadastro de recados
- Edição de recados
- Exclusão de recados

## Pré-requisitos

Antes de executar o projeto, é necessário ter instalado:

- Git
- PHP 8 ou superior
- Composer
- MySQL 8

## Como executar o projeto

### 1. Escolha uma pasta onde deseja salvar o projeto

Exemplo:

```text
D:\ProjetoRecados
```
Abra o terminal no VS Code nessa pasta

### 2. Clonar o repositório

```bash
git clone https://github.com/pattisoares/backend.git
```

### 3. Acesse a pasta criada pelo Git

```bash
cd backend
```

### 4. Instalar as dependências

```bash
composer install
```

### 5. Criar e Configurar o arquivo .env

No Windows:

```cmd
copy .env.example .env
```

No Linux/macOS:

```bash
cp .env.example .env
```

Configure as credenciais do MySQL no arquivo `.env`, informando um banco de dados existente ou criando um novo no MySQL.

### 6. Gerar a chave da aplicação

```bash
php artisan key:generate
```

### 7. Executar as migrations

```bash
php artisan migrate
```

### 8. Iniciar o servidor

```bash
php artisan serve
```

A API estará disponível em:

```
http://127.0.0.1:8000
```
## Frontend

A interface da aplicação está disponível no repositório:

👉 https://github.com/pattisoares/frontend

Após configurar e iniciar esta API, faça o download do frontend e siga as instruções presentes no README para executar a aplicação completa.

## Rotas principais

| Método | Rota | Descrição |
|---------|------|-----------|
| POST | /api/register | Cadastro de usuário |
| POST | /api/login | Login |
| POST | /api/logout | Logout |
| GET | /api/recados | Listar recados |
| POST | /api/recados | Criar recado |
| PUT | /api/recados/{id} | Editar recado |
| DELETE | /api/recados/{id} | Excluir recado |

## Desenvolvido para a disciplina

Desenvolvimento Web III - Fatec
