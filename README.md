# FuniGest

Repositório do TCC — **FuniGest**: gerenciador de funilaria civil (calhas, rufos, coifas, dutos etc.).

## Estrutura
- `PRD.md` — Documento de Requisitos do Produto.
- Projeto Laravel 10 (PHP 8.1 + MySQL 8).

## Requisitos
- PHP >= 8.1 (com extensões bcmath, mbstring, pdo_mysql, xml, zip)
- Composer 2.x
- MySQL 8 / MariaDB
- Node.js + npm (para assets front-end)

## Instalação (desenvolvimento)
```bash
cp .env.example .env
# ajuste DB_DATABASE, DB_USERNAME, DB_PASSWORD no .env
composer install
php artisan key:generate
php artisan migrate
npm install
npm run build
php artisan serve
```

## Módulos (MVP)
Clientes, Obras, Catálogo, Orçamentos, Ordens de Serviço, Agenda, Estoque, Financeiro, Fotos/Documentos.

## Observações
- Requer extensão PHP `bcmath` em produção.
- Emissão de NF fora do MVP (controle interno por recibos).
- Autenticação (login) será implementada em seguida (Breeze/Jetstream).
