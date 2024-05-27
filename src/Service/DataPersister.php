<?php

namespace App\Service;

use App\Entity\Item;
use App\ValueObject\ItemValueObject;
use Doctrine\ORM\EntityManagerInterface;

class DataPersister implements DataPersisterInterface
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function persist(array $data): void
    {
        if (empty($data)) {
            return;
        }

        foreach ($data as $itemValueObject) {
            if (!$itemValueObject instanceof ItemValueObject) {
                throw new \InvalidArgumentException('Expected instance of ItemValueObject');
            }

            $entity = new Item();
            $entity->setId($itemValueObject->getId());
            $entity->setCategoryName($itemValueObject->getCategoryName());
            $entity->setSku($itemValueObject->getSku());
            $entity->setName($itemValueObject->getName());
            $entity->setShortDesc($itemValueObject->getShortDesc());
            $entity->setPrice($itemValueObject->getPrice());
            $entity->setLink($itemValueObject->getLink());
            $entity->setImage($itemValueObject->getImage());
            $entity->setBrand($itemValueObject->getBrand());
            $entity->setRating($itemValueObject->getRating());
            $entity->setCaffeineType($itemValueObject->getCaffeineType());
            $entity->setCount($itemValueObject->getCount());
            $entity->setFlavored($itemValueObject->isFlavored());
            $entity->setSeasonal($itemValueObject->isSeasonal());
            $entity->setInstock($itemValueObject->isInstock());
            $entity->setFacebook($itemValueObject->isFacebook());
            $entity->setIsKCup($itemValueObject->isKCup());

            $this->entityManager->persist($entity);
        }

        $this->entityManager->flush();
    }
}
