<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CharacterRepository::class)
 * @ORM\Table(name="`character`")
 */
class Character
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $realName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sex;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $heroName;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $story;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isNasty;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $strength;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $weakness;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $url;

    /**
     * @ORM\ManyToMany(targetEntity=Power::class, inversedBy="characters")
     */
    private $power;

    /**
     * @ORM\ManyToMany(targetEntity=Equipment::class, inversedBy="characters")
     */
    private $equipment;

    public function __construct()
    {
        $this->power = new ArrayCollection();
        $this->equipment = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRealName(): ?string
    {
        return $this->realName;
    }

    public function setRealName(?string $realName): self
    {
        $this->realName = $realName;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(?string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getHeroName(): ?string
    {
        return $this->heroName;
    }

    public function setHeroName(?string $heroName): self
    {
        $this->heroName = $heroName;

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

    public function getStory(): ?string
    {
        return $this->story;
    }

    public function setStory(?string $story): self
    {
        $this->story = $story;

        return $this;
    }

    public function getIsNasty(): ?bool
    {
        return $this->isNasty;
    }

    public function setIsNasty(bool $isNasty): self
    {
        $this->isNasty = $isNasty;

        return $this;
    }

    public function getStrength(): ?string
    {
        return $this->strength;
    }

    public function setStrength(string $strength): self
    {
        $this->strength = $strength;

        return $this;
    }

    public function getWeakness(): ?string
    {
        return $this->weakness;
    }

    public function setWeakness(string $weakness): self
    {
        $this->weakness = $weakness;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return Collection|Power[]
     */
    public function getPower(): Collection
    {
        return $this->power;
    }

    public function addPower(Power $power): self
    {
        if (!$this->power->contains($power)) {
            $this->power[] = $power;
        }

        return $this;
    }

    public function removePower(Power $power): self
    {
        $this->power->removeElement($power);

        return $this;
    }

    /**
     * @return Collection|Equipment[]
     */
    public function getEquipment(): Collection
    {
        return $this->equipment;
    }

    public function addEquipment(Equipment $equipment): self
    {
        if (!$this->equipment->contains($equipment)) {
            $this->equipment[] = $equipment;
        }

        return $this;
    }

    public function removeEquipment(Equipment $equipment): self
    {
        $this->equipment->removeElement($equipment);

        return $this;
    }
}
