<?php

namespace Talal\Exporter;

use Talal\Exporter\Output\Output;

class Exporter
{
    /**
     * @var Output
     */
    protected $output;

    /**
     * Export constructor.
     *
     * @param Output $output
     */
    public function __construct(Output $output)
    {
        $this->setOutput($output);
    }

    public function setOutput(Output $output)
    {
        $this->output = $output;
    }

    public function output()
    {
        return $this->output->generate();
    }
}
