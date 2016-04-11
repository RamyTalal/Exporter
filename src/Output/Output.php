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
     * @param array $keys
     * @param array $values
     */
    public function __construct(array $keys, array $values)
    {
        $this->keys = $keys;
        $this->values = $values;
    }

    /**
     * Generate a capable web server format.
     *
     * @return string
     */
    abstract public function generate();
}
