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

    /**
     * Set the output converter.
     *
     * @param Output $output
     */
    public function setOutput(Output $output)
    {
        $this->output = $output;
    }

    /**
     * Return the converted environment variables.
     *
     * @return string
     */
    public function output() : string
    {
        return $this->output->generate();
    }
}
