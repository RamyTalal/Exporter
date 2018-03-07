<?php

namespace Talal\Exporter\Output;

class Nginx extends Output
{
    /**
     * {@inheritdoc}
     */
    public function generate() : string
    {
        $output = '';

        foreach ($this->keys as $key => $match) {
            $output .= sprintf('fastcgi_param %s "%s";', $match, $this->values[$key]).PHP_EOL;
        }

        return rtrim($output, PHP_EOL);
    }
}
