<?php

namespace App\Entity;

use App\Repository\StonetypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StonetypeRepository::class)]
class Stonetype
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\OneToMany(mappedBy: 'stonetype', targetEntity: Stone::class, orphanRemoval: true)]
    private Collection $stones;

    #[ORM\OneToMany(mappedBy: 'type', targetEntity: Product::class)]
    private Collection $products;

    public function __construct()
    {
        $this->stones = new ArrayCollection();
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, Stone>
     */
    public function getStones(): Collection
    {
        return $this->stones;
    }

    public function addStone(Stone $stone): static
    {
        if (!$this->stones->contains($stone)) {
            $this->stones->add($stone);
            $stone->setStonetype($this);
        }

        return $this;
    }

    public function removeStone(Stone $stone): static
    {
        if ($this->stones->removeElement($stone)) {
            // set the owning side to null (unless already changed)
            if ($stone->getStonetype() === $this) {
                $stone->setStonetype(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): static
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->setType($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): static
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getType() === $this) {
                $product->setType(null);
            }
        }

        return $this;
    }
}
