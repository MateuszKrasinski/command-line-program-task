<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItemRepository::class)]
class Item
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "text", nullable: true)]
    private string $categoryName;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private string $sku;

    #[ORM\Column(type: "text", nullable: true)]
    private string $name;

    #[ORM\Column(type: "text", nullable: true)]
    private string $shortDesc;

    #[ORM\Column(type: "decimal", precision: 10, scale: 4, nullable: true)]
    private float $price;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $link = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private string $image;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private string $brand;

    #[ORM\Column(type: "integer", nullable: true)]
    private int $rating;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private string $caffeineType;

    #[ORM\Column(type: "integer", nullable: true)]
    private int $count;

    #[ORM\Column(type: "boolean", nullable: true)]
    private bool $flavored;

    #[ORM\Column(type: "boolean", nullable: true)]
    private bool $seasonal;

    #[ORM\Column(type: "boolean", nullable: true)]
    private bool $instock;

    #[ORM\Column(type: "boolean", nullable: true)]
    private bool $facebook;

    #[ORM\Column(type: "boolean", nullable: true)]
    private bool $isKCup;

    // Getters and setters for the properties
    // Add your implementation here

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getCategoryName(): string
    {
        return $this->categoryName;
    }

    public function setCategoryName(string $categoryName): void
    {
        $this->categoryName = $categoryName;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getShortDesc(): string
    {
        return $this->shortDesc;
    }

    public function setShortDesc(string $shortDesc): void
    {
        $this->shortDesc = $shortDesc;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    public function getCaffeineType(): string
    {
        return $this->caffeineType;
    }

    public function setCaffeineType(string $caffeineType): void
    {
        $this->caffeineType = $caffeineType;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    public function isFlavored(): bool
    {
        return $this->flavored;
    }

    public function setFlavored(bool $flavored): void
    {
        $this->flavored = $flavored;
    }

    public function isSeasonal(): bool
    {
        return $this->seasonal;
    }

    public function setSeasonal(bool $seasonal): void
    {
        $this->seasonal = $seasonal;
    }

    public function isInstock(): bool
    {
        return $this->instock;
    }

    public function setInstock(bool $instock): void
    {
        $this->instock = $instock;
    }

    public function isFacebook(): bool
    {
        return $this->facebook;
    }

    public function setFacebook(bool $facebook): void
    {
        $this->facebook = $facebook;
    }

    public function isKCup(): bool
    {
        return $this->isKCup;
    }

    public function setIsKCup(bool $isKCup): void
    {
        $this->isKCup = $isKCup;
    }


}
