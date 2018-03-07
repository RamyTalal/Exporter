<?php

namespace Talal\Exporter\Output;

class Apache extends Output
{
    /**
     * {@inheritdoc}
     */
    public function generate() : string
    {
        $output = '';

        foreach ($this->keys as $key => $match) {
            $output .= sprintf('SetEnv %s "%s"', $match, $this->values[$key]).PHP_EOL;
        }

        return rtrim($output, PHP_EOL);
    }
}
