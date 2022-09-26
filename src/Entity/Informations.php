<?php

namespace App\Entity;

use App\Repository\InformationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InformationsRepository::class)]
class Informations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $numero = null;

    #[ORM\Column(length: 255)]
    private ?string $horaires = null;

    #[ORM\Column(length: 255)]
    private ?string $introText = null;

    #[ORM\Column(length: 255)]
    private ?string $pourquoiNous = null;

    #[ORM\Column(length: 255)]
    private ?string $avis = null;

    #[ORM\Column(length: 255)]
    private ?string $contact = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $introText1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $introText2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $introText3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $introText4 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $introText5 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $introText6 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proms = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getHoraires(): ?string
    {
        return $this->horaires;
    }

    public function setHoraires(string $horaires): self
    {
        $this->horaires = $horaires;

        return $this;
    }

    public function getIntroText(): ?string
    {
        return $this->introText;
    }

    public function setIntroText(string $introText): self
    {
        $this->introText = $introText;

        return $this;
    }

    public function getPourquoiNous(): ?string
    {
        return $this->pourquoiNous;
    }

    public function setPourquoiNous(string $pourquoiNous): self
    {
        $this->pourquoiNous = $pourquoiNous;

        return $this;
    }

    public function getAvis(): ?string
    {
        return $this->avis;
    }

    public function setAvis(string $avis): self
    {
        $this->avis = $avis;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getIntroText1(): ?string
    {
        return $this->introText1;
    }

    public function setIntroText1(?string $introText1): self
    {
        $this->introText1 = $introText1;

        return $this;
    }

    public function getIntroText2(): ?string
    {
        return $this->introText2;
    }

    public function setIntroText2(?string $introText2): self
    {
        $this->introText2 = $introText2;

        return $this;
    }

    public function getIntroText3(): ?string
    {
        return $this->introText3;
    }

    public function setIntroText3(?string $introText3): self
    {
        $this->introText3 = $introText3;

        return $this;
    }

    public function getIntroText4(): ?string
    {
        return $this->introText4;
    }

    public function setIntroText4(?string $introText4): self
    {
        $this->introText4 = $introText4;

        return $this;
    }

    public function getIntroText5(): ?string
    {
        return $this->introText5;
    }

    public function setIntroText5(string $introText5): self
    {
        $this->introText5 = $introText5;

        return $this;
    }

    public function getIntroText6(): ?string
    {
        return $this->introText6;
    }

    public function setIntroText6(?string $introText6): self
    {
        $this->introText6 = $introText6;

        return $this;
    }

    public function getProms(): ?string
    {
        return $this->proms;
    }

    public function setProms(?string $proms): self
    {
        $this->proms = $proms;

        return $this;
    }
}
