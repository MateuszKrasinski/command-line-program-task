<?php

namespace App\Service;


use App\ValueObject\ItemValueObject;

readonly class XmlDataParser implements DataParserInterface {

    public function __construct(private string $fileLocation)
    {
    }

    public function parse(): array {
        $xmlData = simplexml_load_file($this->fileLocation);
        if ($xmlData === false) {
            throw new \Exception('Failed to load XML data');
        }

        $parsedData = [];
        foreach ($xmlData->item as $item) {
            $parsedData[] = new ItemValueObject(
                (int) $item->entity_id,
                (string) $item->CategoryName,
                (string) $item->sku,
                (string) $item->names,
                (string) $item->shortdesc,
                (float) $item->price,
                (string) $item->link,
                (string) $item->image,
                (string) $item->Brand,
                (int) $item->Rating,
                (string) $item->CaffeineType,
                (int) $item->Count,
                (bool) $item->Flavored,
                (bool) $item->Seasonal,
                (bool) $item->Instock,
                (bool) $item->Facebook,
                (bool) $item->IsKCup
            );
        }

        return $parsedData;
    }
}
