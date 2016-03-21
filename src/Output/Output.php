<?php

namespace Talal\Exporter\Output;

interface Output
{
    /**
     * Generate a capable web server format.
     *
     * @param $keys
     * @param $values
     *
     * @return string
     */
    public function generate($keys, $values);
}
