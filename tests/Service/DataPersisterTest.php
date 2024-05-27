<?php

namespace App\Tests\Service;

use App\Service\DataPersister;
use PHPUnit\Framework\TestCase;

use Doctrine\ORM\EntityManagerInterface;
use App\ValueObject\ItemValueObject;

class DataPersisterTest extends TestCase
{
    public function testPersistWithEmptyData()
    {
        $entityManager = $this->createMock(EntityManagerInterface::class);
        $entityManager->expects($this->never())->method('persist');
        $entityManager->expects($this->never())->method('flush');

        $dataPersister = new DataPersister($entityManager);
        $dataPersister->persist([]);
    }

    public function testPersistWithInvalidData()
    {
        $entityManager = $this->createMock(EntityManagerInterface::class);
        $entityManager->expects($this->never())->method('persist');
        $entityManager->expects($this->never())->method('flush');

        $dataPersister = new DataPersister($entityManager);
        $this->expectException(\InvalidArgumentException::class);
        $dataPersister->persist(['invalid_data']);
    }

    public function testPersistWithSingleItem()
    {
        $entityManager = $this->createMock(EntityManagerInterface::class);
        $entityManager->expects($this->once())->method('persist');
        $entityManager->expects($this->once())->method('flush');

        $itemValueObject = new ItemValueObject(
            1, 'Category 1', 'SKU001', 'Item 1', 'Description 1', 10.99,
            'http://example.com/item1', 'image1.jpg', 'Brand 1', 4, 'Regular', 100,
            true, false, true, false, true
        );

        $dataPersister = new DataPersister($entityManager);
        $dataPersister->persist([$itemValueObject]);
    }
}

