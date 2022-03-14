<?php

namespace App\Entity;

use App\Repository\RegionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RegionRepository::class)
 */
class Region
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name_region;

    /**
     * @ORM\Column(type="float")
     */
    private $surface;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number_inhabitant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameRegion(): ?string
    {
        return $this->name_region;
    }

    public function setNameRegion(string $name_region): self
    {
        $this->name_region = $name_region;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(float $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNumberInhabitant(): ?int
    {
        return $this->number_inhabitant;
    }

    public function setNumberInhabitant(?int $number_inhabitant): self
    {
        $this->number_inhabitant = $number_inhabitant;

        return $this;
    }
}
