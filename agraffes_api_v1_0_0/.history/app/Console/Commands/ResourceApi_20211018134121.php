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


    protected function getStub()
    {
        return __DIR__ . '/stubs/resourceApi.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        //注意保存的目录,我这里把Repository目录放在了Http下,可以根据自己的习惯自定义
        return $rootNamespace . '\Http\Controllers';
    }
}
