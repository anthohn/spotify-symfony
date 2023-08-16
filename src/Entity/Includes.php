<?php

namespace App\Entity;

use App\Repository\IncludesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IncludesRepository::class)]
class Includes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Playlist $idxPlaylist = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?song $idxSong = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdxPlaylist(): ?Playlist
    {
        return $this->idxPlaylist;
    }

    public function setIdxPlaylist(?Playlist $idxPlaylist): static
    {
        $this->idxPlaylist = $idxPlaylist;

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
