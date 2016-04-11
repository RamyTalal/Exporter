<?php

namespace Talal\Exporter\Tests\Output;

use Talal\Exporter\Output\Nginx;

class NginxTest extends \PHPUnit_Framework_TestCase
{
    public function testGeneratedOutput()
    {
        $data = [
            ['key1', 'key2'],
            ['value1', 'value2']
        ];

        $server = new Nginx($data[0], $data[1]);
        $output = $server->generate();

        $expected = <<<EOF
fastcgi_param key1 "value1";
fastcgi_param key2 "value2";
EOF;

        $this->assertEquals($expected, $output);
    }
}
