<?php

namespace App\Entity;

use App\Repository\AddsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AddsRepository::class)]
class Adds
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $addsAddedDate = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $idxUser = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?playlist $idxPlaylist = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAddsAddedDate(): ?\DateTimeInterface
    {
        return $this->addsAddedDate;
    }

    public function setAddsAddedDate(\DateTimeInterface $addsAddedDate): static
    {
        $this->addsAddedDate = $addsAddedDate;

        return $this;
    }

    public function getIdxUser(): ?User
    {
        return $this->idxUser;
    }

    public function setIdxUser(?User $idxUser): static
    {
        $this->idxUser = $idxUser;

        return $this;
    }

    public function getIdxPlaylist(): ?playlist
    {
        return $this->idxPlaylist;
    }

    public function setIdxPlaylist(?playlist $idxPlaylist): static
    {
        $this->idxPlaylist = $idxPlaylist;

        return $this;
    }
}
