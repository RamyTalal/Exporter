<?php

namespace Talal\Exporter\Output;

class Iis implements Output
{
    /**
     * @inheritdoc
     */
    public function generate($keys, $values)
    {
        $xml = new \XMLWriter;
        $xml->openMemory();
        $xml->setIndent(true);
        $xml->setIndentString('  ');

        $xml->startElement('environmentVariables');

        foreach ($keys as $key => $match) {
            $xml->startElement('environmentVariable');
            $xml->writeAttribute('name', $match);
            $xml->writeAttribute('value', $values[$key]);
            $xml->endElement();
        }

        $xml->endElement();

        return trim($xml->outputMemory());
    }
}
