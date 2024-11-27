<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CreateProfilePicturesDirectory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'directory:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create profile_pictures directory in storage/public';

    /**
     * Execute the console command.
     *
     * @return mixed
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
    }
}