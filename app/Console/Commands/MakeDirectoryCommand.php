<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class MakeDirectoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:directory';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create the directory for storing profile pictures';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $directory = 'public/profile_pictures';

        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
            $this->info("Directory '$directory' created successfully.");
        } else {
            $this->info("Directory '$directory' already exists.");
        }

        return 0;
    }
}