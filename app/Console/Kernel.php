<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
        \App\Console\Commands\OrderCleanUp::class,
        \App\Console\Commands\RegistrationCleanUp::class,

        \App\Console\Commands\ModifyProduct::class,
        \App\Console\Commands\UploadProduct::class,
        \App\Console\Commands\UpdateDeal::class,
        \App\Console\Commands\UpdateCategory::class,

    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        /*
        $schedule->command('order:clean')
                 ->daily();

        $schedule->command('registration:clean')
                  ->daily();
        */
    }
}
