<?php

namespace App\Entity;

use App\Repository\SondageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SondageRepository::class)]
class Sondage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Aliment $Aliment1 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Aliment $Aliment2 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Aliment $Aliment3 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Aliment $Aliment4 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Aliment $Aliment5 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Aliment $Aliment6 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Aliment $Aliment7 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Aliment $Aliment8 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Aliment $Aliment9 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Aliment $Aliment10 = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $DateCreation = null;

    #[ORM\ManyToOne(inversedBy: 'sondages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $idUtilisateur = null;

    public function __construct(Utilisateur $userC)
    {
        $this->DateCreation = new \DateTimeImmutable();
        $this->idUtilisateur = $userC;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAliment1(): ?Aliment
    {
        return $this->Aliment1;
    }

    public function setAliment1(?Aliment $Aliment1): self
    {
        $this->Aliment1 = $Aliment1;

        return $this;
    }

    public function getAliment2(): ?Aliment
    {
        return $this->Aliment2;
    }

    public function setAliment2(?Aliment $Aliment2): self
    {
        $this->Aliment2 = $Aliment2;

        return $this;
    }

    public function getAliment3(): ?Aliment
    {
        return $this->Aliment3;
    }

    public function setAliment3(?Aliment $Aliment3): self
    {
        $this->Aliment3 = $Aliment3;

        return $this;
    }

    public function getAliment4(): ?Aliment
    {
        return $this->Aliment4;
    }

    public function setAliment4(?Aliment $Aliment4): self
    {
        $this->Aliment4 = $Aliment4;

        return $this;
    }

    public function getAliment5(): ?Aliment
    {
        return $this->Aliment5;
    }

    public function setAliment5(?Aliment $Aliment5): self
    {
        $this->Aliment5 = $Aliment5;

        return $this;
    }

    public function getAliment6(): ?Aliment
    {
        return $this->Aliment6;
    }

    public function setAliment6(?Aliment $Aliment6): self
    {
        $this->Aliment6 = $Aliment6;

        return $this;
    }

    public function getAliment7(): ?Aliment
    {
        return $this->Aliment7;
    }

    public function setAliment7(?Aliment $Aliment7): self
    {
        $this->Aliment7 = $Aliment7;

        return $this;
    }

    public function getAliment8(): ?Aliment
    {
        return $this->Aliment8;
    }

    public function setAliment8(?Aliment $Aliment8): self
    {
        $this->Aliment8 = $Aliment8;

        return $this;
    }

    public function getAliment9(): ?Aliment
    {
        return $this->Aliment9;
    }

    public function setAliment9(?Aliment $Aliment9): self
    {
        $this->Aliment9 = $Aliment9;

        return $this;
    }

    public function getAliment10(): ?Aliment
    {
        return $this->Aliment10;
    }

    public function setAliment10(?Aliment $Aliment10): self
    {
        $this->Aliment10 = $Aliment10;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeImmutable
    {
        return $this->DateCreation;
    }

    public function setDateCreation(\DateTimeImmutable $DateCreation): self
    {
        $this->DateCreation = $DateCreation;

        return $this;
    }

    public function getIdUtilisateur(): ?Utilisateur
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?Utilisateur $idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }
}
