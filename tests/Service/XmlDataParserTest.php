<?php

namespace App\Tests\Service;

use App\Service\XmlDataParser;
use App\ValueObject\ItemValueObject;
use PHPUnit\Framework\TestCase;

class XmlDataParserTest extends TestCase
{
    public function testParseWithValidXml()
    {
        $parser = new XmlDataParser();
        $parsedData = $parser->parse();
        $this->assertIsArray($parsedData);
        foreach ($parsedData as $item) {
            $this->assertInstanceOf(ItemValueObject::class, $item);
        }
    }

    public function testParseWithInvalidXml()
    {
        $xmlLoader = function ($file) {
            return false;
        };

        $parser = new XmlDataParser($xmlLoader);
        $this->expectException(\Exception::class);

        $parser->parse();
    }
}
