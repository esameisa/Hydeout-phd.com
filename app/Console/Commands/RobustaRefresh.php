<?php

namespace App\Console\Commands;

use Codesleeve\LaravelStapler\Commands\RefreshCommand;


class RobustaRefresh extends RefreshCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'robusta:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Regenerate images for a given model (and optional attachment and styles)';

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
