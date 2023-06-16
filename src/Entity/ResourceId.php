<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;


//this trait for id of entity(article/user....)
Trait ResourceId{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}