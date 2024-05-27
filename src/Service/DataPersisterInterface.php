<?php

namespace App\Service;

interface DataPersisterInterface
{
    public function persist(array $data): void;

}