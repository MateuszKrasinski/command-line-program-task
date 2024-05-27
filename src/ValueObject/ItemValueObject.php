<?php

namespace App\ValueObject;

class ItemValueObject
{
    private ?int $id;
    private ?string $categoryName;
    private ?string $sku;
    private ?string $name;
    private ?string $shortDesc;
    private ?float $price;
    private ?string $link;
    private ?string $image;
    private ?string $brand;
    private ?int $rating;
    private ?string $caffeineType;
    private ?int $count;
    private ?bool $flavored;
    private ?bool $seasonal;
    private ?bool $instock;
    private ?bool $facebook;
    private ?bool $isKCup;

    public function __construct(
        ?int $id,
        ?string $categoryName,
        ?string $sku,
        ?string $name,
        ?string $shortDesc,
        ?float $price,
        ?string $link,
        ?string $image,
        ?string $brand,
        ?int $rating,
        ?string $caffeineType,
        ?int $count,
        ?bool $flavored,
        ?bool $seasonal,
        ?bool $instock,
        ?bool $facebook,
        ?bool $isKCup
    ) {
        $this->validate($id, $categoryName, $sku, $name, $shortDesc, $price, $link, $image, $brand, $rating, $caffeineType, $count, $flavored, $seasonal, $instock, $facebook, $isKCup);

        $this->id = $id;
        $this->categoryName = $categoryName;
        $this->sku = $sku;
        $this->name = $name;
        $this->shortDesc = $shortDesc;
        $this->price = $price;
        $this->link = $link;
        $this->image = $image;
        $this->brand = $brand;
        $this->rating = $rating;
        $this->caffeineType = $caffeineType;
        $this->count = $count;
        $this->flavored = $flavored;
        $this->seasonal = $seasonal;
        $this->instock = $instock;
        $this->facebook = $facebook;
        $this->isKCup = $isKCup;
    }

    private function validate(
        ?int $id,
        ?string $categoryName,
        ?string $sku,
        ?string $name,
        ?string $shortDesc,
        ?float $price,
        ?string $link,
        ?string $image,
        ?string $brand,
        ?int $rating,
        ?string $caffeineType,
        ?int $count,
        ?bool $flavored,
        ?bool $seasonal,
        ?bool $instock,
        ?bool $facebook,
        ?bool $isKCup
    ): void {
        if ($id !== null && $id <= 0) {
            throw new \InvalidArgumentException('Invalid ID');
        }
        if ($price !== null && $price < 0) {
            throw new \InvalidArgumentException('Invalid price');
        }
        if ($rating !== null && ($rating < 0 || $rating > 5)) {
            throw new \InvalidArgumentException('Invalid rating');
        }
        if ($count !== null && $count < 0) {
            throw new \InvalidArgumentException('Invalid count');
        }

        // and so on
    }

    // Getters
    public function getId(): ?int { return $this->id; }
    public function getCategoryName(): ?string { return $this->categoryName; }
    public function getSku(): ?string { return $this->sku; }
    public function getName(): ?string { return $this->name; }
    public function getShortDesc(): ?string { return $this->shortDesc; }
    public function getPrice(): ?float { return $this->price; }
    public function getLink(): ?string { return $this->link; }
    public function getImage(): ?string { return $this->image; }
    public function getBrand(): ?string { return $this->brand; }
    public function getRating(): ?int { return $this->rating; }
    public function getCaffeineType(): ?string { return $this->caffeineType; }
    public function getCount(): ?int { return $this->count; }
    public function isFlavored(): ?bool { return $this->flavored; }
    public function isSeasonal(): ?bool { return $this->seasonal; }
    public function isInstock(): ?bool { return $this->instock; }
    public function isFacebook(): ?bool { return $this->facebook; }
    public function isKCup(): ?bool { return $this->isKCup; }
}
