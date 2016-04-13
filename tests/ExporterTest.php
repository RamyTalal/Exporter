<?php

namespace Talal\Exporter\Tests;

use Talal\Exporter\Exporter;
use Talal\Exporter\Output\Nginx;

class ExporterTest extends \PHPUnit_Framework_TestCase
{
    public function testHasValidEnvironment()
    {
        $fileContents = <<<EOF
key1=value1
key2="value2"
EOF;

        $exporter = new Exporter(new Nginx($fileContents));
        $expected = <<<EOF
fastcgi_param key1 "value1";
fastcgi_param key2 "value2";
EOF;

        $this->assertEquals($expected, $exporter->output());
    }
}
