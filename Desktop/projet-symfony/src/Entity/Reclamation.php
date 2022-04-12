<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="idcitoy", columns={"idcitoy"})})
 * @ORM\Entity(repositoryClass="App\Repository\ReclamationRepository")
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idreclam", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreclam;

    /**
     * @var int
     *
     * @ORM\Column(name="numerorec", type="integer", nullable=false)
     */
    private $numerorec;

    /**
     * @var string
     *
     * @ORM\Column(name="typereclamation", type="string", length=50, nullable=false)
     */
    private $typereclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionrec", type="string", length=50, nullable=false)
     */
    private $descriptionrec;

    /**
     * @var string
     *
     * @ORM\Column(name="villerec", type="string", length=50, nullable=false)
     */
    private $villerec;

    /**
     * @var \Citoyen
     *
     * @ORM\ManyToOne(targetEntity="Citoyen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcitoy", referencedColumnName="idcitoy")
     * })
     */
    private $idcitoy;

    public function getIdreclam(): ?int
    {
        return $this->idreclam;
    }

    public function getNumerorec(): ?int
    {
        return $this->numerorec;
    }

    public function setNumerorec(int $numerorec): self
    {
        $this->numerorec = $numerorec;

        return $this;
    }

    public function getTypereclamation(): ?string
    {
        return $this->typereclamation;
    }

    public function setTypereclamation(string $typereclamation): self
    {
        $this->typereclamation = $typereclamation;

        return $this;
    }

    public function getDescriptionrec(): ?string
    {
        return $this->descriptionrec;
    }

    public function setDescriptionrec(string $descriptionrec): self
    {
        $this->descriptionrec = $descriptionrec;

        return $this;
    }

    public function getVillerec(): ?string
    {
        return $this->villerec;
    }

    public function setVillerec(string $villerec): self
    {
        $this->villerec = $villerec;

        return $this;
    }

    public function getIdcitoy(): ?Citoyen
    {
        return $this->idcitoy;
    }

    public function setIdcitoy(?Citoyen $idcitoy): self
    {
        $this->idcitoy = $idcitoy;

        return $this;
    }


}
