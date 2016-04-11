<?php

namespace Talal\Exporter\Tests\Output;

use Talal\Exporter\Output\Apache;

class ApacheTest extends \PHPUnit_Framework_TestCase
{
    public function testGeneratedOutput()
    {
        $data = [
            ['key1', 'key2'],
            ['value1', 'value2']
        ];

        $server = new Apache($data[0], $data[1]);
        $output = $server->generate();

        $expected = <<<EOF
SetEnv key1 "value1"
SetEnv key2 "value2"
EOF;

        $this->assertEquals($expected, $output);
    }
}
