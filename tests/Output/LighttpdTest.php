<?php

namespace Talal\Exporter\Tests;

use Talal\Exporter\Output\Lighttpd;

class LighttpdTest extends \PHPUnit_Framework_TestCase
{
    public function testGeneratedOutput()
    {
        $data = [
            ['key1', 'key2'],
            ['value1', 'value2']
        ];

        $server = new Lighttpd;
        $output = $server->generate($data[0], $data[1]);

        $expected = <<<EOF
setenv.add-environment = (
  "key1" => "value1",
  "key2" => "value2"
)
EOF;

        $this->assertEquals($expected, $output);
    }
}
