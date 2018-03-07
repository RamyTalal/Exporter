<?php

namespace Talal\Exporter\Tests\Output;

use PHPUnit\Framework\TestCase;
use Talal\Exporter\Output\Nginx;

class NginxTest extends TestCase
{
    public function testGeneratedOutput()
    {
        $fileContents = <<<'EOF'
key1=value1
key2="value2"
EOF;

        $server = new Nginx($fileContents);
        $output = $server->generate();

        $expected = <<<'EOF'
fastcgi_param key1 "value1";
fastcgi_param key2 "value2";
EOF;

        $this->assertEquals($expected, $output);
    }
}
