<?php

namespace Talal\Exporter\Tests\Output;

use Talal\Exporter\Output\Lighttpd;

class LighttpdTest extends \PHPUnit_Framework_TestCase
{
    public function testGeneratedOutput()
    {
        $fileContents = <<<EOF
key1=value1
key2="value2"
EOF;

        $server = new Lighttpd($fileContents);
        $output = $server->generate();

        $expected = <<<EOF
setenv.add-environment = (
	"key1" => "value1",
	"key2" => "value2"
)
EOF;

        $this->assertEquals($expected, $output);
    }
}
