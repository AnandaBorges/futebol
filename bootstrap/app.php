<?php

use Illuminate\Foundation\Application;

require_once __DIR__.'/../vendor/autoload.php';

// Cria a instância da aplicação Laravel
$app = new Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

// Configura o ambiente da aplicação
$app->configure('app');
$app->configure('cache');
$app->configure('database');

// Registra os service providers principais
// Note que você não precisa registrar manualmente os providers padrões, eles já estão registrados no Laravel
// O Laravel carrega esses providers automaticamente a partir do array 'providers' no config/app.php

// Cria a instância do kernel HTTP
$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

// Cria a instância do kernel Console
$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

// Cria a instância do handler de exceções
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

return $app;
