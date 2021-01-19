<?php

namespace App\Entity;

use App\Repository\FactuurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactuurRepository::class)
 */
class Factuur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $factuur_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFactuurDate(): ?\DateTimeInterface
    {
        return $this->factuur_date;
    }

    public function setFactuurDate(\DateTimeInterface $factuur_date): self
    {
        $this->factuur_date = $factuur_date;

        return $this;
    }
}
