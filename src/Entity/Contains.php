<?php

namespace App\Entity;

use App\Repository\ContainsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContainsRepository::class)]
class Contains
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?album $idxAlbum = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?song $idxSong = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdxAlbum(): ?album
    {
        return $this->idxAlbum;
    }

    public function setIdxAlbum(?album $idxAlbum): static
    {
        $this->idxAlbum = $idxAlbum;

        return $this;
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
}
