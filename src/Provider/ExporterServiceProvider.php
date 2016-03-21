<?php

namespace Talal\Exporter\Provider;

use Illuminate\Support\ServiceProvider;
use Talal\Exporter\Console\Command\Export;

class ExporterServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.talal.export.env', function ($app) {
            return $app[Export::class];
        });
        $this->commands('command.talal.export.env');
    }
}