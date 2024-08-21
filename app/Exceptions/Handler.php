<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    // Outros métodos e propriedades...

    public function report(Throwable $e)
    {
        // Lógica de relatório
    }

    // Outros métodos...
}
