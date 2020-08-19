<?php

use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="compte_client")
 **/

class Compte
{
    /** @Id @Column(type="integer") @GeneratedValue **/ 
    private  $id;
    /** @Column(type="integer") **/
    private  $numeroCte;
    /** @Column(type="integer") **/
    private  $clerib;
    /** @Column(type="integer") **/
    private  $cleribmor;
    /** @Column(type="string") **/
    private  $agence;
    /** @Column(type="integer") **/
    private  $solde;
    /** @Column(type="integer") **/
    private  $soldemor;
    /** @Column(type="integer") **/
    private  $agios;
    /** @Column(type="integer") **/
    private  $fraisph;
    /** @Column(type="string") **/
    private  $dateou;
    /** @Column(type="string") **/
    private  $dateoum;
    private $etat;
     /**
     * Many comptes have one client. This is the inverse side.
     * @ManyToOne(targetEntity="Clientph", inversedBy="comptes")
     * @joincolumn(name="cltphy_id",referencedColumnName="id")
     */
   
    private  $cltphy_id;
     /**
     * Many comptes have one client. This is the inverse side.
     * @ManyToOne(targetEntity="Clientmor", inversedBy="comptes")
     * @joincolumn(name="cltmor_id",referencedColumnName="id")
     */
    private  $cltmoral_id;
    
    /**
     * Many comptes have one agence. This is the inverse side.
     * @ManyToOne(targetEntity="Agence", inversedBy="comptes")
     * @joincolumn(name="agence_id",referencedColumnName="id")
     */
    private $agences;
        /**
     * Many comptes have one typecompte. This is the inverse side.
     * @ManyToOne(targetEntity="TypeCompte", inversedBy="comptes")
     * @joincolumn(name="typecompte_id",referencedColumnName="id")
     */

    private  $typeCompte_id;
    
    public function __construct()
    {

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
 
    public function getNumeroCte()
    {
        return $this->numeroCte;
    }
 
    public function setNumeroCte($numeroCte)
    {
        $this->numeroCte = $numeroCte;

        return $this;
    }

 
    public function getClerib()
    {
        return $this->clerib;
    }

    public function setClerib($clerib)
    {
        $this->clerib = $clerib;

        return $this;
    }

    public function getAgence()
    {
        return $this->agence;
    }


    public function setAgence($agence)
    {
        $this->agence = $agence;

        return $this;
    }


    public function getSolde()
    {
        return $this->solde;
    }

 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }


    public function getSoldemor()
    {
        return $this->soldemor;
    }


    public function setSoldemor($soldemor)
    {
        $this->soldemor = $soldemor;

        return $this;
    }


    public function getAgios()
    {
        return $this->agios;
    }


    public function setAgios($agios)
    {
        $this->agios = $agios;

        return $this;
    }

    /**
     * Get the value of dateou
     */ 
    public function getDateou()
    {
        return $this->dateou;
    }


    public function setDateou($dateou)
    {
        $this->dateou = $dateou;

        return $this;
    }
 
    public function getFraisph()
    {
        return $this->fraisph;
    }

    public function setFraisph($fraisph)
    {
        $this->fraisph = $fraisph;

        return $this;
    }

 
    public function getEtat()
    {
        return $this->etat;
    }

    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }


    public function getCltphy_id()
    {
        return $this->cltphy_id;
    }


    public function setCltphy_id($cltphy_id)
    {
        $this->cltphy_id = $cltphy_id;

        return $this;
    }
 
    public function getCltmoral_id()
    {
        return $this->cltmoral_id;
    }

 
    public function setCltmoral_id($cltmoral_id)
    {
        $this->cltmoral_id = $cltmoral_id;

        return $this;
    }
 
    public function getTypeCompte_id()
    {
        return $this->typeCompte_id;
    }


    public function setTypeCompte_id($typeCompte_id)
    {
        $this->typeCompte_id = $typeCompte_id;

        return $this;
    }
 
    public function getCleribmor()
    {
        return $this->cleribmor;
    }
 
    public function setCleribmor($cleribmor)
    {
        $this->cleribmor = $cleribmor;

        return $this;
    }


    public function getDateoum()
    {
        return $this->dateoum;
    }


    public function setDateoum($dateoum)
    {
        $this->dateoum = $dateoum;

        return $this;
    }
}
