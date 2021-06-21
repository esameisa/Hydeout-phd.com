<?php

namespace App\Console\Commands;

use Codesleeve\LaravelStapler\Commands\FastenCommand;


class RobustaFasten extends FastenCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'robusta:fasten';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a migration for adding stapler file fields to a database table';

    public function __construct()
    {
        $app = app();
        $migrationsFolderPath = database_path() . '/migrations';

        parent::__construct($app['view'], $app['files'], $migrationsFolderPath);
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        parent::fire();
    }
}
