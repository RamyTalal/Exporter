<?php

namespace Talal\Exporter\Output;

abstract class Output
{
    /**
     * @var array
     */
    protected $keys = [];

    /**
     * @var array
     */
    protected $values = [];

    /**
     * @param string $fileContents
     */
    public function __construct($fileContents)
    {
        $this->parse($fileContents);
    }

    public function parse($fileContents)
    {
        preg_match_all('/(\w+)="?(.*)(?<!")/', $fileContents, $matches);

        $this->keys = $matches[1];
        $this->values = $matches[2];
    }

    /**
     * Generate a capable web server format.
     *
     * @return string
     */
    abstract public function generate();
}
