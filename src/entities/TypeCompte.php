<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @Entity @Table(name="type_compte")
 **/

class TypeCompte
{
    /** @Id @Column(type="integer") @GeneratedValue **/ 
    private  $id;
    /** @Column(type="string") **/
    private  $libelle;

       /**
     * One typecompte has many compte. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="typecompte_id")
     */
    private $comptes;

    public function __construct()
    {
        $this->comptes = new ArrayCollection();  
    }

    public function getId()
    {
    return $this->id;
    }

    public function setId($id)
    {
    $this->id = $id;

    return $this;
    }

    public function getLibelle()
    {
    return $this->libelle;
    }

    public function setLibelle($libelle)
    {
    $this->libelle = $libelle;

    return $this;
    }
}