<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

// Um comando simples que exibe uma mensagem inspiradora
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

// Definindo um comando customizado
Artisan::command('equipes:sorteio', function () {
    // Exemplo de lógica de sorteio de equipes
    $this->info('Iniciando o sorteio das equipes...');

    // Adicione a lógica real para o sorteio das equipes aqui
    // Se você estiver usando um serviço para a lógica, pode ser algo assim:
    // app(\App\Services\EquipeSorteioService::class)->sortearEquipes();

    $this->info('Sorteio das equipes realizado com sucesso!');
})->describe('Realiza o sorteio das equipes');
