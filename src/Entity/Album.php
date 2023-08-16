<?php

namespace App\Entity;

use App\Repository\AlbumRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlbumRepository::class)]
class Album
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $albName = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $albReleaseDate = null;

    #[ORM\ManyToOne(inversedBy: 'albums')]
    #[ORM\JoinColumn(nullable: false)]
    private ?user $idxUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAlbName(): ?string
    {
        return $this->albName;
    }

    public function setAlbName(string $albName): static
    {
        $this->albName = $albName;

        return $this;
    }

    public function getAlbReleaseDate(): ?\DateTimeInterface
    {
        return $this->albReleaseDate;
    }

    public function setAlbReleaseDate(\DateTimeInterface $albReleaseDate): static
    {
        $this->albReleaseDate = $albReleaseDate;

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
