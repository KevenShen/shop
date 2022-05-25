<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class ResourceApiMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *添加命令的名字
     * @var string
     */
    protected $name = 'make:resourceApi';

    /**
     * The console command description.
     *命令的描述
     * @var string
     */
    protected $description = 'Create a new resourceApi class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'resourceApi';

    /**
     * Get the stub file for the generator.
     *执行命令后将创建内容的模板
     * @return string
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
        return $rootNamespace . '\App\Http\Controllers';
    }
}