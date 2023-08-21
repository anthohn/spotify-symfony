<?php

namespace App\Entity;

use App\Repository\PlaylistRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlaylistRepository::class)]
class Playlist
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $plaName = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $plaCreationDate = null;

    #[ORM\Column(length: 255)]
    private ?string $plaImage = null;

    #[ORM\ManyToOne(inversedBy: 'playlists')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $idxUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlaName(): ?string
    {
        return $this->plaName;
    }

    public function setPlaName(string $plaName): static
    {
        $this->plaName = $plaName;

        return $this;
    }

    public function getPlaCreationDate(): ?\DateTimeInterface
    {
        return $this->plaCreationDate;
    }

    public function setPlaCreationDate(\DateTimeInterface $plaCreationDate): static
    {
        $this->plaCreationDate = $plaCreationDate;

        return $this;
    }

    public function getPlaImage(): ?string
    {
        return $this->plaImage;
    }

    public function setPlaImage(string $plaImage): static
    {
        $this->plaImage = $plaImage;

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
}
