# Teste Técnico Laravel

Projeto desenvolvido para demonstrar conhecimentos em Laravel, incluindo rotas, controllers, Livewire, Vue.js, Filament e autenticação com Breeze.

## Requisitos

- Docker e Docker Compose
- Ou: PHP 8.3+, Composer, Node.js, PostgreSQL

## Rodando com Docker

```bash
# Subir os containers
docker-compose up -d

# Rodar migrations
docker-compose exec app php artisan migrate

# Criar usuário admin
docker-compose exec app php artisan tinker --execute="
App\Models\User::create([
    'name' => 'Admin',
    'email' => 'admin@admin.com',
    'password' => bcrypt('password')
]);
"

# Acessar
# http://localhost:8000
```

## Rodando Localmente

```bash
# Instalar dependências
composer install
npm install

# Configurar .env
cp .env.example .env
php artisan key:generate

# Subir banco (se estiver usando o container só do postgres)
docker start postgres

# Rodar migrations
php artisan migrate

# Criar admin
php artisan tinker
# Depois rode: App\Models\User::create(['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => bcrypt('password')]);

# Rodar aplicação
php artisan serve
npm run dev

# Acessar
# http://localhost:8000
```

## O que tem aqui

**Página inicial (`/`)**
Lista com links para todos os desafios.

**Desafio 2 - Blade básico (`/bemvindo`)**
Página simples com nome e data/hora formatada usando Carbon.

**Desafio 3 - Livewire (`/tarefas`)**
Lista de tarefas interativa. Marque/desmarque sem reload de página.

**Desafio 4 - Vue.js (`/produtos`)**
Lista de produtos com busca em tempo real usando Vue 3.

**Desafio 5 - Filament (`/admin`)**
Painel admin completo com CRUD de usuários, filtros e validações.
Login: `admin@admin.com` / `password`

**Desafio 6 - Breeze (`/dashboard`)**
Área autenticada com lista de usuários. Precisa fazer login.

## Tecnologias

- Laravel 12
- PHP 8.3
- PostgreSQL 16
- Livewire 3
- Vue.js 3
- Filament 3
- Breeze (autenticação)
- Tailwind CSS v4
- Vite


## Credenciais

**Admin (Filament e Breeze):**
E-mail: `admin@admin.com`
Senha: `password`

Ou crie um novo usuário em `/register`
