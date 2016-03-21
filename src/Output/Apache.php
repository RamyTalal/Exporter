<?php

namespace Talal\Exporter\Output;

class Apache implements Output
{
    /**
     * @inheritdoc
     */
    public function generate($keys, $values)
    {
        $output = '';

        foreach ($keys as $key => $match) {
            $output .= sprintf('SetEnv %s "%s"', $match, $values[$key]) . PHP_EOL;
        }

        return rtrim($output, PHP_EOL);
    }
}
