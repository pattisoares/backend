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

## Como executar o projeto

### 1. Clonar o repositório

```bash
git clone https://github.com/pattisoares/backend.git
```

### 2. Instalar as dependências

```bash
composer install
```

### 3. Configurar o arquivo .env

```bash
cp .env.example .env
```

Edite o arquivo `.env` com as configurações do seu banco de dados.

### 4. Gerar a chave da aplicação

```bash
php artisan key:generate
```

### 5. Executar as migrations

```bash
php artisan migrate
```

### 6. Iniciar o servidor

```bash
php artisan serve
```

A API estará disponível em:

```
http://127.0.0.1:8000
```

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
