<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AffilieRepository")
 */
class Affilie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Contrat", mappedBy="affilies")
     */
    private $contrat;

    public function __construct()
    {
        $this->contrat = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Contrat[]
     */
    public function getContrat(): Collection
    {
        return $this->contrat;
    }

    public function addContrat(Contrat $contrat): self
    {
        if (!$this->contrat->contains($contrat)) {
            $this->contrat[] = $contrat;
        }

        return $this;
    }

    public function removeContrat(Contrat $contrat): self
    {
        if ($this->contrat->contains($contrat)) {
            $this->contrat->removeElement($contrat);
        }

        return $this;
    }

    public function __toString(){
        
        return $this->libelle;        
        // return $this->id;
    }
}
