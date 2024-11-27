<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckDatabaseConnection extends Command
{
    protected $signature = 'check:database-connection';

    protected $description = 'Check the database connection';

    public function handle()
    {
        try {
            $pdo = DB::connection()->getPdo();
            $this->info('The database connection is working.');
        } catch (\PDOException $e) {
            $this->error('The database connection failed: '.$e->getMessage());
        }
    }
}
