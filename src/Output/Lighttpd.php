<?php

namespace Talal\Exporter\Output;

class Lighttpd implements Output
{
    /**
     * @inheritdoc
     */
    public function generate($keys, $values)
    {
        $lines = [];

        foreach ($keys as $key => $match) {
            $lines[] = sprintf('  "%s" => "%s"', $match, $values[$key]);
        }

        $output = 'setenv.add-environment = (' . PHP_EOL;
        $output .= implode(',' . PHP_EOL, $lines);
        $output .= PHP_EOL . ')';

        return $output;
    }
}
