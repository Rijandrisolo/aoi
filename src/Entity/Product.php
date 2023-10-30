<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $product = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Stone $stone = null;

    #[ORM\Column]
    private ?float $carat = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Obs = null;

    #[ORM\Column(nullable: true)]
    private ?int $top = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    private ?Stonetype $type = null;

    #[ORM\Column(length: 255)]
    private ?string $reference = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(string $product): static
    {
        $this->product = $product;

        return $this;
    }

    public function getStone(): ?Stone
    {
        return $this->stone;
    }

    public function setStone(?Stone $stone): static
    {
        $this->stone = $stone;

        return $this;
    }

    public function getCarat(): ?float
    {
        return $this->carat;
    }

    public function setCarat(float $carat): static
    {
        $this->carat = $carat;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getObs(): ?string
    {
        return $this->Obs;
    }

    public function setObs(?string $Obs): static
    {
        $this->Obs = $Obs;

        return $this;
    }

    public function getTop(): ?int
    {
        return $this->top;
    }

    public function setTop(?int $top): static
    {
        $this->top = $top;

        return $this;
    }

    public function getType(): ?Stonetype
    {
        return $this->type;
    }

    public function setType(?Stonetype $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }
}
