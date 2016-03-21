<?php

namespace Talal\Exporter\Console\Command;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class Export extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'env:export {server : A supported web server} 
                                       {--file=.env : The environment file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export the environment file to a capable web server format.';

    /**
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $filesystem;

    /**
     * Create a new export command instance.
     *
     * @param \Illuminate\Filesystem\Filesystem $filesystem
     */
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $fileContents = $this->filesystem->get(
            $this->laravel->basePath() . '/' . $this->option('file')
        );

        $this->export($fileContents);
    }

    /**
     * Export the environment file.
     *
     * @param $fileContents
     * @return int
     */
    protected function export($fileContents)
    {
        $server = strtolower($this->argument('server'));
        $server = 'Talal\\Exporter\\Output\\' . ucfirst($server);

        if (! class_exists($server)) {
            $this->error('The provided server is not exportable.');
            return 0;
        }

        preg_match_all('/([a-zA-z0-9]+)="(.+)"/', $fileContents, $matches);

        $exporter = new $server();
        $this->line($exporter->generate($matches[1], $matches[2]));
    }
}
