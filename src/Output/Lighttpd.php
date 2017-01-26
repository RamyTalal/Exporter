<?php

namespace Talal\Exporter\Output;

class Lighttpd extends Output
{
    /**
     * @inheritdoc
     */
    public function generate() : string
    {
        $lines = [];

        foreach ($this->keys as $key => $match) {
            $lines[] = sprintf("\t\"%s\" => \"%s\"", $match, $this->values[$key]);
        }

        $output = 'setenv.add-environment = (' . PHP_EOL;
        $output .= implode(',' . PHP_EOL, $lines);
        $output .= PHP_EOL . ')';

        return $output;
    }
}
