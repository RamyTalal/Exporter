<?php

namespace Talal\Exporter\Output;

class Iis extends Output
{
    /**
     * @inheritdoc
     */
    public function generate() : string
    {
        $xml = new \XMLWriter;
        $xml->openMemory();
        $xml->setIndent(true);
        $xml->setIndentString(sprintf("\t"));

        $xml->startElement('environmentVariables');

        foreach ($this->keys as $key => $match) {
            $xml->startElement('environmentVariable');
            $xml->writeAttribute('name', $match);
            $xml->writeAttribute('value', $this->values[$key]);
            $xml->endElement();
        }

        $xml->endElement();

        return trim($xml->outputMemory());
    }
}
