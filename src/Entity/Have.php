<?php

namespace App\Entity;

use App\Repository\HaveRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HaveRepository::class)]
class Have
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?song $idxSong = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?user $idxUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdxSong(): ?song
    {
        return $this->idxSong;
    }

    public function setIdxSong(?song $idxSong): static
    {
        $this->idxSong = $idxSong;

        return $this;
    }

    public function getIdxUser(): ?user
    {
        return $this->idxUser;
    }

    public function setIdxUser(?user $idxUser): static
    {
        $this->idxUser = $idxUser;

        return $this;
    }
}
