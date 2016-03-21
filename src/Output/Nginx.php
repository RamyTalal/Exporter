<?php

namespace Talal\Exporter\Output;

class Nginx implements Output
{
    /**
     * @inheritdoc
     */
    public function generate($keys, $values)
    {
        $output = '';

        foreach ($keys as $key => $match) {
            $output .= sprintf('fastcgi_param %s "%s";', $match, $values[$key]) . PHP_EOL;
        }

        return rtrim($output, PHP_EOL);
    }
}