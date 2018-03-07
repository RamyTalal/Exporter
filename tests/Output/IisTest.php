<?php

namespace Talal\Exporter\Tests\Output;

use Talal\Exporter\Output\Iis;
use PHPUnit\Framework\TestCase;

class IisTest extends TestCase
{
    public function testGeneratedOutput()
    {
        $fileContents = <<<'EOF'
key1=value1
key2="value2"
EOF;

        $server = new Iis($fileContents);
        $output = $server->generate();

        $expected = <<<'EOF'
<environmentVariables>
	<environmentVariable name="key1" value="value1"/>
	<environmentVariable name="key2" value="value2"/>
</environmentVariables>
EOF;

        $this->assertEquals($expected, $output);
    }
}
