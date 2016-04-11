<?php

namespace Talal\Exporter\Tests;

use Talal\Exporter\Exporter;
use Talal\Exporter\Output\Nginx;

class ExporterTest extends \PHPUnit_Framework_TestCase
{
    public function testHasValidOutput()
    {
        $data = [
            ['key1', 'key2'],
            ['value1', 'value2']
        ];

        $exporter = new Exporter(new Nginx($data[0], $data[1]));
        $expected = <<<EOF
fastcgi_param key1 "value1";
fastcgi_param key2 "value2";
EOF;

        $this->assertEquals($expected, $exporter->output());
    }

    public function testHasValidEnvironment()
    {
        $fileContents = <<<EOF
key1=value1
key2="value2"
EOF;

        preg_match_all('/(\w+)="?(.*)(?<!")/', $fileContents, $matches);

        $exporter = new Exporter(new Nginx($matches[1], $matches[2]));
        $expected = <<<EOF
fastcgi_param key1 "value1";
fastcgi_param key2 "value2";
EOF;

        $this->assertEquals($expected, $exporter->output());
    }
}
