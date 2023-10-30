<?php

namespace App\Entity;

use App\Repository\StoneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StoneRepository::class)]
class Stone
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $stone = null;

    #[ORM\ManyToOne(inversedBy: 'stones')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Stonetype $stonetype = null;

    #[ORM\ManyToMany(targetEntity: Jewelry::class, mappedBy: 'pierre')]
    private Collection $jewelries;

    public function __construct()
    {
        $this->jewelries = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStone(): ?string
    {
        return $this->stone;
    }

    public function setStone(string $stone): static
    {
        $this->stone = $stone;

        return $this;
    }

    public function getStonetype(): ?Stonetype
    {
        return $this->stonetype;
    }

    public function setStonetype(?Stonetype $stonetype): static
    {
        $this->stonetype = $stonetype;

        return $this;
    }

    /**
     * @return Collection<int, Jewelry>
     */
    public function getJewelries(): Collection
    {
        return $this->jewelries;
    }

    public function addJewelry(Jewelry $jewelry): static
    {
        if (!$this->jewelries->contains($jewelry)) {
            $this->jewelries->add($jewelry);
            $jewelry->addPierre($this);
        }

        return $this;
    }

    public function removeJewelry(Jewelry $jewelry): static
    {
        if ($this->jewelries->removeElement($jewelry)) {
            $jewelry->removePierre($this);
        }

        return $this;
    }
}
