<?php

namespace App\Entity;

use App\Repository\AlimentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlimentRepository::class)]
class Aliment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomFr = null;

    #[ORM\Column(length: 255)]
    private ?string $nomScientifique = null;

    #[ORM\OneToOne(mappedBy: 'aliment', cascade: ['persist', 'remove'])]
    private ?InformationNutritionnelle $informationNutritionnelle = null;

    #[ORM\ManyToOne(inversedBy: 'aliments')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Groupe $Groupe = null;

    #[ORM\ManyToOne(inversedBy: 'aliments')]
    #[ORM\JoinColumn(nullable: false)]
    private ?SousGroupe $SousGroupe = null;

    #[ORM\ManyToOne(inversedBy: 'aliments')]
    #[ORM\JoinColumn(nullable: false)]
    private ?SousSousGroupe $SousSousGroupe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFr(): ?string
    {
        return $this->nomFr;
    }

    public function setNomFr(string $nomFr): self
    {
        $this->nomFr = $nomFr;

        return $this;
    }

    public function getNomScientifique(): ?string
    {
        return $this->nomScientifique;
    }

    public function setNomScientifique(string $nomScientifique): self
    {
        $this->nomScientifique = $nomScientifique;

        return $this;
    }

    public function getInformationNutritionnelle(): ?InformationNutritionnelle
    {
        return $this->informationNutritionnelle;
    }

    public function setInformationNutritionnelle(?InformationNutritionnelle $informationNutritionnelle): self
    {
        // unset the owning side of the relation if necessary
        if ($informationNutritionnelle === null && $this->informationNutritionnelle !== null) {
            $this->informationNutritionnelle->setAliment(null);
        }

        // set the owning side of the relation if necessary
        if ($informationNutritionnelle !== null && $informationNutritionnelle->getAliment() !== $this) {
            $informationNutritionnelle->setAliment($this);
        }

        $this->informationNutritionnelle = $informationNutritionnelle;

        return $this;
    }

    public function getGroupe(): ?Groupe
    {
        return $this->Groupe;
    }

    public function setGroupe(?Groupe $Groupe): self
    {
        $this->Groupe = $Groupe;

        return $this;
    }

    public function getSousGroupe(): ?SousGroupe
    {
        return $this->SousGroupe;
    }

    public function setSousGroupe(?SousGroupe $SousGroupe): self
    {
        $this->SousGroupe = $SousGroupe;

        return $this;
    }

    public function getSousSousGroupe(): ?SousSousGroupe
    {
        return $this->SousSousGroupe;
    }

    public function setSousSousGroupe(?SousSousGroupe $SousSousGroupe): self
    {
        $this->SousSousGroupe = $SousSousGroupe;

        return $this;
    }
}
