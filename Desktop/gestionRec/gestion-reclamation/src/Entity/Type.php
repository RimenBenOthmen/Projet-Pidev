<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table(name="type", indexes={@ORM\Index(name="idcitoy", columns={"idcitoy"}), @ORM\Index(name="idreclam", columns={"idreclam", "idcitoy"}), @ORM\Index(name="IDX_8CDE5729E5FC7552", columns={"idreclam"})})
 * @ORM\Entity(repositoryClass="App\Repository\TypeRepository")
 */
class Type
{
    /**
     * @var int
     *
     * @ORM\Column(name="idtype", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtype;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=11, nullable=false, options={"default"="'non traite'"})
     */
    private $etat = '\'non traite\'';

    /**
     * @var \Reclamation
     *
     * @ORM\ManyToOne(targetEntity="Reclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idreclam", referencedColumnName="idreclam")
     * })
     */
    private $idreclam;

    /**
     * @var \Citoyen
     *
     * @ORM\ManyToOne(targetEntity="Citoyen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcitoy", referencedColumnName="idcitoy")
     * })
     */
    private $idcitoy;

    public function getIdtype(): ?int
    {
        return $this->idtype;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIdreclam(): ?Reclamation
    {
        return $this->idreclam;
    }

    public function setIdreclam(?Reclamation $idreclam): self
    {
        $this->idreclam = $idreclam;

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
