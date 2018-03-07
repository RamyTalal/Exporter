<?php

namespace Talal\Exporter\Tests\Output;

use PHPUnit\Framework\TestCase;
use Talal\Exporter\Output\Iis;

class IisTest extends TestCase
{
    public function testGeneratedOutput()
    {
        $fileContents = <<<EOF
key1=value1
key2="value2"
EOF;

        $server = new Iis($fileContents);
        $output = $server->generate();

        $expected = <<<EOF
<environmentVariables>
	<environmentVariable name="key1" value="value1"/>
	<environmentVariable name="key2" value="value2"/>
</environmentVariables>
EOF;

        $this->assertEquals($expected, $output);
    }
}
