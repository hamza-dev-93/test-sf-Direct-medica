<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContratRepository")
 */
class Contrat
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
     * @ORM\ManyToMany(targetEntity="App\Entity\Affilie", inversedBy="contrat", cascade={"persist"})
     */
    private $affilies;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->affilies = new ArrayCollection();
    }

    /**
     * getId
     *
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }
   
    /**
     * getLibelle
     *
     * @return string
     */
    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    /**
     * setLibelle
     *
     * @param string $libelle
     * @return void
     */
    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Affilie[]
     */
    public function getAffilies(): Collection
    {
        return $this->affilies;
    }

    /**
     * addAffily
     *
     * @param Affilie $affily
     * @return void
     */
    public function addAffily(Affilie $affily): self
    {
        if (!$this->affilies->contains($affily)) {
            $this->affilies[] = $affily;
            $affily->addContrat($this);
        }

        return $this;
    }

    /**
     * addAffilie
     *
     * @param Affilie $affily
     * @return void
     */
    public function addAffilie(Affilie $affily): self
    {
        return $this->addAffily();
    }

    /**
     * removeAffily
     *
     * @param Affilie $affily
     * @return void
     */
    public function removeAffily(Affilie $affily): self
    {
        if ($this->affilies->contains($affily)) {
            $this->affilies->removeElement($affily);
            $affily->removeContrat($this);
        }

        return $this;
    }

    public function removeAffilies(Affilie $affily): self
    {
        if ($this->affilies->contains($affily)) {
            $this->affilies->removeElement($affily);
            $affily->removeContrat($this);
        }

        return $this;
    }

    public function __toString(){
        
        return $this->libelle;        
        // return $this->id;
    }
}
