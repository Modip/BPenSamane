<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="agence")
 */
class Agence
{
    /** @Id @Column(type="integer") @GeneratedValue **/ 
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $region;
    /**
     * One agence has many compte. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="agence")
     */
    private $comptes;
    public function __construct()
    {
        $this->comptes = new ArrayCollection();

    }
 
     /**
      * Get the value of id
      */ 
     public function getId()
     {
         return $this->id;
     }
 
     /**
      * Set the value of id
      *
      * @return  self
      */ 
     public function setId($id)
     {
        $this->id = $id;
 
        return $this;
     }
 
     /**
      * Get the value of nomph
      */ 
     public function getNom()
     {
         return $this->nom;
     }
 
     /**
      * Set the value of nom
      *
      * @return  self
      */ 
    public function setNom($nom)
     {
        $this->nom = $nom;
 
        return $this;
    }
 
     /**
      * Get the value of region
      */ 
    public function getRegion()
    {
        return $this->region;
    }
 
    /**
    * Set the value of region
    *
    * @return  self
    */ 
     public function setRegion($region)
    {
        $this->region = $region;
 
        return $this;
    }
}
?>