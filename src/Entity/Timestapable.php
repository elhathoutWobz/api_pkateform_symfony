<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

trait Timestapable
{
    /**
     * @var \DateTimeInterface|null
     */
    #[ORM\Column(type:"datetime")]

    private \DateTimeInterface $createdAt;

    /**
     * @var \DateTimeInterface|null
     */
    #[ORM\Column(type:"datetime",nullable: true)]

    private ?\DateTimeInterface $updatedAt;
    //groups for methods
    #[Groups(['user:read'])]
    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
