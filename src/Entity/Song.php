<?php

namespace App\Entity;

use App\Repository\SongRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SongRepository::class)]
class Song
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $sonName = null;

    #[ORM\Column]
    private ?int $sonDuration = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $sonReleaseDate = null;

    #[ORM\Column]
    private ?int $sonPlayCount = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSonName(): ?string
    {
        return $this->sonName;
    }

    public function setSonName(string $sonName): static
    {
        $this->sonName = $sonName;

        return $this;
    }

    public function getSonDuration(): ?int
    {
        return $this->sonDuration;
    }

    public function setSonDuration(int $sonDuration): static
    {
        $this->sonDuration = $sonDuration;

        return $this;
    }

    public function getSonReleaseDate(): ?\DateTimeInterface
    {
        return $this->sonReleaseDate;
    }

    public function setSonReleaseDate(\DateTimeInterface $sonReleaseDate): static
    {
        $this->sonReleaseDate = $sonReleaseDate;

        return $this;
    }

    public function getSonPlayCount(): ?int
    {
        return $this->sonPlayCount;
    }

    public function setSonPlayCount(int $sonPlayCount): static
    {
        $this->sonPlayCount = $sonPlayCount;

        return $this;
    }
}
