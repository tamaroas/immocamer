<?php

namespace App\Entity;

use App\Repository\UserGroupRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserGroupRepository::class)
 */
class UserGroup
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
    private $name_group;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $role_group;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameGroup(): ?string
    {
        return $this->name_group;
    }

    public function setNameGroup(string $name_group): self
    {
        $this->name_group = $name_group;

        return $this;
    }

    public function getRoleGroup(): ?string
    {
        return $this->role_group;
    }

    public function setRoleGroup(?string $role_group): self
    {
        $this->role_group = $role_group;

        return $this;
    }
}
