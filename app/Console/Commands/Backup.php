<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Backup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Backup {name=Flexerp} {--T|tablename=all}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Making a backup of your database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $table = $this->option('tablename');
        $name = $this->argument('name');
        $this->info($name.''.$table);
    }
}
