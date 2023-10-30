<?php

namespace App\Entity;

use App\Repository\JewelryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JewelryRepository::class)]
class Jewelry
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $poids = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $matiere = null;

    #[ORM\ManyToMany(targetEntity: Stone::class, inversedBy: 'jewelries')]
    private Collection $pierre;

    #[ORM\Column]
    private ?float $Price = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $obs = null;

    #[ORM\Column(length: 255)]
    private ?string $Reference = null;

    public function __construct()
    {
        $this->pierre = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoids(): ?string
    {
        return $this->poids;
    }

    public function setPoids(string $poids): static
    {
        $this->poids = $poids;

        return $this;
    }

    public function getMatiere(): ?string
    {
        return $this->matiere;
    }

    public function setMatiere(?string $matiere): static
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * @return Collection<int, Stone>
     */
    public function getPierre(): Collection
    {
        return $this->pierre;
    }

    public function addPierre(Stone $pierre): static
    {
        if (!$this->pierre->contains($pierre)) {
            $this->pierre->add($pierre);
        }

        return $this;
    }

    public function removePierre(Stone $pierre): static
    {
        $this->pierre->removeElement($pierre);

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->Price;
    }

    public function setPrice(float $Price): static
    {
        $this->Price = $Price;

        return $this;
    }

    public function getObs(): ?string
    {
        return $this->obs;
    }

    public function setObs(?string $obs): static
    {
        $this->obs = $obs;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->Reference;
    }

    public function setReference(string $Reference): static
    {
        $this->Reference = $Reference;

        return $this;
    }
}
