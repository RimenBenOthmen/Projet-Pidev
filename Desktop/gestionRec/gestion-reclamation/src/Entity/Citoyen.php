<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Citoyen
 *
 * @ORM\Table(name="citoyen")
 * @ORM\Entity(repositoryClass="App\Repository\CitoyenRepository")
 */
class Citoyen
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcitoy", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcitoy;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     * @Assert\NotBlank(message="le prom doit etre non vide")
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     * @Assert\NotBlank(message="le ville doit etre non vide")
     * @ORM\Column(name="villecitoyen", type="string", length=50, nullable=false)
     */
    private $villecitoyen;

    /**
     * @var int
     *@Assert\NotBlank(message="le cin doit etre non vide")
     *
     *
     * @ORM\Column(name="cin", type="integer", nullable=false)
     */
    private $cin;

    /**
     * @var int
     *@Assert\NotBlank(message="le numero de telephone doit etre non vide")
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var string
     *@Assert\NotBlank(message="le mot depasse doit etre non vide")
     * @ORM\Column(name="motpass", type="string", length=50, nullable=false)
     */
    private $motpass;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=50, nullable=false)
     */
    private $photo;

    public function getIdcitoy(): ?int
    {
        return $this->idcitoy;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getVillecitoyen(): ?string
    {
        return $this->villecitoyen;
    }

    public function setVillecitoyen(string $villecitoyen): self
    {
        $this->villecitoyen = $villecitoyen;

        return $this;
    }

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(int $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getMotpass(): ?string
    {
        return $this->motpass;
    }

    public function setMotpass(string $motpass): self
    {
        $this->motpass = $motpass;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }


}
