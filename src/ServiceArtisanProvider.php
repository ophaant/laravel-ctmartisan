<?php

namespace Ophaant\Ctmartisan;

use Illuminate\Support\ServiceProvider;
use Ophaant\Ctmartisan\CreateServicesFile;
class ServiceArtisanProvider extends ServiceProvider
{

    public function register():void
    {
//        if ($this->app->runningInConsole()) {
            $this->commands(CreateServicesFile::class);
//        }
    }
}
