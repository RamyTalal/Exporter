<?php

namespace Talal\Exporter;

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
        $this->app->bind('command.talal.export.env', Export::class);
        $this->commands('command.talal.export.env');
    }
}
