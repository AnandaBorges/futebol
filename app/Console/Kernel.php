<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        // Register your commands here
    ];

    protected function schedule(Schedule $schedule)
    {
        // Schedule your commands here
    }

    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
