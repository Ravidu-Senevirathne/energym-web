<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckTrainerRole;
use App\Http\Middleware\CheckMemberRequirement;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [

    Commands\MakeDirectoryCommand::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Define your scheduled tasks here...
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {

        $this->load(__DIR__.'/Commands');


        require base_path('routes/console.php');
    }
protected $routeMiddleware = [

    'auth.check' => \App\Http\Middleware\AuthenticateUser::class,
    'user' => \App\Http\Middleware\CheckLogin::class,
    'trainer.role' => \App\Http\Middleware\CheckTrainerRole::class,
     'checkMemberRequirement' => \App\Http\Middleware\CheckMemberRequirement::class,
      'checkAuthAfterLogout' => \App\Http\Middleware\CheckAuthAfterLogout::class,
];

}
