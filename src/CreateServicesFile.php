<?php

namespace Ophaant\Ctmartisan;

use Illuminate\Console\GeneratorCommand;

class CreateServicesFile extends GeneratorCommand
{
    /**
     * The name of your command.
     * This is how your Artisan's command shall be invoked.
     */
    protected $name = 'make:service';

    /**
     * A short description of the command's purpose.
     * You can see this working by executing
     * php artisan list
     */
    protected $description = 'Create a Service Class file';


    /**
     * Class type that is being created.
     * If command is executed successfully you'll receive a
     * message like this: $type created succesfully.
     * If the file you are trying to create already
     * exists, you'll receive a message
     * like this: $type already exists!
     */
    protected $type = 'Service';

    /**
     * Specify your Stub's location.
     */
    protected function getStub()
    {
        return   __DIR__. '/stubs/service.stub';
    }

    /**
     * The root location where your new file should
     * be written to.
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Services';
    }

    public function replaceClass($stub, $name)
    {
        $stub = parent::replaceClass($stub, $name);

        return str_replace("DummyReport", $this->argument('name'), $stub);
    }
}
