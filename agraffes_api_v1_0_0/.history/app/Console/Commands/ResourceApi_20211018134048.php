<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class ResourceApiMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:resourceApi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new resourceApi class';

    protected $type = 'resourceApi';
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
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
