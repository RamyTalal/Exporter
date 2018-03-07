<?php

namespace Talal\Exporter\Tests\Output;

use PHPUnit\Framework\TestCase;
use Talal\Exporter\Output\Bash;

class BashTest extends TestCase
{
    public function testGeneratedOutput()
    {
        $fileContents = <<<EOF
key1=value1
key2="value2"
EOF;

        $server = new Bash($fileContents);
        $output = $server->generate();

        $expected = <<<EOF
export key1="value1"
export key2="value2"
EOF;

        $this->assertEquals($expected, $output);
    }
}
