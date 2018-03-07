<?php

namespace Talal\Exporter\Tests\Output;

use PHPUnit\Framework\TestCase;
use Talal\Exporter\Output\Apache;

class ApacheTest extends TestCase
{
    public function testGeneratedOutput()
    {
        $fileContents = <<<'EOF'
key1=value1
key2="value2"
EOF;

        $server = new Apache($fileContents);
        $output = $server->generate();

        $expected = <<<'EOF'
SetEnv key1 "value1"
SetEnv key2 "value2"
EOF;

        $this->assertEquals($expected, $output);
    }
}
