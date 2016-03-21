<?php

namespace Talal\Exporter\Tests;

use Talal\Exporter\Output\Iis;

class IisTest extends \PHPUnit_Framework_TestCase
{
    public function testGeneratedOutput()
    {
        $data = [
            ['key1', 'key2'],
            ['value1', 'value2']
        ];

        $server = new Iis;
        $output = $server->generate($data[0], $data[1]);

        $expected = <<<EOF
<environmentVariables>
  <environmentVariable name="key1" value="value1"/>
  <environmentVariable name="key2" value="value2"/>
</environmentVariables>
EOF;

        $this->assertEquals($expected, $output);
    }
}
