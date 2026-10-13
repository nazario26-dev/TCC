<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Endpoints de verificação/estrutura (placeholder até implementação de autenticação)
Route::get('/health', fn () => response()->json(['status' => 'ok', 'app' => 'FuniGest']));

// Rotas de estrutura dos módulos (placeholders públicos para desenvolvimento)
$modules = [
    'clientes' => 'Clientes',
    'obras' => 'Obras',
    'catalogo' => 'Catálogo de serviços/peças',
    'orcamentos' => 'Orçamentos',
    'ordens-servico' => 'Ordens de Serviço',
    'agenda' => 'Agenda',
    'estoque' => 'Estoque',
    'financeiro' => 'Financeiro',
];

foreach ($modules as $uri => $label) {
    Route::get('/' . $uri, fn () => "FuniGest — {$label}: estrutura criada (implementação em andamento).");
}
